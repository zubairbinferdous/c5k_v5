@extends('admin.layouts.master')

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
            <a href="{{ URL::route('article-html.create') }}" type="button" class="btn btn-primary" >Add New</a>
            <a href="#" class="btn btn-info">Refresh</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                  <h4 class="header-title"> List</h4>

                  <!-- Data Table Start -->
                  <div class="table-responsive">
                    <table id="basic-datatable" class="table table-striped table-hover table-dark nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Published</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $articleHtmls as $key => $row )
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ Str::limit($row->title, 35, '...') }}</td>
                                <td>
                                    @if( $row->status == 1 )
                                      <span class="badge badge-success badge-pill">Active</span>
                                    @else
                                      <span class="badge badge-danger badge-pill">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge badge-success badge-pill">{{ $row->published }}</span>
                                </td>
                                <td>
                                    <a href="{{ URL::route('article-html.show', $row->id) }}" class="btn btn-success btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <a href="{{ URL::route('article-html.edit', $row->id) }}" class="btn btn-primary btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>
 
                                    <form action="{{ URL::route('article-html.destroy', $row->id) }}" method="POST">
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>

                                        @csrf
                                        @method("DELETE")
                                    </form>
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