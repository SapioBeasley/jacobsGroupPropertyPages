<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PropertiesController extends Controller
{
	public function show(Request $request, $addressSlug)
	{
		$property = Property::where('slug', '=', $addressSlug);
		$property = $property->first();

		if ($property !== null) {
			$property = $property->toArray();
		}

		return view('property.show')
			->with([
				'property' => $property,
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
