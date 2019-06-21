<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
		 <?php
            for($y=8;$y>6;$y--){     //小循环条件    
           echo 'asdjfsadjf<br/>';
            }
			
			for($s=0;$s<104;$s++){       
				if($s%2==0){     //余2等于0 
					echo '这是能被2整除的数：'.$s.'<br/>';
					} 
				}
			
			
			//for循环里面如果有for循环的次数，外层循环一次， 内循环执行一遍。
			for($q=0;$q<3;$q++){
				echo '这里是$q循环'.$q.'<br/>';
			
				for($w=0;$w<4;$w++){
					echo '这里是$w循环'.$w.'<br>';
					
					}
					echo'<hr/>';
				}
			
			
		?>


</body>
</html>