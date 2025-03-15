<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
    <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>AptioTalent</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('') }}assets/img/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Feather CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/icons/feather/feather.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">

</head>

<body class="bg-white">

    <div id="global-loader" style="display: none;">
        <div class="page-loader"></div>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="container-fuild">
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row">
                    @include('auth.left')
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap">
                            <div class="col-md-7 mx-auto vh-100">
                                <form action="{{ url('custom-register') }}" class="vh-100" method="POST">
                                    @csrf
                                    <div class="vh-100 d-flex flex-column justify-content-between p-4 pb-0">
                                        <div class=" mx-auto mb-5 text-center">
                                            <img src="{{ URL::asset('') }}assets/img/logo.svg" class="img-fluid"
                                                alt="Logo">
                                        </div>
                                        <div class="">
                                            @include('layouts.status')
                                            <div class="text-center mb-3">
                                                <h2 class="mb-2">S'inscrire</h2>
                                                <p class="mb-0">Veuillez saisir vos coordonnées pour vous inscrire</p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Sexe</label>
                                                <div
                                                    class="card-body d-sm-flex align-items-center justify-content-between">
                                                    <div class="form-check form-check-lg">
                                                        <input class="form-check-input" value="Homme" id="Radio-lg"
                                                            type="radio" name="sexe" id="Radio-lg" checked>
                                                        <label class="form-check-label" for="Radio-lg">
                                                            Homme
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-lg">
                                                        <input class="form-check-input" value="Femme" type="radio"
                                                            name="sexe" id="Radio-lg">
                                                        <label class="form-check-label" for="Radio-lg">
                                                            Femme
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nom</label>
                                                <div class="input-group">
                                                    <input name="nom" required type="text" value=""
                                                        class="form-control">
                                                    <span class="input-group-text border-start-0">
                                                        <i class="ti ti-user"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Prénom</label>
                                                <div class="input-group">
                                                    <input name="prenom" required type="text" value=""
                                                        class="form-control">
                                                    <span class="input-group-text border-start-0">
                                                        <i class="ti ti-user"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Adresse email</label>
                                                <div class="input-group">
                                                    <input type="email" required name="email" class="form-control">
                                                    <span class="input-group-text border-start-0">
                                                        <i class="ti ti-mail"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Téléphone</label>
                                                <div class="input-group">
                                                    <input type="tel" required name="phone"
                                                        class="form-control">
                                                    <span class="input-group-text border-start-0">
                                                        <i class="ti ti-phone"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Lieu d'habitation</label>
                                                <div class="input-group">
                                                    <input type="text" name="habitation" class="form-control">
                                                    <span class="input-group-text border-start-0">
                                                        <i class="ti ti-home"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label">Expériences</label>
                                                    <div class="input-group">
                                                        <input placeholder="Par an Ex: 1" type="number"
                                                            class="form-control" name="experience_an">
                                                        <span class="input-group-text border-start-0">
                                                            <i class="ti ti-home"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label text-white">Mois</label>
                                                    <div class="input-group">
                                                        <input placeholder="Par mois Ex: 0" type="number"
                                                            class="form-control" name="experience_mois">
                                                        <span class="input-group-text border-start-0">
                                                            <i class="ti ti-home"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label">Salaire annuel</label>
                                                    <div class="input-group">
                                                        <input placeholder="Ex: 12000000" type="number"
                                                            class="form-control" name="salaire">
                                                        <span class="input-group-text border-start-0">
                                                            <i class="ti ti-wallet"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Mot de passe</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" name="password"
                                                        required>
                                                    <span class="input-group-text border-start-0">
                                                        <i class="ti toggle-password ti-eye-off"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check form-check-md mb-0">
                                                        <input class="form-check-input" id="remember_me"
                                                            type="checkbox" checked disabled>
                                                        <label for="remember_me"
                                                            class="form-check-label text-dark mt-0">Accepter
                                                            <a href="#" target="_blank">
                                                                <span class="text-primary">les conditions
                                                                    générales et la
                                                                    confidentialité
                                                                </span>
                                                            </a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit"
                                                    class="btn btn-primary w-100">S'inscrire</button>
                                            </div>
                                            <div class="text-center">
                                                <h6 class="fw-normal text-dark mb-0">Vous avez déjà une compte?
                                                    <a href="{{ url('/') }}" class="hover-a">Se connecter</a>
                                                </h6>
                                            </div>
                                        </div>
                                        @include('auth.footer')
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="{{ URL::asset('') }}assets/js/feather.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>

</body>

</html>
