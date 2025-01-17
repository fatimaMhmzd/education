@extends('education::admin.layout.father')
@section('style')
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/plugins/file-uploaders/dropzone.min.css">
@stop
@section('content')
    <div class="content-body">
        <section id="basic-input">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4 class="card-title">افزودن استاد</h4></div>
                        <div class="card-content">
                            <div class="card-body">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                            &times;
                                        </button>
                                        <strong></strong> {{ Session::get('message', '') }}
                                    </div>
                                @endif
                                @if(Session::has('error'))
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                            &times;
                                        </button>
                                        <strong></strong> {{ Session::get('message', '') }}
                                    </div>
                                @endif
                                @if(count($errors) > 0 )
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <ul class="p-0 m-0" style="list-style: none;">
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="{{route('admin_education_master_store')}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="title">عنوان</label>
                                                <input type="text" class="form-control" id="title"
                                                       placeholder="عنوان" name="title"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="title">شماره موبایل</label>
                                                <input type="text" class="form-control" id="mobile"
                                                       placeholder="شماره موبایل" name="mobile"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="image">انتخاب عکس</label>
                                                <input type="file" class="form-control" id="image"
                                                       name="image"></fieldset>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <fieldset class="form-group">
                                                <label for="description">توضیحات</label>
                                                <textarea type="text" name="description"
                                                          class="form-control"
                                                          id="description"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <fieldset class="form-group">
                                                <label for="rezome">رزومه</label>
                                                <textarea type="text" name="rezome"
                                                          class="form-control"
                                                          id="rezome"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="seoKeyboard">لغات کلیدی</label>
                                                <textarea placeholder="لغات کلیدی" name="seoKeyboard"
                                                          class="form-control" id="seoKeyboard"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="seoDescription">توضیحات سئو</label>
                                                <textarea placeholder="توضیحات سئو" name="seoDescription"
                                                          class="form-control" id="seoDescription"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-12 col-md-12 col-12 mb-1 text-center">
                                            <button type="submit" class="btn btn-success">تایید</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('script')
{{--    <script>
        CKEDITOR.replace('description', {
            language: 'fa',
            content: 'fa',
            filebrowserUploadUrl: "{{route('crm_ckeditorUpload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
    <script>
        CKEDITOR.replace('rezome', {
            language: 'fa',
            content: 'fa',
            filebrowserUploadUrl: "{{route('crm_ckeditorUpload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>--}}
@endsection
