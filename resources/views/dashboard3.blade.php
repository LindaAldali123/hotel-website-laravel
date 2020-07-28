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
                        <a class="nav-link" href="ADDEMP" > ADD THE EMPLOYEE </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="bill" > SHOW BILLS </a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
  <!--End navbar-->
<div class="row">
<div class="container">
  @if(isset($results))
  <table>
      <h2>Data The Employees</h2>
  <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Email</th>
  <th>Salary</th>
  <th>DELETE</th>
  </tr>
    @foreach($results as $rslt)
    <tr>
   <td> {{$rslt->id}} </td>
    <td>{{$rslt->user_name}}  </td>
    <td>{{$rslt->emp_email}}  </td>
   <td> {{$rslt->salary}} </td>
   <td><a href="/employees/delete/{{$rslt->id}}">delete</a></td>
    </tr>
    @endforeach
    </table>
  @endif
  </div>
 </div>
           
<!--Start Update-->
<div class="row">
<div class="container">
<h3>Update The Salary</h3>
<form action="dashboard3" method="POST">
        @csrf
        <div class="form-group">
        <label>Name Employee:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="name" id="name"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="email" id="email"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Salary:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="salary" id="salary"  class="form-control" required>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
        </form>
        </div>
        </div>
<!--End Update-->
<!--
<div class="row">
<div class="container">
<h3>Update The Salary for All Employees</h3>
<form action="dashboard3" method="POST">
        @csrf
        <div class="form-group">
        <label>INCREAMENT:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="new" id="new"  class="form-control" required>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">UPDATE For All Employees</button>
        </div>
        </form>
        </div>
        </div>
-->
  

  <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/delet.js"></script>
   
   
</body>

</html>