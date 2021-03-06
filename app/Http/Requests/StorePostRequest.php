<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3',
            'publicated' => 'required|in:1,0'
        ];
    }

    protected function prepareForValidation()
    {
        $input = $this->all();

        $user  = Auth::user();

        if (!$user->isAdmin()) {
            $input['publicated']  = '1';
        }
        
        $this->merge($input);
    }
}
