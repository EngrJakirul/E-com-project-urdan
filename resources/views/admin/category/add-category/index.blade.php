@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Add Category</h3>
                        </div>
                        <div class="card-body bg-light">
                            <form action="{{route('category.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row form-group">
                                    <label for="" class="col-md-2">Category Name:</label>
                                    <div class="col-md-10">
                                        <input type="text" name="name" class="form-control" />
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-2">Category Description:</label>
                                    <div class="col-md-10">
                                        <textarea name="description" class="form-control summernote" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-2">Category Image</label>
                                    <div class="col-md-10">
                                        <input type="file" name="image" class="form-control-file" />
                                    </div>
                                </div>

                                <div class="row form-group row">
                                    <label for="" class="col-md-2">Category Status</label>
                                    <div class="col-md-10">
                                        <label for=""><input type="radio" name="status" value="1"> Published</label>
                                        <label for=""><input type="radio" name="status" value="0"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-2"></label>
                                    <div class="col-md-10">
                                        <input type="submit" class="btn btn-success form-control cursor-pointer" value="Add Category" />
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
