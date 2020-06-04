<?php

namespace App\Admin\Controllers;

use App\Models\Continent;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ContinentsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '大洲';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Continent());

        $grid->column('id', __('Id'))->hide();
        $grid->column('cn_name', __('中文名'));
        $grid->column('en_name', __('英文名'));
        $grid->column('ping_name', __('拼音名'));
        $grid->column('created_at', __('创建时间'))->hide();
        $grid->column('updated_at', __('修改时间'))->hide();
        $grid->disableFilter();
        $grid->disableExport();
        $grid->disableActions();
        $grid->disableCreateButton();
        $grid->disableRowSelector();
        $grid->paginate(10);
        return $grid;
    }


    public function index(Content $content)
    {
        $content->breadcrumb(
            ['text' => '国家与地区'],
            ['text' => '大洲']
        );
        return parent::index($content);
    }

}
