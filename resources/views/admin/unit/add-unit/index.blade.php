@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Add Unit</h3>
                        </div>
                        <div class="card-body bg-light">
                            <form action="{{route('unit.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row form-group">
                                    <label for="" class="col-md-2">Unit Name:</label>
                                    <div class="col-md-10">
                                        <input type="text" name="name" id="name" class="form-control" />
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-2">Unit Description:</label>
                                    <div class="col-md-10">
                                        <textarea name="description" id="description" class="form-control summernote" cols="30" rows="10"></textarea>
                                    </div>
                                </div>


                                <div class="row form-group row">
                                    <label for="" class="col-md-2">Unit Status</label>
                                    <div class="col-md-10">
                                        <label for=""><input type="radio" name="status" value="1"> Published</label>
                                        <label for=""><input type="radio" name="status" value="0"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-2"></label>
                                    <div class="col-md-10">
                                        <input type="submit" class="btn btn-success form-control" value="Add Category" style="cursor: pointer" />
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
