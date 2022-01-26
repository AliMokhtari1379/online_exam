@extends('Admin.Admin')
@section('admin')
    <h3 class="text-center text-purple"> Teacher in curse</h3>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>name</th>
            <th>family</th>
        </tr>
        <tr>
            @foreach($flights as $user)
                <td>{{$user->name }}</td>
                <td>{{$user->family }}</td>
            @endforeach
        </tr>
    </table>
    <h3 class="text-center text-purple"> List students</h3>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>family</th>
            <th>username</th>
            <th>email</th>
            <th>operator</th>
        </tr>

            @foreach($result as $user)
            <tr>
            <td>{{$user->id }}</td>
            <td>{{$user->name }}</td>
            <td>{{$user->family }}</td>
            <td>{{$user->username }}</td>
            <td>{{$user->email }}</td>

            <td>
                <a class="btn btn-primary btn-outline-dark" href="{{ route('user.edit', ['user' => $user->id]) }}">
                    ویرایش
                </a>

                <form class="mr-2" action="{{ route('user.delete', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger">حذف</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-between align-items-center my-3">
        <a class="btn btn-sm btn-outline-dark" href="{{ route('curse.Add') }}">add students</a>
    </div>

@endsection