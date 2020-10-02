<?php

namespace App\Http\Requests;

use App\Models\Event;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEventRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('event_create');
    }

    public function rules()
    {
        return [
            'title'               => [
                'string',
                'nullable',
            ],
            'description'         => [
                'string',
                'nullable',
            ],
            'information'         => [
                'string',
                'nullable',
            ],
            'how_many_people'     => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'location'            => [
                'string',
                'nullable',
            ],
            'contact_information' => [
                'string',
                'nullable',
            ],
            'starts'              => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'ends'                => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
