@extends('admin.master')

@section('page-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit home slider: {{$home_slider->title}}</h4>

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
                            <h4 class="card-title">Validation type</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p>

                            <form class="custom-validation" method="post"
                                  action="{{ route('home.slider.update', $home_slider->id) }}">
                                @csrf @method('PUT')

                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$home_slider->title}}" required placeholder="Title"/>
                                </div>

                                <div class="mb-3">
                                    <label>Short title</label>
                                    <input type="text" class="form-control" name="short_title" value="{{$home_slider->short_title}}" required placeholder="Short title"/>
                                </div>

                                <div class="mb-3">
                                    <label>Upload a new image</label>
                                    <input type="file" class="form-control" id="customFile">
                                </div>

                                <div class="mb-3">
                                    <label>Video URL</label>
                                    <div>
                                        <input parsley-type="url" type="url" name="video_url" value="{{$home_slider->video_url}}" class="form-control" required placeholder="URL"/>
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

            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
