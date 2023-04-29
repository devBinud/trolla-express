@extends('admin.layout')
@section('title', 'Edit Blogs')
@section('custom-css')
    <style>
        .ck-content {
            height: 300px;
        }

        .contain {
            margin-left: auto;
            margin-right: auto;
            margin-top: calc(calc(100vh - 405px)/2);
        }

        #form1 {
            width: auto;
        }

        .alert {
            text-align: center;
        }

        #blah {
            max-height: 123px;
            height: 300px;
            width: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding: 5px;
        }

        #img_contain {
            border-radius: 5px;
            /*  border:1px solid grey;*/
            margin-top: 20px;
            width: auto;
        }

        .input-group {
            /* margin-left: calc(calc(100vw - 320px)/2); */
            margin-top: 40px;
            width: 320px;
            margin-left: 358px;
        }

        .imgInp {
            margin-left: -88px;
            width: 300px;
            margin-top: 10px;
            padding: 10px;
            background-color: #d3d3d3;
        }

        .loading {
            animation: blinkingText ease 2.5s infinite;
        }

        @keyframes blinkingText {
            0% {
                color: #000;
            }

            50% {
                color: #transparent;
            }

            99% {
                color: transparent;
            }

            100% {
                color: #000;
            }
        }

        .custom-file-label {
            cursor: pointer;
        }

        /************CREDITS**************/
        .credit {
            font: 14px "Century Gothic", Futura, sans-serif;
            font-size: 12px;
            color: #3d3d3d;
            text-align: left;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .credit a {
            color: gray;
        }

        .credit a:hover {
            color: black;
        }

        .credit a:visited {
            color: MediumPurple;
        }
    </style>
@endsection
@section('body')

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <form action="{{ url('blog?action=edit-blog') }}" id="editblogform" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <input type="hidden" name="blog_id" value="{{ $blogdata->blog_id }}">
                            <div class="row g-3">

                                <div class="card col-md-6">
                                    <div class="card-body">
                                        <label for="image" class="required text-uppercase">Upload Image</label>
                                        <div class="alert"></div>
                                        <div id='img_contain'><img id="blah" align='middle'
                                                src="{{ asset('assets/uploads/blog-img/' . $blogdata->image) }}"
                                                alt="your image" title='' />
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" id="inputGroupFile01" name="image"
                                                    class="imgInp custom-file-input"
                                                    aria-describedby="inputGroupFileAddon01" accept="image/*"
                                                    style="margin-left: -282px">
                                                <input type="hidden" name="previmg" value="{{ $blogdata->image }}"
                                                    accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 px-5">
                                    <div>
                                        <label for="status" class="form-label required">Select status</label>
                                        <select name="status" class="form-select">
                                            <option value="1">Published</option>
                                            <option value="2">Draft</option>
                                        </select>
                                    </div>
                                    <label for="link" class="form-label">Categories <span class="text-danger">
                                            *</span></label>
                                    <br>
                                    @foreach ($category as $cat)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="categories[]"
                                                value="{{ $cat->cat_name }}" id="flexCheckDefault"
                                                @if (in_array($cat->cat_name, explode(',', $blogdata->cat_names))) checked @endif>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $cat->cat_name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="form-floating mt-3">
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter Blog Title" aria-describedby="floatingInputHelp"
                                        value="{{ $blogdata->title }}">
                                    <label for="floatingInput" class="required text-uppercase">Title</label>
                                    <div id="floatingInputHelp" class="form-text">
                                    </div>
                                </div>

                                <div class="form-floating mt-3">
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        placeholder="Enter Slug" aria-describedby="floatingInputHelp"
                                        value="{{ $blogdata->slug }}">
                                    <label for="floatingInput" class="required text-uppercase">Slug</label>
                                    <div id="floatingInputHelp" class="form-text">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="mt-3">
                                            <label class="required text-uppercase">Description</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" id="summary-ckeditor" name="description">{!! $blogdata->description !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="link" class="form-label text-uppercase">Meta Description <span
                                                    class="text-danger">
                                                    *</span></label>
                                            <textarea class="form-control" id="metaDescription" name="metaDescription">{!! $blogdata->meta_description !!}</textarea>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="link" class="form-label text-uppercase">Meta Keywords <span
                                                    class="text-danger">
                                                    *</span></label>
                                            <textarea class="form-control" id="metaKeywords" name="metaKeywords">{!! $blogdata->meta_keywords !!}</textarea>
                                        </div>
                                        <div class="col-md-6 pb-2 mt-2">
                                            <label for="link" class="form-label text-uppercase">Author <span
                                                    class="text-danger">
                                                </span></label>
                                            <input type="text" id="metaTitle" name="author" class="form-control"
                                                placeholder="Enter Title" value="{{ $blogdata->author }}">
                                        </div>
                                        <div class="col-md-6 pb-2 mt-2">
                                            <label for="link" class="form-label text-uppercase">Meta og:url <span
                                                    class="text-danger">
                                                </span></label>
                                            <input type="text" id="" name="metaogurl" class="form-control"
                                                placeholder="Enter URL" value="{{ $blogdata->meta_url }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary btn-lg mt-3 float-end" type="submit" id="editbtn">
                                Update</button>

                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
@section('custom-js')

    <script>
        $(document).ready(function() {
            // Update Form 
            $('#editblogform').submit(function(e) {
                e.preventDefault();

                var url = $(this).attr('action');
                var method = $(this).attr('method');
                var formData = new FormData(this);
                var error = $('.error');

                error.text("");

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#editbtn').text("Please wait ...").attr('disabled', true);
                    },
                    success: function(data) {
                        // alert message
                        if (!data.success) {
                            if (data.data != null) {
                                $.each(data.data, function(id, error) {
                                    $('#' + id).text(error);
                                });

                            } else {
                                Swal.fire('Oops..', data.message, 'error');
                            }
                        } else {
                            Swal.fire('Success', data.message, 'success');
                            setTimeout(() => {
                                window.location.replace(
                                    "{{ url('blog?action=all-blog') }}");

                            }, 2000);

                        }
                    },
                    complete: function() {
                        $('#editbtn').text("Save").attr('disabled', false);
                    }
                });
            });

            // For Slug
            $('#title').keyup(function() {
                var title = $(this).val();
                // alert(title);
                var slug = $('#slug');
                // alert(slug);
                if (title.length > 0) {
                    $.get("{{ url('/generate-slug') }}", {
                        data: title,
                    }).done(function(data) {
                        slug.val(data);
                    });
                } else {
                    slug.val("");
                }
            });
        });
    </script>
    <script>
        // Start For Image
        $("#inputGroupFile01").change(function(event) {
            RecurFadeIn();
            readURL(this);
        });
        $("#inputGroupFile01").on('click', function(event) {
            RecurFadeIn();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var filename = $("#inputGroupFile01").val();
                filename = filename.substring(filename.lastIndexOf('\\') + 1);
                reader.onload = function(e) {
                    debugger;
                    $('#blah').attr('src', e.target.result);
                    $('#blah').hide();
                    $('#blah').fadeIn(500);
                    $('.custom-file-label').text(filename);
                }
                reader.readAsDataURL(input.files[0]);
            }
            $(".alert").removeClass("loading").hide();
        }

        function RecurFadeIn() {
            console.log('ran');
            FadeInAlert("Wait for it...");
        }

        function FadeInAlert(text) {
            $(".alert").show();
            $(".alert").text(text).addClass("loading");
        }
        // End Image
    </script>
    <script>
        // Description
        ClassicEditor
            .create(document.querySelector('#summary-ckeditor'), {})

        // Meta title
        ClassicEditor
            .create(document.querySelector('#meta_title'), {

            })

        // Meta description
        ClassicEditor
            .create(document.querySelector('#metaDescription'), {

            })

        // Meta Keywords
        ClassicEditor
            .create(document.querySelector('#metaKeywords'), {

            })

            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error(error.stack);
            });
    </script>
@endsection
