<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
		<?php
  $Cities[] = "<B>北京</B>";    //等同于$Cities[0] = "北京"
    $Cities[] = "<B>天津</B>";    //等同于$Cities[1] = "天津"
    $Cities[] = "<B>上海</B>";    //等同于$Cities[2] = "上海"
    $Cities[] = "<B>深圳</B>";    //等同于$Cities[3] = "深圳"
    /* 
    ** 统计元素个数 
    */
    $indexLimit = count($Cities);   //把数组中元素的个数赋给$indexLimit
    /* 
    ** 打印所有数组 
    */
    for($index=0; $index < $indexLimit; $index++)
    {
        print("第 $index 个城市是 $Cities[$index]。 <BR>\n");
    }
		?>

</body>
</html>