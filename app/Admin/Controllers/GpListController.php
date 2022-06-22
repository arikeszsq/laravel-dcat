<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\GpList;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class GpListController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new GpList(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('code');
            $grid->column('name');
            $grid->column('add_price');
            $grid->column('now_price');
            $grid->column('bak');
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
        return Show::make($id, new GpList(), function (Show $show) {
            $show->field('id');
            $show->field('code');
            $show->field('name');
            $show->field('add_price');
            $show->field('now_price');
            $show->field('bak');
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
        return Form::make(new GpList(), function (Form $form) {
            $form->display('id');
            $form->text('code');
            $form->text('name');
            $form->text('add_price');
            $form->text('now_price');
            $form->text('bak');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
