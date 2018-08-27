<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminStaffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
			
		'fname'=>'required',
		'lname'=>'required',
		'address'=>'required',
		'country'=>'required',
		'dob'=>'required',
		'contact1'=>'required|mix10|numeric',
		'contact2'=>'nullable',
		'nic'=>'required',
		'passport_no'=>'nullable',
		'gender'=>'required',
		'email'=>'required',
        ];
    }
}
