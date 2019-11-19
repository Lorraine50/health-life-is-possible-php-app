@extends('layouts.admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-body padding">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Home Tel</th>
                      <th>Work Tel</th>
                      <th>Cell Tel</th>
                      <th>Reference</th>
                      <th>DOB</th>
                      <th>Address</th>
                      <th>Gender</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->tel_h}}</td>
                                <td>{{$user->tel_w}}</td>
                                <td>{{$user->tel_c}}</td>
                                <td>{{$user->reference}}</td>
                                <td>{{$user->dob}}</td>
                                <td>{{$user->addr}}</td>
                                <td>{{$user->gender}}</td>
                              </tr>
                        @endforeach
                    
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /. box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
@endsection