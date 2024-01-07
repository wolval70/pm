@extends('layouts.master')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h1>Companies Index</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List of all companies</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Vorname</th>
                            <th>Nachname</th>
                            <th>Straße</th>
                            <th>Plz.</th>
                            <th>Stadt</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr>
                              <td>{{$company->id}}</td>
                              <td>{{$company->name}}</td>
                              <td>{{$company->firstname}}</td>
                              <td>{{$company->lastname}}</td>
                              <td>{{$company->street}}</td>
                              <td>{{$company->zip}}</td>
                              <td>{{$company->city}}</td>
                              <td>ACTIONS</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>


        </div>

    </div>

@endsection
