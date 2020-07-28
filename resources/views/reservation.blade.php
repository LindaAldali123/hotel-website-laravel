@extends('layouts.app')

@section('content')
        <div class="row" >
        <div class="container" style="background-color:white">
        <div class=" col-md-8 offset-md-2">
        <h3>Reservation in Hotel:</h3>
        <h5>The count reservation in Hotel : {{$count}}</h5>
        <form action="reservation" method="POST">
        @csrf
        <div class="form-group">
        <label>User Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="name" id="name"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Phone Number:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="cid" id="cid"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Member Count:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="member" id="member"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Room Count:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="room" id="room"  class="form-control" required>
        </div>
        <div class="form-group">
        <label>Days Count:</label>
        <input type="text" name="period" id="period" class="form-control" required>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Reserv</button>
        </div>
        </form>
        </div>
         </div>
        </div>
@endsection