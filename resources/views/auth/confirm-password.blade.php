@extends('auth.includes.index')

@section('form-section')
    <h4 class="text-muted text-center font-size-18">
        <b>
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </b>
    </h4>

    <div class="p-3">

        <form class="form-horizontal mt-3" method="POST" {{ route('password.confirm') }}>
            @csrf

            <div class="form-group mb-3 row">
                <div class="col-12">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>

            <div class="col-12">
                <x-primary-button>{{ __('Confirm') }}</x-primary-button>
            </div>
        </form>
    </div>
    <!-- end -->
@endsection
