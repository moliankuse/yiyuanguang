<?php
           $monthName = array(1=>"January", "February", "March",//初始化一个数组
        "April", "May", "June", "July", "August",
        "September", "October", "November", "December");
    print("英语的六月是 $monthName[6] <BR>\n");//打印数组中的第6个元素
		?>
    
    <?php
			$monthName = array(
			/*定义$monthName[1]到$monthName[12]*/
			1=>"January","February","March",
			"April","May","June",
			"July","August","September",
			"October","November","December",
			/*定义$monthName["Jan"]到$monthName[Dec]*/
			"Jan"=>"January", "Feb"=>"February",
			"Mar"=>"March",   "Apr"=>"Aprol",
			"May"=>"May",      "Jun"=>"June",
			"Jul"=>"July",   "Aug"=>"August",
			"Sep"=>"September","Oct"=>"October",
			"Nov"=>"November","Dec"=>"December",
			/*定义$minthName["Jun"]到$monthName[Dec]*/
			"January"=>"January", "February"=>"February",
        "March"=>"March", "April"=>"April", 
        "May"=>"May", "June"=>"June", 
        "July"=>"July", "August"=>"August",
        "September"=>"September", "October"=>"October", 
        "November"=>"November", "December"=>"December"
			);
		/*打印相关的元素*/
    print("Month <B>5</B> is <B>" . $monthName[5]. "</B><BR>\n");
    print("Month <B>Aug</B> is <B>" . $monthName["Aug"] . "</B><BR>\n");
    print("Month <B>June</B> is <B>" . $monthName["June"] . "</B><BR>\n");
		
		?>
