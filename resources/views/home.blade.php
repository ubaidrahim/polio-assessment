@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="table-responsive">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Member Name</th>
                                <th>Father Name</th>
                                <th>Age</th>
                                <th>DOB</th>
                                <th>Household</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $thismember)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{$thismember->name}} </td>
                                <td> {{$thismember->father_name}} </td>
                                <td> {{$thismember->age}} </td>
                                <td> {{$thismember->dob}} </td>
                                <td> {{$thismember->household->household_no}} </td>
                                    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   </div>
                </div>
            </div>
@endsection
