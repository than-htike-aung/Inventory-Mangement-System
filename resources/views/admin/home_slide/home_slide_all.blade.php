@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">Home Slide Page</h4>
                        <form action="{{ route('update.slider') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $homeslide->id }}">
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Title</label>

                                <div class="col-sm-10">
                                    <input type="text" name="title" value={{ $homeslide->title }} class="form-control" placeholder="">
                                </div>
                            </div>
                             <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Short Title</label>

                                <div class="col-sm-10">
                                    <input type="text" name="short_title" value={{ $homeslide->short_title }} class="form-control" placeholder="">
                                </div>
                            </div>

                             <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Video URL</label>

                                <div class="col-sm-10">
                                    <input type="text" name="video_url" value={{ $homeslide->video_url }} class="form-control" placeholder="">
                                </div>
                             </div>
                                 <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Slider Image</label>

                                <div class="col-sm-10">
                                    <input type="file" name="home_slide" id="image" class="form-control" >
                                </div>
                             </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"></label>

                                <div class="col-sm-10">
                                     <img id="showImage" class="rounded avatar-lg"
                                   src="{{(!empty($homeslide->home_slide) )
                                        ? url($homeslide->home_slide)
                                        : url('upload/no_image.jpg')
                                        }}"
                         alt="Card image cap">
                                </div>
                             </div>
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Slide ">
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
