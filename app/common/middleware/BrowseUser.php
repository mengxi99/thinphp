<?php
declare (strict_types = 1);

namespace app\common\middleware;

class BrowseUser
{
    /**
     * 处理请求
     */
    public function handle($request, \Closure $next)
    {
        (new \app\common\model\BrowseIndex)->record();
        return $next($request);
    }
}
