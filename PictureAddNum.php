<?php
header("Content-type: image/jpeg");
#创建并载入一幅图像
$im = @imagecreatefromjpeg("img/1.jpg");
#设置文字颜色
$color = imagecolorallocate($im, 255, 0, 0);
#设置文字字体
$fontfile = "./simhei.ttf";
#处理图片
imagettftext($im,30,0,180,40,$color,$fontfile,"1");
#输出处理后的该图片
imagejpeg($im);
