@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Articles</h1>
                <p class="breadcrumbs"><span><a href="index.html">Accueil</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Articles
                </p>
            </div>
            <div>
                <a href="{{ route('dashboard.products.add') }}" class="btn btn-primary"> Ajouter</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="responsive-data-table" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($products as $p)
                                        <tr>
                                            <td><img class="tbl-thumb" src="{{ asset('storage/' . $p->main_picture) }}"
                                                    alt="Product Image" />
                                            </td>
                                            <td>{{ $p->name }}</td>
                                            <td>${{ $p->price }}</td>
                                            <td>{{ $p->created_at }}</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button" class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                        data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
