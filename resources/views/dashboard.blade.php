@extends('layouts.app')
@section('content')

<div class="content container-fluid">

    <div class="row">
        <div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
            <div class="card inovices-card w-100">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="inovices-widget-icon bg-info-light">
                            <img src="assets/img/icons/receipt-item.svg" alt="invoice">
                        </span>
                        <div class="dash-count">
                            <div class="dash-title">Total Importation</div>
                            <div class="dash-counts">
                                <p>298</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="inovices-all">En cours <span class="rounded-circle bg-light-gray">02</span></p>
                        <p class="inovice-trending text-success-light">02 <span class="ms-2"><i class="fe fe-trending-up"></i></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
            <div class="card inovices-card w-100">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="inovices-widget-icon bg-primary-light">
                            <img src="assets/img/icons/transaction-minus.svg" alt="invoice">
                        </span>
                        <div class="dash-count">
                            <div class="dash-title">Total exportation</div>
                            <div class="dash-counts">
                                <p>325</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="inovices-all">En cours <span class="rounded-circle bg-light-gray">03</span></p>
                        <p class="inovice-trending text-success-light">04 <span class="ms-2"><i class="fe fe-trending-up"></i></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
            <div class="card inovices-card w-100">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="inovices-widget-icon bg-warning-light">
                            <img src="assets/img/icons/archive-book.svg" alt="archivebook">
                        </span>
                        <div class="dash-count">
                            <div class="dash-title">Total Mission</div>
                            <div class="dash-counts">
                                <p>50</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="inovices-all">En cours <span class="rounded-circle bg-light-gray">01</span></p>
                        <p class="inovice-trending text-danger-light">03 <span class="ms-2"><i class="fe fe-trending-down"></i></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
            <div class="card inovices-card w-100">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="inovices-widget-icon bg-primary-light">
                            <img src="assets/img/icons/clipboard-close.svg" alt="clipboard">
                        </span>
                        <div class="dash-count">
                            <div class="dash-title">Total transporteur</div>
                            <div class="dash-counts">
                                <p>100</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="inovices-all">En cours <span class="rounded-circle bg-light-gray">04</span></p>
                        <p class="inovice-trending text-danger-light">05 <span class="ms-2"><i class="fe fe-trending-down"></i></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
            <div class="card inovices-card w-100">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="inovices-widget-icon bg-green-light">
                            <img src="assets/img/icons/message-edit.svg" alt="message">
                        </span>
                        <div class="dash-count">
                            <div class="dash-title">Total Port</div>
                            <div class="dash-counts">
                                <p>5</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="inovices-all">En cours <span class="rounded-circle bg-light-gray">06</span></p>
                        <p class="inovice-trending text-danger-light">02 <span class="ms-2"><i class="fe fe-trending-down"></i></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
            <div class="card inovices-card w-100">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="inovices-widget-icon bg-danger-light">
<img src="assets/img/icons/3d-rotate.svg" alt="invoice">
</span>
                        <div class="dash-count">
                            <div class="dash-title">Total Clients </div>
                            <div class="dash-counts">
                                <p>86</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="inovices-all">En cours <span class="rounded-circle bg-light-gray">03</span></p>
                        <p class="inovice-trending text-success-light">02 <span class="ms-2"><i class="fe fe-trending-up"></i></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="card mb-0">
                <div class="card-header">
                    <div class="row align-center">
                        <div class="col">
                            <h5 class="card-title">DERNIERE CONNEXION DES USERS </h5>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn-right btn btn-sm btn-outline-primary">
View All
</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">


                    </div>
                    <div class="table-responsive">
                        <table class="table table-stripped table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Noms</th>
                                    <th>Fonction</th>
                                    <th>Heure & Date</th>

                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>GASTON DELIMOND</td>
                                    <td>Technicien</td>
                                    <td><span class="badge bg-success-light">04/07/2024 11h13</span></td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>Voir Mission</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>

                                    <td>MABUKI LEBO </td>
                                    <td>Technicien</td>
                                    <td><span class="badge bg-success-light">04/07/2024 10h13</span></td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>Voir Mission</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="card mb-0">
                <div class="card-header">
                    <div class="row align-center">
                        <div class="col">
                            <h5 class="card-title">ETATS DES MISSIONS</h5>
                        </div>
                        <div class="col-auto">
                            <a href="invoice-details.html" class="btn-right btn btn-sm btn-outline-primary">
