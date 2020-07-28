@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">WelCome To Alsafir Hotel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                     s<a class="btn btn-link" href="dashboard1"> Welcome to Hotel [click Here] To Login?</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
