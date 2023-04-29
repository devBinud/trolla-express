@extends('admin.layout')
@section('title', 'Edit Blog Category')
@section('custom-css')
    <style>
        .ck-content {
            height: 300px;
        }
    </style>
@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <form action="{{ url('blog?action=edit-category') }}" id="catEditform" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="cat_id" value="{{ $catData->cat_id }}">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" id="catname" name="catname"
                                    placeholder="Enter Category Name" aria-describedby="floatingInputHelp"
                                    value="{{ $catData->cat_name }}">
                                <label for="floatingInput" class="required text-uppercase">Category Name</label>
                                <div id="floatingInputHelp" class="form-text">
                                </div>
                            </div>

                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" id="slug" name="slug"
                                    placeholder="Enter Slug" aria-describedby="floatingInputHelp"
                                    value="{{ $catData->cat_slug }}">
                                <label for="floatingInput" class="required text-uppercase">Slug</label>
                                <div id="floatingInputHelp" class="form-text">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="row">

                                        <div class="mt-3">
                                            <label class="required text-uppercase">Description</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" id="cat_desc" name="catdesc">{!! $catData->cat_desc !!}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary btn-lg mt-3 float-end" type="submit" id="btnSubmit">
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

            // Blog Form
            $('#catEditform').submit(function(e) {
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
                        $('#btnSubmit').text("Please wait ...").attr('disabled', true);
                    },
                    success: function(data) {
                        // alert message
                        if (!data.success) {
                            if (data.data != null) {
                                $.each(data.data, function(id, error) {
                                    $('#' + id).text(error);
                                });
                            } else {
                                Swal.fire('Oops...', data.message, 'error');
                            }
                        } else {
                            Swal.fire('Success', data.message, 'success');

                            setTimeout(() => {
                                window.location.replace(
                                    "{{ url('blog?action=all-blog-category') }}");

                            }, 2000);
                        }
                    },
                    complete: function() {
                        $('#btnSubmit').text("Save").attr('disabled', false);
                    }
                });
            });

            // For Slug
            $('#catname').keyup(function() {
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
        // Description
        ClassicEditor
            .create(document.querySelector('#cat_desc'), {})

            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error(error.stack);
            });
    </script>
@endsection
