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
                          <li class="breadcrumb-item active" aria-current="page">Book Front Matter</li>
                        </ol>
                      </nav>
                </div>
    
                <div class="col-lg-6">
                    <div class="text-end">
                        <a href="{{ URL::route('book.front-matter.create') }}" class="btn btn-primary">Add New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Books Front Matter</h4>

                <!-- Data Table Start -->
                <div class="table-responsive">
                    <table id="basic-datatable" class="table table-striped table-hover table-dark nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#SL.</th>
                                <th>Book Name</th>
                                <th>Front Matter</th>
                                <th>Pages Range	</th>
                                <th>Pdf Url</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach( $rows as $key => $row )
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $row->book_name }}</td>
                                <td>{{ $row->front_matter }}</td>
                                <td>{{ $row->pages_range }}</td>
                                <td>
                                    @if ( !empty($row->pdf_url) )
                                        <a href="{{ asset( 'public/admin/books/' . $row->pdf_url) }}" target="_blank" >
                                           <img src="{{ asset('backend/books/pdf-button-thumbnail.png') }}" alt="" width="60">
                                        </a>
                                    @else
                                       <span class="text-danger">N/A</span>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#showModal_{{ $row->id }}">
                                        <i class="fas fa-eye"></i>
                                    </button>

                                    <a href="{{ URL::route('book.front-matter.edit', $row->id) }}" class="btn btn-info text-white btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>


                                    {{-- Delete Data --}}
                                    <form id="delete-form-{{ $row->id }}" action="{{ route('book.front-matter.destroy', $row->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $row->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>


                            <!-- View Modal -->
                            <div class="modal fade" id="showModal_{{ $row->id }}" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">View Book List</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="view_modal_content">
                                                <label>Name : </label>
                                                <span class="text-dark">{{ $row->name }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Category : </label>
                                                <span class="text-dark">{{ $row->book_cat }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>price : </label>
                                                <span class="text-dark">{{ $row->price }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Authors : </label>
                                                <span class="text-dark">{{ $row->authors }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Hard Cover : </label>
                                                <span class="text-dark">{{ $row->hard_cover }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Paper Book : </label>
                                                <span class="text-dark">{{ $row->paper_book }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Online Isbn : </label>
                                                <span class="text-dark">{{ $row->online_isbn }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>First Isbn : </label>
                                                <span class="text-dark">{{ $row->first_isbn }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>DOI : </label>
                                                <span class="text-dark">{{ $row->doi }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Type : </label>
                                                <span class="text-dark">{{ $row->type }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Items Weight : </label>
                                                <span class="text-dark">{{ $row->items_weight }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Dimention : </label>
                                                <span class="text-dark">{{ $row->dimention }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Copyright : </label>
                                                <span class="text-dark">{{ $row->copyright }}</span>
                                            </div>
                    
                                            <div class="view_modal_content">
                                                <label>Status : </label>
                                                @if ( $row->status == 1 )
                                                    <span class="badge text-bg-primary">Active</span>
                                                @else
                                                    <span class="badge text-bg-danger">Deactive</span>
                                                @endif
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