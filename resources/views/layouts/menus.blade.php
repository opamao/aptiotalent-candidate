 <!-- Sidebar -->
 <div class="sidebar" id="sidebar">
     <!-- Logo -->
     <div class="sidebar-logo">
         <a href="#" class="logo logo-normal">
             <img src="{{ URL::asset('') }}assets/img/logo.svg" alt="Logo">
         </a>
         <a href="#" class="logo-small">
             <img src="{{ URL::asset('') }}assets/img/logo-small.svg" alt="Logo">
         </a>
         <a href="#" class="dark-logo">
             <img src="{{ URL::asset('') }}assets/img/logo-white.svg" alt="Logo">
         </a>
     </div>
     <!-- /Logo -->
     <div class="modern-profile p-3 pb-0">
         <div class="text-center rounded bg-light p-3 mb-4 user-profile">
             <div class="avatar avatar-lg online mb-3">
                 <img src="{{ URL::asset('') }}assets/img/profiles/avatar-02.jpg" alt="Img"
                     class="img-fluid rounded-circle">
             </div>
             <h6 class="fs-12 fw-normal mb-1">Théodore Yapi</h6>
             <p class="fs-10">Dev Mobile</p>
         </div>
         <div class="sidebar-nav mb-3">
             <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
                 <li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
                 <li class="nav-item"><a class="nav-link border-0" href="#">Chats</a></li>
                 <li class="nav-item"><a class="nav-link border-0" href="#">Inbox</a></li>
             </ul>
         </div>
     </div>
     <div class="sidebar-header p-3 pb-0 pt-2">
         <div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
             <div class="avatar avatar-md onlin">
                 <img src="{{ URL::asset('') }}assets/img/profiles/avatar-02.jpg" alt="Img"
                     class="img-fluid rounded-circle">
             </div>
             <div class="text-start sidebar-profile-info ms-2">
                 <h6 class="fs-12 fw-normal mb-1">Théodore Yapi</h6>
                 <p class="fs-10">Dev Mobile</p>
             </div>
         </div>
         <div class="input-group input-group-flat d-inline-flex mb-4">
             <span class="input-icon-addon">
                 <i class="ti ti-search"></i>
             </span>
             <input type="text" class="form-control" placeholder="Search in HRMS">
             <span class="input-group-text">
                 <kbd>CTRL + / </kbd>
             </span>
         </div>
         <div class="d-flex align-items-center justify-content-between menu-item mb-3">
             <div class="me-3">
                 <a href="calendar" class="btn btn-menubar">
                     <i class="ti ti-layout-grid-remove"></i>
                 </a>
             </div>
             <div class="me-3">
                 <a href="{{ url('chat') }}" class="btn btn-menubar position-relative">
                     <i class="ti ti-brand-hipchat"></i>
                     <span
                         class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
                 </a>
             </div>
             <div class="me-3 notification-item">
                 <a href="{{ url('activity') }}" class="btn btn-menubar position-relative me-1">
                     <i class="ti ti-bell"></i>
                     <span class="notification-status-dot"></span>
                 </a>
             </div>
             <div class="me-0">
                 <a href="{{ url('email') }}" class="btn btn-menubar">
                     <i class="ti ti-message"></i>
                 </a>
             </div>
         </div>
     </div>
     <div class="sidebar-inner slimscroll">
         <div id="sidebar-menu" class="sidebar-menu">
             <ul>
                 <li class="menu-title"><span>MENU PRINCIPAL</span></li>
                 <li>
                     <ul>
                         <li class="submenu">
                             <a href="javascript:void(0);"
                                 class="{{ Request::is('index') ? 'active subdrop' : '' }}">
                                 <i class="ti ti-smart-home"></i>
                                 <span>Tableau de bord</span>
                                 {{-- <span class="badge badge-danger fs-10 fw-medium text-white p-1">Hot</span> --}}
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li>
                                     <a href="{{ url('index') }}"
                                         class="{{ Request::is('index') ? 'active' : '' }}">Tableau de bord</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="submenu">
                             <a href="javascript:void(0);"
                                 class="{{ Request::is('chat') ? 'active subdrop' : '' }}
                                 {{ Request::is('call') ? 'active subdrop' : '' }}
                                  {{ Request::is('voice-call') ? 'active subdrop' : '' }}
                                   {{ Request::is('video-call') ? 'active subdrop' : '' }}
                                   {{ Request::is('outgoing-call') ? 'active subdrop' : '' }}
                                   {{ Request::is('call-history') ? 'active subdrop' : '' }}
                                   {{ Request::is('incoming-call') ? 'active subdrop' : '' }}
                                   {{ Request::is('calendar') ? 'active subdrop' : '' }}
                                    ">
                                 <i class="ti ti-layout-grid-add"></i><span>Applications</span>
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li><a href="{{ url('chat') }}"
                                         class="{{ Request::is('chat') ? 'active' : '' }}">Chat</a></li>
                                 <li class="submenu submenu-two">
                                     <a href="{{ url('call') }}"
                                         class="{{ Request::is('call') ? 'active subdrop' : '' }}
                                         {{ Request::is('voice-call') ? 'active subdrop' : '' }}
                                          {{ Request::is('video-call') ? 'active subdrop' : '' }}
                                           {{ Request::is('outgoing-call') ? 'active subdrop' : '' }}
                                           {{ Request::is('call-history') ? 'active subdrop' : '' }}
                                            {{ Request::is('incoming-call') ? 'active subdrop' : '' }}">Appels<span
                                             class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('voice-call') }}"
                                                 class="{{ Request::is('voice-call') ? 'active' : '' }}">Appel vocal</a></li>
                                         <li><a href="{{ url('video-call') }}"
                                                 class="{{ Request::is('video-call') ? 'active' : '' }}">Appel vidéo</a></li>
                                         <li><a href="{{ url('outgoing-call') }}"
                                                 class="{{ Request::is('outgoing-call') ? 'active' : '' }}">Appel sortant</a></li>
                                         <li><a href="{{ url('incoming-call') }}"
                                                 class="{{ Request::is('incoming-call') ? 'active' : '' }}">Appel entrant</a></li>
                                         <li><a href="{{ url('call-history') }}"
                                                 class="{{ Request::is('call-history') ? 'active' : '' }}">Historique des appels</a></li>
                                     </ul>
                                 </li>
                                 <li><a href="{{ url('calendar') }}"
                                         class="{{ Request::is('calendar') ? 'active' : '' }}">Calendrier</a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 <li class="menu-title"><span>RECRUTEMENT</span></li>
                 <li>
                     <ul>
                         <li>
                             <a href="{{ url('job-grid') }}" class="{{ Request::is('job-grid') ? 'active' : '' }}">
                                 <i class="ti ti-timeline"></i><span>Emplois</span>
                             </a>
                         </li>
                         <li>
                             <a href="{{ url('candidates-grid') }}"
                                 class="{{ Request::is('candidates-grid') ? 'active' : '' }}">
                                 <i class="ti ti-user-shield"></i><span>Postulés</span>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="menu-title"><span>CONTENU</span></li>
                 <li>
                     <ul>
                         <li class="submenu">
                             <a href="javascript:void(0);"
                                 class="{{ Request::is('blogs') ? 'active subdrop' : '' }}
                                 {{ Request::is('blog-categories') ? 'active subdrop' : '' }}
                                  {{ Request::is('blog-comments') ? 'active subdrop' : '' }}
                                   {{ Request::is('blog-tags') ? 'active subdrop' : '' }}">
                                 <i class="ti ti-brand-blogger"></i><span>Blogs</span>
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li><a href="{{ url('blogs') }}"
                                         class="{{ Request::is('blogs') ? 'active' : '' }}">Tous les blogs</a>
                                 </li>
                             </ul>
                         </li>
                         <li>
                             <a href="{{ url('faq') }}" class="{{ Request::is('faq') ? 'active' : '' }}">
                                 <i class="ti ti-question-mark"></i><span>FAQ’S</span>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="menu-title"><span>PAGES</span></li>
                 <li>
                     <ul>
                         <li>
                             <a href="{{ url('privacy-policy') }}"
                                 class="{{ Request::is('privacy-policy') ? 'active' : '' }}">
                                 <i class="ti ti-file-description"></i><span>Politique de confidentialité</span>
                             </a>
                         </li>
                         <li>
                             <a href="{{ url('terms-condition') }}"
                                 class="{{ Request::is('terms-condition') ? 'active' : '' }}">
                                 <i class="ti ti-file-check"></i><span>Conditions générales</span>
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </div>
     </div>
 </div>
 <!-- /Sidebar -->
