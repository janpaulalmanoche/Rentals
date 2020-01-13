@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Billing Details </h4>

            <h6>Room: {{$room->room()->first()->room_name}}</h6>
            <h6>Tenant: {{$room->user()->first()->fname}} {{$room->user()->first()->lname}}</h6>
        </div>
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
            
                 <th>Month</th>
                <th>Status</th>
                <th>Price</th>
                <th>Action<th>

              </thead>
              <tbody>


              @foreach ($billings as $bill)
                  <tr>
                <td>{{date('F',strtotime($bill->month))}}</td>
                  {{--<td>{{$bill->month}} </td>--}}
                  <td>{{$bill->status}}</td>
                  <td>{{$bill->price}}</td>
                    <td>
                        @if($bill->status === 'paid')
                            <h6>Paid</h6>
                            @else
                            <a href="{{url('pay-billing',$bill->id)}}">
                                <button class="btn btn-primary">Mark as Paid </button>
                            </a>
                            @endif
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