@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
            <h1>Sous-categorie</h1>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Accueil</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Sous Categorie
            </p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="ec-cat-list card card-default mb-24px">
                    <div class="card-body">
                        <div class="ec-cat-form">
                            <h4>Nouvellle Sous-Categorie</h4>

                            <form action="{{ route('dashboard.subcategories.new') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="text" class="col-12 col-form-label">Nom</label>
                                    <div class="col-12">
                                        <input id="text" required name="name" class="form-control here slug-title"
                                            type="text">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Description</label>
                                    <div class="col-12">
                                        <textarea id="sortdescription" name="details" cols="40" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="parent-category" class="col-12 col-form-label">Categories</label>
                                    <div class="col-12">
                                        <select id="parent-category" name="category_id" required class="custom-select">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
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
                                        <th>Nom</th>
                                        <th>Categorie</th>
                                        <th>Produits</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($sub_categories as $sub)
                                        <tr>
                                            <td><img class="cat-thumb" src="{{ asset('admin/assets/img/category/cosmetics.png') }}"
                                                    alt="product image" /></td>
                                            <td>{{ $sub->name }}</td>
                                            <td>
                                                <span class="ec-sub-cat-list">
                                                    <span class="ec-sub-cat-tag">{{ $sub->category->name }}</span>
                                                </span>
                                            </td>
                                            <td>18</td>
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
