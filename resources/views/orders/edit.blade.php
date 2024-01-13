@extends('layouts.master')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h1>Order Edit</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach


            </ul>

            @endif
            <div class="row">
                <div class="col-12">


                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Order</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('orders.update',$order->id)}}" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name ="title" value="{{$order->title}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter Description here ..." id="description" name="description">{{$order->description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="notes">Notes</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter Note here ..." id="notes" name="notes">{{$order->notes}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control">
                                        <option value="0" @if($order->category ==0 ) selected @endif>Webpaket</option>
                                        <option value="1"  @if($order->category ==1 ) selected @endif>Programmieren</option>
                                        <option value="2"  @if($order->category ==2 ) selected @endif>Marketing</option>
                                        <option value="3"  @if($order->category ==3 ) selected @endif>Wartung</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="is_flatrate" name="is_flatrate" value="1" @if($order->is_flatrate ==1 ) checked @endif>
                                        <label class="form-check-label" for="is_flatrate">Is flatrate?</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="annual_date">Annual date (not required)</label>
                                    <input type="date" name="annual_date" id="annual_date" value="{{$order->annual_date}}" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" id="price" name ="price" value="{{$order->price}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="0" @if($order->status ==0 ) selected @endif>angelegt</option>
                                        <option value="1" @if($order->status ==1 ) selected @endif>in Bearbeitung</option>
                                        <option value="2" @if($order->status ==2 ) selected @endif>abgeschlossen</option>
                                        <option value="3" @if($order->status ==3 ) selected @endif>bezahlt</option>
                                    </select>
                                </div>

                                <input type="hidden" name="company_id" value="{{ app('request')->input('company_id') }}">

                                <input type="submit" name="companysubmit" class="btn btn-primary w-100">
                            </form>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>






                </div>

            </div>

        @endsection

