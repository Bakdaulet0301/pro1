<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gym;
use App\Http\Resources\GymResource;
class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexes()
    {
        $gyms = Gym::paginate(100);
        return GymResource::collection($gyms);
}
    public function index()
    {
        //
        return view('gyms');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $gym=new Gym(); 
        $gym->firstname=$request->input('firstname');
        $gym->lastname=$request->input('lastname');
        $gym->email=$request->input('email');
        $gym->phone=$request->input('phone');
        $gym->save();
    }

    public function stores(Request $request)
    {
         $gym = new Gym();
        $gym->firstname = $request->firstname;
        $gym->lastname = $request->lastname;
        $gym->email = $request->email;
        $gym->phone = $request->phone;
        $gym->save();
        return response()->json($gym);
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
         $gym = Gym::findOrFail($id);
        return new GymResource($gym);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
          $gym = Gym::findOrFail($id);
        $gym->firstname = $request->firstname;
        $gym->lastname = $request->lastname;
        $gym->email = $request->email;
        $gym->phone = $request->phone;
        if($gym->save()){
            return new GymResource($gym);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $gym = Gym::findOrFail($id);
        if($gym->delete()){
            return new GymResource($gym);
        }
        //
    }
}
