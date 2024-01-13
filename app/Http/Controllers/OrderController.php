<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{

    public function index()
    {
        $orders = Order:all();
        return view('orders/.index', compact('orders'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData =$request->validate([
            'title' =>'string|max: 255',
            'description' =>'nullable|string|max: 255',
            'notes' =>'nullable|string|max: 255',
            'category' =>'required|numeric',
            'is_flatrate' =>'nullable|boolean',
            'annual_date' =>'required|date',
            'price' =>'required|numeric',
            'status' =>'required|numeric',
            'company_id' => 'required|numeric|exists:companies,id',

        ]);

        $validatedData['is_flatrate'] = (isset($validatedData['is_flatrate']) == '1' ? '1' : '0');
        $order = new Order($validatedData);
        $company = Company::findOrFail($validatedData['company_id']);
        $company->orders()->save($order);


        return redirect('/orders')->with('success','Order erfolgreich erstellt');

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

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


    }
}
