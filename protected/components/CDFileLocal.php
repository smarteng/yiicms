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
    /**
    * $filename: 源图片
    * $targetfile: 保存图片位置
    * $maxwidth: 保存图片宽
    * $maxheight:   保存图片高
    * demo:        resizeimage('./1.jpg', './2.jpg', 500, 250);
    */
   public static function resizeimage($filename, $targetfile , $maxwidth, $maxheight){
        $size = getimagesize($filename);
        switch($size[2]){ 
            case 1: 
            $im = @imagecreatefromgif($filename); 
            break; 
            case 2: 
            $im = @imagecreatefromjpeg($filename); 
            break; 
            case 3: 
            $im = @imagecreatefrompng($filename); 
            break; 
        }
        $width   = imagesx($im);
        $height = imagesy($im);
        if(($maxwidth && $width > $maxwidth) && ($maxheight && $height > $maxheight)){
            if($maxwidth && $width > $maxwidth){
                $widthratio = $maxwidth/$width;
                $resizewidth = true;
            }
            if($maxheight && $height > $maxheight){
                $heightratio = $maxheight/$height;
                $resizeheight = true;
            }
            if($resizewidth && $resizeheight){
                if($widthratio < $heightratio){
                    $ratio = $widthratio;
                }else{
                    $ratio = $heightratio;
                }
            }elseif($resizewidth){
                $ratio = $widthratio;
            }elseif($resizeheight){
                $ratio = $heightratio;
            }
            $newwidth = $width * $ratio;
            $newheight = $height * $ratio;
            if(function_exists("imagecopyresampled")){
                $newim = imagecreatetruecolor($newwidth, $newheight);
                imagecopyresampled($newim, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            }else{
                $newim = imagecreate($newwidth, $newheight);
                imagecopyresized($newim, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            }
            imagejpeg($newim, $targetfile ? $targetfile : $filename);
            imagedestroy($newim);
            return true;
        }else{
            return false;
        }
    }
    
}




