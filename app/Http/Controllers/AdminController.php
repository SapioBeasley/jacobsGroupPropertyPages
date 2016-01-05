<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Sapioweb\CrudHelper\CrudyController as CrudHelper;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $properties = CrudHelper::index(new \App\Property);

        return view('admin')->with([
            'properties' => $properties
        ]);
    }

    public function propertyCreate()
    {
        return view('property.create');
    }

    public function propertyEdit(Request $request, $id)
    {
        $property = CrudHelper::show(new \App\Property, 'id', $id);

        return view('property.edit')
            ->with([
                'property' => $property
            ]);
    }

    public function propertyUpdate(Request $request, $id)
    {
        $property = CrudHelper::show(new \App\Property, 'id', $id);

        foreach ($request->all() as $key => $value) {
            $updateData[$key] = $value;
        }

        unset($updateData['_method']);
        unset($updateData['_token']);

        $updateData['slug'] =  CrudHelper::slugify($updateData['streetAddress'] . ' ' . $updateData['city'] . ' ' . $updateData['state'] . ' ' . $updateData['zipcode']);

        $property->update($updateData);

        return redirect()->route('property.edit', $property->first()->id)
            ->with('success_message', 'Property Updated');
    }

    public function propertyStore(Request $request)
    {
        $createData = $request->all();

        $createData['slug'] = CrudHelper::slugify($createData['streetAddress'] . ' ' . $createData['city'] . ' ' . $createData['state'] . ' ' . $createData['zipcode']);

        $property = Property::create($createData);

        return redirect()->route('index')
            ->with('success_message', 'New Property Added');
    }

    public function propertyDestroy(Request $request, $id)
    {
        $property = CrudHelper::destroy(new \App\Property, 'id', $id);

        return redirect()->back()
            ->with('success_message', 'Property Deleted');
    }

    public function upload(Request $request, $id)
    {
        $property = CrudHelper::show(new \App\Property, 'id', $id);

        $destinationPath = 'uploads'; // upload path
        $extension = $request->file('file')->getClientOriginalExtension(); // getting file extension
        $fileName = $property->slug . '.' . $extension; // renameing image
        $upload_success = $request->file('file')->move($destinationPath, $fileName); // uploading file to given path

        if ($upload_success) {
            return response()->json([
                'success' => 200,
                'image' => $fileName
            ]);
        } else {
            return response()->json('error', 400);
        }
    }
}
