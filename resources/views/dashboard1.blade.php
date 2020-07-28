<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/hover.css">
    <title>Alsafir Hotel</title>
</head>

<body>
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="overlay"></div>
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Alsafir-Hotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="welcome" > Sign The Website </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="reservation">Reservation in Hotel</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="payment">Payment for Hotel</a>
                    </li>
  
                  
                </ul>
            </div>
        </div>
    </nav>
  <!--End navbar-->
 <!-- Start Latest Posts -->
 <div class="container">
        		<div class="row">
        		<!-- Start Grid column -->
        		<div class="col-lg-4 ">
        		<div class="card" style="width: 18rem;">
  <img src="img/1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">Welcome Alsafir Hotel</h4>
  </div>
  </div>
  </div>
  <!-- Start Grid column -->
  <div class="col-lg-4 ">
  <div class="card " style="width: 18rem;">
  <img src="img/2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">Welcome Alsafir Hotel</h4>
  </div>
  </div>
  </div>
  <div class="col-lg-4 ">
  <div class="card" style="width: 18rem;">
  <img src="img/3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">Welcome Alsafir Hotel</h4>
  </div>
</div>
</div>
       <!--  Grid column --> 			
        		</div>
        	</div>
        </div>
        <!-- End Latest Posts -->
        <!-- Start Latest Posts -->
 <div class="container">
        		<div class="row">
        		<!-- Start Grid column -->
        		<div class="col-lg-4 ">
        		<div class="card" style="width: 18rem;">
  <img src="img/4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">Welcome Alsafir Hotel</h4>
  </div>
  </div>
  </div>
  <!-- Start Grid column -->
  <div class="col-lg-4 ">
  <div class="card " style="width: 18rem;">
  <img src="img/5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">Welcome Alsafir Hotel</h4>
  </div>
  </div>
  </div>
  <div class="col-lg-4 ">
  <div class="card" style="width: 18rem;">
  <img src="img/6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">Welcome Alsafir Hotel</h4>
  </div>
</div>
</div>
       <!--  Grid column --> 			
        		</div>
        	</div>
        </div>
        <!-- End Latest Posts -->

  <!--Strart data -->
  <div class="row">
<div class="container">
<div class="card " >
  @if(isset($serv))
  <table>
      <h2>Alsafir Hotel Services </h2>
  <tr>
  <th>Id</th>
  <th>Service Name</th>
  <th>Service Price</th>
  </tr>
    @foreach($serv as $se)
    <tr>
   <td> {{$se->ser_id}} </td>
    <td>{{$se->ser_name}}  </td>
    <td>{{$se->tot_price}}</td>
    </tr>
    @endforeach
    </table>
  @endif
  </div>
  </div>
 </div>
  <!--End data -->
       
 
  

  <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/delet.js"></script>
   
   
</body>

</html>