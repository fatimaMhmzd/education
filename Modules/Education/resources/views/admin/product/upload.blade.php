@extends('education::admin.layout.father')
@section('style')

<style>
    .progress-bar {
        height: 10px;
        border-radius: 10px;
        background-color: greenyellow;
        width: 0px;
    }

    .list-unstyled {
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
    }

</style>
@stop
    @section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <section id="multiple-column-form bg-gray rouned">
                <div class="bg-gray shadow-lg py-0 d-flex align-items-center pr-2 rouned mb-3">
                    <div style="transform: rotate(90deg); font-size: 30pt;" class="text-orange bold"><i
                            class="mdi mdi-play"></i></div>
                    <div style="color: #4B4B4B;" class="bold text-purple text-shadow text-lg-2">
                        آپلود فایل دوره
                    </div>
                </div>
                <div class="row m-0 bg-gray rouned match-height">
                    <div class="col-7 py-3">
                        <div class="card">

                            <div class="card-content">
                                <div class="card-body">
                                    <div id="empty2" style="min-height:200px" class="d-flex align-items-center justify-content-center text-center text-muted">
                                        لیست شما خالی است

                                    </div>


                                    <ul id="file-upload-list" class="list-unstyled" style="display: none">

                                    </ul>
                                    <br />

                                    <button disabled class="resumeButton btn btn-success rouned" onclick="resume()">
                                        ادامه
                                        اپلود</button>
                                    <button disabled class="pauseButton btn btn-danger rouned" onclick="pause()"> متوقف
                                        کردن</button>
                                    <br />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-5 py-3 ">
                        <div class="text-center">
                            <div id="resumable-error" style="display: none">
                                ادامه پشتیبانی نمی شود
                            </div>
                            <div id="resumable-drop" style="display: none">
                                <p>
                                    <button style="min-height:400px" id="resumable-browse" class="btn w-100 btn-white "
                                        data-url="{{ url('education/uploadVideo') }}">


                                        <div class="text-muted">
                                            <i style="font-size:84pt" class="mdi mdi-cloud-upload-outline">
                                            </i>
                                            <p>
                                                بکشید و رها کنید.

                                            </p>
                                        </div>
                                    </button>

                                    <div class="btn w-100 mt-n5 shadow btn-orange iranSans">
                                        جستجوی فایل
                                    </div>

                                </p>
                                <p></p>
                            </div>

                        </div>
                    </div>

                </div>

            </section>
        </div>
    </div>
    @stop


        @section('script')

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/resumable.js/1.1.0/resumable.min.js"></script> --}}
        <script src="/educationn/js/resumable.js"></script>

        <script>
            var $ = window.$; // use the global jQuery instance

            var $fileUpload = $('#resumable-browse');
            var $fileUploadDrop = $('#resumable-drop');
            var $uploadList = $("#file-upload-list");

            if ($fileUpload.length > 0 && $fileUploadDrop.length > 0) {
                var resumable = new Resumable({
                    // Use chunk size that is smaller than your maximum limit due a resumable issue
                    // https://github.com/23/resumable.js/issues/51
                    chunkSize: 1 * 1024 * 1024, // 1MB
                    simultaneousUploads: 3,
                    testChunks: false,
                    throttleProgressCallbacks: 1,
                    // Get the url from data-url tag
                    target: $fileUpload.data('url'),
                    // Append token to the request - required for web routes
                    query: {
                        _token: "{{ csrf_token() }}",
                        productId: "{{ $id }}"
                    }
                });

                // Resumable.js isn't supported, fall back on a different method
                if (!resumable.support) {
                    $('#resumable-error').show();
                } else {
                    // Show a place for dropping/selecting files
                    $fileUploadDrop.show();
                    resumable.assignDrop($fileUpload[0]);
                    resumable.assignBrowse($fileUploadDrop[0]);

                    // Handle file add event
                    resumable.on('fileAdded', function (file) {
                        $('#empty2').removeClass('d-flex').addClass('d-none');
                        // Show progress pabr
                        $uploadList.show();
                        //ShowButton
                        $('.resumeButton').attr('disabled', false);
                        $('.pauseButton').attr('disabled', false)
                        // Show pause, hide resume
                        $('.resumable-progress .progress-resume-link').show();
                        $('.resumable-progress .progress-pause-link').show();
                        // Add the file to the list
                        $uploadList.append('<li class="mt-2 resumable-file-' + file
                            .uniqueIdentifier + '"><span class="uploadingText' + file
                            .uniqueIdentifier +
                            '">درحال اپلود</span> <span class="resumable-file-name"></span> <span class="ml-3 mr-3 resumable-file-progress"></span><button style="height:30px;width:30px" id="c' +
                            file.uniqueIdentifier +
                            '" class="removeButton  ml-2 mr-2 float-right btn text-danger rounded-circle p-0" onclick="cnacel(this.id)"><i class="mdi mdi-delete-circle-outline"></i> </button> <div class="progress-bar" id="p' +
                            file.uniqueIdentifier + '">');
                        $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-name')
                            .html(file.fileName);
                        // Actually start the upload
                        resumable.upload();
                    });
                    resumable.on('cancel', function () {
                        $('.resumable-file-progress').html('canceled');
                    });
                    resumable.on('fileSuccess', function (file, message) {
                        // Reflect that the file upload has completed
                        $('.resumable-file-' + file.uniqueIdentifier +
                            ' .resumable-file-progress').html(
                            '<i class="mdi text-success mdi-check"></i>تکمیل شد');
                        $('.uploadingText' + file.uniqueIdentifier).html('');
                        $('#c' + file.uniqueIdentifier).css("display", "none");
                    });
                    resumable.on('fileError', function (file, message) {
                        // Reflect that the file upload has resulted in error
                        $('.resumable-file-' + file.uniqueIdentifier +
                            ' .resumable-file-progress').html(
                            '(file could not be uploaded: ' + message + ')');
                    });
                    resumable.on('fileProgress', function (file) {
                        // Handle progress for both the file and the overall upload
                        $('.resumable-file-' + file.uniqueIdentifier +
                            ' .resumable-file-progress').html(Math.floor(file.progress() *
                            100) + '%');
                        /* $('.progress-bar').css({width: Math.floor(resumable.progress() * 100) + '%'});*/
                        $('#p' + file.uniqueIdentifier).css({
                            width: Math.floor(resumable.progress() * 100) + '%'
                        });

                    });

                    function cnacel(clicked_id) {
                        clicked_id = clicked_id.substring(1);
                        var file = resumable.getFromUniqueIdentifier(clicked_id);
                        file.cancel();
                        $('.resumable-file-' + clicked_id).remove();
                    }

                    function resume() {
                        resumable.upload();
                    }

                    function pause() {
                        resumable.pause();
                    }

                }

            }

        </script>

        @endsection
