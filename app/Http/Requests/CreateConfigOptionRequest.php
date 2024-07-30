<?php

namespace App\Http\Requests;

use App\Models\ConfigOption;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Str;

class CreateConfigOptionRequest extends FormRequest
{
    public function rules(): array
    {
        $rules = [
            'title' => ['required', 'string', 'max:255', 'unique:config_options'],
            'key' => ['sometimes', 'string', 'max:255', 'unique:config_options'],
            'type' => ['nullable', 'in:'. implode(',', ConfigOption::TYPES)],
            'value' => [
                Rule::requiredIf(fn () => $this->type != ConfigOption::INTERNAL),
                'nullable',
                'string'
            ],
            'file' => ['required_if:type,'.ConfigOption::INTERNAL , 'nullable',File::types(['jpg', 'png', 'pdf'])->max(2 * 1024)],
            'description' => ['nullable', 'string'],
            'status' => ['nullable'],
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $category = $this->route('configOption');
            $rules['title'] = [
                'required', 'string', 'max:255',
                Rule::unique(ConfigOption::class)->ignore($category),
            ];

            $rules['file'] = array_merge(['sometimes'],  $this->getImageValidationRule('file'));
        }

        return $rules;
    }

    public function validated($key = null, $default = null)
    {
        $inputs = parent::validated();
        $inputs['status'] = !empty($inputs['status']) && $inputs['status'] == 'on' ? 1 : 0;
        if (in_array($this->method(), ['POST'])) {
            $inputs['key'] = Str::slug($inputs['key'], '-');
        }
        return $inputs;
    }

    public function getImageValidationRule(String $key): array
    {
        if (request()->hasFile($key)) {
            return [File::types(['jpg', 'png', 'pdf'])->max(10 * 1024)];
        }
        return ['string'];
    }
}
