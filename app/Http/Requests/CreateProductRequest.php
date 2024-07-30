<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class CreateProductRequest extends FormRequest
{
    public function rules(): array
    {
        $rules = [
            'name' => ['required', 'string', 'max:255', 'unique:products'],
            'summary' => ['nullable', 'string', 'max:500'],
            'category_id' => ['required'],
            'image' => ['required', File::types(['jpg', 'png', 'jpeg'])->max(1 * 1024)],
            'image2' => ['nullable', File::types(['jpg', 'png', 'jpeg'])->max(1 * 1024)],
            'content' => ['nullable', 'string', 'max:500'],
            'features' => ['nullable', 'string'],
            'advantages' => ['nullable', 'string'],
            'targets' => ['nullable', 'string'],
            'dosage' => ['nullable', 'string'],
            'available_packing' => ['nullable', 'string', 'max:500'],
            'is_highlighted' => ['nullable'],
            'priority' => ['nullable', 'numeric'],
            'description' => ['nullable', 'string'],
            'status' => ['nullable'],
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $product = $this->route('product');
            $rules['name'] = [
                'required', 'string', 'max:255',
                Rule::unique(Product::class)->ignore($product),
            ];

            $rules['image'] = array_merge(['required'],  $this->getImageValidationRule('image'));
            $rules['image2'] = array_merge(['nullable'],  $this->getImageValidationRule('image2'));
        }

        return $rules;
    }

    public function validated($key = null, $default = null)
    {
        $inputs = parent::validated();
        $inputs['slug'] = Str::slug($inputs['name'], '-');
        $inputs['status'] = !empty($inputs['status']) && $inputs['status'] == 'on' ? 1 : 0;
        $inputs['is_highlighted'] = !empty($inputs['is_highlighted']) && $inputs['is_highlighted'] == 'on' ? 1 : 0;
        return $inputs;
    }

    public function getImageValidationRule(String $key): array
    {
        if (request()->hasFile($key)) {
            return [File::types(['jpg', 'png', 'jpeg'])->max(1 * 1024)];
        }
        return ['string'];
    }
}
