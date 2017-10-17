<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Restaurant;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('list_food'))
          {
            $foods = Food::all();
            return view('food.index',compact('foods'));
          }
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows('create_food'))
          {
            $restaurants = Restaurant::all();
            return view('food.create',compact('restaurants'));
          }
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::allows('create_food'))
          {
            $food = new Food();
            $food->name = $request->Input(['name']);
            $food->price = $request->Input(['price']);
            $food->restaurant_id = $request->Input(['restaurant_id']);
            $food->user_id = Auth::user()->id;

            if($request->hasFile('display_image'))
                {
                    $file = Input::file('display_image');            
                    $filePath = time().str_random(10).'.'.$request->display_image->getClientOriginalExtension();           
                    $food->display_image = $filePath;
                    $file->move('files/', $filePath);
                }
            //dd($food);
            $food->save();
            return Redirect::to('foods');
          }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::allows('edit_food'))
          {
            $food=Food::find($id);
            $restaurants = Restaurant::all();
            return view('food.edit',compact('food','restaurants'));
          }
        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Gate::allows('edit_food'))
          {
            $food= Food::find($id);       
            $food->name = Input::get('name'); 
            $food->price = Input::get('price');
            $food->restaurant_id = Input::get('restaurant_id');
            $food->user_id = Auth::user()->id;

            if($request->hasFile('display_image'))
                {
                    $file = Input::file('display_image');    
                    $filePath = time().str_random(10).'.'.$request->display_image->getClientOriginalExtension();           
                    $food->display_image = $filePath;
                    $file->move('files/', $filePath);
                }       
            $food->save();         
            return Redirect::to('foods');
        }
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::allows('edit_food'))
          {
            $food = Food::find($id);
            $food->delete();
            return Redirect::to('foods');
        }
        return redirect('/');
    }
}
