<?php
				  $a= true+1;
				  echo $a,'<br/>';
				  $b= false+1;
				  echo $b,'<br/>';
				  echo null+1,'<br/>';
				  
				  $str = 1+'abcd';
				  echo $str,'<br/>';
				  echo 'clive是帅哥',null,'这是真的','<br/>';
				  echo 'clive是帅哥',false,'这是真的','<br/>';
				  echo true,'<br/>';
				error_reporting(E_ALL^E_NOTICE^E_WARNING);  
				$arr = Array();
				echo $arr,'<br/>';
				
				$hanndle = fopen('text.php','r');
				echo $hanndle,'<br/>';
				
				/*
				 * if (如果这里为真){
				 * 就会执行这里面的代码
				 * } else {
				 * 如果为假 就会执行这里的代码？
				 * }
				 *
				 
				 
				 *
				 **/
				 if(false) {
					 echo 'Clive是个帅哥';
					 } else {
					 echo 'Clive是个大帅哥';
						 }
			
				
				
				
				
				
			
            ?>
