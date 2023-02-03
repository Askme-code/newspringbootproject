<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    public function Insert(Request $make){
        $con = new Form();

        $con->Emai=$make->Email;
        $con->Name=$make->name;
        $con->Password=$make->Password;
        $con-> save();

        return redirect('/')-width('status', 'Form successfull');

    }

    public function form() {
        return view('form');
    }
}
