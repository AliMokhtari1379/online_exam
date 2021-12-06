@extends('Admin.Admin')
@section('admin')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                {{-- @include('sections.errors') --}}
                <div class="card">
                    <div class="card-header">
                        ثبت نام
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="POST">
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
                                <label for="family">family </label>
                                <input type="text" id="family" name="family" class="form-control @error('family') form-control-invalid @enderror" value="{{ old('family') }}">
                                @error('family')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div><div class="form-group">
                                <label for="username">user name </label>
                                <input type="text" id="username" name="username"
                                       class="form-control @error('username') form-control-invalid @enderror" value="{{ old('username') }}">
                                @error('username')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" id="email" name="email" class="form-control @error('email') form-control-invalid @enderror" value="{{ old('email') }}">
                                @error('email')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" id="password" name="password" class="form-control"  value="{{ old('password') }}">
                            </div>
                            <div class="form-group">
                                <label for="rule">rule</label>
                                <select class="form-select" aria-label="Default select example" name="rule" id="rule" >
                                    <option selected>Open this select menu</option>
                                    <option value="teacher">teacher</option>
                                    <option value="students">students</option>
                                </select>
                                @error('title')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="is_status">active</label>
                                <input type="integer" id="is_status" name="is_status"
                                       class="form-control @error('is_status') form-control-invalid @enderror" value="{{ old('is_status') }}">
                                @error('is_status')
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