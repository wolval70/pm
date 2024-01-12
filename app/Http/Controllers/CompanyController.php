<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('companies.create', );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $validatedData =$request->validate([
               'name' =>'string|max: 255',
               'firstname' =>'nullable|string|max: 255',
               'lastname' =>'nullable|string|max: 255',
               'street' =>'required|string|max: 255',
               'zip' =>'required|numeric',
               'city' =>'required|string|max: 255',
           ]);

           $company = new Company($validatedData);

           $user = User::find(Auth::id());

           $user->companies()->save($company);

           return redirect('/companies')->with('success','Company erfolgreich erstellt');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company::findOrFail($id);
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::findOrFail($id);
        return view('companies.edit', compact('company'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData =$request->validate([
            'name' =>'string|max: 255',
            'firstname' =>'nullable|string|max: 255',
            'lastname' =>'nullable|string|max: 255',
            'street' =>'required|string|max: 255',
            'zip' =>'required|numeric',
            'city' =>'required|string|max: 255',
        ]);

        Company::whereid($id)->update($validatedData);

        return redirect('companies')->with('success','Company erfolgreich editiert.');

    }

    /**
     * Remove the specified resource from storage.

     */
    public function destroy(string $id)
    {
    $company = Company::findOrFail($id);
    $company->delete();
    Return redirect('/companies')->with('success','Company erfolgreich gelöscht.');



    }
}
