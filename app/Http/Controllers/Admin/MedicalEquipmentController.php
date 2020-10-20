<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\Models\MedicalEquipment;
use Illuminate\Http\Request;

class MedicalEquipmentController extends Controller
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
        $perPage = 50;
        $medicalequipment = MedicalEquipment::latest()->paginate($perPage);
        $data['medicalequipment'] = $medicalequipment;
        return view('admin.medical-equipment.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.medical-equipment.create');
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
        
        MedicalEquipment::create($requestData);
        Alert::success('New ' . 'MedicalEquipment'. ' Created!' );

        return redirect('admin/medical-equipment');
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
        $medicalequipment = MedicalEquipment::findOrFail($id);

        return view('admin.medical-equipment.show', compact('medicalequipment'));
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
        $medicalequipment = MedicalEquipment::findOrFail($id);
        $data['medicalequipment'] = $medicalequipment;
        return view('admin.medical-equipment.edit', $data);
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
        
        $medicalequipment = MedicalEquipment::findOrFail($id);
        Alert::success('Record Updated!' );
        $medicalequipment->update($requestData);

        return redirect('admin/medical-equipment');
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
        MedicalEquipment::destroy($id);

        return redirect('admin/medical-equipment');
    }
}
