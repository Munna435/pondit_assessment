@extends('layout.app')
@section('title','Service')

@section('content')
    <div class="color1 p-5">
        <div>
            <h1 class="text-center">My Services</h1>
        </div>
    </div>

    <div class="container p-5">
        <div class="row">

            <div class="col-md-4 p-1">
                <div class="card" style="width: 100%">
                    <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
                <div class="card" style="width: 100%">
                    <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
                <div class="card" style="width: 100%">
                    <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
                <div class="card" style="width: 100%">
                    <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
                <div class="card" style="width: 100%">
                    <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
                <div class="card" style="width: 100%">
                    <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
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
                        <p>md foysal khan ...............................................................................</p>
                        <p>No reviews · Bar ????????????????????????????????????????????????</p>
                        <p>W7VR+5PW, A/S Rd</p>
                        <p>Dine-in·</p>
                        <p>Delivery</p>
                        <p>Delivery</p>
                        <p>Delivery</p>
                    </div>


        </div>
    </div>






@endsection
