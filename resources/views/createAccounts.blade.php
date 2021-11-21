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
                                Creation Form
                            </h3>

                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                
                                   <form method="post" action="{{url('StoreNewAccount')}}">
                                           @csrf
                                <!-- Morris chart - Sales -->
                                <div class="row">
                                    
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Doctor Name</label>
                                            <input  required type="text" class="form-control" name="Doctor_Name" placeholder="Doctor Name">
                                        </div>
                                        <!-- /.form-group -->
                                     
                                    
                                        
                                        
                                        <div class="form-group">
                                            <label>Specialty</label>
                                            <select  name="select_Specialty" class="form-control select_Specialty" style="width: 100%;" required >
                                                <option  disabled="disabled" selected="selected">choose Specialty.....</option>
                                                @foreach($Speiclaities as $Speiclaity)
                                                <option value="{{$Speiclaity->id}}">{{$Speiclaity->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Government</label>
                                            <select required name="select_Government" class="select_Gov form-control"  required>
                                                <option  disabled="disabled" selected="selected">choose Government.....</option>

                                                @foreach($Governarates as $Governarate)
                                                <option value="{{$Governarate->id}}">{{$Governarate->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group ProvinceDiv">
                                            <label>Province</label>
                                            <select required name="select_Province" class="form-control select_Province" style="width: 100%;" required>
                                                <option  disabled="disabled" selected="selected">choose Province.....</option>

                                            </select>
                                        </div>
                                        
                                       
                                        
                                           
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
          <button type="submit" class="btn btn-primary">Submit</button>                        <!-- /.row -->
 </form

                                <!-- /.row -->
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
    $(document).ready(function () {


//


    $('.ProvinceDiv').hide();
    //Initialize Select2 Elements
    $('.select_Gov').select2({
    theme: 'classic'
    });
    //Initialize Select2 Elements


    //Initialize Select2 Elements
    $('.select_Specialty').select2({
    theme: 'classic'
    });
    $('.select_Gov').on('change', function(){
        
      //  alert();
     var GovId = $(this).val();
       $('.ProvinceDiv').show();
    $('.select_Province').select2({
    theme: 'classic',

            ajax: {
            url: "{{url('GetProvinceByGovId')}}",
                    data: function (params) {
                    var query = {
                    search: params.term,
                            id: GovId
                    }

                    // Query parameters will be ?search=[term]&type=public
                    return query;
                    }
            }    
    });
    
     
    });
    
    
    var audio = new Audio('mixki.mp3');
    $('#example').DataTable();
    $('body').on('click', '.OrdersOnline', function () {
    alert("# this is when i click");
    });
    var webSocket = new WebSocket('wss://labmirsal.herokuapp.com/api/websocket_endpoint');
    webSocket.onerror = function (event) {
    onError(event);
    };
    webSocket.onopen = function (event) {
    onOpen(event);
    };
    webSocket.onmessage = function (event) {


    console.log(event);
    };





    function onOpen(event) {
  //  audio.play();
    $('.OrdersOnline').addClass("text-danger");
    }

    function onError(event) {
    alert(event.data);
    }

    function start() {
    var text = "ss";
    webSocket.send(text);
    return false;
    }

    });
</script>
@endsection
