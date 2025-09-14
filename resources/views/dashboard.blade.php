@extends('layouts.app')

@section('title', 'Dashboard - VentasFix')

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
                        <li class="menu-item active">
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
                                <div data-i18n="Customer">Customer</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="app-ecommerce-customer-all.html" class="menu-link">
                                        <div data-i18n="All Customers">All Customers</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                                        <div data-i18n="Customer Details">Customer Details</div>
                                    </a>
                                    <ul class="menu-sub">
                                        <li class="menu-item">
                                            <a href="app-ecommerce-customer-details-overview.html" class="menu-link">
                                                <div data-i18n="Overview">Overview</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="app-ecommerce-customer-details-security.html" class="menu-link">
                                                <div data-i18n="Security">Security</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="app-ecommerce-customer-details-billing.html" class="menu-link">
                                                <div data-i18n="Address & Billing">Address & Billing</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="app-ecommerce-customer-details-notifications.html" class="menu-link">
                                                <div data-i18n="Notifications">Notifications</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <!-- e-commerce-app menu end -->
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
                                        <a class="btn btn-sm btn-danger d-flex" href="{{ route('logout') }}">
                                            <small class="align-middle">Cerrar sesión</small>
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
                    <div class="row g-6">
                        <!-- View sales -->
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-7">
                                        <div class="card-body text-nowrap">
                                            <h5 class="card-title mb-0">Congratulations John! 🎉</h5>
                                            <p class="mb-2">Best seller of the month</p>
                                            <h4 class="text-primary mb-1">$48.9k</h4>
                                            <a href="javascript:;" class="btn btn-primary">View Sales</a>
                                        </div>
                                    </div>
                                    <div class="col-5 text-center text-sm-left">
                                        <div class="card-body pb-0 px-0 px-md-4">
                                            <img
                                                src="{{ asset('img/illustrations/card-advance-sale.png') }}"
                                                height="140"
                                                alt="view sales" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- View sales -->

                        <!-- Statistics -->
                        <div class="col-xl-8 col-md-12">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="card-title mb-0">Statistics</h5>
                                    <small class="text-muted">Updated 1 month ago</small>
                                </div>
                                <div class="card-body d-flex align-items-end">
                                    <div class="w-100">
                                        <div class="row gy-3">
                                            <div class="col-md-3 col-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="badge rounded bg-label-primary me-4 p-2">
                                                        <i class="ti ti-chart-pie-2 ti-lg"></i>
                                                    </div>
                                                    <div class="card-info">
                                                        <h5 class="mb-0">230k</h5>
                                                        <small>Sales</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="badge rounded bg-label-info me-4 p-2"><i class="ti ti-users ti-lg"></i></div>
                                                    <div class="card-info">
                                                        <h5 class="mb-0">8.549k</h5>
                                                        <small>Customers</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="badge rounded bg-label-danger me-4 p-2">
                                                        <i class="ti ti-shopping-cart ti-lg"></i>
                                                    </div>
                                                    <div class="card-info">
                                                        <h5 class="mb-0">1.423k</h5>
                                                        <small>Products</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="badge rounded bg-label-success me-4 p-2">
                                                        <i class="ti ti-currency-dollar ti-lg"></i>
                                                    </div>
                                                    <div class="card-info">
                                                        <h5 class="mb-0">$9745</h5>
                                                        <small>Revenue</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics -->

                        <div class="col-xxl-4 col-12">
                            <div class="row g-6">
                                <!-- Profit last month -->
                                <div class="col-xl-6 col-sm-6">
                                    <div class="card h-100">
                                        <div class="card-header pb-0">
                                            <h5 class="card-title mb-1">Profit</h5>
                                            <p class="card-subtitle">Last Month</p>
                                        </div>
                                        <div class="card-body">
                                            <div id="profitLastMonth"></div>
                                            <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                                                <h4 class="mb-0">624k</h4>
                                                <small class="text-success">+8.24%</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Profit last month -->

                                <!-- Expenses -->
                                <div class="col-xl-6 col-sm-6">
                                    <div class="card h-100">
                                        <div class="card-header pb-2">
                                            <h5 class="card-title mb-1">82.5k</h5>
                                            <p class="card-subtitle">Expenses</p>
                                        </div>
                                        <div class="card-body">
                                            <div id="expensesChart"></div>
                                            <div class="mt-3 text-center">
                                                <small class="text-muted mt-3">$21k Expenses more than last month</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Expenses -->

                                <!-- Generated Leads -->
                                <div class="col-xl-12">
                                    <div class="card h-100">
                                        <div class="card-body d-flex justify-content-between">
                                            <div class="d-flex flex-column">
                                                <div class="card-title mb-auto">
                                                    <h5 class="mb-0 text-nowrap">Generated Leads</h5>
                                                    <p class="mb-0">Monthly Report</p>
                                                </div>
                                                <div class="chart-statistics">
                                                    <h3 class="card-title mb-0">4,350</h3>
                                                    <p class="text-success text-nowrap mb-0"><i class="ti ti-chevron-up me-1"></i> 15.8%</p>
                                                </div>
                                            </div>
                                            <div id="generatedLeadsChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Generated Leads -->
                            </div>
                        </div>

                        <!-- Revenue Report -->
                        <div class="col-xxl-8">
                            <div class="card h-100">
                                <div class="card-body p-0">
                                    <div class="row row-bordered g-0">
                                        <div class="col-md-8 position-relative p-6">
                                            <div class="card-header d-inline-block p-0 text-wrap position-absolute">
                                                <h5 class="m-0 card-title">Revenue Report</h5>
                                            </div>
                                            <div id="totalRevenueChart" class="mt-n1"></div>
                                        </div>
                                        <div class="col-md-4 p-4">
                                            <div class="text-center mt-5">
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-label-primary dropdown-toggle"
                                                        type="button"
                                                        id="budgetId"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <script>
                                                            document.write(new Date().getFullYear());
                                                        </script>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetId">
                                                        <a class="dropdown-item prev-year1" href="javascript:void(0);">
                                                            <script>
                                                                document.write(new Date().getFullYear() - 1);
                                                            </script>
                                                        </a>
                                                        <a class="dropdown-item prev-year2" href="javascript:void(0);">
                                                            <script>
                                                                document.write(new Date().getFullYear() - 2);
                                                            </script>
                                                        </a>
                                                        <a class="dropdown-item prev-year3" href="javascript:void(0);">
                                                            <script>
                                                                document.write(new Date().getFullYear() - 3);
                                                            </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="text-center pt-8 mb-0">$25,825</h3>
                                            <p class="mb-8 text-center"><span class="fw-medium text-heading">Budget: </span>56,800</p>
                                            <div class="px-3">
                                                <div id="budgetChart"></div>
                                            </div>
                                            <div class="text-center mt-8">
                                                <button type="button" class="btn btn-primary">Increase Button</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Revenue Report -->

                        <!-- Earning Reports -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="card-title mb-0">
                                        <h5 class="mb-1">Earning Reports</h5>
                                        <p class="card-subtitle">Weekly Earnings Overview</p>
                                    </div>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1"
                                            type="button"
                                            id="earningReports"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="ti ti-dots-vertical ti-md text-muted"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReports">
                                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <ul class="p-0 m-0">
                                        <li class="d-flex align-items-center mb-5">
                                            <div class="me-4">
                                                <span class="badge bg-label-primary rounded p-1_5"><i class="ti ti-chart-pie-2 ti-md"></i></span>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Net Profit</h6>
                                                    <small class="text-body">12.4k Sales</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-4">
                                                    <small>$1,619</small>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <i class="ti ti-chevron-up text-success"></i>
                                                        <small class="text-muted">18.6%</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center mb-5">
                                            <div class="me-4">
                                                <span class="badge bg-label-success rounded p-1_5"><i class="ti ti-currency-dollar ti-md"></i></span>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Total Income</h6>
                                                    <small class="text-body">Sales, Affiliation</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-4">
                                                    <small>$3,571</small>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <i class="ti ti-chevron-up text-success"></i>
                                                        <small class="text-muted">39.6%</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center mb-5">
                                            <div class="me-4">
                                                <span class="badge bg-label-secondary text-body rounded p-1_5"><i class="ti ti-credit-card ti-md"></i></span>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Total Expenses</h6>
                                                    <small class="text-body">ADVT, Marketing</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-4">
                                                    <small>$430</small>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <i class="ti ti-chevron-up text-success"></i>
                                                        <small class="text-muted">52.8%</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div id="reportBarChart"></div>
                                </div>
                            </div>
                        </div>
                        <!--/ Earning Reports -->

                        <!-- Popular Product -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="card-title m-0 me-2">
                                        <h5 class="mb-1">Popular Products</h5>
                                        <p class="card-subtitle">Total 10.4k Visitors</p>
                                    </div>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1"
                                            type="button"
                                            id="popularProduct"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="ti ti-dots-vertical ti-md text-muted"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularProduct">
                                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="p-0 m-0">
                                        <li class="d-flex mb-6">
                                            <div class="me-4">
                                                <img src="{{ asset('img/products/iphone.png') }}" alt="User" class="rounded" width="46" />
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Apple iPhone 13</h6>
                                                    <small class="text-body d-block">Item: #FXZ-4567</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <p class="mb-0">$999.29</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-6">
                                            <div class="me-4">
                                                <img
                                                    src="{{ asset('img/products/nike-air-jordan.png') }}"
                                                    alt="User"
                                                    class="rounded"
                                                    width="46" />
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Nike Air Jordan</h6>
                                                    <small class="text-body d-block">Item: #FXZ-3456</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <p class="mb-0">$72.40</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-6">
                                            <div class="me-4">
                                                <img src="{{ asset('img/products/headphones.png') }}" alt="User" class="rounded" width="46" />
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Beats Studio 2</h6>
                                                    <small class="text-body d-block">Item: #FXZ-9485</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <p class="mb-0">$99</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-6">
                                            <div class="me-4">
                                                <img
                                                    src="{{ asset('img/products/apple-watch.png') }}"
                                                    alt="User"
                                                    class="rounded"
                                                    width="46" />
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Apple Watch Series 7</h6>
                                                    <small class="text-body d-block">Item: #FXZ-2345</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <p class="mb-0">$249.99</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-6">
                                            <div class="me-4">
                                                <img
                                                    src="{{ asset('img/products/amazon-echo.png') }}"
                                                    alt="User"
                                                    class="rounded"
                                                    width="46" />
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Amazon Echo Dot</h6>
                                                    <small class="text-body d-block">Item: #FXZ-8959</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <p class="mb-0">$79.40</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="me-4">
                                                <img
                                                    src="{{ asset('img/products/play-station.png') }}"
                                                    alt="User"
                                                    class="rounded"
                                                    width="46" />
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Play Station Console</h6>
                                                    <small class="text-body d-block">Item: #FXZ-7892</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <p class="mb-0">$129.48</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/ Popular Product -->

                        <!-- Sales by Countries tabs-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div class="card-title mb-0">
                                        <h5 class="mb-1">Orders by Countries</h5>
                                        <p class="card-subtitle">62 deliveries in progress</p>
                                    </div>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1"
                                            type="button"
                                            id="salesByCountryTabs"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="ti ti-dots-vertical ti-md text-muted"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountryTabs">
                                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="nav-align-top">
                                        <ul class="nav nav-tabs nav-fill rounded-0 timeline-indicator-advanced" role="tablist">
                                            <li class="nav-item">
                                                <button
                                                    type="button"
                                                    class="nav-link active"
                                                    role="tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#navs-justified-new"
                                                    aria-controls="navs-justified-new"
                                                    aria-selected="true">
                                                    New
                                                </button>
                                            </li>
                                            <li class="nav-item">
                                                <button
                                                    type="button"
                                                    class="nav-link"
                                                    role="tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#navs-justified-link-preparing"
                                                    aria-controls="navs-justified-link-preparing"
                                                    aria-selected="false">
                                                    Preparing
                                                </button>
                                            </li>
                                            <li class="nav-item">
                                                <button
                                                    type="button"
                                                    class="nav-link"
                                                    role="tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#navs-justified-link-shipping"
                                                    aria-controls="navs-justified-link-shipping"
                                                    aria-selected="false">
                                                    Shipping
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content border-0 mx-1">
                                            <div class="tab-pane fade show active" id="navs-justified-new" role="tabpanel">
                                                <ul class="timeline mb-0">
                                                    <li class="timeline-item ps-6 border-left-dashed">
                                                        <span
                                                            class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                            <i class="ti ti-circle-check"></i>
                                                        </span>
                                                        <div class="timeline-event ps-1">
                                                            <div class="timeline-header">
                                                                <small class="text-success text-uppercase">sender</small>
                                                            </div>
                                                            <h6 class="my-50">Myrtle Ullrich</h6>
                                                            <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                                                        </div>
                                                    </li>
                                                    <li class="timeline-item ps-6 border-transparent">
                                                        <span
                                                            class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                            <i class="ti ti-map-pin"></i>
                                                        </span>
                                                        <div class="timeline-event ps-1">
                                                            <div class="timeline-header">
                                                                <small class="text-primary text-uppercase">Receiver</small>
                                                            </div>
                                                            <h6 class="my-50">Barry Schowalter</h6>
                                                            <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="border-1 border-light border-top border-dashed my-4"></div>
                                                <ul class="timeline mb-0">
                                                    <li class="timeline-item ps-6 border-left-dashed">
                                                        <span
                                                            class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                            <i class="ti ti-circle-check"></i>
                                                        </span>
                                                        <div class="timeline-event ps-1">
                                                            <div class="timeline-header">
                                                                <small class="text-success text-uppercase">sender</small>
                                                            </div>
                                                            <h6 class="my-50">Veronica Herman</h6>
                                                            <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                                                        </div>
                                                    </li>
                                                    <li class="timeline-item ps-6 border-transparent">
                                                        <span
                                                            class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                            <i class="ti ti-map-pin"></i>
                                                        </span>
                                                        <div class="timeline-event ps-1">
                                                            <div class="timeline-header">
                                                                <small class="text-primary text-uppercase">Receiver</small>
                                                            </div>
                                                            <h6 class="my-50">Helen Jacobs</h6>
                                                            <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="navs-justified-link-preparing" role="tabpanel">
                                                <ul class="timeline mb-0">
                                                    <li class="timeline-item ps-6 border-left-dashed">
                                                        <span
                                                            class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                            <i class="ti ti-circle-check"></i>
                                                        </span>
                                                        <div class="timeline-event ps-1">
                                                            <div class="timeline-header">
                                                                <small class="text-success text-uppercase">sender</small>
                                                            </div>
                                                            <h6 class="my-50">Barry Schowalter</h6>
                                                            <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                                                        </div>
                                                    </li>
                                                    <li class="timeline-item ps-6 border-transparent border-left-dashed">
                                                        <span
                                                            class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                            <i class="ti ti-map-pin"></i>
                                                        </span>
                                                        <div class="timeline-event ps-1">
                                                            <div class="timeline-header">
                                                                <small class="text-primary text-uppercase">Receiver</small>
                                                            </div>
                                                            <h6 class="my-50">Myrtle Ullrich</h6>
                                                            <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="border-1 border-light border-top border-dashed my-4"></div>
                                                <ul class="timeline mb-0">
                                                    <li class="timeline-item ps-6 border-left-dashed">
                                                        <span
                                                            class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                            <i class="ti ti-circle-check"></i>
                                                        </span>
                                                        <div class="timeline-event ps-1">
                                                            <div class="timeline-header">
                                                                <small class="text-success text-uppercase">sender</small>
                                                            </div>
                                                            <h6 class="my-50">Veronica Herman</h6>
                                                            <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                                                        </div>
                                                    </li>
                                                    <li class="timeline-item ps-6 border-transparent">
                                                        <span
                                                            class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                            <i class="ti ti-map-pin"></i>
                                                        </span>
                                                        <div class="timeline-event ps-1">
                                                            <div class="timeline-header">
                                                                <small class="text-primary text-uppercase">Receiver</small>
                                                            </div>
                                                            <h6 class="my-50">Helen Jacobs</h6>
                                                            <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="navs-justified-link-shipping" role="tabpanel">
                                                <ul class="timeline mb-0">
                                                    <li class="timeline-item ps-6 border-left-dashed">
                                                        <span
                                                            class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                            <i class="ti ti-circle-check"></i>
                                                        </span>
                                                        <div class="timeline-event ps-1">
                                                            <div class="timeline-header">
                                                                <small class="text-success text-uppercase">sender</small>
                                                            </div>
                                                            <h6 class="my-50">Veronica Herman</h6>
                                                            <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                                                        </div>
                                                    </li>
                                                    <li class="timeline-item ps-6 border-transparent">
                                                        <span
                                                            class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                            <i class="ti ti-map-pin"></i>
                                                        </span>
                                                        <div class="timeline-event ps-1">
                                                            <div class="timeline-header">
                                                                <small class="text-primary text-uppercase">Receiver</small>
                                                            </div>
                                                            <h6 class="my-50">Barry Schowalter</h6>
                                                            <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="border-1 border-light border-top border-dashed my-4"></div>
                                                <ul class="timeline mb-0">
                                                    <li class="timeline-item ps-6 border-left-dashed">
                                                        <span
                                                            class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                            <i class="ti ti-circle-check"></i>
                                                        </span>
                                                        <div class="timeline-event ps-1">
                                                            <div class="timeline-header">
                                                                <small class="text-success text-uppercase">sender</small>
                                                            </div>
                                                            <h6 class="my-50">Myrtle Ullrich</h6>
                                                            <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                                                        </div>
                                                    </li>
                                                    <li class="timeline-item ps-6 border-transparent">
                                                        <span
                                                            class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                            <i class="ti ti-map-pin"></i>
                                                        </span>
                                                        <div class="timeline-event ps-1">
                                                            <div class="timeline-header">
                                                                <small class="text-primary text-uppercase">Receiver</small>
                                                            </div>
                                                            <h6 class="my-50">Helen Jacobs</h6>
                                                            <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Sales by Countries tabs -->

                        <!-- Transactions -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="card-title m-0 me-2">
                                        <h5 class="mb-1">Transactions</h5>
                                        <p class="card-subtitle">Total 58 Transactions done in this Month</p>
                                    </div>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1"
                                            type="button"
                                            id="transactionID"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="ti ti-dots-vertical ti-md text-muted"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="p-0 m-0">
                                        <li class="d-flex mb-3 pb-1 align-items-center">
                                            <div class="badge bg-label-primary me-4 rounded p-1_5">
                                                <i class="ti ti-wallet ti-md"></i>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Wallet</h6>
                                                    <small class="text-body d-block">Starbucks</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <h6 class="mb-0 text-danger">-$75</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-3 pb-1 align-items-center">
                                            <div class="badge bg-label-success me-4 rounded p-1_5">
                                                <i class="ti ti-browser-check ti-md"></i>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Bank Transfer</h6>
                                                    <small class="text-body d-block">Add Money</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <h6 class="mb-0 text-success">+$480</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-3 pb-1 align-items-center">
                                            <div class="badge bg-label-danger me-4 rounded p-1_5">
                                                <i class="ti ti-brand-paypal ti-md"></i>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Paypal</h6>
                                                    <small class="text-body d-block">Client Payment</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <h6 class="mb-0 text-success">+$268</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-3 pb-1 align-items-center">
                                            <div class="badge bg-label-secondary me-4 rounded p-1_5">
                                                <i class="ti ti-credit-card ti-md"></i>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Master Card</h6>
                                                    <small class="text-body d-block">Ordered iPhone 13</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <h6 class="mb-0 text-danger">-$699</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-3 pb-1 align-items-center">
                                            <div class="badge bg-label-info me-4 rounded p-1_5">
                                                <i class="ti ti-currency-dollar ti-md"></i>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Bank Transactions</h6>
                                                    <small class="text-body d-block">Refund</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <h6 class="mb-0 text-success">+$98</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-3 pb-1 align-items-center">
                                            <div class="badge bg-label-danger me-4 rounded p-1_5">
                                                <i class="ti ti-brand-paypal ti-md"></i>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Paypal</h6>
                                                    <small class="text-body d-block">Client Payment</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <h6 class="mb-0 text-success">+$126</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="badge bg-label-success me-4 rounded p-1_5">
                                                <i class="ti ti-building-bank ti-md"></i>
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Bank Transfer</h6>
                                                    <small class="text-body d-block">Pay Office Rent</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <h6 class="mb-0 text-danger">-$1290</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/ Transactions -->

                        <!-- Invoice table -->
                        <div class="col-xxl-8">
                            <div class="card">
                                <div class="card-datatable table-responsive">
                                    <table class="table table-sm datatable-invoice border-top">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>#</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Issued Date</th>
                                                <th>Invoice Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice table -->
                    </div>
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
