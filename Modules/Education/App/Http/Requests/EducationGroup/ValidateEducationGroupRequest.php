<?php

namespace Modules\Education\App\Http\Requests\EducationGroup;

use Illuminate\Foundation\Http\FormRequest;

class ValidateEducationGroupRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'action' => 'required|string|in:create,update',
            'id' => 'required_if:action,update|nullable|integer',
            'slug' => 'string',
            'title' => 'string|required',
        ];
    }

    public function attributes(): array
    {
        return [
            'slug' => 'اسلاگ',
            'title' => 'عنوان',
        ];
    }
}
