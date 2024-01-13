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
                            <th>Company</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->title}}</td>
                                <td>{{$order->description}}</td>
                                <td>{{$order->notes}}</td>
                                <td>
                                    <span class="badge badge-primary">
                                        @if($order->category == 0) Webpaket
                                        @elseif($order->category == 1) Programmieren
                                        @elseif($order->category == 2) Marketing
                                        @elseif($order->category == 3) Wartung
                                       @endif
                                    </span>

                                <td>{{$order->is_flatrate}}</td>
                                <td>{{$order->annual_date}}</td>
                                <td>{{$order->price}}</td>
                                <td>  @if($order->status == 0) <p class="badge badge-secondary">Angelegt</p>
                                    @elseif($order->status == 1) <p class="badge badge-secondary">in Bearbeitung</p>
                                    @elseif($order->status == 2) <p class="badge badge-primary">Abgeschlossen</p>
                                    @elseif($order->status == 3) <p class="badge badge-success">Bezahlt</p>
                                    @endif</td>
                                <td>{{$order->company->name}}</td>
                                <td class="row justify-content-start align-items-center">
                                    <a href="{{route('orders.show',$order->id)}}" class="btn btn-primary">SHOW</a>
                                    <a href="{{route('orders.edit',$order->id)}}" class="btn btn-info mx-3">EDIT</a>
                                    <form action ="{{route('orders.destroy',$order->id)}}" method="post">
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
