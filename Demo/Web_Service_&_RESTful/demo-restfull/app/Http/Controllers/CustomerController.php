<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function index()
    {
        $customer = $this->customer->get();

        return response()->json($customer, 200);
    }

    public function detail($id){
        $customer = $this->customer->find($id);

        $status = 200;
        if(!$customer){
            $status = 404;
        }

        return response()->json($customer, $status);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = $this->customer->create($request->all());

        $status = 201;

        if(!$customer){
            $status = 500;
        }
        return response()->json($customer, $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->customer->find($id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name
        ]);

        $customer = $this->customer->find($id);

        $status = 200;
        if(!$customer){
            $status = 500;
        }

        return response()->json($customer , $status);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->customer->destroy($id);
        return response()->json([], 200);
    }
}
