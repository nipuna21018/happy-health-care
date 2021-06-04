@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Pharmacies</h5>
    </div>
    <div class="card-body">
        <a href="{{ url('/admin/pharmacies/create') }}" class="btn btn-success btn-sm" title="Add New Pharmacy">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>

        <form method="GET" action="{{ url('/admin/pharmacies') }}" accept-charset="UTF-8"
            class="form-inline my-2 my-lg-0 float-right" role="search">
            <div class="input-group">
                <input class="form-control search-top" type="text" name="search" placeholder="Search..."
                    value="{{ request('search') }}">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>

        <br />
        <br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Owner First Name</th>
                        <th>Owner Last Name</th>
                        <th>Registration Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pharmacies as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->pharmacy_name }}</td>
                        <td>{{ $item->first_name }}</td>
                        <td>{{ $item->last_name }}</td>
                        <td>{{ $item->registration_number }}</td>
                        <td>
                            <a href="{{ url('/admin/pharmacies/' . $item->id) }}" title="View Pharmacy"><button
                                    class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                    View</button></a>
                            <a href="{{ url('/admin/pharmacies/' . $item->id . '/edit') }}"
                                title="Edit Pharmacy"><button class="btn btn-primary btn-sm"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('/admin/pharmacies' . '/' . $item->id) }}"
                                accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Pharmacy"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination-wrapper"> {!! $pharmacies->appends(['search' => Request::get('search')])->render()
                !!} </div>
        </div>

    </div>
</div>

@endsection