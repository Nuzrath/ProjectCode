<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminStudentRequest extends FormRequest
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
		'address'=>'nullable',
		'city'=>'required',
		'country'=>'nullable',
		'dob'=>'required',
		'contact1'=>'required',
		'contact2'=>'nullable',
		'nic'=>'nullable',
		'passport_no'=>'nullable',
		'gender'=>'required',
        'email'=>'nullable',
        'course_id'=>'required',
		/* student image should take*/
        ];
    }
}
