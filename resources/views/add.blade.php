<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#1e1e1e" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <title>Interview MyNIC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light header-color">
        <a class="navbar-brand text-light" href="/">Add notes</a>
        <a class="btn btn-warning my-2 my-sm-0 ml-auto" href="/">Return home</a>
    </nav>
    <form method="post" action="{{ url('addnote') }}" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-12 p-4">
                    <div class="text-center">
                        <div class="content">
                            <p>Add Notes</p>
                            <textarea class="form-control" name="notes" placeholder="Insert some notes" rows="8"
                                required></textarea>
                        </div>
                        <button class="btn btn-warning btn btn-block mt-3" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>