<?php

namespace Sonnys\Application;

// Widgets app
use Sonnys\Application\Widget;
use Sonnys\Application\Support\SupportBase;
use Sonnys\Application\WidgetFactory;
use Sonnys\Application\Support\Widget as SupportWidget;

// Greeter app
use Sonnys\Application\InformalGreeter;
use Sonnys\Application\GreeterInterface;
use Sonnys\Application\GreeterTrait;

// Exam app
use Sonnys\Application\Exam;
use Sonnys\Application\ExamBuilder;
use Sonnys\Application\ExamBuilderInterface;

// Pegasus app
use Sonnys\Application\Bird;
use Sonnys\Application\Horse;
use Sonnys\Application\Greeter;

use Sonnys\Application\Pegasus;
use Sonnys\Application\PegasusInterface;

// nameable app
use Sonnys\Application\Person;
use Sonnys\Application\EmployeeInterface;
use Sonnys\Application\Employee;
use Sonnys\Application\Pet;
use Sonnys\Application\Nameable;
use Sonnys\Application\NameInfo;

// order tracking app 
use \Sonnys\Application\OrderLoader;
use \Sonnys\Application\Customer;
use Sonnys\Application\Order;

// universal remote control / tv app
use Sonnys\Application\RemoteControl;
use Sonnys\Application\RemoteControlUser;
use Sonnys\Application\CableBox;
use Sonnys\Application\CableBoxRemote;
use Sonnys\Application\Television;
use Sonnys\Application\TVRemote;
use Sonnys\Application\UniversalRemote; 




/**
 * 
 */
class Action { //extends ApiController {

	public $params = [];
	public $loggedUser;
	public $orderId;
	public function __construct() {
			// return an instance of Customer
		$this->loggedUser = $this->_getLoggedUser();
		$this->params = $_REQUEST;
		$this->orderId = $this->_getQueryParameter('order_id');
	}
	public function render($tab) {
			
		switch($tab) {
			case 'greeter':
			default:
				$greeter = new Greeter();
				$informalGreeter = new InformalGreeter();
				echo "Greeting" . $greeter->getTarget() . '<br />';
				echo $greeter->sayHello('?') .'<br /><br /><br />';
				echo "Greeting " . $informalGreeter->getTarget() . '<br />';
				echo $informalGreeter->sayHello() . '<br /><br /><br />';
				break;

			case 'pegasus':
				echo 'Pegasus.';
				break;

			case 'universal_remote':
				echo 'Universal Remote.';
				/*
				$universalRemote = new UniversalRemote();

				$remoteControlUser = new RemoteControlUser(UniversalRemote);

				$type =  (isset($_POST['remote_type'])) 
					? strip_tags($_POST['remote_type']) 
					: NULL;

				switch ($type) {
				  default:
				  case 'Television':
				    $remoteControl = new TVRemote();
				    break;

				  case 'CableBox':
				    $remoteControl = new CableBoxRemote();
				    break;

				  case 'Universal':
				    $remoteControl = new UniversalRemote();
				    break;
				}
				$remoteControlUser->setRemoteControl($remoteControl)->pushButton(); */
				break;

			case 'order_tracking':
				echo 'Order Tracking.';
				break;

			case 'naming':
				echo 'Naming.';
				break;

			case 'widgets':
				echo ' Widgets. ';
				break;

			case 'exam':
				
				$attributes = [
				  'time' => time(), 
				  'place' => 'Sonnys', 
				  'timeLimit' => NULL
				];

				$emptyExam = new Exam();
				$examBuilder = new ExamBuilder($emptyExam);

				$fullyInitializedExam = $examBuilder->initAll($attributes);
				$partiallyIntitializedExam = $examBuilder->setTime($attributes['time'])
														 ->setPlace($attributes['place'])
														 ->getExam(); 
				print_r($fullyInitializedExam);
				break;
		}
	}

	private function _getQueryParameter() {
		return !empty($this->params['order_id']) 
				? strip_tags($this->params['order_id']) 
				: 1;
	}

	private function _getLoggedUser() {
		return new Customer('Rasmus','Lerdorf', 1);

	}
}