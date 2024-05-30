<?php
declare (strict_types = 1);

namespace app\index\controller;
use think\facade\Db;

class Page extends \app\BaseController {
	protected $middleware = ['BrowseUser'];

	public function initialize() {
		parent::initialize();
		$this->nav = get_tree(Db::name('nav')->order('sort', 'asc')->select()->toArray());
	}

	public function index($id = '') {

		$model = Db::name('page_index')->where('id', $id)->find();

		$navtitle = Db::name('category')->where('id', $model['c_id'])->find();

		$upnavtitle = Db::name('category')->where('id', $navtitle['pid'])->find();

		if ($navtitle['pid'] !== 0) {

			$banner = Db::name('ad_index')->where('g_id', $navtitle['pid'])->find();
		} else {
			$banner = Db::name('ad_index')->where('g_id', $navtitle['id'])->find();
			$navtitle['pid'] = $navtitle['id'];
		}

		if ($navtitle['model'] == 3) {
			$navtitle['id'] = Db::name('page_index')->where('c_id', $navtitle['id'])->value('id');
		}

		$category = [];
		if ($navtitle['pid'] != 0) {

			$category = Db::name('category')->where('pid', $navtitle['pid'])->select()->toArray();
			foreach ($category as $k => $v) {

				if ($v['model'] == 3) {
					$category[$k]['id'] = Db::name('page_index')->where('c_id', $v['id'])->value('id');
				}
			}
		}

		if(count($category)==0)
		{
		 	$category = Db::name('page_index')->where('c_id',76)->order('sort asc')->select()->toArray();   
		    
		}
		
		


		$info = [
			'model' => $model,
			'category' => $category,
			'navtitle' => $navtitle,
			'upnavtitle' => $upnavtitle,
			'nav' =>$this->nav,
			'banner' => $banner,
		];

		$mb = $navtitle['template'] ? $navtitle['template'] : "index";

		return $this->fetch($mb, $info);
	}

}
