<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ __('Update Password') }}</h4>
        <p class="card-title-desc">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div class="row">
                <div class="mb-3 position-relative">
                    <div class="col-md-12">
                        <x-input-label for="current_password" :value="__('Current Password')"/>
                        <x-text-input id="current_password" name="current_password" type="password" class="form-control"
                                      autocomplete="current-password"/>
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-danger"/>
                    </div>
                </div>
            </div>

            <div class="row">

                    <div class="col-md-6">
                        <div class="mb-3 position-relative">
                            <x-input-label for="password" :value="__('New Password')"/>
                            <x-text-input id="password" name="password" type="password" class="form-control"
                                          autocomplete="new-password"/>
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-danger"/>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 position-relative">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                          class="form-control" autocomplete="new-password"/>
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-danger"/>
                        </div>
                    </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3 position-relative">
                        <button class="btn btn-primary" type="submit">{{ __('Update Password') }}</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>





