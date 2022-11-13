@extends('admin.master')

@section('body')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h1 class="text-warning text-uppercase text-center">Brand Edit Page Layout</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route('brand.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row form-group">
                                    <label for="" class="col-md-2">Add Brand Name</label>
                                    <div class="col-md-10">
                                        <input type="text" name="name" class="form-control" value="" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="" class="col-md-2">Brand Description</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="" class="col-md-2">Brand Image</label>
                                    <input type="file" name="image" class="col-md-8 form-control-file" value="" />
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-2">Brand Status</label>
                                    <div class="col-md-10">
                                        <label for=""><input type="radio" name="status" value="1"> Published</label>
                                        <label for=""><input type="radio" name="status" value="0"> Unpublished</label>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-2"></label>
                                    <div class="col-md-10">
                                        <input type="submit" class="form-control btn btn-success cursor-pointer" value="Update New Brand">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
