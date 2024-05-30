<?php
declare (strict_types = 1);

namespace app\common\model;

use think\facade\Request;
use think\Model;
use think\facade\Db;

class BrowseIndex extends Model
{
    
    public static function record()
    {
     
        $mark=md5(Request::url(). Request::ip() .Request::server('HTTP_USER_AGENT'));
        $cid=0;
        $url=Request::url();
        
        
         if (strpos(Request::url(), 'list') !== false) {
             preg_match('/\/list\/(\d+)\.html/', $url, $matches);
            $cid = $matches[1];
        }else if (strpos(Request::url(), 'pic') !== false) {
            
              preg_match('/\/pic\/(\d+)\.html/', $url, $matches);
            $cid = $matches[1];
        }
        
         if (strpos(Request::url(), 'show') !== false) {
             
            preg_match('/\/show\/(\d+)\.html/', $url, $matches);
            $id = $matches[1];
             
            $cid = Db::name('news_index')->where('id',$id)->value('c_id');  
             
         }else  if (strpos(Request::url(), 'pshow') !== false) {
            preg_match('/\/pshow\/(\d+)\.html/', $url, $matches);
            $id = $matches[1];
            $cid = Db::name('images_index')->where('id',$id)->value('c_id');
         }
                    
        
        $info = [
           'cid'      =>$cid,
           'url'      => Request::url(),
           'ip'       => Request::ip(),
           'mark'       => $mark,
           'user_agent'=> Request::server('HTTP_USER_AGENT')
        ];
        $res = self::where('ip','=',$info['ip'])
            ->order('id', 'desc')
            ->find();
            
        if ($res['mark']!==$mark) {
            self::create($info);
       }
    }
}
