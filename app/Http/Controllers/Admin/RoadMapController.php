<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRoadMapRequest;
use App\Http\Requests\StoreRoadMapRequest;
use App\Http\Requests\UpdateRoadMapRequest;
use App\RoadMap;
use App\Service;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
class RoadMapController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('roadmap_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roadmaps = RoadMap::all();

        return view('admin.roadmaps.index', compact('roadmaps'));
    }

    public function create()
    {
        abort_if(Gate::denies('roadmap_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $services = Service::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::all()->pluck('day', 'id');

        return view('admin.roadmaps.create', compact('users', 'services'));
    }

    public function store(StoreRoadMapRequest $request)
    {
        $roadmap = RoadMap::create($request->all());

        //$roadmap->users()->sync($request->input('users', []));

        return redirect()->route('admin.roadmaps.index');
    }

    public function edit(RoadMap $roadmap)
    {
        abort_if(Gate::denies('roadmap_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('day', 'id');

        // $roadmap->load('users');

        return view('admin.roadmaps.edit', compact('roadmap'));
    }

    public function update(UpdateRoadMapRequest $request, RoadMap $roadmap)
    {
        $roadmap->update($request->all());
        //$roadmap->users()->sync($request->input('users', []));

        return redirect()->route('admin.roadmaps.index');
    }

    public function show(RoadMap $roadmap)
    {

        abort_if(Gate::denies('roadmap_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$roadmap->load('users');

        return view('admin.roadmaps.show', compact('roadmap'));
    }

    public function destroy(RoadMap $roadmap)
    {
        abort_if(Gate::denies('roadmap_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roadmap->delete();

        return back();
    }

    public function massDestroy(MassDestroyRoadMapRequest $request)
    {
        RoadMap::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}