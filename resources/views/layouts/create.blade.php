@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{route('food.store')}}"" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
    <div class="col-sm-6">
    <div class="form-group">
      <label for="name">Hotel Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter the Hotel Name" required>
    </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
        <label for="name">Food Name</label>
        <input type="text" class="form-control" name="foodname" id="foodname" placeholder="Enter the Food Name" required>
    </div>
    </div>
    </div>
    <div class="form-group">
      <label for="address">Enter Your Address</label>
      <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your full address" required></textarea>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" placeholder="Enter Description" rows="3" required></textarea>
    </div>
    <div class="form-group">
            <label for="filename">Upload Image</label>
            <input type="file" name="filename" class="form-control-file" id="filename">
    </div>
    <div class="form-group" align="center">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
  </form>
</div>
  @endsection