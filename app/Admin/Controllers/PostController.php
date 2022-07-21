<?php

namespace App\Admin\Controllers;

use App\Models\Post;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class PostController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        //方式一：
//        return Grid::make(new Post(), function (Grid $grid) {
//        $grid->model()->with(['author']);
//            $grid->column('author.name');
//        });

        //方式二：
//        return Grid::make( Post::with(['author']), function (Grid $grid) {
//            $grid->column('id')->sortable();
//            $grid->column('title');
//            $grid->column('content');
//            $grid->column('author.name');
//            $grid->column('created_at');
//            $grid->column('updated_at')->sortable();
//            $grid->filter(function (Grid\Filter $filter) {
//                $filter->equal('id');
//
//            });
//        });

        // 一对多
        return Grid::make(Post::with(['comments']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('content')->responsive(2);

            $grid->column('comments','评论数')->display(function () {
                $count = count($this->comments);
                return $count;
            });

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
        return Show::make($id, new Post(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('content');
            $show->field('user_id');
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
        return Form::make(new Post(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->text('content');
            $form->text('user_id');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
