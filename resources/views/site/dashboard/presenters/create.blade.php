@extends('layouts.dashboard.form-components')
@section('title')
New Presenter
@endsection

@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> Presenters</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ route('presenter.dashboard') }}">Presenters</a></li>
            <li class="breadcrumb-item"><a href="#">New</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    @include('errors.list')
                    <div class="container">
                        <form action="{{ route('presenter.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName">Presenter Name</label>
                                <input name="name" class="form-control" id="exampleInputName" type="text" placeholder="Enter presenter name" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">About</label>
                                <textarea name="about" class="form-control ckeditor" id="exampleTextarea" rows="3" style="resize:none;">{{ old('about') }}</textarea>
                                @error('about')
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
                                <button class="btn btn-primary" type="submit">Upload</button>

                                <a class="btn btn-danger pull-right" href="{{ route('presenter.dashboard') }}">Cancel</a>
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
