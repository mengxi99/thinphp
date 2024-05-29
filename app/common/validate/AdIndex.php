<?php
declare (strict_types = 1);

namespace app\common\validate;

use think\Validate;
class AdIndex extends Validate
{
    protected $rule = ['name' => 'require',
    ];

    protected $message = ['name.require' => '标题为必填项',
    ];

    /**
     * 添加
     */
    public function sceneAdd()
    {
        return $this->only(['name',]);
    }

    /**
     * 编辑
     */
    public function sceneEdit()
    {
        return $this->only(['name',]);
    }
}
