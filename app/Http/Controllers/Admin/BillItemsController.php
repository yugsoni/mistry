<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBillitemRequest;
use App\Http\Requests\StoreBillitemRequest;
use App\Http\Requests\UpdateBillitemRequest;
use App\BillItem;

class BillItemsController extends Controller
{
    public function index()
    {
        
        abort_unless(\Gate::allows('BillItems_access'), 403);
        
        $BillItems = BillItem::all();
       
        return view('admin.BillItems.index', compact('BillItems'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('BillItems_create'), 403);

        return view('admin.BillItems.create');
    }

    public function store(StoreBillItemRequest $request)
    {
        abort_unless(\Gate::allows('BillItems_create'), 403);

        $BillItem = BillItem::create($request->all());

        return redirect()->route('admin.BillItems.index');
    }

    public function edit(BillItem $billItem)
    {
    	
        abort_unless(\Gate::allows('BillItems_edit'), 403);

        return view('admin.BillItems.edit', compact('BillItem'));
    }

    public function update(UpdateBillItemRequest $request, BillItem $BillItem)
    {
        abort_unless(\Gate::allows('BillItems_edit'), 403);

        $BillItem->update($request->all());

        return redirect()->route('admin.BillItems.index');
    }

    public function show(BillItem $BillItem)
    {
        abort_unless(\Gate::allows('BillItems_show'), 403);

        return view('admin.BillItems.show', compact('Billitem'));
    }

    public function destroy(Billitem $Billitem)
    {
        abort_unless(\Gate::allows('Billitem_delete'), 403);

        $Billitem->delete();

        return back();
    }

    public function massDestroy(MassDestroyBillitemRequest $request)
    {
        Billitem::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
