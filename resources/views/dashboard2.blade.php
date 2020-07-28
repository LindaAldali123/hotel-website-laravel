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
  <div class="row">
<div class="container">
  @if(isset($res))
  <table>
      <h2>Data The Customers</h2>
  <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Email</th>
  <th>DELETE</th>
  </tr>
    @foreach($res as $rs)
    <tr>
   <td> {{$rs->id}} </td>
    <td>{{$rs->name}}  </td>
    <td>{{$rs->email}}  </td>
    <td><a href="/users/delete/{{$rs->id}}">delete</a></td>
    </tr>
    @endforeach
    </table>
  @endif
  </div>
 </div>

  <!--Start data Reserv-->
  <div class="reserv row">
<div class="container">
  @if(isset($reserv))
  <table>
      <h2>Data The reservation</h2>
  <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Period</th>
  <th>room Count</th>
  <th>DELETE</th>
  </tr>
    @foreach($reserv as $vv)
    <tr>
   <td> {{$vv->id}} </td>
    <td>{{$vv->name}}  </td>
    <td>{{$vv->period}}  </td>
    <td>{{$vv->room_id}}  </td>
    <td><a href="/reservations/delete/{{$vv->id}}">delete</a></td>
    </tr>
    @endforeach
    </table>
  @endif
  </div>
 </div>
 <!--End data-->
 <!--Start upd-->
 <div class="row">
<div class="container">
<h3>Update The Period</h3>
<form action="dashboard2" method="POST">
        @csrf
        <div class="form-group">
        <label>ID:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="idd" id="idd"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Name Customer:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="na" id="na"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Period:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="per" id="per"  class="form-control" required>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
        </form>
        </div>
        </div>
 <!--End upd-->
 
  <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/delet.js"></script>
   
   
</body>

</html>