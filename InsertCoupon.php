<?php
#将第1题生成的 200个激活码（或者优惠券）保存到 MySQL关系型数据库中。

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
		insertCoupon($coupon);
	}
}
#把生成的优惠码($coupon)插入数据库中
function insertCoupon($coupon){
	$con = mysql_connect("localhost", "root", "")or die('连接失败'.mysql_error());
	$db = mysql_select_db("test",$con);
	$sql = "insert into coupon (coupon) values ('{$coupon}')";
	$result = mysql_query($sql,$con);
	mysql_close($con);
}
couponNum(10, 200);
