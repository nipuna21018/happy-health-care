@extends('layouts.admin')

@section('content')
    
    <!-- Breadcrumbs-->
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('/admin/') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ url('/admin/prescriptions') }}">Prescriptions</a>
        </li>
        <li class="breadcrumb-item active">#{{ $prescription->id }}</li>
    </ol>


    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-eye"></i>Prescription #{{ $prescription->id }}</h2>
        </div>
   
        <div>

            <a href="{{ url('/admin/prescriptions') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/admin/prescriptions/' . $prescription->id . '/edit') }}" title="Edit Prescription"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

            <form method="POST" action="{{ url('admin/prescriptions' . '/' . $prescription->id) }}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Prescription" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
            </form>
            <br/>
            <br/>

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ID</th><td>{{ $prescription->id }}</td>
                        </tr>
                        <tr><th> Patient Id </th><td> {{ $prescription->patient_id }} </td></tr><tr><th> Doctor Id </th><td> {{ $prescription->doctor_id }} </td></tr><tr><th> Pharmacy Id </th><td> {{ $prescription->pharmacy_id }} </td></tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
           
@endsection
