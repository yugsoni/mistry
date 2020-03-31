<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBillRequest;
use App\Http\Requests\StoreBillRequest;
use App\Http\Requests\UpdateBillRequest;
use App\Bill;

class BillController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('bills_access'), 403);

        $bills = Bill::all();

        return view('admin.Bills.index', compact('bills'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('bill_create'), 403);

        return view('admin.Bills.create');
    }

    public function store(StoreBillRequest $request)
    {
        abort_unless(\Gate::allows('bill_create'), 403);

        $Bill = Bill::create($request->all());

        return redirect()->route('admin.bills.index');
    }

    public function edit(Bill $Bill)
    {
       //dd($Bill);
        //abort_unless(\Gate::allows('Bill_edit'), 403);

        return view('admin.Bills.edit', compact('Bill'));
    }

    public function update(UpdateBillRequest $request, Bill $Bill)
    {

        abort_unless(\Gate::allows('Bill_edit'), 403);

        $Bill->update($request->all());
       

        return redirect()->route('admin.bills.index');
    }

    public function show(Bill $Bill)
    {
        //die('test');
        //abort_unless(\Gate::allows('Bill_show'), 403);

        return view('admin.bills.show', compact('Bill'));
    }

    public function destroy(Bill $Bill)
    {
        abort_unless(\Gate::allows('bill_delete'), 403);

        $bill->delete();

        return back();
    }

    public function massDestroy(MassDestroyBillRequest $request)
    {
        Bill::whereIn('id', request('id'))->delete();

        return response(null, 204);
    }
}
