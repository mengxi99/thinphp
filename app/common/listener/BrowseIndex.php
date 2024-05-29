<?php
declare (strict_types = 1);
namespace app\common\listener;
class BrowseIndex
{
    public function handle()
    {
        app('app\common\model\BrowseIndex')->record();
    }
}