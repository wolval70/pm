@extends('layouts.master')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h1>Company Edit</h1>
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
                            <h3 class="card-title">Edit company</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('companies.update',$company->id)}}" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name ="name" value="{{$company->name}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="firstname">Firstname</label>
                                    <input type="text" id="firstname" name ="firstname" value="{{$company->firstname}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="Lastname">Lastname</label>
                                    <input type="text" id="lastname" name ="lastname" value="{{$company->lastname}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="street">Street</label>
                                    <input type="text" id="street" name ="street" value="{{$company->street}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="zip">Zip</label>
                                    <input type="number" id="zip" name ="zip" value="{{$company->zip}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" id="city" name ="city" value="{{$company->city}}" class="form-control">
                                </div>
                                <input type="submit" name="companyedit" class="btn btn-primary w-100">
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>






                </div>

            </div>

        @endsection

