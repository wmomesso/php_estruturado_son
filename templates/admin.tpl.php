<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/trix/trix.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>Painel Adm</title>
</head>

<body class="d-flex flex-column">
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/admin">CS_A_PHP</a>
            <span class="navbar-text">
                Painel administrativo
            </span>
        </nav>
    </div>
    <div id="main">
        <div class="row">
            <div class="col">
                <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
                    <li class="nav-item">
                        <span href="" class="nav-link text-white-50 text-center">
                            <small>MENU</small>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/pages" class="nav-link active">
                            Páginas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Úsuários
                        </a>
                    </li>
                </ul>
            </div>
            <div id="content" class="col-10">
                <?php include $content ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="/resources/trix/trix.js"></script>
    <script src="/resources/notfy/notfy.min.js"></script>
    <script>
        document.addEventListener('trix-attachment-add', function() {
            const attachment = event.attachment;

            if (!attachment.file) {
                return;
            } else {
                const form = new FormData();
                form.append('file', attachment.file);

                $.ajax({
                    url: '/admin/upload/image',
                    data: form,
                    method: 'post',
                    contentType: false,
                    processData: false,
                    xhr : function (){
                        const xhr = $.ajaxSettings.xhr();
                        xhr.upload.addEventListener('progress', function (e){
                            let progress = e.loaded / e.total * 100;
                            attachment.setUploadProgress(progress);
                        });
                        return xhr;
                    }
                }).done(function(response) {
                    attachment.setAttributes({
                        url: response,
                        href: response
                    });
                }).fail(function() {
                    console.log('deu errado');
                })
            }
        })

        <?php flash(); ?>
        const confirmEl = document.querySelector('.confirm');

        if (confirmEl) {
            confirmEl.addEventListener('click', function(e) {
                e.preventDefault();
                if (confirm('Tem certeza que deseja excluir este ítem?')) {
                    window.location = e.target.getAttribute('href');
                }
            });
        }
    </script>
</body>

</html>