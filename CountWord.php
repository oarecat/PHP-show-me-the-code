<?php 
#第4题:任一个英文的纯文本文件，统计其中的单词出现的个数。
function word_count($sentence){ 
	$parrten = "/[a-zA-Z]+/";
  	preg_match_all($parrten,$sentence,$arr,PREG_SET_ORDER);
    	return count($arr); 
} 
$word = file_get_contents("./content.txt");
echo $word.'<br/>';
echo word_count($word); 
