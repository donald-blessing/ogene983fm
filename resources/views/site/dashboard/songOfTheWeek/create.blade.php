@extends('layouts.dashboard.form-components')
@section('title')
New Song of the Week
@endsection

@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> Song Of The Week</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ route('post.dashboard') }}">Song Of The Week</a></li>
            <li class="breadcrumb-item"><a href="">New</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    @include('errors.list')
                    <div class="container">
                        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputTitle">Title</label>
                                <input name="title" class="form-control" id="exampleInputTitle" type="text" placeholder="Enter title" value="{{ old('title') }}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="summary">Summary</label>
                                <textarea name="summary" class="form-control" id="summary" rows="3" style="resize:none;">{{ old('summary') }}</textarea>
                                @error('summary')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control ckeditor" id="content" rows="3" style="resize:none;">{{ old('content') }}</textarea>
                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="category">Select Category</label>
                                {!! Form::select('category', $categories, old('category'), ["class" => "form-control", 'required' =>'']) !!}
                                @error('category')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div id="image-preview" style="height:300px;">
                                    {{ Form::label('cover_image', null,['class' => 'btn btn-success','id'=>"image-label", 'style'=>'bottom:0; margin-bottom:20px;']) }}
                                    {{ Form::file("cover_image",[ 'id'=>'cover_image','style'=>'display:none;'] ) }}
                                </div>
                                @error('cover_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


@push('js')
<script src="{{ asset('backend/js/jquery.uploadPreview.js') }}"></script>
<script src=" {{ asset('vendor/editor/CKEDITOR.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $.uploadPreview({
            input_field: "#cover_image", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Upload cover image", // Default: Choose File
            label_selected: "Change Image", // Default: Change File
            no_label: false // Default: false
        });
    });

</script>
@endpush
