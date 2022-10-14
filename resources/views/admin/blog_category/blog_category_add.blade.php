@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">Add Blog Category Page</h4><br>
                        <form action="{{ route('store.blog.category') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Blog Cateogry Name</label>

                                <div class="col-sm-10">
                                    <input type="text" name="blog_category" class="form-control" placeholder="">
                                    @error('blog_category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>




                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Blog Data">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
 </div>


@endsection
