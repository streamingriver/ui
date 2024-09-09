<?php

namespace Modules\IptvApp\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\IptvApp\Services\IptvAppService;

class IptvAppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return app(IptvAppService::class)->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return app(IptvAppService::class)->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        return app(IptvAppService::class)->store($request->all());
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return app(IptvAppService::class)->read($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return app(IptvAppService::class)->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        return app(IptvAppService::class)->update($id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return app(IptvAppService::class)->delete($id);
    }
}
