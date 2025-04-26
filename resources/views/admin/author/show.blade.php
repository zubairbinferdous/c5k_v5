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
                    <h4><span class="text-highlight">Name:</span> {{ $row->name }}</h4>
                    <hr/>
                    @if(is_file('uploads/'.$url.'/'.$row->image_path))
                    <img src="{{ asset('uploads/'.$url.'/'.$row->image_path) }}" class="img-fluid" alt="Profile">
                    <br/><br/>
                    @endif
                    <p><span class="text-highlight">Profile:</span> {!! $row->profile !!}</p>
                    <p><span class="text-highlight">Email:</span> {{ $row->email }}</p>
                    <p><span class="text-highlight">Phone:</span> {{ $row->phone }}</p>
                    <p><span class="text-highlight">Phone:</span> {{ $row->phone }}</p>
                    <p><span class="text-highlight">Date Of Birth:</span> {{ $row->dob }}</p>
                    <p><span class="text-highlight">Address:</span> {{ $row->address }}</p>

                    <p><span class="text-highlight">User Type: </span> 
                        @if( $row->user_type == 'W' )
                        Author
                        @elseif( $row->user_type == 'R' )
                        Reviewer
                        @elseif( $row->user_type == 'A' )
                        Admin
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