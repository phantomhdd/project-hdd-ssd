<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/fav.ico" type="image/x-icon">
    
    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- javascript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <!-- navigasi -->
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Gallery</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- navbar kiri -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>

                <!-- navbar kanan -->
                <ul class="navbar-nav ml-auto justify-content-between">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" href="#upload"><strong>&plus; Upload</strong></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Muhammad Faza
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Account</a>
                            <a class="dropdown-item" href="#">Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">FAQ</a>
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navigasi -->
    
    <!-- konten -->
    <section class="konten" id="konten">
        <div class="container">
            <!-- kumpulan gambar -->
            <div class="row">
                <figure class="col-12 col-sm-6 col-lg-4 pb-md-4">
                    <div class="card shadow-sm">
                        <a class="navbar-toggler-icon menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" data-toggle="modal" href="#hapus">Delete</a>
                        </div>
                        <a class="img-wrapper img-thumbnail" data-toggle="modal" href="#carousel_modal">
                            <div class="img">
                                <img src="img/thumbs/1.png" alt="1" data-target="#image_slider" data-slide-to="0">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="row">
                                <span class="col">
                                    <h5 class="card-title">Card title</h5>
                                </span>
                                <span class="col">
                                    <figcaption class="figure-caption text-right">16-20-1998</figcaption>
                                </span>
                            </span>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </figure>
                <figure class="col-12 col-sm-6 col-lg-4 pb-md-4">
                    <div class="card shadow-sm">
                        <a class="navbar-toggler-icon menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" data-toggle="modal" href="#hapus">Delete</a>
                        </div>
                        <a class="img-wrapper img-thumbnail" data-toggle="modal" href="#carousel_modal">
                            <div class="img">
                                <img src="img/thumbs/2.png" alt="2" data-target="#image_slider" data-slide-to="1">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="row">
                                <span class="col">
                                    <h5 class="card-title">Card title</h5>
                                </span>
                                <span class="col">
                                    <figcaption class="figure-caption text-right">16-20-1998</figcaption>
                                </span>
                            </span>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </figure>
                <figure class="col-12 col-sm-6 col-lg-4 pb-md-4">
                    <div class="card shadow-sm">
                        <a class="navbar-toggler-icon menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" data-toggle="modal" href="#hapus">Delete</a>
                        </div>
                        <a class="img-wrapper img-thumbnail" data-toggle="modal" href="#carousel_modal">
                            <div class="img">
                                <img src="img/photos-profile/profile-picture.png" alt="faza" data-target="#image_slider" data-slide-to="2">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="row">
                                <span class="col">
                                    <h5 class="card-title">Card title</h5>
                                </span>
                                <span class="col">
                                    <figcaption class="figure-caption text-right">16-20-1998</figcaption>
                                </span>
                            </span>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, qui!.</p>
                        </div>
                    </div>
                </figure>
                <figure class="col-12 col-sm-6 col-lg-4 pb-md-4">
                    <div class="card shadow-sm">
                        <a class="navbar-toggler-icon menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" data-toggle="modal" href="#hapus">Delete</a>
                        </div>
                        <a class="img-wrapper img-thumbnail" data-toggle="modal" href="#carousel_modal">
                            <div class="img">
                                <img src="img/nightmode.png" alt="nightmode" data-target="#image_slider" data-slide-to="3">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="row">
                                <span class="col">
                                    <h5 class="card-title">Card title</h5>
                                </span>
                                <span class="col">
                                    <figcaption class="figure-caption text-right">16-20-1998</figcaption>
                                </span>
                            </span>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </figure>
                <figure class="col-12 col-sm-6 col-lg-4 pb-md-4">
                    <div class="card shadow-sm">
                        <a class="navbar-toggler-icon menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" data-toggle="modal" href="#hapus">Delete</a>
                        </div>
                        <a class="img-wrapper img-thumbnail" data-toggle="modal" href="#carousel_modal">
                            <div class="img">
                                <img src="img/thumbs/3.png" alt="3" data-target="#image_slider" data-slide-to="4">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="row">
                                <span class="col">
                                    <h5 class="card-title">Card title</h5>
                                </span>
                                <span class="col">
                                    <figcaption class="figure-caption text-right">16-20-1998</figcaption>
                                </span>
                            </span>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </figure>
                <figure class="col-12 col-sm-6 col-lg-4 pb-md-4">
                    <div class="card shadow-sm">
                        <a class="navbar-toggler-icon menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" data-toggle="modal" href="#hapus">Delete</a>
                        </div>
                        <a class="img-wrapper img-thumbnail" data-toggle="modal" href="#carousel_modal">
                            <div class="img">
                                <img src="img/thumbs/4.png" alt="4" data-target="#image_slider" data-slide-to="5">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="row">
                                <span class="col">
                                    <h5 class="card-title">Card title</h5>
                                </span>
                                <span class="col">
                                    <figcaption class="figure-caption text-right">16-20-1998</figcaption>
                                </span>
                            </span>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </figure>
                <figure class="col-12 col-sm-6 col-lg-4 pb-md-4">
                    <div class="card shadow-sm">
                        <a class="navbar-toggler-icon menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" data-toggle="modal" href="#hapus">Delete</a>
                        </div>
                        <a class="img-wrapper img-thumbnail" data-toggle="modal" href="#carousel_modal">
                            <div class="img">
                                <img src="img/thumbs/5.png" alt="5" data-target="#image_slider" data-slide-to="6">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="row">
                                <span class="col">
                                    <h5 class="card-title">Card title</h5>
                                </span>
                                <span class="col">
                                    <figcaption class="figure-caption text-right">16-20-1998</figcaption>
                                </span>
                            </span>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </figure>
                <figure class="col-12 col-sm-6 col-lg-4 pb-md-4">
                    <div class="card shadow-sm">
                        <a class="navbar-toggler-icon menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" data-toggle="modal" href="#hapus">Delete</a>
                        </div>
                        <a class="img-wrapper img-thumbnail" data-toggle="modal" href="#carousel_modal">
                            <div class="img">
                                <img src="img/thumbs/6.png" alt="6" data-target="#image_slider" data-slide-to="6">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="row">
                                <span class="col">
                                    <h5 class="card-title">Card title</h5>
                                </span>
                                <span class="col">
                                    <figcaption class="figure-caption text-right">16-20-1998</figcaption>
                                </span>
                            </span>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </figure>
                <figure class="col-12 col-sm-6 col-lg-4 pb-md-4">
                    <div class="card shadow-sm">
                        <a class="navbar-toggler-icon menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" data-toggle="modal" href="#hapus">Delete</a>
                        </div>
                        <a class="img-wrapper img-thumbnail" data-toggle="modal" href="#carousel_modal">
                            <div class="img">
                                <img src="img/photos/1590265628.png" alt="gaje" data-target="#image_slider" data-slide-to="8">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="row">
                                <span class="col">
                                    <h5 class="card-title">Card title</h5>
                                </span>
                                <span class="col">
                                    <figcaption class="figure-caption text-right">16-20-1998</figcaption>
                                </span>
                            </span>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </figure>
            </div>
            <!-- akhir kumpulan gambar -->

            
        </div>
    </section>
    <!-- akhir konten -->


