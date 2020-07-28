@extends('layouts.app')

@section('content')
        <div class="row" >
        <div class="container" style="background-color:white">
        <div class=" col-md-8 offset-md-2">
        <h3>Employee Add in Hotel:</h3>
        <form action="ADDEMP" method="POST">
        @csrf
        <div class="form-group">
        <label>Number Employee:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="num" id="num"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>First Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="fname" id="fname"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Mid Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="mname" id="mname"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Last Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="lname" id="lname"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="email" id="email"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>City:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="city" id="city"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Street:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="street" id="street"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Salary:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="salary" id="salary"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>User Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="name" id="name"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="pass" id="pass"  class="form-control" required>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">ADD EMPLOYEE</button>
        </div>
        </form>
        </div>
         </div>
        </div>
@endsection