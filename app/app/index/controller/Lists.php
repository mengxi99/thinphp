<?php
declare (strict_types = 1);

namespace app\index\controller;
use think\facade\Db;

class Lists extends \app\BaseController {

	protected $middleware = ['BrowseUser'];

	public function initialize() {
		parent::initialize();

		$this->nav = get_tree(Db::name('nav')->order('sort', 'asc')->select()->toArray());
	}

	public function index($id = '') {

		$where = [];

	
		
		
	     $pid = Db::name('category')->where('id',$id)->value('pid');  
	     
	     if($pid==0)
	     {
	       $clist= Db::name('category')->where('pid',$id)->column('id');  
	       
	       $where[] = ['c_id', 'in', $clist];
	       
	     }
	     else {
	        	$where[] = ['c_id', '=', $id];
	     }
	     
	

		$list = Db::name('news_index')->where('status', 1)->where($where)->order('create_time', 'desc')->paginate(5);
		$page = $list->render();
		$navtitle = Db::name('category')->where('id', $id)->find();

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
		 
			$category = Db::name('category')->where('pid', $navtitle['pid'])->order('sort asc')->select()->toArray();

			foreach ($category as $k => $v) {

				if ($v['model'] == 3) {
					$category[$k]['id'] = Db::name('page_index')->where('c_id', $v['id'])->value('id');
				}
			}

		}
		
		if(count($category)==0)
		{
		 	$category = Db::name('category')->where('id',$id)->order('sort asc')->select()->toArray();   
		    
		}
		
		

		$info = [
			'list' => $list,
			'page' => $page,
			'category' => $category,
			'navtitle' => $navtitle,
			'upnavtitle' => $upnavtitle,
			'nav' => $this->nav,
			'banner' => $banner,

		];

		$mb = $navtitle['template'] ? $navtitle['template'] : "index";

		return $this->fetch($mb, $info);
	}

	public function show($id = '') {

		$model = Db::name('news_index')->where('id', $id)->find();

		$where[] = ['c_id', '=', $model['c_id']];

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

			$category = Db::name('category')->where('pid', $navtitle['pid'])->select();
			foreach ($category as $k => $v) {

				if ($v['model'] == 3) {
					$category[$k]['id'] = Db::name('page_index')->where('c_id', $v['id'])->value('id');
				}
			}
		}
		
				if(count($category)==0)
		{
		 	$category = Db::name('category')->where('id',$model['c_id'])->order('sort asc')->select()->toArray();   
		    
		}

		$front = Db::name('news_index')->where($where)->where("id", ">", $id)->where('status', 1)->limit(1)->find();
		$after = Db::name('news_index')->where($where)->where("id", "<", $id)->where('status', 1)->limit(1)->find();
		


		$info = [
			'model' => $model,
			'front' => $front,
			'after' => $after,
			'category' => $category,
			'navtitle' => $navtitle,
			'upnavtitle' => $upnavtitle,
			'nav' => $this->nav,
			'banner' => $banner,

		];

		return $this->fetch('', $info);

	}

}
