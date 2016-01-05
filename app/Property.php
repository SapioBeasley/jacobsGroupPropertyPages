<?php

namespace App;

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
}
