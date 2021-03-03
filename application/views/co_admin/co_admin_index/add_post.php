<!-- Main content -->
<section class="content-wrapper">
    <div class="row p-0 m-0">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Add Post
                    </h3>
                </div>
                <!-- <form action="#" method="post"> -->
                <div class="form-group mx-4 mt-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="title">
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <textarea id="summernote">

                        </textarea>
                </div>

                <button class="btn btn-success mb-2  btn-lg mx-auto d-block px-4" id="save">Save</button>
                <!-- </form> -->
            </div>
        </div>
        <!-- /.col-->
    </div>

    <!-- ./row -->
</section>

<script>
    // /
    $(function() {
        // Summernote
        $("#summernote").summernote({
            height: 180,

        });

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai",
        });
    });

    //
    $("#save").click(function() {
        // console.log($("#summernote").val());
        $.ajax({
            url: "<?php echo base_url() ?>api/add_post_api",
            type: "POST",
            data: {
                title: $("#title").val(),
                data: $("#summernote").val().trim(),
            },
            success: function(data) {
                alert("Post added successfully");
                location.href = "<?php echo base_url() ?>co_admin";
            }
        });
    });

    $(document).ready(function() {
        $(".note-group-select-from-files").css('display', 'none');
    })
</script>