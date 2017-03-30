<?php

namespace Lambq\Sdk\Facades;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Facade;

class Yunzz extends Facade
{
    protected $config;

    public function __construct() {
        $this->config['api']    = config('sdk.zz_api');
        $this->config['host']   = config('sdk.zz_host');
    }

    public function file_get_contents_curl($url){
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
    /** 域名 Whois 查询API **/
    public function whois_check($site){
        $url    = $this->config['host']."/native_api/whois_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
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
        $url    = $this->config['host']."/native_api/alexa_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        if(array_key_exists('status',$result)){
            return [
                'reach_rank'    => 0,
                'traffic_rank'  => 0,
            ];
        }else{
            return [
                'reach_rank'    => $result['reach_rank'],
                'traffic_rank'  => $result['traffic_rank'],
            ];
        }
        return $result;
    }
    /** Google PR查询API **/
    public function google_page_rank_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/google_page_rank_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /** 百度权重查询API **/
    public function baidu_rank_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/baidu_rank_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /** 360权重查询API **/
    public function so_rank_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/so_rank_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /**  搜狗评级查询API **/
    public function sogou_rank_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/sogou_rank_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /**  Google 收录查询Api **/
    public function google_index_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/google_index_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /**  Bing 收录查询Api **/
    public function bing_index_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/bing_index_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /**  Yahoo 收录查询Api **/
    public function yahoo_index_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/yahoo_index_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /**  Baidu 收录查询Api **/
    public function baidu_index_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/baidu_index_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /**  360 收录查询Api **/
    public function so_index_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/so_index_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /**  搜狗 收录查询Api **/
    public function sogou_index_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/sogou_index_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /**  Google 反链查询Api **/
    public function google_backlink_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/google_backlink_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /**  Bing 反链查询Api **/
    public function bing_backlink_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/bing_backlink_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /**  Yahoo 反链查询Api **/
    public function yahoo_backlink_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/yahoo_backlink_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /**  Baidu 反链查询Api **/
    public function baidu_backlink_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/baidu_backlink_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /**  360 反链查询Api **/
    public function so_backlink_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/so_backlink_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /**  搜狗 反链查询Api **/
    public function sogou_backlink_check($site) {
        //初始化
        $url    = $this->config['host']."/native_api/sogou_backlink_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        return $result;
    }
    /** 网站权重查询API **/
    public function domainrank($site){
        $url    = $this->config['host']."/native_api/domainrank?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        if($result['status'] == 0){
            return [
                'google'    => 0,
                'baidu'     => 0,
                'so'        => 0,
                'sogou'     => 0,
            ];
        }else{
            return [
                'google'    => $result['google'],
                'baidu'     => $result['baidu'],
                'so'        => $result['so'],
                'sogou'     => $result['sogou'],
            ];
        }
    }
    /** 网站反链查询AP **/
    public function domainbacklink($site){
        $url    = $this->config['host']."/native_api/domainbacklink?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        if($result['status'] == 0){
            return [
                'google'    => 0,
                'baidu'     => 0,
                'bing'      => 0,
                'yahoo'     => 0,
                'so'        => 0,
                'sogou'     => 0,
            ];
        }else{
            return [
                'google'    => $result['google'],
                'baidu'     => $result['baidu'],
                'bing'      => $result['bing'],
                'yahoo'     => $result['yahoo'],
                'so'        => $result['so'],
                'sogou'     => $result['sogou'],
            ];
        }
    }
    /** 网站收录查询API **/
    public function domainindexd($site){
        $url    = $this->config['host']."/native_api/domainindexd?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        if($result['status'] == 0){
            return [
                'google'    => 0,
                'baidu'     => 0,
                'bing'      => 0,
                'yahoo'     => 0,
                'so'        => 0,
                'sogou'     => 0,
            ];
        }else{
            return [
                'google'    => $result['google'],
                'baidu'     => $result['baidu'],
                'bing'      => $result['bing'],
                'yahoo'     => $result['yahoo'],
                'so'        => $result['so'],
                'sogou'     => $result['sogou'],
            ];
        }
    }
    /** 网站备案查询API **/
    public function domainbeian($site){
        preg_match('/(.*\.)?\w+\.\w+$/', $site, $matches);
        $site   = str_replace($matches[1],'',$site);
        $url    = $this->config['host']."/native_api/domainbeian?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        if($result['success'] == 1){
            $array  = $result['result'];
            if($array['status'] == 'ALREADY_BEIAN'){
                return [
                    'domain'            => $array['domain'],
                    'icpno'             => $array['icpno'],
                    'sitenm'            => $array['sitenm'],
                    'webhome'           => $array['webhome'],
                    'organizers'        => $array['organizers'],
                    'organizers_type'   => $array['organizers_type'],
                    'exadate'           => $array['exadate'],
                ];
            }else{
                return [
                    'domain'            => null,
                    'icpno'             => null,
                    'sitenm'            => null,
                    'webhome'           => null,
                    'organizers'        => null,
                    'organizers_type'   => null,
                    'exadate'           => null,
                ];
            }
        }else{
            return [
                'domain'            => null,
                'icpno'             => null,
                'sitenm'            => null,
                'webhome'           => null,
                'organizers'        => null,
                'organizers_type'   => null,
                'exadate'           => null,
            ];
        }
    }
    /** Domain IP 查询API **/
    public function domain_ip_check($site){
        $url    = $this->config['host']."/native_api/domain_ip_check?api_key=".$this->config['api']."&domain=$site";
        $result = $this->file_get_contents_curl($url);
        if(array_key_exists('status', $result)){
            return [
                'isp'       => 0,
                'ip'        => 0,
                'city'      => 0,
                'region'    => 0,
                'country'   => 0,
                'time_zone' => 0,
                'longitude' => 0,
                'latitude'  => 0,
            ];
        }else{
            return [
                'isp'       => $result['isp'],
                'ip'        => $result['ip'],
                'city'      => $result['city'],
                'region'    => $result['region'],
                'country'   => $result['country'],
                'time_zone' => $result['time_zone'],
                'longitude' => $result['longitude'],
                'latitude'  => $result['latitude'],
            ];
        }
    }
    /** 新接口 **/
    public function new_seo($url){
        $json   = json_encode([
            'url'               => $url,    //域名
            'whois_check'       => $this->whois_check($url),
            'alexa_check'       => $this->alexa_check($url),    //Alexa 查询API
            'domainrank'        => $this->domainrank($url), //网站权重查询API
            'domainbacklink'    => $this->domainbacklink($url),    //网站反链查询AP
            'domainindexd'      => $this->domainindexd($url),   //网站收录查询API
            'domainbeian'       => $this->domainbeian($url),    //网站备案查询API
            'domain_ip_check'   => $this->domain_ip_check($url),  //Domain IP 查询API
        ]);
        return $json;
    }
    /** 全部请求并返回 **/
    public function seo_all($url){
        $json   = json_encode([
            'url'                       => $url,    //域名
            'whois_check'               => $this->whois_check($url),
            'alexa_check'               => $this->alexa_check($url),     //Alexa 查询API
            'google_page_rank_check'    => $this->google_page_rank_check($url),  //Google PR查询API
            'baidu_rank_check'          => $this->baidu_rank_check($url),    //百度权重查询API
            'so_rank_check'             => $this->so_rank_check($url),   //360权重查询API
            'sogou_rank_check'          => $this->sogou_rank_check($url),    //搜狗评级查询API
            'google_index_check'        => $this->google_index_check($url),  //Google 收录查询Api
            'google_backlink_check'     => $this->google_backlink_check($url),   //Google 反链查询Api
            'bing_index_check'          => $this->bing_index_check($url),    //Bing 收录查询Api
            'bing_backlink_check'       => $this->bing_backlink_check($url),     //Bing 反链查询Api
            'yahoo_index_check'         => $this->yahoo_index_check($url),   //Yahoo 收录查询Api
            'yahoo_backlink_check'      => $this->yahoo_backlink_check($url),    //Yahoo 反链查询Api
            'baidu_index_check'         => $this->baidu_index_check($url),   //Baidu 收录查询Api
            'baidu_backlink_check'      => $this->baidu_backlink_check($url),    //Baidu 反链查询Api
            'so_index_check'            => $this->so_index_check($url),      //360 收录查询Api
            'so_backlink_check'         => $this->so_backlink_check($url),   //360 反链查询Api
            'sogou_index_check'         => $this->sogou_index_check($url),   //搜狗 收录查询Api
            'sogou_backlink_check'      => $this->sogou_backlink_check($url),    //搜狗 反链查询Api
        ]);
        return $json;
    }
}