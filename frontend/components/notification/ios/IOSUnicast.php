<?php
//require_once(dirname(__FILE__) . '/../IOSNotification.php');
namespace frontend\components\notification\ios;
use frontend\components\notification\IOSNotification;

class IOSUnicast extends IOSNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "unicast";
		$this->data["device_tokens"] = NULL;
	}

}