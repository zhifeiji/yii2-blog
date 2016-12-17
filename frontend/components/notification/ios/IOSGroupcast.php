<?php
//require_once(dirname(__FILE__) . '/../IOSNotification.php');
namespace frontend\components\notification\ios;
use frontend\components\notification\IOSNotification;

class IOSGroupcast extends IOSNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "groupcast";
		$this->data["filter"]  = NULL;
	}
}