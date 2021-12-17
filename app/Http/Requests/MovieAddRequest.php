<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieAddRequest extends FormRequest
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
            'user_id' => ['integer'],
            'movie_id' => ['required', 'integer'],
			'title' => ['required', 'string', 'min:3'],
			'image_link' => ['string', 'min:3'],
            'priority' => ['integer']
        ];
    }
}
