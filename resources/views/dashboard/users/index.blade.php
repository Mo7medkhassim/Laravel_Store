@extends('layouts.dashboard.app')

@section('title','User')
@section('content')
<!-- content -->





<!-- header content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item active"><a href="{{route('dashboard.index')}}"> <i class="fas fa-home"></i> Dashboard</a></li>
                    <li class="breadcrumb-item ">Administration</li>
                    <li class="breadcrumb-item ">User</li>

                </ol>

            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <h1>dashboard content for users </h1>
</section>
<!-- end content -->
@endsection()

