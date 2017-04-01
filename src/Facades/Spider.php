<?php

namespace Lambq\Sdk\Facades;

use phpQuery;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Facade;

class Spider extends Facade
{
    protected   $html;
    public function __construct($html) {
        $this->html = $html;
    }

    /** 域名 Whois 查询API **/
    public function info(){
        $array  = [];
        $metas  = [];
        phpQuery::newDocumentFileHTML($this->html);
        $array['title'] = pq('title')->html();
        foreach(pq('meta') as $meta){
            $key = pq($meta)->attr('name');
            $value= pq($meta)->attr('content');
            $metas[strtolower($key)] = $value;
        }
        if(array_key_exists("keywords",$metas)){
            $array['keywords'] = $metas['keywords'];
        }else{
            $array['keywords'] = $array['title'];
        }
        if(array_key_exists("description",$metas)){
            $array['description'] = $metas['description'];
        }else{
            $array['description'] = $array['title'];
        }
        phpQuery::$documents = [];
        return $array;
    }
}