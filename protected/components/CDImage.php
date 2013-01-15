<?php
class CDImage
{
    const MERGE_TOP_RIGHT = 1;
    const MERGE_TOP_LEFT = 2;
    const MERGE_BOTTOM_LEFT = 3;
    const MERGE_BOTTOM_RIGHT = 4;
    const MERGE_CENTER = 5;
    
    private $_version = '1.0';
    private $_author = 'Chris Chen(cdcchen@gmail.com)';
    private $_site = 'http://www.24beta.com/';
    
    private $_image;
    private $_data;
    private $_imageType = IMAGETYPE_GIF;
    private $_lastSaveFile;
    
    private static $_createFunctions = array(
        IMAGETYPE_GIF => 'imagecreatefromgif',
        IMAGETYPE_JPEG => 'imagecreatefromjpeg',
        IMAGETYPE_PNG => 'imagecreatefrompng',
        IMAGETYPE_WBMP => 'imagecreatefromwbmp',
        IMAGETYPE_XBM => 'imagecreatefromxmb',
    );
    
    private static $_outputFuntions = array(
        IMAGETYPE_GIF => 'imagegif',
        IMAGETYPE_JPEG => 'imagejpeg',
        IMAGETYPE_PNG => 'imagepng',
        IMAGETYPE_WBMP => 'imagewbmp',
        IMAGETYPE_XBM => 'imagexmb',
    );
    
    public $fontpath;
    
    /**
     * 构造函数
     * @param string $data 图像路径或图像数据
     */
    public function __construct($data = null)
    {
        $path = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'fonts' . DIRECTORY_SEPARATOR;
        $this->setFontPath($path);
        
        if (null !== $data)
            $this->load($data);
    }
    
    public function setFontPath($path)
    {
        if (file_exists($path)) {
            $this->fontpath = $path;
            return true;
        }
        else
            return false;
    }
    
    /**
     * 从文件地址载入图像
     * @param string $data 图像路径或图像数据
     * @return CDImage CDImage对象本身
     */
    public function load($data)
    {
        $this->_data = $data;
        $this->_image = self::loadImage($this->_data);
        if (file_exists($data)) {
            $info = getimagesize($data);
            $this->_imageType = $info[2];
        }
        return $this;
    }
    
    /**
     * 从文件地址载入图像
     * @param string $file 图像路径
     * @return resource 图像资源
     */
    public static function loadFromFile($file)
    {
        $info = getimagesize($file);
        $type = $info[2];
        if (!array_key_exists($type, self::$_createFunctions))
            throw new Exception('不支持' . $type . '图像格式', 0);
        $func = self::$_createFunctions[$type];
        $image = $func($file);
        
        return $image;
    }
    
    /**
     * 从图像数据流载入图像
     * @param string $filename 图像数据
     * @return resource 图像资源
     */
    public static function loadFromStream($data)
    {
        return imagecreatefromstring($data);
    }
    
    /**
     * @param string $data 图像路径或图像数据
     * @return resource 图像资源
     */
    public static function loadImage($data)
    {
        if (file_exists($data)) {
            $image = self::loadFromFile($data);
        }
        else
            $image = self::loadFromStream($data);
        
        return $image;
    }
    
    /**
     * 返回图像宽度
     * @return integer 图像的宽度
     */
    public function width()
    {
        return imagesx($this->_image);
    }
    
    /**
     * 返回图像高度
     * @return integer 图像高度
     */
    public function height()
    {
        return imagesy($this->_image);
    }
    
    /**
     * 将图片数据还原为初始值
     * @return CDImage CDImage对象本身
     */
    public function revert()
    {
        $this->_image = $this->loadImage($this->_data);
        return $this;
    }
    
    public function getType()
    {
        return $this->_imageType;
    }
    
    public function getMimeType()
    {
        return image_type_to_mime_type($this->_imageType);
    }
    
    public function getExtName()
    {
        return image_type_to_extension($this->_imageType);
    }
    
    
    public function convertType($type)
    {
        if (!array_key_exists($key, self::$_createFunctions))
            throw new Exception('不支持此类型', 0);
        $this->_imageType = $type;
    }
    
