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
             <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
             <p class="fs-10">System Admin</p>
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
                 <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
                 <p class="fs-10">System Admin</p>
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
                 <li class="menu-title"><span>MAIN MENU</span></li>
                 <li>
                     <ul>
                         <li class="submenu">
                             <a href="javascript:void(0);"
                                 class="{{ Request::is('admin-dashboard') ? 'active subdrop' : '' }}
                                 {{ Request::is('employee-dashboard') ? 'active subdrop' : '' }}
                                  {{ Request::is('deals-dashboard') ? 'active subdrop' : '' }}
                                   {{ Request::is('leads-dashboard') ? 'active subdrop' : '' }}">
                                 <i class="ti ti-smart-home"></i>
                                 <span>Tableau de bord</span>
                                 {{-- <span class="badge badge-danger fs-10 fw-medium text-white p-1">Hot</span> --}}
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li>
                                     <a href="{{ url('employee-dashboard') }}"
                                         class="{{ Request::is('employee-dashboard') ? 'active' : '' }}">Tableau de bord</a>
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
                                            {{ Request::is('incoming-call') ? 'active subdrop' : '' }}">Calls<span
                                             class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('voice-call') }}"
                                                 class="{{ Request::is('voice-call') ? 'active' : '' }}">Voice
                                                 Call</a></li>
                                         <li><a href="{{ url('video-call') }}"
                                                 class="{{ Request::is('video-call') ? 'active' : '' }}">Video
                                                 Call</a></li>
                                         <li><a href="{{ url('outgoing-call') }}"
                                                 class="{{ Request::is('outgoing-call') ? 'active' : '' }}">Outgoing
                                                 Call</a></li>
                                         <li><a href="{{ url('incoming-call') }}"
                                                 class="{{ Request::is('incoming-call') ? 'active' : '' }}">Incoming
                                                 Call</a></li>
                                         <li><a href="{{ url('call-history') }}"
                                                 class="{{ Request::is('call-history') ? 'active' : '' }}">Call
                                                 History</a></li>
                                     </ul>
                                 </li>
                                 <li><a href="{{ url('calendar') }}"
                                         class="{{ Request::is('calendar') ? 'active' : '' }}">Calendar</a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 <li class="menu-title"><span>RECRUITMENT</span></li>
                 <li>
                     <ul>
                         <li>
                             <a href="{{ url('job-grid') }}" class="{{ Request::is('job-grid') ? 'active' : '' }}">
                                 <i class="ti ti-timeline"></i><span>Jobs</span>
                             </a>
                         </li>
                         <li>
                             <a href="{{ url('candidates-grid') }}"
                                 class="{{ Request::is('candidates-grid') ? 'active' : '' }}">
                                 <i class="ti ti-user-shield"></i><span>Candidates</span>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="menu-title"><span>ADMINISTRATION</span></li>
                 <li>
                     <ul>
                         <li class="submenu">
                             <a href="javascript:void(0);"
                                 class="{{ Request::is('clear-cache') ? 'active subdrop' : '' }}
                                 {{ Request::is('profile-settings') ? 'active subdrop' : '' }}
                                  {{ Request::is('security-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('notification-settings') ? 'active subdrop' : '' }}
                                    {{ Request::is('connected-apps') ? 'active subdrop' : '' }}
                                     {{ Request::is('bussiness-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('seo-settings') ? 'active subdrop' : '' }}
                                  {{ Request::is('localization-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('prefixes') ? 'active subdrop' : '' }}
                                   {{ Request::is('preferences') ? 'active subdrop' : '' }}
                                   {{ Request::is('performance-appraisal') ? 'active subdrop' : '' }}
                                   {{ Request::is('language') ? 'active subdrop' : '' }}
                                   {{ Request::is('authentication-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('ai-settings') ? 'active subdrop' : '' }}
                                    {{ Request::is('salary-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('approval-settings') ? 'active subdrop' : '' }}
                                  {{ Request::is('invoice-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('leave-type') ? 'active subdrop' : '' }}
                                   {{ Request::is('custom-fields') ? 'active subdrop' : '' }}
                                    {{ Request::is('email-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('email-template') ? 'active subdrop' : '' }}
                                  {{ Request::is('sms-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('sms-template') ? 'active subdrop' : '' }}
                                   {{ Request::is('otp-settings') ? 'active subdrop' : '' }}
                                    {{ Request::is('payment-gateways') ? 'active subdrop' : '' }}
                                 {{ Request::is('tax-rates') ? 'active subdrop' : '' }}
                                  {{ Request::is('currencies') ? 'active subdrop' : '' }}
                                     ">
                                 <i class="ti ti-settings"></i><span>Settings</span>
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li class="submenu submenu-two">
                                     <a href="javascript:void(0);"
                                         class="{{ Request::is('profile-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('security-settings') ? 'active subdrop' : '' }}
                                  {{ Request::is('notification-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('connected-apps') ? 'active subdrop' : '' }}
                                    ">General
                                         Settings<span class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('profile-settings') }}"
                                                 class="{{ Request::is('profile-settings') ? 'active' : '' }}">Profile</a>
                                         </li>
                                         <li><a href="{{ url('security-settings') }}"
                                                 class="{{ Request::is('security-settings') ? 'active' : '' }}">Security</a>
                                         </li>
                                         <li><a href="{{ url('notification-settings') }}"
                                                 class="{{ Request::is('notification-settings') ? 'active' : '' }}">Notifications</a>
                                         </li>
                                         <li><a href="{{ url('connected-apps') }}"
                                                 class="{{ Request::is('connected-apps') ? 'active' : '' }}">Connected
                                                 Apps</a></li>
                                     </ul>
                                 </li>
                                 <li class="submenu submenu-two">
                                     <a href="javascript:void(0);"
                                         class="{{ Request::is('bussiness-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('seo-settings') ? 'active subdrop' : '' }}
                                  {{ Request::is('localization-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('prefixes') ? 'active subdrop' : '' }}
                                   {{ Request::is('preferences') ? 'active subdrop' : '' }}
                                   {{ Request::is('performance-appraisal') ? 'active subdrop' : '' }}
                                   {{ Request::is('language') ? 'active subdrop' : '' }}
                                   {{ Request::is('authentication-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('ai-settings') ? 'active subdrop' : '' }}
                                    ">Website
                                         Settings<span class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('bussiness-settings') }}"
                                                 class="{{ Request::is('bussiness-settings') ? 'active' : '' }}">Business
                                                 Settings</a></li>
                                         <li><a href="{{ url('seo-settings') }}"
                                                 class="{{ Request::is('seo-settings') ? 'active' : '' }}">SEO
                                                 Settings</a></li>
                                         <li><a href="{{ url('localization-settings') }}"
                                                 class="{{ Request::is('localization-settings') ? 'active' : '' }}">Localization</a>
                                         </li>
                                         <li><a href="{{ url('prefixes') }}"
                                                 class="{{ Request::is('prefixes') ? 'active' : '' }}">Prefixes</a>
                                         </li>
                                         <li><a href="{{ url('preferences') }}"
                                                 class="{{ Request::is('preferences') ? 'active' : '' }}">Preferences</a>
                                         </li>
                                         <li><a href="{{ url('performance-appraisal') }}"
                                                 class="{{ Request::is('performance-appraisal') ? 'active' : '' }}">Appearance</a>
                                         </li>
                                         <li><a href="{{ url('language') }}"
                                                 class="{{ Request::is('language') ? 'active' : '' }}">Language</a>
                                         </li>
                                         <li><a href="{{ url('authentication-settings') }}"
                                                 class="{{ Request::is('authentication-settings') ? 'active' : '' }}">Authentication</a>
                                         </li>
                                         <li><a href="{{ url('ai-settings') }}"
                                                 class="{{ Request::is('ai-settings') ? 'active' : '' }}">AI
                                                 Settings</a></li>
                                     </ul>
                                 </li>
                                 <li class="submenu submenu-two">
                                     <a href="javascript:void(0);"
                                         class="{{ Request::is('salary-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('approval-settings') ? 'active subdrop' : '' }}
                                  {{ Request::is('invoice-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('leave-type') ? 'active subdrop' : '' }}
                                   {{ Request::is('custom-fields') ? 'active subdrop' : '' }}
                                    ">App
                                         Settings<span class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('salary-settings') }}"
                                                 class="{{ Request::is('salary-settings') ? 'active' : '' }}">Salary
                                                 Settings</a></li>
                                         <li><a href="{{ url('approval-settings') }}"
                                                 class="{{ Request::is('approval-settings') ? 'active' : '' }}">Approval
                                                 Settings</a></li>
                                         <li><a href="{{ url('invoice-settings') }}"
                                                 class="{{ Request::is('invoice-settings') ? 'active' : '' }}">Invoice
                                                 Settings</a></li>
                                         <li><a href="{{ url('leave-type') }}"
                                                 class="{{ Request::is('leave-type') ? 'active' : '' }}">Leave
                                                 Type</a></li>
                                         <li><a href="{{ url('custom-fields') }}"
                                                 class="{{ Request::is('custom-fields') ? 'active' : '' }}">Custom
                                                 Fields</a></li>
                                     </ul>
                                 </li>
                                 <li class="submenu submenu-two">
                                     <a href="javascript:void(0);"
                                         class="{{ Request::is('email-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('email-template') ? 'active subdrop' : '' }}
                                  {{ Request::is('sms-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('sms-template') ? 'active subdrop' : '' }}
                                   {{ Request::is('otp-settings') ? 'active subdrop' : '' }}
                                    ">System
                                         Settings<span class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('email-settings') }}"
                                                 class="{{ Request::is('email-settings') ? 'active' : '' }}">Email
                                                 Settings</a></li>
                                         <li><a href="{{ url('email-template') }}"
                                                 class="{{ Request::is('email-template') ? 'active' : '' }}">Email
                                                 Templates</a></li>
                                         <li><a href="{{ url('sms-settings') }}"
                                                 class="{{ Request::is('sms-settings') ? 'active' : '' }}">SMS
                                                 Settings</a></li>
                                         <li><a href="{{ url('sms-template') }}"
                                                 class="{{ Request::is('sms-template') ? 'active' : '' }}">SMS
                                                 Templates</a></li>
                                         <li><a href="{{ url('otp-settings') }}"
                                                 class="{{ Request::is('otp-settings') ? 'active' : '' }}">OTP</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="submenu submenu-two">
                                     <a href="javascript:void(0);"
                                         class="{{ Request::is('payment-gateways') ? 'active subdrop' : '' }}
                                 {{ Request::is('tax-rates') ? 'active subdrop' : '' }}
                                  {{ Request::is('currencies') ? 'active subdrop' : '' }}
                                    ">Financial
                                         Settings<span class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('payment-gateways') }}"
                                                 class="{{ Request::is('payment-gateways') ? 'active' : '' }}">Payment
                                                 Gateways</a></li>
                                         <li><a href="{{ url('tax-rates') }}"
                                                 class="{{ Request::is('tax-rates') ? 'active' : '' }}">Tax
                                                 Rate</a></li>
                                         <li><a href="{{ url('currencies') }}"
                                                 class="{{ Request::is('currencies') ? 'active' : '' }}">Currencies</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="submenu submenu-two">
                                     <a href="javascript:void(0);"
                                         class="{{ Request::is('clear-cache') ? 'active subdrop' : '' }}">Other
                                         Settings<span class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('clear-cache') }}"
                                                 class="{{ Request::is('clear-cache') ? 'active' : '' }}">Clear
                                                 Cache</a></li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 <li class="menu-title"><span>CONTENT</span></li>
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
                                         class="{{ Request::is('blogs') ? 'active' : '' }}">All Blogs</a>
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
                                 <i class="ti ti-file-description"></i><span>Privacy Policy</span>
                             </a>
                         </li>
                         <li>
                             <a href="{{ url('terms-condition') }}"
                                 class="{{ Request::is('terms-condition') ? 'active' : '' }}">
                                 <i class="ti ti-file-check"></i><span>Terms & Conditions</span>
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </div>
     </div>
 </div>
 <!-- /Sidebar -->
