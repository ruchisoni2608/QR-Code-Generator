<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateBlogRequest extends FormRequest
{
    public function rules(): array
    {
        $rules = [
            'title'=>['required'],
           // 'title_image' => ['nullable','image','mimes:jpeg,png,jpg,gif'],
            'title_image' => ['nullable', 'image', Rule::dimensions()->maxWidth(2000)->maxHeight(2000)->minWidth(100)->minHeight(100)],
            'summary'=>['nullable'],
            'description'=>['nullable']
        ];
        return $rules;
    }
    public function messages(): array
    {
        return [
            'title'   => "The title field is required.",
            'title_image.image' => 'The title image must be an image file.',
            'title_image.mimes' => 'The title image must be a file of type: jpeg, png, jpg, gif.',
            'title_image.dimensions' => 'The title image must have a minimum resolution of 100x100 pixels and a maximum resolution of 2000x2000 pixels.',
        ];
    }
    public function validated($key = null, $default = null): mixed
    {
        $validatedData = parent::validated();

        // Manipulate the description to remove the <select> and its options
        if (isset($validatedData['description'])) {
            $descriptionWithoutSelect = preg_replace('/<select[^>]*>.*?<\/select>/si', '', $validatedData['description']);
            $validatedData['description'] = $descriptionWithoutSelect;
        }

        return $validatedData;
    }
}
