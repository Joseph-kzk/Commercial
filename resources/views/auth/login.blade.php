
@include('layouts.head')

<section class="login-block">

<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <!-- begin alert -->
            @include('layouts.alerte')
            <!-- end alert -->

            <form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="text-center">
                    <img src="assets/images/ecomatin.png" alt="logo.png" width="190px" height="40px">
                </div>

                <div class="auth-box card">

                    <div class="card-block">

                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center">Connexion</h3>
                            </div>
                        </div>

                        <div class="form-group form-primary">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="form-bar"></span>

                        </div>

                        <div class="form-group form-primary">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="form-bar"></span>
                        </div>

                        <div class="row m-t-25 text-left">
                            <div class="col-12">
                                <div class="checkbox-fade fade-in-primary d-">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember" value="" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                        <span class="text-inverse">Se rappeler de moi</span>
                                    </label>
                                </div>

                            </div>
                        </div>
                        
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Se connecter</button>
                            </div>
                        </div>
                        <hr />
                        
                        <div class="row">
                            <div class="col-md-10">
                                <p class="text-inverse text-left m-b-0">pas de compte ?</p>
                                <p class="text-inverse text-left"><a href="{{ route('register') }}"><b class="f-w-600">Créer ici</b></a></p>
                            </div>
                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

</section>

@include('layouts.footer')