    /**
     * 保存图像到一个文件中
     * @param string $filename 图片文件路径，不带扩展名
     * @param integer $mode 图像文件的权限
     * @return CDImage CDImage对象本身
     */
    public function save($filename, $mode = null)
    {
        $filename .= $this->getExtName();
        $func = self::$_outputFuntions[$this->_imageType];
        self::saveAlpha($this->_image);
        if (!$func($this->_image, $filename))
            return false;
        
        $this->_lastSaveFile = $filename;
        if ($mode !== null) {
            chmod($filename, $mode);
        }
        return $this;
    }
    
    /**
     * 将图像保存为gif类型
     * @param string $filename 图片文件路径，不带扩展名
     * @param integer $mode 图像文件的权限
     * @return CDImage CDImage对象本身
     */
    public function saveAsGif($filename, $mode = null)
    {
        $filename .= image_type_to_extension(IMAGETYPE_GIF);
        if (!imagegif($this->_image, $filename))
            return false;
        
        $this->_lastSaveFile = $filename;
        if ($mode !== null) {
            chmod($filename, $mode);
        }
        return $this;
    }
    
    /**
     * 将图像保存为jpeg类型
     * @param string $filename 图片文件路径，不带扩展名
     * @param integer $quality 图像质量，取值为0-100
     * @param integer $mode 图像文件的权限
     * @return CDImage CDImage对象本身
     */
    public function saveAsJpeg($filename, $quality = 75, $mode = null)
    {
        $filename .= image_type_to_extension(IMAGETYPE_JPEG);
        if (!imagejpeg($this->_image, $filename, $quality))
            return false;
        
        $this->_lastSaveFile = $filename;
        if ($mode !== null) {
            chmod($filename, $mode);
        }
        return $this;
    }

	/**
     * 将图像保存为png类型
     * @param string $filename 图片文件路径，不带扩展名
     * @param integer $quality 图像质量，取值为0-9
     * @param integer $filters PNG图像过滤器，取值参考imagepng函数
     * @param integer $mode 图像文件的权限
     * @return CDImage CDImage对象本身
     */
    public function saveAsPng($filename, $quality = 9, $filters = 0, $mode = null)
    {
        $filename .= image_type_to_extension(IMAGETYPE_PNG);
        self::saveAlpha($this->_image);
        if (!imagepng($this->_image, $filename, $quality, $filters))
            return false;
        
        $this->_lastSaveFile = $filename;
        if ($mode !== null) {
            chmod($filename, $mode);
        }
        return $this;
    }
    
    /**
     * 将图像保存为wbmp类型
     * @param string $filename 图片文件路径，不带扩展名
     * @param integer $foreground 前景色，取值为imagecolorallocate()的返回的颜色标识符
     * @param integer $mode 图像文件的权限
     * @return CDImage CDImage对象本身
     */
    public function saveAsWbmp($filename, $foreground  = 0, $mode = null)
    {
        $filename .= image_type_to_extension(IMAGETYPE_WBMP);
        if (!imagewbmp($this->_image, $filename, $foreground))
            return false;
        
        $this->_lastSaveFile = $filename;
        if ($mode !== null) {
            chmod($filename, $mode);
        }
        return $this;
    }
    
    /**
     * 将图像保存为xbm类型
     * @param string $filename 图片文件路径，不带扩展名
     * @param integer $foreground 前景色，取值为imagecolorallocate()的返回的颜色标识符
     * @param integer $mode 图像文件的权限
     * @return CDImage CDImage对象本身
     */
    public function saveAsXbm($filename, $foreground  = 0, $mode = null)
    {
        $filename .= image_type_to_extension(IMAGETYPE_XBM);
        if (!imagexbm($this->_image, $filename, $foreground))
            return false;
        
        $this->_lastSaveFile = $filename;
        if ($mode !== null) {
            chmod($filename, $mode);
        }
        return $this;
    }
    
    public function filename($onlyName = true)
    {
        if (empty($this->_lastSaveFile))
            $file = '';
        elseif ($onlyName)
            $file = basename($this->_lastSaveFile);
        else
            $file = $this->_lastSaveFile;
        
        return $file;
    }

