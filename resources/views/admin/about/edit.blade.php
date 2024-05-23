@extends('admin.master')

@section('styles')
<!-- Bootstrap Css -->
<link href="{{ asset('/backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
<!-- Icons Css -->
<link href="{{ asset('/backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
<!-- App Css-->
<link href="{{ asset('/backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css"/>

@endsection

@section('page-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit About Me section</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Form Validation</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Home slider short title: {{$about->short_title}}</h4>

                            <form class="custom-validation" method="post"
                                  action="{{ route('about.update', $about->id) }}">
                                @csrf @method('PUT')

                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$about->title}}" required placeholder="Title"/>
                                </div>

                                <div class="mb-3">
                                    <label>Short title</label>
                                    <input type="text" class="form-control" name="short_title" value="{{$about->short_title}}" required placeholder="Short title"/>
                                </div>

                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea class="form-control" name="desc">{{$about->desc}}</textarea>
                                </div>

                                <div class="mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->

            </div> <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
