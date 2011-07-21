<?php
/**
 * Author: PHPER
 * Author URL: http://www.phper.org.cn
 * Date: 2010-09-16
 * 
 * watermark() - PHP图片加水印函数
 * @param $img - 背景图片(待加水印的图片)地址  必填
 * @param $watermark - 水印图片地址  必填
 * @param $district - 水印位置，0-9，默认：0 （将背景图片按井字分割成9个区域，0为随机位置）
 * @param $watermarkquality - 图片水印质量 默认：72
 * 
 * 举例：
 * if($pic = watermark('./image.jpg','./watermark.png'))
 * {
 * 	echo '<img src="' . $pic . '" border=0 />' ;
 * }
 * else 
 * {
 * 	echo '<img src="./image.jpg" border=0 />';
 * }
 * */


function watermark($img, $watermark, $district = 0, $watermarkquality = 72, $deleteOriginalFile=0)
{
	$imginfo = @getimagesize($img);
	$watermarkinfo = @getimagesize($watermark);
	$img_w = $imginfo[0];
	$img_h = $imginfo[1];
	$watermark_w = $watermarkinfo[0];
	$watermark_h = $watermarkinfo[1];
	if($district == 0) $district = rand(1,9);
	if(!is_int($district) OR 1 > $district OR $district > 9) $district = 9;
	switch($district)
	{
		case 1:
			$x = +5;
			$y = +5;
			break;
		case 2:
			$x = ($img_w - $watermark_w) / 2;
			$y = +5;
			break;
		case 3:
			$x = $img_w - $watermark_w - 5;
			$y = +5;
			break;
		case 4:
			$x = +5;
			$y = ($img_h - $watermark_h) / 2;
			break;
		case 5:
			$x = ($img_w - $watermark_w) / 2;
			$y = ($img_h - $watermark_h) / 2;
			break;
		case 6:
			$x = $img_w - $watermark_w;
			$y = ($img_h - $watermark_h) / 2;
			break;
		case 7:
			$x = +5;
			$y = $img_h - $watermark_h - 5;
			break;
		case 8:
			$x = ($img_w - $watermark_w) / 2;
			$y = $img_h - $watermark_h - 5;
			break;
		case 9:
			$x = $img_w - $watermark_w - 5;
			$y = $img_h - $watermark_h - 5;
			break;
	}
	switch ($imginfo[2]) {
		case 1:
			$im = @imagecreatefromgif($img);
			break;
		case 2:
			$im = @imagecreatefromjpeg($img);
			break;
		case 3:
			$im = @imagecreatefrompng($img);
			break;
	}
	switch ($watermarkinfo[2]) {
		case 1:
			$watermark_logo = @imagecreatefromgif($watermark);
			break;
		case 2:
			$watermark_logo = @imagecreatefromjpeg($watermark);
			break;
		case 3:
			$watermark_logo = @imagecreatefrompng($watermark);
			break;
	}
	if(!$im or !$watermark_logo) return false;
	$dim = @imagecreatetruecolor($img_w,$img_h);
	if(@imagecopy ($dim, $im, 0, 0, 0, 0,$img_w,$img_h ))
	{
		imageCopy($dim, $watermark_logo, $x, $y, 0, 0, $watermark_w, $watermark_h);
	}
	
	if($deleteOriginalFile == 1){
		rename($img, dirname($img).'/ori_'.basename($img));
		$file = $img;
	}
	else{
		$file = dirname($img) . '/water_' . $district . '_' . basename($img);
	}
	
	
	//$file = dirname($img) . '/water_' . $district . '_' . basename($img);
	$result = imagejpeg ($dim,$file,$watermarkquality);
	imagedestroy($watermark_logo);
	imagedestroy($dim);
	imagedestroy($im);
	
	if($deleteOriginalFile == 1){
		unlink(dirname($img).'/ori_'.basename($img));
	}
	
	if($result)
	{
		return $file;
	}
	else
	{
		return false;
	}
}
?>