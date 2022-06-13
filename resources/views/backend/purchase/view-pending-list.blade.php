@extends('backend.layouts.master')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Purchase</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Purchase</li>
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
                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">
                                <h3>Pending Purchase List

                                    {{--<a class="btn btn-success float-right btn-sm" href="{{route('purchases.add')}}"><i class="fa fa-plus-circle"></i> Add Purchase</a>--}}

                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-hover table-responsive">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Purchase No</th>
                                        <th>Date</th>
                                        <th>Supplier Name</th>
                                        <th>Category</th>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Buying Price</th>
                                        <th>Status</th>


                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allData as $key=>$value)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{($value->purchase_no)}}</td>
                                            <td>{{($value->date)}}</td>
                                            <td>{{$value['supplier']['name']}}</td>
                                            <td>{{$value['category']['name']}}</td>
                                            <td>{{$value['product']['name']}}</td>
                                            <td>{{($value->description)}}</td>
                                            <td>{{$value->buying_qty}}
                                                {{$value['product']['unit']['name']}}
                                            </td>
                                            <td>{{$value->unit_price}}
                                            <td>{{$value->buying_price}}
                                            <td>
                                                @if($value->status =='0')
                                                    <span style="background: red;padding: 5px">pending</span>
                                                @elseif($value->status == '1')
                                                    <span style="background: green;padding: 5px">approved</span>
                                                @endif
                                            </td>

                                            <td>


                                                @if($value->status =='0')
                                                    <a href="#approveModal{{$value->id}}" data-toggle="modal" class="btn btn-sm btn-success"><i class="fa fa-check-circle"></i></a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="approveModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Are You Sure Approve</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{route('purchases.approve',$value->id)}}" method="post">
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-danger" >Purchase Approve</button>

                                                                    </form>

                                                                </div>

                                                                <div class="modal-footer">

                                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endif

                                            </td>


                                        </tr>
                                    @endforeach


                                    </tbody>



                                </table>

                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection