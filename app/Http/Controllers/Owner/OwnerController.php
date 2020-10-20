<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\User;
use Illuminate\Http\Request;


class OwnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request) {
        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $filtered = Order::join('ambulances', 'orders.id_ambulance', 'ambulances.id')
                ->join('customers', 'orders.id_customer', 'customers.id')
                ->join('companies', 'customers.id_company', 'companies.id')
                ->join('bank_accounts', 'orders.id_bank_account', 'bank_accounts.id')
                ->whereMonth('orders.created_at', $bulan)->whereYear('orders.created_at', $tahun)
                ->select('ambulances.*', 'customers.*', 'bank_accounts.*', 'companies.*', 'orders.*', 'orders.id as oid', 'ambulances.harga_jual as harga_ambulance')
                ->get();
        if (!empty($bulan) && !empty($tahun)) {
            $data['hasil'] = $filtered;
            $data['pendapatan'] = collect($filtered)->sum('total_bayar');
            return view('owner.dashboard', $data);
        } else {
            return view('owner.dashboard', $data);
        }
    }

}
