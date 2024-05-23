@extends('admin.master')

@section('page-content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">About Me</h4>

                            <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100 table-hover">
                                <thead>
                                <tr class="table-info">
                                    <th>Title</th>
                                    <th>Short title</th>
                                    <th>Description</th>
                                    <th>Updated date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($about as $about_me)
                                    <tr>
                                        <td>{{substr($about_me->title, 0, 40)}}</td>
                                        <td>{{substr($about_me->short_title, 0, 20)}}</td>
                                        <td>{{substr($about_me->desc, 0, 20)}}</td>
                                        <td>{{$about_me->updated_at}}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{route('about.edit',$about_me->id)}}">
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

