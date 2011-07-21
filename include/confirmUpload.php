<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/Garden-Rose/include/util/watermark.php");

	function confirmUpload($url, $name){
 		$objResponse = new xajaxResponse();
// 		$last_pos = strripos($url, '/');
// 		$length = strlen($url);
// 		$file_name=substr($url, $last_pos+1);
		if(copy($url, '../img/files/'.$name)){
			unlink($url);
			watermark('../img/files/'.$name, '../img/logo.png',0,72,1);

			$objResponse->addScript("confirmUpload_back('". $name. "');");
			//$objResponse->addAlert('success');
		}
		else{
			//$objResponse->addAlert('Fail');
		}
 		//$objResponse->addAlert('test');
		
		
		return $objResponse;
	}
?>