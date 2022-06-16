@extends('layouts.app')
@section('content')
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <h2>Laravel Custom Logout System - CodeCheef</h2>
    <div class="card">
      <div class="card-header">Laravel Custom Logout</div>
      <div class="card-body"><div class="col-md-12 text-center">
           <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn btn-primary">Logout</button>
           </form>
       </div></div> 
    </div>
  </div>
</body>
</html>
@endsection
