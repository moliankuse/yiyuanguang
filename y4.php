<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
		<?php
        	function write($text)       //定义function write()函数
    {
        print($text);       //打印字符串
	}

    function writeBold($text)   //定义function write()函数
    {
        print("<B>$text</B>");  //打印字符串
    }

    $myFunction = "write";      //定义变量
    $myFunction("你好!<BR>"); //由于变量后面有括号，所以找名字相同的function函数
    print("<BR>\n");
    $myFunction = "writeBold";  //定义变量
    $myFunction("再见!");     //由于变量后面有括号，所以找名字相同的function函数
    print("<BR>\n");
?>

</body>
</html>