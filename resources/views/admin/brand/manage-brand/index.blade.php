@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Brand Manage Page
                        </div>
                        <div class="card-body">

                            <div class="ibox">
                                <div class="ibox-head">
                                    <div class="ibox-title">Data Table</div>
                                </div>
                                <div class="ibox-body">
                                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>#SL</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($brands as $brand)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$brand->name}}</td>
                                                <td>{!! $brand->description !!}</td>
                                                <td>
                                                    <img src="{{asset($brand->image)}}" alt="" height="50" width="50">
                                                </td>
                                                <td>{{$brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                                <td>
                                                    <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure want to edit this.....?')"><i class="fa fa-edit">Edit</i></a>
                                                    <a href="{{route('brand.delete', ['id' => $brand->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete this....?')"><i class="fa fa-trash">Delete</i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <a class="adminca-banner" href="http://admincast.com/adminca/" target="_blank">
                                    <div class="adminca-banner-ribbon"><i class="fa fa-trophy mr-2"></i>PREMIUM TEMPLATE</div>
                                    <div class="wrap-1">
                                        <div class="wrap-2">
                                            <div>
                                                <img src="{{asset('/')}}admin/assets/img/adminca-banner/adminca-preview.jpg" style="height:160px;margin-top:50px;" />
                                            </div>
                                            <div class="color-white" style="margin-left:40px;">
                                                <h1 class="font-bold">ADMINCA</h1>
                                                <p class="font-16">Save your time, choose the best</p>
                                                <ul class="list-unstyled">
                                                    <li class="m-b-5"><i class="ti-check m-r-5"></i>High Quality Design</li>
                                                    <li class="m-b-5"><i class="ti-check m-r-5"></i>Fully Customizable and Easy Code</li>
                                                    <li class="m-b-5"><i class="ti-check m-r-5"></i>Bootstrap 4 and Angular 5+</li>
                                                    <li class="m-b-5"><i class="ti-check m-r-5"></i>Best Build Tools: Gulp, SaSS, Pug...</li>
                                                    <li><i class="ti-check m-r-5"></i>More layouts, pages, components</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div style="flex:1;">
                                            <div class="d-flex justify-content-end wrap-3">
                                                <div class="adminca-banner-b m-r-20">
                                                    <img src="{{asset('/')}}admin/assets/img/adminca-banner/bootstrap.png" style="width:40px;margin-right:10px;" />Bootstrap v4</div>
                                                <div class="adminca-banner-b m-r-10">
                                                    <img src="{{asset('/')}}admin/assets/img/adminca-banner/angular.png" style="width:35px;margin-right:10px;" />Angular v5+</div>
                                            </div>
                                            <div class="dev-img">
                                                <img src="{{asset('/')}}admin/assets/img/adminca-banner/sprite.png" />
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

