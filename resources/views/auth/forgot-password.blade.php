@extends('auth.includes.index')

@section('form-section')

    <b class="text-muted text-center">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </b>

    <div class="p-3">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-info" :status="session('status')"/>

        <form class="form-horizontal mt-3" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group mb-3 row">
                <div class="col-12">
                    <x-text-input id="email" class="form-control" type="email" name="email" placeholder="Email"
                                  :value="old('email')" required autofocus autocomplete="email"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger"/>
                </div>
            </div>

            <div class="form-group mb-3 text-center row mt-3 pt-1">
                <div class="col-12">
                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </div>

        </form>
    </div>
    <!-- end -->
@endsection


