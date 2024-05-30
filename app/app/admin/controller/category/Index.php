<?php
declare (strict_types = 1);

namespace app\admin\controller\category;

use app\common\model\Category as M;
use app\common\service\Category as S;
use think\facade\Request;

class Index extends \app\admin\controller\Base {
	protected $middleware = ['AdminCheck', 'AdminPermission'];

	// 列表
	public function index() {
		if (Request::isAjax()) {
			return $this->getJson(M::getList());
		}
		return $this->fetch('');
	}

	// 添加
	public function add() {
		if (Request::isAjax()) {
			return $this->getJson(S::goAdd(Request::post()));
		}

		$modelx = array(array('name' => '文字列表', 'id' => 1), array('name' => '图片列表', 'id' => 2), array('name' => '单页', 'id' => 3));

		return $this->fetch('from', ['modelx' => $modelx, 'category' => get_tree(M::order('sort', 'asc')->select()->toArray())]);
	}

	// 编辑
	public function edit($id) {
		if (Request::isAjax()) {
			return $this->getJson(S::goEdit(Request::post(), $id));
		}
		$modelx = array(array('name' => '文字列表', 'id' => 1), array('name' => '图片列表', 'id' => 2), array('name' => '单页', 'id' => 3));
		return $this->fetch('from', ['modelx' => $modelx, 'model' => M::find($id), 'category' => get_tree(M::order('sort', 'asc')->select()->toArray())]);
	}

	// 状态
	public function status($id) {
		return $this->getJson(S::goStatus(Request::post('status'), $id));
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
