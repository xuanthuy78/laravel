<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\PriceScope;


class Dog extends Model
{
	protected $table = 'dogs';
    protected $fillable = ['name', 'breed_id','price'];

    public function breed()
    {
    	return $this->belongsTo('App\breed');
    }

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::addGlobalScope('price', function (Builder $builder) {
    //         $builder->where('price', '<', 1000);
    //     });
    // }
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new PriceScope);
    }
   	public function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
