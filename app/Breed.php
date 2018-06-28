<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Breed extends Model
{
	use SoftDeletes;
	protected $table = 'breed';
    protected $fillable = ['name'];
    protected $dates = ['deleted_at'];

    public function dogs()
    {
    	return $this->hasMany('App\Cat');
    }
}
