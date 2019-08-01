<?php

namespace App\Http\Requests;


class ArticleRequest extends ApiRequest
{

    public function rules()
    {
        return [
            'name' => 'required|string',
            'announce' => 'required|string',
            'description' => 'required|string',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name required!',
            'announce.required' => 'Announce required!',
            'description.required' => 'Description required!'
        ];
    }

}