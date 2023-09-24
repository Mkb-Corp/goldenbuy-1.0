@extends('layouts.admin')

@section('content')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                <div class="card card-mini dash-card card-1">
                    <div class="card-body">
                        <h2 class="mb-1">1,503</h2>
                        <p>Utilisateurs</p>
                        <span class="mdi mdi-account-arrow-left"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                <div class="card card-mini dash-card card-2">
                    <div class="card-body">
                        <h2 class="mb-1">79,503</h2>
                        <p>Produits</p>
                        <span class="mdi mdi-account-clock"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                <div class="card card-mini dash-card card-3">
                    <div class="card-body">
                        <h2 class="mb-1">15,503</h2>
                        <p>Commandes</p>
                        <span class="mdi mdi-package-variant"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                <div class="card card-mini dash-card card-4">
                    <div class="card-body">
                        <h2 class="mb-1">$98,503</h2>
                        <p>généré</p>
                        <span class="mdi mdi-currency-usd"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-8 col-md-12 p-b-15">
                <!-- Sales Graph -->
                <div id="user-acquisition" class="card card-default">
                    <div class="card-header">
                        <h2>Statistiques de vente</h2>
                    </div>
                    <div class="card-body">
                        <div class="tab-content pt-4" id="salesReport">
                            <div class="tab-pane fade show active" id="source-medium" role="tabpanel">
                                <div class="mb-6" style="max-height:247px">
                                    <canvas id="acquisition" class="chartjs2"></canvas>
                                    <div id="acqLegend" class="customLegend mb-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-12 p-b-15">
                <!-- Doughnut Chart -->
                <div class="card card-default">
                    <div class="card-header justify-content-center">
                        <h2>Commandes</h2>
                    </div>
                    <div class="card-body">
                        <canvas id="doChart"></canvas>
                    </div>
                    <a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i>
                        Download overall report</a>
                    <div class="card-footer d-flex flex-wrap bg-white p-0">
                        <div class="col-6">
                            <div class="p-20">
                                <ul class="d-flex flex-column justify-content-between">
                                    <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                            style="color: #4c84ff"></i>Commandes completées</li>
                                    <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                            style="color: #80e1c1 "></i>Non payées</li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-6 border-left">
                            <div class="p-20">
                                <ul class="d-flex flex-column justify-content-between">
                                    <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                            style="color: #8061ef"></i>En attente</li>
                                    <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                            style="color: #ffa128"></i>Annulées</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 p-b-15">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none card-default recent-orders" id="recent-orders">
                    <div class="card-header justify-content-between">
                        <h2>Commandes récentes</h2>
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th class="d-none d-lg-table-cell">Units</th>
                                    <th class="d-none d-lg-table-cell">Order Date</th>
                                    <th class="d-none d-lg-table-cell">Order Cost</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>24541</td>
                                    <td>
                                        <a class="text-dark" href=""> Coach Swagger</a>
                                    </td>
                                    <td class="d-none d-lg-table-cell">1 Unit</td>
                                    <td class="d-none d-lg-table-cell">Oct 20, 2018</td>
                                    <td class="d-none d-lg-table-cell">$230</td>
                                    <td>
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                id="dropdown-recent-order1" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item">
                                                    <a href="#">View</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>24541</td>
                                    <td>
                                        <a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
                                    </td>
                                    <td class="d-none d-lg-table-cell">2 Units</td>
                                    <td class="d-none d-lg-table-cell">Nov 15, 2018</td>
                                    <td class="d-none d-lg-table-cell">$550</td>
                                    <td>
                                        <span class="badge badge-primary">Delayed</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                id="dropdown-recent-order2" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item">
                                                    <a href="#">View</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>24541</td>
                                    <td>
                                        <a class="text-dark" href=""> Hat Black Suits</a>
                                    </td>
                                    <td class="d-none d-lg-table-cell">1 Unit</td>
                                    <td class="d-none d-lg-table-cell">Nov 18, 2018</td>
                                    <td class="d-none d-lg-table-cell">$325</td>
                                    <td>
                                        <span class="badge badge-warning">On Hold</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                id="dropdown-recent-order3" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item">
                                                    <a href="#">View</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>24541</td>
                                    <td>
                                        <a class="text-dark" href=""> Backpack Gents, Swimming Cap Slin</a>
                                    </td>
                                    <td class="d-none d-lg-table-cell">5 Units</td>
                                    <td class="d-none d-lg-table-cell">Dec 13, 2018</td>
                                    <td class="d-none d-lg-table-cell">$200</td>
                                    <td>
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                id="dropdown-recent-order4" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item">
                                                    <a href="#">View</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>24541</td>
                                    <td>
                                        <a class="text-dark" href=""> Speed 500 Ignite</a>
                                    </td>
                                    <td class="d-none d-lg-table-cell">1 Unit</td>
                                    <td class="d-none d-lg-table-cell">Dec 23, 2018</td>
                                    <td class="d-none d-lg-table-cell">$150</td>
                                    <td>
                                        <span class="badge badge-danger">Cancelled</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                id="dropdown-recent-order5" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item">
                                                    <a href="#">View</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-5">
                <!-- New Customers -->
                <div class="card ec-cust-card card-table-border-none card-default">
                    <div class="card-header justify-content-between ">
                        <h2>Nouveaux clients</h2>
                    </div>
                    <div class="card-body pt-0 pb-15px">
                        <table class="table ">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="media-image mr-3 rounded-circle">
                                                <a href="##"><img class="profile-img rounded-circle w-45"
                                                        src="{{ asset('admin/assets/img/user/u1.jpg') }}" alt="customer image"></a>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <a href="profile.html">
                                                    <h6 class="mt-0 text-dark font-weight-medium">Selena
                                                        Wagner</h6>
                                                </a>
                                                <small>@selena.oi</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2 Commandes</td>
                                    <td class="text-dark d-none d-md-block">$150</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="media-image mr-3 rounded-circle">
                                                <a href="#"><img class="profile-img rounded-circle w-45"
                                                        src="{{ asset('admin/assets/img/user/u2.jpg') }}" alt="customer image"></a>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <a href="#">
                                                    <h6 class="mt-0 text-dark font-weight-medium">Walter
                                                        Reuter</h6>
                                                </a>
                                                <small>@walter.me</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>5 Commandes</td>
                                    <td class="text-dark d-none d-md-block">$200</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xl-7">
                <!-- Top Products -->
                <div class="card card-default ec-card-top-prod">
                    <div class="card-header justify-content-between">
                        <h2>Top Produits</h2>
                        <div>
                            <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                        </div>
                    </div>
                    <div class="card-body mt-10px mb-10px py-0">
                        <div class="row media d-flex pt-15px pb-15px">
                            <div class="col-lg-3 col-md-3 col-2 media-image align-self-center rounded">
                                <a href="#"><img src="{{ asset('admin/assets/img/products/p1.jpg') }}" alt="customer image"></a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-10 media-body align-self-center ec-pos">
                                <a href="#">
                                    <h6 class="mb-10px text-dark font-weight-medium">Baby cotton shoes</h6>
                                </a>
                                <p class="float-md-right sale"><span class="mr-2">58</span>Sales</p>
                                <p class="d-none d-md-block">Statement belting with double-turnlock hardware
                                    adds “swagger” to a simple.</p>
                                <p class="mb-0 ec-price">
                                    <span class="text-dark">$520</span>
                                </p>
                            </div>
                        </div>
                        <div class="row media d-flex pt-15px pb-15px">
                            <div class="col-lg-3 col-md-3 col-2 media-image align-self-center rounded">
                                <a href="#"><img src="{{ asset('admin/assets/img/products/p2.jpg') }}" alt="customer image"></a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-10 media-body align-self-center ec-pos">
                                <a href="#">
                                    <h6 class="mb-10px text-dark font-weight-medium">Hoodies for men</h6>
                                </a>
                                <p class="float-md-right sale"><span class="mr-2">20</span>Sales</p>
                                <p class="d-none d-md-block">Statement belting with double-turnlock hardware
                                    adds “swagger” to a simple.</p>
                                <p class="mb-0 ec-price">
                                    <span class="text-dark">$250</span>
                                </p>
                            </div>
                        </div>
                        <div class="row media d-flex pt-15px pb-15px">
                            <div class="col-lg-3 col-md-3 col-2 media-image align-self-center rounded">
                                <a href="#"><img src="{{ asset('admin/assets/img/products/p3.jpg') }}" alt="customer image"></a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-10 media-body align-self-center ec-pos">
                                <a href="#">
                                    <h6 class="mb-10px text-dark font-weight-medium">Long slive t-shirt</h6>
                                </a>
                                <p class="float-md-right sale"><span class="mr-2">10</span>Sales</p>
                                <p class="d-none d-md-block">Statement belting with double-turnlock hardware
                                    adds “swagger” to a simple.</p>
                                <p class="mb-0 ec-price">
                                    <span class="text-dark">$480</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


