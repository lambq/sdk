<?php

namespace Lambq\Sdk\Facades;

use Illuminate\Support\Facades\Facade;

class Yunzz extends Facade
{
    protected $config;

    public function __construct() {
        $this->config['api']   = config('sdk.zz_api');
    }

    /**
     * Alexa 查询API
     * reach_rank 流量排名-三个月
     * country
     * country_rank
     * traffic_rank 到访量排名-三个月
     **/
    public function alexa_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/alexa_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /** Google PR查询API **/
    public function google_page_rank_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/google_page_rank_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /** 百度权重查询API **/
    public function baidu_rank_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/baidu_rank_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /** 360权重查询API **/
    public function so_rank_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/so_rank_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /**  搜狗评级查询API **/
    public function sogou_rank_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/sogou_rank_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /**  Google 收录查询Api **/
    public function google_index_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/google_index_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /**  Bing 收录查询Api **/
    public function bing_index_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/bing_index_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /**  Yahoo 收录查询Api **/
    public function yahoo_index_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/yahoo_index_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /**  Baidu 收录查询Api **/
    public function baidu_index_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/baidu_index_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /**  360 收录查询Api **/
    public function so_index_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/so_index_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /**  搜狗 收录查询Api **/
    public function sogou_index_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/sogou_index_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /**  Google 反链查询Api **/
    public function google_backlink_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/google_backlink_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /**  Bing 反链查询Api **/
    public function bing_backlink_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/bing_backlink_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /**  Yahoo 反链查询Api **/
    public function yahoo_backlink_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/yahoo_backlink_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /**  Baidu 反链查询Api **/
    public function baidu_backlink_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/baidu_backlink_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /**  360 反链查询Api **/
    public function so_backlink_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/so_backlink_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }

    /**  搜狗 反链查询Api **/
    public function sogou_backlink_check($site) {
        //初始化
        $url    = "https://yun.zzs1.com/native_api/sogou_backlink_check?api_key=".$this->config['api']."&domain=$site";
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            echo "Yunzz Error:".curl_error($ch);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return json_decode($output,true);
    }
}