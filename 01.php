
<?PHP $a=5;
    echo var_dump  ($a),'<br>';
    //整形int
	
    $b=25.6;
    echo var_dump  ($b),'<br>';
	
    $c=true;
	
    $d=false;
	
    echo var_dump  ($c),'<br>';
	
    echo var_dump  ($d),'<br>';
	
    $name='易远光';
    echo var_dump  ($name),'<br>';
	
    $shuzu=array();
    echo var_dump($shuzu),'<br>';
	
    $obj= new stdclass();
    echo var_dump($obj),'<br>';
	
	error_reporting(E_ALL^E_NOTICE^E_WARNING); 
    $res=fopen('text_2.php','r');
    echo var_dump($res),'<br>';
	
    $w=null;
    echo var_dump($w),'<br>';
	
    $name="abc  \n哈哈哈哈";
				  echo  "$name";
	
?>
