@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->
                <div class="row" >
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">

                                @if(isset($editData))
                                    <h3> Edit Product
                                        @else
                                            Add Product
                                        @endif

                                        <a class="btn btn-success float-right btn-sm" href="{{route('products.view')}}"><i class="fa fa-list"></i>Product List</a>
                                    </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >



                                <form method="POST" action="{{(@$editData)?route('products.update',$editData->id):route('products.store')}}" id="myForm" enctype="multipart/form-data" >
                                    @csrf
                                    <input type="hidden"name="id"value="{{@$editData->id}}">

                                    <div class="form-row ">

                                        <div class="col-md-4">
                                            <label>Supplier Name  <font style="color: red">*</font></label>
                                            <select name="supplier_id" class="form-control">
                                              <option value="">Select Supplier</option>
                                                @foreach($suppliers as $supplier)
                                               <option value="{{$supplier->id}}" {{@$editData->supplier_id==$supplier->id?"selected":''}}>{{$supplier->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label>Unit Name  <font style="color: red">*</font></label>
                                            <select name="unit_id" class="form-control">
                                                <option value="">Select Unit</option>
                                                @foreach($units as $unit)
                                                    <option value="{{$unit->id}}" {{@$editData->unit_id==$unit->id?"selected":''}}>{{$unit->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label>Category Name  <font style="color: red">*</font></label>
                                            <select name="category_id" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{$cat->id}}" {{@$editData->category_id==$cat->id?"selected":''}}>{{$cat->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label> Product Name  <font style="color: red">*</font></label>
                                            <input type="text" name="name" value="{{@$editData->name}}" class="form-control form-control-sm"id="mobile_no">

                                        </div>




                                    </div>



                                    <div class="form-group col-md-6"style="padding-top:30px;">
                                        <button type="submit" class="btn btn-primary btn-sm">

                                            {{(@$editData)?'Update':'Submit'}}

                                        </button>

                                    </div>

                                </form>



                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>



    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {
                    "category_id": {
                        required: true,
                    },
                    "supplier_id": {
                        required: true,
                    },
                    "unit_id": {
                        required: true,

                    },
                    "name": {
                        required: true,

                    }
                },

                messages: {


                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>






@endsection