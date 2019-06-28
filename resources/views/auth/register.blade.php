@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="userName" class="col-md-4 col-form-label text-md-right">{{ __('userName') }}</label>

                            <div class="col-md-6">
                                <input id="userName" type="text" class="form-control @error('userName') is-invalid @enderror" name="userName" value="{{ old('userName') }}" required autocomplete="userName" autofocus>

                                @error('userName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="first name" class="col-md-4 col-form-label text-md-right">{{ __('first name') }}</label>

                            <div class="col-md-6">
                                <input id="first name" type="text" class="form-control @error('first name') is-invalid @enderror" name="first name" value="{{ old('first name') }}" required autocomplete="first name" autofocus>

                                @error('first name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last name" class="col-md-4 col-form-label text-md-right">{{ __('last name') }}</label>

                            <div class="col-md-6">
                                <input id="last name" type="text" class="form-control @error('last name') is-invalid @enderror" name="last name" value="{{ old('last name') }}" required autocomplete="last name" autofocus>

                                @error('last name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('gender') }}</label>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="ชาย" {{ old('gender') == 'ชาย' ?'checked':'' }}>
                                        <label class="form-check-label" for="male">ชาย</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="หญิง" {{ old('gender') == 'หญิง' ?'checked':'' }}>
                                        <label class="form-check-label" for="female">หญิง</label>
                                    </div>
                                </div>


                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                        <div class="form-group row">
                            <label for="active" class="col-md-4 col-form-label text-md-right">{{ __('active') }}</label>

                            <div class="col-md-6">
                                <input id="active" type="text" class="form-control @error('active') is-invalid @enderror" name="active" value="{{ old('active') }}" required autocomplete="active" autofocus>

                                @error('active')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
