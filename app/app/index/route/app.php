<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('think', function () {
	return 'hello,ThinkPHP6!';
});

Route::get("list/:id", "Lists/index")->pattern(['id' => '[\w|\-]+']);
Route::get("show/:id", "Lists/show")->pattern(['id' => '[\w|\-]+']);

Route::get("pic/:id", "Pic/index")->pattern(['id' => '[\w|\-]+']);
Route::get("pshow/:id", "Pic/show")->pattern(['id' => '[\w|\-]+']);
Route::get("page/:id", "page/index")->pattern(['id' => '[\w|\-]+']);
Route::get("search/:key", "search/index")->pattern(['key' => '.+']);
