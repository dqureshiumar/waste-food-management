@extends('layouts.app')
@section('content')
<div class="container">
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Food Name</th>
                    <th scope="col">Address</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                    @foreach($foods as $food)
                  <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$food->name}}</td>
                    <td>{{$food->foodname}}</td>
                    <td>{{$food->address}}</td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
</div>
@endsection