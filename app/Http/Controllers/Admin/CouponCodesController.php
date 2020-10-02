<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCouponCodeRequest;
use App\Http\Requests\StoreCouponCodeRequest;
use App\Http\Requests\UpdateCouponCodeRequest;
use App\Models\CouponCode;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CouponCodesController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('coupon_code_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = CouponCode::query()->select(sprintf('%s.*', (new CouponCode)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'coupon_code_show';
                $editGate      = 'coupon_code_edit';
                $deleteGate    = 'coupon_code_delete';
                $crudRoutePart = 'coupon-codes';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('code', function ($row) {
                return $row->code ? $row->code : "";
            });
            $table->editColumn('reward', function ($row) {
                return $row->reward ? $row->reward : "";
            });
            $table->editColumn('quantity', function ($row) {
                return $row->quantity ? $row->quantity : "";
            });
            $table->editColumn('is_disposable', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->is_disposable ? 'checked' : null) . '>';
            });

            $table->rawColumns(['actions', 'placeholder', 'is_disposable']);

            return $table->make(true);
        }

        return view('admin.couponCodes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('coupon_code_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.couponCodes.create');
    }

    public function store(StoreCouponCodeRequest $request)
    {
        $couponCode = CouponCode::create($request->all());

        return redirect()->route('admin.coupon-codes.index');
    }

    public function edit(CouponCode $couponCode)
    {
        abort_if(Gate::denies('coupon_code_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.couponCodes.edit', compact('couponCode'));
    }

    public function update(UpdateCouponCodeRequest $request, CouponCode $couponCode)
    {
        $couponCode->update($request->all());

        return redirect()->route('admin.coupon-codes.index');
    }

    public function show(CouponCode $couponCode)
    {
        abort_if(Gate::denies('coupon_code_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.couponCodes.show', compact('couponCode'));
    }

    public function destroy(CouponCode $couponCode)
    {
        abort_if(Gate::denies('coupon_code_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $couponCode->delete();

        return back();
    }

    public function massDestroy(MassDestroyCouponCodeRequest $request)
    {
        CouponCode::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
