<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class XlsxUploadRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'importFile' => ['required', 'max:2048', 'file', 'mimes:xlsx']
        ];
    }
}
