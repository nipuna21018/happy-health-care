@extends('layouts.admin')

@section('content')
    
    <div class="card">
        <div class="card-header"><h5 class="mb-0">Patient {{ $patient->id }}</h5></div>
        <div class="card-body">

            <a href="{{ url('/admin/patients') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/admin/patients/' . $patient->id . '/edit') }}" title="Edit Patient"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

            <form method="POST" action="{{ url('admin/patients' . '/' . $patient->id) }}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Patient" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
            </form>
            <br/>
            <br/>

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ID</th><td>{{ $patient->id }}</td>
                        </tr>
                        <tr><th> First Name </th><td> {{ $patient->first_name }} </td></tr><tr><th> Last Name </th><td> {{ $patient->last_name }} </td></tr><tr><th> Address </th><td> {{ $patient->address }} </td></tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
           
@endsection
