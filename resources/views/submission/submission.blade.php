<title>C5k | All Blogs </title>
@include('layout.header')
@section('css')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <style>
        .login-page {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .login-container {
            max-width: 900px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-header {
            background-color: #000000;
            color: #ffffff;
            padding: 10px 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .login-title {
            color: #007bff;
            font-weight: bold;
        }
        .login-form input {
            height: 45px;
            font-size: 16px;
        }
        .login-btn {
            background-color: #007bff;
            color: #ffffff;
            font-size: 16px;
            width: 100%;
            margin-top: 15px;
        }
        .login-links a {
            color: #007bff;
            text-decoration: none;
        }
        .login-links a:hover {
            text-decoration: underline;
        }
        .login-footer {
            font-size: 14px;
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
        }
    </style>
</head>
<body class="login-page">
    <div class="login-container">
        <div class="login-header">Welcome to Article Submission System</div>
        
        <div class="row mt-4">
            <div class="col-md-4 text-center">
                <img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}" class="img-fluid">
            </div>
            <div class="col-md-8">
                <form class="login-form">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" class="form-control" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <button type="button" class="btn login-btn">Author Login</button>
                    <button type="button" class="btn login-btn">Reviewer Login</button>
                    <button type="button" class="btn login-btn">Editor Login</button>
                </form>
                <div class="login-links mt-3">
                    <p><a href="#">Send Login Details</a> | <a href="#">Register Now</a> | <a href="#">Login Help</a></p>
                </div>
                <div class="login-footer">
                    <p>Software Copyright © 2025 C5K</p>
                    <p><a href="#">Aries Privacy Policy</a> | <a href="#">Data Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>


    @include('layout.footer_nav')
    @include('layout.footer')
    @include('layout.js')
    
    </body>
    
    </html>