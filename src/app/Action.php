<?php

namespace Sonnys\Application;

use \Sonnys\Application\OrderLoader;
use \Sonnys\Application\Customer;


use Sonnys\Application\Widget;
use Sonnys\Application\Support\SupportBase;

use Sonnys\Application\Support\Widget as SupportWidget;

use Sonnys\Application\Exam;
use Sonnys\Application\ExamBuilder;
use Sonnys\Application\ExamBuilderInterface;

use Sonnys\Application\WidgetFactory;

use Sonnys\Application\EmployeeInterface;
use Sonnys\Application\Employee;

use Sonnys\Application\Horse;
use Sonnys\Application\Greeter;
use Sonnys\Application\InformalGreeter;
use Sonnys\Application\GreeterInterface;
use Sonnys\Application\GreeterTrait;
use Sonnys\Application\Pegasus;
use Sonnys\Application\PegasusInterface;

use Sonnys\Application\Pet;
use Sonnys\Application\Person;

use Sonnys\Application\Nameable;
use Sonnys\Application\NameInfo;


use Sonnys\Application\Customer;
use Sonnys\Application\Order;
use Sonnys\Application\OrderLoader;

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

	public function render() {
		$orderId = $this->_getQueryParameter('order_id');
		
		// return an instance of Customer
		$loggedUser = $this->_getLoggedUser();
		


		echo "Greeting" . $greeter->getTarget() . '<br />';
		echo $greeter->sayHello('?') .'<br /><br /><br />';
		echo "Greeting " . $informalGreeter->getTarget() . '<br />';
		echo $informalGreeter->sayHello() . '<br /><br /><br />';








		/*
		$attributes = [
		  'time' => time(), 
		  'place' => 'Sonnys', 
		  'timeLimit' => NULL
		];

		$emptyExam = new Exam();
		$examBuilder = new ExamBuilder($emptyExam);

		$fullyInitializedExam = $examBuilder->initAll($attributes);
		$partiallyIntitializedExam = $examBuilder->setTime()->setPlace()->getExam();

		*/

		/*
		$universalRemote = new UniversalRemote();

		$remoteControlUser = new RemoteControlUser(UniversalRemote);

		$type = NULL;

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
		$remoteControlUser->setRemoteControl($remoteControl)->pushButton();




		*/


	}

	private function _getQueryParameter() {
		return (!empty($_GET['orderid']) 
				? strip_tags($_GET['orderid']) 
				: 1;
	}

	private function _getLoggedUser() {
		return new Customer('Rasmus','Lerdorf', 1);

	}
}