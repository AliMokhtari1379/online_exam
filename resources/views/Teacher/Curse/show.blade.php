@extends('Teacher.Teacher')
@section('teacher')
    <h3 class="text-center text-purple"> List exam</h3>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>start_date</th>
            <th>time</th>
            <th>end_date</th>
            <th>exams</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach($exams as $exam)
        <tr>
            <td>{{$exam->id }}</td>
            <td>{{$exam->name }}</td>
            <td>{{$exam->start_date }}</td>
            <td>{{$exam->time }}</td>
            <td>{{$exam->end_date }}</td>

            <td>
                <a class="btn btn-primary btn-outline-dark" href="{{ route('exam.showquestion', ['exam' => $exam->id]) }}">
                   نمایش آزمون
                </a>
            </td>
            <td>
                <a class="btn btn-primary btn-outline-dark" href="{{ route('exam.edit', ['exam' => $exam->id]) }}">
                    ویرایش
                </a>
            </td>
            <td>
                <form class="mr-2" action="{{ route('exam.delete', ['exam' => $exam->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger">حذف</button>
                </form>

            </td>
        </tr>
    @endforeach
        <div class="d-flex justify-content-between align-items-center my-3">
            <a class="btn btn-sm btn-outline-dark" href="{{ route('curse.create') }}">register</a>
        </div>
    </table>



@endsection