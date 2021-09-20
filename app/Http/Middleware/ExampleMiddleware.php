<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Helpers\Sonnys\Action;
use App\Helpers\Sonnys\Television;
use App\Helpers\Sonnys\CableBox;
use App\Helpers\Sonnys\CableBoxRemote;
use App\Helpers\Sonnys\TVRemote;
use App\Helpers\Sonnys\UniversalRemote;
use App\Helpers\Sonnys\RemoteControlUser;
use Illuminate\Session\Middleware\StartSession;
use Symfony\Component\HttpFoundation\Session\Session;
class ExampleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $req, Closure $next)
    {
/* 
$session = new Session();
$session->start();


 $action = new Action();
                $out = '';
                $type = strip_tags($req->input('remote_type'));
                $session->set('remote_type', $type);
                $session->get('remote_type');
                $type = NULL !== $session->get('remote_type')
                    ? $session->get('remote_type')
                    : '????';
              
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


        $session->set('remote_out', $out);






        return $req; // $next($req); */
        return  $next($req);
    }
}
