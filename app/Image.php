<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'url'
    ];

    /**
     * Get the property that owns the images.
     */
    public function property()
    {
        return $this->belongsToMany('App\Property');
    }
}
