<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\MedicalEquipment;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index($id)
    {
        $perPage = 25;
        $orderdetail = OrderDetail::join('medical_equipments', 'order_details.id_equipment', 'medical_equipments.id')
        ->select('order_details.*', 'medical_equipments.*', 'order_details.id as odid')
        ->where('id_order', $id)->latest('order_details.created_at')->paginate($perPage);
        $data['orderdetail'] = $orderdetail;
        return view('admin.order-detail.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        $addon = MedicalEquipment::pluck('nama_equipment', 'id');
        $data['addon'] = $addon;
        return view('admin.order-detail.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $equipment = MedicalEquipment::where('id', $request->id_equipment)->first();
        $order = Order::where('id', $request->id_order)->first();
        $order->total_bayar += $equipment->harga_jual;
        $order->save();
        $requestData['harga'] = $equipment->harga_jual;
        OrderDetail::create($requestData);
        Alert::success('New ' . 'OrderDetail'. ' Created!' );

        return redirect('admin/order/'.$request->id_order.'/detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $orderdetail = OrderDetail::findOrFail($id);

        return view('admin.order-detail.show', compact('orderdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $orderdetail = OrderDetail::findOrFail($id);
        $addon = MedicalEquipment::pluck('nama_equipment', 'id');
        $data['addon'] = $addon;
        $data['orderdetail'] = $orderdetail;
        return view('admin.order-detail.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $orderdetail = OrderDetail::findOrFail($id);
        $equipment = MedicalEquipment::where('id', $request->id_equipment)->first();
        $order = Order::where('id', $request->id_order)->first();
        $order->total_bayar += $equipment->harga_jual;
        $order->save();
        $requestData['harga'] = $equipment->harga_jual;
        Alert::success('Record Updated!' );
        $orderdetail->update($requestData);

        return redirect('admin/order-detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Alert::success('Record Deleted!' );
        OrderDetail::destroy($id);

        return redirect('admin/order-detail');
    }
}
