<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request)
    {
        //storing data 
        $data = [];
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['location'] = $request->input('location');
        
        // Handling File Upload
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');

            // Generate a unique filename based on the company name
            $fileName = $data['name'] . '_' . time() . '.' . $file->getClientOriginalExtension();

            // Move the file to the "storage/app/public/uploads/logos" directory
            $file->storeAs('public/uploads/logos', $fileName);

            // Save the filename to the database
            $data['logo'] = $fileName;
        }
        // dd($data);  
        // Create and save the record
        // $company = new Company($data);
        // $company->save();
        Company::create($data);
        return redirect()
            ->route('companies.index')
            ->with('success', 'Company created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('companies.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $company->update($request->validated());
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
