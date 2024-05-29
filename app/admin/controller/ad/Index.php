<?php
declare (strict_types = 1);

namespace app\admin\controller\ad;

use app\common\model\AdCategory as MC;
use app\common\model\AdIndex as M;
use app\common\model\Category as MCC;
use app\common\service\AdIndex as S;
use think\facade\Request;

class Index extends \app\admin\controller\Base {
	protected $middleware = ['AdminCheck', 'AdminPermission'];

	public function initialize() {
		parent::initialize();
		$this->category = MC::select();
		$this->lmcategory = MCC::where('pid', 0)->select();
	}

	// 列表
	public function index() {
		if (Request::isAjax()) {
			return $this->getJson(M::getList());
		}
	
		return $this->fetch('', ['category' => $this->category]);
	}

	// 添加
	public function add() {
		if (Request::isAjax()) {
			return $this->getJson(S::goAdd(Request::post()));
		}
		return $this->fetch('from', ['category' => $this->category, 'lmcategory' => $this->lmcategory]);
	}

	// 编辑
	public function edit($id) {
		if (Request::isAjax()) {
			return $this->getJson(S::goEdit(Request::post(), $id));
		}
		return $this->fetch('from', ['model' => M::find($id), 'category' => $this->category, 'lmcategory' => $this->lmcategory]);
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


}
