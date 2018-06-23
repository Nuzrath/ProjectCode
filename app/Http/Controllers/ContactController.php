<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function contact(){
		return view('inc.contact');
	}
	
	public function addcontact(Request $request){
		return 'add contact pagesss';
	}
}


