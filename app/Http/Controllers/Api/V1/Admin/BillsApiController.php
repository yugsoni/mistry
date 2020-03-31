<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBillRequest;
use App\Http\Requests\UpdateBillRequest;
use App\Bill;

class ProductsApiController extends Controller
{
    public function index()
    {
        $bill = Bill::all();

        return $bill;
    }

    public function store(StoreBillRequest $request)
    {
        return Bill::create($request->all());
    }

    public function update(UpdateBillRequest $request, Bill $bill)
    {
        return $bill->update($request->all());
    }

    public function show(Bill $bill)
    {
        return $bill;
    }

    public function destroy(Product $bill)
    {
        return $bill->delete();
    }
}
