@extends('Teacher.Teacher')
@section('teacher')
    <h3 class="text-center text-purple">index Curse</h3>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>start</th>
            <th>end</th>
            <th>operator</th>
        </tr>
        @foreach ($curse as $row)
            <tr>
                <td>{{$row->id }}</td>
                <td>{{$row->name }}</td>
                <td>{{$row->start_at }}</td>
                <td>{{$row->end_at }}</td>
                <td>  <a class="btn btn-sm btn-dark" href="{{ route('exam.show', ['exam' => $row->id]) }}">
                        نمایش
                    </a></td>


            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-between align-items-center my-3">
        <a class="btn btn-sm btn-outline-dark" href="{{ route('curseteacher.create') }}">register</a>
    </div>









@endsection