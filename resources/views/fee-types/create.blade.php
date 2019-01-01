@extends('layouts.admin')
@section('content')
<section>
    {{--
    <div class="section-header">
        <ol class="breadcrumb">
            <li class="active">Form validation</li>
        </ol>
    </div> --}}
    <div class="section-body contain-lg">

        <!-- BEGIN BASIC VALIDATION -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-primary">Basic validation</h1>
            </div>

            <div class="col-lg-offset-1 col-md-10">
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
            <!--end .col -->
        </div>
        <!--end .row -->
        <!-- END BASIC VALIDATION -->



    </div>
    <!--end .section-body -->
</section>
@endsection
