<?php
declare (strict_types = 1);

namespace app\common\service;

use app\common\model\TxtIndex as M;
use app\common\validate\TxtIndex as V;
use think\facade\Request;

class TxtIndex {
	// 添加
	public static function goAdd($data) {
		//验证
		$validate = new V;
		if (!$validate->scene('add')->check($data)) {
			return ['msg' => $validate->getError(), 'code' => 201];
		}

		try {
			M::create($data);
		} catch (\Exception $e) {
			return ['msg' => '操作失败' . $e->getMessage(), 'code' => 201];
		}
	}

	// 编辑
	public static function goEdit($data, $id) {
		$data['id'] = $id;
		//验证
		$validate = new V;
		if (!$validate->scene('edit')->check($data)) {
			return ['msg' => $validate->getError(), 'code' => 201];
		}

		try {
			M::update($data);
		} catch (\Exception $e) {
			return ['msg' => '操作失败' . $e->getMessage(), 'code' => 201];
		}
	}

	// 删除
	public static function goRemove($id) {
		$model = M::find($id);
		if ($model->isEmpty()) {
			return ['msg' => '数据不存在', 'code' => 201];
		}

		try {
			$model->delete();
		} catch (\Exception $e) {
			return ['msg' => '操作失败' . $e->getMessage(), 'code' => 201];
		}
	}

	// 批量删除
	public static function goBatchRemove($ids) {
		if (!is_array($ids)) {
			return ['msg' => '数据不存在', 'code' => 201];
		}

		try {
			M::destroy($ids);
		} catch (\Exception $e) {
			return ['msg' => '操作失败' . $e->getMessage(), 'code' => 201];
		}
	}

	// 获取列表
	public static function goRecycle() {
		if (Request::isPost()) {
			$ids = Request::param('ids');
			if (!is_array($ids)) {
				return ['msg' => '参数错误', 'code' => '201'];
			}

			try {
				if (Request::param('type')) {
					$data = M::onlyTrashed()->whereIn('id', $ids)->select();
					foreach ($data as $k) {
						$k->restore();
					}
				} else {
					M::destroy($ids, true);
				}
			} catch (\Exception $e) {
				return ['msg' => '操作失败' . $e->getMessage(), 'code' => 201];
			}
			return ['msg' => '操作成功'];
		}
		//按用户名
		$where = [];
		$limit = input('get.limit');

		//按姓名查找
		if ($name = input("name")) {
			$where[] = ["name", "like", "%" . $name . "%"];
		}
		//按用户状态：1正常,2禁用 默认1查找
		if ($status = input("status")) {
			$where[] = ["status", "like", "%" . $status . "%"];
		}
		//按创建时间查找
		$start = input("get.create_time-start");
		$end = input("get.create_time-end");
		if ($start && $end) {
			$where[] = ["create_time", "between", [$start, date("Y-m-d", strtotime("$end +1 day"))]];
		}
		$list = M::onlyTrashed()->where($where)->paginate($limit);
		return ['code' => 0, 'data' => $list->items(), 'extend' => ['count' => $list->total(), 'limit' => $limit]];
	}
}
