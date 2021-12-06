@extends('Admin.Admin')
@section('admin')
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
                                <label for="name">name</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') form-control-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div><div class="form-group">
                                <label for="start_at">start </label>
                                <input type="date" id="start_at" name="start_at" class="form-control @error('start_at') form-control-invalid @enderror" value="{{ old('start_at') }}">
                                @error('start_at')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div><div class="form-group">
                                <label for="end_at">end </label>
                                <input type="date" id="end_at" name="end_at" class="form-control @error('end_at') form-control-invalid @enderror" value="{{ old('end_at') }}">
                                @error('end_at')
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