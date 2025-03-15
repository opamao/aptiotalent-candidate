@extends('layouts.master', [
    'title' => 'Mes informations personnelles',
])
@push('csss')
    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">
@endpush
@push('scripts')
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>
@endpush
@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Mes informations personnelles</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ url('index') }}"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Administration
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Mes informations personnelles</li>
                    </ol>
                </nav>
            </div>
            <div class="head-icons ms-2">
                <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-original-title="Collapse" id="collapse-header">
                    <i class="ti ti-chevrons-up"></i>
                </a>
            </div>
        </div>
        <!-- /Breadcrumb -->

        @include('profile.menu-profile')

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="border-bottom mb-3 pb-3">
                            <h4>Mes informations personnelles</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Civilité</h5>
                                            <p>M.</p>
                                        </td>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Nom</h5>
                                            <p>Yapi</p>
                                        </td>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Prénom</h5>
                                            <p>Théodore</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">E-mail</h5>
                                            <p>M.</p>
                                        </td>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Téléphone</h5>
                                            <p>Yapi</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Position actuelle</h5>
                                            <p>M.</p>
                                        </td>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Ou j'habite</h5>
                                            <p>Yapi</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <label for="">Expérience</label>
                                            <h5 class="mb-1 fw-medium">Année</h5>
                                            <p>M.</p>
                                        </td>
                                        <td class="ps-0">
                                            <label for="">Expérience</label>
                                            <h5 class="mb-1 fw-medium">Mois</h5>
                                            <p>Yapi</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Salaire annuel</h5>
                                            <p>M.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ url('profile') }}" class="btn btn-primary">Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
