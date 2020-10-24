<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home(Type $var = null)
    {
        return view('home');
    }
    public function local(Type $var = null)
    {
        return view('local');
    }
    public function internetional(Type $var = null)
    {
        return view('internetional');
    }
    public function sports(Type $var = null)
    {
        return view('sports');
    }
    public function entertainment(Type $var = null)
    {
        return view('entertainment');
    }
    public function knowledge(Type $var = null)
    {
        return view('knowledge');
    }
    public function detail(Type $var = null)
    {
        return view('detail');
    }
    public function service($value='')
    {
        // return view('servic',['name'=>'Mg Mg']);
        //array of array
        $students=array(
            array('name'=>'Mg mg','age'=>'23'),
               array('name'=>'Mg Aung','age'=>'20')

        );
        //dd($students);

        //array of object
        return view('service',['students'=>$students]);
    }
  
}
