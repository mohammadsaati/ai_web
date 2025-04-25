<?php

namespace App\Http\Requests\siteOrder;

use App\Enums\SiteOrderEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => ['required', Rule::in(array_map(fn($enum) => $enum->value, SiteOrderEnum::cases()))],
            'features' => 'required',
            'budget' => 'required|numeric',
            'deadline' => 'required|date',
        ];
    }
}
