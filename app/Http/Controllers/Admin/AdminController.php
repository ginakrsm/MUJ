<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Order;
use App\Models\MedicalEquipment;
use Illuminate\Http\Request;


class AdminController extends Controller
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
    public function index()
    {
        $data['company'] = Company::count();
        $data['customer'] = Customer::count();
        $data['order'] = Order::count();
        $data['equipment'] = MedicalEquipment::count();
        return view('admin.dashboard', $data);
    }

}
