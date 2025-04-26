@extends('admin.layouts.master')
@section('title', $title)
@section('content')

<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <!-- Include page breadcrumb -->
    @include('admin.inc.breadcrumb')  
    <!-- end page title --> 

    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <div class="card widget-flat">
                <div class="card-body p-0">
                    <div class="p-3 pb-0">
                        <div class="float-right">
                            <span class="icon text-primary widget-icon"><i class="fas fa-newspaper"></i></span>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0">Approve Articles</h5>
                        <h3 class="mt-2">{{ $approve->count() }}</h3>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-3 col-lg-6">
            <div class="card widget-flat">
                <div class="card-body p-0">
                    <div class="p-3 pb-0">
                        <div class="float-right">
                            <span class="icon text-danger widget-icon"><i class="fas fa-edit"></i></span>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0">Pending Articles</h5>
                        <h3 class="mt-2">{{ $pending->count() }}</h3>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-3 col-lg-6">
            <div class="card widget-flat">
                <div class="card-body p-0">
                    <div class="p-3 pb-0">
                        <div class="float-right">
                            <span class="icon text-primary widget-icon"><i class="fas fa-comments"></i></span>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0">Total Comments</h5>
                        <h3 class="mt-2">{{ $comment->count() }}</h3>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        @can('isAdmin')
        <div class="col-xl-3 col-lg-6">
            <div class="card widget-flat">
                <div class="card-body p-0">
                    <div class="p-3 pb-0">
                        <div class="float-right">
                            <span class="icon text-danger widget-icon"><i class="fas fa-user-tie"></i></span>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0">Total Authors</h5>
                        <h3 class="mt-2">{{ $users->count() }}</h3>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        @endcan

        @can('isReviewer')
        <div class="col-xl-3 col-lg-6">
            <div class="card widget-flat">
                <div class="card-body p-0">
                    <div class="p-3 pb-0">
                        <div class="float-right">
                            <span class="icon text-danger widget-icon"><i class="fas fa-user-tie"></i></span>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0">Total Authors</h5>
                        <h3 class="mt-2">{{ $users->count() }}</h3>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        @endcan

        @can('isAuthor')
        <div class="col-xl-3 col-lg-6">
            <div class="card widget-flat">
                <div class="card-body p-0">
                    <div class="p-3 pb-0">
                        <div class="float-right">
                            <span class="icon text-danger widget-icon"><i class="fas fa-question-circle"></i></span>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0">Active Issues</h5>
                        <h3 class="mt-2">{{ $issue->count() }}</h3>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        @endcan
    </div>
    <!-- end row -->


    @can('isAdmin')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                  <h4 class="header-title">Pending Article List</h4>

                  <!-- Data Table Start -->
                  <div class="table-responsive">
                    <table id="basic-datatable" class="table table-striped table-hover table-dark nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Submit Status</th>
                                <th>Review Status</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $rows as $key => $row )
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{!! str_limit(strip_tags($row->title), 50, ' ...') !!}</td>
                                <td>{{ $row->category->title ?? '' }}</td>
                                <td>
                                    @if( $row->upload_status == 1 )
                                    <span class="badge badge-default badge-pill">New Upload</span>
                                    @elseif( $row->upload_status == 2 )
                                    <span class="badge badge-default badge-pill">Resubmit</span>
                                    @endif
                                </td>
                                <td>
                                    @if( $row->review_status == 2 )
                                    <span class="badge badge-success badge-pill">Approve</span>
                                    @elseif( $row->review_status == 1 )
                                    <span class="badge badge-primary badge-pill">Pending</span>
                                    @else
                                    <span class="badge badge-danger badge-pill">Reject</span>
                                    @endif
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                  <!-- Data Table End -->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
    @endcan



    @can('isReviewer')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                  <h4 class="header-title">Pending Article List</h4>

                  <!-- Data Table Start -->
                  <div class="table-responsive">
                    <table id="basic-datatable" class="table table-striped table-hover table-dark nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Submit Status</th>
                                <th>Review Status</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $rows as $key => $row )
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{!! str_limit(strip_tags($row->title), 50, ' ...') !!}</td>
                                <td>{{ $row->category->title ?? '' }}</td>
                                <td>
                                    @if( $row->upload_status == 1 )
                                    <span class="badge badge-default badge-pill">New Upload</span>
                                    @elseif( $row->upload_status == 2 )
                                    <span class="badge badge-default badge-pill">Resubmit</span>
                                    @endif
                                </td>
                                <td>
                                    @if( $row->review_status == 2 )
                                    <span class="badge badge-success badge-pill">Approve</span>
                                    @elseif( $row->review_status == 1 )
                                    <span class="badge badge-primary badge-pill">Pending</span>
                                    @else
                                    <span class="badge badge-danger badge-pill">Reject</span>
                                    @endif
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                  <!-- Data Table End -->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
    @endcan



    @can('isAuthor')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                  <h4 class="header-title">Active Issue List</h4>

                  <!-- Data Table Start -->
                  <div class="table-responsive">
                    <table id="basic-datatable" class="table table-striped table-hover table-dark nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Issue</th>
                                <th>Article</th>
                                <th>Issue Date</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $rows as $key => $row )
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{!! str_limit(strip_tags($row->title), 50, ' ...') !!}</td>
                                <td>{{ $row->article->title ?? '' }}</td>
                                <td>{{ $row->issue_date }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                  <!-- Data Table End -->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
    @endcan


</div> <!-- container -->
<!-- End Content-->

@endsection