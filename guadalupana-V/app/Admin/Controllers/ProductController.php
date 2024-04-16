<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Product;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        //$grid->column('image', __('Image'));
        $grid->column('image')->image();
        $grid->column('Precio', __('Precio'));
        $grid->column('Stock', __('Stock'));
        $grid->column('Descripción', __('Descripción'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('Precio', __('Precio'));
        $show->field('Stock', __('Stock'));
        $show->field('Descripción', __('Descripción'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->image('image', __('Image'));
        $form->decimal('Precio', __('Precio'));
        $form->number('Stock', __('Stock'));
        $form->text('Descripción', __('Descripción'));

        return $form;
    }
}
