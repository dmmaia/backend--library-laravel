<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublishingCompany;

class CompanyController extends Controller
{
    public function index(){
        return PublishingCompany::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request){
        PublishingCompany::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        return PublishingCompany::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $company = PublishingCompany::findOrFail($id);
        $company->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $company = PublishingCompany::findOrFail($id);
        $company->delete();
    }
}
