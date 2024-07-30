<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Str;

class CreateJobInquiryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email'],
            'phone' => ['required', 'max:20'],
            'city' => ['required', 'max:20'],
            'job_title' => ['required', 'string', 'max:255'],
            'cover_letter' => ['required', 'string'],
            'resume' => ['required', File::types(['pdf'])->max(1 * 1024)],
        ];
    }
}
