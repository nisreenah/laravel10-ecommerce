<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ __('Delete Account') }}</h4>
        <h6 class="card-title">
            {{ __('Are you sure you want to delete your account?') }}
        </h6>
        <p class="card-title-desc">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>

        <form method="post" action="{{ route('profile.destroy') }}" class="mt-6 space-y-6">
            @csrf
            @method('delete')

            <div class="row">
                <div class="mb-3 position-relative">
                    <div class="col-md-6">
                        <x-input-label for="password" value="{{ __('Password') }}" class="label" />
                        <x-text-input id="password" name="password" type="password"
                            class="form-control" placeholder="{{ __('Password') }}"/>
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="text-danger" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3 position-relative">
                        <button class="btn btn-primary" type="submit">{{ __('Delete Account') }}</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>





