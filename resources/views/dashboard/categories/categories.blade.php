@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
            <h1>Categories</h1>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Accueil</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Categories
            </p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="ec-cat-list card card-default mb-24px">
                    <div class="card-body">
                        <div class="ec-cat-form">
                            <h4>Nouvelle Categorie</h4>

                            <form method="POST" action="{{ route('dashboard.categories.new') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="text" class="col-12 col-form-label">Nom</label>
                                    <div class="col-12">
                                        <input id="text" name="name" required class="form-control here slug-title"
                                            type="text">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Details</label>
                                    <div class="col-12">
                                        <textarea id="sortdescription" name="details" cols="40" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12">
                <div class="ec-cat-list card card-default">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="responsive-data-table" class="table">
                                <thead>
                                    <tr>
                                        <th>Thumb</th>
                                        <th>Name</th>
                                        <th>Sub Categories</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td><img class="cat-thumb"
                                                    src="{{ asset('admin/assets/img/category/perfume.png') }}"
                                                    alt="Product Image" /></td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <span class="ec-sub-cat-list">
                                                    {{-- <span class="ec-sub-cat-count" title="Total Sub Categories">4</span> --}}
                                                    @foreach ($category->sub_categories as $sub)
                                                        <span class="ec-sub-cat-tag">{{ $sub->name }}</span>
                                                    @endforeach
                                                </span>
                                            </td>
                                            <td>
                                                <div class="btn-group">
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
