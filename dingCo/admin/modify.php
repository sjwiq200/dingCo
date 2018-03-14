<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- include libraries(jQuery, bootstrap) -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>


    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                    ['font', ['font family', 'strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['table', 'picture']],
                    ['misc', ['undo', 'redo', 'codeview', 'help']]
                ],
                lang: 'ko-KR', // default: 'en-US'
                height: 500,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false,                  // set focus to editable area after initializing summernote
                callbacks: {
                    onImageUpload: function(files, editor, welEditable) {
                        for(i=0;i<files.length;i++){
                            sendFile(files[i], this);
                        }
                    }
                }
            });


            function sendFile(file, editor) {
                // 파일 전송을 위한 폼생성
                data = new FormData();
                data.append("file", file);
                $.ajax({ // ajax를 통해 파일 업로드 처리
                    data : data,
                    type : "POST",
                    url : "./insertImage.php",
                    async:false,
                    cache : false,
                    contentType : false,
                    processData : false,
                    success : function(data) { // 처리가 성공할 경우
                        // 에디터에 이미지 출력
                        $(editor).summernote('editor.insertImage',data);
                        console.log(data);
                    },
                    error : function() {
                        alert("파일 업로드에 실패했습니다.");
                    }
                });
            }//END sendFile
        });//END document.ready


        $(function(){
            $('button:contains("insert")').on('click',function () {
                $('#modify').attr('method','post').attr('action','./insert.php').submit();
            });
        });
    </script>
</head>

<body>


<div class="container">
    <form id="modify" class="col-md-10">
        <textarea id="summernote" name="editordata"></textarea>
    </form>
</div>

<div class="row col-md-3 offset-md-3">
    <button class="btn-primary" >insert</button>
</div>




</body>

</html>

