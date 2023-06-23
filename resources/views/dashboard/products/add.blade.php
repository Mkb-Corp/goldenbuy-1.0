@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Add Product</h1>
                <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Product
                </p>
            </div>
            <div>
                <a href="#" class="btn btn-primary"> Tous les produits
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Add Product</h2>
                    </div>
                    <form action="{{ route('products.new') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row ec-vendor-uploads">
                                <div class="col-lg-4">
                                    <div class="ec-vendor-img-upload">
                                        <div class="ec-vendor-main-img">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' name="main_picture" id="imageUpload" class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"><img
                                                            src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="avatar-preview ec-preview">
                                                    <div class="imagePreview ec-div-preview">
                                                        <img class="ec-image-preview"
                                                            src="{{ asset('admin/assets/img/products/vender-upload-preview.jpg') }}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload-set colo-md-12">
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' name="pictures[]" id="thumbUpload01" class="ec-image-upload"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{ asset('admin/assets/img/products/vender-upload-preview.jpg') }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' name="pictures[]" id="thumbUpload02" class="ec-image-upload"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{ asset('admin/assets/img/products/vender-upload-preview.jpg') }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' name="pictures[]" id="thumbUpload03" class="ec-image-upload"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{ asset('admin/assets/img/products/vender-upload-preview.jpg') }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' name="pictures[]" id="thumbUpload04" class="ec-image-upload"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{ asset('admin/assets/img/products/vender-upload-preview.jpg') }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' name="pictures[]" id="thumbUpload05" class="ec-image-upload"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{ asset('admin/assets/img/products/vender-upload-preview.jpg') }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' name="pictures[]" id="thumbUpload06" class="ec-image-upload"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{ asset('admin/assets/img/products/vender-upload-preview.jpg') }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="ec-vendor-upload-detail">
                                        <form class="row g-3">
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Nom du produit *</label>
                                                <input type="text" name="name" class="form-control slug-title" id="inputEmail4">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Categorie *</label>
                                                <select name="sub_category_id" id="Categories" class="form-select">
                                                    @foreach ($categories as $category)
                                                        <optgroup label="{{ $category->name }}">
                                                            @foreach ($category->sub_categories as $sub)
                                                                <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Description *</label>
                                                <textarea name="description" class="form-control" rows="2"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Prix *<span>( USD
                                                        )</span></label>
                                                <input type="number" name="price" class="form-control" id="price1">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Quantity</label>
                                                <input type="number" name="qty" class="form-control" id="quantity1">
                                            </div>

                                            <div class="col-md-12">
                                                <label class="form-label">Tags <span>( Type and
                                                        make comma to separate tags )</span></label>
                                                <input type="text" class="form-control" id="group_tag" name="group_tag"
                                                    value="" placeholder="" name="tags" data-role="tagsinput" />
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
