<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\GpPrognosi;
use App\Models\GpList;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class GpPrognosiController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new GpPrognosi(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->model()->orderby('id', 'desc');
            $grid->column('title');
            $grid->column('description');
            $grid->column('content');
            $grid->column('is_right')->using([1=>'正确',2=>'错误'])->label([1=>'success',2=>'danger']);
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
        return Show::make($id, new GpPrognosi(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('description');
            $show->field('content');
            $show->field('is_right');
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
        return Form::make(new GpPrognosi(), function (Form $form) {
            $form->display('id');
            $form->select('gp_id', '项目名称')->options(GpList::getNameList())->required();
            $form->text('title');
            $form->text('description');
            $form->textarea('content');
            $form->radio('is_right')->options([1=>'正确',2=>'错误']);

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
