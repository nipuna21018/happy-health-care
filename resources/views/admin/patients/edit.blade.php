@extends('layouts.admin')

@section('content')
    
    <div class="card">
        <div class="card-header"><h5 class="mb-0">Edit Patient #{{ $patient->id }}</h5></div>
        <div class="card-body">
            <a href="{{ url('/admin/patients') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <br />
            <br />

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ url('/admin/patients/' . $patient->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}

                @include ('admin.patients.form', ['formMode' => 'edit'])

            </form>

        </div>
    </div>
       
@endsection