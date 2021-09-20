<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Helpers\Sonnys\Action;
use App\Helpers\Sonnys\Television;
use App\Helpers\Sonnys\CableBox;
use App\Helpers\Sonnys\CableBoxRemote;
use App\Helpers\Sonnys\TVRemote;
use App\Helpers\Sonnys\UniversalRemote;
use App\Helpers\Sonnys\RemoteControlUser;


class RemotePushController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $req) {

               $remote_type = NULL !== $req->input('remote_type') ? $req->input('remote_type') : '' ;
$tab = new Action();
        /* 
        $nameinfo = ['name' => 'James'];
        $resp = new Response('Hello world', 200);
        $view = view('greeting', $nameinfo)
        ->with('action', $action);
        */

$_SESSION['tab'] =  $tab;
$_SESSION['remote_type']= $remote_type;
 return redirect()->to( '/#tab-3' );

//$nameinfo = [];
  //$view = view('homepage', $nameinfo)->with('tab',  $tab)
  //      ->with('remote_type',  $remote_type);

    //    $redirect =  redirect(); 
    //return $view; 
    //$redirect->with('remote_type',  $remote_type)->to('/#tab-3');
  //  ->with('remote_type',  $remote_type);

   

        
    }

    //
}
