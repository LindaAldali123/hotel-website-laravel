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
                  
  
                  
                </ul>
            </div>
        </div>
    </nav>
  <!--End navbar-->
 

  <!--Strart data -->
  <div class="row">
<div class="container">
<div class="card " >
  @if(isset($bil))
  <table>
      <h2>Alsafir Hotel Bills </h2>
  <tr>
  <th>Name</th>
  <th>Payment</th>
  <th>Expiration</th>
  </tr>
    @foreach($bil as $bi)
    <tr>
   <td> {{$bi->card_name}} </td>
    <td>{{$bi->payment}}  </td>
    <td>{{$bi->Expiration}}</td>
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