    /**
     * 按照图像原来的类型输出图像数据
     */
    public function output()
    {
        $contentType = image_type_to_mime_type($this->_imageType);
        header('Content-Type: ' . $contentType);
        $func = self::$_outputFuntions[$this->_imageType];
        $func($this->_image);
    }
    
    /**
     * 以gif类型输出图像数据
     */
    public function outputGif()
    {
        header('Content-Type: ' . image_type_to_mime_type(IMAGETYPE_GIF));
        imagegif($this->_image);
    }
    
    /**
     * 以jpge类型输出图像数据
     */
    public function outputJpeg($quality = 75)
    {
        header('Content-Type: ' . image_type_to_mime_type(IMAGETYPE_JPEG));
        imagejpeg($this->_image, $quality);
    }

    /**
     * 以png类型输出图像数据
     * @param integer $quality 图像质量，取值为0-9
     * @param integer $filters PNG图像过滤器，取值参考imagepng函数
     */
    public function outputPng($quality = 9, $filters = 0)
    {
        header('Content-Type: ' . image_type_to_mime_type(IMAGETYPE_PNG));
        imagepng($this->_image, $quality, $filters);
    }
    
    /**
     * 以wbmp类型输出图像数据
     */
    public function outputWbmp($foreground  = 0)
    {
        header('Content-Type: ' . image_type_to_mime_type(IMAGETYPE_WBMP));
        imagewbmp($this->_image, $foreground);
    }
    
    /**
     * 以xbm类型输出图像数据
     */
    public function outputXbm($foreground  = 0)
    {
        header('Content-Type: ' . image_type_to_mime_type(IMAGETYPE_XBM));
        imagewxbm($this->_image, $foreground);
    }
    
