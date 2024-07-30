<?php

namespace App\Http\Requests;

use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class CreatePageRequest extends FormRequest
{
    public function rules(): array
    {
        $rules = [
            'name' => ['required', 'string', 'max:255', 'unique:pages'],
            'image' => ['nullable', File::types(['jpg', 'png'])->max(1 * 1024)],
            'cover_photo' => ['nullable', File::types(['jpg', 'png'])->max(1 * 1024)],
            'content' => ['nullable', 'string'],
            'status' => ['nullable'],
            'parent_id' => ['nullable', 'numeric'],
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $page = $this->route('page');
            $rules['name'] = [
                'required', 'string', 'max:255',
                Rule::unique(Page::class)->ignore($page),
            ];

            $rules['image'] = array_merge(['nullable'],  $this->getImageValidationRule('image'));
            $rules['cover_photo'] = array_merge(['nullable'],  $this->getImageValidationRule('cover_photo'));
        }

        return $rules;
    }

    public function validated($key = null, $default = null)
    {
        $inputs = parent::validated();
        $inputs['slug'] = Str::slug($inputs['name'], '-');
        $inputs['status'] = !empty($inputs['status']) && $inputs['status'] == 'on' ? 1 : 0;
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
