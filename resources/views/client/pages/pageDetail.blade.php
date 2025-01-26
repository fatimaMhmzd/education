@extends('client.layout.total')

@section('content')
    <section class="rule-card">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-6">
                    <h1 class="rule-head d-md-inline-block d-none">{{$data->title}}</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-3">
        {!!\App\Helper\getPageContent($data->id)!!}

    </div>
@stop

@section('script')

@endsection
