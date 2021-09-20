<?php

namespace App\Helpers\Sonnys;

// Widgets app
use App\Helpers\Sonnys\Widget;
use App\Helpers\Sonnys\Support\SupportBase;
use App\Helpers\Sonnys\WidgetFactory;
use App\Helpers\Sonnys\Support\Widget as SupportWidget;

// Greeter app
use App\Helpers\Sonnys\InformalGreeter;
use App\Helpers\Sonnys\GreeterInterface;
use App\Helpers\Sonnys\GreeterTrait;

// Exam app
use App\Helpers\Sonnys\Exam;
use App\Helpers\Sonnys\ExamBuilder;
use App\Helpers\Sonnys\ExamBuilderInterface;

// Pegasus app
use App\Helpers\Sonnys\Bird;
use App\Helpers\Sonnys\Horse;
use App\Helpers\Sonnys\Greeter;

use App\Helpers\Sonnys\Pegasus;
use App\Helpers\Sonnys\PegasusInterface;

// nameable app
use App\Helpers\Sonnys\Person;
use App\Helpers\Sonnys\EmployeeInterface;
use App\Helpers\Sonnys\Employee;
use App\Helpers\Sonnys\Pet;
use App\Helpers\Sonnys\Nameable;
use App\Helpers\Sonnys\NameInfo;

// order tracking app 
use \App\Helpers\Sonnys\OrderLoader;
use \App\Helpers\Sonnys\Customer;
use App\Helpers\Sonnys\Order;

// universal remote control / tv app
use App\Helpers\Sonnys\RemoteControl;
use App\Helpers\Sonnys\RemoteControlUser;
use App\Helpers\Sonnys\CableBox;
use App\Helpers\Sonnys\CableBoxRemote;
use App\Helpers\Sonnys\Television;
use App\Helpers\Sonnys\TVRemote;
use App\Helpers\Sonnys\UniversalRemote; 

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
		$out = '';	
		switch($tab) {
			case 'greeter':
			default:
				$greeter = new Greeter();
				$informalGreeter = new InformalGreeter();
				$out .= "Greeting" . $greeter->getTarget() . '<br />';
				$out .=  $greeter->sayHello('?') .'<br /><br /><br />';
				$out .=  "Greeting " . $informalGreeter->getTarget() . '<br />';
				$out .=  $informalGreeter->sayHello() . '<br /><br /><br />';
				break;

			case 'pegasus':
				$out .=  'Pegasus.';
				$horse = new Horse();
				$bird = new Bird();
				$pegasus = new Pegasus($bird, $horse);
				$out .=  '<pre>';
				$out .= print_r($horse,1);
				$out .=  '</pre>';

				$out .=  '<pre>';
				$out .= print_r($bird,1);
				$out .=  '</pre>';

				$out .=  '<pre>';
				$out .= print_r($pegasus,1 );
				$out .=  '</pre>';
				break;

			case 'universal_remote':
				$out .= 'Hello Remote Control User.<br />';


                $type = (isset($_SESSION['remote_type'])) ? $_SESSION['remote_type'] : NULL;
                $tv = new Television();
                $cablebox = new CableBox();
                $universalRemote = new UniversalRemote($tv, $cablebox);
                $remoteControlUser = new RemoteControlUser($universalRemote);
                if (!empty($type)) {
                    $out .=  '<p>You selected <strong>' . $type .'</strong></p>'; 
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
				$out .=  'Order Tracking.';
				$order_id = 1;
				$customer = new Customer('Andi','Gutmans', 1);
				$orderLoader = new OrderLoader();
				$loggedUser = new Customer('Rasmus','Lerdorf', 1);
				try {
					$orderObject = $orderLoader->load($order_id, $customer)
					                           ->validateOwnership($loggedUser);
				} catch (\Exception $e) {
					$out .=  $e->getMessage();
				}
				$allorders = Order::getAll();
					$out .=  '<pre>'; 
					$out .= print_r($customer, 1);
					$out .= print_r($orderLoader, 1);
					$out .= print_r($loggedUser, 1);
					$out .= print_r($allorders, 1);
					$out .=  '</pre>';
				break;

			case 'naming':
				$out .=  'Naming.';
				$pet = new Pet();
				$person = new Person();
				try {
					$employee = new Employee(); 
				}
				catch (Exception $e) {
					$out .=  $e->getMessage();
				}

				$out .=  '<pre>';
				$out .= print_r($person,1);
				$out .=  '</pre>';

				$out .=  '<pre>';
				$out .= print_r($employee,1);
				$out .=  '</pre>';

				$out .=  '<pre>';
				$out .= print_r($pet,1);
				$out .=  '</pre>';
				break;

			case 'widgets':
				echo ' Widgets. ';

				$widget = WidgetFactory::Create();
				$out .= '<pre>';
				$out .= print_r($widget,1 );
				$out .= '</pre>';

				$supportWidget = WidgetFactory::Create('Support');
				$out .= '<pre>';
				$out .= print_r($supportWidget,1 );
				$out .= '</pre>';
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
				$out .= '<pre>';
				$out .=print_r($partiallyIntitializedExam,1);
				$out .= '</pre>';
				$out .= '<pre>';
				$out .=print_r($fullyInitializedExam,1);
				$out .= '</pre>';		
				break;
		}
		return $out;
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