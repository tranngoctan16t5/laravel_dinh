<?php

namespace app\http\requests;

use illuminate\foundation\http\formrequest;

class courseeditrequest extends formrequest
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
            'image' => 'required',
            'start_day' => 'required',
            'end_day' => 'required',
        ];
    }
}
