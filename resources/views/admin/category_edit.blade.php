<x-app>
    <x-slot:title>
        Category edit
    </x-slot:title>




    <div class="color1 p-5">
        <div>
            <h1 class="text-center">CATEGORY UPDATE</h1>
        </div>
    </div>


    <div class="container">
        <form class="row g-3" action="{{route('admin.update',$categories->id)}}" method="post">

            @csrf
            @method('patch')

            <div class="col-md-6">
                <label for="name" class="form-label">name</label>
                <input type="text" name="name" value="{{$categories-> name}}" class="form-control" id="inputEmail4" />

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </form>

    </div>






</x-app>