<!-- Modal Upload -->
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
                    <button type="submit" class="btn btn-primary">Upload Picture</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal upload -->


<!-- Modal hapus -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content card">
            <div class="modal-header nav-bg">
                <h5 class="modal-title" id="exampleModalLabel">Delete Picture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/process" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="pic_id">Do you want to delete the picture?</label>
                        <input type="hidden" class="form-control-file" name="pic_id" id="pic_id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal hapus -->

<!-- modal-carousel -->
<div class="modal fade" id="carousel_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content card">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- image carousel -->
                <div id="image_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/thumbs/1.png" class="d-block w-100" alt="1">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Uploader</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/thumbs/2.png" class="d-block w-100" alt="2">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Uploader</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/photos-profile/profile-picture.png" class="d-block w-100" alt="faza">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Uploader</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/nightmode.png" class="d-block w-100" alt="nightmode">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Uploader</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/thumbs/3.png" class="d-block w-100" alt="3">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Uploader</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/thumbs/4.png" class="d-block w-100" alt="4">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Uploader</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/thumbs/5.png" class="d-block w-100" alt="5">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Uploader</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/thumbs/6.png" class="d-block w-100" alt="6">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Uploader</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/photos/1590265628.png" class="d-block w-100" alt="gaje">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Uploader</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#image_slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#image_slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- akhir image carousel -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success mr-auto">Download</button>
                <button type="button" class="btn btn-danger ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- akhir modal carousel -->

 
<!-- dark mode toggler -->
<div class="theme-switch-wrapper">
    <div class="mb-n4">
        <label for="checkbox">
            <picture class="dark-img"></picture>
        </label>
    </div>
    <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round"></div>
    </label>
    <div class="mt-n3 ml-1">
        <label for="checkbox">
            <em>Silau Bos..!</em>
        </label>
    </div>
        
</div>
<!-- akhir dark mode toggler -->


<script src="js/script.js"></script>
</body>
</html>