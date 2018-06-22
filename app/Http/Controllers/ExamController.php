<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Breed;
use App\Dog;
class ExamController extends Controller
{
 	public function listBreed()
 	{
 		$breeds = Breed::all();
 		return view('exam.list_breed',compact('breeds'));

 	}   
 	
 	public function listDog()
 	{
 		$dogs = Dog::with('breed')->whereBetween('price', [100, 2000])->get();
 		return view('exam.home',compact('dogs'));	
 	}
}
