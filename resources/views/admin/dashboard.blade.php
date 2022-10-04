<x-app>

    <x-slot:title>
    Dashboard
    </x-slot:title>

    <div class="color1 p-5">
        <div>
            <h1 class="text-center">DASHBOARD</h1>
        </div>
    </div>


    <div class="container">
        <br><br>
        <div class="body d-flex py-3">
            <div class="container-xxl">

                <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                    <div class="col">
                        <div class="alert-success alert mb-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail bg-success text-light"><i
                                        class="fa fa-dollar fa-lg"></i></div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div class="h6 mb-0">Revenue</div>
                                    <span class="small">$18,925</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert-danger alert mb-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail bg-danger text-light"><i
                                        class="fa fa-credit-card fa-lg"></i></div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div class="h6 mb-0">Expense</div>
                                    <span class="small">$11,024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert-warning alert mb-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail bg-warning text-light"><i
                                        class="fa fa-smile-o fa-lg"></i></div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div class="h6 mb-0">Happy Clients</div>
                                    <span class="small">8,925</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert-info alert mb-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail bg-info text-light"><i class="fa fa-shopping-bag"
                                                                                               aria-hidden="true"></i></div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div class="h6 mb-0">New StoreOpen</div>
                                    <span class="small">8,925</span>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <div class="color1 mt-5 mb-5">
                    <div>
                        <h1 class="text-center">PRODUCT LIST</h1>
                    </div>
                </div>


                <div class="container p-5">
                    <div class="row">

                        <div class="col-md-4 p-1">
                            <div class="card" style="width: 100%">
                                <img src="{{ asset('images/card.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-1">
                            <div class="card" style="width: 100%">
                                <img src="{{ asset('images/card.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-1">
                            <div class="card" style="width: 100%">
                                <img src="{{ asset('images/card.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-1">
                            <div class="card" style="width: 100%">
                                <img src="{{ asset('images/card.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-1">
                            <div class="card" style="width: 100%">
                                <img src="{{ asset('images/card.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-1">
                            <div class="card" style="width: 100%">
                                <img src="{{ asset('images/card.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>


                <div class="container">
                    <div class="row">

                        <div class="col-md-6 mt-5 mb-5 p-5 color2">

                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn col-12 btn-primary">Submit</button>
                            </form>

                        </div>
                        <div class="col-md-6 mt-5 mb-5 p-5 ">
                            <h5>Address bar</h5>
                            <p>md foysal khan
                                ...............................................................................</p>
                            <p>No reviews · Bar ????????????????????????????????????????????????</p>
                            <p>W7VR+5PW, A/S Rd</p>
                            <p>Dine-in·</p>
                            <p>Delivery</p>
                            <p>Delivery</p>
                            <p>Delivery</p>
                        </div>


                    </div>
                </div>







</x-app>



