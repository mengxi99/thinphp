<?php
declare (strict_types = 1);

namespace app\admin\controller\link;

use app\common\model\LinkIndex as M;
use app\common\service\LinkIndex as S;
use think\facade\Request;

class Index extends \app\admin\controller\Base {
	protected $middleware = ['AdminCheck', 'AdminPermission'];

	// 列表
	public function index() {
		if (Request::isAjax()) {
			return $this->getJson(M::getList());
		}
		return $this->fetch();
	}

	// 添加
	public function add() {
		if (Request::isAjax()) {
			return $this->getJson(S::goAdd(Request::post()));
		}
		return $this->fetch('from');
	}

	// 编辑
	public function edit($id) {
		if (Request::isAjax()) {
			return $this->getJson(S::goEdit(Request::post(), $id));
		}
		return $this->fetch('from', ['model' => M::find($id)]);
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
