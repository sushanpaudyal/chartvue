@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form action="">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="year">Year</label>
                                <input type="number" id="year" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" id="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create Product</button>
                            </div>


                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
