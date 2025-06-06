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
        <div class="col-12">
            <!-- Add modal button -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add New</button>
            <!-- Include Add modal -->
            @include('admin.'.$url.'.create')

            <a href="{{ URL::route($url.'.'.$route_name) }}" class="btn btn-info">Refresh</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <!-- Include Flash Messages -->
                    @include('admin.inc.message')
                </div>

                <div class="card-body">
                  <h4 class="header-title">{{ $title }} List</h4>

                  <!-- Data Table Start -->
                  <div class="table-responsive">
                    <table id="basic-datatable" class="table table-striped table-hover table-dark nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Issue</th>
                                <th>Submit Status</th>
                                <th>Review Status</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $rows as $key => $row )
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{!! str_limit(strip_tags($row->title), 30, ' ...') !!}</td>
                                <td>{{ $row->category->title ?? '' }}</td>
                                <td>
                                    <a href="{{ URL('/dashboard/admin/issue/'.$row->id) }}" class="btn btn-primary btn-sm">Issues</a>
                                </td>
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
                                <td>
                                    @if( $row->status == 1 )
                                    <span class="badge badge-success badge-pill">Active</span>
                                    @else
                                    <span class="badge badge-danger badge-pill">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#showModal-{{ $row->id }}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <!-- Include Show modal -->
                                    @include('admin.'.$url.'.show')

                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal-{{ $row->id }}">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <!-- Include Edit modal -->
                                    @include('admin.'.$url.'.edit')

                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $row->id }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <!-- Include Delete modal -->
                                    @include('admin.inc.delete')
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

    
</div> <!-- container -->
<!-- End Content-->

@endsection