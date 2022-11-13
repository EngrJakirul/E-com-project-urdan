@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Add Product</h3>
                        </div>
                        <div class="card-body bg-light">
                            <form action="{{route('product.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row form-group">
                                    <label for="" class="col-md-6">Category Name</label>
                                    <div class="col-md-6">
                                        <select name="category_id" class="form-control" id="categoryId">
                                            <option value="" disabled="" selected >Select a Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-6">Sub Category Name</label>
                                    <div class="col-md-6">
                                        <select name="sub_category_id" class="form-control" id="subCategoryId">
                                            <option value="" disabled="" selected >Select a sub Category</option>
                                            @foreach($subCategories as $subCategory)
                                                <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-6">Brand Name:</label>
                                    <div class="col-md-6">
                                        <select name="brand_id" class="form-control" id="">
                                            <option value="" disabled="" selected >Select a Brand</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-6">Unit Name:</label>
                                    <div class="col-md-6">
                                        <select name="unit_id" class="form-control" id="">
                                            <option value="" disabled="" selected >Select Unit</option>
                                            @foreach($units as $unit)
                                                <option value="{{$unit->id}}">{{$unit->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-2">Product Name:</label>
                                    <div class="col-md-10">
                                        <input type="text" name="name" class="form-control" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="" class="col-md-4">Regular Price</label>
                                            <div class="col-md-8">
                                                <input type="text" name="regular_price" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="" class="col-md-4">Selling Price</label>
                                            <div class="col-md-8">
                                                <input type="text" name="selling_price" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-2">Product short Description:</label>
                                    <div class="col-md-10">
                                        <textarea name="short_description" class="form-control summernote" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-2">Product Long Description:</label>
                                    <div class="col-md-10">
                                        <textarea name="long_description" class="form-control summernote" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-2">Product Image</label>
                                    <div class="col-md-10">
                                        <input type="file" name="image" class="form-control-file" />
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-2">Product another Images</label>
                                    <div class="col-md-10">
                                        <input type="file" name="sub_image[]" class="form-control-file" multiple />
                                    </div>
                                </div>

                                <div class="row form-group row">
                                    <label for="" class="col-md-2">Product Status</label>
                                    <div class="col-md-10">
                                        <label for=""><input type="radio" name="status" value="1"> Published</label>
                                        <label for=""><input type="radio" name="status" value="0"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-2"></label>
                                    <div class="col-md-10">
                                        <input type="submit" class="btn btn-success form-control cursor-pointer" value="Add Product" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('admin-js')
    <script>
        $(document).on('change', '#categoryId', function () {
            var categoryId = $(this).val();
            $.ajax({
                url : "http://localhost/E-commerce-project-urdan-in-laravel/public/get-sub-category-by-category-id/"+categoryId,
                method : 'GET',
                dataType : 'JSON',
                data : {},
                success: function (res) {
                    var option = '';
                    option += '<option value="" disabled selected>select a sub category</option>';
                    $.each(res, function (key, value) {
                        option +='<option value="'+value.id+'">'+value.name+'</option>'
                    })

                    $('#subCategoryId').empty().append(option);
                },
                error: function (e) {
                    console.log(e);
                },
            });
        })
    </script>f
@endsection

