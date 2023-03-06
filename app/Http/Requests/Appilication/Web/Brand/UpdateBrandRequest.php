<?php

namespace App\Http\Requests\Appilication\Web\Brand;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    protected function prepareForValidation()
    {
        $this->merge(['user_id' => auth()->user()->id]);
    }
    public function rules()
    {
        return [
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'brand' => ['required', 'min:1', 'max:225', 'unique:brands,brand,'.$this->brnd->id],
            'foto' => ['nullable', 'image', 'file'],
        ];
    }
}
