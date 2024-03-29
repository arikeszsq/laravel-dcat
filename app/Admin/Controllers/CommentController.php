<?php

namespace App\Admin\Controllers;

use App\Models\Comment;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class CommentController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Comment(new Comment(['post'])), function (Grid $grid) {

            $grid->column('post.title');


            $grid->column('id')->sortable();
            $grid->column('user_id');
            $grid->column('content');
            $grid->column('title');
            $grid->column('img');
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
        return Show::make($id, new Comment(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('content');
            $show->field('title');
            $show->field('img');
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
        return Form::make(new Comment(), function (Form $form) {
            $form->display('id');
            $form->text('user_id');
            $form->text('content');
            $form->text('title');
            $form->text('img');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
