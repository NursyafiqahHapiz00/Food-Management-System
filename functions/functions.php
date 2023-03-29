<?php
	include("includes/db.php");
	//$db = mysqli_connect("localhost","root","","e-dietary");

	/// IP address code starts /////
	function getRealUserIp(){
		switch(true){
		  case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
		  case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
		  case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
		  default : return $_SERVER['REMOTE_ADDR'];
		}
	 }
	/// IP address code Ends /////

	// items function Starts ///
	function items(){
	global $db;

	
	}
	// items function Ends ///

	// total_price function Starts //
	function total_price(){
	global $db;
	
	
		}
	// total_price function Ends //

	// getPro function Starts home//
	function getPro(){
	global $db;

	
		}
	// getProducts Function Ends ///

	/// getPaginator Function Starts ///
	function getPaginator(){

	/// getPaginator Function Code Starts ///
	$per_page = 6;
	global $db;
	$aWhere = array();
	$aPath = '';


	/// Products Categories Code Starts ///
	if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){
		foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

			if((int)$sVal!=0){
				$aWhere[] = 'p_cat_id='.(int)$sVal;
				$aPath .= 'p_cat[]='.(int)$sVal.'&';
			}
		}
	}
	/// Products Categories Code Ends ///

	/// Categories Code Starts ///
	if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){
		foreach($_REQUEST['cat'] as $sKey=>$sVal){

			if((int)$sVal!=0){
				$aWhere[] = 'cat_id='.(int)$sVal;
				$aPath .= 'cat[]='.(int)$sVal.'&';
			}
		}
	}
	/// Categories Code Ends ///
	$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');
	$query = "select * from products ".$sWhere;
	$result = mysqli_query($db,$query);

	$total_records = mysqli_num_rows($result);
	$total_pages = ceil($total_records / $per_page);

	echo "<li><a href='shop.php?page=1";

	if(!empty($aPath)){ echo "&".$aPath; }
		echo "' >".'First Page'."</a></li>";
		for ($i=1; $i<=$total_pages; $i++){
		echo "<li><a href='shop.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."' >".$i."</a></li>";
	};

		echo "<li><a href='shop.php?page=$total_pages";

	if(!empty($aPath)){ echo "&".$aPath; }
		echo "' >".'Last Page'."</a></li>";
	/// getPaginator Function Code Ends ///
	}

	/// getPaginator Function Ends ///
?>
