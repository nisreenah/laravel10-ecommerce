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
                        <h4 class="mb-sm-0">Edit home slider: {{$homeSlider->short_title}}</h4>

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
                            <h4 class="card-title">Home slider short title: {{$homeSlider->title}}</h4>
                            <p class="card-title-desc">{{$homeSlider->title}}</p>

                            <form class="custom-validation" method="post" enctype="multipart/form-data"
                                  action="{{ route('sliders.update', $homeSlider->id) }}">
                                @csrf @method('PUT')

                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$homeSlider->title}}" required placeholder="Title"/>
                                </div>

                                <div class="mb-3">
                                    <label>Short title</label>
                                    <input type="text" class="form-control" name="short_title" value="{{$homeSlider->short_title}}" required placeholder="Short title"/>
                                </div>

                                <div class="mb-3">
                                    <label>Upload a new image</label>
                                    <input type="file" class="form-control" name="image" id="customFile">
                                </div>

                                <div class="mb-3">
                                    <label>Embed Youtube URL</label>
                                    <div>
                                        <input parsley-type="url" type="url" name="video_url" value="{{$homeSlider->video_url}}" class="form-control" required placeholder="URL"/>
                                    </div>
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

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Ratio video 16:9</h4>
                            <p class="card-title-desc">Current Embed Youtube URL:</p>

                            <!-- 16:9 aspect ratio -->
                            <div class="ratio ratio-16x9">
                                <iframe title="YouToube Video" src="{{$homeSlider->video_url}}" allowfullscreen></iframe>
                            </div>

                            <div class="mt-4">
                                <h4 class="card-title">Current image</h4>
                                <div class="">
                                    <img class="img-fluid"
                                         alt="Responsive image"
                                         src="{{ (!$homeSlider->image) ? url('upload/no_image.jpg') : url('upload/home_images/'.$homeSlider->image) }}">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
