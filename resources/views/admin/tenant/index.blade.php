@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Tenant Table </h4>
          <a href="/registerTenant" class="btn btn-primary">Add</a>
         </div>
      
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th >First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Adress</th>
                <th class="text-center">Phone No.</th>
                <th class="text-right">Room Status</th>
                <th class="text-right">Action</th>
              </thead>
              <tbody>
                @foreach ($tenants as $tenant)
               
                <tr>
                <td>{{$tenant->id}}</td>
                  <td>{{$tenant->firstname}} </td>
                  <td>{{$tenant->middlename}}</td>
                  <td>{{$tenant->lastname}}</td>
                  <td class="text-center">{{$tenant->email}}</td>
                  <td class="text-center">{{$tenant->address}}</td>
                  <td class="text-center">{{$tenant->phone}}</td>
                  <td class="text-center"></td>
                  <td class="text-center">
                  <a href="{{ url('edittenant/'.$tenant->id)}}" class="btn btn-primary badge-pill float-lg-right" >Edit</a>
                   
                  <form action="{{url('delete-tenant/'.$tenant->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                       <button class="btn btn-danger badge-pill float-lg-right" type="submit">DELETE</button>
                    </form>
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