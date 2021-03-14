@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">{{ __('Dashboard') }}</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('create') }}" class="btn btn-primary float-right">Create
                            New User</a>
                    </div>
                </div>
                <div>
                    <table class="table my-3">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection
