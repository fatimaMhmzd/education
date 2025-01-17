@extends('adminpanel::dashboard.layout.total')
@section('style')
    <link rel="stylesheet" href="/client/event/public/css/event.css">
    <link rel="stylesheet" href="/client/blogDetail/public/css/blogDetail.css">
    <link rel="stylesheet" href="/client/category/public/css/category.css">
    <link rel="stylesheet" href="/client/blog/public/css/blog.css">
    <link rel="stylesheet" href="/client/event/public/css/event.css">
    <link rel="stylesheet" href='/dashboardStyle/original/css/reactCalendar/calendar.css'>
    <link rel="stylesheet" href='/dashboardStyle/original/pages/public/home.css'>
    <style>
        .progress-bar {
            height: 10px;
            border-radius: 10px;
            background-color: greenyellow;
            width: 0px;
        }

        /* .list-unstyled {
                padding-right: 0;
            }

            .list-unstyled li {
                padding: 20px 10px;
                transition: 0.3s all ease-in-out
            }

            .list-unstyled li:hover {
                padding-top: 20px;
                padding-bottom: 20px;
                border-radius: 5px;
                transition: 0.3s all ease-in-out;
                box-shadow: 0px 2px 10px #01010142;
            } */
    </style>
@stop

@section('content')
    <div class="row" style="margin-top: 32px">
        <div class="col-12 contents" id="content">
            <div class="row">
                <div class="col-12 page-content" id="video">
                    <label class="form-label">آپلود ویدئو</label>
                    <div class="card up-edu"
                         style="border-color: #a3a3a3 !important;height: 237.35px;background-color: #FDFEFF !important;">
                        <div class="row justify-content-center">
                            <div class="videoPly col-md-5 text-center"></div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 py-3">
                            <div class="card" style="border-color: #a3a3a3 !important">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="empty2"
                                             class="d-flex align-items-center justify-content-center text-center w-100 text-muted font-12">
                                            پیشرفت اپلود در این مکان نمایش داده میشود
                                        </div>
                                        <ul id="file-upload-list" class="list-unstyled"
                                            style="display: none"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center"
                             style="margin-top:32px;margin-bottom: 15px">
                            <button class="btn px-4"
                                    style="height: 44px;background-color: #F050AE;color: #FDFEFF"
                                    onclick="uploadData()">ثبت و ذخیره
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

@section('script')

    {{--chunk script--}}
    <script src="/fileUploaders/js/resumable.js"></script>
    <script>
        var $ = window.$; // use the global jQuery instance
        function uploadData() {
                    const videos = $("input[name='videoUpload[]']").prop('files')[0];
                        console.log(videos);
                        var resumable = new Resumable({
                            // Use chunk size that is smaller than your maximum limit due a resumable issue
                            // https://github.com/23/resumable.js/issues/51
                            chunkSize: 1 * 1024 * 1024, // 1MB
                            simultaneousUploads: 3,
                            testChunks: false,
                            throttleProgressCallbacks: 1,
                            // Get the url from data-url tag
                            target: "{{ url('/dashboard/setting/base/upload') }}",
                            // Append token to the request - required for web routes
                            query: {
                                _token: "{{ csrf_token() }}",
                                netType: 1,
                            }
                        });
                        console.log(resumable)
                        if (!resumable.support) {
                            $('#resumable-error').show();
                        } else {
                            var $uploadList = $("#file-upload-list");
                            $uploadList.show();

                            $('.resumable-progress .progress-resume-link').show();
                            $('.resumable-progress .progress-pause-link').show();
                            // Add the file to the list

                            $uploadList.append('<li class="mt-2 resumable-file-' + '"><span class="uploadingText' + videos
                                    .uniqueIdentifier +
                                '">درحال اپلود</span> <span class="resumable-file-name"></span> <span class="ml-3 mr-3 resumable-file-progress"></span><div class="progress-bar" id="p' +
                                videos.uniqueIdentifier + '">');

                            $('.resumable-file-' + videos.uniqueIdentifier + ' .resumable-file-name')
                                .html(videos.fileName);
                            console.log(videos)

                            resumable.addFile(videos, $("input[name='videoUpload[]']"));
                            resumable.upload();

                            resumable.on('fileSuccess', function (file, message) {
                                // Reflect that the file upload has completed
                                $('.resumable-file-' + file.uniqueIdentifier +
                                    ' .resumable-file-progress').html(
                                    '<i class="mdi text-success mdi-check"></i>تکمیل شد');
                                $('.uploadingText' + file.uniqueIdentifier).html('');
                                $('#c' + file.uniqueIdentifier).css("display", "none");
                                alert("آپلود موفقیت امیز بود")
                            });
                            resumable.on('fileProgress', function (file) {
                                // Handle progress for both the file and the overall upload
                                $('.resumable-file-' +
                                    ' .resumable-file-progress').html(Math.floor(file.progress() *
                                    100) + '%');
                                $('.progress-bar').css({width: Math.floor(resumable.progress() * 100) + '%'});
                                $('#p').css({
                                    width: Math.floor(resumable.progress() * 100) + '%'
                                });
                            });
                        }
        }
    </script>

    <script src="/fileUploaders/videoUploader.js"></script>
    <script src="/fileUploaders/vocalUploader.js"></script>
    <script src="/fileUploaders/pdfUploader.js"></script>
    <script src="/fileUploaders/fileUploader.js"></script>

@endsection
