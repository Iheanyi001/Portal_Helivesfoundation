<x-guest-layout>
    <div>
        <div class="inner-banner inner-banner-bg2">
        <div class="container">
        <div class="inner-title text-center">
        <h3>Sign in</h3>
        <ul>
        <li>
        <a href="index.html">Home</a>
        </li>
        <li>Sign in</li>
        </ul>
        </div>
        </div>
        </div>


        <div class="user-area pt-100 pb-70">
        <div class="container">
        <div class="row align-items-center justify-content-center">

        <div class="col-lg-6">
        <div class="user-img">
        <img src="assets/images/faq-img.jpg" alt="faq" />
        </div>
        </div>

        <div class="col-lg-6">
        <div class="user-all-form">
        <div class="contact-form">
        <h3 class="user-title"> Sign in</h3>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="form-group">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>
                </div>

                <div class="col-lg-12 ">
                    <div class="form-group">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                    </div>
                </div>

                <div class="col-lg-12 form-condition">
                    <div class="agree-label">
                        <x-checkbox id="remember_me" name="remember" id="chb1"/>
                        <label for="chb1">
                        Remember Me
                        @if (Route::has('password.request'))
                            <a class="forget" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        </label>
                    </div>

                </div>

            <div class="col-lg-12 col-md-12">

                <x-button class="default-btn">
                    {{ __('Log in') }}
                </x-button>
            </div>


            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>

</x-guest-layout>
