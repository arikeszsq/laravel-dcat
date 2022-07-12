<?php

namespace App\Admin\Controllers;

use App\Admin\Metrics\Examples;
use App\Admin\Repositories\GpPrognosi;
use App\Http\Controllers\Controller;
use App\Models\GpDealLog;
use App\Models\GpRecord;
use Dcat\Admin\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        $deal_logs = GpDealLog::query()->where('time', date('Y-m-d'))->get();
        $sale_num = $sale_money = $buy_num = $buy_money = 0;
        foreach ($deal_logs as $log) {
            if ($log->type == 1) {
                $buy_num += $log->num;
                $buy_money += ($log->num) * ($log->price);
            } else {
                $sale_num += $log->num;
                $sale_money += ($log->num) * ($log->price);
            }
        }

        $record = GpRecord::query()->where('gp_id', 1)
            ->orderBy('id', 'desc')
            ->limit(2)
            ->get()
            ->toArray();

        $text = '';
        $status = 0;
        if (count($record) == 2) {
            $today = $record[0];
            $yesterday = $record[1];
            $num = $today['deal_num'] - $yesterday['deal_num'];
            if ($num > 0) {
                $text .= '放量';
            } else {
                $text .= '缩量';
            }

            $status = $today['end_price'] - $yesterday['end_price'];
            if ($status > 0) {
                $text .= '上涨';
            } else {
                $text .= '下跌';
            }
        }


        $data = [
            '今日购买股' => $buy_num,
            '今日购买金额' => $buy_money,
            '今日出手股' => $sale_num,
            '今日出手金额' => $sale_money,
            '缩放量' => $text
        ];

        $record = GpRecord::query()->where('gp_id', 1)
            ->orderBy('id', 'desc')
            ->first();


        $qrr = $record->qrr;
        $qrr_text = '';
        if ($qrr > 1) {
            $qrr_text .= '放量';
        } else {
            $qrr_text .= '缩量';
        }

        $data['今日量比：' . $qrr] = $qrr_text;

        if ($qrr <= 0.5) {
            $data['今日量比极度缩量区'] = '量比低于0.5为极度缩量区，市场过于清淡，这种没有继续观察的意义';
        }

        if ($qrr >= 0.5 && $qrr <= 1.5) {
            $data['今日量比'] = '属于正常范畴，一般向影响不大';
        }

        if ($qrr >= 1.5 && $qrr <= 2.5 && $status > 0) {
            $data['今日量比温和放量'] = '量价齐升，为健康,在这个区间，如果涨继续看涨';
        }

        if ($qrr >= 1.5 && $qrr <= 2.5 && $status < 0) {
            $data['今日量比温和放量'] = '量升价跌，要小心,在这个区间，跌继续看跌';
        }

        if ($qrr >= 2.5 && $qrr <= 5) {
            $data['明显放量'] = '如果此时价格正在突破，关键支撑或阻力位时，破位的概率极高';
        }

        if ($qrr >= 5 && $qrr <= 10) {
            $data['剧烈放量'] = '若在长期整理的底部，后市可期。若为高位，要思考主力出货的可能性了。';
        }

        if ($record->start_price == $record->end_price) {
            $data['十字星出现'] = '请注意';
        }

        $change_hand_avg_10 = GpRecord::query()->where('gp_id', 1)
            ->orderBy('id', 'desc')
            ->limit(10)
            ->avg('change_hand');
        $data['10日平均换手率'] = $change_hand_avg_10;

        $change_hand = $record->change_hand;

        if ($change_hand < 2) {
            $data['换手率：' . $change_hand] = '地量:地量的成交量是最真实的地量,一般在主力庄家震仓洗盘的结束点会出现';
        }

        if ($change_hand < 1) {
            $data['换手率：' . $change_hand] = '在震仓洗盘阶段,股价连续回调且换手率小于1%,表明市场浮动筹码已少,可考虑买进';
        }

        if ($change_hand > 2 && $change_hand < 3) {
            $data['换手率：' . $change_hand] = '在上升阶段股价以2%～3%换手率均量上涨表明市场筹码锁定良好,可继续持股';
        }

        if ($change_hand > 2 && $change_hand < 5) {
            $data['换手率：' . $change_hand] = '非常普通,表明没有大资金在其中动作';
        }

        if ($change_hand > 5 && $change_hand < 10) {
            $data['换手率：' . $change_hand] = '说明该股已进入活跃状态,有大资金在进出。在股价循环的第一、第二阶段,换手率连续大于5%,且涨幅不大时可及时跟进';
        }

        if ($change_hand > 10 && $change_hand < 20) {
            $data['换手率：' . $change_hand] = '非常活跃的交易,如果换手率超过15%就会大幅上涨。谨慎的追高，第二、三天一般都会有回调的机会，然后在低位进场';
        }

        if ($change_hand >= 20) {
            $data['换手率：' . $change_hand] = '非常极端的，要对其进行辨证的分析，如果在股价循环中第三、第四阶段，多数是主要的庄家在减仓,如果在股票周期中的一二期，则是主力的吸盘';
        }


        return $content->title('统计')->body(view('admin.pages.home', ['data' => $data]));

//        return $content->header('主页')
//            ->title('主页')
//            ->body(view('admin::pages.home', ['name' => $data]));
//            ->header('首页')
//            ->description('HELLO WORLD')
//            ->body(function (Row $row) {
//                $row->column(6, function (Column $column) {
//                    $column->row(Dashboard::title());
//                    $column->row(new Examples\Tickets());
//                });
//
//                $row->column(6, function (Column $column) {
//                    $column->row(function (Row $row) {
//                        $row->column(6, new Examples\NewUsers());
//                        $row->column(6, new Examples\NewDevices());
//                    });
//
//                    $column->row(new Examples\Sessions());
//                    $column->row(new Examples\ProductOrders());
//                });
//            });
    }
}
