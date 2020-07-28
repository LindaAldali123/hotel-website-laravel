@extends('layouts.app');


@section('content')
<div class="content">
 <div class="container">
 @foreach($employee as $em)
 <div class="panel panel-primary">
 <div class="panel-heading">
 <h3 class="panel-title">{{$em->eid}}</h3>
 <h3 class="panel-title">create at : {{$em->updated_at}}</h3>

 </div>
 <div class="panel-body">
 {{$em->emp_fn}} - {{$em->emp_ln}}
</div>
</div>
@endforeach
</div>
</div>
@endsection



