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
                    <h6>Room: no booking </h6>
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
                        {{--@foreach ($tenants as $tenant)--}}

                        <tr>


                        </tr>
                        {{--@endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection