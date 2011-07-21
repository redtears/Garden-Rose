<?php
	function testAjax($param1, $param2){
		$objResponse = new xajaxResponse();
		$result = $param1 + $param2;
		$objResponse->addAlert('The Result is :' . $result);
		return $objResponse;
	}

?>