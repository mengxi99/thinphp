<?php
declare (strict_types = 1);

namespace app\common\validate;

use think\Validate;

class Nav extends Validate {
	protected $rule = ['title' => 'require',
	];

	protected $message = ['title.require' => '名称为必填项',
	];

	/**
	 * 添加
	 */
	public function sceneAdd() {
		return $this->only(['title']);
	}

	/**
	 * 编辑
	 */
	public function sceneEdit() {
		return $this->only(['title']);
	}
}
