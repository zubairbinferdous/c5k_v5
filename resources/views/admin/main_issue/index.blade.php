@extends('admin.layouts.master')

@push('add-css')
    <style>
        .view_modal_content{
            display: flex;
            border-bottom: 1px solid #d1d1d1;
            margin-bottom: 20px;
            padding-bottom: 16px;
        }
        .message_content{
            display: flex;
            border-bottom: 1px solid #d1d1d1;
            margin-bottom: 20px;
            padding-bottom: 16px;   
        }
        .message_content label{
            width: 50%;
            margin: 0;
        }
        .view_modal_content label{
            width: 50%;
            margin: 0;
        }
        .message_content span,
        .message_content a{
            width: 50%;
        }
        .view_modal_content span,
        .view_modal_content a{
            width: 50%;
        }
        .modal-body {
            text-align: normal !important;
        }
    </style>
@endpush

@section('content')

<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <!-- Include page breadcrumb -->
    @include('admin.inc.breadcrumb')
    <!-- end page title --> 

    <div class="row mb-3">
        <div class="card p-3">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="{{ URL::route('dashboard.index') }}">Dashboard</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Issues</li>
                        </ol>
                      </nav>
                </div>
    
                <div class="col-lg-6">
                    <div class="text-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Add New</button>
                    </div>


                    <!-- Create Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Issue</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <form method="POST" action="{{ route('issues.store') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="volume_id" class="form-label">Volume Name</label>

                                            <select class="form-select" name="volume_id" id="volume_id">
                                                <option selected disabled value="">Select Volumn</option>

                                                @foreach ($volumes as $vol)
                                                    <option value="{{ $vol->id }}">({{ $vol->id }}) {{ $vol->volume_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="issue_name" class="form-label">Issue Name</label>

                                            <input type="text" class="form-control" id="issue_name" name="issue_name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="images" class="form-label">Images</label>
                                            <input class="form-control" type="file" name="images" id="images">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Issues List</h4>

                <!-- Data Table Start -->
                <div class="table-responsive">
                    <table id="basic-datatable" class="table table-striped table-hover table-dark nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#SL.</th>
                                <th>Volume Name</th>
                                <th>Issue Name</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach( $rows as $key => $row )
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{$row->volume_id }}</td>
                                <td>{{$row->issue_name }}</td>
                                <td>
                                    <img src="{{ asset($row->images) }}" alt="" style="width: 65px;">
                                   
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#showModal_{{ $row->id }}">
                                        <i class="fas fa-eye"></i>
                                    </button>

                                    <button type="button" class="btn btn-info text-white btn-sm" data-bs-toggle="modal" data-bs-target="#editModal_{{ $row->id }}">
                                        <i class="far fa-edit"></i>
                                    </button>


                                    {{-- Delete Data --}}
                                    <form id="delete-form-{{ $row->id }}" action="{{ route('issues.destroy', $row->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $row->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>


                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal_{{ $row->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Issue</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('issues.update', $row->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="mb-3">
                                                    <label for="volume_id" class="form-label">Volume Name</label>
        
                                                    <select class="form-select" name="volume_id" id="volume_id">
                                                        <option disabled value="">Select Volumn</option>
                                                        @foreach ($volumes as $vol)
                                                            <option value="{{ $vol->id }}" @if( $vol->id == $row->volume_id ) selected @endif>({{ $vol->id }}) {{ $vol->volume_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
        
                                                <div class="mb-3">
                                                    <label for="issue_name" class="form-label">Issue Name</label>
        
                                                    <input type="text" class="form-control" id="issue_name" value="{{ $row->issue_name }}" name="issue_name">
                                                </div>
        
                                                <div class="mb-3">
                                                    <label for="imagess" class="form-label">Images</label>
                                                    <input class="form-control" type="file" name="images" id="imagess">
                                                </div>

                                                @if ( !empty($row->images) )
                                                    <div class="imageShow">
                                                        <img src="{{ asset($row->images) }}" alt="" style="width: 50px;">
                                                    </div>
                                                @endif

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-info text-white">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- View Modal -->
                            <div class="modal fade" id="showModal_{{ $row->id }}" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">View Book Category</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="view_modal_content">
                                                <label>Volume Name : </label>
                                                <span class="text-dark">{{ $row->volume_id }}</span>
                                            </div>
                    
                                            <div class="view_modal_content">
                                                <label>Issue Name : </label>
                                                <span class="text-dark">{{ $row->issue_name }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Images : </label>
                                                <span class="text-dark">
                                                    <a href="{{ asset($row->images) }}" target="_blank">
                                                        <img src="{{ asset($row->images) }}" alt="" style="width: 65px;">
                                                    </a>
                                                </span>
                                            </div>
                    
                                            <div class="view_modal_content">
                                                <label>Created Date : </label>
                                                <span>
                                                    @if ( !empty($row->created_at) )
                                                        {{ date('Y-m-d', strtotime($row->updated_at)) }}
                                                    @endif
                                                </span>
                                            </div>
                    
                                            <div class="view_modal_content">
                                                <label>Updated Date : </label>
                                                <span>
                                                    @if ( !empty($row->updated_at) )
                                                        {{ date('Y-m-d', strtotime($row->updated_at)) }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Data Table End -->

            </div> <!-- end card body-->
        </div>
    </div>

</div> <!-- container -->
<!-- End Content-->

@endsection


@push('add-js')

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>

@endpush