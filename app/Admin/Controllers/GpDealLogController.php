<?php

namespace App\Admin\Controllers;

use App\Models\GpDealLog;
use App\Models\GpList;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class GpDealLogController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(GpDealLog::with(['gpList']), function (Grid $grid) {
            $grid->model()->orderby('id', 'desc');
            $grid->column('id')->sortable();
            $grid->column('gpList.name', '项目名称');

            $grid->column('type')
                ->using(GpDealLog::DealType)
                ->label([1 => 'danger', 2 => 'success']);//值不同，对应不同颜色

            $grid->column('num');
            $grid->column('price');
            $grid->column('time');

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
        return Show::make($id, new GpDealLog(), function (Show $show) {
            $show->field('id');
            $show->field('code');
            $show->field('type');
            $show->field('num');
            $show->field('price');
            $show->field('time');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new GpDealLog(), function (Form $form) {
            $form->display('id');
            $form->select('gp_id', '项目名称')->options(GpList::getNameList())->required();
            $form->radio('type')->options(GpDealLog::DealType)->default(1)->required();
            $form->number('num');
            $form->decimal('price')->width(3);
            $form->date('time');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