    public function outputRaw()
    {
        ob_start();
        $func = self::$_outputFuntions[$this->_imageType];
        $func($this->_image);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    public function outputRawGif()
    {
        ob_start();
        imagegif($this->_image);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    public function outputRawJpeg($quality = 100)
    {
        ob_start();
        imagejpeg($this->_image, null, $quality);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    public function outputRawPng($quality = 9, $filters = 0)
    {
        ob_start();
        imagepng($this->_image, null, $quality, $filters);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    public function outputRawWbmp($foreground  = 0)
    {
        ob_start();
        imagewbmp($this->_image, null, $foreground);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    public function outputRawXbm($foreground  = 0)
    {
        ob_start();
        imagewxbm($this->_image, null, $foreground);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    /**
     * 等比例绽放图像
     * @param integer $scale 绽放值，取值为0-100
     * @return CDImage CDImage对象本身
     */
    public function scale($scale)
    {
        $width = $this->width() * $scale/100;
        $height = $this->height() * $scale/100;
        $this->resize($width, $height);
        return $this;
    }
    
    /**
     * 根据设定高度等比例绽放图像
     * @param integer $height 图像高度
     * @return CDImage CDImage对象本身
     */
    public function resizeToHeight($height)
    {
        if ($height >= $this->height())
            return $this;
        $ratio = $height / $this->height();
        $width = $this->width() * $ratio;
        $this->resize($width, $height);
        return $this;
    }

	/**
     * 根据设定宽度等比例绽放图像
     * @param integer $width 图像宽度
     * @return CDImage CDImage对象本身
     */
    public function resizeToWidth($width)
    {
        if ($width >= $this->width())
            return $this;
        $ratio = $width / $this->width();
        $height = $this->height() * $ratio;
        $this->resize($width, $height);
        return $this;
    }
    
    /**
     * 改变图像大小
     * @param integer $width 图像宽度
     * @param integer $height 图像高度
     * @return CDImage CDImage对象本身
     */
    public function resize($width, $height)
    {
        $image = imagecreatetruecolor($width, $height);
        self::saveAlpha($this->_image);
        self::saveAlpha($image);
        imagecopyresampled($image, $this->_image, 0, 0, 0, 0, $width, $height, $this->width(), $this->height());
        $this->_image = $image;
        return $this;
    }
    
    /**
     * 裁剪图像
     * @param integer $width 图像宽度
     * @param integer $height 图像高度
     * @return CDImage CDImage对象本身
     */
    public function crop($width, $height, $fromTop = false, $fromLeft = false)
    {
        $image = imagecreatetruecolor($width, $height);
        $ow = $this->width();
        $oh = $this->height();
        $wm = $ow / $width;
        $hm = $oh / $height;
        $h_height = $height / 2;
        $w_height = $width / 2;
        
        $oscale = $ow / $oh;
        $nscale = $width / $height;
        if ($oscale >= $nscale) {
            $adjusted_width = $ow / $hm;
            $half_width = $adjusted_width / 2;
            $int_width = $half_width - $w_height;
            $dstX = $fromLeft? 0 : -$int_width;
            imagecopyresampled($image, $this->_image, $dstX, 0, 0, 0, $adjusted_width, $height, $ow, $oh);
        }
        else {
            $adjusted_height = $oh / $wm;
            $half_height = $adjusted_height / 2;
            $int_height = $half_height - $h_height;
            $dstY = $fromTop ? 0 : -$int_height;
            imagecopyresampled($image, $this->_image, 0, $dstY, 0, 0, $width, $adjusted_height, $ow, $oh);
        }
        $this->_image = $image;
        return $this;
    }

    /**
     * 顺时针旋转图片
     * @param integer $degree 取值为0-360
     * @return CDImage CDImage对象本身
     */
    public function rotate($degree = 90)
    {
        $degree = (int)$degree;
        $this->_image = imagerotate($this->_image, $degree, 0);
        return $this;
    }
    
    /**
     * 将图像转换为灰度的
     * @return CDImage CDImage对象本身
     */
    public function gray()
    {
        imagefilter($this->_image, IMG_FILTER_GRAYSCALE);
        return $this;
    }
    
    /**
     * 将图像颜色反转
     * @return CDImage CDImage对象本身
     */
    public function negate()
    {
        imagefilter($this->_image, IMG_FILTER_NEGATE);
        return $this;
    }
    
    /**
     * 调整图像亮度
     * @param integer $bright 亮度值
     * @return CDImage CDImage对象本身
     */
    public function brightness($bright)
    {
        $bright = (int)$bright;
        ($bright > 0) && imagefilter($this->_image, IMG_FILTER_BRIGHTNESS, $bright);
        return $this;
    }
    
    /**
     * 调整图像对比度
     * @param integer $contrast 对比度值
     * @return CDImage CDImage对象本身
     */
    public function contrast($contrast)
    {
        $contrast = (int)$contrast;
        ($contrast > 0) && imagefilter($this->_image, IMG_FILTER_CONTRAST, $contrast);
        return $this;
    }
    
    /**
     * 将图像浮雕化
     * @return CDImage CDImage对象本身
     */
    public function emboss()
    {
        imagefilter($this->_image, IMG_FILTER_EMBOSS,0);
        return $this;
    }
    
    /**
     * 让图像柔滑
     * @param integer $smooth 柔滑度值
     * @return CDImage CDImage对象本身
     */
    public function smooth($smooth)
    {
        $smooth = (int)$smooth;
        ($smooth > 0) && imagefilter($this->_image, IMG_FILTER_SMOOTH, $smooth);
        return $this;
    }

    /**
     * 将图像使用高斯模糊
     * @return CDImage CDImage对象本身
     */
    public function blur()
    {
        imagefilter($this->_image, IMG_FILTER_GAUSSIAN_BLUR);
        return $this;
    }
    
    /**
     * 在图像上添加文字
     * @param string $text 添加的文字
     * @param integer $opacity 不透明度，值为0-1
     * @param array $position 文字添加位置
     * @param string $font 字体文件路径
     * @param integer $size 文字大小
     * @param integer $color 颜色值
     * @return CDImage CDImage对象本身
     */
    public function text($text, $font, $size, $position = self::MERGE_BOTTOM_RIGHT, $color = array(0, 0, 0), $opacity = 0, $padding = 5)
    {
        if (is_int($position))
            $pos = $this->textPosition($text, $font, $size, $position, $padding);
        elseif (is_array($position))
            $pos = $position;
        else
            throw new Exception('position error.');
        
        if (is_array($color))
            $color = imagecolorallocatealpha($this->_image, $color[0], $color[1], $color[2], $opacity);
        imagettftext($this->_image, $size, 0, $pos[0], $pos[1], $color, $font, $text);

        return $this;
    }
    
    public function textPosition($text, $font, $size, $position, $padding = 5, $angle = 0)
    {
        $points = imagettfbbox($size, $angle, $font, $text);
        $width = $points[2] - $points[0];
        $height = $points[1] - $points[7];
        switch ($position) {
            case self::MERGE_TOP_LEFT:
                $x = $points[0] + $padding;
                $y = $points[1] - $points[7] + $padding;
                break;
            case self::MERGE_TOP_RIGHT:
                $x = $this->width() - ($points[2] - $points[0]) - $padding;
                $y = $points[1] - $points[7] + $padding;
                break;
            case self::MERGE_BOTTOM_LEFT:
                $x = $points[0] + $padding;
                $y = $this->height() - $points[1] - $padding;
                break;
            case self::MERGE_CENTER:
                $x = ($this->width() - $width) / 2;
                $y = $this->height() / 2 + $height / 2;
                break;
            case self::MERGE_BOTTOM_RIGHT:
            default:
                $x = $this->width() - ($points[2] - $points[0]) - $padding;
                $y = $this->height() - $points[1] - $padding;
                break;
        }
        
        $position = array($x, $y);
        
        return $position;
    }
    
    /**
     * 将一个图像合并到画布上
     * @param string $data 图像的二进制数据
     * @param constant $position 合并位置
     * @param integer $opacity 不透明度，取值为0-100
     */
    public function merge($data, $position = self::MERGE_BOTTOM_RIGHT, $opacity = 100)
    {
        $src = self::loadImage($data);
        if (!is_resource($src))
            throw new Exception('图像数据错误', 0);

        if (is_int($position))
            $pos = self::mergePosition($position, $this->_image, $src);
        elseif (is_array($position))
            $pos = $position;
        else
            throw new Exception('position error.');
        
        $w = imagesx($src);
        $h = imagesy($src);
        $image = imagecreatetruecolor($w, $h);
        imagealphablending($this->_image, true);
        imagealphablending($image, true);
        
        imagecopyresampled($image, $this->_image, 0, 0, $pos[0], $pos[1], $w, $h, $w, $h);
        self::saveAlpha($src);
        imagecopy($image, $src, 0, 0, 0, 0, $w, $h);
        imagecopymerge($this->_image, $image, $pos[0], $pos[1], 0, 0, $w, $h, $opacity);
        
        return $this;
    }
    
    public static function mergePosition($position, $dst, $src)
    {
        $dstW = imagesx($dst);
        $dstH = imagesy($dst);
        $srcW = imagesx($src);
        $srcH = imagesy($src);
        switch ($position) {
            case self::MERGE_TOP_LEFT:
                $position = array(0, 0);
                break;
            case self::MERGE_TOP_RIGHT:
                $position = array($dstW-$srcW, 0);
                break;
            case self::MERGE_BOTTOM_LEFT:
                $position = array(0, $dstH-$srcH);
                break;
            case self::MERGE_CENTER:
                $x = ($dstW - $srcW) / 2;
                $y = ($dstH - $srcH) / 2;
                $position = array((int)$x, (int)$y);
                break;
            case self::MERGE_BOTTOM_RIGHT:
            default:
                $position = array($dstW-$srcW, $dstH-$srcH);
                break;
        }
        return $position;
    }

    public static function saveAlpha(&$im)
    {
        imagealphablending($im, false);
        imagesavealpha($im, true);
    }
    
    public function getSite()
    {
        return $this->_site;
    }
    
    public function getVersion()
    {
        return $this->_version;
    }
    
    public function getAuthor()
    {
        return $this->_author;
    }
    
    /**
     * 析构函数
     */
    public function __destruct()
    {
        is_resource($this->_image) && imagedestroy($this->_image);
    }
}

