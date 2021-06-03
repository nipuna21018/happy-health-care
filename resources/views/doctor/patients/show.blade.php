@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">{{$patient->first_name}}'s Profile</h5>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $patient->id }}</td>
                    </tr>
                    <tr>
                        <th> First Name </th>
                        <td> {{ $patient->first_name }} </td>
                    </tr>
                    <tr>
                        <th> Last Name </th>
                        <td> {{ $patient->last_name }} </td>
                    </tr>
                    <tr>
                        <th> Address </th>
                        <td> {{ $patient->address }} </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection