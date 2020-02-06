<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationsRequest extends FormRequest
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
            'phone' => ['required', 'min:12', 'max:13'],
            'email' => ['required', 'max:40'],
        ];
    }

    public function messages() {
        return [
            'phone' => ':atrubute은(는) 필수 입력 사항입니다.',
            'email' => ':atrubute은(는) 필수 입력 사항입니다.',
        ];
    }

    public function attributes() {
        return [
            'phone' => '전화번호',
            'email' => '이메일',
        ];
    }

}
