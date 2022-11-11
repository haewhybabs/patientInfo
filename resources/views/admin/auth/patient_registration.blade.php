<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{env('APP_NAME')}}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:image" content="assets/meta-img.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/favicon.png')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('admin/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset("admin/css/toastr.css")}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                     <h2 style="color:white;">Patient Information</h2>
                    
                </div>
                <div class="login-form">
                    <form method="post" action="{{URL::TO('/registration')}}">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" id="name" required type="text" class="form-control" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input name="email" id="email" required type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input name="phone_number" id="phone_number" required type="text" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" id="address" required type="text" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label>Date of birth</label>
                            <input name="dob" id="dob" required type="date" class="form-control" placeholder="Date of birth">
                        </div>
                        <div class="form-group">
                            <label>Weight</label>
                            <input name="weight" id="weight" required type="text" class="form-control" placeholder="Weight">
                        </div>
                        <div class="form-group">
                            <label>Height</label>
                            <input name="height" id="height" required type="text" class="form-control" placeholder="Height">
                        </div>
                        <div class="text-center">
                            <h4>Next of Kin</h4>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input name="nok_name" id="name" required type="text" class="form-control" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="nok_email" id="email" required type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input name="nok_phone_number" id="phone_number" required type="text" class="form-control" placeholder="Phone Number">
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset('admin/js/toastr/toastr.min.js') }}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>
    <script>
        @if(Session::has('message'))
          var type = "{{ Session::get('alert-type', 'info') }}";
          switch(type){
              case 'info':
                  toastr.info("{{ Session::get('message') }}");
                  break;
              
              case 'warning':
                  toastr.warning("{{ Session::get('message') }}");
                  break;
      
              case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;
      
              case 'error':
                  toastr.error("{{ Session::get('message') }}");
                  break;
          }
        @endif
        @if($errors->any())
            @foreach ($errors->all() as $error)
                toastr.warning("{{ $error }}");
            @endforeach
        @endif
    </script>
</body>
</html>
