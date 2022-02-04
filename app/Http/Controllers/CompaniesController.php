<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\SaveCompanyRequest;

use Illuminate\Http\Request;



class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $companies = Company::orderByDesc('created_at')->paginate(20);
        
       return view('companies.index',['companies'=>$companies
       ]);
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $company = new Company();
        return view('companies.create', ['company'=>$company]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCompanyRequest $request)
    {
        
        // $company = new Company;
        // $company->name = $data['name'];
        // $company->phone = $data['phone'];
        // $company->address = $data['address'];
        // $company->save();
        Company::create($request->validated());

        return redirect()->route('companies.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //$company=Company::findORFail($companies);
        return view('companies.show',[
            'company'=>$company
        ]);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveCompanyRequest $request, Company $company)
    {
        
        $company->update($request->validated());

        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index');
    }
    
}