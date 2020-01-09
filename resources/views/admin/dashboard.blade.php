@extends('layouts.master')
@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
    {{-- <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Rent Details</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Tenant Name</th>
                <th>Room Name</th>
                <th>Room Type</th>
                <th class="text-center">Tenant Quantity</th>
                <th class="text-right">Rent Started</th>
                <th class="text-right">Rent Ended</th>
              </thead>
              <tbody>
                @foreach ($jointabledata as $row)
                <tr>
                <td>{{$row->lastname}}, {{$row->firstname}}</td>
                    <td>{{$row->room_name}}</td>
                    <td>{{$row->room_type}}</td>
                    <td class="text-center">{{$row->tenant_quantity}}</td>

                    <td class="text-right">sample</td>
                    <td class="text-right">sample</td>
                    
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> --}}



 
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-category">List of Rooms</h5>
          <h4 class="card-title">Ocupied Room</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Name</th>
                <th>Country</th>
                <th>City</th>
                <th class="text-right">Salary</th>
              </thead>
              <tbody>
                @foreach ($activeTenants as $activeTenant)
                <tr>      
                <td class="text-left">{{$activeTenant->room_type}} </td>
              
                <td> {{$activeTenant->room_name}} </td>
                <td> {{$activeTenant->price}} </td>
                  <td class="td-actions text-right">
                    <button class="btn btn-primary btn-sm">
                      <i class="now-ui-icons ui-2_settings-90"></i>
                    </button>
                    <button class="btn btn-warning btn-sm">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-category">List of Rooms</h5>
          <h4 class="card-title">Available Room</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Name</th>
                <th>Country</th>
                <th>City</th>
                <th class="text-right">Salary</th>
              </thead>
              <tbody>
                <tbody>
                  @foreach ($inactiveTenants as $inactiveTenant)
                      
               
                  <tr>      
                  <td class="text-left">{{$inactiveTenant->room_name}}  </td>
                 
                  <td> {{$inactiveTenant->room_type}}</td>
                  <td> {{$inactiveTenant->price}}</td>
                    <td class="td-actions text-right">
                      <button class="btn btn-primary btn-sm">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button class="btn btn-warning btn-sm">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
