<?php
declare (strict_types = 1);

namespace app\common\validate;

use think\Validate;

class EnrollIndex extends Validate {
	protected $rule = ['name' => 'require', 'tel' => 'require',
	];

	protected $message = ['name.require' => '姓名为必填项', 'tel.require' => '联系电话为必填项',
	];

	/**
	 * 添加
	 */
	public function sceneAdd() {
		return $this->only(['name', 'tel']);
	}

	/**
	 * 编辑
	 */
	public function sceneEdit() {
		return $this->only(['name', 'tel']);
	}
}
