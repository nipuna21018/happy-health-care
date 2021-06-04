<?php

namespace App\Http\Controllers\Patient;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Patient;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('patient.profile.create');
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

        return redirect('patient/profile')->with('flash_message', 'Profile Created!');
    }
}
