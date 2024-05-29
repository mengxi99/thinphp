<?php
declare (strict_types = 1);

namespace app\common\model;
use think\facade\Db;
use think\Model;
use think\model\concern\SoftDelete;

class PageIndex extends Model {
	use SoftDelete;
	protected $deleteTime = false;
	// 获取列表
	public static function getList() {
		$where = [];
		$limit = input('get.limit');

		//按姓名查找
		if ($name = input("name")) {
			$where[] = ["name", "like", "%" . $name . "%"];
		}
		//按类别查找
		if ($c_id = input("c_id")) {
			$where = [];

			$where[] = ["c_id", "=", $c_id];
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
		$list = self::order('create_time', 'desc')->where($where)->paginate($limit);

		foreach ($list as $k => $v) {

			$list[$k]['c_id'] = Db::name('category')->where('id', $v['c_id'])->value('title');

		}

		return ['code' => 0, 'data' => $list->items(), 'extend' => ['count' => $list->total(), 'limit' => $limit]];
	}
}
