<?php

namespace App;

// use App\Image;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address',
        'slug',
        'city',
        'state',
        'zipcode',
        'streetAddress',
        // 'image'
        'property_description',
        'type',
        'beds',
        'baths',
        'sqft',
        'bultIn',
        'hoa',
    ];

    /**
     * Get the imaes for the property.
     */
    public function images()
    {
        return $this->belongsToMany('App\Image');
    }
}
