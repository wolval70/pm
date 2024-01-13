@extends('layouts.master')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h1>Orders Index</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    @if(session()->get('success'))

        <div class="alert alert-success">
            {{session()->get('success')}}

        </div>

    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List of all orders</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Notes</th>
                            <th>Category</th>
                            <th>Is Flatrate</th>
                            <th>Annual Date</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Company Id</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$company->id}}</td>
                                <td>{{$company->name}}</td>
                                <td>{{$company->firstname}}</td>
                                <td>{{$company->lastname}}</td>
                                <td>{{$company->street}}</td>
                                <td>{{$company->zip}}</td>
                                <td>{{$company->city}}</td>
                                <td class="row justify-content-start align-items-center">
                                    <a href="{{route('companies.show',$company->id)}}" class="btn btn-primary">SHOW</a>
                                    <a href="{{route('companies.edit',$company->id)}}" class="btn btn-info mx-3">EDIT</a>
                                    <form action ="{{route('companies.destroy',$company->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Wollen Sie wirklich löschen?!')"
                                                style="-webkit-appearance:none;">DELETE</button>



                                    </form>



                                </td>
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
