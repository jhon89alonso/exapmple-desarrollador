<?php

namespace App\Http\Controllers\ModuleCms;

use App\Http\Controllers\Controller;
use App\Models\Contents\ExternalContents;
use App\Http\Requests\StoreExternalContentsRequest;
use App\Http\Requests\UpdateExternalContentsRequest;
use Inertia\Inertia;

class ExternalContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('external contents index');
        return Inertia::render('ModuleCMS/external/ExternalContent');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExternalContentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ExternalContents $externalContents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExternalContents $externalContents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExternalContentsRequest $request, ExternalContents $externalContents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExternalContents $externalContents)
    {
        //
    }
}
