<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;
use App\Image;
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
        $property = CrudHelper::show(new \App\Property, 'id', $id, ['images']);

        if ($property !== null) {
            $property = $property->first()->toArray();
        }

        return view('property.edit')
            ->with([
                'property' => $property,
                'images' => $property['images']
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
        $property = CrudHelper::show(new \App\Property, 'id', $id)->first()

        $destinationPath = 'uploads/property/' . $id; // upload path
        $extension = $request->file('file')->getClientOriginalExtension(); // getting file extension
        $fileName = $property->slug . rand(0, 999) . '.' . $extension; // renameing image
        $upload_success = $request->file('file')->move($destinationPath, $fileName); // uploading file to given path

        if ($upload_success) {

            $image = new \App\Image(['url' => $destinationPath . '/' . $fileName]);

            $property->images()->save($image);

            return response()->json([
                'success' => 200,
                'image' => $fileName
            ]);
        } else {
            return response()->json('error', 400);
        }
    }

    public function makeImageFeatured($id)
    {
        $imageToBe = CrudHelper::show(new \App\Image, 'id', $id);

        $imageNotToBe = CrudHelper::show(new \App\Image, 'featured', 1)->first();

        if ($imageNotToBe !== null) {

            $imageNotToBe = CrudHelper::show(new \App\Image, 'featured', 1);
            $imageNotToBe = $imageNotToBe->update(['featured' => 0]);
        }

        $imageToBe = $imageToBe->update(['featured' => 1]);

        return redirect()->back()
            ->with('success_message', 'Image Made Featured');
    }

    public function imageDestroy($id)
    {
        $image = CrudHelper::destroy(new \App\Image, 'id', $id);

        return redirect()->back()
            ->with('success_message', 'Image Deleted');
    }
}
