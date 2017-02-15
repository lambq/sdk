<?php

namespace Lambq\sdk\Facades;

use Illuminate\Support\Facades\Facade;

class BaiduPushZZ extends Facade
{
		protected $config;

		public function __construct(array $config) {
        $this->config  = $config;
				
    }

		/** 百度站长链接推送 **/
		function zhanzhang_push_baidu($url){
			$urls = [$url];
			$api = 'http://data.zz.baidu.com/urls?site=www.webshowu.com&token=6ujhg0alnRLbwZr7';
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