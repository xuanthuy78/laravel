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

 	public function update()
 	{
 		$dog = Dog::find(2);
 		$dog->name = "Love";
 		$dog->save();
 		return redirect('/');
 	}
 	public function create()
 	{
 		$breed = Breed::firstOrCreate(['name'=>'Moon']);
 		// $breed = Breed::firstOrNew(['name'=>'Fox']);
 		// $breed->save();//phai co save
 		echo "Da them thanh cong";
 	}
 	public function delete()
 	{
 		$breed = Breed::destroy(9);
 		// //Deleting
 		// $breed = Breed::find(7);
 		// $breed->delete();
 		
 		echo "Ban xoa thanh xong";
 	}
 	public function restore(){

 	}
}
