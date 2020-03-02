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
                      <a class="float-right btn btn-info" href="{{ route('users.index') }}">Back</a>
                     Create New User</div>
                    <div class="card-body">
                        

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                       {{  Form::open(['route' => 'users.store', 'files' => true]) }}
                    <div class="form-group">
                     {{  Form::label('firstname', 'First Name') }}
                      
                      {{ Form::text('firstname', $value = null, ['class' => 'form-control', 'placeholder' => 'firstname']) }}
                       
                    </div>

                    <div class="form-group">
                     {{  Form::label('lastname', 'Last Name') }}
                      
                      {{ Form::text('lastname', $value = null, ['class' => 'form-control', 'placeholder' => 'lastname']) }}
                       
                    </div>

                    <div class="form-group">
                     {{  Form::label('email', 'Email') }}
                      
                      {{ Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) }}
                       
                    </div>

                    <div class="form-group">
                     {{  Form::label('contact', 'Contact') }}
                      
                      {{ Form::number('contact', $value = null, ['class' => 'form-control', 'placeholder' => 'contact']) }}
                       
                    </div>

                    <div class="form-group">
                     {{  Form::label('city', 'City') }}
                      
                      {{ Form::select('city',['' => 'Select', 'ahmedabad' => 'Ahmedabad','gandhinagar'=>'Gandhinagar','surat'=>'Surat'],'status',['class' => 'form-control']) }}
                        
                  </div>

                    <div class="form-group">
                  {{ Form::label('gender', 'Gender') }}
                   
                      <div class="radio">
                          
                          {!! Form::radio('gender', 'male', true, ['id' => 'male']) !!}
                          {!! Form::label('male', 'Male') !!}
       
                       
                         
                          {!! Form::radio('gender', 'Female', false, ['id' => 'Female']) !!}
                          {!! Form::label('female', 'Female') !!}
                      </div>
                   
                  </div>

                  <div class="form-group">
                     {{  Form::label('profile_pic', 'Profile Pic') }}
                      
                      {{ Form::file('profile_pic', ['class' => 'form-control']) }}
                       
                  </div>

                  <div class="form-group">
                     {{  Form::label('status', 'Status') }}
                      
                      {{ Form::select('status',['active' => 'Active', 'inactive' => 'Inactive'],'status',['class' => 'form-control']) }}
                        
                  </div>
                     
                    
                    <button type="submit" class="btn btn-primary">Submit</button>

                    {{ Form::close() }}

                    </div>
                    
                </div>
            </div>
        </div>
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
