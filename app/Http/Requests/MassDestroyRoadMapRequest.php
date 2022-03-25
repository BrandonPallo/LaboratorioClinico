<?php

namespace App\Http\Requests;

use App\RoadMap;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRoadMapRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('roadmap_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:roadmaps,id',
        ];
    }
}
