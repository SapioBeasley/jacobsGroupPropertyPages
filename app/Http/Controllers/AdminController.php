<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $properties = Property::all();

        return view('admin')
            ->with([
                'properties' => $properties,
            ]);
    }

    public function propertyCreate()
    {
        return view('property.create');
    }

    public function propertyEdit(Request $request, $id)
    {
        $property = Property::find($id);

        return view('property.edit')
            ->with([
                'property' => $property
            ]);
    }

    public function propertyUpdate(Request $request, $id)
    {
        $property = Property::where('id', '=', $id);

        foreach ($request->all() as $key => $value) {
            $updateData[$key] = $value;
        }

        unset($updateData['_method']);
        unset($updateData['_token']);

        $updateData['slug'] =  static::slugify($updateData['streetAddress'] . ' ' . $updateData['city'] . ' ' . $updateData['state'] . ' ' . $updateData['zipcode']);
        $updateData['image'] = $request->cookie()['image'];

        $property->update($updateData);

        return redirect()->route('property.edit', $property->first()->id)
            ->with('success_message', 'Property Updated')->withCookie(\Cookie::forget('image'));
    }

    public function propertyStore(Request $request)
    {
        $createData = $request->all();

        $createData['slug'] = static::slugify($createData['streetAddress'] . ' ' . $createData['city'] . ' ' . $createData['state'] . ' ' . $createData['zipcode']);
        $createData['image'] = $request->cookie()['image'];

        $property = Property::create($createData);

        return redirect()->route('index')
            ->with('success_message', 'New Property Added')->withCookie(\Cookie::forget('image'));
    }


























    public function propertyDestroy(Request $request, $id)
    {
        $property = Property::find($id);

        $property->delete();

        return redirect()->back()
            ->with('success_message', 'Property Deleted');
    }

    public function upload(Request $request)
    {
        $destinationPath = 'uploads'; // upload path
        $extension = $request->file('file')->getClientOriginalExtension(); // getting file extension
        $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
        $upload_success = $request->file('file')->move($destinationPath, $fileName); // uploading file to given path

        if ($upload_success) {
            return response()->json([
                'success' => 200,
                'image' => $fileName
            ])->withCookie(cookie('image', $fileName, 4500));
        } else {
            return response()->json('error', 400);
        }
    }

    static public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }
}
