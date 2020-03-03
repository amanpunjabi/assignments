@extends('master')

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users Management</h1>

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
           <div class="col-lg-12">
                <div class="card">
                     <div class="card-header">
                      <a class="float-right btn btn-info" href="{{ route('users.create') }}">Add New</a>
                      All Users</div>
                    <div class="card-body">

                      @if($message = Session::get('success'))
                     
                  <div class="alert alert-info alert-dismissible" role="alert">
                    <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                   {{ $message }}
                  </div>
                      @endif
 
                        <div class="table-responsive">
                            <table class="table" id="user_list">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>City</th>
                                        <th>Gender</th>
                                        <th>Profile Photo</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                       
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    
      </div> 
    </section>
   
  </div>
 
@endsection

@push('js')

 <script type="text/javascript">
  $(function () {
    
   table = $('#user_list').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'firstname', name: 'firstname'},
            {data: 'lastname', name: 'lastname'},
            {data: 'email', name: 'email'},
            {data: 'contact', name: 'contact'},
            {data: 'city', name: 'city'},
            {data: 'gender', name: 'gender'},
            {data: 'profile_pic', name: 'profile_pic',render: function( data, type, full, meta ) {
return "<img src='<?=asset('images')?>/"+data+"' height=\"50\"/>"}},
            {data: 'status', name: 'status'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>
<script type="text/javascript">
 function show_warning(ev){
  var id = $(ev). attr("id");
  // alert(id);
  
 swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
     
    $.ajax({
        url: "users/"+id,
        type: 'DELETE',
        data: {
            "id": id,
            "_token": "{{ csrf_token() }}"
        },
        success: function (data) {

           swal("Poof! User Data has been deleted!", {
            buttons: false,
            timer: 1000,
            
          });
          table.ajax.reload();

        }

    });
     
 
    
  } else {
    swal("User Data is safe!", {
  buttons: false,
  timer: 1000,
});
  }
});
return false;
     
}        
</script>

@endpush