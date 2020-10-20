<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\Models\BankAccount;
use App\Models\Company;
use Illuminate\Http\Request;

class BankAccountController extends Controller
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
        $bankaccount = BankAccount::join('companies', 'bank_accounts.id_company', 'companies.id')
        ->select('companies.*', 'bank_accounts.*', 'bank_accounts.id as bid')
        ->latest('bank_accounts.created_at')->paginate($perPage);
        $data['bankaccount'] = $bankaccount;
        return view('admin.bank-account.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $company = Company::pluck('nama_company', 'id');
        $data['company'] = $company;
        return view('admin.bank-account.create', $data);
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
        
        BankAccount::create($requestData);
        Alert::success('New ' . 'BankAccount'. ' Created!' );

        return redirect('admin/bank-account');
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
        $bankaccount = BankAccount::findOrFail($id);

        return view('admin.bank-account.show', compact('bankaccount'));
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
        $bankaccount = BankAccount::findOrFail($id);
        $company = Company::pluck('nama_company', 'id');
        $data['company'] = $company;
        $data['bankaccount'] = $bankaccount;
        return view('admin.bank-account.edit', $data);
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
        
        $bankaccount = BankAccount::findOrFail($id);
        Alert::success('Record Updated!' );
        $bankaccount->update($requestData);

        return redirect('admin/bank-account');
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
        BankAccount::destroy($id);

        return redirect('admin/bank-account');
    }
}
