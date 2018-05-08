<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\Subscriber;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin/index');
    }

    public function tables() {
        $data = array(
            'subscribers' => Subscriber::all()
        );
        return view('admin/tables/index')->with($data);
    }

    public function deleteSubscriber($id) {
        $subscriber = Subscriber::find($id);

        if (!$subscriber || !$subscriber->delete()) {
            return AdminController::message('danger_messsage', 'Errore durante l\'eliminazione');
        }

        return AdminController::message('success_message', 'Iscrizione eliminata con successo');
    }

    public static function message($type, $display) {
        $message = Session::flash($type, $display);
        return redirect('/admin')->withMessage($message);
    }

}
