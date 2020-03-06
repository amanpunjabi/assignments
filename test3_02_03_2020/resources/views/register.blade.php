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
                        

                       {{--  @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif --}}

                       {{  Form::open(['route' => 'users.store', 'files' => true,'id'=>'register']) }}
                    <div class="form-group">
                     {{  Form::label('firstname', 'First Name') }}
                      
                      {{ Form::text('firstname', $value = null, ['class' => 'form-control', 'placeholder' => 'firstname']) }}
                     <label id="firstname-error" class="is-invalid error" for="firstname">
                      @error('firstname')
                                {{ $message }}
                      @enderror
                    </label>
                       
                    </div>

                    <div class="form-group">
                     {{  Form::label('lastname', 'Last Name') }}
                      
                      {{ Form::text('lastname', $value = null, ['class' => 'form-control', 'placeholder' => 'lastname']) }}
                      <label id="lastname-error" class="is-invalid error" for="lastname">
                      @error('lastname')
                                {{ $message }}
                      @enderror
                    </label>
                       
                    </div>

                    <div class="form-group">
                     {{  Form::label('email', 'Email') }}
                      
                      {{ Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) }}
                      <label id="email-error" class="is-invalid error" for="email">
                      @error('email')
                                {{ $message }}
                      @enderror
                    </label>
                    </div>

                    <div class="form-group">
                     {{  Form::label('contact', 'Contact') }}
                      
                      {{ Form::text('contact', $value = null, ['class' => 'form-control', 'placeholder' => 'contact']) }}
                      <label id="contact-error" class="is-invalid error" for="contact">
                      @error('contact')
                                {{ $message }}
                      @enderror
                    </label>
                       
                    </div>

                    <div class="form-group">
                     {{  Form::label('city', 'City') }}
                      
                      {{ Form::select('city',['' => 'Select', 'ahmedabad' => 'Ahmedabad','gandhinagar'=>'Gandhinagar','surat'=>'Surat'],'status',['class' => 'form-control']) }}
                      <label id="city-error" class="is-invalid error" for="city">
                      @error('city')
                                {{ $message }}
                      @enderror
                    </label>
                        
                  </div>

                  <div class="form-group">
                  {{ Form::label('gender', 'Gender') }}
                   
                      <div class="radio">
                          
                          {!! Form::radio('gender', 'male', true, ['id' => 'male']) !!}
                          {!! Form::label('male', 'Male') !!}
       
                       
                         
                          {!! Form::radio('gender', 'Female', false, ['id' => 'Female']) !!}
                          {!! Form::label('female', 'Female') !!}
                      </div>
                      <label id="gender-error" class="is-invalid error" for="gender">
                      @error('gender')
                                {{ $message }}
                      @enderror
                    </label>
                   
                  </div>
                  
                    <div class="form-group" id="age_div">
                      {{ Form::label('age', 'Age') }}
                      {{ Form::number('age', $value = null, ['class' => 'form-control', 'placeholder' => 'Age']) }}
                      <label id="age-error" class="is-invalid error" for="age">
                      @error('age')
                                {{ $message }}
                      @enderror
                    </label>
                   </div>


                  <div class="form-group">
                     {{  Form::label('profile_pic', 'Profile Pic') }}
                      
                      {{ Form::file('profile_pic', ['class' => 'form-control']) }}
                      <label id="profile_pic-error" class="is-invalid error" for="profile_pic">
                      @error('profile_pic')
                                {{ $message }}
                      @enderror
                    </label>
                       
                  </div>

                  <div class="form-group">
                     {{  Form::label('status', 'Status') }}
                      
                      {{ Form::select('status',['active' => 'Active', 'inactive' => 'Inactive'],'status',['class' => 'form-control']) }}
                      <label id="status-error" class="is-invalid error" for="status">
                      @error('status')
                                {{ $message }}
                      @enderror
                    </label>
                        
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

@push('js')
<script type="text/javascript" src="{{ asset('js/validator/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/validator/additional-methods.js') }}"></script>
{{-- <script type="text/javascript" src="{{ asset('js/validation/validation.js') }}">
</script> --}}
<script>
    $(document).ready(function(){
      if($('#female').prop("checked") == true){
                $('#age_div').html("");
                      
                    
          }
        $('#male').click(function(){
            if($(this).prop("checked") == true){
                $('#age_div').html('{{ Form::label('age', 'Age') }}'+'{{ Form::number('age', $value = null, ['class' => 'form-control', 'placeholder' => 'Age']) }}'+'<label id="age-error" class="error" for="age">{{ $errors->has('age') }}</label>'
                  );
                      
                    
            }
           
           
        }); 

        $('#Female').click(function(){
            if($(this).prop("checked") == true){
                $('#age_div').html("");
            }
             
        });

    });
</script>
@endpush