<?php
declare (strict_types = 1);

namespace app\admin\controller\images;

use app\common\model\Category as MC;
use app\common\model\ImagesIndex as M;
use app\common\service\ImagesIndex as S;
use think\facade\Request;

class Index extends \app\admin\controller\Base {
	protected $middleware = ['AdminCheck', 'AdminPermission'];

	public function initialize() {
		parent::initialize();
	
      //	$this->category = MC::order('sort', 'asc')->where("model",2)->where("status", 1)->select()->toArray();
      	$this->category =  get_tree(MC::order('sort', 'asc')->where("model", 2)->where("status", 1)->select()->toArray());
	}

	// 列表
	public function index() {

		if (Request::isAjax()) {
			return $this->getJson(M::getList());
		}

		return $this->fetch('', ['category' =>$this->category]);
	}

	// 添加
	public function add() {
		if (Request::isAjax()) {
			return $this->getJson(S::goAdd(Request::post()));
		}
		return $this->fetch('from', ['category' =>$this->category]);
	}

	// 编辑
	public function edit($id) {
		if (Request::isAjax()) {

			return $this->getJson(S::goEdit(Request::post(), $id));
		}
		return $this->fetch('from', ['model' => M::find($id), 'category' => $this->category]);
	}

	// 状态
	public function status($id) {
		return $this->getJson(S::goStatus(Request::post('status'), $id));
	}

	// 推荐
	public function isgood($id) {
		return $this->getJson(S::goIsgood(Request::post('isgood'), $id));
	}

	// 删除
	public function remove($id) {
		return $this->getJson(S::goRemove($id));
	}

	// 批量删除
	public function batchRemove() {
		return $this->getJson(S::goBatchRemove(Request::post('ids')));
	}

	// 回收站
	public function recycle() {
		if (Request::isAjax()) {
			return $this->getJson(S::goRecycle());
		}
		return $this->fetch();
	}

}
