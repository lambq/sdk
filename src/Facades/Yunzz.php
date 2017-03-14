<?php

namespace Lambq\Sdk\Facades;

use Illuminate\Support\Facades\Facade;

class Yunzz extends Facade
{
    protected $config;

    public function __construct() {
        $this->config['api']   = config('sdk.zz_api');
    }

    public function alexa_check($url){
        //初始化
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL,"https://yun.zzs1.com/native_api/alexa_check?api_key=26-HMkhsWA1489424240V4RNqup&domain=$url");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return $output;
    }
}