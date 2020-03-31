<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBillDetailsRequest;
use App\Http\Requests\StoreBillDetailsRequest;
use App\Http\Requests\UpdateBillDetailsRequest;
use App\BillDetails;

class BillDetailsController extends Controller
{
    public function index()
    {

        //abort_unless(\Gate::allows('billDetails_access'), 403);

        $billDetails = BillDetails::all();


        return view('admin.BillDetails.index', compact('billDetails'));
    }
// start code 
    public function create()
    {
        abort_unless(\Gate::allows('billDetails_create'), 403);

        return view('admin.BillDetails.create');
    }
//end code
    public function store(StoreBillDetailsRequest $request)
    {
        abort_unless(\Gate::allows('billDetails_create'), 403);

        $BillDetails = BillDetails::create($request->all());

        return redirect()->route('admin.billDetails.index');
    }

    public function edit(BillDetails $BillDetails)
    {
       
        //abort_unless(\Gate::allows('BillDetails_edit'), 403);

        return view('admin.BillDetails.edit', compact('BillDetails'));
    }

    public function update(UpdateBillDetailsRequest $request, BillDetails $BillDetails)
    {
        abort_unless(\Gate::allows('BillDetails_edit'), 403);

        $BillDetails->update($request->all());

        return redirect()->route('admin.BillDetails.index');
    }

    public function show(BillDetails $BillDetails)
    {
        //die('test');
        //abort_unless(\Gate::allows('BillDetails_show'), 403);

        return view('admin.billDetails.show', compact('BillDetails'));
    }

    public function destroy(BillDetails $BillDetails)
    {
        abort_unless(\Gate::allows('billDetails_delete'), 403);

        $billDetails->delete();

        return back();
    }

    public function massDestroy(MassDestroyBillDetailsRequest $request)
    {
        BillDetails::whereIn('id', request('id'))->delete();

        return response(null, 204);
    }
}
