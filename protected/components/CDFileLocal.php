<?php
class CDFileLocal extends CComponent
{
    public static function fetchAndReplaceMultiWithHtml($html)
    {
        $rows = self::fetchMultiWithHtml($html);
        if ($rows === false) return false;
        
        foreach ($rows as $row) {
            if ($row === false) continue;
            $html = str_replace($row['oldurl'], $row['url'], $html);
        }
        
        return $html;
    }
    
    /**
     * 批量获取远程图片，然后本地化
     * @param string $html
     * @return mixed boolean|array data array(path, url), false if error occured
     */
    public static function fetchMultiWithHtml($html)
    {
        $matches = array();
        $pattern = '/<img.*?src="?(.+?)["\s]{1}?.*?>/is';
        $result = preg_match_all($pattern, $html, $matches);
        if ($result === false) return false;
        
        array_shift($matches);
        $urls = array_unique((array)$matches[0]);
        if (count($urls) == 0) return false;
        
        foreach ($urls as $index => $url) {
            if (stripos($url, param('uploadBaseUrl')) === 0)
                unset($urls[$index]);
        }
        
        $data = self::fetchMulti($urls);
        return $data;
    }
    
    public static function fetchMulti(array $urls)
    {
        $data = array();
        foreach ($urls as $index => $url)
            $data[] = self::fetchOne($url);
        
        return $data;
    }
    
    /**
     * 获取远程图片然后保存到本地
     * @param string $url 文件url
     * @return array|boolean local file data array(path, url), false if error occured
     * @throws Exception if $url is empty
     */
    public static function fetchOne($url)
    {
        if (empty($url) || filter_var($url, FILTER_VALIDATE_URL) === false || stripos($url, 'http://') !== 0)
            return false;
    
        $fetch = new CDCurl();
        $fetch->get($url);
        if ($fetch->errno() !== 0) return false;
        
        $file = BetaBase::makeUploadFilePath($extension, $additional = 'images');
        $extension = pathinfo($url, PATHINFO_EXTENSION);
        $extension = $extension ? '.' . $extension : '';
        $filename = $file['path'] . $extension;
        $fileurl = $file['url'] . $extension;
        
        $rawdata = $fetch->rawdata();
        $result = file_put_contents($filename, $rawdata);
        if ($result === false)
            return false;
        else {
            $data = array(
                'oldurl' => $url,
                'path' => $filename,
                'url' => fbu($fileurl),
            );
            return $data;
        }
    }
    
    
}




