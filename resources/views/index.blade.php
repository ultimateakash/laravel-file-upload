@extends('layouts.main')
@section('title', 'Larvel File Upload')
@section('content')
<main>
    <div class="row mb-2">
        <div class="col-sm-8 offset-2">
            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
            @endif
            <div class="row">
                <div class="col-md-4">
                    <h6>Upload Single</h6>
                </div>
                <div class="col-md-6">
                    <form method="POST" action="{{ url('upload-single') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="inputFileSingle" required accept="image/*">
                                <label class="custom-file-label" for="inputFileSingle">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary float-right mr-2">Upload <i class="fa fa-upload"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <h6>Upload Multiple</h6>
                </div>
                <div class="col-md-6">
                    <form method="POST" action="{{ url('upload-multiple') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="files[]" class="custom-file-input" id="inputFileMultiple" required accept="image/*" multiple>
                                <label class="custom-file-label" for="inputFileMultiple">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary float-right mr-2">Upload <i class="fa fa-upload"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <h6>Upload Single Custom</h6>
                </div>
                <div class="col-md-6">
                    <form method="POST" action="{{ url('upload-single-custom') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="inputFileSingleCustom" required accept="image/*">
                                <label class="custom-file-label" for="inputFileSingleCustom">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary float-right mr-2">Upload <i class="fa fa-upload"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <h6>Upload Multiple Custom</h6>
                </div>
                <div class="col-md-6">
                    <form method="POST" action="{{ url('upload-multiple-custom') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="files[]" class="custom-file-input" id="inputFileMultipleCustom" required accept="image/*" multiple>
                                <label class="custom-file-label" for="inputFileMultipleCustom">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary float-right mr-2">Upload <i class="fa fa-upload"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
