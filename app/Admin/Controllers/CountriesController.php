<?php

namespace App\Admin\Controllers;

use App\Models\Country;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CountriesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '国家';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Country());

        $grid->column('id', __('Id'));
        $grid->column('cn_name', __('国家中文名'));
        $grid->column('en_name', __('国家英文名'));
        $grid->column('ping_name', __('国家拼音名'));
        $grid->column('continent.cn_name', __('大洲中文名'));
        $grid->column('code', __('ISO 三字代码'));
        $grid->column('low_code', __('ISO 二字代码'));
        $grid->column('remark', __('备注'))->hide();
        $grid->column('created_at', __('创建时间'))->hide();
        $grid->column('updated_at', __('修改时间'));
        $grid->paginate(50);
        $grid->disableFilter();
        $grid->disableBatchActions();
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
        $show = new Show(Country::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('cn_name', __('Cn name'));
        $show->field('en_name', __('En name'));
        $show->field('ping_name', __('Ping name'));
        $show->field('continent_id', __('Continent id'));
        $show->field('code', __('Code'));
        $show->field('low_code', __('Low code'));
        $show->field('remark', __('Remark'));
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
        $form = new Form(new Country());

        $form->text('cn_name', __('Cn name'));
        $form->text('en_name', __('En name'));
        $form->text('ping_name', __('Ping name'));
        $form->number('continent_id', __('Continent id'));
        $form->text('code', __('Code'));
        $form->text('low_code', __('Low code'));
        $form->textarea('remark', __('Remark'));

        return $form;
    }
}
