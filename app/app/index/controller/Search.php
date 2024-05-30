<?php
declare (strict_types = 1);

namespace app\index\controller;
use think\facade\Db;

class Search extends \app\BaseController {

	public function initialize() {
		parent::initialize();

		$this->nav = get_tree(Db::name('nav')->order('sort', 'asc')->select()->toArray());
	}

     	public function index($key = '') {

	    $where[] = ['name', 'like', '%' . $key . '%'];

		$list = Db::name('news_index')->where('status', 1)->where($where)->order('create_time', 'desc')->paginate(12);
		$page = $list->render();
	

		$banner = Db::name('ad_index')->where('id', 35)->find();
		
	

		$info = [
			'list' => $list,
			'page' => $page,
			
			'nav' => $this->nav,
			'banner' => $banner,

			'navtitle' => ['pid' => 0],

		];

		$mb = 'lists/search';

		return $this->fetch($mb, $info);
	}



}
