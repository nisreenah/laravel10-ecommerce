@extends('auth.includes.index')

@section('form-section')
    <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>

    <div class="p-3">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-danger" :status="session('status')"/>

        <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group mb-3 row">
                <div class="col-12">
                    <x-text-input id="name" class="form-control" type="texr" name="name" placeholder="Name"
                                  :value="old('name')" required autofocus autocomplete="name"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger"/>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <div class="col-12">
                    <x-text-input id="email" class="form-control" type="email" name="email" placeholder="Email"
                                  :value="old('email')" required autofocus autocomplete="email"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger"/>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <div class="col-12">
                    <x-text-input id="email" class="form-control" type="username" name="username" placeholder="Username"
                                  :value="old('username')" required autofocus autocomplete="username"/>
                    <x-input-error :messages="$errors->get('username')" class="mt-2 text-danger"/>
                </div>
            </div>


            <div class="form-group mb-3 row">
                <div class="col-12">
                    <x-text-input id="password" class="form-control"
                                  type="password" name="password" placeholder="Password"
                                  required autocomplete="current-password"/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger"/>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <div class="col-12">
                    <x-text-input id="password_confirmation" class="form-control"
                                  type="password" placeholder="Password confirmation"
                                  name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                </div>
            </div>

            <div class="form-group mb-3 text-center row mt-3 pt-1">
                <div class="col-12">
                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">{{ __('Register') }}
                    </button>
                </div>
            </div>

            <div class="form-group mb-0 row mt-2">
                <div class="col-sm-5 mt-3">
                    <a href="{{ route('login') }}" class="text-muted"><i class="mdi mdi-account-circle"></i>
                        {{ __('Already registered?') }}
                    </a>
                </div>
            </div>
        </form>
    </div>
    <!-- end -->
@endsection
