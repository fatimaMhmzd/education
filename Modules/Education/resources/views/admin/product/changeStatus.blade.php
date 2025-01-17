@extends('education::admin.layout.father')
@section('style')

@stop
@section('content')
    <div class="content-body">
        <section id="basic-input">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4 class="card-title">ویرایش دوره</h4></div>
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
                                <form method="post" action="{{route('admin_education_product_storeChangeStatus')}}" enctype="multipart/form-data">
                                    @csrf
                                    <input name="id" value="{{$educationProduct->id}}" style="display: none">
                                    <div class="row">

                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="masterId">وضعیت</label>
                                            <select class="form-control border-primary"
                                                    name="status">
                                                <option value="1" @if($educationProduct->status == 1) selected @endif>منتشر نشده</option>
                                                <option value="2" @if($educationProduct->status == 2) selected @endif>منتشر شده</option>
                                            </select>
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

@endsection
