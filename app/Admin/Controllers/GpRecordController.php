<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\GpRecord;
use App\Models\GpList;
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
//        $names = GpList::getNameList();
//        var_dump($names);exit;

        return Grid::make(new GpRecord(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('start_price');
            $grid->column('end_price');
            $grid->column('avg');
            $grid->column('max_price');
            $grid->column('min_price');
            $grid->column('change_hand');
            $grid->column('qrr');
            $grid->column('deal_num');
            $grid->column('20_day');
            $grid->column('60_day');
            $grid->column('main_out');
            $grid->column('created_at');

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

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
            $form->display('id');
            $form->select('name')->options(GpList::getNameList());
            $form->decimal('start_price');
            $form->decimal('end_price');
            $form->text('change_hand');
            $form->text('qrr');
            $form->text('out_num');
            $form->text('in_num');
            $form->text('deal_num');
            $form->text('avg');
            $form->decimal('max_price');
            $form->decimal('min_price');
            $form->text('20_day');
            $form->text('60_day');
            $form->text('main_out');
            $form->multipleImage('img','k线图');
            $form->textarea('bak');
        });
    }
}
