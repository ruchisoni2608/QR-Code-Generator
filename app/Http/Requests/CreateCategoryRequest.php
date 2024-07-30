<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Str;

class CreateCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        $rules = [
            'name' => ['required', 'string', 'max:255', 'unique:categories'],
            'image' => ['nullable', File::types(['jpg', 'png'])->max(1 * 1024)],
            'description' => ['nullable', 'string'],
            'status' => ['nullable'],
            'parent_id' => ['nullable'],
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $category = $this->route('category');
            $rules['name'] = [
                'required', 'string', 'max:255',
                Rule::unique(Category::class)->ignore($category),
            ];

            $rules['image'] = array_merge(['nullable'],  $this->getImageValidationRule('image'));
        }

        return $rules;
    }

    public function validated($key = null, $default = null)
    {
        $inputs = parent::validated();
        $inputs['status'] = !empty($inputs['status']) && $inputs['status'] == 'on' ? 1 : 0;
        $inputs['slug'] = Str::slug($inputs['name'], '-');
        return $inputs;
    }

    public function getImageValidationRule(String $key): array
    {
        if (request()->hasFile($key)) {
            return [File::types(['jpg', 'png'])->max(10 * 1024)];
        }
        return ['string'];
    }
}
