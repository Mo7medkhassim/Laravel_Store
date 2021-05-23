@extends('layout.dashboard')

@section('style')
<!-- summer note -->
<link rel="stylesheet" href="{{asset('dashboard/plugins/summernote/summernote-bs4.css')}}">
@endsection()

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card card-primary">

                    <!-- form start -->
                    <form role="form" action="{{url('/ecommerce/store')}}" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name </label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="">
                            </div>


                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <label for="exampleInputEmail1">Discription </label>

                                    <!-- tools box -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                            <i class="fas fa-times"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad">
                                    <div class="mb-3">
                                        <textarea class="textarea" name="discription" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" name="cost-price" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Selling Price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" name="sale_price" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Qauntity </label>
                                <input type="text" name="qauntity" class="form-control" id="exampleInputEmail1" placeholder="">
                            </div>

                            </div>





                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection()

@section('js')

<script src="{{asset('dashboard/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function() {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
@endsection()
