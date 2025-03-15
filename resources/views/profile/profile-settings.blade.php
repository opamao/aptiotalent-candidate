@extends('layouts.master', [
    'title' => 'Paramètre de profil',
])
@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

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

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>
@endpush
@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Paramètre</h2>
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
                            <a href="{{ url('security-settings') }}"
                                class="d-inline-flex align-items-center rounded active py-2 px-3"><i
                                    class="ti ti-arrow-badge-right me-2"></i>Paramètres de sécurité</a>
                            <a href="{{ url('notification-settings') }}"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="border-bottom mb-3 pb-3">
                            <h4>Paramètres de sécurité</h4>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium mb-1">Mot de passe</h5>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 me-2 pe-2 border-end">Définissez un mot de passe unique pour protéger
                                            le compte</p>
                                        <p>Dernière modification le 03 janvier 2024, 09h00</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#change-password">Changer le mot de passe</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium mb-1">Authentification à deux facteurs</h5>
                                    <p>Recevez des codes par SMS ou par e-mail à chaque connexion</p>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-dark btn-sm">Activer</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium d-flex align-items-center mb-1">Vérification du numéro de
                                        téléphone <span><i
                                                class="ti ti-discount-check-filled text-success ms-2"></i></span>
                                    </h5>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 me-2 pe-2 border-end">Le numéro de téléphone associé au compte</p>
                                        <p>Numéro de téléphone portable vérifié : +2250585831647</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-outline-light btn-sm border me-2">Retirer</a>
                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#change-phone">Changement </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium d-flex align-items-center mb-1">Vérification de l'e-mail
                                        <span><i class="ti ti-discount-check-filled text-success ms-2"></i></span>
                                    </h5>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 me-2 pe-2 border-end">L'adresse e-mail associée au compte</p>
                                        <p>E-mail vérifié : theodoreyapi@gmail.com</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-outline-light btn-sm border me-2">Retirer</a>
                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#change-email">Changement </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium mb-1">Gestion des appareils</h5>
                                    <p>Les appareils associés au compte</p>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#device_management">Gérer</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium mb-1">Activité du compte</h5>
                                    <p>Les activités du compte</p>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#account_activity">Voir</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium mb-1">Désactiver le compte</h5>
                                    <p>Cela fermera votre compte. Votre compte sera réactif lorsque vous vous reconnecterez
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-dark btn-sm">Désactiver</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                                <div>
                                    <h5 class="fw-medium mb-1">Supprimer le compte</h5>
                                    <p>Votre compte sera définitivement supprimé</p>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#del-account">Supprimer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Change Password -->
    <div class="modal fade custom-modal" id="change-password">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content doctor-profile">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Change Password</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="success">
                        <div class="mb-3">
                            <label class="form-label">Current Password <span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input type="password" class="pass-input form-control">
                                <span class="ti toggle-password ti-eye-off"></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Current Password<span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input type="password" class="pass-inputs form-control">
                                <span class="ti toggle-passwords ti-eye-off"></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm New Password<span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-inputa">
                                <span class="ti toggle-passworda ti-eye-off"></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top">
                    <div class="acc-submit">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Password -->

    <!-- Change Email -->
    <div class="modal fade custom-modal" id="change-email">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content doctor-profile">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Change Email</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="provider-security-settings">
                        <div class="wallet-add">
                            <div class="mb-3">
                                <label class="form-label">Current Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm New Password<span class="text-danger">*</span></label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-inputa">
                                    <span class="ti toggle-passworda ti-eye-off"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top">
                    <div class="acc-submit">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button class="btn btn-primary" type="submit">Save Change</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Email -->

    <!-- Change Phone -->
    <div class="modal fade custom-modal" id="change-phone">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content doctor-profile">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Change Phone Number</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="provider-security-settings">
                        <div class="wallet-add">
                            <div class="mb-3">
                                <label class="form-label">Current Phone Number</label>
                                <input class="form-control form-control-lg group_formcontrol" id="phone"
                                    name="phone" type="text" placeholder="Enter Phone Number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Phone Number <span class="text-danger">*</span></label>
                                <input class="form-control form-control-lg group_formcontrol" id="phone1"
                                    name="phone" type="text" placeholder="Enter Phone Number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm New Password<span class="text-danger">*</span></label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-inputa">
                                    <span class="ti toggle-passworda ti-eye-off"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top">
                    <div class="acc-submit">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button class="btn btn-dark" type="submit">Change Number</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Phone -->

    <!-- Device Management -->
    <div class="modal fade custom-modal" id="device_management">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Device Management</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body">
                    <div class="table">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Device</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    <th>IP Address</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Chrome - Windows</td>
                                    <td>15 May 2025, 10:30 AM</td>
                                    <td>New York / USA</td>
                                    <td>232.222.12.72</td>
                                    <td>
                                        <span><i class="ti ti-trash text-gray-6"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Safari Macos</td>
                                    <td>10 Apr 2025, 05:15 PM</td>
                                    <td>New York / USA</td>
                                    <td>224.111.12.75</td>
                                    <td>
                                        <span><i class="ti ti-trash text-gray-6"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Firefox Windows</td>
                                    <td>15 Mar 2025, 02:40 PM</td>
                                    <td>New York / USA</td>
                                    <td>111.222.13.28</td>
                                    <td>
                                        <span><i class="ti ti-trash text-gray-6"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Safari Macos</td>
                                    <td>15 May 2025, 10:30 AM</td>
                                    <td>New York / USA</td>
                                    <td>333.555.10.54</td>
                                    <td>
                                        <span><i class="ti ti-trash text-gray-6"></i></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Device Management -->

    <!-- Activity Management -->
    <div class="modal fade custom-modal" id="account_activity">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Account Activity</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body">
                    <div class="table">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Device</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    <th>IP Address</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Chrome - Windows</td>
                                    <td>15 May 2025, 10:30 AM</td>
                                    <td>New York / USA</td>
                                    <td>232.222.12.72</td>
                                    <td>
                                        <span class="badge badge-sm badge-success"><i
                                                class="ti ti-point-filled me-1"></i>connect</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Safari Macos</td>
                                    <td>10 Apr 2025, 05:15 PM</td>
                                    <td>New York / USA</td>
                                    <td>224.111.12.75</td>
                                    <td>
                                        <span class="badge badge-sm badge-success"><i
                                                class="ti ti-point-filled me-1"></i>connect</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Firefox Windows</td>
                                    <td>15 Mar 2025, 02:40 PM</td>
                                    <td>New York / USA</td>
                                    <td>111.222.13.28</td>
                                    <td>
                                        <span class="badge badge-sm badge-success"><i
                                                class="ti ti-point-filled me-1"></i>connect</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Safari Macos</td>
                                    <td>15 May 2025, 10:30 AM</td>
                                    <td>New York / USA</td>
                                    <td>333.555.10.54</td>
                                    <td>
                                        <span class="badge badge-sm badge-success"><i
                                                class="ti ti-point-filled me-1"></i>connect</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Activity Management -->

    <!-- Delete Account -->
    <div class="modal fade custom-modal" id="del-account">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Delete Account</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <form action="security-settings">
                    <div class="modal-body">
                        <p class="mb-3">Are you sure you want to delete This Account? To delete your account,
                            Type your password.</p>
                        <div class="mb-3">
                            <label class="form-label">Confirm New Password<span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-inputa">
                                <span class="ti toggle-passworda ti-eye-off"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Delete Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Delete Account -->
@endsection
