@extends('layouts.admin')
@section('content')

<section>
    <div class="section-body contain-lg">
        <!-- BEGIN INTRO -->
        <div class="row">
            <div class="col-lg-10">
                <h1 class="text-primary">Categories</h1>
            </div>
        </div>
        <!--end .row -->
        <!-- END INTRO -->
        <!-- BEGIN RESPONSIVE TABLE 1 -->
        <div class="row">
            <!--end .col -->
            <div class="col-lg-12">
                <div class="card card-underline">
                    <div class="card-head">
                        <header>All Categories</header>
                        <div class="tools">
                            <div class="btn-group">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-icon-toggle dropdown-toggle" data-toggle="dropdown"><i class="md md-colorize"></i></a>
                                    <ul class="dropdown-menu animation-dock pull-right menu-card-styling" role="menu" style="text-align: left;">
                                        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addCategoryModel"><i class="fa fa-plus"></i> Add Category</a></li>
                                    </ul>
                                </div>
                                <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>Action</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--end .table-responsive -->
                    </div>
                    <!--end .card-body -->
                </div>
                <!--end .card -->
            </div>
            <!--end .col -->
        </div>
        <!--end .row -->
        <!-- END RESPONSIVE TABLE 1 -->
    </div>
</section>

<div class="modal" tabindex="-1" role="dialog" id="addCategoryModel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="form form-validate floating-label" method="POST" novalidate="novalidate" action="{{ url('/categories/store', []) }}">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" required data-rule-minlength="2">
                                <label for="Name1">Category Name</label>
                            </div>

                        </div>
                        <!--end .card-body -->
                        <div class="card-actionbar">
                            <div class="card-actionbar-row">
                                <button type="submit" class="btn btn-flat btn-primary ink-reaction">Save</button>
                            </div>
                        </div>
                        <!--end .card-actionbar -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
