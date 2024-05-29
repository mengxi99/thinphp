<?php
declare (strict_types = 1);

namespace app\admin\controller;

use app\common\model\AdminPhoto as P;
use app\common\service\AdminAdmin as S;
use app\common\util\Upload as Up;
use think\facade\Request;
use think\facade\Session;
use think\facade\Db;


class Index extends Base {
	protected $middleware = ['AdminCheck'];

	// 首页
	public function index() {
		return $this->fetch('', [
			'nickname' => get_field('admin_admin', Session::get('admin.id'), 'nickname'),
		]);
	}

	// 清除缓存
	public function cache() {
		Session::clear();
		return $this->getJson(rm());
	}

	// 菜单
	public function menu() {
		return json(get_tree(Session::get('admin.menu')));
	}

	// 欢迎页
	public function home() {

	//	return redirect('/admin.php/page.index/index');

		$date_str = "";
		$pv_str = "";
		$lmlist="";
		$lm_pv="";

		for ($i = 0; $i < 7; $i++) {

			$timeNum = "";
			$where = [];

			$timeNum = time() - 24 * 3600 * $i;

			$sutime = date('Y-m-d', $timeNum) . ' 00:00:00';
			$eutime = date('Y-m-d', $timeNum) . ' 23:59:59';
			$where[] = ['create_time', 'between', "$sutime,$eutime"];
			$pv_str.="'" .Db::name('browse_index')->where($where)->count() . "',"; 
			$date_str .= "'" . date('Y-m-d', $timeNum) . "',";

		}
		
		
	      $lm_pv= "'" .Db::name('browse_index')->where('cid',0)->count(). "',"; 
		
		  $lmlist = "'首页',"; 
		
		   $cidlist=Db::name('category')->where('pid','>',0)->field('id,title')->select();
		   
		   foreach ($cidlist as $key => $val) {
		       
		    $lm_pv.= "'" .Db::name('browse_index')->where('cid',$val['id'])->count(). "',"; 
		    
		  	$lmlist .= "'" . $val['title'] . "',"; 
		       
		       
		   }
		   
		   
		   
		   $lmnum=Db::name('category')->where('pid','>',0)->count();
		   
		   $xwnum=Db::name('news_index')->count();
		   $cpnum=Db::name('images_index')->count();
	
		
		
		
		
			$info = [
			'date_str' => $date_str,
			'pv_str' => $pv_str,
			'lmlist' => $lmlist,
			'lm_pv' => $lm_pv,
			'lmnum' => $lmnum,
			'xwnum' => $xwnum,
			'cpnum' => $cpnum,

		];

		return $this->fetch('', array_merge($this->getSystem(), $info));
	}

	// 修改密码
	public function pass() {
		if (Request::isAjax()) {
			$this->getJson(S::goPass());
		}
		return $this->fetch();
	}

	// 通用上传
	public function upload() {
		return $this->getJson(Up::putFile(Request::file(), Request::post('path')));
	}

	public function uploadVideo() {
		return $this->getJson(Up::putvideoFile(Request::file(), Request::post('path')));
	}

	// 图库选择
	public function optPhoto() {
		if (Request::isAjax()) {
			return $this->getJson(P::getAll());
		}
		return $this->fetch('', P::getPath());
	}

}
