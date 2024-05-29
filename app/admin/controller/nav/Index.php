<?php
declare (strict_types = 1);

namespace app\admin\controller\nav;

use app\common\model\Nav as M;
use app\common\service\Nav as S;
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

		return $this->fetch('from', ['category' => get_tree(M::order('sort', 'asc')->select()->toArray())]);
	}

	// 编辑
	public function edit($id) {
		if (Request::isAjax()) {
			return $this->getJson(S::goEdit(Request::post(), $id));
		}

		return $this->fetch('from', ['model' => M::find($id), 'category' => get_tree(M::order('sort', 'asc')->select()->toArray())]);
	}

	// 删除
	public function remove($id) {
		return $this->getJson(S::goRemove($id));
	}

	// 回收站
	public function recycle() {
		if (Request::isAjax()) {
			return $this->getJson(S::goRecycle());
		}
		return $this->fetch();
	}

}
