@extends('layouts.master', [
    'title' => 'Tableau de bord',
])

@push('csss')
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">
@endpush

@push('scripts')
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/chart-data.js"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Summernote JS -->
    <script src="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/circle-progress.js"></script>
    <script src="{{ URL::asset('') }}assets/js/todo.js"></script>
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>
@endpush

@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Mon tableau de bord</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ url('index') }}"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Tableau de bord
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Mon tableau de bord</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <div class="row">
            <div class="col-xl-5 d-flex">
                <div class="card position-relative flex-fill">
                    <div class="card-header bg-dark">
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-lg avatar-rounded border border-white border-2 flex-shrink-0 me-2">
                                <img src="assets/img/users/user-01.jpg" alt="Img">
                            </span>
                            <div>
                                <h5 class="text-white mb-1">Stephan Peralt</h5>
                                <div class="d-flex align-items-center">
                                    <p class="text-white fs-12 mb-0">Senior Product Designer</p>
                                    <span class="mx-1"><i class="ti ti-point-filled text-primary"></i></span>
                                    <p class="fs-12">UI/UX Design</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('profile') }}" class="btn btn-icon btn-sm text-white rounded-circle edit-top"><i
                                class="ti ti-edit"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="d-block mb-1 fs-13">Numéro de téléphone</span>
                            <p class="text-gray-9">+2250748650731</p>
                        </div>
                        <div class="mb-3">
                            <span class="d-block mb-1 fs-13">Adresse e-mail</span>
                            <p class="text-gray-9">Steperde124@example.com</p>
                        </div>
                        <div class="mb-3">
                            <span class="d-block mb-1 fs-13">Lieu d'habitation</span>
                            <p class="text-gray-9">Doglas Martini</p>
                        </div>
                        <div>
                            <span class="d-block mb-1 fs-13">Inscrit le</span>
                            <p class="text-gray-9">15 Jan 2024</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Mes compétences</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="border border-dashed bg-transparent-light rounded p-2 mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="d-block border border-2 h-12 border-primary rounded-5 me-2"></span>
                                        <div>
                                            <h6 class="fw-medium mb-1">Figma</h6>
                                            <p>Updated : 15 May 2025</p>
                                        </div>
                                    </div>
                                    <div class="circle-progress circle-progress-md" data-value='95'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-primary"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-primary"></span>
                                        </span>
                                        <div class="progress-value">95%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-dashed bg-transparent-light rounded p-2 mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="d-block border border-2 h-12 border-success rounded-5 me-2"></span>
                                        <div>
                                            <h6 class="fw-medium mb-1">HTML</h6>
                                            <p>Updated : 12 May 2025</p>
                                        </div>
                                    </div>
                                    <div class="circle-progress circle-progress-md" data-value='85'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-success"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-success"></span>
                                        </span>
                                        <div class="progress-value">85%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-dashed bg-transparent-light rounded p-2 mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="d-block border border-2 h-12 border-purple rounded-5 me-2"></span>
                                        <div>
                                            <h6 class="fw-medium mb-1">CSS</h6>
                                            <p>Updated : 12 May 2025</p>
                                        </div>
                                    </div>
                                    <div class="circle-progress circle-progress-md" data-value='70'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-purple"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-purple"></span>
                                        </span>
                                        <div class="progress-value">70%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-dashed bg-transparent-light rounded p-2 mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="d-block border border-2 h-12 border-info rounded-5 me-2"></span>
                                        <div>
                                            <h6 class="fw-medium mb-1">Wordpress</h6>
                                            <p>Updated : 15 May 2025</p>
                                        </div>
                                    </div>
                                    <div class="circle-progress circle-progress-md" data-value='61'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-info"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-info"></span>
                                        </span>
                                        <div class="progress-value">61%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-dashed bg-transparent-light rounded p-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="d-block border border-2 h-12 border-dark rounded-5 me-2"></span>
                                        <div>
                                            <h6 class="fw-medium mb-1">Javascript</h6>
                                            <p>Updated : 13 May 2025</p>
                                        </div>
                                    </div>
                                    <div class="circle-progress circle-progress-md" data-value='58'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-dark"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-dark"></span>
                                        </span>
                                        <div class="progress-value">58%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 d-flex">
                <div class="flex-fill">
                    <div class="card card-bg-5 bg-dark mb-3">
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="text-white mb-4">Anniversaire des inscrits</h5>
                                <span class="avatar avatar-xl avatar-rounded mb-2">
                                    <img src="assets/img/users/user-35.jpg" alt="Img">
                                </span>
                                <div class="mb-3">
                                    <h6 class="text-white fw-medium mb-1">Andrew Jermia</h6>
                                    <p>IOS Developer</p>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary">Envoyer des vœux</a>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-warning">
                        <div class="card-body d-flex align-items-center justify-content-between p-3">
                            <div>
                                <h5 class="mb-1">Prochaines vacances</h5>
                                <p class="text-gray-9">15 Sep 2025</p>
                            </div>
                            <a href="{{ url('holidays') }}" class="btn btn-white btn-sm px-3">Voir</a>
                        </div>
                    </div>
                    <div class="card bg-secondary">
                        <div class="card-body d-flex align-items-center justify-content-between p-3">
                            <div>
                                <h5 class="text-white mb-1">Politique de confidentialité</h5>
                                <p class="text-white">Dernière mise à jour : Aujourd'hui</p>
                            </div>
                            <a href="{{ url('privacy-policy') }}" class="btn btn-white btn-sm px-3">Voir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                        <h5>Projets</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 shadow-none mb-md-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h6>Office Management</h6>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-3">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="assets/img/users/user-32.jpg" class="img-fluid rounded-circle"
                                                    alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-normal"><a href="javascript:void(0);">Anthony Lewis</a>
                                                </h6>
                                                <span class="fs-13 d-block">Project Leader</span>
                                            </div>
                                        </div>
                                        <div
                                            class="bg-soft-secondary p-2 rounded d-flex align-items-center justify-content-between">
                                            <p class="text-secondary mb-0 text-truncate">Time Spent</p>
                                            <h5 class="text-secondary text-truncate">65/120 <span
                                                    class="fs-14 fw-normal">Hrs</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <h5>Récemment ajoutés</h5>
                            <div>
                                <a href="#" class="btn btn-light btn-sm">Tout voir</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                    <img src="assets/img/users/user-27.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Alexander Jermai</a>
                                    </h6>
                                    <p class="fs-13">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-phone fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-mail-bolt fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm"><i
                                        class="ti ti-brand-hipchat fs-16"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Entretien programmé</h5>
                        </div>
                    </div>
                    <div class="card-body schedule-timeline">
                        <div class="d-flex align-items-start">
                            <div class="d-flex align-items-center active-time">
                                <span>09:25 AM</span>
                                <span><i class="ti ti-point-filled text-primary fs-20"></i></span>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-flow">
                                <div class="bg-light p-2 rounded">
                                    <p class="fw-medium text-gray-9 mb-1">Marketing Strategy Presentation</p>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="d-flex align-items-center active-time">
                                <span>09:20 AM</span>
                                <span><i class="ti ti-point-filled text-secondary fs-20"></i></span>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-flow">
                                <div class="bg-light p-2 rounded">
                                    <p class="fw-medium text-gray-9 mb-1">Design Review Hospital, doctors Management
                                        Project</p>
                                    <span>Review</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="d-flex align-items-center active-time">
                                <span>09:18 AM</span>
                                <span><i class="ti ti-point-filled text-warning fs-20"></i></span>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-flow">
                                <div class="bg-light p-2 rounded">
                                    <p class="fw-medium text-gray-9 mb-1">Birthday Celebration of Employee</p>
                                    <span>Celebration</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="d-flex align-items-center active-time">
                                <span>09:10 AM</span>
                                <span><i class="ti ti-point-filled text-success fs-20"></i></span>
                            </div>
                            <div class="flex-fill ps-3 timeline-flow">
                                <div class="bg-light p-2 rounded">
                                    <p class="fw-medium text-gray-9 mb-1">Update of Project Flow</p>
                                    <span>Development</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
