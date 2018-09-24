@extends('layouts.admin')
@section('content')

<section>
    {{--
    <div class="section-header">
        <ol class="breadcrumb">
            <li class="active">Categories</li>
        </ol>
    </div> --}}
    <div class="section-body contain-lg">

        <!-- BEGIN INTRO -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-primary">Categories</h1>
            </div>
            <!--end .col -->
            <div class="col-lg-8">
                <article class="margin-bottom-xxl">
                    <p class="lead">
                    </p>
                </article>
            </div>
            <!--end .col -->
        </div>
        <!--end .row -->
        <!-- END INTRO -->

        <!-- BEGIN RESPONSIVE TABLE 1 -->
        <div class="row">


            <!--end .col -->
            <div class="col-lg-12">
                <div class="card">
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
@endsection
