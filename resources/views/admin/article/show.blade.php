    <!-- Show modal content -->
    <div id="showModal-{{ $row->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">{{ $title }} Details View</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Details View Start -->
                    <h4><span class="text-highlight">Title:</span> {{ $row->title }}</h4>
                    <h6><span class="text-highlight">Author:</span> {{ $row->user->name ?? '' }}</h6>

                    @if(is_file('uploads/'.$url.'/'.$row->image_path))
                    <img src="{{ asset('uploads/'.$url.'/'.$row->image_path) }}" class="img-fluid" alt="Article">
                    <br/>
                    @endif

                    @if(is_file('uploads/'.$url.'/'.$row->file_path))
                    <a href="{{ asset('uploads/'.$url.'/'.$row->file_path) }}" class="btn btn-success" download>Download Documents</a>
                    <br/>
                    @endif

                    @if(!empty($row->video_id))
                    <p><span class="text-highlight">Youtube Video:</span></p>
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $row->video_id }}?rel=0" allowfullscreen></iframe>
                    </div>
                    <br/>
                    @endif

                    <hr/>
                    <p><span class="text-highlight">Category:</span> {{ $row->category->title ?? '' }}</p>
                    <p><span class="text-highlight">Details:</span> {!! $row->description !!}</p>
                    <p><span class="text-highlight">Publish Date:</span> {{ $row->start_date }}</p>

                    <hr/>
                    <p><span class="text-highlight">Review Status:</span> 
                    @if( $row->review_status == 2 )
                    <span class="badge badge-success badge-pill">Approve</span>
                    @elseif( $row->review_status == 1 )
                    <span class="badge badge-primary badge-pill">Pending</span>
                    @else
                    <span class="badge badge-danger badge-pill">Reject</span>
                    @endif
                    </p>
                    <p><span class="text-highlight">Status:</span> 
                    @if( $row->status == 1 )
                    <span class="badge badge-success badge-pill">Active</span>
                    @else
                    <span class="badge badge-danger badge-pill">Inactive</span>
                    @endif
                    </p>
                    <!-- Details View End -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->