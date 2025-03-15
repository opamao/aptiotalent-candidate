@extends('layouts.master', [
    'title' => 'Paramètre de notification',
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
                <h2 class="mb-1">Paramètres</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ url('index') }}"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Administration
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Paramètres</li>
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
            <div class="col-xl-3 theiaStickySidebar">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column list-group settings-list">
                            <a href="{{ url('profile-settings') }}"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Paramètres de sécurité</a>
                            <a href="{{ url('notification-settings') }}"
                                class="d-inline-flex align-items-center rounded active py-2 px-3"><i
                                    class="ti ti-arrow-badge-right me-2"></i>Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="border-bottom mb-3 pb-3">
                            <h4>Notifications</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="w-75 ps-2 border-0">Modules</th>
                                        <th class="border-0">Push</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Notifications générales</h5>
                                            {{-- <p>Alerts when a new hire is added to the system.</p> --}}
                                        </td>
                                        <td>
                                            <div class="form-check form-check-md form-switch me-2">
                                                <input class="form-check-input me-2" type="checkbox" role="switch" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Notifier lorsqu'un emploi est disponible</h5>
                                            {{-- <p>Alerts when a new hire is added to the system.</p> --}}
                                        </td>
                                        <td>
                                            <div class="form-check form-check-md form-switch me-2">
                                                <input class="form-check-input me-2" type="checkbox" role="switch" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Notifier lorsqu'il y a une offre d'emploi</h5>
                                            {{-- <p>Alerts when a new hire is added to the system.</p> --}}
                                        </td>
                                        <td>
                                            <div class="form-check form-check-md form-switch me-2">
                                                <input class="form-check-input me-2" type="checkbox" role="switch" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Mise à jour de l'application</h5>
                                            {{-- <p>Alerts when a new hire is added to the system.</p> --}}
                                        </td>
                                        <td>
                                            <div class="form-check form-check-md form-switch me-2">
                                                <input class="form-check-input me-2" type="checkbox" role="switch" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <h5 class="mb-1 fw-medium">Mise à jour du statut de l'emploi</h5>
                                            {{-- <p>Alerts when a new hire is added to the system.</p> --}}
                                        </td>
                                        <td>
                                            <div class="form-check form-check-md form-switch me-2">
                                                <input class="form-check-input me-2" type="checkbox" role="switch" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
