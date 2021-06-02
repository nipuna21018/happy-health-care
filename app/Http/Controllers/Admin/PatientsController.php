<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $patients = Patient::where('first_name', 'LIKE', "%$keyword%")
                ->orWhere('last_name', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('nic', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('contact_number', 'LIKE', "%$keyword%")
                ->orWhere('date_of_birth', 'LIKE', "%$keyword%")
                ->orWhere('weight', 'LIKE', "%$keyword%")
                ->orWhere('height', 'LIKE', "%$keyword%")
                ->orWhere('emergency_contact_name', 'LIKE', "%$keyword%")
                ->orWhere('emergency_contact_no', 'LIKE', "%$keyword%")
                ->orWhere('emergency_address', 'LIKE', "%$keyword%")
                ->orWhere('chicken_pox', 'LIKE', "%$keyword%")
                ->orWhere('measles', 'LIKE', "%$keyword%")
                ->orWhere('hepatitis_b', 'LIKE', "%$keyword%")
                ->orWhere('medical_problems', 'LIKE', "%$keyword%")
                ->orWhere('has_insurance', 'LIKE', "%$keyword%")
                ->orWhere('insuared_company', 'LIKE', "%$keyword%")
                ->orWhere('insuared_company_address', 'LIKE', "%$keyword%")
                ->orWhere('policy_number', 'LIKE', "%$keyword%")
                ->orWhere('expiary_date', 'LIKE', "%$keyword%")
                ->orWhere('allergies', 'LIKE', "%$keyword%")
                ->orWhere('regular_medications', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $patients = Patient::latest()->paginate($perPage);
        }

        return view('admin.patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.patients.create');
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
        $this->validate($request, [
			'first_name' => 'required|max:20',
			'last_name' => 'max:20',
			'email' => 'required|email|max:60',
			'contact_number' => 'required|digits:10',
			'date_of_birth' => 'required|date',
			'weight' => 'required|numeric',
			'height' => 'required|numeric'
		]);
        $requestData = $request->all();
        
        Patient::create($requestData);

        return redirect('admin/patients')->with('flash_message', 'Patient added!');
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
        $patient = Patient::findOrFail($id);

        return view('admin.patients.show', compact('patient'));
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
        $patient = Patient::findOrFail($id);

        return view('admin.patients.edit', compact('patient'));
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
        $this->validate($request, [
			'first_name' => 'required|max:20',
			'last_name' => 'max:20',
			'email' => 'required|email|max:60',
			'contact_number' => 'required|digits:10',
			'date_of_birth' => 'required|date',
			'weight' => 'required|numeric',
			'height' => 'required|numeric'
		]);
        $requestData = $request->all();
        
        $patient = Patient::findOrFail($id);
        $patient->update($requestData);

        return redirect('admin/patients')->with('flash_message', 'Patient updated!');
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
        Patient::destroy($id);

        return redirect('admin/patients')->with('flash_message', 'Patient deleted!');
    }
}