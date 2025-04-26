    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">
                        @can('isAdmin')
                            Admin
                        @endcan
                        @can('isReviewer')
                            Reviewer
                        @endcan
                        @can('isAuthor')
                            Author
                        @endcan
                        </a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>     
    <!-- end page title --> 