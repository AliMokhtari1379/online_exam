@extends('Teacher.Teacher')
@section('teacher')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                {{-- @include('sections.errors') --}}
                <div class="card">
                    <div class="card-header">
                        ویرایش
                    </div>
                    <div class="card-body">
                        <form action="{{ route('exam.update' , ['exam' => $exam->id]) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" id="name" name="name" class="form-control @error('name')form-control-invalid @enderror" value="{{ $exam->name }}">
                                @error('name')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="start_date">start_date</label>
                                <input type="date" id="start_date" name="start_date" class="form-control @error('start_date')form-control-invalid @enderror" value="{{$exam->start_date }}">
                                @error('start_date')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="time">time </label>
                                <input type="time" id="time" name="time" class="form-control @error('time')form-control-invalid @enderror" value="{{$exam->time }}">
                                @error('time')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="end_date">end_date</label>
                                <input type="date" id="end_date" name="end_date" class="form-control @error('end_date')form-control-invalid @enderror" value="{{$exam->end_date }}">
                                @error('end_date')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>

                            <button class="btn btn-dark" type="submit">ویرایش</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>












@endsection