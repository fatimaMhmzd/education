@extends('client.layout.total')

@section('style')
@stop

@section('content')
    <main class="container">
        <x-project-header></x-project-header>
        <div class="row mt-5 justify-content-center align-items-center">
            <div class="col-lg-5">
                <div class="d-flex justify-content-center">
                    <div class="new-title-page position-relative">
                        <div
                            class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            پیشرفت پروژه
                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mt-lg-0 mt-4 text-center">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="row">
                            <div class="col-lg-8 border-end border-1">
                                <h6 class="font-14 text-46 mb-3 border-bottom border-1 py-3">پیشرفت پروژه با
                                    توجه به برنامه ریزی</h6>
                                <div id="myBarr" style="height: 400px">
                                    <canvas id="myBar"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-md-0 mt-3">
                                <h6 class="font-14 text-46 mb-3 border-bottom border-1 py-3">پیشرفت کلی پروژه تا
                                    به امروز</h6>
                                <div style="height: 174px">
                                    <canvas id="myCircle"></canvas>
                                </div>
                                <div class="d-block mt-4">
                                    <span class="font-12 text-46 float-start">شروع پروژه:</span>
                                    <span class="font-12 text-46 float-end">1401/12/21</span>
                                </div>
                                <div class="d-block" style="margin-top: 60px">
                                    <span class="font-12 text-75 float-start">پایان پروژه:</span>
                                    <span class="font-12 text-75 float-end">1406/8/5</span>
                                </div>
                                <div class="d-flex justify-content-between w-100 border-top border-1 py-4" style="margin-top: 100px">
                                    <p class="font-12 text-46 float-start">مبلغ جمع شده:</p>
                                    <br>
                                    <p class="font-12 float-end"
                                       style="color:#1FC96E"> 50000 تومان</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 row justify-content-center align-items-center">
            <div class="col-lg-7 order-lg-0 order-1 text-center">
                <div class="d-flex justify-content-around py-1 border-bottom border-1">
                    <h6 class="font-14 text-46 mb-3">5 نفر اهدا کننده</h6>
                    <h6 class="font-14 text-46 mb-3">5 نفر همکار</h6>
                </div>
                <div class="mt-5" style="height: 400px" id="myBarr2">
                    <canvas id="myChart" style="transform: rotate(360deg)"></canvas>
                </div>
            </div>
            <div class="col-lg-5 order-lg-1 order-0 mb-lg-0 mb-4">
                <div class="d-flex justify-content-center">
                    <div class="new-title-page position-relative">
                        <div
                            class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            میزان مشارکت
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        const bar = document.getElementById('myBar');
        const circle = document.getElementById('myCircle');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: [''],
                datasets: [
                    {
                        label: 'جمع کل مبلغ حمایت',
                        data: [30, 40, 40],
                        borderWidth: 1
                    },
                    {
                        label: 'جمع روزانه مبلغ حمایت',
                        data: [30, 40, 40],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                maintainAspectRatio: false,
            }
        });
        new Chart(bar, {
            type: 'bar',
            data: {
                labels: [1401, 1402, 1403, 1405, 1406],
                datasets: [
                    {
                        label: 'نمودار',
                        data: [0, 40, 60, 70, 80, 100],
                        borderWidth: 1,
                        backgroundColor: "#5E457E",
                        borderRadius: "20px",
                    },
                    {
                        label: 'نمودار',
                        data: [0, 20, 50, 60, 90, 100],
                        borderWidth: 1
                    }
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                maintainAspectRatio: false,
            }
        });
        new Chart(circle, {
            type: 'doughnut',
            data: {
                datasets: [{
                    label: 'پیشرفت',
                    data: [50, 50,],
                    backgroundColor: [
                        "#5E457E",
                        '#FDFEFF',
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                maintainAspectRatio: false,
            }

        });
    </script>
@stop
