@extends('layouts.cinemas')
@section('content')

@if ($data)

<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/shop">Home</a> <span class="mx-2 mb-0">/</span> {{$data['movie'] }}<strong class="text-black"></strong></div>
        </div><span class="mx-2 mb-0" id="ajaxRep" style="color:green"></span>
      </div>

      <ol>
        <li> Movie Name: {{$data['movie'] }}</li><br>
         <li> Cinema Showing: {{$data['cinema'] }}</li><br>
          <li> Time Showing: {{date("F jS Y, g:i a", strtotime($data['showtime'])) }}</li><br>
          
      </ol>
    </div>  

<a href="/cinemas" class="btn btn-sm btn-primary">
                                Go Home
                                </a>
     
    @endif

@endsection