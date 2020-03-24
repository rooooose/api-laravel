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
    	$country->population = $request->input('pop');
    	$country->language = $request->input('language');
    	$country->capital = $request->input('capital');
    	$country->save();

    	$countries = \App\Country::all();
    	return view('form', compact('country', 'countries'));
    }

    public function update(Request $request){

    	$country = \App\Country::where('name', $request->input('name'));
    	$country->name = 'Italy';
    	$country->save();
    	

    	$countries = \App\Country::all();
    	return view('form', compact('country', 'countries'));

    }

    public function delete(Request $request){

    	$country = \App\Country::where('name', $request->input('name'))->delete();
    	
    	$countries = \App\Country::all();
    	return view('form', compact('country', 'countries'));

    }
}
