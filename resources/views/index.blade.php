<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/fav.ico" type="image/x-icon">

    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <!-- javascript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-text nav-bg">
        <div class="container">
            <a class="navbar-brand" href="/">Gallery</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navbar kiri -->
            <div class="collapse navbar-collapse justify-content-sm-start" id="navbarSupportedContent">
                <ul class="navbar-nav">
                </ul>
            </div>

            <!-- navbar kanan -->
            <div class="collapse navbar-collapse justify-content-sm-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                            </label>
                            <em>Enable Dark Mode!</em>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-plus" data-toggle="modal" href="#upload"><strong>&plus;</strong></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Username</a>
                        <div class="dropdown-menu dropdown-menu-md-right">
                            <a class="dropdown-item" href="#">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navigasi -->


    <!-- Konten -->
    <section class="konten" id="konten">
        <div class="container">
            <div class="row">
                @foreach($photos as $photo)
                <div class="col-lg-4 konten-item">
                    <div class="card">
                        <a href="#">
<<<<<<< HEAD
                            <img src="img/thumbs/1.png" alt="1" class="card-img-top">
=======
                            <img src="{{$photo->file_path}}" alt="1" class="card-img-top">
>>>>>>> 92b42d2f4e8ecf1d3cfc7101f96fe32c1a5c2cd1
                        </a>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="card-title">{{$photo->uploader}}</h6>
                                </div>
                                <div class="col-md-6">
                                    @if(date("Y-m-d") == substr($photo->upload_time,0,10))
                                        <h6 class="figure-caption text-right"><em>{{substr($photo->upload_time,10,-3)}}</em></h6>
                                    @else
                                        <h6 class="figure-caption text-right"><em>{{substr($photo->upload_time,0,10)}}</em></h6>
                                    @endif
                                </div>
                            </div>

                            <p class="card-text caption">
                                {{$photo->caption}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Akhir Konten -->


    <!-- Modal -->
    <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content card">
                <div class="modal-header nav-bg">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/process" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="upload-picture">Upload Picture</label>
                            <input type="file" class="form-control-file" name="files" id="upload-picture">
                        </div>
                        <div class="form-group">
                            <label for="upload-caption">Insert Caption</label>
                            <textarea class="form-control" id="upload-caption" rows="3" name="caption"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="box__button btn btn-primary">Upload Picture</button>
                        {{ csrf_field() }}
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- akhir modal -->



    <script src="js/script.js"></script>
</body>
</html>
