<?php

namespace App\Http\Controllers\DOCsetup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateDocumentController extends Controller
{


	public function index(){

	  return view('docSetup.docSetup', ['name' => 'Fateen']);
	  	
	}
  
}
