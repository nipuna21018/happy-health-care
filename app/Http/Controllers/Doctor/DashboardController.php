<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $doctor = Doctor::where("user_id", Auth::id())->first();

        $patientToday = Patient::whereDate('created_at', DB::raw('CURDATE()'))->count();
        $patientTotal = Patient::count();

        $prescriptionOpen = Prescription::whereStatus('pending')->whereDoctorId($doctor->id)->count();
        $prescriptionTotal = Prescription::whereDoctorId($doctor->id)->count();

        return view('doctor.dashboard', compact('patientToday', 'patientTotal', 'prescriptionOpen', 'prescriptionTotal'));
    }
}
