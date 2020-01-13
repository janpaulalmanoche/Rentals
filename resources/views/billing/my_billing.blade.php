@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> My Billings History </h4>
                    {{--<a href="/user-create" class="btn btn-primary">Add</a>--}}
                    <h6>Room: {{$booking->room()->first()->room_name}} </h6>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th >Month</th>
                        <th>status</th>
                        <th>price</th>
                        <th>Date Paid</th>

                        </thead>
                        <tbody>
                        @foreach ($billings as $b)

                            <tr>
                                <td>{{date('F',strtotime($b->month))}} </td>
                                <td>{{$b->status}} </td>
                                <td>{{$b->price}} </td>
                                <td>
                                        @if($b->status === 'paid')
                                    {{date('F d Y',strtotime($b->updated_at))}}
                                            @else
                                        Not Paid
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