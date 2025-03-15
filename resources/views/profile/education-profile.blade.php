@extends('layouts.master', [
    'title' => 'Etudes',
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
                <div class="border-bottom mb-3 pb-3">
                    <h4>Mes études</h4>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Etudie actuellement</h5>
                                            <p>Oui / Non</p>
                                        </td>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Nom établissement</h5>
                                            <p>Yapi</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Titre de la formation</h5>
                                            <p>M.</p>
                                        </td>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Début de la formation</h5>
                                            <p>Yapi</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Fin de la formation</h5>
                                            <p>M.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#change-password">Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Update resume -->
    <div class="modal fade custom-modal" id="change-password">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content doctor-profile">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Modification</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label class="form-label">Secteur d'activité actuel <span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input name="secteur" required type="text" class="pass-input form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Département actuel <span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input name="departement" required type="text" class="pass-inputs form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Catégorie du rôle actuel <span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input name="categorie" required type="text" class="form-control pass-inputa">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fonction actuelle <span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input name="fonction" required type="text" class="form-control pass-inputa">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-top">
                        <div class="acc-submit">
                            <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Annuler</a>
                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Update resume -->
@endsection
