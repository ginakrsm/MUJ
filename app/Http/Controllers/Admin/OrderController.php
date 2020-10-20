<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use File;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Ambulance;
use App\Models\Customer;
use App\Models\BankAccount;
use Illuminate\Http\Request;

class OrderController extends Controller
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
    public function index(Request $request)
    {
        $perPage = 25;
        $order = Order::join('ambulances', 'orders.id_ambulance', 'ambulances.id')
                ->join('customers', 'orders.id_customer', 'customers.id')
                ->join('bank_accounts', 'orders.id_bank_account', 'bank_accounts.id')
                ->select('ambulances.*', 'customers.*', 'bank_accounts.*', 'orders.*', 'orders.id as oid')
                ->latest('orders.created_at')->paginate($perPage);
        $data['order'] = $order;
        return view('admin.order.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $ambulance = Ambulance::pluck('nama_ambulance', 'id');
        $customer = Customer::pluck('nama_customer', 'id');
        $bank = BankAccount::pluck('atas_nama_rekening','id');
        $data['ambulance'] = $ambulance;
        $data['customer'] = $customer;
        $data['bank'] = $bank;
        return view('admin.order.create', $data);
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
        $ambulance = Ambulance::where('id',$request->id_ambulance)->first();
        $requestData = $request->all();
        if ($request->hasFile('bukti_pembyaran')) {
            $bukti_pembyaran = $request->file('bukti_pembyaran');
            $nama_bukti_pembyaran = $request->file('bukti_pembyaran')->getClientOriginalName();
            $bukti_pembyaran->move('uploads/bukti-pembayaran', $nama_bukti_pembyaran);
            $requestData['bukti_pembyaran'] = $nama_bukti_pembyaran;
        }
        $requestData['total_bayar'] = $ambulance->harga_jual;
        Order::create($requestData);
        Alert::success('New ' . 'Order'. ' Created!' );

        return redirect('admin/order');
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
        $order = Order::findOrFail($id);

        return view('admin.order.show', compact('order'));
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
        $order = Order::findOrFail($id);
        $ambulance = Ambulance::pluck('nama_ambulance', 'id');
        $customer = Customer::pluck('nama_customer', 'id');
        $bank = BankAccount::pluck('atas_nama_rekening','id');
        $data['ambulance'] = $ambulance;
        $data['customer'] = $customer;
        $data['bank'] = $bank;
        $data['order'] = $order;
        return view('admin.order.edit', $data);
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
        $order = Order::findOrFail($id);
        if ($request->hasFile('bukti_pembayaran')) {
            File::delete('uploads/featured-image/'. $order->bukti_pembayaran);
            $bukti_pembayaran = $request->file('bukti_pembayaran');
            $nama_bukti_pembayaran = $request->file('bukti_pembayaran')->getClientOriginalName();
            $bukti_pembayaran->move('uploads/bukti-pembayaran', $nama_bukti_pembayaran);
            $requestData['bukti_pembayaran'] = $nama_bukti_pembayaran;
        }

        Alert::success('Record Updated!' );
        $order->update($requestData);

        return redirect('admin/order');
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
        Order::destroy($id);

        return redirect('admin/order');
    }

    public function invoice($id) {
        $order_detail = OrderDetail::where('id_order', $id)->get();
        if($order_detail->isEmpty()) {
            $order = Order::join('ambulances', 'orders.id_ambulance', 'ambulances.id')
                ->join('customers', 'orders.id_customer', 'customers.id')
                ->join('companies', 'customers.id_company', 'companies.id')
                ->join('bank_accounts', 'orders.id_bank_account', 'bank_accounts.id')
                ->select('ambulances.*', 'customers.*', 'bank_accounts.*', 'companies.*', 'orders.*', 'orders.id as oid', 'ambulances.harga_jual as harga_ambulance')
                ->where('orders.id', $id)->first();
            $data['order'] = $order;
            return view('admin.order.invoice-order-only', $data);
        } else {
            $order = Order::join('ambulances', 'orders.id_ambulance', 'ambulances.id')
                ->join('customers', 'orders.id_customer', 'customers.id')
                ->join('companies', 'customers.id_company', 'companies.id')
                ->join('bank_accounts', 'orders.id_bank_account', 'bank_accounts.id')
                ->select('ambulances.*', 'customers.*', 'bank_accounts.*', 'companies.*', 'orders.*', 'orders.id as oid', 'ambulances.harga_jual as harga_ambulance')
                ->where('orders.id', $id)->first();
            
            $details = OrderDetail::join('medical_equipments', 'order_details.id_equipment', 'medical_equipments.id')
                                    ->select('order_details.*', 'medical_equipments.*', 'order_details.id as odid', 'medical_equipments.harga_jual as harga_addon')
                                    ->where('id_order', $id)->get();
            
            $data['order'] = $order;
            $data['details'] = $details;
            return view('admin.order.invoice-order-addon', $data);
        }
    }
}
