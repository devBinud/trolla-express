@extends('admin.layout')
@section('title', 'All Blogs')
@section('custom-css')

@endsection
@section('body')

    <div class="container-xxl flex-grow-1 container-p-y">
        @if (count($allblog) > 0)
            <div class="card">
                <div class=" text-nowrap">
                    <table class="table">
                        <thead>
                            <tr class="text-uppercase">
                                <th>#SL NO</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Categories</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($allblog as $blog)
                                <tr>
                                    <td>{{ 1 + $sn++ }}</td>
                                    <td><img src="{{ asset('assets/uploads/blog-img/' . $blog->image) }}"
                                            alt="{{ $blog->title }}" style="width: 50px; height:50px;"></td>
                                    <td>{{ Str::limit($blog->title, 20) }}</td>
                                    <td>
                                        @foreach (explode(',', $blog->cat_names) as $cat)
                                            <option>{{ $cat }}</option>
                                        @endforeach
                                    </td>
                                    <td>{{ date('d M, Y', strtotime($blog->created_at)) }}</td>
                                    <td>
                                        @if ($blog->is_published == 1)
                                            <span class="badge bg-label-success">Published</span>
                                        @elseif($blog->is_published == 2)
                                            <span class="badge bg-label-danger">Draft</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ url('blog?action=edit-blog&blog_id=' . $blog->blog_id) }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item deleteBtn" data-id="{{ $blog->blog_id }}"
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
                            url: "{{ url('blog?action=delete-blog') }}",
                            type: 'post',
                            data: {
                                _token: "{{ csrf_token() }}",
                                blog_id: id,
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
                currentpage: {{ $allblog->currentPage() }},
                totalPageCount: {{ ceil($allblog->total() / $allblog->perPage()) }},
                maxBtnCount: 10,
                align: "center",
                nextPrevBtnShow: true,
                firstLastBtnShow: true,
                prevPageName: "<",
                nextPageName: ">",
                lastPageName: "<<",
                firstPageName: ">>",
                callback: function(pagenumber) {
                    window.location.replace("{!! url('blog?action=all-blog&page=') !!}" + pagenumber);
                },
            });

        });
    </script>
@endsection
