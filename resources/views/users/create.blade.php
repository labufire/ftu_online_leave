@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6 mx-auto">
                    <h1 class="text-center">Create User</h1>
                    <form action="{{ route('user.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" id="" class="form-control @error('name') is-invalid @enderror" placeholder="" aria-describedby="helpId">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{ old('email') }}" id="" class="form-control @error('email') is-invalid @enderror" placeholder="" aria-describedby="helpId">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>

                          <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="" class="form-control @error('password') is-invalid @enderror" placeholder="" aria-describedby="helpId">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="form-group">
                            <label for="">Repassword</label>
                            <input type="password" name="password_confirmation" id="" class="form-control" placeholder="" aria-describedby="helpId">
                          </div>
                          <div class="form-group">
                                <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
                                <button class="btn btn-success float-right" type="submit">Save</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
