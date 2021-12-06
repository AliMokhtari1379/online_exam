@extends('Admin.Admin')

@section('admin')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                {{-- @include('sections.errors') --}}
                <div class="card">
                    <div class="card-header">
                        ویرایش
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.update' , ['user' => $user->id]) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">نام</label>
                                <input type="text" id="name" name="name" class="form-control @error('name')form-control-invalid @enderror" value="{{ $user->name }}">
                                @error('name')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="family">فامیلی</label>
                                <input type="text" id="family" name="family" class="form-control @error('family')form-control-invalid @enderror" value="{{$user->family }}">
                                @error('family')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="username">نام کاربری</label>
                                <input type="text" id="username" name="username" class="form-control @error('username')form-control-invalid @enderror" value="{{$user->username }}">
                                @error('username')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">ایمیل</label>
                                <input type="email" id="email" name="email" class="form-control @error('email')form-control-invalid @enderror" value="{{$user->email }}">
                                @error('email')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="rule">صمت</label>
                                <input type="text" id="rule" name="rule" class="form-control @error('rule')form-control-invalid @enderror" value="{{$user->rule }}">
                                @error('rule')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="is_status">تاییدیه</label>
                                <input type="int" id="is_status" name="is_status" class="form-control @error('is_status')form-control-invalid @enderror" value="{{$user->is_status }}">
                                @error('is_status')
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