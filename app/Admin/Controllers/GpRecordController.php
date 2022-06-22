<?php

namespace App\Admin\Controllers;

use App\Models\GpList;
use App\Models\GpRecord;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class GpRecordController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(GpRecord::with(['gpList']),function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->model()->orderby('id', 'desc');
            $grid->column('gpList.name','项目名称');
            $grid->column('start_price');
            $grid->column('end_price');
            $grid->column('avg');
            $grid->column('max_price');
            $grid->column('min_price');
            $grid->column('change_hand');
            $grid->column('qrr');
            $grid->column('gap','振幅');
            $grid->column('deal_num');
            $grid->column('20_day');
            $grid->column('60_day');
            $grid->column('main_out');
            $grid->column('created_at');

            $grid->filter(function (Grid\Filter $filter) {
                // 展开过滤器
                $filter->expand();
                // 更改为 panel 布局
                $filter->panel();
                $filter->equal('gpList.name','项目名称');
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new GpRecord(), function (Show $show) {
            $show->field('id');
            $show->field('code');
            $show->field('name');
            $show->field('start_price');
            $show->field('end_price');
            $show->field('change_hand');
            $show->field('qrr');
            $show->field('out_num');
            $show->field('in_num');
            $show->field('deal_num');
            $show->field('avg');
            $show->field('max_price');
            $show->field('min_price');
            $show->field('20_day');
            $show->field('60_day');
            $show->field('main_out');
            $show->field('img');
            $show->field('bak');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new GpRecord(), function (Form $form) {
            $form->column(4, function (Form $form) {
                $form->select('gp_id','项目名称')->options(GpList::getNameList())->width(8,4)->required();
                $form->decimal('start_price')->width(8,4);
                $form->decimal('end_price')->width(8,4);
                $form->text('change_hand')->width(8,4);
                $form->text('main_out')->width(8,4);
                $form->text('gap','振幅')->width(8,4);
                $form->textarea('bak')->width(8,4);
            });

            $form->column(4, function (Form $form) {
                $form->text('qrr')->width(8,4);
                $form->text('out_num')->width(8,4);
                $form->text('in_num')->width(8,4);
                $form->text('deal_num')->width(8,4);
                $form->image('img','k线图')->width(8,4);
            });

            $form->column(4, function (Form $form) {
                $form->text('avg')->width(8,4);
                $form->decimal('max_price')->width(8,4);
                $form->decimal('min_price')->width(8,4);
                $form->text('20_day')->width(8,4);
                $form->text('60_day')->width(8,4);
            });
        });
    }
}
