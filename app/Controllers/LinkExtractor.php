<?php

namespace App\Controllers;


use DOMDocument;

class LinkExtractor
{
    /**
     * Class constructor
     * Check if cUrl is active
     */
    function __construct()
    {
        $this->_isCurl();
    }

    public function downloadLink($appId){

        if ($appId){

            $slug = $this->getSlug($appId);
            $sourceUrl = "https://apkpure.com/$slug/$appId/download?from=details";
            $html = file_get_contents($sourceUrl);

            libxml_use_internal_errors(true);
            $doc = new DOMDocument();
            $doc->loadHTML($html);

            $link = '';
            foreach($doc->getElementsByTagName('a') as $item) {
                if($item->getAttribute('id') == 'download_link') {
                    $link = $item->getAttribute('href');
                    break;
                }
            }

            return $link;

        }

        return null;

    }

    private function getSlug($appId)
    {
        if ($appId){
            $replace = str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $appId))))))));

            return strtolower(str_replace(' ', '-', $replace));
        }

        return null;
    }

    private function _isCurl()
    {
        if (!function_exists('curl_version')) {
            die('cUrl library is not enabled on this server.');
        }
    }

}