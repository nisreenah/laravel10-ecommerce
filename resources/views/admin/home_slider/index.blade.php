@extends('admin.master')

@section('page-content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">--}}
{{--                        <h4 class="mb-sm-0">Data Tables</h4>--}}

{{--                        <div class="page-title-right">--}}
{{--                            <ol class="breadcrumb m-0">--}}
{{--                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>--}}
{{--                                <li class="breadcrumb-item active">Data Tables</li>--}}
{{--                            </ol>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Home Sliders</h4>
                            <p class="card-title-desc">
                                This example shows the DataTables table body scrolling in the vertical direction. This can generally be seen as an
                                alternative method to pagination for displaying a large table in a fairly small vertical area, and as such
                                pagination has been disabled here (note that this is not mandatory, it will work just fine with pagination enabled
                                as well!).
                            </p>

                            <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100 table-hover">
                                <thead>
                                <tr class="table-info">
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Short title</th>
                                    <th>Updated date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($homeSliders as $homeSlider)
                                    <tr>

                                        <td>{{$homeSlider->id}}</td>
                                        <td>

                                            <img class="rounded me-2" alt="200x200" width="100" data-holder-rendered="true"
                                                 src="{{ (!$homeSlider->image) ? url('upload/no_image.jpg') : url('upload/home_images/'.$homeSlider->image) }}">

                                        </td>
                                        <td>{{substr($homeSlider->title, 0, 40)}}</td>
                                        <td>{{substr($homeSlider->short_title, 0, 20)}}</td>
                                        <td>{{$homeSlider->updated_at}}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{route('sliders.edit',$homeSlider->id)}}">
                                                    <span class="badge bg-info" style="font-size: 15px"> <i class="fas fa-edit "></i> edit</span>
                                                </a>
                                            </div>

                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- container-fluid -->
    </div>
@endsection

