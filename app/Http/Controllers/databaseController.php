<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class databaseController extends Controller
{
    //
    public function index() {

    	$countries = \App\Country::all();
    	return view('form', compact('countries'));
    }

    public function insert(Request $request) {

    	$country = new Country;
    	$country->name = $request->input('name');
    	$country->president = $request->input('president');
    	$country->save();

    	$countries = \App\Country::all();
    	return view('form', compact('country', 'countries'));
    }

    public function update(Request $request){

    	$country = \App\Country::where('name', $request->input('original_name'))->update(['name' => $request->input('new_name')]);

    	if($('#country').is(':checked')){
            alert('country');
        }else{
            alert('president');
        }

    	$countries = \App\Country::all();
    	return view('form', compact('country', 'countries'));


    }

    public function delete(Request $request){

    	$country = \App\Country::where('name', $request->input('name'))->delete();
    	
    	$countries = \App\Country::all();
    	return view('form', compact('country', 'countries'));

    }
}
