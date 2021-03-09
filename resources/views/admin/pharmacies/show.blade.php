@extends('layouts.admin')

@section('content')
    
    <div class="card">
        <div class="card-header"><h5 class="mb-0">Pharmacy {{ $pharmacy->id }}</h5></div>
        <div class="card-body">

            <a href="{{ url('/admin/pharmacies') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/admin/pharmacies/' . $pharmacy->id . '/edit') }}" title="Edit Pharmacy"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

            <form method="POST" action="{{ url('admin/pharmacies' . '/' . $pharmacy->id) }}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Pharmacy" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
            </form>
            <br/>
            <br/>

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ID</th><td>{{ $pharmacy->id }}</td>
                        </tr>
                        <tr><th> First Name </th><td> {{ $pharmacy->first_name }} </td></tr><tr><th> Last Name </th><td> {{ $pharmacy->last_name }} </td></tr><tr><th> Registration Number </th><td> {{ $pharmacy->registration_number }} </td></tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
           
@endsection
