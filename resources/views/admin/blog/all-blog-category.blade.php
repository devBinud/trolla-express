@extends('admin.layout')
@section('title', 'All Blogs Category')
@section('custom-css')

@endsection
@section('body')

    <div class="container-xxl flex-grow-1 container-p-y">
        @if (count($category) > 0)
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr class="text-uppercase">
                                <th>#SL NO</th>
                                <th>Category Name</th>
                                <th>Category Slug</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($category as $cat)
                                <tr>
                                    <td>{{ 1 + $sn++ }}</td>
                                    <td>{{ $cat->cat_name }}</td>
                                    <td>{{ $cat->cat_slug }}</td>
                                    <td>{!! Str::limit($cat->cat_desc, 50) !!}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ url('blog?action=edit-category&cat_id=' . $cat->cat_id) }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item deleteBtn" data-id="{{ $cat->cat_id }}"
                                                    href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div id="paginationBox" class="my-5"></div>
        @else
            <div class="card mt-3 text-center p-5" style="font-size: 20px; color:red"><i class="fa fa-file"
                    style="color:green"></i> No
                Record Found ?? </div>
        @endif
    </div>


@endsection
@section('custom-js')
    <script>
        $('document').ready(function() {
            $('.deleteBtn').click(function() {
                var id = $(this).data('id');
                // alert(id);

                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to delete this data !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('blog?action=delete-category') }}",
                            type: 'post',
                            data: {
                                _token: "{{ csrf_token() }}",
                                cat_id: id,
                            },
                            success: function(data) {
                                if (!data.success) {
                                    if (data.data != null) {
                                        $.each(data.data, function(id, error) {
                                            $('#' + id).text(error);
                                        });
                                    } else {
                                        Swal.fire('Oops...', data.message, 'error');
                                        setTimeout(() => {
                                            window.location.reload();
                                        }, 5000);
                                    }
                                } else {
                                    Swal.fire('Success', data.message, 'success');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                }
                            }

                        });
                    }
                })
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            //pagination
            $("#paginationBox").pxpaginate({
                currentpage: {{ $category->currentPage() }},
                totalPageCount: {{ ceil($category->total() / $category->perPage()) }},
                maxBtnCount: 10,
                align: "center",
                nextPrevBtnShow: true,
                firstLastBtnShow: true,
                prevPageName: "<",
                nextPageName: ">",
                lastPageName: "<<",
                firstPageName: ">>",
                callback: function(pagenumber) {
                    window.location.replace("{!! url('blog?action=all-blog-category&page=') !!}" + pagenumber);
                },
            });

        });
    </script>
@endsection
