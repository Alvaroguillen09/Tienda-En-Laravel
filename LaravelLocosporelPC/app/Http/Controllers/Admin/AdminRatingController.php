<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;

class AdminRatingController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Valoraciones - Online Store";
        $viewData["rating"] = Rating::all();
        return view('admin.ratings.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        Rating::validate($request);

        $newRating = new Rating();
        $newRating->setUserId($request->input('user_id'));
        $newRating->setProdId($request->input('prod_id'));
        $newRating->setStarsRated($request->input('stars_rated'));
        $newRating->save();

        return back();
    }

    public function delete($id)
    {
        Rating::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Editar Valoración - Online Store";
        $viewData["rating"] = Rating::findOrFail($id);
        return view('admin.ratings.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        Rating::validate($request);

        $rating = Rating::findOrFail($id);
        $rating->setName($request->input('user_id'));
        $rating->setEmail($request->input('prod_id'));
        $rating->setPassword($request->input('stars_rated'));
        $rating->save();
        return redirect()->route('admin.ratings.index');
    }
}
