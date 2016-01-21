<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Sapioweb\CrudHelper\CrudyController as CrudHelper;

class PropertiesController extends Controller
{
	public function show(Request $request, $addressSlug)
	{
       	$property = CrudHelper::show(new \App\Property, 'slug', $addressSlug, ['images']);

		if ($property !== null) {
			$property = $property->toArray();
		}

		foreach ($property['images'] as $images) {

			if ($images['featured'] == 1) {
				$featuredImage = $images;
			}
		}

		return view('property.show')
			->with([
				'property' => $property,
				'featuredImage' => isset($featuredImage) ? $featuredImage : []
			]);
	}

	public function inquire(Request $request, $id)
	{
		$property = Property::find($id);
		$property = $property->first()->toArray();

		$data = array_merge($property, $request->all());

		\Mail::send('email.inquire', $data, function ($m) use ($data) {
			$m->from(env('INQUIRE_EMAIL', 'andreas@sapioweb.com'), 'Your Application');
			$m->to(env('INQUIRE_EMAIL', 'andreas@sapioweb.com'), $data['first_name'])->subject('New Property Inquire!');
        	});

		return redirect()->back()
			->with('success_message', 'Your Inquire has been sent, thank you');
	}
}
