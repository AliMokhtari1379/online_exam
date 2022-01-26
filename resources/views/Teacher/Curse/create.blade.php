@extends('Teacher.Teacher')
@section('teacher')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                {{-- @include('sections.errors') --}}
                <div class="card">
                    <div class="card-header">
                        افزودن دوره
                    </div>
                    <div class="card-body">
                        <form action="{{ route('curse.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="curse_id">curse</label>
                                <select class="form-select" aria-label="Default select example" name="curse_id" id="curse_id" >
                                    @foreach($result as $user)
                                        <option value="{{$user->id}}">{{$user->name}} </option>
                                    @endforeach
                                </select>
                                @error('title')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') form-control-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="start_date">start </label>
                                <input type="date" id="start_date" name="start_date" class="form-control @error('start_date') form-control-invalid @enderror" value="{{ old('start_date') }}">
                                @error('start_date')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="time">time </label>
                                <input type="time" id="time" name="time" class="form-control @error('time') form-control-invalid @enderror" value="{{ old('time') }}">
                                @error('time')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="end_date">end </label>
                                <input type="date" id="end_date" name="end_date" class="form-control @error('end_date') form-control-invalid @enderror" value="{{ old('end_date') }}">
                                @error('end_date')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>

                            <button class="btn btn-dark" type="submit">ارسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection