<?php

namespace App\Http\Controllers;

use App\CarWebsiteModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() //function to view car details page
    {
        $carDetails = CarWebsiteModel::paginate(10);
        return view('index', compact('carDetails'));
    }

    public function myUploads (Request $request) //function to view my own uploads
    {
        $myCars=$request->user()->cars()->paginate(10);
        return view('myUploads', compact('myCars'));
    }
    public function upload (Request $request) //function to view adding uploads
    {
        $upload = CarWebsiteModel::paginate(10);
        return view('upload', compact('upload'));
    }

    public function aboutPage() // returns the view about us
    {

        return view ('aboutUs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(CarWebsiteModel $createUpload) //function to go to the create page
    {
        return view ('carDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) //function to store new created entries
    {
        $attributes = request (['user_id','u_name', 'type', 'fuel', 'brand', 'model', 'year']);
        CarWebsiteModel::create($attributes);
        return redirect()->action('CarWebsiteController@upload')->with('messageUpload', 'You have uploaded your car details!');
    }

    /**
     * Display the specified resource.
     *
     * @param CarWebsiteModel $carWebsiteModel
     * @return Response
     */
    public function show(CarWebsiteModel $viewDetails) //function to show entries
    {
        return view('carDetails.show', compact('viewDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CarWebsiteModel $carWebsiteModel
     * @return Response
     */
    public function edit(CarWebsiteModel $myUploads) //function to show only my uploads to the system
    {
        return view ('carDetails.edit', compact ('myUploads'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param CarWebsiteModel $carWebsiteModel
     * @return Response
     */
    public function update(Request $request, CarWebsiteModel $editDetailForm) // function to update current entries
    {
        $editDetailForm->update(request(['registration_no', 'type', 'fuel', 'brand', 'model', 'year']));
        return redirect()->action('CarWebsiteController@myUploads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CarWebsiteModel $carWebsiteModel
     * @return Response
     */

    public function destroy(CarWebsiteModel $carWebsiteModel) //function to delete entries
    {
        $carWebsiteModel->delete();
        return redirect()->action('CarWebsiteController@myUploads');
    }

    public function search(Request $searchReq) //function to search by brand of the cars
    {
        $search = $searchReq->get('search');
        $carDetails = $searchReq->user()->cars()->where('brand', 'like', ['%'.$search.'%'])->paginate(10);
        return view('index', compact('carDetails'));
    }
}
