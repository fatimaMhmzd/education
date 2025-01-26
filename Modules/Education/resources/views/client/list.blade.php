@extends('client.layout.total')

@section('content')
    <div id="projects">
        <section class="search-sect">

            <div class="container pb-3" style="padding-top: 30px;">
                <form class="form form-horizontal" method="get"
                      action="{{route('education_course')}}"
                      enctype="multipart/form-data">
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <input type="text" value="{{$request->search}}" name="search" class="form-control" placeholder="کلید واژه یا عنوان پروژه و...">
                        </div>
                        <div class="col-md-3 col-6 mt-md-0 mt-3">
                            <select class="seccond-select form-select" name="groupId">
                                <option value="0">گروه آموزشی</option>
                                @foreach($groups as $soc)
                                    <option value="{{$soc->id}}" @if($request->groupId == $soc->id) selected @endif>{{$soc->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mt-md-0 mt-3">
                            <div class="d-grid">
                                <button class="btn btn-purple" style="height: 44px;">
                                    <i class="fa-solid fa-search"></i>
                                    جستجو کنید...
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="container mt-5">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible mb-4">
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-hidden="true"></button>
                    <strong></strong> {{ Session::get('message', '') }}
                </div>
            @endif
            <div class="row" id="allProject">
                @foreach($allEducation as $product)
                    <div class="col-md-3 content-card-div mt-md-0 mt-3 mb-5">
                        <a href="{{ route('education_eduDetail', $product->id) }}">
                            <div class="card border-1 p-3" style="border-radius:8px;border-color: #C6C6C6 !important;box-shadow: 2px 2px 9px 0px #794BA426;height: 492px">
                                @if ($product->offPercent and $product->offPercent > 0)
                                    <div class="off-div float-start text-center py-2">
                                        <p class="text-light">{{ $product->offPercent }}%</p>
                                        <p class="text-light">Off</p>
                                    </div>
                                @endif
                                <div class="card-image" style="height: 241px;">
                                    @if ($product->image)
                                        <div style='border-radius: 8px;background-image: url({{ $product->image }});background-size: cover;background-position: center;background-repeat: no-repeat;height: 241px;'>
                                        </div>
                                    @else
                                        <div style='border-radius: 8px;background-image: url("/indexImages/Rectangle 2505.png");background-size: cover;background-position: center;background-repeat: no-repeat;height: 241px;'>
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="font-size: 18px;color: #1F1F1F;">
                                        {{ $product->title }}
                                    </h6>
                                    <p class="card-subtitle mt-2 text-75 font-14">
                                        {!! $product->description !!}
                                    </p>
                                    <hr>
                                    <p class="card-text text-decoration-line-through text-75 font-14" style="margin-top: 23px;">
                                        {{ $product->price }} تومان
                                    </p>
                                    @if ($product->offPercent and $product->offPercent > 0)
                                        <p class="card-text" style="font-size: 18px;font-weight: 500;">
                                            {{ round(($product->price * (100 - $product->offPercent)) / 100) }}
                                            تومان
                                            تومان
                                        </p>
                                    @endif
                                    <div class="d-grid mt-3 pb-3">
                                        <div class="btn-group">
                                            <a href="{{route('shopcart_add',$product->id)}}" type="button" class="btn btn-purple px-4" style="background-color: #F050AE;height: 44px;border-left:0.5px solid #FDFEFF;">
                                                افزودن به سبد خرید
                                            </a>
                                            <button type="button" class="btn btn-purple p-0 px-2 ps-2" style="background-color: #F050AE;height: 44px;border-right:0.5px solid #FDFEFF;">
                                                <img src="/indexImages/archive-add.png" style="vertical-align: middle;" onclick="changeIcon(this)">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@stop

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.city-select').select2({
                placeholder: 'همه شهر ها',

            });
            $('.seccond-select').select2({
                placeholder: 'تعهدات اجتماعی',
            });
        })
    </script>
@endsection
