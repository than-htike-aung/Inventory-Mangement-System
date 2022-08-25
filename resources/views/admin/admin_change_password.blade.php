@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">Change Password Page</h4>

                       @if (count($errors))
                           @foreach ($errors->all() as $error )
                               <p class="alert alert-danger alert-dismissible fade show">{{ $error }}</p>
                           @endforeach
                       @endif

                        <form action="{{ route('update.password') }}" method="POST">
                            @csrf
                              <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Old Password</label>

                                <div class="col-sm-10">
                                    <input type="password" name="oldpassword" id="password"  class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">New Password</label>

                                <div class="col-sm-10">
                                    <input type="password" name="newpassword" id="newpassword"  class="form-control" placeholder="">
                                </div>
                            </div>

                             <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Confirm Password</label>

                                <div class="col-sm-10">
                                    <input type="password" name="confirm_password" id="confirm_password"  class="form-control" placeholder="">
                                </div>
                            </div>


                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Change Password">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
 </div>

 <script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
 </script>
@endsection
