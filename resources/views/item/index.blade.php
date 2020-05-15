@extends('layout.app')

@section('title', 'CRUD Item')

@section('content')
	<!-- Main content -->
      <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        @if ($errors->any())
          <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form action="{{ route('item.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="inputName">Code</label>
                    <input required="true" type="text" name="code" id="inputName" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Name</label>
                    <textarea required="true" id="inputDescription" name="name" class="form-control" rows="4"></textarea>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>
              </div>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="row" style="margin-left: 8px; margin-right: 8px">
          <a data-toggle="modal" data-target="#modal-default" class="btn btn-success" href="{{ route('item.create')}}">
            Add
          </a>

        	<table class="table table-bordered" style="margin-top: 10px">
		        <tr>
		            <th>No</th>
		            <th>Code</th>
		            <th>Description</th>
		            <th width="280px">Action</th>
		        </tr>
		        @php
		        	$i = 0;
		        @endphp
		        @foreach ($item as $product)
		        <tr>
		            <td>{{ ++$i }}</td>
		            <td>{{ $product->code }}</td>
		            <td>{{ $product->name }}</td>
		            <td>
		                <form action="{{ route('item.destroy',$product->id) }}" method="POST">
		   
		                    <a class="btn btn-info" href="{{ route('item.show',$product->id) }}">Show</a>
		    
		                    <a class="btn btn-primary" href="{{ route('item.edit',$product->id) }}">Edit</a>
		   
		                    @csrf
		                    @method('DELETE')
		      
		                    <button type="submit" class="btn btn-danger">Delete</button>
		                </form>
		            </td>
		        </tr>
		        @endforeach
		      </table>
        </div>

        <div class="row" style="margin-left: 8px; margin-right: 8px">
          <a data-toggle="modal" data-target="#modal-default" class="btn btn-success" href="{{ route('item.create')}}">
            Add
          </a>

          <table class="table table-bordered table-hover " style="margin-top: 10px" id="table-item">
            <thead style="background-color: black;">
              <tr>
                <th>No</th>
                <th>Code</th>
                <th>Description</th>
              </tr>
            </thead>
          </table>
        </div>

      </div><!-- /.container-fluid -->
    <!-- /.content -->
    
    <link rel="stylesheet" href="{{url('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    <script src="{{url('assets/adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{url('assets/adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{url('assets/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

    <script type="text/javascript">

      $("#side_watchlist").addClass("bg-success");

      //run on load
      $(document).ready(function() {
        getItemList();
        $('#table_watchlist').DataTable({"pageLength": 20}).search('').columns().search('').draw();
      });

      function getItemList() {
        $.get("<?php echo URL::to('/items/list'); ?>", function(data, status) {
          console.log('getItemList', data)
          $('#table-item').DataTable({
            "ajax": data.data
          });

        });
      }

      function getData(){
        $.get("<?php echo URL::to('/watchlist/get_watchlist'); ?>", function(data, status) {
          var dataParse=JSON.parse(data);
          // console.log(dataParse);
          $("table_watchlist > tbody").empty();
          var table = $("#table_watchlist").dataTable();
          table.fnClearTable();
          table.fnDraw();
          table.fnDestroy();
          var i = 0;

          $.each(dataParse, function(key, val){
            i++;

            var row =  "<tr id='id_"+i+"'>"+
            "<td width='10%'>" + i + "</td>"+
            "<td>" + val['user_name'] + " | " + val['user_email'] +"</td>"+
            "<td>" + val['sid_number'] + "</td>"+
            "<td width='20%'>"+
              "<button OnClick=show_data('"+val['watchlist_id']+"') class='btn btn-sm btn-warning'>Edit</button>"+
              "<button OnClick=del_data('"+val['watchlist_id']+"') style='margin-left: 10px' class='btn btn-sm btn-danger'>Hapus</button>"+
            "</td>"+
            "</tr>";

            $("#table_watchlist > tbody").append(row);

          });
        
          $('#table_watchlist').DataTable({ 
            iDisplayLength: 10,
            "order": [[0, "asc" ],[1, "asc" ]],
            "columnDefs": [
                {
                  "targets": [  ],
                  "visible": false
                }
            ]
          });
        });
      }

      function add_data() {
        $('#watchlist_insert').modal('hide');
        var user = $("#add_watchlist_select_user").val();
        var service = $("#add_watchlist_select_service").val();
        console.log("service = " + service);
        console.log("user = " + user);
        $.post("<?php echo URL::to('watchlist/insert_watchlist'); ?>", {owner_user_id: user, owner_service_id:service}, function(data, status) {
          var dataParse=JSON.parse(data);
          console.log("data = " + dataParse);
          if(dataParse.message){
            $.alert({
              title: '<i class="fa fa-warning"></i> Alert',
              content: dataParse.message,
              animation: 'scale',
              closeAnimation: 'bottom',
              backgroundDismiss: true,
              buttons: {
                okay: {
                  text: 'okay',
                  btnClass: 'btn-blue',
                }
              }
            }); 
          } else {
            $.alert({
              title: '<i class="fa fa-warning"></i> Alert',
              content: "Insert watchlist sukses!",
              animation: 'scale',
              closeAnimation: 'bottom',
              backgroundDismiss: true,
              buttons: {
                okay: {
                  text: 'okay',
                  btnClass: 'btn-blue',
                }
              }
            });
            jQuery('#tab_insert_master select').val('');  
          }
          getData();
        });
      }

      function edit_data() {
        console.log("edit data");
        var wid = $("#edit_watchlist_id").val();
        var user = $("#add_watchlist_select_user").val();
        var service = $("#add_watchlist_select_service").val();
        console.log("wid = " + wid);
        console.log("user = " + user);
        console.log("service = " + service);
        $.post("<?php echo URL::to('watchlist/edit_watchlist'); ?>", {wid, user, service}, function(data, status) {
          var dataParse=JSON.parse(data);
          console.log("data = " + dataParse);
          if(dataParse.message){
            $.alert({
              title: '<i class="fa fa-warning"></i> Alert',
              content: dataParse.message,
              animation: 'scale',
              closeAnimation: 'bottom',
              backgroundDismiss: true,
              buttons: {
                okay: {
                  text: 'okay',
                  btnClass: 'btn-blue',
                }
              }
            }); 
          } else {
            $.alert({
              title: '<i class="fa fa-warning"></i> Alert',
              content: "Edit watchlist sukses!",
              animation: 'scale',
              closeAnimation: 'bottom',
              backgroundDismiss: true,
              buttons: {
                okay: {
                  text: 'okay',
                  btnClass: 'btn-blue',
                }
              }
            });
          }
        });
        $('#watchlist_insert').modal('hide');
        getData();
      }

      function del_data(a) {
          console.log(a);
          $.confirm({
            title: 'Confirm watchlist delete',
            content: 'Are you sure to delete this watchlist data?',
            buttons: {
              confirm: function () { 
                $.post("<?php echo URL::to('/watchlist/delete'); ?>",{watchlist_id:a},function(data, status) {
                  $.alert({
                    title: '<i class="fa fa-warning"></i> Alert',
                    content: "Delete watchlist sukses",
                    animation: 'scale',
                    closeAnimation: 'bottom',
                    backgroundDismiss: true,
                    buttons: {
                      okay: {
                        text: 'okay',
                        btnClass: 'btn-blue',
                      }
                    }
                  }); 
                  getData();
                });
              },
              cancel: function () {
                console.log("delete data canceled");
              }
            }
          });
      }

      function show_modal() {
        $("#add_watchlist_select_user").attr("disabled", false);
        $("#add_watchlist_select_service").val("");
        $("#submit_data").attr("onclick","add_data()");
        $("#submit_data").attr("value","Add data");
        $("#header_popup").text("Insert watchlist");
        $("#add_watchlist_select_user").val(0).trigger('change');
        $("#watchlist_insert").modal();
      }

      function show_data(a) {
        var id = a;
        $.get("<?php echo URL::to('/watchlist/show_data'); ?>", {id}, function(data, status) {
          var dataParse=JSON.parse(data);
          var data = dataParse.data[0];
          console.log(data);
          $("#add_watchlist_select_user").val(data.watchlist_userid).trigger('change');
          $("#add_watchlist_select_user").attr("disabled", true);
          $("#add_watchlist_select_service").val(data.watchlist_sid);
          $("#edit_watchlist_id").val(data.watchlist_id);
          $("#header_popup").text("Edit watchlist user " + data.user_name);
        });
        $("#submit_data").attr("onclick","edit_data()");
        $("#submit_data").attr("value","Edit data");
        $("#watchlist_insert").modal();
      }

    </script>

@endsection