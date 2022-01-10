@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage permission</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">permission</li>
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
                                <h3>Add permission

                                    <a class="btn btn-success float-right btn-sm" href="{{route('permission.index')}}"><i class="fa fa-list"></i>permission List</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body" >





                                <form method="post" action="{{route('permission.store')}}"enctype="multipart/form-data" >
                                    @csrf
                                    @include('backend.layouts.message')

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label for="role">Select Role</label>
                                                <select class="form-control" name="role_id" id="role">
                                                <option value="">Select Role</option>
                                                    @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>



                                            <div class="form-group row mb-0">
                                                <div class="col-md-4 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Save') }}
                                                    </button>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-8">
                                          <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Permission</th>
                                                <th>View</th>
                                                <th>Add</th>
                                                <th>Edit</th>
                                                <th>Delete</th>

                                            </tr>
                                            </thead>
                                              <tbody>
                                              <tr>
                                             <td>Sliders</td>

                                                  <td>
                                                      <input type="checkbox" name="permission[slider][view]" value="1">
                                                  </td>
                                            <td>
                                            <input type="checkbox" name="permission[slider][add]" value="1">
                                            </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[slider][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[slider][delete]" value="1">
                                                  </td>

                                              </tr>
                                              <tr>
                                                  <td>Logos</td>
                                                  <td>
                                                      <input type="checkbox" name="permission[logo][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[logo][add]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[logo][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[logo][delete]" value="1">
                                                  </td>

                                              </tr>

                                              <tr>
                                                  <td>Carriers</td>

                                                  <td>
                                                      <input type="checkbox" name="permission[carrier][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[carrier][add]" value="1">
                                                  </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[carrier][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[carrier][delete]" value="1">
                                                  </td>

                                              </tr>

                                              <tr>
                                                  <td>Etenders</td>

                                                  <td>
                                                      <input type="checkbox" name="permission[etender][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[etender][add]" value="1">
                                                  </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[etender][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[etender][delete]" value="1">
                                                  </td>

                                              </tr>

                                              <tr>
                                                  <td>Ibchk Department</td>

                                                  <td>
                                                      <input type="checkbox" name="permission[ibchkdept][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[ibchkdept][add]" value="1">
                                                  </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[ibchkdept][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[ibchkdept][delete]" value="1">
                                                  </td>

                                              </tr>


                                              <tr>
                                                  <td>Permissions</td>

                                                  <td>
                                                      <input type="checkbox" name="permission[permission][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[permission][add]" value="1">
                                                  </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[permission][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[permission][delete]" value="1">
                                                  </td>

                                              </tr>
                                              </tbody>

                                          </table>

                                        </div>

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






@endsection