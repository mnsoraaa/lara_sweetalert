@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @include('flash::message')

                    <div class="row">
                      <div class="container">
                        <form class="" action="{{ route('success') }}" method="post">
                          {{ csrf_field() }}
                          <input type="submit" name="success" value="Success" class="btn btn-primary">
                        </form>
                        <br>
                        <form class="" action="{{ route('warning') }}" method="post">
                          {{ csrf_field() }}
                          <input type="submit" name="warning" value="Warning" class="btn btn-warning">
                        </form>
                        <br>
                        <form class="" action="{{ route('danger') }}" method="post">
                          {{ csrf_field() }}
                          <input type="submit" name="danger" value="Danger" class="btn btn-danger">
                        </form>
                        <br>
                        <form class="" action="{{ route('info') }}" method="post">
                          {{ csrf_field() }}
                          <input type="submit" name="info" value="Info" class="btn btn-info">
                        </form>
                      </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
