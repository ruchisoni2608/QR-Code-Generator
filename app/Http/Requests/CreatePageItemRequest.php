<?php

namespace App\Http\Requests;

use App\Models\Media;
use App\Models\PageItem;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class CreatePageItemRequest extends FormRequest
{
    public function rules(): array
    {
        $rules = [
            'type' => ['required', 'string'],
            'caption' => ['required', 'string', 'max:255'],
            'action_url' => ['nullable', 'string'],
            'priority' => ['nullable'],
            'video_url' => ['required_if:type,'. PageItem::VIDEO],
        ];
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image'] = array_merge(['required_if:type,'. PageItem::IMAGE, 'nullable'],  $this->getImageValidationRule('image'));
            $rules['file'] = array_merge(['required_if:type,'. PageItem::PDF, 'nullable'],  $this->getFileValidationRule('file', ['pdf']));
        } else {
            $rules['image'] = ['required_if:type,'. PageItem::IMAGE, 'nullable', File::types(['jpg', 'png'])->max(1 * 1024)];
            $rules['file'] = ['required_if:type,'. PageItem::PDF, 'nullable', File::types(['pdf'])->max(5 * 1024)];
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

    public function getFileValidationRule(String $key, $types): array
    {
        if (request()->hasFile($key)) {
            return [File::types($types)->max(5 * 1024)];
        }
        return ['string'];
    }
}
