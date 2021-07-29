<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#1e1e1e" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <title>Interview MyNIC</title>
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">
        <div class="row header-color">
            <div class="col-md-12 mt-5">
                <div class="text-center">
                    <div class="content">
                        <h3 class="text-light">All notes</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-5">
                <div class="text-center">
                    <div class="content">
                        <a class="btn btn-warning my-2 my-sm-0 ml-auto" href="add">Add new note</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($notes as $note)

            <div class="col-md-3 mt-3">
                <div class="text-center">
                    <div class="content">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $loop->iteration }}</h5>
                                <p class="card-text text-left">{{$note->notes}}</p>
                                <br>
                                <span class="badge badge-warning">*created on
                                    {{$note->created_at->format('jS F Y h:i A')}}
                                </span>


                                @if ($note->created_at != $note->updated_at)
                                <span class="badge badge-dark">*updated on
                                    {{$note->updated_at->format('jS F Y h:i A')}}
                                </span>
                                @else
                                <span class="badge badge-warning">*no update records found 😃</span>
                                @endif

                                <div class="mt-4">
                                    <a href="update/{{$note->number}}" class="btn btn-warning">Update</a>
                                    <a href="deletenote/{{$note->number}}" class="btn btn-warning">Delete</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>


</html>