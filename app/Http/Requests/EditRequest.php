<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'author'=>'required',
            'description'=>'required',
            'synopsis'=>'required',
            'year'=>'required',
            'publisher'=>'required',
            'isbn' => [
                'required',
                Rule::unique('books')->ignore($this->id())
            ]
        ];
    }
    public function id(){
        return $this->route('book')->id;// hmm
    }
}
