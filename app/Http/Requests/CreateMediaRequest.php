<?php

namespace App\Http\Requests;

use App\Models\Media;
use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class CreateMediaRequest extends FormRequest
{
    public function rules(): array
    {
        $rules = [
            'type' => ['required', 'string'],
            'tag' => ['required', 'string'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'priority' => ['nullable'],
            'status' => ['nullable'],
            'external_url' => ['required_if:type,'. Media::EXTERNAL],
        ];
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image'] = array_merge(['required_if:type,'. Media::INTERNAL, 'nullable'],  $this->getImageValidationRule('image'));
        } else {
            $rules['image'] = ['required_if:type,'. Media::INTERNAL, 'nullable', File::types(['jpg', 'png'])->max(1 * 1024)];
        }

        return $rules;
    }

    public function validated($key = null, $default = null)
    {
        $inputs = parent::validated();
        $inputs['status'] = !empty($inputs['status']) && $inputs['status'] == 'on' ? 1 : 0;
        $inputs['tag_slug'] = Str::slug($inputs['tag']);
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
