<?php


namespace App\Admin\Controllers;


use App\Admin\Metrics\Examples;
use App\Admin\Metrics\MyPage;
use App\Admin\Repositories\GpPrognosi;
use App\Http\Controllers\Controller;
use App\Models\GpDealLog;
use App\Models\GpRecord;
use Dcat\Admin\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;

class TestController extends Controller
{
    public function index(Content $content)
    {
        $data = [
          'name'=>'dcat',
          'description'=>'描述'
        ];

        return $content->body(new MyPage());

//        return $content->body(view('admin.pages.my-page',$data));

//        return $content->view('admin.pages.my-page')->with($data);


//        return $content
//            ->header('Dashboard')
//            ->description('Description...')
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
