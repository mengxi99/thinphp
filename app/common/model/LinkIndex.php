<?php
declare (strict_types = 1);

namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

class LinkIndex extends Model {
	use SoftDelete;
	protected $deleteTime = false;
	// 获取列表
	public static function getList() {
		$where = [];
		$limit = input('get.limit');

		//按标题查找
		if ($name = input("name")) {
			$where[] = ["name", "like", "%" . $name . "%"];
		}
		//按创建时间查找
		$start = input("get.create_time-start");
		$end = input("get.create_time-end");
		if ($start && $end) {
			$where[] = ["create_time", "between", [$start, date("Y-m-d", strtotime("$end +1 day"))]];
		}
		$list = self::order('sort', 'desc')->where($where)->paginate($limit);
		return ['code' => 0, 'data' => $list->items(), 'extend' => ['count' => $list->total(), 'limit' => $limit]];
	}
}
