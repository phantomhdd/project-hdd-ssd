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
            <a class="navbar-brand" href="/">
                <div class="dark-logo"></div>
            </a>

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
                @foreach($photos as $key => $photo)
                <figure class="col-12 col-sm-6 col-lg-4 pb-md-4">
                    <div class="card shadow-sm">
                        <a class="navbar-toggler-icon menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item hapus" data-toggle="modal" href="#hapus" data-value='{{ $photo->id }}'>Delete</a>
                        </div>
                        <a class="img-wrapper img-thumbnail" data-toggle="modal" href="#carousel_modal">
                            <div class="img">
                                <img src="{{ $photo->file_path }}" alt="1" data-target="#image_slider" data-slide-to="{{ $key }}">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="row">
                                <span class="col">
                                    <h5 class="card-title">{{ $photo->uploader }}</h5>
                                </span>
                                <span class="col">
                                        <figcaption class="figure-caption text-right">
                                            @php 
                                                $now = new DateTime(date("Y-m-d H:i:s"));
                                                $date = new DateTime($photo->upload_time);
                                                $duration = $date->diff($now);
                                                if ($duration->format('%Y') < 1) {
                                                    if ($duration->format('%d') < 7) {
                                                        if ($duration->format('%d') == 0) {
                                                            if($duration->format('%H') == 0){
                                                                if ($duration->format('%I') == 0) {
                                                                    echo 'few seconds ago';
                                                                } else {
                                                                    if ($duration->format('%I') < 2) {
                                                                        echo $duration->format('%i minute ago');
                                                                    } else {
                                                                        echo $duration->format('%i minutes ago');
                                                                    }
                                                                }
                                                            }else{
                                                                if ($duration->format('%H') < 2) {
                                                                    echo $duration->format('%h hour ago');
                                                                } else {
                                                                    echo $duration->format('%h hours ago');
                                                                }
                                                            }
                                                        } else {
                                                            if ($duration->format('%d') < 2) {
                                                                echo $duration->format('%d day ago');
                                                            } else {
                                                                echo $duration->format('%d days ago');
                                                            }
                                                        }
                                                    } else {
                                                        echo $date->format('d M');
                                                    }
                                                } else {
                                                    echo $date->format('d M Y');
                                                }
                                            @endphp
                                        </figcaption>
                                </span>
                            </span>
                            <p class="card-text">{{ $photo->caption }}</p>
                        </div>
                    </div>
                </figure>
                @endforeach
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
                    @csrf
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
                <form action="/delete" method="POST" enctype="multipart/form-data">
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
                    @csrf
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
                            @foreach ($photos as $key => $photo)
                                @if ($key == 0)
                                    <div class="carousel-item active">
                                @else
                                    <div class="carousel-item">
                                @endif
                                        <img src="{{ $photo->file_path }}" class="d-block w-100" alt="1">
                                        {{-- <div class="carousel-caption d-none d-md-block">
                                            <h5>{{ $photo->uploader }}</h5>
                                            <p>{{ $photo->caption }}</p>
                                        </div> --}}
                                    </div>
                            @endforeach
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
    <script>
        $('.hapus').on('click', function (event) {
            var pic_id = $(this).data('value');
            $('#pic_id').val(pic_id);
        })
    </script>
</body>

</html>