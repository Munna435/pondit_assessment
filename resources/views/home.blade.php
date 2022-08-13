@extends('layout.app')
@section('title','Home')

@section('content')


    <div class="container-fluid parallax m-0">
        <div class="row d-flex justify-content-center">

            <div class="col-md-4  topDiv text-center">
                <h1 class="text-white">Hello Everyone</h1>
                <h3 class="text-white">As-salamu alaykum</h3>
                <a href="{{asset('/about')}}">
                    <button  class="btn btn-primary">Learn More </button>
                </a>
            </div>


        </div>
    </div>


        <div class="container mt-5 mb-5 text-center">
            <h2>My Services</h2><br><br>
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

            </div>
        </div>



    <div class="color1 p-5">
    <div class="container mt-5 mb-5 text-center">
        <h2>Recent Pages</h2><br><br>
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

        </div>
    </div>
    </div>


    <div class="container text-center mt-5">
        <h2>Contact With Me</h2>
        <div class="row">

            <div class="col-md-6 mt-5 mb-5">
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

            <div class="col-md-6 mb-5 mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.6711481018433!2d90.2787199154337!3d23.936696287549903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e8134b78c71b%3A0xa4f8b3569a09b53e!2sUnique%20Bus%20Stand!5e0!3m2!1sen!2sbd!4v1659202781853!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>





        </div>
    </div>

@endsection
