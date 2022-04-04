<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
@if (App::isLocale('ar')) direction="rtl" dir="rtl" style="direction: rtl" @endif>
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title> grabX @yield('title')</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ global_asset('css/dashboard/vendor/bootstrap-icons/font/bootstrap-icons.css') }}">

  <link rel="stylesheet" href="{{ global_asset('css/dashboard/vendor/chart.js/dist/Chart.min.css') }}">
  <link rel="stylesheet" href="{{ global_asset('css/dashboard/vendor/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ global_asset('css/dashboard/vendor/tom-select/dist/css/tom-select.bootstrap5.css') }}">

  <!-- CSS Front Template -->
  <link rel="preload" href="{{ global_asset('css/dashboard/theme.min.css') }}" data-hs-appearance="default" as="style">
  <link rel="preload" href="{{ global_asset('css/dashboard/theme-dark.min.css') }}" data-hs-appearance="dark" as="style">
  {{--select box  --}}

    {{-- MY CSS --}}
  <link rel="stylesheet" href="{{ global_asset('css/mycss.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/centralCss.css') }}">

  @yield('css')
   {{-- Livewire --}}
   @livewireStyles
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  {{-- If user is logged in show header --}}
  <link rel="stylesheet" href="{{ global_asset('css/dashboard/style.css') }}">
  {{-- Translation --}}

  @if (App::isLocale('ar'))
    <link rel="stylesheet" href="{{ global_asset('css/dashboard/style_ar.css') }}">
  @endif
    @auth
    <!-- ========== HEADER ========== -->

            </div>

            <!-- End Search Form -->
          </div>

          {{-- <div class="navbar-nav-wrap-content-end">
            <!-- Navbar -->
            <ul class="navbar-nav">
              <li class="nav-item d-none d-sm-inline-block">
                <!-- Notification -->
                <div class="dropdown">
                  <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                    <i class="bi-flag"></i>
                    <span class="btn-status btn-sm-status btn-status-danger"></span>
                  </button>

                  <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
                    <!-- Header -->
                    <div class="card-header card-header-content-between">
                      <h4 class="card-title mb-0">Notifications</h4>

                      <!-- Unfold -->
                      <div class="dropdown">
                        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" id="navbarNotificationsDropdownSettings" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bi-three-dots-vertical"></i>
                        </button>

                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdownSettings">
                          <span class="dropdown-header">Settings</span>
                          <a class="dropdown-item" href="#">
                            <i class="bi-archive dropdown-item-icon"></i> Archive all
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="bi-check2-all dropdown-item-icon"></i> Mark all as read
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="bi-toggle-off dropdown-item-icon"></i> Disable notifications
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="bi-gift dropdown-item-icon"></i> What's new?
                          </a>
                          <div class="dropdown-divider"></div>
                          <span class="dropdown-header">Feedback</span>
                          <a class="dropdown-item" href="#">
                            <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                    <!-- End Header -->

                    <!-- Nav -->
                    <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" href="#notificationNavOne" id="notificationNavOne-tab" data-bs-toggle="tab" data-bs-target="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#notificationNavTwo" id="notificationNavTwo-tab" data-bs-toggle="tab" data-bs-target="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                      </li>
                    </ul>
                    <!-- End Nav -->

                    <!-- Body -->
                    <div class="card-body-height">
                      <!-- Tab Content -->
                      <div class="tab-content" id="notificationTabContent">
                        <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                          <!-- List Group -->
                          <ul class="list-group list-group-flush navbar-card-list-group">
                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck1" checked>
                                      <label class="form-check-label" for="notificationCheck1"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <img class="avatar avatar-sm avatar-circle" src="{{ global_asset('imgaes/dashboard/160x160/img3.jpg') }}" alt="Image Description">
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Brian Warner</h5>
                                  <p class="text-body fs-5">changed an issue from "In Progress" to <span class="badge bg-success">Review</span></p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">2hr</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck2" checked>
                                      <label class="form-check-label" for="notificationCheck2"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">K</span>
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Klara Hampton</h5>
                                  <p class="text-body fs-5">mentioned you in a comment</p>
                                  <blockquote class="blockquote blockquote-sm">
                                    Nice work, love! You really nailed it. Keep it up!
                                  </blockquote>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">10hr</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck3" checked>
                                      <label class="form-check-label" for="notificationCheck3"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{ global_asset('imgaes/dashboard/160x160/img10.jpg') }}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Ruby Walter</h5>
                                  <p class="text-body fs-5">joined the Slack group HS Team</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">3dy</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck4">
                                      <label class="form-check-label" for="notificationCheck4"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{ global_asset('images/dashboard/svg/brands/google-icon.svg') }}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">from Google</h5>
                                  <p class="text-body fs-5">Start using forms to capture the information of prospects visiting your Google website</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">17dy</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck5">
                                      <label class="form-check-label" for="notificationCheck5"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{ global_asset('images/dashboard/160x160/img7.jpg') }}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Sara Villar</h5>
                                  <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-7 task</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">2mn</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                          </ul>
                          <!-- End List Group -->
                        </div>

                        <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                          <!-- List Group -->
                          <ul class="list-group list-group-flush navbar-card-list-group">
                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck6">
                                      <label class="form-check-label" for="notificationCheck6"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">A</span>
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Anne Richard</h5>
                                  <p class="text-body fs-5">accepted your invitation to join Notion</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">1dy</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck7">
                                      <label class="form-check-label" for="notificationCheck7"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{ global_asset('images/dashboard/160x160/img5.jpg') }}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Finch Hoot</h5>
                                  <p class="text-body fs-5">left Slack group HS projects</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">1dy</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck8">
                                      <label class="form-check-label" for="notificationCheck8"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-dark avatar-circle">
                                      <span class="avatar-initials">HS</span>
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Htmlstream</h5>
                                  <p class="text-body fs-5">you earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">6dy</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck9">
                                      <label class="form-check-label" for="notificationCheck9"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{ global_asset('images/dashboard/160x160/img8.jpg') }}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Linda Bates</h5>
                                  <p class="text-body fs-5">Accepted your connection</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">17dy</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck10">
                                      <label class="form-check-label" for="notificationCheck10"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">L</span>
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Lewis Clarke</h5>
                                  <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-134 task</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">2mts</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                          </ul>
                          <!-- End List Group -->
                        </div>
                      </div>
                      <!-- End Tab Content -->
                    </div>
                    <!-- End Body -->

                    <!-- Card Footer -->
                    <a class="card-footer text-center" href="#">
                      View all notifications <i class="bi-chevron-right"></i>
                    </a>
                    <!-- End Card Footer -->
                  </div>
                </div>
                <!-- End Notification -->
              </li>

              <li class="nav-item d-none d-sm-inline-block">
                <!-- Apps -->
                <div class="dropdown">
                  <button type="button" class="btn btn-icon btn-ghost-secondary rounded-circle" id="navbarAppsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                    <i class="bi-app-indicator"></i>
                  </button>

                  <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarAppsDropdown" style="width: 25rem;">
                    <!-- Header -->
                    <div class="card-header">
                      <h4 class="card-title">Web apps &amp; services</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body card-body-height">
                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-xs avatar-4x3" src="{{ global_asset('images/dashboard/svg/brands/atlassian-icon.svg') }}" alt="Image Description">
                          </div>
                          <div class="flex-grow-1 text-truncate ms-3">
                            <h5 class="mb-0">Atlassian</h5>
                            <p class="card-text text-body">Security and control across Cloud</p>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-xs avatar-4x3" src="{{ global_asset('images/dashboard/svg/brands/slack-icon.svg') }}" alt="Image Description">
                          </div>
                          <div class="flex-grow-1 text-truncate ms-3">
                            <h5 class="mb-0">Slack <span class="badge bg-primary rounded-pill text-uppercase ms-1">Try</span></h5>
                            <p class="card-text text-body">Email collaboration software</p>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-xs avatar-4x3" src="./global_assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                          </div>
                          <div class="flex-grow-1 text-truncate ms-3">
                            <h5 class="mb-0">Google webdev</h5>
                            <p class="card-text text-body">Work involved in developing a website</p>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-xs avatar-4x3" src="./global_assets/svg/brands/frontapp-icon.svg" alt="Image Description">
                          </div>
                          <div class="flex-grow-1 text-truncate ms-3">
                            <h5 class="mb-0">Frontapp</h5>
                            <p class="card-text text-body">The inbox for teams</p>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-xs avatar-4x3" src="./global_assets/svg/illustrations/review-rating-shield.svg" alt="Image Description">
                          </div>
                          <div class="flex-grow-1 text-truncate ms-3">
                            <h5 class="mb-0">HS Support</h5>
                            <p class="card-text text-body">Customer service and support</p>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <div class="avatar avatar-sm avatar-soft-dark">
                              <span class="avatar-initials"><i class="bi-grid"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1 text-truncate ms-3">
                            <h5 class="mb-0">More Front products</h5>
                            <p class="card-text text-body">Check out more HS products</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <a class="card-footer text-center" href="#">
                      View all apps <i class="bi-chevron-right"></i>
                    </a>
                    <!-- End Footer -->
                  </div>
                </div>
                <!-- End Apps -->
              </li>

              <li class="nav-item d-none d-sm-inline-block">
                <!-- Activity -->
                <button class="btn btn-ghost-secondary btn-icon rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasActivityStream" aria-controls="offcanvasActivityStream">
                  <i class="bi-x-diamond"></i>
                </button>
                <!-- Activity -->
              </li>

              <li class="nav-item">
                <!-- Account -->
                <div class="dropdown">
                  <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                    <div class="avatar avatar-sm avatar-circle">
                      <img class="avatar-img" src="{{ global_asset('images/dashboard/160x160/img6.jpg') }}" alt="Image Description">
                      <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                    </div>
                  </a>

                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                    <div class="dropdown-item-text">
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="./global_assets/img/160x160/img6.jpg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <h5 class="mb-0">Mark Williams</h5>
                          <p class="card-text text-body">mark@site.com</p>
                        </div>
                      </div>
                    </div>

                    <div class="dropdown-divider"></div>

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false">Set status</a>

                      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown1">
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-success me-1"></span> Available
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-danger me-1"></span> Busy
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-warning me-1"></span> Away
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"> Reset status
                        </a>
                      </div>
                    </div>
                    <!-- End Dropdown -->

                    <a class="dropdown-item" href="#">Profile &amp; account</a>
                    <a class="dropdown-item" href="#">Settings</a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avatar avatar-sm avatar-dark avatar-circle">
                            <span class="avatar-initials">HS</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <h5 class="mb-0">Htmlstream <span class="badge bg-primary rounded-pill text-uppercase ms-1">PRO</span></h5>
                          <span class="card-text">hs.example.com</span>
                        </div>
                      </div>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown2" data-bs-toggle="dropdown" aria-expanded="false">Customization</a>

                      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown2">
                        <a class="dropdown-item" href="#">
                          Invite people
                        </a>
                        <a class="dropdown-item" href="#">
                          Analytics
                          <i class="bi-box-arrow-in-up-right"></i>
                        </a>
                        <a class="dropdown-item" href="#">
                          Customize Front
                          <i class="bi-box-arrow-in-up-right"></i>
                        </a>
                      </div>
                    </div>
                    <!-- End Dropdown -->

                    <a class="dropdown-item" href="#">Manage team</a>

                    <div class="dropdown-divider"></div>

                    <div class="dropdown-item">
                        <a class="dropdown-item" href="{{ route('tenant.logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('tenant.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                  </div>
                </div>
                <!-- End Account -->
              </li>
            </ul>
            <!-- End Navbar -->
          </div> --}}
        </div>
      </header>
      {{-- Aside --}}
      <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
        <div class="navbar-vertical-container">
          <div class="navbar-vertical-footer-offset">
            <!-- Logo -->

            <a class="navbar-brand" href="./index.html" aria-label="Front">
              <img class="navbar-brand-logo" src="./global_assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
              <img class="navbar-brand-logo" src="./global_assets/svg/logos-light/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
              <img class="navbar-brand-logo-mini" src="./global_assets/svg/logos/logo-short.svg" alt="Logo" data-hs-theme-appearance="default">
              <img class="navbar-brand-logo-mini" src="./global_assets/svg/logos-light/logo-short.svg" alt="Logo" data-hs-theme-appearance="dark">
            </a>

            <!-- End Logo -->

            <!-- Navbar Vertical Toggle -->
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
              <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
              <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
            </button>

            <!-- End Navbar Vertical Toggle -->

            <!-- Content -->
            <div class="navbar-vertical-content">
              <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
                <!-- Collapse -->
                <div class="nav-item">
                  <a class="nav-link" href="#navbarVerticalMenuDashboards" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuDashboards" aria-expanded="true" aria-controls="navbarVerticalMenuDashboards">
                    <i class="bi-house-door nav-icon"></i>
                    <span class="nav-link-title">@lang('Dashboard')</span>
                  </a>
                </div>
                <!-- End Collapse -->

                <span class="dropdown-header mt-4">@lang('Pages')</span>
                <small class="bi-three-dots nav-subtitle-replacer"></small>

                <!-- Collapse -->
                <div class="navbar-nav nav-compact">

                </div>
                <div id="navbarVerticalMenuPagesMenu">
                  <!-- Collapse -->
                  <div class="nav-item">
                    <a class="nav-link " href="{{ route('tenant.dashboard') }}" role="button">
                        <i class="bi-house-door-fill nav-icon"></i>
                      <span class="nav-link-title"> @lang('Overview')</span>
                    </a>
                    {{-- start dropdown --}}
                    <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesEcommerceProductsMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceProductsMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceMenu">
                        <i class="bi-basket nav-icon"></i>
                        <span class="nav-link-title">@lang('Products')</span>
                    </a>
                    <div id="navbarVerticalMenuPagesEcommerceProductsMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesEcommerceProductsMenu">
                        <a class="nav-link " href="{{ route('tenant.Product.index') }}">{{ __('Products') }}</a>
                        <a class="nav-link " href="{{ route('tenant.Product.create') }}">{{ __('Add Product') }}</a>
                        <a class="nav-link " href="{{ route('tenant.PromoCode') }}">{{ __('Promo code') }}</a>
                    </div>
                  </div>
                        <!-- End Collapse -->

                        <!-- Collapse -->
                        <div class="nav-item">
                          <a class="nav-link dropdown-toggle" href="#governorate" role="button" data-bs-toggle="collapse" data-bs-target="#governorate" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceOrdersMenu">
                            <i class="bi bi-map nav-icon"></i>
                            <span class="nav-link-title">{{ __('Regions') }}</span>
                          </a>

                          <div id="governorate" class="nav-collapse collapse " data-bs-parent="#governorate">
                            <a class="nav-link " href="{{ route('tenant.Governorate') }}">{{ __('Governorate') }}</a>
                            <a class="nav-link " href="{{ route('tenant.City') }}">{{ __('Cities') }}</a>
                          </div>
                        </div>
                        <!-- Collapse -->
                        <div class="nav-item">
                          <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceOrdersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceOrdersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceOrdersMenu">
                            <i class="bi-bag-heart nav-icon"></i>
                            <span class="nav-link-title">{{ __('Orders') }}</span>
                          </a>

                          <div id="navbarVerticalMenuPagesEcommerceOrdersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                            <a class="nav-link " href="./ecommerce-orders.html">{{ __('Orders') }}</a>
                            <a class="nav-link " href="./ecommerce-order-details.html">{{ __('Order details') }}</a>
                          </div>
                        </div>
                        <!-- End Collapse -->

                        <!-- Collapse -->
                        <div class="nav-item">
                          <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceCustomersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceCustomersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceCustomersMenu">
                            <i class="bi-people-fill nav-icon"></i>
                            <span class="nav-link-title">@lang('Customers')</span>
                          </a>

                          <div id="navbarVerticalMenuPagesEcommerceCustomersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                            <a class="nav-link " href="./ecommerce-customers.html">@lang('Customers')</a>
                            <a class="nav-link " href="./ecommerce-customer-details.html">@lang('Customer details')</a>
                          </div>
                        </div>
                        <!-- End Collapse -->
                        <!-- Collapse -->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceCategory" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceCategory" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceCustomersMenu">
                                <i class="bi bi-card-list nav-icon"></i>
                              <span class="nav-link-title">@lang('Categories')</span>
                            </a>

                            <div id="navbarVerticalMenuPagesEcommerceCategory" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                              <a class="nav-link " href="{{ route('tenant.Category.index') }}">@lang('Categories')</a>
                            </div>
                          </div>
                          <!-- End Collapse -->
                      </div>

                      {{-- <a class="nav-link " href="./ecommerce-referrals.html">Referrals</a> --}}

                    </div>
                  </div>
                  <!-- End Collapse -->


                {{-- <span class="dropdown-header mt-4">Apps</span>
                <small class="bi-three-dots nav-subtitle-replacer"></small>

                <span class="dropdown-header mt-4">Layouts</span>
                <small class="bi-three-dots nav-subtitle-replacer"></small> --}}
              </div>

            </div>
            <!-- End Content -->

            <!-- Footer -->
            <div class="navbar-vertical-footer">
              <ul class="navbar-vertical-footer-list">
                <li class="navbar-vertical-footer-list-item">
                  <!-- Style Switcher -->
                  <div class="dropdown dropup">
                    <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>

                    </button>

                    <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                      <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                        <i class="bi-moon-stars me-2"></i>
                        <span class="text-truncate" title="Auto (system default)">@lang('Auto (system default)')</span>
                      </a>
                      <a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
                        <i class="bi-brightness-high me-2"></i>
                        <span class="text-truncate" title="Default (light mode)">@lang('Default (light mode)')</span>
                      </a>
                      <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                        <i class="bi-moon me-2"></i>
                        <span class="text-truncate" title="Dark">@lang('Dark')</span>
                      </a>
                    </div>
                  </div>

                  <!-- End Style Switcher -->
                </li>
                <li class="navbar-vertical-footer-list-item">
                  <!-- Language -->
                  <div class="dropdown dropup">
                    <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                        @if (App::isLocale('ar'))
                            <img src="{{ global_asset('img/flag/KW.svg') }}" alt="Arabic"/>
                        @else
                            <img src="{{ global_asset('img/flag/UK.svg') }}" alt="English"/>
                        @endif
                    </button>

                    <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectLanguageDropdown">
                      <span class="dropdown-header">@lang('Select language')</span>
                      <ul class="navi navi-hover">
                            {{-- Item --}}
                            <li class="navi-item">
                                <a href="{{url('/lang/en')}}" class="navi-link @if (App::isLocale('en'))  active  @endif">
                                    <span class="mr-3 symbol symbol-20">
                                        <img src="{{ global_asset('img/flag/UK.svg') }}" alt="English"/>
                                    </span>
                                    <span class="navi-text">@lang('English')</span>
                                </a>
                            </li>

                            {{-- Item --}}
                            <li class="navi-item">
                                <a href="{{url('/lang/ar')}}" class="navi-link @if (App::isLocale('ar'))  active  @endif" href="{{url('/ar')}}">
                                    <span class="mr-3 symbol symbol-20">
                                        <img src="{{ global_asset('img/flag/KW.svg') }}" alt="Arabic"/>
                                    </span>
                                    <span class="navi-text">@lang('Arabic')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                  </div>

                  <!-- End Language -->
                </li>
              </ul>
            </div>
            <!-- End Footer -->
          </div>
        </div>
      </aside>
      {{-- End Aside --}}
      @endauth

      {{-- Content --}}
      @auth
        <main id="content" role="main" class="main">
      @endauth
         @yield('content')
      </main>
        <!-- Footer -->

        <!-- End Footer -->
  <script>
  window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/index.html","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["global_assets/js/hs.theme-appearance.js","global_assets/js/hs.theme-appearance-charts.js","global_assets/js/demo.js"],"build":["global_assets/css/theme.css","global_assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","global_assets/js/demo.js","global_assets/css/theme-dark.css","global_assets/css/docs.css","global_assets/vendor/icon-set/style.css","global_assets/js/hs.theme-appearance.js","global_assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","global_assets/js/demo.js"]},"minifyCSSFiles":["global_assets/css/theme.css","global_assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*global_assets/js/theme-custom.js":""},"build":{"*global_assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"global_assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
  window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
  }
  throw new Error('Bad Hex');
}
            window.hs_config.gulpDarken = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = -parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            window.hs_config.gulpLighten = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

  <script src="{{ global_asset('js/dashboard/hs.theme-appearance.js') }}"></script>

  <script src="{{ global_asset('js/dashboard/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js') }}"></script>

  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  {{-- <script src="{{ global_asset('js/dashboard/vendor/jquery/dist/jquery.min.js') }}}}"></script> --}}
  <script src="{{ global_asset('js/dashboard/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
  <script src="{{ global_asset('js/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

  {{-- select box --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ global_asset('js/dashboard/vendor/hs-form-search/dist/hs-form-search.min.js') }}"></script>
  <script src="{{ global_asset('js/dashboard/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js') }}"></script>

  <script src="{{ global_asset('js/dashboard/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ global_asset('js/dashboard/vendor/chartjs-chart-matrix/dist/chartjs-chart-matrix.min.js') }}"></script>
  <script src="{{ global_asset('js/dashboard/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js') }}"></script>
  <script src="{{ global_asset('js/dashboard/vendor/daterangepicker/moment.min.js') }}"></script>
  <script src="{{ global_asset('js/dashboard/vendor/daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ global_asset('js/dashboard/vendor/tom-select/dist/js/tom-select.complete.min.js') }}"></script>
  <script src="{{ global_asset('js/dashboard/vendor/clipboard/dist/clipboard.min.js')  }}"></script>
  <script src="{{ global_asset('js/dashboard/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ global_asset('js/dashboard/vendor/datatables.net.extensions/select/select.min.js') }}"></script>


  <!-- JS Front -->
  <script src="{{ global_asset('js/dashboard/theme.min.js') }}"></script>
  <script src="{{ global_asset('js/dashboard/hs.theme-appearance-charts.js') }}"></script>
  <script src="{{ global_asset('js/myjava.js') }}"></script>



  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATERANGEPICKER
      // =======================================================
      $('.js-daterangepicker').daterangepicker();

      $('.js-daterangepicker-times').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });

      var start = moment();
      var end = moment();

      function cb(start, end) {
        $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
      }

      $('#js-daterangepicker-predefined').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);

      cb(start, end);
    });


    // INITIALIZATION OF DATATABLES
    // =======================================================
    HSCore.components.HSDatatables.init($('#datatable'), {
      select: {
        style: 'multi',
        selector: 'td:first-child input[type="checkbox"]',
        classMap: {
          checkAll: '#datatableCheckAll',
          counter: '#datatableCounter',
          counterInfo: '#datatableCounterInfo'
        }
      },
      language: {
        zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="{{ global_asset('images/dashboard/svg/illustrations/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="{{ global_asset('imgaes/dashboard/svg/illustrations-light/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
      }
    });

    const datatable = HSCore.components.HSDatatables.getItem(0)

    document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
      item.addEventListener('change',function(e) {
        const elVal = e.target.value,
    targetColumnIndex = e.target.getAttribute('data-target-column-index'),
    targetTable = e.target.getAttribute('data-target-table');

    HSCore.components.HSDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
      })
    })
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {


        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        const HSFormSearchInstance = new HSFormSearch('.js-form-search')

        if (HSFormSearchInstance.collection.length) {
          HSFormSearchInstance.getItem(1).on('close', function (el) {
            el.classList.remove('top-0')
          })

          document.querySelector('.js-form-search-mobile-toggle').addEventListener('click', e => {
            let dataOptions = JSON.parse(e.currentTarget.getAttribute('data-hs-form-search-options')),
              $menu = document.querySelector(dataOptions.dropMenuElement)

            $menu.classList.add('top-0')
            $menu.style.left = 0
          })
        }


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF CHARTJS
        // =======================================================
        Chart.plugins.unregister(ChartDataLabels);
        HSCore.components.HSChartJS.init('.js-chart')


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('#updatingBarChart')
        const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart')

        // Call when tab is clicked
        document.querySelectorAll('[data-bs-toggle="chart-bar"]').forEach(item => {
          item.addEventListener('click', e => {
            let keyDataset = e.currentTarget.getAttribute('data-datasets')

            const styles = HSCore.components.HSChartJS.getTheme('updatingBarChart', HSThemeAppearance.getAppearance())

            if (keyDataset === 'lastWeek') {
              updatingBarChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
              updatingBarChart.data.datasets = [
                {
                  "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor
                },
                {
                  "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor
                }
              ];
              updatingBarChart.update();
            } else {
              updatingBarChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
              updatingBarChart.data.datasets = [
                {
                  "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor
                },
                {
                  "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor
                }
              ]
              updatingBarChart.update();
            }
          })
        })


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart-datalabels', {
          plugins: [ChartDataLabels],
          options: {
            plugins: {
              datalabels: {
                anchor: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                align: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                color: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                },
                font: function (context) {
                  var value = context.dataset.data[context.dataIndex],
                    fontSize = 25;

                  if (value.r > 50) {
                    fontSize = 35;
                  }

                  if (value.r > 70) {
                    fontSize = 55;
                  }

                  return {
                    weight: 'lighter',
                    size: fontSize
                  };
                },
                offset: 2,
                padding: 0
              }
            }
          }
        })

        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        HSCore.components.HSClipboard.init('.js-clipboard')
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
    </script>

  <!-- End Style Switcher JS -->
    {{-- Alpinjs  --}}
    <script defer src="https://unpkg.com/alpinejs@3.9.5/dist/cdn.min.js"></script>
    @livewireScripts
  @yield('js')
</body>
</html>
