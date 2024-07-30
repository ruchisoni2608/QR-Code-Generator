<?php

namespace App\Http\Requests;

use App\Models\Media;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class CreateSliderItemRequest extends FormRequest
{
    public function rules(): array
    {
        $rules = [
            'type' => ['required', 'string'],
            'caption' => ['required', 'string', 'max:255'],
            'action_url' => ['nullable', 'string'],
            'order_index' => ['nullable'],
            'external_url' => ['required_if:type,'. Media::EXTERNAL],
        ];
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image'] = array_merge(['required_if:type,'. Media::INTERNAL, 'nullable'],  $this->getImageValidationRule('image'));
        } else {
            $rules['image'] = ['required_if:type,'. Media::INTERNAL, File::types(['jpg', 'png'])->max(1 * 1024)];
        }

        return $rules;
    }

    public function getImageValidationRule(String $key): array
    {
        if (request()->hasFile($key)) {
            return [File::types(['jpg', 'png', 'jpeg'])->max(1 * 1024)];
        }
        return ['string'];
    }
}
