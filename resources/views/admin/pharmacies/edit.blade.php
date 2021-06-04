@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Edit Pharmacy #{{ $pharmacy->id }}</h5>
    </div>
    <div class="card-body">
        <a href="{{ url('/admin/pharmacies') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                    class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <br />
        <br />

        <form method="POST" action="{{ url('/admin/pharmacies/' . $pharmacy->id) }}" accept-charset="UTF-8"
            class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('admin.pharmacies.form', ['formMode' => 'edit'])

        </form>

    </div>
</div>

@endsection