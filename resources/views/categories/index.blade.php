@extends('layouts.admin')
@section('title')
    Categories
@endsection
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
                                <!-- <div class="btn-group">
                                    <a href="#" class="btn btn-icon-toggle dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu animation-dock pull-right menu-card-styling" role="menu" style="text-align: left;">
                                        <li><a href="javascript:;" data-toggle="modal" data-target="#addCategoryModel"><i class="fa fa-plus"></i> Add Category</a></li>
                                    </ul>
                                </div> -->
                                <a href="javascript:;" data-toggle="modal" class="btn ink-reaction btn-raised btn-primary" data-target="#addCategoryModel"><i class="fa fa-plus"></i> Add Category</a>
                                {{--<a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th style="width:10%;">#</th>
                                        <th style="width:60%;">Name</th>
                                        <th style="width:10%;">Status</th>
                                        <th style="width:20%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>
                                        @if($item->status!='DELETED')
                                            <a class="btn ink-reaction btn-floating-action btn-primary"  data-placement="top" title="Edit" data-toggle="modal" data-target="#addCategoryModel" data-source="{{str_replace('"',"'",json_encode($item))}}">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a class="btn ink-reaction btn-floating-action btn-danger delete" data-toggle="tooltip" data-placement="top" title="Delete" href="{{ url('categories/destroy/' . $item->id) }}">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$categories->links()}}
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
            <form class="form form-validate floating-label" method="POST" novalidate="novalidate" action="{{ url('/categories/store', []) }}">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="hidden" name="id" id="fieldId" />
                        <input type="text" class="form-control" id="name" name="name" required data-rule-minlength="2">
                        <label for="Name1">Category Name</label>
                    </div>
                    <div class="form-group">
                        <select id="select1" name="status" class="form-control">
                            <option value="ACTIVE" selected="selected">ACTIVE</option>
                            <option value="INACTIVE">INACTIVE</option>
                            <option value="DELETED">DELETED</option>
                        </select>
                        <label for="select1">Status</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