View All
</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="progress progress-md rounded-pill mb-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 39%" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 26%" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <i class="fas fa-circle text-success me-1"></i> Mission accomplie
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-circle text-warning me-1"></i> Mission en cours
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-circle text-danger me-1"></i> Mission expirée
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Mission</th>
                                    <th>Executant</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Déchargement conteneur
                                    </td>
                                    <td>DELIMOND</td>
                                    <td>04/07/2024</td>
                                    <td><span class="badge bg-warning-light text-warning">En cours</span></td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>Voir plus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Chargement conteneur
                                    </td>
                                    <td>DELIMOND</td>
                                    <td>04/07/2024</td>
                                    <td><span class="badge bg-success-light">Fait</span></td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>Voir plus</a>
                                            </div>
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
    {{-- <div class="content container-fluid pb-0">
        <div class="page-header">
            <div class="content-page-header">
                <h5>Dashboard</h5>
            </div>
        </div>

        <div class="super-admin-dashboard">
            <div class="row">
                <div class="col-xl-5 d-flex">
                    <div class="dash-user-card w-100">
                        <h4><i class="fe fe-sun"></i>Good Morning, John</h4>
                        <p>14 New Companies Subscribed Today</p>
                        <div class="dash-btns">
                            <a href="companies.html" class="btn view-company-btn">View Companies</a>
                            <a href="packages.html" class="btn view-package-btn">All Packages</a>
                        </div>
                        <div class="dash-img">
                            <img src="assets/img/dashboard-card-img.png" alt>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 d-flex p-0">
                    <div class="row dash-company-row w-100 m-0">
                        <div class="col-lg-3 col-sm-6 d-flex">
                            <div class="company-detail-card w-100">
                                <div class="company-icon">
                                    <img src="assets/img/icons/dash-card-icon-01.svg" alt>
                                </div>
                                <div class="dash-comapny-info">
                                    <h6>Total Companies</h6>
                                    <h5>987</h5>
                                    <p><span>14% <i class="fe fe-chevrons-up"></i></span>Last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 d-flex">
                            <div class="company-detail-card bg-info-light w-100">
                                <div class="company-icon">
                                    <img src="assets/img/icons/dash-card-icon-02.svg" alt>
                                </div>
                                <div class="dash-comapny-info">
                                    <h6>Active Companies</h6>
                                    <h5>154</h5>
                                    <p><span>1% <i class="fe fe-chevrons-up"></i></span>Last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 d-flex">
                            <div class="company-detail-card bg-pink-light w-100">
                                <div class="company-icon">
                                    <img src="assets/img/icons/dash-card-icon-03.svg" alt>
                                </div>
                                <div class="dash-comapny-info">
                                    <h6>Inactive Company</h6>
                                    <h5>2</h5>
                                    <p><span>2% <i class="fe fe-chevrons-up"></i></span>Last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 d-flex">
                            <div class="company-detail-card bg-success-light w-100">
                                <div class="company-icon">
                                    <img src="assets/img/icons/dash-card-icon-04.svg" alt>
                                </div>
                                <div class="dash-comapny-info">
                                    <h6>Total Active Plans</h6>
                                    <h5>6</h5>
                                    <p><span>6% <i class="fe fe-chevrons-up"></i></span>Last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 d-flex">
                    <div class="card super-admin-dash-card">
                        <div class="card-header">
                            <div class="row align-center">
                                <div class="col">
                                    <h5 class="card-title">Latest Registered Companies</h5>
                                </div>
                                <div class="col-auto">
                                    <a href="companies.html" class="btn-right btn btn-sm btn-outline-primary">
                                        View All
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-stripped table-hover">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-01.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Hermann Groups <span
                                                            class="plane-type">Basic (Monthly)</span></a>
                                                </h2>
                                            </td>
                                            <td>24 Feb 2024</td>
                                            <td class="text-end"><a href="companies.html" class="view-companies btn">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-02.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Skiles LLC <span
                                                            class="plane-type">Enterprise (Yearly)</span></a>
                                                </h2>
                                            </td>
                                            <td>23 Feb 2024</td>
                                            <td class="text-end"><a href="companies.html" class="view-companies btn">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-03.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Kerluke Group <span
                                                            class="plane-type">Advanced (Monthly)</span></a>
                                                </h2>
                                            </td>
                                            <td>22 Feb 2024</td>
                                            <td class="text-end"><a href="companies.html" class="view-companies btn">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-04.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Schowalter Group <span
                                                            class="plane-type">Basic (Yearly)</span></a>
                                                </h2>
                                            </td>
                                            <td>21 Feb 2024</td>
                                            <td class="text-end"><a href="companies.html" class="view-companies btn">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-05.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Accentric Global <span
                                                            class="plane-type">Basic (Monthly)</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Feb 2024</td>
                                            <td class="text-end"><a href="companies.html" class="view-companies btn">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 d-flex">
                    <div class="card super-admin-dash-card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Earnings </h5>
                                <div class="d-flex align-center">
                                    <span class="earning-income-text"><i></i>Income</span>
                                    <div class="dropdown main">
                                        <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            2024
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2023</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="earnings-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 d-flex">
                    <div class="card super-admin-dash-card flex-fill">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Most Ordered Plan</h5>
                                <div class="dropdown main">
                                    <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                        This Month
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">This Week</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">This Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="dash-plane-list">
                                <div class="plane-info">
                                    <span class="icon-plane"><img
                                            src="assets/img/icons/dashboard-plane-icon.svg" alt></span>
                                    <div class="plane-name">Enterprise <span>(Monthly)</span>
                                        <h6>Total Order : 201</h6>
                                    </div>
                                </div>
                                <span class="plane-rate">$549.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 d-flex">
                    <div class="card super-admin-dash-card flex-fill">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Top Company with Plan</h5>
                                <div class="dropdown main">
                                    <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                        Today
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">This Month</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">This Week</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">This Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="dash-plane-list">
                                <div class="plane-info">
                                    <span class="icon-company"><img src="assets/img/companies/company-01.svg"
                                            alt></span>
                                    <span class="name-company">Hermann Groups</span>
                                </div>
                                <span class="plane-rate">10 Plans</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 d-flex">
                    <div class="card super-admin-dash-card flex-fill">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Most Domains</h5>
                                <div class="dropdown main">
                                    <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                                        This Week
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">This Month</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">This Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="dash-plane-list">
                                <div class="plane-info">
                                    <span class="icon-company"><img src="assets/img/companies/company-04.svg"
                                            alt></span>
                                    <div class="plane-name"><span>Schowalter Group</span>
                                        <h6>sk.example.com</h6>
                                    </div>
                                </div>
                                <span class="plane-rate">150 Users</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-flex">
                    <div class="card super-admin-dash-card">
                        <div class="card-header">
                            <div class="row align-center">
                                <div class="col">
                                    <h5 class="card-title">Recent Invoices</h5>
                                </div>
                                <div class="col-auto">
                                    <a href="invoices.html" class="btn-right btn btn-sm btn-outline-primary">
                                        View All
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-stripped table-hover">
                                    <tbody>
                                        <tr>
                                            <td><a href="invoice-details.html" class="invoice-link dash-incoice-table">#INV12454</a><span class="dash-incoice-date">15 Feb 2024</span></td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-01.svg" alt="Company Image">
                                                    </a>
                                                    <a href="companies.html">Hermann Groups</a>
                                                </h2>
                                            </td>
                                            <td>Basic <br> <span class="plane-type">(Monthly)</span></td>
                                            <td><span class="badge bg-success-light d-inline-flex align-items-center"><i
                                                        class="fe fe-check me-1"></i>Paid</span></td>
                                            <td class="text-end"><a href="invoice-subscription.html" class="invoice-detail"><i class="fe fe-file-text"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice-details.html" class="invoice-link dash-incoice-table">#INV45445</a><span class="dash-incoice-date">14 Feb 2024</span></td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-02.svg" alt="Company Image">
                                                    </a>
                                                    <a href="companies.html">Skiles LLC</a>
                                                </h2>
                                            </td>
                                            <td>Enterprise <br> <span class="plane-type">(Yearly)</span></td>
                                            <td><span class="badge bg-danger-light d-inline-flex align-items-center"><i
                                                        class="fe fe-x me-1"></i>Unpaid</span></td>
                                            <td class="text-end"><a href="invoice-subscription.html" class="invoice-detail"><i class="fe fe-file-text"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice-details.html" class="invoice-link dash-incoice-table">#INV78444</a><span class="dash-incoice-date">13 Feb 2024</span></td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-03.svg" alt="Company Image">
                                                    </a>
                                                    <a href="companies.html">Kerluke Group</a>
                                                </h2>
                                            </td>
                                            <td>Advanced <br> <span class="plane-type">(Monthly)</span></td>
                                            <td><span class="badge bg-success-light d-inline-flex align-items-center"><i
                                                        class="fe fe-check me-1"></i>Paid</span></td>
                                            <td class="text-end"><a href="invoice-subscription.html" class="invoice-detail"><i class="fe fe-file-text"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice-details.html" class="invoice-link dash-incoice-table">#INV31454</a><span class="dash-incoice-date">12 Feb 2024</span></td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-04.svg" alt="Company Image">
                                                    </a>
                                                    <a href="companies.html">Schowalter Group</a>
                                                </h2>
                                            </td>
                                            <td>Basic <br> <span class="plane-type">(Yearly)</span></td>
                                            <td><span class="badge bg-success-light d-inline-flex align-items-center"><i
                                                        class="fe fe-check me-1"></i>Paid</span></td>
                                            <td class="text-end"><a href="invoice-subscription.html" class="invoice-detail"><i class="fe fe-file-text"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice-details.html" class="invoice-link dash-incoice-table">#INV74878</a><span class="dash-incoice-date">11 Feb 2024</span></td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-05.svg" alt="Company Image">
                                                    </a>
                                                    <a href="companies.html">Accentric Global</a>
                                                </h2>
                                            </td>
                                            <td>Basic <br> <span class="plane-type">(Monthly)</span></td>
                                            <td><span class="badge bg-success-light d-inline-flex align-items-center"><i
                                                        class="fe fe-check me-1"></i>Paid</span></td>
                                            <td class="text-end"><a href="invoice-subscription.html" class="invoice-detail"><i class="fe fe-file-text"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-flex">
                    <div class="card super-admin-dash-card">
                        <div class="card-header">
                            <div class="row align-center">
                                <div class="col">
                                    <h5 class="card-title">Top Plans</h5>
                                </div>
                                <div class="col-auto">
                                    <a href="packages.html" class="btn-right btn btn-sm btn-outline-primary">
                                        View All
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="plane-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 d-flex">
                    <div class="card super-admin-dash-card">
                        <div class="card-header">
                            <div class="row align-center">
                                <div class="col">
                                    <h5 class="card-title">Recent Plan Expired</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-stripped table-hover">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-01.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Hermann Groups <span
                                                            class="plane-type">Basic (Monthly)</span></a>
                                                </h2>
                                            </td>
                                            <td class="expired-date">Expired On <br>24 Feb 2024</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-02.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Skiles LLC <span
                                                            class="plane-type">Enterprise (Yearly)</span></a>
                                                </h2>
                                            </td>
                                            <td class="expired-date">Expired On <br>24 Feb 2024</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-03.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Kerluke Group <span
                                                            class="plane-type">Advanced (Monthly)</span></a>
                                                </h2>
                                            </td>
                                            <td class="expired-date">Expired On <br>24 Feb 2024</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-04.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Schowalter Group <span
                                                            class="plane-type">Basic (Yearly)</span></a>
                                                </h2>
                                            </td>
                                            <td class="expired-date">Expired On <br>24 Feb 2024</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-05.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Accentric Global <span
                                                            class="plane-type">Basic (Monthly)</span></a>
                                                </h2>
                                            </td>
                                            <td class="expired-date">Expired On <br>24 Feb 2024</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 d-flex">
                    <div class="card super-admin-dash-card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Companies Registered </h5>
                                <div class="dropdown main">
                                    <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                                        2024
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2023</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="companies_flow"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 d-flex">
                    <div class="card super-admin-dash-card">
                        <div class="card-header">
                            <div class="row align-center">
                                <div class="col">
                                    <h5 class="card-title">Recent Domain</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-stripped table-hover">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-01.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Hermann Groups <span
                                                            class="plane-type">Basic (Monthly)</span></a>
                                                </h2>
                                            </td>
                                            <td class="text-end">
                                                <div class="active-inactive-btn">
                                                    <a href="#" class="active-domain"><i
                                                            class="fe fe-check"></i></a>
                                                    <a href="#" class="inactive-domain"><i
                                                            class="fe fe-x"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-02.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Skiles LLC <span
                                                            class="plane-type">Enterprise (Yearly)</span></a>
                                                </h2>
                                            </td>
                                            <td class="text-end">
                                                <div class="active-inactive-btn">
                                                    <a href="#" class="active-domain"><i
                                                            class="fe fe-check"></i></a>
                                                    <a href="#" class="inactive-domain"><i
                                                            class="fe fe-x"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-03.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Kerluke Group <span
                                                            class="plane-type">Advanced (Monthly)</span></a>
                                                </h2>
                                            </td>
                                            <td class="text-end">
                                                <div class="active-inactive-btn">
                                                    <a href="#" class="active-domain"><i
                                                            class="fe fe-check"></i></a>
                                                    <a href="#" class="inactive-domain"><i
                                                            class="fe fe-x"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-04.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Schowalter Group <span
                                                            class="plane-type">Basic (Yearly)</span></a>
                                                </h2>
                                            </td>
                                            <td class="text-end">
                                                <div class="active-inactive-btn">
                                                    <a href="#" class="active-domain"><i
                                                            class="fe fe-check"></i></a>
                                                    <a href="#" class="inactive-domain"><i
                                                            class="fe fe-x"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
                                                        <img class="avatar-img rounded-circle company" src="assets/img/companies/company-05.svg" alt="Company Image"></a>
                                                    <a href="companies.html">Accentric Global <span
                                                            class="plane-type">Basic (Monthly)</span></a>
                                                </h2>
                                            </td>
                                            <td class="text-end">
                                                <div class="active-inactive-btn">
                                                    <a href="#" class="active-domain"><i
                                                            class="fe fe-check"></i></a>
                                                    <a href="#" class="inactive-domain"><i
                                                            class="fe fe-x"></i></a>
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
    </div> --}}
@endsection


