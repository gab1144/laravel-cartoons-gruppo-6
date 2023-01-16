<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartoonRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required|min:3|max:100',
            'year'=>'required',
            'creator'=>'required|min:3|max:100',
            'genre'=>'required|min:2',
            'episodes'=>'required|min:1',
            'runtime_in_minutes'=>'required|min:1'

        ];
    }

    public function messages(){
        return[
            'title.required'=>'Il titolo è obbligatorio',
            'title.min'=>'Il titolo deve contenere almeno :min caratteri',
            'title.max'=>'Il titolo deve contenere almeno :max caratteri',
            'year.required'=>'L\'anno è obbligatorio',
            'creator.required'=>'Il creator è obbligatorio',
            'creator.min'=>'Il creator deve contenere almeno :min caratteri',
            'creator.max'=>'Il creator deve contenere almeno :max caratteri',
            'genre.required'=>'Il genere è obbligatorio',
            'genre.min'=>'Il genere deve contenere almeno :min caratteri',
            'episodes.required'=>'Il numero di episodi è obbligatorio',
            'episodes.min'=>'Il numero di episodi deve essere almeno :min',
            'runtime_in_minutes.required'=>'La durata in minuti è un campo obbligatorio',
            'runtime_in_minutes.min'=>'La durata in minuti deve essere almeno :min',
        ];
    }
}
