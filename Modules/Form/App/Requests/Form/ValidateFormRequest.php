<?php

namespace Modules\Form\App\Requests\Form;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormRequest extends FormRequest
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
            'url' => 'nullable|string',
            'description' => 'nullable|string',
            'price1' => 'nullable|integer',
            'price2' => 'nullable|integer',
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
