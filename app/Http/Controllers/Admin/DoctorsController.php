<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorsController extends Controller
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
            $doctors = Doctor::where('first_name', 'LIKE', "%$keyword%")
                ->orWhere('last_name', 'LIKE', "%$keyword%")
                ->orWhere('specialization', 'LIKE', "%$keyword%")
                ->orWhere('residential_address', 'LIKE', "%$keyword%")
                ->orWhere('institute_address', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('mobile', 'LIKE', "%$keyword%")
                ->orWhere('date_of_birth', 'LIKE', "%$keyword%")
                ->orWhere('gender', 'LIKE', "%$keyword%")
                ->orWhere('marital_status', 'LIKE', "%$keyword%")
                ->orWhere('nationality', 'LIKE', "%$keyword%")
                ->orWhere('professional_statement', 'LIKE', "%$keyword%")
                ->orWhere('education_qualiication', 'LIKE', "%$keyword%")
                ->orWhere('experience_after_graduation', 'LIKE', "%$keyword%")
                ->orWhere('registration_number', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $doctors = Doctor::latest()->paginate($perPage);
        }

        return view('admin.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.doctors.create');
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
			'first_name' => 'required|max:50',
			'email' => 'required|email|max:50',
			'mobile' => 'required|digits:10'
		]);
        $requestData = $request->all();
        
        Doctor::create($requestData);

        return redirect('admin/doctors')->with('flash_message', 'Doctor added!');
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
        $doctor = Doctor::findOrFail($id);

        return view('admin.doctors.show', compact('doctor'));
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
        $doctor = Doctor::findOrFail($id);

        return view('admin.doctors.edit', compact('doctor'));
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
			'first_name' => 'required|max:50',
			'email' => 'required|email|max:50',
			'mobile' => 'required|digits:10'
		]);
        $requestData = $request->all();
        
        $doctor = Doctor::findOrFail($id);
        $doctor->update($requestData);

        return redirect('admin/doctors')->with('flash_message', 'Doctor updated!');
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
        Doctor::destroy($id);

        return redirect('admin/doctors')->with('flash_message', 'Doctor deleted!');
    }
}
