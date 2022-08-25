@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">Edit Profile Page</h4>
                        <form action="{{ route('store.profile') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Name</label>

                                <div class="col-sm-10">
                                    <input type="text" name="name" value={{ $editData->name }} class="form-control" placeholder="">
                                </div>
                            </div>
                             <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">User Email</label>

                                <div class="col-sm-10">
                                    <input type="text" name="email" value={{ $editData->email }} class="form-control" placeholder="">
                                </div>
                            </div>

                             <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">User Name</label>

                                <div class="col-sm-10">
                                    <input type="text" name="username" value={{ $editData->username }} class="form-control" placeholder="">
                                </div>
                             </div>
                                 <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Profile Image</label>

                                <div class="col-sm-10">
                                    <input type="file" name="profile_image" id="image" class="form-control" >
                                </div>
                             </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"></label>

                                <div class="col-sm-10">
                                     <img id="showImage" class="rounded avatar-lg"
                                   src="{{(!empty($editData->profile_image) )
                                        ? url('upload/admin_images/'.$editData->profile_image)
                                        : url('upload/no_image.jpg')
                                        }}"
                         alt="Card image cap">
                                </div>
                             </div>
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile ">
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
