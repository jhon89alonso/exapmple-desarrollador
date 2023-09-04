<?php

namespace App\Http\Controllers\ModuleCms;

use App\Http\Controllers\Controller;
use App\Models\Contents\SectionExternalSheets;
use App\Http\Requests\StoreSectionExternalSheetsRequest;
use App\Http\Requests\UpdateSectionExternalSheetsRequest;

class SectionExternalSheetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $sectionsSheets = SectionExternalSheets::all();

            return response()->json(['msg' => 'success', 'data' => $sectionsSheets,'status'=> 200]);
        } catch (\Throwable $th) {
            //throw $th;
        }
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
    public function store(StoreSectionExternalSheetsRequest $request)
    {
    try {
            $input = $request->all();
            // dd( $input);
            $sectionExternalSheets = SectionExternalSheets::create($input);
            return response()->json(['msg' => 'success', 'data' => $sectionExternalSheets,'status'=> 200]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SectionExternalSheets $sectionExternalSheets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SectionExternalSheets $sectionExternalSheets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionExternalSheetsRequest $request, SectionExternalSheets $sectionExternalSheets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SectionExternalSheets $sectionExternalSheets)
    {
        //
    }
}
