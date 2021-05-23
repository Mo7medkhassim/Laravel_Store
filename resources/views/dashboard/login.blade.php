@extends('layout.login')

@section('title','login')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Log</b>In</a>
    </div>
    <!-- login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            @if(Session::has('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
            @endif
            <form action="{{ url('admin/login') }}" method="post">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto">

                    <!-- /.col -->
                    <div class="col-12">
                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Login">

                    </div>
                    <!-- /.col -->
                </div>
                @csrf
            </form>

            <div class=" col-12 mt-3 pt-2 text-center">
                <p>- OR -</p>

                <a href="{{asset('register')}}" class="text-center">

                    Create an account
                </a>

            </div>

            <!-- <a href="login.html" class="text-center">I already have a membership</a> -->

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
@endsection()
