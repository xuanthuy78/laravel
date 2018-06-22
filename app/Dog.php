<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
	protected $table = 'dogs';
    protected $fillable = ['name', 'breed_id'];

    public function breed()
    {
    	return $this->belongsTo('App\breed');
    }
}
