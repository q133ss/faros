<?php

namespace App\Http\Requests\LoginController;

use App\Models\User;
use Closure;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email',
            'password' => [
                'required',
                'string',
                function ($attribute, $value, Closure $fail) {
                    $user = User::where('email', $this->email)->first();
                    if(!$user || !Hash::check($value, $user->password)) {
                        $fail('Неверный email или пароль');
                    }
                }
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Введите email',
            'email.email' => 'Неверный формат email',
            'email.exists' => 'Неверный email или пароль',

            'password.required' => 'Введите пароль',
            'password.string' => 'Пароль должен быть строкой'
        ];
    }
}
