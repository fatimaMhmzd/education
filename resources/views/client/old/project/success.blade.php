@extends('client.layout.total')

@section('style')

@stop

@section('content')
    <section class="html-content" id="content">
        <section class="container mt-4">
            <div class="row text-center">
                <div class="col-3 font-12 text-75">انتخاب پاداش</div>
                <div class="col-3 font-12 text-75">پرداخت</div>
                <div class="col-3 font-12 text-75">رسید</div>
                <div class="col-3 font-12 text-75">تقدیر نامه</div>
            </div>
            <div class="row text-center mt-2 justify-content-center">
                <div class="col-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <div
                            style="border:1px solid #A0E426;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                            <i class="fa-solid fa-check mt-1" style="color:  #A0E426"></i>
                        </div>
                    </div>
                    <div class="d-md-flex d-none"
                         style="width: 100%;margin-top: -12px;margin-right: 145px;border-bottom: 1px solid #A0E426;"></div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-center align-items-center ">
                        <div
                            style="border:1px solid #A0E426;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                            <i class="fa-solid fa-check mt-1" style="color:  #A0E426"></i>
                        </div>
                    </div>
                    <div class="d-flex d-md-flex d-none"
                         style="width: 100%;margin-top: -12px;margin-left:100px;border-bottom: 1px solid #A0E426;"></div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-center">
                        <div
                            style="border:1px solid #C9B1E6;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                            <i class="fa-solid fa-stop"
                               style="color: #C9B1E6;margin-top: 3.93px;margin-left: 0.5px;"></i>
                        </div>
                    </div>
                    <div class="d-flex d-md-flex d-none"
                         style="width: 100%;margin-top: -12px;margin-right:-90px;border-bottom: 1px solid #C9B1E6; "></div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-center">
                        <div
                            style="border:1px solid #C6C6C6;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%;">
                            <i class="fa-solid fa-stop"
                               style="color: #C6C6C6;margin-top: 3.93px;margin-left: 0.5px;"></i>
                        </div>
                    </div>
                    <div class="d-flex d-md-flex d-none"
                         style="width: 100%;margin-top: -12px;margin-right:-142px;border-bottom: 1px solid #C6C6C6;"></div>
                </div>
            </div>
        </section>
        <section class="container mt-5">
            <div class="text-center">
                <h6 class="text-46 text-center font-14">پرداخت شما با موفقیت انجام شد</h6>
            </div>
            <div class="row mt-4 mb-4 justify-content-center">
                <div class="col-md-2 col-3" style="height: 104px;width: 104px">
                    <div class="card border-0">
                        <div>
                            <img src="/newthem/images/Group 670.png" class="card-img"
                                 style="height: 104px;width: 104px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">

                        <div class="table-responsive-md">
                            <table class="mailing-table table" style="background-color: transparent !important;">
                                <tbody>
                                <tr class="table-tr">
                                    <td class="table-td font-14 ">
                                        <span class="text-75">نام اهدا کننده:</span>
                                        <span class="text-46 ms-md-2">تست</span>
                                    </td>
                                    <td class="table-td font-14 text-75">
                                        <span class="text-75">مبلغ اهدا:</span>
                                        <span class="text-46 ms-md-2 price">1000000 تومان</span>
                                    </td>
                                    <td class="table-td font-14 text-75">
                                        <span class="text-75">تاریخ اهدا:</span>
                                        <span class="text-46 ms-md-2">1403/3/10</span>
                                    </td>
                                </tr>
                                <tr class="table-tr">
                                    <td class="table-td font-14 text-75">
                                        <span class="text-75">نام پروژه:</span>
                                        <span class="text-46 ms-md-2">تست</span>
                                    </td>
                                    <td class="table-td font-14 text-75">
                                        <span class="text-75">شناسه پروژه: </span>
                                        <span class="text-46 ms-md-2">10</span>
                                    </td>
                                    <td class="table-td font-14 text-75">
                                        <span class="text-75">صاحب پروژه: </span>
                                        <span class="text-46 ms-md-2">تست</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    <div id="editor"></div>
                    <p class="text-46 text-start mt-4">
                        <i class="fa-solid fa-share-nodes me-3 list-items"></i>
                        <i class="fa-solid fa-print me-3 list-items" onclick="window.print()"></i>
                        <i class="fa-solid fa-download me-3 list-items" onclick="CreatePDFfromHTML()" id="cmd"></i>
                    </p>
                    <div class="d-grid mt-4 mb-4">
                        <button class="btn btn-purple">
                            <a href="{{route('project_letter')}}">
                                تایید و تکمیل
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop


@section('script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script>
        function CreatePDFfromHTML() {
            var HTML_Width = $(".html-content").width();
            var HTML_Height = $(".html-content").height();
            var top_left_margin = 15;
            var PDF_Width = HTML_Width + (top_left_margin * 1);
            var PDF_Height = (PDF_Width * 1) + (top_left_margin * 1);
            var canvas_image_width = HTML_Width;
            var canvas_image_height = HTML_Height;

            var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;
            html2canvas($(".html-content")[0]).then(function (canvas) {
                var imgData = canvas.toDataURL("image/jpeg", 1.0);
                var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
                pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
                for (var i = 1; i <= totalPDFPages; i++) {
                    pdf.addPage(PDF_Width, PDF_Height);
                    pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height * i) + (top_left_margin * 4), canvas_image_width, canvas_image_height);
                }
                pdf.save("Your_PDF_Name.pdf");
                $(".html-content").hide();
            });
        }
    </script>
@endsection
