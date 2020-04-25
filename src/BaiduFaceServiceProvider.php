<?php


namespace Sym\BaiduFace;

use Illuminate\Support\ServiceProvider;

class BaiduFaceServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // 发布配置文件
        $this->publishes([
            __DIR__.'/config/baidu-face.php' => config_path('baidu-face.php'),
        ]);
    }
}
