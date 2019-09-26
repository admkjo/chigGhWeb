@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div> --}}

    </div>

        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" >
                <thead>
                  <tr>
                    <th class="th-sm">Code
                    </th>
                    <th class="th-sm">Name
                    </th>
                    <th class="th-sm">Phone
                    </th>
                    <th class="th-sm">email
                    </th>
                    <th class="th-sm">location
                    </th>
                    <th class="th-sm">Date Registered
                    </th>
                 </tr>
                </thead>
                <tbody>
                        @if (empty($clients))
                        <tr>
                            <td>     NO DATA AVAILABLE</td>
                        </tr>
                        @else
                        @foreach ($clients as $client)
                        <tr>
                            <td> {{ $client->code ??  'N/A' }}</td>
                            <td> {{ $client->name ?? 'N/A'  }}</td>
                            <td> {{ $client->phone ?? 'N/A'  }}</td>
                            <td> {{ $client->email ?? 'N/A'  }}</td>
                            <td> {{ $client->location ?? 'N/A' }}</td>
                            <td> {{ $client->created_at ?? 'N/A' }}</td>
                        </tr>
                        @endforeach
                        @endif
                </tbody>
              </table>


</div>
@endsection
