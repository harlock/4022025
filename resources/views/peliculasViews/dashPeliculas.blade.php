@extends("layouts.peliculas")
@section("content")
    <div class="container bg-white">
        <div class="row  min-vh-100">
            <div class="col-7 bg-primary-subtle">
                <div class="row">
                    <div class="input-group flex-nowrap mt-4">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="row mt-4 ms-3">
                    <h4 class="mb-3 fw-bold ">Categories</h4>

                    <div class="col-2 rounded-4 p-2 ms-2" style="background:blue">
                        <i class="fa-solid fa-camera p-2 bg-white rounded-5 mb-2"></i>
                        <h5 class="fw-bold text-white">Pictures</h5>
                        <p class="text-white">480 files</p>
                    </div>

                    <div class="col-2 bg-secondary rounded-4 p-2 ms-2">
                        <i class="fa-solid fa-file p-2 bg-white rounded-5 mb-2"></i>
                        <h5 class="fw-bold text-white">Documents</h5>
                        <p class="text-white">480 files</p>
                    </div>

                    <div class="col-2 rounded-4 p-2 ms-2 bg-danger">
                        <i class="fa-solid fa-video p-2 bg-white rounded-5 mb-2"></i>
                        <h5 class="fw-bold text-white">Videos</h5>
                        <p class="text-white">480 files</p>
                    </div>

                    <div class="col-2 rounded-4 p-2 ms-2 bg-primary">
                        <i class="fa-solid fa-microphone p-2 bg-white rounded-5 mb-2"></i>
                        <h5 class="fw-bold text-white">Audio</h5>
                        <p class="text-white">480 files</p>
                    </div>
                </div>

                <div class="row ms-3">
                    <h4 class="mt-5 mb-3 fw-bold ">Files</h4>
                    <div class="col bg-white rounded-4 me-2 p-2 ms-2">
                        <i class="fa-solid fa-server"></i>
                        <h5 class="fw-bold">Work</h5>
                        <p>820 files</p>
                    </div>

                    <div class="col bg-white rounded-4 me-2 p-2">
                        <i class="fa-solid fa-user"></i>
                        <h5 class="fw-bold">Personal</h5>
                        <p>115 files</p>
                    </div>

                    <div class="col bg-white rounded-4 me-2 p-2">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <h5 class="fw-bold">School</h5>
                        <p>65 files</p>
                    </div>

                    <div class="col bg-white rounded-4 me-2 p-2">
                        <i class="fa-solid fa-box-archive"></i>
                        <h5 class="fw-bold">Archive</h5>
                        <p>21 files</p>
                    </div>

                    <div class="col bg-white rounded-4 me-2 p-2 position-relative">
                        <i class="fa-solid fa-plus position-absolute bottom-50 end-50"></i>
                    </div>
                </div>


                <div class="row d-flex flex-column justify-content-center ms-3">
                    <div class="col">
                        <h4 class="mt-4 mb-4 fw-bold">Recent files</h4>

                        <div class="row bg-white mx-2 rounded-4 mt-2 align-items-center p-1">
                            <div class="col-1">
                                <i class="fa-solid fa-camera p-2 text-white rounded-3" style="background: blue"></i>
                            </div>

                            <div class="col">
                                <h5 class="mb-0 fw-bold">IMG_100000</h5>
                            </div>

                            <div class="col">
                                <p class="mb-0">PNG file</p>
                            </div>

                            <div class="col">
                                <p class="mb-0">5 MB</p>
                            </div>

                            <div class="col">
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>

                            <div class="col">
                                <i class="fa-solid fa-ellipsis"></i>
                            </div>

                        </div>

                        <div class="row bg-white mx-2 rounded-4 mt-2 align-items-center p-1">
                            <div class="col-1">
                                <i class="fa-solid fa-file p-2 rounded-3 mb-2" style="background:gray"></i>
                            </div>

                            <div class="col">
                                <h5 class="mb-0 fw-bold">IMG_100000</h5>
                            </div>

                            <div class="col">
                                <p class="mb-0">PNG file</p>
                            </div>

                            <div class="col">
                                <p class="mb-0">5 MB</p>
                            </div>

                            <div class="col">
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>

                            <div class="col">
                                <i class="fa-solid fa-ellipsis"></i>
                            </div>
                        </div>

                        <div class="row bg-white mx-2 rounded-4 mt-2 align-items-center p-1">
                            <div class="col-1">
                                <i class="fa-solid fa-microphone p-2 rounded-3 mb-2 text-white" style="background:blue"></i>
                            </div>

                            <div class="col">
                                <h5 class="mb-0 fw-bold">IMG_100000</h5>
                            </div>

                            <div class="col">
                                <p class="mb-0">PNG file</p>
                            </div>

                            <div class="col">
                                <p class="mb-0">5 MB</p>
                            </div>

                            <div class="col">
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>

                            <div class="col">
                                <i class="fa-solid fa-ellipsis"></i>
                            </div>
                        </div>

                        <div class="row bg-white mx-2 rounded-4 mt-2 align-items-center p-1">
                            <div class="col-1">
                                <i class="fa-solid fa-file p-2  rounded-3 mb-2" style="background:gray"></i>
                            </div>

                            <div class="col">
                                <h5 class="mb-0 fw-bold">IMG_100000</h5>
                            </div>

                            <div class="col">
                                <p class="mb-0">PNG file</p>
                            </div>

                            <div class="col">
                                <p class="mb-0">5 MB</p>
                            </div>

                            <div class="col">
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>

                            <div class="col">
                                <i class="fa-solid fa-ellipsis"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Fin de seccion recent files -->
                </div>

                <!-- Fin de Segunda columna -->
            </div>


            <div class="col rounded-end bg-primary-subtle">

                <div class="row">
                    <div class="col m-3 bg-white min-vh-100 rounded-3">

                        <div class="row bg-primary-subtle m-2 rounded-3 " style="height: 350px;">
                            <div class="col  p-0 d-flex flex-column justify-content-center align-items-center">
                                <i class="fa-solid fa-download fa-3x mb-3"></i>
                                <h5 class="fw-bold">Add new files</h5>
                            </div>
                        </div>

                        <div class="row bg-primary-subtle m-2 rounded-3 d-flex justify-content-center pb-1">
                            <div class="col d-flex justify-content-between">
                                <h5 class="fw-bold">Your storage</h5>
                                <p class="text-body-tertiary">25% left</p>
                            </div>

                            <p>75 GB of 100 GB are used</p>

                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>

                        <div class="row mt-3 mx-2 rounded-3 bg-primary-subtle pb-2">
                            <h5 class="fw-bold mt-2">Your Shared Foldes</h5>

                            <div class="col mt-2 rounded-3">
                                <div class="row mx-1 rounded-4  mt-2" style="background: gray">
                                    <div class="col d-flex justify-content-between">

                                        <h5 class="fw-bold">Keynote files</h5>
                                        <img class="rounded-5 border border-4"  src="{{asset('img/fotos.jpg')}}" alt="..." style="widht: 25px; height: 25px;">
                                        <img  class="rounded-5 border border-4 m" src="{{asset('img/fotos.jpg')}}" alt="..." style="widht: 25px; height: 25px;">
                                    </div>
                                </div>

                                <div class="row mx-1 rounded-4  mt-2" style="background: fuchsia">
                                    <div class="col d-flex justify-content-between">
                                        <h5 class="fw-bold">Vacation photos</h5>
                                        <img class="rounded-5 border border-4"  src="{{asset('img/fotos.jpg')}}" alt="..." style="widht: 25px; height: 25px;">
                                    </div>
                                </div>

                                <div class="row mx-1 rounded-4  mt-2" style="background: teal">
                                    <div class="col d-flex justify-content-between">
                                        <h5 class="fw-bold">Vacation photos</h5>
                                        <img class="rounded-5 border border-4"  src="{{asset('img/fotos.jpg')}}" alt="..." style="widht: 25px; height: 25px;">
                                        <img  class="rounded-5 border border-4 m" src="{{asset('img/fotos.jpg')}}" alt="..." style="widht: 25px; height: 25px;">
                                    </div>
                                </div>
                            </div>

                            <div class="row mx-auto mt-4">
                                <div class="col border border-2 rounded-3 border-info p-2 text-body-tertiary">
                                    <h4 class="text-center text fs-6">+ Add more</h4>


                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                <!-- Fin tercera columna -->
            </div>
        </div>
    </div>
    
@endsection