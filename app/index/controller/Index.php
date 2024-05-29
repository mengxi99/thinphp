<?php
declare (strict_types = 1);

namespace app\index\controller;
use think\facade\Db;

class Index extends \app\BaseController {
    
	protected $middleware = ['BrowseUser'];

	//导航栏列表获取
// 	public function getList()
//         {
//
//             $data = [
//                 ['id' => 1, 'title' => 'Item 1', 'description' => 'Desc 1'],
//                 ['id' => 2, 'title' => 'Item 2', 'description' => 'Desc 2']
//             ];
//
//
//             return json($data);
//         }
    
	public function initialize() {
		parent::initialize();
		$this->nav = get_tree(Db::name('nav')->order('sort', 'asc')->select()->toArray());
	}

	/**
	 * 首页
	 */
	public function index() {
	    
		$info = [
			'gsxw' => Db::name('news_index')->where('c_id', 78)->where('status', 1)->limit(5)->order('create_time desc')->select(),
			'hyzx' => Db::name('news_index')->where('c_id', 79)->where('status', 1)->limit(5)->order('create_time desc')->select(),
			'cjwt' => Db::name('news_index')->where('c_id', 77)->where('status', 1)->limit(5)->order('create_time desc')->select(),
            'dhlb' => Db::name('news_index')->where('c_id',100)->where('status',1)->limit(7)->select(),
			'stfxlb1' => Db::name('news_index')->where('c_id',101)->where('status',1)->limit(7)->select(),
			'jxsk1' => Db::name('news_index')->where('c_id',102)->where('status',1)->limit(5)->select(),
			'jxsk2' => Db::name('news_index')->where('c_id',103)->where('status',1)->limit(5)->select(),
			'jxsy1' => Db::name('news_index')->where('c_id',104)->where('status',1)->limit(5)->select(),
			'jxsy2' => Db::name('news_index')->where('c_id',105)->where('status',1)->limit(5)->select(),
			'gbtg1' => Db::name('news_index')->where('c_id',106)->where('status',1)->limit(5)->select(),
			'gbtg2' => Db::name('news_index')->where('c_id',107)->where('status',1)->limit(5)->select(),
			'ylzp1' => Db::name('news_index')->where('c_id',108)->where('status',1)->limit(5)->select(),
			'ylzp2' => Db::name('news_index')->where('c_id',109)->where('status',1)->limit(5)->select(),
			'xwsd1' => Db::name('news_index')->where('c_id',110)->where('status',1)->limit(3)->select(),
			'xwsd2' => Db::name('news_index')->where('c_id',110)->where('status',1)->limit(3)->select(),
			'xwsd3' => Db::name('news_index')->where('c_id',111)->where('status',1)->limit(3)->select(),
			'xwsd4' => Db::name('news_index')->where('c_id',111)->where('status',1)->limit(3)->select(),
			'gjgwy1' => Db::name('news_index')->where('c_id',112)->where('status',1)->limit(6)->select(),
			'gjgwy2' => Db::name('news_index')->where('c_id',112)->where('status',1)->limit(6)->select(),
			'jryh1' => Db::name('news_index')->where('c_id',113)->where('status',1)->limit(6)->select(),
			'jryh2' => Db::name('news_index')->where('c_id',113)->where('status',1)->limit(6)->select(),
			'sjy1' => Db::name('news_index')->where('c_id',114)->where('status',1)->limit(6)->select(),
			'sjy2' => Db::name('news_index')->where('c_id',114)->where('status',1)->limit(6)->select(),
			'sydw1' => Db::name('news_index')->where('c_id',115)->where('status',1)->limit(6)->select(),
			'sydw2' => Db::name('news_index')->where('c_id',115)->where('status',1)->limit(6)->select(),
			'jszp1' => Db::name('news_index')->where('c_id',116)->where('status',1)->limit(6)->select(),
			'jszp2' => Db::name('news_index')->where('c_id',116)->where('status',1)->limit(6)->select(),
			'jdwz1' => Db::name('news_index')->where('c_id',117)->where('status',1)->limit(6)->select(),
			'jdwz2' => Db::name('news_index')->where('c_id',117)->where('status',1)->limit(6)->select(),
			'yjcd1' => Db::name('news_index')->where('c_id',118)->where('status',1)->limit(4)->select(),
			'yjcd2' => Db::name('news_index')->where('c_id',119)->where('status',1)->limit(4)->select(),
			'yjcd3' => Db::name('news_index')->where('c_id',120)->where('status',1)->limit(5)->select(),
			'yjcd5' => Db::name('news_index')->where('c_id',121)->where('status',1)->limit(5)->select(),
			'yjcd6' => Db::name('news_index')->where('c_id',122)->where('status',1)->limit(5)->select(),
			'qmsatps' => Db::name('news_index')->where('c_id',123)->where('status',1)->limit(3)->select(),
			'fdkcs' => Db::name('news_index')->where('c_id',124)->where('status',1)->limit(5)->select(),
			'sztds' => Db::name('news_index')->where('c_id',125)->where('status',1)->limit(4)->select(),
			'skxcs' => Db::name('news_index')->where('c_id',126)->where('status',1)->limit(5)->select(),


			'nav'=>$this->nav
             
		];

		return $this->fetch('', $info);
	}

}
