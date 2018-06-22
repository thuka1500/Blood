<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth;
use Illuminate\Http\Request;
use App\Groups;
use App\User;
use App\Requests;


class GroupsController extends Controller
{


    public function index(){
    	$group = Groups::all();
    	$user = User::all();
    	$request = Requests::all();


    	return view('groups.index')->with('groups' , $group)
										 ->with('users' , $user)
    									 ->with('requests' , $request);
	}


	public function search(){

		$group = Groups::all();
		$user = User::all();
		$request = Requests::all();

		return view('groups.search')->with('groups' , $group)
			->with('users' , $user)
			->with('requests' , $request);
	}

	public function donor($id){

		$user = User::where('groups_id' , $id)->get();
		$request = Requests::all();
		$group = Groups::all();

		return view('groups.donor')->with('requests' , $request)
			->with('groups' , $group)
			->with('users' , $user);
	}
}
