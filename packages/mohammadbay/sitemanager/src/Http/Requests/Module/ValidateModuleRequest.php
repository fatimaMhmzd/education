<?php

namespace mohammadbay\sitemanager\Http\Requests\Module;

use Illuminate\Foundation\Http\FormRequest;

class ValidateModuleRequest extends FormRequest
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
            'title' => 'required|string',
            'name' => 'required|string',
            'active' => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'action.in' => 'فیلد عملیات فقط می‌تواند یکی از مقادیر ایجاد یا ویرایش باشد.',
            'id.required_if' => 'فیلد id الزامی است وقتی که عملیات اپدیت است.',
            'id.integer' => 'فیلد id باید یک عدد معتبر باشد.',
        ];
    }
}
