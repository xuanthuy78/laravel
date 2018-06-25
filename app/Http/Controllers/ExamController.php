<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Breed;
use App\Dog;
use App\Scopes\PriceScope;
class ExamController extends Controller
{
 	public function listBreed()
 	{
 		$breeds = Breed::all();
 		return view('exam.list_breed',compact('breeds'));

 	}   
 	//khi su dung scopes se khong dung duoc function nay
 	public function listDog()
 	{
 		$dogs = Dog::withoutGlobalScope(PriceScope::class)->whereBetween('price', [100, 2000])->get();
 		return view('exam.home',compact('dogs'));	
 	}
 	//Khi su scopes se rang buoc trong bang, xem ben model
 	public function scopes()
 	{
 		$dogs = Dog::all();
 		return view('exam.scopes',compact('dogs'));	
 	}
}
