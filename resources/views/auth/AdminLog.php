<!DOCTYPE HTML>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>Laravel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="css/hover.css">
     <link rel="stylesheet" type="text/css" href="css/admin.css">
     <link rel="stylesheet" href="css/hover.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

    <div class="admin hvr-bob" data-aos="zoom-out">
            
            
        <div class="head">
            <h1 class="title">Login Register <span>Manager</span></h1>
            
            <h1 class="PS">ALsafir-<span>Hotel</span></h1>
            
            </div>
         <div class="container">
            
             <div class="row">
             
                 <div class="col-md-6 col-sm-12 col-xs-12">
                 <img src="./img/admin.jpg">
                 </div>
                 
                 <div class="col-md-6 col-sm-12 col-xs-12">
                 
                     <form  method="POST" action="{{ route('AdminLog') }}">
                     <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                         
                         <input type="password" placeholder="Password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                         
     <input class="hvr-curl-top-left" type="submit" value="Login Register">
                         
                     </form>
                 </div>
                 
             </div>
            </div>
            
</div>   
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script> 

    <script type="text/javascript" src="js/jquery-3.x-git.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
<script src="js/jquery-3.2.1.min.js"></script>
 
   
   
   
</body>
</html>