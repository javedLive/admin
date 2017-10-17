<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
class RestaurantController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Gate::allows('list_restaurant'))
          {
            $restaurants = Restaurant::all();
            return view('restaurant.index',compact('restaurants'));
          }
      return redirect('/');
    }

    public function create()
    {
        if(Gate::allows('create_restaurant'))
        {
            return view('restaurant.create');
        }
      return redirect('/');
    }

    public function store(Request $request)
    {
        if(Gate::allows('create_restaurant'))
            {
                $restaurant = new Restaurant();
                $restaurant->name = $request->Input(['name']);
                $restaurant->save();
                return Redirect::to('restaurants');
            }
      return redirect('/');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if(Gate::allows('edit_restaurant'))
        {
            $restaurant=Restaurant::find($id);
            return view('restaurant.edit',compact('restaurant'));
        }
      return redirect('/');
    }

    public function update(Request $request, $id)
    {
        if(Gate::allows('edit_restaurant'))
          {
            $restaurant= Restaurant::find($id);       
            $restaurant->name = Input::get('name');        
            $restaurant->save();         
            return Redirect::to('restaurants');
          }
      return redirect('/');
    }

    public function destroy($id)
    {
        if(Gate::allows('edit_restaurant'))
          {
            $restaurant = Restaurant::find($id);
            $restaurant->delete();
            return Redirect::to('restaurants');
          }
      return redirect('/');
    }
}
