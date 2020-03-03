<?php

namespace App\Http\Controllers;

use PDO;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MyController extends Controller{
    
    function index(){
        return view('index');
    }
    
    function contact(){
        $form1 = true;
        return view('contact',compact('form1'));
    }

    function store(Request $request){
        $data = $request->all();

        Mail::to('singh5manp@gmail.com')->send(new Contact($data));

        $form1 = false;
        return view('contact',compact('form1'));
    }

    function portfolio(){
        return view('viewOfDifferentGalery');
    }
    
    function infoSceance(){
        return view('infoSceance');

    }
    function photo($albumName){        
        $photos = [];
        $filesInFolder = \File::files('images/'.$albumName);

        foreach($filesInFolder as $path)
        {
            $photos[] = pathinfo($path)['dirname']."/".pathinfo($path)['basename'];
        }

        return view('photo',compact('photos'));
    }


    function tarif(){
        return view('tarif');
    }
}
