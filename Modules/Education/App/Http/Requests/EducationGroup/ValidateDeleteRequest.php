<?php

namespace Modules\Education\App\Http\Requests\EducationGroup;

use Illuminate\Foundation\Http\FormRequest;

class ValidateDeleteRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ids' => 'required|array',
            'ids.*' => 'required|exists:education_groups,id',
        ];
    }

    public function attributes(): array
    {
        return [
            'ids' => trans('custom.settings.base.fields.ids'),
        ];
    }
}
