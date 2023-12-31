@extends('auth.includes.index')

@section('form-section')
    <b>
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </b>

    <div class="p-3">
        <div class="row">
            <div class="col-md-12">
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-info">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif
                <div class="mb-3 position-relative">
                    <form class="form-horizontal mt-3" method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div class="col-12">
                            <button class="btn btn-info w-100 waves-effect waves-light" type="submit">
                                {{ __('Resend Verification Email') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

{{--        <form method="POST" action="{{ route('logout') }}">--}}
{{--            @csrf--}}

{{--            <button type="submit" class="btn btn shadow-none hover:text-gray-900 dark:hover:text-gray-100 rounded-md">--}}
{{--                {{ __('Log Out') }}--}}
{{--            </button>--}}
{{--        </form>--}}

    </div>
    <!-- end -->
@endsection
