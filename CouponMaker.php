<?php
#作为 Apple Store App 独立开发者，你要搞限时促销，为你的应用生成激活码（或者优惠券），如何生成 200 个激活码（或者优惠券）？

#生成一个指定长度($length)的字符串，包含大写英文字母,小写英文字母和数字
function randomStr($length){
	$arr = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
	$str = '';
	$arr_len = count($arr);
	for ( $i = 0; $i < $length; $i++ ) {
		$rand = mt_rand(0, $arr_len-1);
		$str.=$arr[$rand];
	}

	return $str;
}
#生成指定数量的优惠码($num)
function couponNum($length,$num){
	for ( $i = 0; $i < $num; $i++ ) {
		$coupon = randomStr($length);
		echo $coupon."<br/>";
	}
}
couponNum(10, 200);
