
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">


        <div class="card">
            <h4 class="card-header">{{ __('Login') }}</h4>

            <div class="card-body"

                <p class="text-info">You have sign out!</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{ __('E-Mail Address') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="email" id="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="password" id="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="form-control" >
                                </div>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="pl-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="redirect" value="">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
