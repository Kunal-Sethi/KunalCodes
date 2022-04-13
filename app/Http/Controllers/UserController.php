<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // function show($id){
    //     return "Hello coming dirrectly from the controller - " . $id;
    // }


    // function show(){
    //     return "Hello coming dirrectly from the controller - ";
    // }


    // function viewLoad(){
    //     $data = ["Kunal", "Garima", "Ujjwal"];
    //     return view("users", ["users"=>$data]);
    // }


    function getData(request $req){
        return $req->input();
    }
}
