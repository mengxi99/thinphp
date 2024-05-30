<?php
declare (strict_types = 1);

namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

class Category extends Model {
	use SoftDelete;
	protected $deleteTime = false;
	// 获取列表

	public static function getList() {
		$list = self::order('id', 'desc')->select();
		return ['code' => 0, 'data' => $list->toArray(), 'extend' => ['count' => $list->count()]];
	}
}
