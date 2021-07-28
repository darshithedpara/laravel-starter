@extends('layouts.app')
<!-- END: Header -->
<!-- BEGIN: Left Aside -->
@section('content')
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
    <i class="la la-close"></i>
</button>
  <div id="m_aside_left" class="m-aside-left  m-aside-left--skin-dark ">
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true" m-menu-scrollable="1" m-menu-dropdown-timeout="500">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__section">
                <h4 class="m-menu__section-text">
                    Examportal
                </h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
            </li>
            <li class="m-menu__item">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-users"></i>
                    <span class="m-menu__link-text">
									Users
								</span>
                </a>
            </li>
            <li class="m-menu__item"><a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-book"></i><span class="m-menu__link-text">
                                    Exams
                                </span>
                </a>
            </li>
            <li class="m-menu__item"><a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i>
                    <span class="m-menu__link-text">
                                    Categories
                                </span>
                </a>
            </li>
            <li class="m-menu__item">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-questions-circular-button"></i>
                    <span class="m-menu__link-text">
                                    Questions
                                </span>
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- END: Left Aside -->
<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
    <div
        class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-container m-container--responsive m-container--xxl m-container--full-height">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title m-subheader__title--separator">
                            Dashboard
                        </h3>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                            <li class="m-nav__item m-nav__item--home">
                                <a href="#" class="m-nav__link m-nav__link--icon">
                                    <i class="m-nav__link-icon la la-home"></i>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
												<span class="m-nav__link-text">
													Dashboard
												</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                Inner page content goes here
            </div>
        </div>
    </div>
</div>

@endsection
<!-- END: Left Aside -->

<!-- begin::Footer -->

<!-- end::Page Loader -->

