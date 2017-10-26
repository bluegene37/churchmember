<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhonebookRequest;
use App\Phonebook;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/phonebook');
    }

    public function getData()
    {
        return response()->json([
            'message' => 'Succussfully retrieve resources',
            'response' => true,
            'data' => Phonebook::orderBy('name', 'ASC')->get()
        ]);
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
        $pb = new Phonebook;
        $pb->name = $request->name;
        $pb->email = $request->email;
        $pb->phone = $request->phone;
        $pb->save();
        
        return $pb;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function show(Phonebook $phonebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Phonebook $phonebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $pb = Phonebook::findOrFail($id);
        $pb->fill(request()->all())->save();

        return response()->json([
            'message' => 'Successfully updated',
            'response' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phoneBook = Phonebook::findOrFail($id);
        $phoneBook->delete();

        return response()->json([
            'message' => 'Successfully deleted',
            'response' => true
        ]);
    }
}
