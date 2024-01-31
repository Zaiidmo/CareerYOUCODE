<?php

namespace App\Http\Controllers;

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
        $companies = Company::latest()->paginate(5);
        return view('companies.index', compact('companies'))->with('i', (request()->input('page', 1) - 1) * 5);
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
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required|min:15|max:255',
            'location' => 'required|min:15|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        // Extract company name
        $companyName = $request->input('name');

        // Handling File Upload
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');

            // Generate a unique filename based on the company name
            $fileName = $companyName . '_' . time() . '.' . $file->getClientOriginalExtension();

            // Move the file to the "storage/app/public/uploads/logos" directory
            $file->storeAs('uploads/logos', $fileName, 'public');

            // Save the filename to the database
            $data['logo'] = $fileName;
        }
        // Create and save the record
        $company = new Company($data);
        $company->save();
        // Company::create($request->all());
        return redirect()
            ->route('companies.index')
            ->with('success', 'Company created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
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
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
