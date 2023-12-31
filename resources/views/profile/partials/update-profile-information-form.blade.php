<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ __('Profile Information') }}</h4>
        <p class="card-title-desc">{{ __("Update your account's profile information and email address.") }}</p>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="row">
                <div class="col-md-6">
                    <x-input-label for="name" :value="__('Name')"/>
                    <x-text-input id="name" name="name" type="text" class="form-control"
                                  :value="old('name', $user->name)" required autofocus autocomplete="name"/>
                    <x-input-error class="mt-2 text-danger" :messages="$errors->get('name')"/>
                </div>

                <div class="col-md-6">
                    <div class="mb-3 position-relative">

                        <x-input-label for="email" :value="__('Email')"/>
                        <x-text-input id="email" name="email" type="email" class="form-control"
                                      :value="old('email', $user->email)" required autocomplete="username"/>
                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('email')"/>

                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                    {{ __('Your email address is unverified.') }}

                                    <button form="send-verification"
                                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 position-relative">
                        <x-input-label for="image" :value="__('Profile Image')"/>
                        <x-text-input id="image" name="image" type="file" class="form-control"/>
                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('image')"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 position-relative">
                        <x-input-label for="username" :value="__('Username')"/>
                        <x-text-input id="username" name="username" type="text" class="form-control"
                                      :value="old('username', $user->username)" required autofocus autocomplete="username"/>
                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('username')"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 position-relative">
                        <img id="showImage" class="img-fluid"
                             src="{{ (!empty($user->image))? url('upload/admin_images/'.$user->image):url('upload/no_image.jpg') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3 position-relative">
                        <button class="btn btn-primary" type="submit">{{ __('Update Profile Information') }}</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>


<script type="text/javascript">
    console.log('hyyyyyy');
    $(document).ready(function () {
        $('#image').change(function (e) {
            console.log('changeeeeeeeeeeee');

            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>



