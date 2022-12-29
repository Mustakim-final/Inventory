@extends('layouts.masterapp')
<div class="wrapper-page">
    <div class="panel panel-color panel-primary panel-pages">
        <div class="panel-heading bg-img">
            <div class="bg-overlay"></div>
           <h3 class="text-center m-t-10 text-white"> Create a new Account </h3>
        </div>


        <div class="panel-body">
        <form class="form-horizontal m-t-20" action="{{ route('register') }}" method="POST">
            @csrf


            {{-- <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control input-lg"  name="name" type="text" required="" placeholder="Username">
                </div>
            </div> --}}

            <div class="form-group">
                <div class="col-xs-12">

                    <input id="name" type="text" placeholder="Username"
                    class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

            </div>

            {{-- <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control input-lg" name="email" type="email" required="" placeholder="Email">
                </div>
            </div> --}}

            <div class="form-group">
                <div class="col-xs-12">
                    <input id="email" type="email" placeholder="Email"
                    class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

            </div>

            {{-- <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control input-lg" name="password" type="password" required="" placeholder="Password">
                </div>
            </div> --}}

            <div class="form-group">
                <div class="col-xs-12">
                    <input id="password" type="password" placeholder="Password"
                    class="form-control @error('password') is-invalid @enderror" name="password"
                    required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password"
                    name="password_confirmation" required autocomplete="new-password">
                </div>

            </div>

            <div class="form-group ">
                <div class="col-xs-12">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox-signup" type="checkbox" checked="">
                        <label for="checkbox-signup">
                            I accept <a href="#">Terms and Conditions</a>
                        </label>
                    </div>

                </div>
            </div>

            <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    <button class="btn btn-primary waves-effect waves-light btn-lg w-lg" type="submit">Register</button>
                </div>
            </div>

            <div class="form-group m-t-30">
                <div class="col-sm-12 text-center">
                    <a href="{{ route('login') }}">Already have account?</a>
                </div>
            </div>
        </form>
        </div>

    </div>
</div>



{{-- @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3"> <label for="name"
                                class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
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
@endsection --}}



