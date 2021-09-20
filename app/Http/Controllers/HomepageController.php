<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Helpers\Sonnys\Action;

class HomepageController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    public function index(Request $req) {

        $tab = new Action();
        $nameinfo = ['name' => 'James'];
      //  $remote_type = NULL !== $req->input('remote_type') ? 'You selected ' . $req->input('remote_type') : 'No selection yet.' ;


$remote_type = (isset($_SESSION['remote_type'])) ? $_SESSION['remote_type'] : '';
$tab = (isset($_SESSION['tab'])) ? $_SESSION['tab'] : new Action();

        //$resp = new Response('Hello world', 200);
        $view = view('homepage', $nameinfo)
        ->with('tab', $tab)
        ->with('remote_type',  $remote_type);
        return $view;
    }
}