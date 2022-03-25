<?php

namespace App\Http\Requests;

use App\RoadMap;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRoadMapRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('roadmap_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'    => [
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
