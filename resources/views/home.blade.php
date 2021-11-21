@extends('layouts.TheamContainerFolder.SideBar')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>00</h3>

              <p>New Booking</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
        <a href="{{url('/?type=1')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
            <h3><sup style="font-size: 20px"></sup>00</h3>

              <p>success Order</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{url('/?type=4')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{$CountOfDoctors}}</h3>

              <p>Current Doctors</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{url('/?type=2')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>00</h3>

              <p>Pending Doctor</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{url('/?type=5')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                  Current Doctor
              </h3>

            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                    <div class="row">
                        <div class="col-lg-12">


                                <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Doctor Name</th>
                                                <th>Doctor Bio</th>
                                                <th>Doctor speciality</th>
                                                <th>Doctor governments</th>
                                                <th>Doctor Province</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($doctors as $doctor)
                                            <tr>
                                                <td>{{$doctor->doctor_name}}</td>
                                                <td>{{$doctor->doctor_bio}}</td>
                                                <td>{{$doctor->speciltyName}}</td>
                                                <td>{{$doctor->governarateName}}</td>
                                                <td>{{$doctor->ProvinceName}}</td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Doctor Name</th>
                                                <th>Doctor Bio</th>
                                                <th>Doctor speciality</th>
                                                <th>Doctor governments</th>
                                                <th>Doctor Province</th>
                                            </tr>
                                        </tfoot>
                                    </table>



                        </div>
                    </div>
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->

        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
@extends('layouts.TheamContainerFolder.Footer')
@section('js')
<script>
$(document).ready(function() {
    $('#example').DataTable();

});
</script>
@endsection
