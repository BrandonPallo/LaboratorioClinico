<?php

namespace App\Http\Requests;

use App\RoadMap;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRoadMapRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('service_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'day'    => [
                'string',
                'required',
            ],
            'users.*' => [
                'integer',
            ],
            'users'   => [
                'array',
            ],
        ];
    }
}
