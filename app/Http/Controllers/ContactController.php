<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function contact(){
		return view('inc.contact');
	}
	
	 /* ===== Unit Test 1 - success =======
	public function addcontact(Request $request){
		return 'add contact pagesss';
	}
	
	=== Test 2 - is this pass input check - succuess ====
	public function addcontact(Request $request){
		
		return $request->input('name');
		
	}*/
	
	
	/*== === Test 3 - is this pass input check - succuess ====
	public function addcontact(Request $request){
		/*----
		=== bail === > laravel documentation,
		Sometimes you may wish to stop running validation rules on an attribute after the first validation failure. To do so, assign the bail rule to the attribute:
		
		$this->validate($request,[
		'name'=>'bail|required',
		'email'=>'nullable',
		'tel'=>'required|',
		'course'=>'nullable',
		'comment'=>'nullable',
		]);
		
		return "validation pass";
	}
	== output -----> validation pass	*/
	
	
	public function addcontact (Request $request){
		
		$this->validate($request,[
		'name'=>'bail|required',
		'email'=>'nullable',
		'tel'=>'required',
		'course'=>'nullable',
		'comment'=>'nullable',
		]);
		
		
		
		$contact=new Contact;
		$contact->name = $request->input('name'); //input() should be same as name of textbox
		$contact->email = $request->input('email');
		$contact->phone = $request->input('tel');
		$contact->course = $request->input('course');
		$contact->comment = $request->input('comment');
		$contact->save();
		return redirect('/contact')->with('response','contact added sucessfully');
	}
	}
	
		