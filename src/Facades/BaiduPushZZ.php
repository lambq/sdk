<?php

namespace Lambq\Sdk\Facades;

use Illuminate\Support\Facades\Facade;

class BaiduPushZZ extends Facade
{
		protected $config;

		public function __construct() {
        $this->config['site']		= config('sdk.baidu_push_zz_site');
				$this->config['token']	= config('sdk.baidu_push_zz_token');
    }

		/** 百度站长链接推送 **/
		function push(array $urls){
			$api = 'http://data.zz.baidu.com/urls?site='.$this->config['site'].'&token='.$this->config['token'];
			$ch = curl_init();
			$options =  array(
					CURLOPT_URL => $api,
					CURLOPT_POST => true,
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_POSTFIELDS => implode("\n", $urls),
					CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
			);
			curl_setopt_array($ch, $options);
			$result = curl_exec($ch);
			return $result;
		}
}
?>