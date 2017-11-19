<?php
	
	//Xac dinh hang so cho dia chi tuyet doi
	define('BASE_URL', "http://localhost:".$_SERVER['SERVER_PORT']."/learning/travel/");

	/*
	 * 2/20/2017
	 * redirect pages
	 * @param $page
	 */
	function redirect_to($page='index.php'){
		$url=BASE_URL.$page;
		
		header("location: $url");
		exit();
	}
	
	
	/*
	 * 2/20/2017
	 * cut paragraph to show document
	 * @param $text , $length
	 * return string
	 */
	function the_excerpt($text , $length=400){
		$text=htmlentities($text,ENT_COMPAT,'UTF-8');
		
		if(strlen($text)>$length){
			$cutString=substr($text,0,$length);
			$word=substr($text,0,strrpos($cutString,' '));
			
			return $word;
		}
		
		return $text;
	}
	
	/*
	 * 2/20/2017
	 * check admin
	 * 
	 */
	function is_admin(){
		return isset($_SESSION['level']) && ($_SESSION['level']=2);
	}
	
	/*
	 * 2/20/2017
	 * check admin access admin page
	 */
	function admin_access(){
		if(!is_admin()){
			redirect_to();
		}
	}
	function datacheck($data){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
	
	
?>