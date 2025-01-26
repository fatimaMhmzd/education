@extends('client.layout.total')

@section('content')
    <section class="rule-card">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-6">
                    <h1 class="rule-head d-md-inline-block d-none">قوانین و مقررات</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-3">
    {!!\App\Helper\getPageContent(3)!!}

    </div>
@stop

@section('script')

@endsection
