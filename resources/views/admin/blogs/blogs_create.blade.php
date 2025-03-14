<x-admin.layouts title=" Create Blog">



    <div class="container">
        <div class="row justify-content-center my-5 card shadow px-10 py-5">
            <div class="card-header px-0 align-content-center mb-5">
                <h2 class="fs-1 card-title primaryClr fw-bolder">Create Blog</h2>

                <a href="{{ route('blogs') }}" class="btn btn-outline-danger">Back</a>
            </div>
            <div class="col-md-12">
                <div class="card-body">
                    <form action="{{ route('blogs.store') }}" id="blog_form" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-4">

                            <div class="col-lg-6 mb-3">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <input type="text" id="meta_description" class="form-control"
                                    name="meta_description">
                                <div id="error_meta_description" class="text-danger fw-bold" style="display: none;">
                                    Meta
                                    description is required</div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="canonical" class="form-label">Canonical</label>
                                <input type="text" id="canonical" class="form-control" name="canonical">
                                <div id="error_canonical" class="text-danger fw-bold" style="display: none;">
                                    Canonical
                                    is required</div>
                            </div>

                        </div>

                        <div class="card rounded-2 shadow mb-4">
                            <div class="card-header bg-light py-3 text-center">
                                <h5 class="mb-0">Blog Content</h5>
                            </div>
                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                    <div id="error_title" class="text-danger fw-bold" style="display: none;">Title is
                                        required</div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Page Excerpt</label>
                                    <textarea  name="page_excerpt" id="page_excerpt" class="form-control" cols="5" rows="4"></textarea>
                                    <div id="error_page_excerpt" class="text-danger fw-bold" style="display: none;">
                                        Page
                                        Excerpt is required</div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Content</label>
                                    <textarea name="content" id="content" class="form-control" cols="10" rows="4" required> </textarea>
                                    <div id="error_content" class="text-danger fw-bold" style="display: none;">
                                        Content
                                        is required</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Main Image</label>
                                            <input type="file" name="main_image" id="main_image" class="form-control"
                                                accept="image/*">
                                            <label for="" id="error_main_image" class="text-danger fw-bold "
                                                style="display: none">
                                                Image is required
                                            </label>
                                        </div>

                                        <img id="output" style="display: none" width="300px" height="250px"
                                            class="rounded my-8" />
                                        <br />
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Main Image Alt Text</label>
                                        <input type="text" name="main_image_alt" id="main_image_alt"
                                            class="form-control">
                                        <div id="error_main_image_alt" class="text-danger fw-bold"
                                            style="display: none;">Main image alt is required</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="text-center">
                            <button type="button" onclick="blog_validate()"
                                class="btn btn-danger btn-lg">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-admin.layouts>

<script>
    $(document).ready(function() {

        load_jodit('content');

        $("#main_image").on("change", function() {
            $('#output').show();
            $('#mainImage').hide();
            var fileName = $(this).val().split("\\").pop();
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        });

    })

    function blog_validate() {


        if ($("#meta_description").val() == "") {
            $("#meta_description").addClass("is-invalid");
            $("#error_meta_description").show();
            return;
        } else {
            $("#meta_description").removeClass("is-invalid");
            $("#error_meta_description").hide();
        }

        if ($("#canonical").val() == "") {
            $("#canonical").addClass("is-invalid");
            $("#error_canonical").show();
            return;
        } else {
            $("#canonical").removeClass("is-invalid");
            $("#error_canonical").hide();
        }

        if ($("#title").val() == "") {
            $("#title").addClass("is-invalid");
            $("#error_title").show();
            return;
        } else {
            $("#title").removeClass("is-invalid");
            $("#error_title").hide();
        }
        if ($("#page_excerpt").val() == "") {
            $("#page_excerpt").addClass("is-invalid");
            $("#error_page_excerpt").show();
            return;
        } else {
            $("#page_excerpt").removeClass("is-invalid");
            $("#error_page_excerpt").hide();
        }

        if ($("#content").val() == "") {
            $("#content").addClass("is-invalid");
            $("#error_content").show();
            return;
        } else {
            $("#content").removeClass("is-invalid");
            $("#error_content").hide();
        }
        if ($("#main_image").val() == "") {
            $("#main_image").addClass("is-invalid");
            $("#error_main_image").show();
            return;
        } else {
            $("#main_image").removeClass("is-invalid");
            $("#error_main_image").hide();
        }
        if ($("#main_image_alt").val() == "") {
            $("#main_image_alt").addClass("is-invalid");
            $("#error_main_image_alt").show();
            return;
        } else {
            $("#main_image_alt").removeClass("is-invalid");
            $("#error_main_image_alt").hide();
        }
        $("#blog_form").submit();
    }
</script>
