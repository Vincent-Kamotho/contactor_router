<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $contacts = new Contacts();

        $contacts->full_name = $request->input('fullname');
        $contacts->phone = $request->input('phone');
        $contacts->email = $request->input('email');

        $contacts->save();

        return response()->json([
            "message" => "Saved successfully"
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show()
    {
        $data = Contacts::all()->toArray();
        return response()->json([
            'data'=> $data
        ]);
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
    }

    public function change(Request $request)
    {
        if(!$contact = Contacts::find($request['contactid'])){
            throw new \Exception("Contact not found. Please try again.");
        }
        $contact->id = $request['contactid'];
        $contact->full_name = $request['full_name'];
        $contact->phone = $request['phone'];
        $contact->email = $request['email'];

        $contact->save();

        return response()->json(['Message'=>'Contact updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function remove(Request  $request)
    {
        //  1 Get the element to delete
        //  2 Give the command to delete
        if(!$contact = Contacts::find($request['id'])){
            throw new \Exception("Contact not found. Please try again.");
        }

        //delete the entry
        $contact->delete();

        //return response
        return response()->json(['Message'=>'Contact deleted successfully']);
    }
}
