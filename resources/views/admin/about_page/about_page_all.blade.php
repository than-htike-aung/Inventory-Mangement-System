@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">About Page</h4>
                        <form action="{{ route('update.about') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $aboutpage->id }}">
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Title</label>

                                <div class="col-sm-10">
                                    <input type="text" name="title" value={{ $aboutpage->title }} class="form-control" placeholder="">
                                </div>
                            </div>
                             <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Short Title</label>

                                <div class="col-sm-10">
                                    <input type="text" name="short_title" value={{ $aboutpage->short_title }} class="form-control" placeholder="">
                                </div>
                            </div>

                             <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Short Description</label>

                                <div class="col-sm-10">
                                    <textarea required="" name="short_description" class="form-control" rows="5">
                                        {{ $aboutpage->short_description }}
                                    </textarea>
                                </div>
                             </div>

                               <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Long Description</label>

                                <div class="col-sm-10">
                                    <textarea required="" name="long_description" class="form-control" id="elm1">
                                        {!! $aboutpage->long_description  !!}
                                    </textarea>
                                </div>
                             </div>
                                 <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">About Image</label>

                                <div class="col-sm-10">
                                    <input type="file" name="about_image" id="image" class="form-control" >
                                </div>
                             </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"></label>

                                <div class="col-sm-10">
                                     <img id="showImage" class="rounded avatar-lg"
                                   src="{{(!empty($aboutpage->about_image) )
                                        ? url($aboutpage->about_image)
                                        : url('upload/no_image.jpg')
                                        }}"
                         alt="Card image cap">
                                </div>
                             </div>
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update About Page">
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
