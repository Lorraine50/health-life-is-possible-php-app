@extends('layouts.admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-body padding">
                  @include('includes.messages')
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Booking Date</th>
                      <th>Booking Time</th>
                      <th>Patient</th>
                      <th>Doctor</th>
                      <th>Consultation</th>
                      <th>Status</th>
                      <th>Amount</th>
                      <th>&nbsp;</th>
                      <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
					
                        @foreach ($bookings as $book)
                        <tr>
                                <td>{{$book->booking_date}}</td>
                                <td>{{$book->booking_time}}</td>
                                <td>{{App\User::where('id', $book->user_id)->value('name')}}</td>
                                <td>{{App\Hcp::where('id', $book->hcp_id)->value('hcp_name')}}</td>
                                <td>{{App\Consultation::where('id', $book->consultation_id)->value('c_name')}}</td>
                                <td>{{$book->status}}</td>
                                <td>R{{$book->booking_total}}.00</td>
                                <td><a href="{{ route('getCompleted', ['id' => $book->id])}}" class="btn btn-warning btn-outline-primary">Completed</a></td>
                                <td><a href="{{ route('getDelete', ['id' => $book->id])}}" class="btn btn-danger btn-outline-primary">Delete</a></td>
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