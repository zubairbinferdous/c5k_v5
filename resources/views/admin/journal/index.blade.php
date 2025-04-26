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
           <a href="{{route('journal.create')}}"> <button type="button" class="btn btn-primary" >Add New</button></a>
            <!-- Include Add modal -->
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
                                <th>Artical Charge</th>
                                <th>Subject Area</th>
                                <th>Aim & Scope</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($journals as $journal)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$journal->title}}</td>
                                    <td>{!! str_limit(strip_tags($journal->article_charge), 30, ' ...') !!}</td>
                                    <td>{!! str_limit(strip_tags($journal->subject_area), 60, ' ...') !!}</td>
                                    <td>{!! str_limit(strip_tags($journal->aim_scope), 60, ' ...') !!}</td>
                                    <td><img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}" alt="Journal Image" width="100" height="60"></td>
                                    <td>
                                    <a href="{{ route('journal.edit', $journal->id) }}" class="btn btn-primary btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>
                                <!-- Delete Button -->
                                <form action="{{ route('journal.destroy', $journal->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this banner?')"><i class="fas fa-trash"></i></button>
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