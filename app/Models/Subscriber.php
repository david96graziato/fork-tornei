<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Subscriber extends Model {

    protected $fillable = array('name', 'surname', 'birthday', 'email', 'phone', 'fit', 'club', 'score_id', 'category_id', 'type_id');

    public function category() {
    	return $this->belongsTo('App\Models\SubscriberCategory');
    }

    public function score() {
    	return $this->belongsTo('App\Models\SubscriberScore');
    }

    public function type() {
    	return $this->belongsTo('App\Models\SubscriberType');
    }

}
