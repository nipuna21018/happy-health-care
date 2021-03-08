@extends('layouts.admin')

@section('content')
   
    <div class="card">
        <div class="card-header">Doctors</div>
        <div class="card-body">
            <a href="{{ url('/admin/doctors/create') }}" class="btn btn-success btn-sm" title="Add New Doctor">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>

            <form method="GET" action="{{ url('/admin/doctors') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                <div class="input-group">
                    <input class="form-control search-top" type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
                    <span class="input-group-btn">
                        <button  class="btn btn-secondary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>

            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th><th>Name</th><th>Residential Address</th><th>Institute Address</th><th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($doctors as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td><td>{{ $item->residential_address }}</td><td>{{ $item->institute_address }}</td>
                            <td>
                                <a href="{{ url('/admin/doctors/' . $item->id) }}" title="View Doctor"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href="{{ url('/admin/doctors/' . $item->id . '/edit') }}" title="Edit Doctor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                <form method="POST" action="{{ url('/admin/doctors' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Doctor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper"> {!! $doctors->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>

        </div>
    </div>
           
@endsection
