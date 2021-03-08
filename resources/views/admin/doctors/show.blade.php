@extends('layouts.admin')

@section('content')
    
    <div class="card">
        <div class="card-header">Doctor {{ $doctor->id }}</div>
        <div class="card-body">

            <a href="{{ url('/admin/doctors') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/admin/doctors/' . $doctor->id . '/edit') }}" title="Edit Doctor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

            <form method="POST" action="{{ url('admin/doctors' . '/' . $doctor->id) }}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Doctor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
            </form>
            <br/>
            <br/>

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ID</th><td>{{ $doctor->id }}</td>
                        </tr>
                        <tr><th> Name </th><td> {{ $doctor->name }} </td></tr><tr><th> Residential Address </th><td> {{ $doctor->residential_address }} </td></tr><tr><th> Institute Address </th><td> {{ $doctor->institute_address }} </td></tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
           
@endsection
