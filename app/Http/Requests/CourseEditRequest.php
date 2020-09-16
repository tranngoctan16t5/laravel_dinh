<?php

namespace app\http\requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseEditrequest extends FormRequest
{
    /**
     * determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'start_day'    => 'required|date',
            'end_day' => 'required|date|after_or_equal:start_day',
        ];
    }
}
