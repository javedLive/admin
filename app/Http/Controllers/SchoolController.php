<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class SchoolController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
       if(Gate::allows('list_school'))
            {
                $schools = School::all();
                return view('school.index',compact('schools'));
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
        if(Gate::allows('create_school'))
         {
            return view('school.create');
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
        if(Gate::allows('create_school'))
            {
                $school = new School();
                $school->name = $request->Input(['name']);
                $school->save();
                return Redirect::to('schools');
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
        if(Gate::allows('edit_school'))
        {
            $school=School::find($id);
            return view('school.edit',compact('school'));
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
        if(Gate::allows('edit_school'))
            {
                $school= School::find($id);       
                $school->name = Input::get('name');        
                $school->save();         
                return Redirect::to('schools');
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
        if(Gate::allows('edit_school'))
        {
            $school = School::find($id);
            $school->delete();
            return Redirect::to('schools');
        }
      return redirect('/');
    }
}
