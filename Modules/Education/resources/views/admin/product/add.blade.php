@extends('education::admin.layout.father')
@section('style')
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/plugins/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/vendors/css/forms/select/select2.min.css">
@stop
@section('content')
    <div class="content-body">
        <section id="basic-input">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4 class="card-title">افزودن دوره</h4></div>
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
                                <form method="post" action="{{route('admin_education_product_store')}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6  col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="title">عنوان</label>
                                                <input type="text" class="form-control" id="title"
                                                       placeholder="عنوان" name="title"></fieldset>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label for="typeId">گروه</label>

                                            <select class="form-control border-primary"
                                                    name="groupId">
                                                @foreach($groups as $type)
                                                    <option value="{{$type->id}}">{{$type->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                       {{-- <div class="form-group col-lg-6 col-md-12">
                                            <label for="typeId">نوع</label>

                                            <select class="form-control border-primary"
                                                    name="typeId">
                                                @foreach($types as $type)
                                                    <option value="{{$type->id}}">{{$type->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>--}}
                                        <div class="col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="typeId">گروه کاربران</label>

                                                <select class="select2 form-control" multiple="multiple"
                                                        name="userType[]">
                                                    <option value="1">صاحبان پروژه</option>
                                                    <option value="2">کلبه کار</option>
                                                    <option value="3">نهاد اجتماعی</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="typeId">سطح دسترسی</label>

                                                <select class="select2 form-control" multiple="multiple"
                                                        name="permission[]">
                                                    <option value="1">کاربر ثبت نام شده</option>
                                                    <option value="2">کاربر با پروژه</option>
                                                    <option value="3">کاربر پروژه تکمیل شده</option>
                                                </select>
                                            </div>
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
                                                <label for="properties">ویژگی های کلیدی</label>
                                                <textarea type="text" name="properties"
                                                          class="form-control"
                                                          id="description"></textarea>
                                            </fieldset>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <fieldset class="form-group">
                                                <label for="appropriate">دوره مناسب چه کسانی هست</label>
                                                <textarea type="text" name="appropriate"
                                                          class="form-control"
                                                          id="description"></textarea>
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
        CKEDITOR.replace('properties', {
            language: 'fa',
            content: 'fa',
            filebrowserUploadUrl: "{{route('crm_ckeditorUpload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('appropriate', {
            language: 'fa',
            content: 'fa',
            filebrowserUploadUrl: "{{route('crm_ckeditorUpload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>--}}
    <script src="/panel/app-assets/vendors/js/forms/select/select2.full.min.js"></script>

    <script src="/panel/app-assets/js/scripts/forms/select/form-select2.min.js"></script>

@endsection
