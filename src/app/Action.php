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
				$horse = new Horse();
				$bird = new Bird();
				$pegasus = new Pegasus($bird, $horse);
				echo '<pre>';
				print_r($horse);
				echo '</pre>';

				echo '<pre>';
				print_r($bird);
				echo '</pre>';

				echo '<pre>';
				print_r($pegasus);
				echo '</pre>';
				break;

			case 'universal_remote':
				echo 'Universal Remote.';
				$type =  (isset($_POST['remote_type'])) 
					? strip_tags($_POST['remote_type']) 
					: NULL;

				$tv = new Television();
				$cablebox = new CableBox();
				$universalRemote = new UniversalRemote($tv, $cablebox);
				$remoteControlUser = new RemoteControlUser($universalRemote);
				if (!empty($type)) {
					echo '<p>You selected <strong>' . $type .'</strong></p>'; 
				}
			
				switch ($type) {
				  default:
				  case 'Television':
				    $remoteControl = new TVRemote($tv);
				    break;

				  case 'CableBox':
				    $remoteControl = new CableBoxRemote($cablebox);
				    break;

				  case 'Universal':
				    $remoteControl = new UniversalRemote($tv, $cablebox);
				    break;
				}
				$remoteControlUser->setRemoteControl($remoteControl)
								  ->pushButton(); 
				break;

			case 'order_tracking':
				echo 'Order Tracking.';
				$order_id = 1;
				$customer = new Customer('Andi','Gutmans', 1);
				$orderLoader = new OrderLoader();
				$loggedUser = new Customer('Rasmus','Lerdorf', 1);
				$orderObject = $orderLoader->load($order_id, $customer)
					                       ->validateOwnership($loggedUser);
				$allorders = Order::getAll();
					echo '<pre>'; 
				print_r($allorders);
					echo '</pre>';
				break;

			case 'naming':
				echo 'Naming.';
				$pet = new Pet();
				$person = new Person();
				try {
					$employee = new Employee(); 
				}
				catch (Exception $e) {
					echo $e->getMessage();
				}

				echo '<pre>';
				print_r($person);
				echo '</pre>';

				echo '<pre>';
				print_r($employee);
				echo '</pre>';

				echo '<pre>';
				print_r($pet);
				echo '</pre>';
				break;

			case 'widgets':
				echo ' Widgets. ';

				$widget = WidgetFactory::Create();
				echo '<pre>';
				print_r($widget );
				echo '</pre>';

				$supportWidget = WidgetFactory::Create('Support');
				echo '<pre>';
				print_r($supportWidget );
				echo '</pre>';
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
				echo '<pre>';
				print_r($partiallyIntitializedExam);
				echo '</pre>';
				echo '<pre>';
				print_r($fullyInitializedExam);
				echo '</pre>';		
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