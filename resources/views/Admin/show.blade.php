@extends('Admin.Admin')
@section('admin')

    <h3 class="text-center text-purple"> List User</h3>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>family</th>
            <th>username</th>
            <th>email</th>
            <th>rule</th>
            <th>is_status</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        <tr>
            <td>{{$user->id }}</td>
            <td>{{$user->name }}</td>
            <td>{{$user->family }}</td>
            <td>{{$user->username }}</td>
            <td>{{$user->email }}</td>
            <td>{{$user->rule }}</td>
            <td>{{$user->is_status }}</td>
            <td>
                <a class="btn btn-primary btn-outline-dark" href="{{ route('user.edit', ['user' => $user->id]) }}">
                    ویرایش
                </a>
            </td>
            <td>
                <form class="mr-2" action="{{ route('user.delete', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger">حذف</button>
                </form>

            </td>
        </tr>

    </table>





@endsection