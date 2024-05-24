<?php

namespace App\Http\Requests;

use App\Models\Library;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateLibraries extends FormRequest
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
        $rules = [
            'name' => ['required' ,'min:3','max:100', Rule::unique(Library::class)],
            'address' => ['required' ,'min:3','max:100']
        ];
        return $rules;
    }
}
