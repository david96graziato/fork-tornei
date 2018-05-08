<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Mail\SubscriberConfirmation;
use App\Models\Subscriber;
use App\Models\SubscriberCategory;
use App\Models\SubscriberScore;
use App\Models\SubscriberType;
use Auth;
use Session;

class TorneiController extends Controller {

	// Frontend
    public function index() {
        if (Session::has('message')) {
            Session::reflash();
        }
        $data = array(
            'categories' => SubscriberCategory::all(),
            'scores' => SubscriberScore::all(),
            'types' => SubscriberType::all()
        );
        return view('pages/index')->with($data);
    }

    public function storeData(Request $request) {
		$this->validate($request,[
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'birthday' => 'required',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|numeric|digits_between:3,11',
            'fit' => 'required|numeric|digits_between:8,11',
            'club' => 'required|string|max:255',
            'score_id' => 'required|exists:subscriber_scores,id',
            'category_id' => 'required|exists:subscriber_categories,id',
            'type_id' => 'required|exists:subscriber_types,id',
        ]);

        // Aggiungi nuovo partecipante
        $subscriber = new Subscriber();
        $subscriber->name = $request->input('name');
        $subscriber->surname = $request->input('surname');
        $subscriber->birthday = $request->input('birthday');
        $subscriber->email = $request->input('email');
        $subscriber->phone = $request->input('phone');
        $subscriber->fit = $request->input('fit');
        $subscriber->club = $request->input('club');
        $subscriber->score_id = $request->input('score_id');
        $subscriber->category_id = $request->input('category_id');
     	$subscriber->type_id = $request->input('type_id');
     	$subscriber->note = $request->input('note');

        $subscriber->save();

//        Mail::to($subscriber->email)->send(new SubscriberConfirmation($subscriber));
        return TorneiController::message('success_message','Iscrizione effettuata con successo');
	}

    public static function message($type, $display) {
        $message = Session::flash($type, $display);
        return redirect('/')->withMessage($message);
    }

}
