<?php
//require_once(dirname(__FILE__) . '/../AndroidNotification.php');
namespace frontend\components\notification\android;
use frontend\components\notification\AndroidNotification;

class AndroidUnicast extends AndroidNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "unicast";
		$this->data["device_tokens"] = NULL;
	}

}