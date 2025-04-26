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
            <a href="{{ URL::route($url.'.index') }}" class="btn btn-info">Refresh</a>
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
                  <h4 class="header-title">All {{ $title }}s</h4>
                  <br/>

                  <ul class="nav nav-tabs mb-3">
                    <li class="nav-item">
                        <a href="#website-tab" data-toggle="tab" aria-expanded="false" class="nav-link active">
                            Site Info
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact-tab" data-toggle="tab" aria-expanded="true" class="nav-link">
                            Contact Info
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#social-tab" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Social Info
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#account-tab" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Account
                        </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane show active" id="website-tab">
                        
                      <!-- Form Start -->
                      <form class="needs-validation" novalidate action="{{ URL::route($url.'.siteinfo') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @foreach( $rows as $row )
                        @endforeach

                        <input name="id" type="hidden" value="{{ (isset($row->id))?$row->id:-1 }}">

                        <div class="form-group">
                            <label for="title">Site Title <span>*</span></label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ isset($row->title)?$row->title:'' }}" placeholder="Site Title" required>

                            <div class="invalid-feedback">
                              Please Provide Site Title.
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="details">Meta Description</label>
                            <textarea class="form-control" name="details" id="details" rows="4">{{ isset($row->description)?$row->description:'' }}</textarea>

                            <div class="invalid-feedback">
                              Please Provide Site Details.
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="keywords">Meta Keywords: <span>Separate Every Keyword by Using (,) Symbol</span></label>
                            <textarea class="form-control" name="keywords" id="keywords" rows="4">{{ isset($row->keywords)?$row->keywords:'' }}</textarea>

                            <div class="invalid-feedback">
                              Please Provide Meta Tags.
                            </div>
                        </div>

                       <div class="row">
                          <div class="form-group col-md-6">

                            @if(isset($row->logo_path))
                            <img src="{{ asset('backend/logo/' . $row->logo_path) }}" class="img-fluid site-image" alt="Site Logo">
                            @endif

                            <label for="logo">Site Logo: <span>Best Resolution Height-80px, Width-Any</span></label>
                            <input type="file" class="form-control" name="logo" id="logo" placeholder="Site Logo">

                            <div class="invalid-feedback">
                              Please Provide Site Logo.
                            </div>
                          </div>

                          <div class="form-group col-md-6">

                            @if(isset($row->favicon_path))
                            <img src="{{ asset('backend/favicon/'.$row->favicon_path) }}" class="img-fluid site-image" alt="Site Favicon">
                            @endif

                            <label for="favicon">Site Favicon: <span>Best Resolution Height-64px, Width-64px</span></label>
                            <input type="file" class="form-control" name="favicon" id="favicon" placeholder="Site Favicon">

                            <div class="invalid-feedback">
                              Please Provide Site Favicon.
                            </div>
                          </div>
                           </div>

                        <div class="form-group">
                            <label for="footer_text">Footer Text</label>
                            <textarea class="form-control" name="footer_text" id="footer_text" rows="4" required>{{ isset($row->footer_text)?$row->footer_text:'' }}</textarea>

                            <div class="invalid-feedback">
                              Please Provide Footer Text.
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>

                      </form>
                      <!-- Form End -->

                    </div>
                    <div class="tab-pane" id="contact-tab">
                        
                      <!-- Form Start -->
                      <form class="needs-validation" novalidate action="{{ URL::route($url.'.contactinfo') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @foreach( $rows as $row )
                        @endforeach

                        <input name="id" type="hidden" value="{{ (isset($row->id))?$row->id:-1 }}">

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="phone_no">Phone No 1</label>
                            <input type="text" class="form-control" name="phone_no" id="phone_no" value="{{ isset($row->phone_one)?$row->phone_one:'' }}" placeholder="Phone No 1" required>

                            <div class="invalid-feedback">
                              Please Provide Phone No 1.
                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="phone_no2">Phone No 2</label>
                            <input type="text" class="form-control" name="phone_no2" id="phone_no2" value="{{ isset($row->phone_two)?$row->phone_two:'' }}" placeholder="Phone No 2">

                            <div class="invalid-feedback">
                              Please Provide Phone No 2.
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="email_address">Email Address 1</label>
                            <input type="email" class="form-control" name="email_address" id="email_address" value="{{ isset($row->email_one)?$row->email_one:'' }}" placeholder="Email Address 1" required>

                            <div class="invalid-feedback">
                              Please Provide Email Address 1.
                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="email_address2">Email Address 2</label>
                            <input type="email" class="form-control" name="email_address2" id="email_address2" value="{{ isset($row->email_two)?$row->email_two:'' }}" placeholder="Email Address 2">

                            <div class="invalid-feedback">
                              Please Provide Email Address 2.
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="contact_address">Contact Address</label>
                            <input type="text" class="form-control" name="contact_address" id="contact_address" value="{{ isset($row->contact_address)?$row->contact_address:'' }}" placeholder="Contact Address" required>

                            <div class="invalid-feedback">
                              Please Provide Contact Address.
                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="contact_mail">Contact Mail</label>
                            <input type="email" class="form-control" name="contact_mail" id="contact_mail" value="{{ isset($row->contact_mail)?$row->contact_mail:'' }}" placeholder="Contact Mail" required>

                            <div class="invalid-feedback">
                              Please Provide Contact Mail.
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>

                      </form>
                      <!-- Form End -->

                    </div>
                    <div class="tab-pane" id="social-tab">
                        
                      <!-- Form Start -->
                      <form class="needs-validation" novalidate action="{{ URL::route($url.'.socialinfo') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @foreach( $socials as $social )
                        @endforeach

                        <input name="id" type="hidden" value="{{ (isset($social->id))?$social->id:-1 }}">

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="facebook">Facebook</label>
                            <input type="url" class="form-control" name="facebook" id="facebook" value="{{ isset($social->facebook)?$social->facebook:'' }}" placeholder="Facebook URL">

                            <div class="invalid-feedback">
                              Please Provide Facebook URL.
                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="twitter">Twitter</label>
                            <input type="url" class="form-control" name="twitter" id="twitter" value="{{ isset($social->twitter)?$social->twitter:'' }}" placeholder="Twitter URL">

                            <div class="invalid-feedback">
                              Please Provide Twitter URL.
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="linkedin">Linkedin</label>
                            <input type="url" class="form-control" name="linkedin" id="linkedin" value="{{ isset($social->linkedin)?$social->linkedin:'' }}" placeholder="Linkedin URL">

                            <div class="invalid-feedback">
                              Please Provide Linkedin URL.
                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="instagram">Instagram</label>
                            <input type="url" class="form-control" name="" id="instagram" value="{{ isset($social->instagram)?$social->instagram:'' }}" placeholder="Instagram URL">

                            <div class="invalid-feedback">
                              Please Provide Instagram URL.
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="pinterest">Whatsapp</label>
                            <input type="url" class="form-control" name="pinterest" id="pinterest" value="{{ isset($social->pinterest)?$social->pinterest:'' }}" placeholder="Whatsapp number">

                            <div class="invalid-feedback">
                              Please Provide Pinterest URL.
                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="youtube">Youtube</label>
                            <input type="url" class="form-control" name="youtube" id="youtube" value="{{ isset($social->youtube)?$social->youtube:'' }}" placeholder="Youtube URL">

                            <div class="invalid-feedback">
                              Please Provide Youtube URL.
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>

                      </form>
                      <!-- Form End -->

                    </div>
                    <div class="tab-pane" id="account-tab">

                      <div class="card">
                        <div class="card-header">
                          <h4 class="header-title">Change Mail Address</h4>
                        </div>
                        <div class="card-body">
                          <!-- Form Start -->
                          <form class="needs-validation" novalidate action="{{ URL::route($url.'.changemail') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Mail Address <span>*</span></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="invalid-feedback">
                                      Please Provide Mail Address
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Change</button>
                                </div>
                            </div>

                          </form>
                          <!-- Form End -->
                        </div>
                      </div>
                        
                      <div class="card">
                        <div class="card-header">
                          <h4 class="header-title">Change Password</h4>
                        </div>
                        <div class="card-body">
                          <!-- Form Start -->
                          <form class="needs-validation" novalidate action="{{ URL::route($url.'.changepass') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Old Password <span>*</span></label>

                                <div class="col-md-6">
                                    <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" required autocomplete="old_password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="invalid-feedback">
                                      Please Provide Your Old Password.
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">New Password <span>*</span></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="invalid-feedback">
                                      Please Provide A New Password.
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password <span>*</span></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="invalid-feedback">
                                    Please Confirm Your New Password.
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Change</button>
                                </div>
                            </div>

                          </form>
                          <!-- Form End -->
                        </div>
                      </div>

                    </div>
                  </div>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->

    
</div> <!-- container -->
<!-- End Content-->

@endsection