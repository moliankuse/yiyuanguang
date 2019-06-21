<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>循环练习</title>
</head>

<body>
		<?php
      		for($y=1;$y<=9;$y++){
				for($i=1;$i<=$y;$i++){
					echo $y.'*'.$i.'='.($y*$i)."\t";
					}
					echo '<br/>';
				}
					echo'<hr>';
				for($q=0;$q<6;$q++){
					for($w=0;$w<=$q;$w++){
						echo '*';
						}
						echo '<br/>';
					}
				
				
		
		?>

</body>
</html>