@extends('Admin.Admin')

@section('admin')
    <h3 class="text-center text-purple">All List Users</h3>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>family</th>
            <th>username</th>
            <th>rule</th>
            <th>مشخصات</th>
        </tr>
            @foreach ($users as $row)
        <tr>
            <td>{{$row->id }}</td>
            <td>{{$row->name }}</td>
            <td>{{$row->family }}</td>
            <td>{{$row->username }}</td>
            <td>{{$row->rule }}</td>
            <td>  <a class="btn btn-sm btn-dark" href="{{ route('users.show', ['user' => $row->id]) }}">
                    نمایش
                </a></td>


        </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-between align-items-center my-3">
        <a class="btn btn-sm btn-outline-dark" href="{{ route('users.create') }}">register</a>
    </div>
@endsection
