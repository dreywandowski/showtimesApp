@extends('layouts.cinemas')
@section('content')
    
<div class="row">

    <div class="col-md-9 mb-5 mb-md-0">
        <center><h2 class="h3 mb-3 text-black">Add a new Cinema View Listing</h2> </center>
        <form class="form-sample" method="POST" enctype="multipart/form-data" action="/cinemas/create ">
            @csrf
        <div class="p-3 p-lg-5 border">

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="c_fname" class="text-black">Movie Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="movie">
                </div>
                <div class="col-md-6">
            </div>

            </div>
            <div class="form-group row mb-5">
                <div class="col-md-3">
                    <label for="c_email_address" class="text-black">Cinema Name<span class="text-danger">*</span></label>
                    <input type="text"  class="form-control" id="c_email_address" name="cinema" placeholder="e.g. National Theatre">
                </div>
                <div class="col-md-3">
                    <label for="c_phone" class="text-black">Showtime <span class="text-danger">*</span></label>
                    <input type="datetime-local" class="form-control" id="c_phone" name="showtime" placeholder="format: YYYY-MM--DD">
                </div>
            </div>
        </div>

            <div class="form-group">
                <button class="btn btn-primary btn-lg py-3 btn-block" type="submit" >Add New Listing</button>
            </div>
        </form>

<a href="/cinemas" class="btn btn-sm btn-primary">
                                Go Home
                                </a>
@endsection
