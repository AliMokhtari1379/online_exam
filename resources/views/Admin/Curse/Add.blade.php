@extends('Admin.Admin')
@section('admin')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                {{-- @include('sections.errors') --}}
                <div class="card">
                    <div class="card-header">
                        Add Students
                    </div>
                    <div class="card-body">
                        <form action="{{ route('curse.zakhire') }}" method="POST">
                         @csrf
                            <div class="form-group">
                                <label for="user_id">students</label>
                                <select class="form-select" aria-label="Default select example" name="user_id" id="user_id" >
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
                            <div class="form-group " >

                                <select class="form-select "  aria-label="Default select example" name="curse_id" id="curse_id" >
                                    @foreach($re as $user)
                                        <option value="{{$user->id}}">{{$user->name}} </option>
                                    @endforeach
                                </select>
                                @error('title')
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