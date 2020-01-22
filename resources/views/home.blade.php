@extends('layouts.app')

@section('content')
@if(auth()->user()->isAdmin == 1)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="row">
                    {{--  --}}
                    <div class="col-sm-6">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">All Contribution : {{App\Food::all()->count()}}</h5>
                              <h6 class="card-subtitle mb-2 text-muted">Saved Wastage</h6>
                              <p class="card-text">View all of your Contribution, to save food wastage</p>
                              <a href="/views" class="card-link">View All!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">All Users : {{App\User::all()->count()}}</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">Our special users</h6>
                                  <p class="card-text">All Users</p>
                                  <a href="/all-users" class="card-link">Click here!</a>
                                </div>
                            </div>
                    </div>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Add Today's Leftover Food</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">Click to add</h6>
                                  <p class="card-text">Help yourself to prevent wastage of food</p>
                                  <a href="{{route('food.index')}}" class="card-link">Add New!</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Total Contribution: {{App\Food::where('userid',auth()->user()->id)->count()}}</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">Saved Wastage</h6>
                                  <p class="card-text">View all of your Contribution, to save food wastage</p>
                                  <a href="/view-all" class="card-link">View All!</a>
                                </div>
                              </div>
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
