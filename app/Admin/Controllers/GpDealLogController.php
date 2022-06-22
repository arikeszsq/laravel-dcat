<?php

namespace App\Admin\Controllers;

use App\Models\GpDealLog;
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
        return Grid::make(new GpDealLog(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('code');
            $grid->column('type');
            $grid->column('num');
            $grid->column('price');
            $grid->column('time');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
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
            $form->text('code');
            $form->text('type');
            $form->text('num');
            $form->text('price');
            $form->text('time');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
