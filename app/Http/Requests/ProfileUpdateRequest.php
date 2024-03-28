<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'VIS_NOM' => ['required', 'string', 'max:255'],
            'VIS_PRENOM' => ['required', 'string', 'max:255'],
            'VIS_ADRESSE' => ['required', 'string', 'max:255'],
            'VIS_CP' => ['required', 'integer', 'digits:5'],
            'VIS_VILLE' => ['required', 'string', 'max:255'],
        ];
    }
}
