<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateSocialLinkRequest extends FormRequest
{

    public function rules(): array
    {
        $rules = [
            'name'=>['required'],
           'image' => ['nullable', 'image', Rule::dimensions()->maxWidth(2000)->maxHeight(2000)->minWidth(100)->minHeight(100)],
            'slug'=>['string'],
        ];
        return $rules;
    }
    public function messages(): array
    {
        return [
            'name'   => "The Name field is required.",
            'image.image' => 'The image must be an image file.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.dimensions' => 'The image must have a minimum resolution of 100x100 pixels and a maximum resolution of 2000x2000 pixels.',
        ];
    }
}
