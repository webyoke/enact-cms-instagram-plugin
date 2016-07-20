<?php
namespace InstagramPlugin;

class Template {



    public function embed($url){
        return new \InstagramPlugin\field\Instagram(Array('field_value' => $this->request($url)));
    }//embed



    private function request($url){

        $host = parse_url($url, PHP_URL_HOST);

        if(!$host || stripos($host,'instagram.com') === false){
            throw new \Exception('Instagram Plugin `embed` function must be passed a valid instagram URL');
        }//if

        $cache_key = 'Instagram Plugin Embed | ' . $url;

        $cache = \Cache::get($cache_key);

        if($cache !== null){
            return $cache;
        }//if

        $cache = file_get_contents('https://api.instagram.com/oembed?omitscript=true&url=' . $url);

        $cache = json_decode($cache);

        $cache = Array(
            'value' => $url,
            'options' => $cache
        );

        $cache = json_encode($cache);

        \Cache::set($cache_key,$cache);

        return $cache;

    }//request


}//Template
