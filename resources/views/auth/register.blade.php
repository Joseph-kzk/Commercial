
@include('layouts.head')

<section class="login-block">

<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <!-- begin alert -->
            @include('layouts.alerte')
            <!-- end alert -->

                <form class="md-float-material form-material" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="text-center">
                        <img src="assets/images/ecomatin.png" alt="logo.png" width="200px" height="50px">
                    </div>

                    <div class="auth-box card">
                        <div class="card-block">

                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Créer un compte</h3>
                                </div>
                            </div>

                            <div class="form-group form-primary">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  placeholder="Nom" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="form-bar"></span>
                            </div>

                            <div class="form-group form-primary">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Addresse email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="form-bar"></span>
                            </div>

                            <div class="form-group form-primary">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="Mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="form-bar"></span>
                            </div>
    
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input type="text" name="poste" class="form-control" required=""
                                            placeholder="Poste">
                                        <span class="form-bar"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input type="text" name="numero" class="form-control"
                                            required="" placeholder="Numéro de tél">
                                        <span class="form-bar"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit"
                                        class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                        Créer</button>
                                </div>
                            </div>
                            <hr />

                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Vous avez déjà un compte ?</p>
                                    <p class="text-inverse text-left"><a href="{{ route('login') }}"><b class="f-w-600">Se connecter</b></a></p>
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