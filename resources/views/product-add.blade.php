@extends('layouts.app')

@section('title', 'Agregar Producto - VentasFix')

@section('content')

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


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
                        <li class="menu-item">
                            <a href="{{ route('dashboard') }}" class="menu-link">
                                <div data-i18n="Dashboard">Dashboard</div>
                            </a>
                        </li>
                        <li class="menu-item active open">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <div data-i18n="Productos">Productos</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('productos.index') }}" class="menu-link">
                                        <div data-i18n="Lista de Productos">Lista de Productos</div>
                                    </a>
                                </li>
                                <li class="menu-item active">
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
                <!-- Academy menu start -->
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
                    <div class="app-ecommerce">
                        <!-- Add Product -->
                        <div
                            class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                            <div class="d-flex flex-column justify-content-center">
                                <h4 class="mb-1">Add a new Product</h4>
                                <p class="mb-0">Orders placed across your store</p>
                            </div>
                            <div class="d-flex align-content-center flex-wrap gap-4">
                                <div class="d-flex gap-4">
                                    <button class="btn btn-label-secondary">Discard</button>
                                    <button class="btn btn-label-primary">Save draft</button>
                                </div>
                                <button type="submit" class="btn btn-primary">Publish product</button>
                            </div>
                        </div>

                        <div class="row">
                            <!-- First column-->
                            <div class="col-12 col-lg-8">
                                <!-- Product Information -->
                                <div class="card mb-6">
                                    <div class="card-header">
                                        <h5 class="card-tile mb-0">Product information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-6">
                                            <label class="form-label" for="ecommerce-product-name">Name</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="ecommerce-product-name"
                                                placeholder="Product title"
                                                name="productTitle"
                                                aria-label="Product title" />
                                        </div>
                                        <div class="row mb-6">
                                            <div class="col">
                                                <label class="form-label" for="ecommerce-product-sku">SKU</label>
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    id="ecommerce-product-sku"
                                                    placeholder="SKU"
                                                    name="productSku"
                                                    aria-label="Product SKU" />
                                            </div>
                                            <div class="col">
                                                <label class="form-label" for="ecommerce-product-barcode">Barcode</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-barcode"
                                                    placeholder="0123-4567"
                                                    name="productBarcode"
                                                    aria-label="Product barcode" />
                                            </div>
                                        </div>
                                        <!-- Description -->
                                        <div>
                                            <label class="mb-1">Description (Optional)</label>
                                            <div class="form-control p-0">
                                                <div class="comment-toolbar border-0 border-bottom">
                                                    <div class="d-flex justify-content-start">
                                                        <span class="ql-formats me-0">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                            <button class="ql-list" value="ordered"></button>
                                                            <button class="ql-list" value="bullet"></button>
                                                            <button class="ql-link"></button>
                                                            <button class="ql-image"></button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="comment-editor border-0 pb-6" id="ecommerce-category-description"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product Information -->
                                <!-- Media -->
                                <div class="card mb-6">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 card-title">Product Image</h5>
                                        <a href="javascript:void(0);" class="fw-medium">Add media from URL</a>
                                    </div>
                                    <div class="card-body">
                                        <form action="/upload" class="dropzone needsclick p-0" id="dropzone-basic">
                                            <div class="dz-message needsclick">
                                                <p class="h4 needsclick pt-3 mb-2">Drag and drop your image here</p>
                                                <p class="h6 text-muted d-block fw-normal mb-2">or</p>
                                                <span class="note needsclick btn btn-sm btn-label-primary" id="btnBrowse">Browse image</span>
                                            </div>
                                            <div class="fallback">
                                                <input name="file" type="file" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /Media -->
                                <!-- Variants -->
                                <div class="card mb-6">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Variants</h5>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-repeater">
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item>
                                                    <div class="row">
                                                        <div class="mb-6 col-4">
                                                            <label class="form-label" for="form-repeater-1-1">Options</label>
                                                            <select id="form-repeater-1-1" class="select2 form-select" data-placeholder="Size">
                                                                <option value="">Size</option>
                                                                <option value="size">Size</option>
                                                                <option value="color">Color</option>
                                                                <option value="weight">Weight</option>
                                                                <option value="smell">Smell</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-6 col-8">
                                                            <label class="form-label invisible" for="form-repeater-1-2">Not visible</label>
                                                            <input
                                                                type="number"
                                                                id="form-repeater-1-2"
                                                                class="form-control"
                                                                placeholder="Enter size" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="btn btn-primary" data-repeater-create>
                                                    <i class="ti ti-plus ti-xs me-2"></i>
                                                    Add another option
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /Variants -->
                                <!-- Inventory -->
                                <div class="card mb-6">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Inventory</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Navigation -->
                                            <div class="col-12 col-md-4 col-xl-5 col-xxl-4 mx-auto card-separator">
                                                <div class="d-flex justify-content-between flex-column mb-4 mb-md-0 pe-md-4">
                                                    <div class="nav-align-left">
                                                        <ul class="nav nav-pills flex-column w-100">
                                                            <li class="nav-item">
                                                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#restock">
                                                                    <i class="ti ti-box ti-sm me-1_5"></i>
                                                                    <span class="align-middle">Restock</span>
                                                                </button>
                                                            </li>
                                                            <li class="nav-item">
                                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#shipping">
                                                                    <i class="ti ti-car ti-sm me-1_5"></i>
                                                                    <span class="align-middle">Shipping</span>
                                                                </button>
                                                            </li>
                                                            <li class="nav-item">
                                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#global-delivery">
                                                                    <i class="ti ti-world ti-sm me-1_5"></i>
                                                                    <span class="align-middle">Global Delivery</span>
                                                                </button>
                                                            </li>
                                                            <li class="nav-item">
                                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#attributes">
                                                                    <i class="ti ti-link ti-sm me-1_5"></i>
                                                                    <span class="align-middle">Attributes</span>
                                                                </button>
                                                            </li>
                                                            <li class="nav-item">
                                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#advanced">
                                                                    <i class="ti ti-lock ti-sm me-1_5"></i>
                                                                    <span class="align-middle">Advanced</span>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Navigation -->
                                            <!-- Options -->
                                            <div class="col-12 col-md-8 col-xl-7 col-xxl-8 pt-6 pt-md-0">
                                                <div class="tab-content p-0 ps-md-4">
                                                    <!-- Restock Tab -->
                                                    <div class="tab-pane fade show active" id="restock" role="tabpanel">
                                                        <h6 class="text-body">Options</h6>
                                                        <label class="form-label" for="ecommerce-product-stock">Add to Stock</label>
                                                        <div class="row mb-4 g-4 pe-md-4">
                                                            <div class="col-12 col-sm-9">
                                                                <input
                                                                    type="number"
                                                                    class="form-control"
                                                                    id="ecommerce-product-stock"
                                                                    placeholder="Quantity"
                                                                    name="quantity"
                                                                    aria-label="Quantity" />
                                                            </div>
                                                            <div class="col-12 col-sm-3">
                                                                <button class="btn btn-primary">Confirm</button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-2 fw-normal">Product in stock now: 54</h6>
                                                            <h6 class="mb-2 fw-normal">Product in transit: 390</h6>
                                                            <h6 class="mb-2 fw-normal">Last time restocked: 24th June, 2023</h6>
                                                            <h6 class="mb-0 fw-normal">Total stock over lifetime: 2430</h6>
                                                        </div>
                                                    </div>
                                                    <!-- Shipping Tab -->
                                                    <div class="tab-pane fade" id="shipping" role="tabpanel">
                                                        <h6 class="mb-3 text-body">Shipping Type</h6>
                                                        <div>
                                                            <div class="form-check mb-4">
                                                                <input class="form-check-input" type="radio" name="shippingType" id="seller" />
                                                                <label class="form-check-label" for="seller">
                                                                    <span class="mb-1 h6">Fulfilled by Seller</span><br />
                                                                    <small>You'll be responsible for product delivery.<br />
                                                                        Any damage or delay during shipping may cost you a Damage fee.</small>
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-6">
                                                                <input
                                                                    class="form-check-input"
                                                                    type="radio"
                                                                    name="shippingType"
                                                                    id="companyName"
                                                                    checked />
                                                                <label class="form-check-label" for="companyName">
                                                                    <span class="mb-1 h6">Fulfilled by Company name &nbsp;<span
                                                                            class="badge rounded-2 badge-warning bg-label-warning fs-tiny py-1">RECOMMENDED</span></span><br />
                                                                    <small>Your product, Our responsibility.<br />
                                                                        For a measly fee, we will handle the delivery process for you.</small>
                                                                </label>
                                                            </div>
                                                            <p class="mb-0">
                                                                See our <a href="javascript:void(0);">Delivery terms and conditions</a> for details
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- Global Delivery Tab -->
                                                    <div class="tab-pane fade" id="global-delivery" role="tabpanel">
                                                        <h6 class="mb-3 text-body">Global Delivery</h6>
                                                        <!-- Worldwide delivery -->
                                                        <div class="form-check mb-4">
                                                            <input class="form-check-input" type="radio" name="globalDel" id="worldwide" />
                                                            <label class="form-check-label" for="worldwide">
                                                                <span class="mb-1 h6">Worldwide delivery</span><br />
                                                                <small>Only available with Shipping method:
                                                                    <a href="javascript:void(0);">Fulfilled by Company name</a></small>
                                                            </label>
                                                        </div>
                                                        <!-- Global delivery -->
                                                        <div class="form-check mb-4">
                                                            <input class="form-check-input" type="radio" name="globalDel" checked />
                                                            <label class="form-check-label w-75 pe-12" for="country-selected">
                                                                <span class="mb-2 h6">Selected Countries</span>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Type Country name"
                                                                    id="country-selected" />
                                                            </label>
                                                        </div>
                                                        <!-- Local delivery -->
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="globalDel" id="local" />
                                                            <label class="form-check-label" for="local">
                                                                <span class="mb-1 h6">Local delivery</span><br />
                                                                <small>Deliver to your country of residence :
                                                                    <a href="javascript:void(0);">Change profile address</a></small>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- Attributes Tab -->
                                                    <div class="tab-pane fade" id="attributes" role="tabpanel">
                                                        <h6 class="mb-2 text-body">Attributes</h6>
                                                        <div>
                                                            <!-- Fragile Product -->
                                                            <div class="form-check mb-4">
                                                                <input class="form-check-input" type="checkbox" value="fragile" id="fragile" />
                                                                <label class="form-check-label" for="fragile">
                                                                    <span class="fw-medium">Fragile Product</span>
                                                                </label>
                                                            </div>
                                                            <!-- Biodegradable -->
                                                            <div class="form-check mb-4">
                                                                <input
                                                                    class="form-check-input"
                                                                    type="checkbox"
                                                                    value="biodegradable"
                                                                    id="biodegradable" />
                                                                <label class="form-check-label" for="biodegradable">
                                                                    <span class="fw-medium">Biodegradable</span>
                                                                </label>
                                                            </div>
                                                            <!-- Frozen Product -->
                                                            <div class="form-check mb-4">
                                                                <input class="form-check-input" type="checkbox" value="frozen" checked />
                                                                <label class="form-check-label w-75 pe-12" for="frozen">
                                                                    <span class="mb-1 h6">Frozen Product</span>
                                                                    <input
                                                                        type="number"
                                                                        class="form-control"
                                                                        placeholder="Max. allowed Temperature"
                                                                        id="frozen" />
                                                                </label>
                                                            </div>
                                                            <!-- Exp Date -->
                                                            <div class="form-check mb-6">
                                                                <input
                                                                    class="form-check-input"
                                                                    type="checkbox"
                                                                    value="expDate"
                                                                    id="expDate"
                                                                    checked />
                                                                <label class="form-check-label w-75 pe-12" for="date-input">
                                                                    <span class="mb-1 h6">Expiry Date of Product</span>
                                                                    <input type="date" class="product-date form-control" id="date-input" />
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Attributes Tab -->
                                                    <!-- Advanced Tab -->
                                                    <div class="tab-pane fade" id="advanced" role="tabpanel">
                                                        <h6 class="mb-3 text-body">Advanced</h6>
                                                        <div class="row">
                                                            <!-- Product Id Type -->
                                                            <div class="col">
                                                                <label class="form-label" for="product-id">
                                                                    <span class="mb-1 h6">Product ID Type</span>
                                                                </label>
                                                                <select id="product-id" class="select2 form-select" data-placeholder="ISBN">
                                                                    <option value="">ISBN</option>
                                                                    <option value="ISBN">ISBN</option>
                                                                    <option value="UPC">UPC</option>
                                                                    <option value="EAN">EAN</option>
                                                                    <option value="JAN">JAN</option>
                                                                </select>
                                                            </div>
                                                            <!-- Product Id -->
                                                            <div class="col">
                                                                <label class="form-label" for="product-id-1">
                                                                    <span class="mb-1 h6">Product ID</span>
                                                                </label>
                                                                <input
                                                                    type="number"
                                                                    id="product-id-1"
                                                                    class="form-control"
                                                                    placeholder="ISBN Number" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Advanced Tab -->
                                                </div>
                                            </div>
                                            <!-- /Options-->
                                        </div>
                                    </div>
                                </div>
                                <!-- /Inventory -->
                            </div>
                            <!-- /Second column -->

                            <!-- Second column -->
                            <div class="col-12 col-lg-4">
                                <!-- Pricing Card -->
                                <div class="card mb-6">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Pricing</h5>
                                    </div>
                                    <div class="card-body">
                                        <!-- Base Price -->
                                        <div class="mb-6">
                                            <label class="form-label" for="ecommerce-product-price">Base Price</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                id="ecommerce-product-price"
                                                placeholder="Price"
                                                name="productPrice"
                                                aria-label="Product price" />
                                        </div>
                                        <!-- Discounted Price -->
                                        <div class="mb-6">
                                            <label class="form-label" for="ecommerce-product-discount-price">Discounted Price</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                id="ecommerce-product-discount-price"
                                                placeholder="Discounted Price"
                                                name="productDiscountedPrice"
                                                aria-label="Product discounted price" />
                                        </div>
                                        <!-- Charge tax check box -->
                                        <div class="form-check ms-2 mt-2 mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="price-charge-tax" checked />
                                            <label class="switch-label" for="price-charge-tax"> Charge tax on this product </label>
                                        </div>
                                        <!-- Instock switch -->
                                        <div class="d-flex justify-content-between align-items-center border-top pt-2">
                                            <span class="mb-0">In stock</span>
                                            <div class="w-25 d-flex justify-content-end">
                                                <div class="form-check form-switch me-n3">
                                                    <input type="checkbox" class="form-check-input" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Pricing Card -->
                                <!-- Organize Card -->
                                <div class="card mb-6">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Organize</h5>
                                    </div>
                                    <div class="card-body">
                                        <!-- Vendor -->
                                        <div class="mb-6 col ecommerce-select2-dropdown">
                                            <label class="form-label mb-1" for="vendor"> Vendor </label>
                                            <select id="vendor" class="select2 form-select" data-placeholder="Select Vendor">
                                                <option value="">Select Vendor</option>
                                                <option value="men-clothing">Men's Clothing</option>
                                                <option value="women-clothing">Women's-clothing</option>
                                                <option value="kid-clothing">Kid's-clothing</option>
                                            </select>
                                        </div>
                                        <!-- Category -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mb-6 col ecommerce-select2-dropdown">
                                                <label class="form-label mb-1" for="category-org">
                                                    <span>Category</span>
                                                </label>
                                                <select id="category-org" class="select2 form-select" data-placeholder="Select Category">
                                                    <option value="">Select Category</option>
                                                    <option value="Household">Household</option>
                                                    <option value="Management">Management</option>
                                                    <option value="Electronics">Electronics</option>
                                                    <option value="Office">Office</option>
                                                    <option value="Automotive">Automotive</option>
                                                </select>
                                            </div>
                                            <a href="javascript:void(0);" class="fw-medium btn btn-icon btn-label-primary ms-4"><i class="ti ti-plus ti-md"></i></a>
                                        </div>
                                        <!-- Collection -->
                                        <div class="mb-6 col ecommerce-select2-dropdown">
                                            <label class="form-label mb-1" for="collection">Collection </label>
                                            <select id="collection" class="select2 form-select" data-placeholder="Collection">
                                                <option value="">Collection</option>
                                                <option value="men-clothing">Men's Clothing</option>
                                                <option value="women-clothing">Women's-clothing</option>
                                                <option value="kid-clothing">Kid's-clothing</option>
                                            </select>
                                        </div>
                                        <!-- Status -->
                                        <div class="mb-6 col ecommerce-select2-dropdown">
                                            <label class="form-label mb-1" for="status-org">Status </label>
                                            <select id="status-org" class="select2 form-select" data-placeholder="Published">
                                                <option value="">Published</option>
                                                <option value="Published">Published</option>
                                                <option value="Scheduled">Scheduled</option>
                                                <option value="Inactive">Inactive</option>
                                            </select>
                                        </div>
                                        <!-- Tags -->
                                        <div>
                                            <label for="ecommerce-product-tags" class="form-label mb-1">Tags</label>
                                            <input
                                                id="ecommerce-product-tags"
                                                class="form-control"
                                                name="ecommerce-product-tags"
                                                value="Normal,Standard,Premium"
                                                aria-label="Product Tags" />
                                        </div>
                                    </div>
                                </div>
                                <!-- /Organize Card -->
                            </div>
                            <!-- /Second column -->
                        </div>
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
