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
          <a href="/user-create" class="btn btn-primary">Add</a>
         </div>
      
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th >first name</th>
                <th>middle name</th>
                <th>last name</th>
                <th class="text-center">email</th>

                <th class="text-center">phone no.</th>

              </thead>
              <tbody>
                @foreach ($tenants as $tenant)
               
                <tr>

                  <td>{{$tenant->fname}} </td>
                  <td>{{$tenant->mname}}</td>
                  <td>{{$tenant->lname}}</td>
                  <td >{{$tenant->email}}</td>
                  <td >{{$tenant->phone_no}}</td>
                  {{--<td class="text-center">--}}
                  {{--<a href="{{ url('edittenant/'.$tenant->id)}}" class="btn btn-primary badge-pill float-lg-right" >Edit</a>--}}
                   {{----}}
                  {{--<form action="{{url('delete-tenant/'.$tenant->id)}}" method="POST">--}}
                    {{--{{csrf_field()}}--}}
                    {{--{{method_field('DELETE')}}--}}
                       {{--<button class="btn btn-danger badge-pill float-lg-right" type="submit">DELETE</button>--}}
                    {{--</form>--}}
                    {{--</td>--}}

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