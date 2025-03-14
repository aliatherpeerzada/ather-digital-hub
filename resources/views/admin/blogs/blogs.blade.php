<x-admin.layouts title="Blogs">



    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5 m-5 ">
                    <div class="">
                        <a href="{{ route('blogs.create') }}" class="btn btn-outline-danger  p-2 float-end">

                            Add Blogs
                        </a>

                    </div>

                    <!--begin::Accordion-->
                    <div class="accordion my-5" id="kt_accordion_1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="kt_accordion_1_header_1">
                                <button class="accordion-button  fs-4 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1"
                                    aria-expanded="true" aria-controls="kt_accordion_1_body_1">
                                    <h1 class="" style="">BLOGS</h1.>
                                </button>
                            </h2>
                            <div id="kt_accordion_1_body_1" class="accordion-collapse collapse show"
                                aria-labelledby="kt_accordion_1_header_1" data-bs-parent="#kt_accordion_1">
                                <div class="accordion-body">
                                    <div>


                                        <table id="table"
                                            class="table table-row-bordered table-row-gray-600 table-striped table-hover table-responsive gy-5 rounded dataTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">TITLE</th>
                                                    <th scope="col">CONTENT</th>
                                                    <th scope="col">MAIN IMAGE</th>
                                                    <th scope="col">ACTIONS</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if (count($blogs) > 0)
                                                    @foreach ($blogs as $blog)
                                                        <tr>
                                                            <td>{!! \Illuminate\Support\Str::words($blog->title, 2) !!}</td>
                                                            <td>{!! \Illuminate\Support\Str::words($blog->page_excerpt,10)!!}</td>
                                                            <td>
                                                                <img src="{{ asset('storage/' . $blog->main_image) }}"
                                                                    width="50px" height="50px" alt="">
                                                            </td>

                                                            <td>
                                                                <a href="{{ route('blogs.edit', $blog->id) }}"
                                                                    class="btn btn-success btn-sm">
                                                                    <i class="bi bi-pencil-square fs-4"></i>
                                                                </a>
                                                                <form action="{{ route('blogs.delete', $blog->id) }}"
                                                                    method="POST" class="d-inline"
                                                                    id="b_form_{{ $blog->id }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-danger btn-sm"
                                                                        id="b_delete_{{ $blog->id }}"
                                                                        onclick="blog_delete({{ $blog->id }})"><i
                                                                            class="bi bi-trash fs-2"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--end::Accordion-->

                </div>
            </div>
        </div>
    </div>


</x-admin.layouts>
<script>
    $(document).ready(function() {
        $('#table').DataTable({
            responsive: true,
            'order': []
        });
    });

    function blog_delete(blogId) {
        console.log(blogId);
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you really want to delete this item?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('b_form_' + blogId).submit();
            }
        });
    }
</script>
