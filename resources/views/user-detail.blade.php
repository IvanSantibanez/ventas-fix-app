@extends('layouts.app')

@section('title', 'Detalles del Usuario - VentasFix')

@section('content')

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.html" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                fill="#7367F0" />
                            <path
                                opacity="0.06"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                fill="#161616" />
                            <path
                                opacity="0.06"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                fill="#161616" />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                fill="#7367F0" />
                        </svg>
                    </span>
                    <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                    <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
                    <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboards -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-smart-home"></i>
                        <div data-i18n="Dashboards">Dashboards</div>
                        <div class="badge bg-danger rounded-pill ms-auto">5</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="index.html" class="menu-link">
                                <div data-i18n="Analytics">Analytics</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="dashboards-crm.html" class="menu-link">
                                <div data-i18n="CRM">CRM</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-ecommerce-dashboard.html" class="menu-link">
                                <div data-i18n="eCommerce">eCommerce</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-logistics-dashboard.html" class="menu-link">
                                <div data-i18n="Logistics">Logistics</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-academy-dashboard.html" class="menu-link">
                                <div data-i18n="Academy">Academy</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Layouts -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                        <div data-i18n="Layouts">Layouts</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="layouts-collapsed-menu.html" class="menu-link">
                                <div data-i18n="Collapsed menu">Collapsed menu</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="layouts-content-navbar.html" class="menu-link">
                                <div data-i18n="Content navbar">Content navbar</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="layouts-content-navbar-with-sidebar.html" class="menu-link">
                                <div data-i18n="Content nav + Sidebar">Content nav + Sidebar</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../horizontal-menu-template" class="menu-link" target="_blank">
                                <div data-i18n="Horizontal">Horizontal</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="layouts-without-menu.html" class="menu-link">
                                <div data-i18n="Without menu">Without menu</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="layouts-without-navbar.html" class="menu-link">
                                <div data-i18n="Without navbar">Without navbar</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="layouts-fluid.html" class="menu-link">
                                <div data-i18n="Fluid">Fluid</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="layouts-container.html" class="menu-link">
                                <div data-i18n="Container">Container</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="layouts-blank.html" class="menu-link">
                                <div data-i18n="Blank">Blank</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Front Pages -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-files"></i>
                        <div data-i18n="Front Pages">Front Pages</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="../front-pages/landing-page.html" class="menu-link" target="_blank">
                                <div data-i18n="Landing">Landing</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../front-pages/pricing-page.html" class="menu-link" target="_blank">
                                <div data-i18n="Pricing">Pricing</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../front-pages/payment-page.html" class="menu-link" target="_blank">
                                <div data-i18n="Payment">Payment</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../front-pages/checkout-page.html" class="menu-link" target="_blank">
                                <div data-i18n="Checkout">Checkout</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../front-pages/help-center-landing.html" class="menu-link" target="_blank">
                                <div data-i18n="Help Center">Help Center</div>
                            </a>
                        </li>
                    </ul>
                </li>

             <!-- Apps & Pages -->
                <li class="menu-header small">
                    <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
                </li>
                <!-- e-commerce-app menu start -->
                <li class="menu-item active open">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-shopping-cart"></i>
                        <div data-i18n="eCommerce">eCommerce</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item active">
                            <a href="{{ route('dashboard') }}" class="menu-link">
                                <div data-i18n="Dashboard">Dashboard</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <div data-i18n="Productos">Productos</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('productos.index') }}" class="menu-link">
                                        <div data-i18n="Lista de Productos">Lista de Productos</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('product-add') }}" class="menu-link">
                                        <div data-i18n="Agregar Producto">Agregar Producto</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <div data-i18n="Cliente">Cliente</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('clientes.index') }}" class="menu-link">
                                        <div data-i18n="Lista de Clientes">Lista de Clientes</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <!-- e-commerce-app menu end -->
                <!-- Academy menu start -->
                 <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-users"></i>
                        <div data-i18n="Usuarios">Usuarios</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('usuarios.index') }}" class="menu-link">
                                <div data-i18n="Lista">Lista</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="ti ti-menu-2 ti-md"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item navbar-search-wrapper mb-0">
                            <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                                <i class="ti ti-search ti-md me-2 me-lg-4 ti-lg"></i>
                                <span class="d-none d-md-inline-block text-muted fw-normal">Search (Ctrl+/)</span>
                            </a>
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Language -->
                        <li class="nav-item dropdown-language dropdown">
                            <a
                                class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                                href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-language rounded-circle ti-md"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                                        <span>English</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                                        <span>French</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                                        <span>Arabic</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                                        <span>German</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Language -->

                        <!-- Style Switcher -->
                        <li class="nav-item dropdown-style-switcher dropdown">
                            <a
                                class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                                href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-md"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                        <span class="align-middle"><i class="ti ti-sun ti-md me-3"></i>Light</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                        <span class="align-middle"><i class="ti ti-moon-stars ti-md me-3"></i>Dark</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                        <span class="align-middle"><i class="ti ti-device-desktop-analytics ti-md me-3"></i>System</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- / Style Switcher-->

                        <!-- Quick links  -->
                        <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
                            <a
                                class="nav-link btn btn-text-secondary btn-icon rounded-pill btn-icon dropdown-toggle hide-arrow"
                                href="javascript:void(0);"
                                data-bs-toggle="dropdown"
                                data-bs-auto-close="outside"
                                aria-expanded="false">
                                <i class="ti ti-layout-grid-add ti-md"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <div class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h6 class="mb-0 me-auto">Shortcuts</h6>
                                        <a
                                            href="javascript:void(0)"
                                            class="btn btn-text-secondary rounded-pill btn-icon dropdown-shortcuts-add"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Add shortcuts"><i class="ti ti-plus text-heading"></i></a>
                                    </div>
                                </div>
                                <div class="dropdown-shortcuts-list scrollable-container">
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="ti ti-calendar ti-26px text-heading"></i>
                                            </span>
                                            <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                            <small>Appointments</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="ti ti-file-dollar ti-26px text-heading"></i>
                                            </span>
                                            <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                                            <small>Manage Accounts</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="ti ti-user ti-26px text-heading"></i>
                                            </span>
                                            <a href="app-user-list.html" class="stretched-link">User App</a>
                                            <small>Manage Users</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="ti ti-users ti-26px text-heading"></i>
                                            </span>
                                            <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                                            <small>Permission</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="ti ti-device-desktop-analytics ti-26px text-heading"></i>
                                            </span>
                                            <a href="index.html" class="stretched-link">Dashboard</a>
                                            <small>User Dashboard</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="ti ti-settings ti-26px text-heading"></i>
                                            </span>
                                            <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                                            <small>Account Settings</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="ti ti-help ti-26px text-heading"></i>
                                            </span>
                                            <a href="pages-faq.html" class="stretched-link">FAQs</a>
                                            <small>FAQs & Articles</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="ti ti-square ti-26px text-heading"></i>
                                            </span>
                                            <a href="modal-examples.html" class="stretched-link">Modals</a>
                                            <small>Useful Popups</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Quick links -->

                        <!-- Notification -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                            <a
                                class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                                href="javascript:void(0);"
                                data-bs-toggle="dropdown"
                                data-bs-auto-close="outside"
                                aria-expanded="false">
                                <span class="position-relative">
                                    <i class="ti ti-bell ti-md"></i>
                                    <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end p-0">
                                <li class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h6 class="mb-0 me-auto">Notification</h6>
                                        <div class="d-flex align-items-center h6 mb-0">
                                            <span class="badge bg-label-primary me-2">8 New</span>
                                            <a
                                                href="javascript:void(0)"
                                                class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="Mark all as read"><i class="ti ti-mail-opened text-heading"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-notifications-list scrollable-container">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{ asset('img/avatars/1.png') }}" alt class="rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                                                    <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                                                    <small class="text-muted">1h ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Charles Franklin</h6>
                                                    <small class="mb-1 d-block text-body">Accepted your connection</small>
                                                    <small class="text-muted">12hr ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{ asset('img/avatars/2.png') }}" alt class="rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">New Message ✉️</h6>
                                                    <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                                                    <small class="text-muted">1h ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-shopping-cart"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Whoo! You have new order 🛒</h6>
                                                    <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                                                    <small class="text-muted">1 day ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{ asset('img/avatars/9.png') }}" alt class="rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Application has been approved 🚀</h6>
                                                    <small class="mb-1 d-block text-body">Your ABC project application has been approved.</small>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-chart-pie"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Monthly report is generated</h6>
                                                    <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{ asset('img/avatars/5.png') }}" alt class="rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Send connection request</h6>
                                                    <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                                                    <small class="text-muted">4 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{ asset('img/avatars/6.png') }}" alt class="rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">New message from Jane</h6>
                                                    <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                                                    <small class="text-muted">5 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-warning"><i class="ti ti-alert-triangle"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">CPU is running high</h6>
                                                    <small class="mb-1 d-block text-body">CPU Utilization Percent is currently at 88.63%,</small>
                                                    <small class="text-muted">5 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="border-top">
                                    <div class="d-grid p-4">
                                        <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                                            <small class="align-middle">View all notifications</small>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!--/ Notification -->

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a
                                class="nav-link dropdown-toggle hide-arrow p-0"
                                href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="{{ asset('img/avatars/1.png') }}" alt class="rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar avatar-online">
                                                    <img src="{{ asset('img/avatars/1.png') }}" alt class="rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">John Doe</h6>
                                                <small class="text-muted">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider my-1 mx-n2"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-profile-user.html">
                                        <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-account.html">
                                        <i class="ti ti-settings me-3 ti-md"></i><span class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-billing.html">
                                        <span class="d-flex align-items-center align-middle">
                                            <i class="flex-shrink-0 ti ti-file-dollar me-3 ti-md"></i><span class="flex-grow-1 align-middle">Billing</span>
                                            <span class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center">4</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider my-1 mx-n2"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-pricing.html">
                                        <i class="ti ti-currency-dollar me-3 ti-md"></i><span class="align-middle">Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-faq.html">
                                        <i class="ti ti-question-mark me-3 ti-md"></i><span class="align-middle">FAQ</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="d-grid px-2 pt-2 pb-1">
                                        <a class="btn btn-sm btn-danger d-flex" href="auth-login-cover.html" target="_blank">
                                            <small class="align-middle">Logout</small>
                                            <i class="ti ti-logout ms-2 ti-14px"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>

                <!-- Search Small Screens -->
                <div class="navbar-search-wrapper search-input-wrapper d-none">
                    <input
                        type="text"
                        class="form-control search-input container-xxl border-0"
                        placeholder="Search..."
                        aria-label="Search..." />
                    <i class="ti ti-x search-toggler cursor-pointer"></i>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <!-- User Sidebar -->
                        <div class="col-xl-4 col-lg-5 order-1 order-md-0">
                            <!-- User Card -->
                            <div class="card mb-6">
                                <div class="card-body pt-12">
                                    <div class="user-avatar-section">
                                        <div class="d-flex align-items-center flex-column">
                                            <img
                                                class="img-fluid rounded mb-4"
                                                src="{{ asset('img/avatars/1.png') }}"
                                                height="120"
                                                width="120"
                                                alt="User avatar" />
                                            <div class="user-info text-center">
                                                <h5>{{ $usuario['nombre'] }} {{ $usuario['apellido']}}</h5>
                                                <span class="badge bg-label-secondary">Author</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around flex-wrap my-6 gap-0 gap-md-3 gap-lg-4">
                                        <div class="d-flex align-items-center me-5 gap-4">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-label-primary rounded">
                                                    <i class="ti ti-checkbox ti-lg"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-0">1.23k</h5>
                                                <span>Tareas Completadas</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-label-primary rounded">
                                                    <i class="ti ti-briefcase ti-lg"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-0">568</h5>
                                                <span>Productos vendidos</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="pb-4 border-bottom mb-4">Details</h5>
                                    <div class="info-container">
                                        <ul class="list-unstyled mb-6">
                                            <li class="mb-2">
                                                <span class="h6">Username:</span>
                                                <span>{{ $usuario['nombre'] }}.{{ $usuario['apellido'] }}</span>
                                            </li>
                                            <li class="mb-2">
                                                <span class="h6">RUT:</span>
                                                <span>{{ $usuario['rut'] }}</span>
                                            </li>
                                            <li class="mb-2">
                                                <span class="h6">Email:</span>
                                                <span>{{ $usuario['email'] }}</span>
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-center">
                                            <a
                                                href="javascript:;"
                                                class="btn btn-primary me-4"
                                                data-bs-target="#editUser"
                                                data-bs-toggle="modal">Editar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /User Card -->
                            <!-- Plan Card -->
                            <div class="card mb-6 border border-2 border-primary rounded primary-shadow">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <span class="badge bg-label-primary">Standard</span>
                                        <div class="d-flex justify-content-center">
                                            <sub class="h5 pricing-currency mb-auto mt-1 text-primary">$</sub>
                                            <h1 class="mb-0 text-primary">99</h1>
                                            <sub class="h6 pricing-duration mt-auto mb-3 fw-normal">month</sub>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled g-2 my-6">
                                        <li class="mb-2 d-flex align-items-center">
                                            <i class="ti ti-circle-filled ti-10px text-secondary me-2"></i><span>10 Users</span>
                                        </li>
                                        <li class="mb-2 d-flex align-items-center">
                                            <i class="ti ti-circle-filled ti-10px text-secondary me-2"></i><span>Up to 10 GB storage</span>
                                        </li>
                                        <li class="mb-2 d-flex align-items-center">
                                            <i class="ti ti-circle-filled ti-10px text-secondary me-2"></i><span>Basic Support</span>
                                        </li>
                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <span class="h6 mb-0">Days</span>
                                        <span class="h6 mb-0">26 of 30 Days</span>
                                    </div>
                                    <div class="progress mb-1 bg-label-primary" style="height: 6px">
                                        <div
                                            class="progress-bar"
                                            role="progressbar"
                                            style="width: 65%"
                                            aria-valuenow="65"
                                            aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <small>4 days remaining</small>
                                    <div class="d-grid w-100 mt-6">
                                        <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
                                            Upgrade Plan
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Plan Card -->
                        </div>
                        <!--/ User Sidebar -->

                        <!-- User Content -->
                        <div class="col-xl-8 col-lg-7 order-0 order-md-1">
                            <!-- User Pills -->
                            <div class="nav-align-top">
                                <ul class="nav nav-pills flex-column flex-md-row flex-wrap mb-6 row-gap-2">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="javascript:void(0);"><i class="ti ti-user-check ti-sm me-1_5"></i>Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="app-user-view-security.html"><i class="ti ti-lock ti-sm me-1_5"></i>Security</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="app-user-view-billing.html"><i class="ti ti-bookmark ti-sm me-1_5"></i>Billing & Plans</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="app-user-view-notifications.html"><i class="ti ti-bell ti-sm me-1_5"></i>Notifications</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="app-user-view-connections.html"><i class="ti ti-link ti-sm me-1_5"></i>Connections</a>
                                    </li>
                                </ul>
                            </div>
                            <!--/ User Pills -->

                            <!-- Project table -->
                            <div class="card mb-6">
                                <div class="card-datatable table-responsive">
                                    <table class="table border-top">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Project</th>
                                                <th>Leader</th>
                                                <th>Team</th>
                                                <th class="w-px-200">Progress</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <!-- /Project table -->

                            <!-- Activity Timeline -->
                            <div class="card mb-6">
                                <h5 class="card-header">User Activity Timeline</h5>
                                <div class="card-body pt-1">
                                    <ul class="timeline mb-0">
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-primary"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header mb-3">
                                                    <h6 class="mb-0">12 Invoices have been paid</h6>
                                                    <small class="text-muted">12 min ago</small>
                                                </div>
                                                <p class="mb-2">Invoices have been paid to the company</p>
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="badge bg-lighter rounded d-flex align-items-center">
                                                        <img src="{{ asset('img/icons/misc/pdf.png') }}" alt="img" width="15" class="me-2" />
                                                        <span class="h6 mb-0 text-body">invoices.pdf</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-success"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header mb-3">
                                                    <h6 class="mb-0">Client Meeting</h6>
                                                    <small class="text-muted">45 min ago</small>
                                                </div>
                                                <p class="mb-2">Project meeting with john @10:15am</p>
                                                <div class="d-flex justify-content-between flex-wrap gap-2 mb-2">
                                                    <div class="d-flex flex-wrap align-items-center mb-50">
                                                        <div class="avatar avatar-sm me-2">
                                                            <img src="{{ asset('img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 small fw-medium">Lester McCarthy (Client)</p>
                                                            <small>CEO of Pixinvent</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-info"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header mb-3">
                                                    <h6 class="mb-0">Create a new project for client</h6>
                                                    <small class="text-muted">2 Day Ago</small>
                                                </div>
                                                <p class="mb-2">6 team members in a project</p>
                                                <ul class="list-group list-group-flush">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
                                                        <div class="d-flex flex-wrap align-items-center">
                                                            <ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 me-2">
                                                                <li
                                                                    data-bs-toggle="tooltip"
                                                                    data-popup="tooltip-custom"
                                                                    data-bs-placement="top"
                                                                    title="Vinnie Mostowy"
                                                                    class="avatar pull-up">
                                                                    <img class="rounded-circle" src="{{ asset('img/avatars/5.png') }}" alt="Avatar" />
                                                                </li>
                                                                <li
                                                                    data-bs-toggle="tooltip"
                                                                    data-popup="tooltip-custom"
                                                                    data-bs-placement="top"
                                                                    title="Allen Rieske"
                                                                    class="avatar pull-up">
                                                                    <img class="rounded-circle" src="{{ asset('img/avatars/12.png') }}" alt="Avatar" />
                                                                </li>
                                                                <li
                                                                    data-bs-toggle="tooltip"
                                                                    data-popup="tooltip-custom"
                                                                    data-bs-placement="top"
                                                                    title="Julee Rossignol"
                                                                    class="avatar pull-up">
                                                                    <img class="rounded-circle" src="{{ asset('img/avatars/6.png') }}" alt="Avatar" />
                                                                </li>
                                                                <li class="avatar">
                                                                    <span
                                                                        class="avatar-initial rounded-circle pull-up text-heading"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="bottom"
                                                                        title="3 more">+3</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Activity Timeline -->

                            <!-- Invoice table -->
                            <div class="card mb-4">
                                <div class="card-datatable table-responsive">
                                    <table class="table datatable-invoice">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>#</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Issued Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <!-- /Invoice table -->
                        </div>
                        <!--/ User Content -->
                    </div>

                    <!-- Modal -->
                    <!-- Edit User Modal -->
                    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="text-center mb-6">
                                        <h4 class="mb-2">Editar información del Usuario</h4>
                                    </div>
                                    <form id="editUsuario" class="row g-6" method="POST" action="{{ route('usuarios.update', $usuario['id']) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="nombre">Nombre</label>
                                            <input
                                                type="text"
                                                id="nombre"
                                                name="nombre"
                                                class="form-control"
                                                placeholder="Pedro"
                                                value="{{ old('nombre', $usuario['nombre']) }}" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="apellido">Apellido</label>
                                            <input
                                                type="text"
                                                id="apellido"
                                                name="apellido"
                                                class="form-control"
                                                placeholder="Jara"
                                                value="{{ old('apellido', $usuario['apellido']) }}" />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="rut">RUT</label>
                                            <input
                                                type="text"
                                                id="rut"
                                                name="rut"
                                                class="form-control"
                                                placeholder="12345678-9"
                                                maxlength="10"
                                                value="{{ old('rut', $usuario['rut']) }}" />
                                        </div>
                                        @if ($errors->any())
                                        <div class="alert alert-danger" role="alert">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary me-3">Enviar</button>
                                            <button
                                                type="reset"
                                                class="btn btn-label-secondary"
                                                data-bs-dismiss="modal"
                                                aria-label="Close">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Edit User Modal -->

                    <!-- Add New Credit Card Modal -->
                    <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
                            <div class="modal-content">
                                <div class="modal-body p-4">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="text-center mb-6">
                                        <h4 class="mb-2">Upgrade Plan</h4>
                                        <p>Choose the best plan for user.</p>
                                    </div>
                                    <form id="upgradePlanForm" class="row g-4" onsubmit="return false">
                                        <div class="col-sm-9">
                                            <label class="form-label" for="choosePlan">Choose Plan</label>
                                            <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                                                <option selected>Choose Plan</option>
                                                <option value="standard">Standard - $99/month</option>
                                                <option value="exclusive">Exclusive - $249/month</option>
                                                <option value="Enterprise">Enterprise - $499/month</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-end">
                                            <button type="submit" class="btn btn-primary">Upgrade</button>
                                        </div>
                                    </form>
                                </div>
                                <hr class="mx-4 my-2" />
                                <div class="modal-body p-4">
                                    <p class="mb-0">User current plan is standard plan</p>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="d-flex justify-content-center me-2 mt-1">
                                            <sup class="h6 pricing-currency pt-1 mt-2 mb-0 me-1 text-primary">$</sup>
                                            <h1 class="mb-0 text-primary">99</h1>
                                            <sub class="pricing-duration mt-auto mb-5 pb-1 small text-body">/month</sub>
                                        </div>
                                        <button class="btn btn-label-danger cancel-subscription">Cancel Subscription</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Add New Credit Card Modal -->

                    <!-- /Modal -->
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div
                            class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                            <div class="text-body">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by <a href="https://pixinvent.com" target="_blank" class="footer-link">Pixinvent</a>
                            </div>
                            <div class="d-none d-lg-inline-block">
                                <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
                                <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>

                                <a
                                    href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                                    target="_blank"
                                    class="footer-link me-4">Documentation</a>

                                <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>

@endsection
