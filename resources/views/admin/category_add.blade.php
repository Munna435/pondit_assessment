<x-app>
    <x-slot:title>
        Category Add
    </x-slot:title>




    <div class="color1 p-5">
        <div>
            <h1 class="text-center">CATEGORY LIST</h1>
        </div>
    </div>


    <div class="container py-5" style="min-height: 462px">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @if(session('message'))

                <p class="text-success">
                    {{session('message')}}

                </p>
            @endif
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>

                    <td>
                        <a href="{{route('admin.show', $category->id)}}" class="btn btn-primary" btn-lg btn-block>
                            Show
                        </a>


                        <a href="{{route('admin.edit', $category->id)}}"> <button class="btn btn-danger" btn-lg btn-block>
                                edit
                            </button> </a>

                       <a href="{{route('admin.destroy', $category->id)}}"> <button class="btn btn-danger" btn-lg btn-block>
                            delete
                        </button> </a>

                        <a href="{{route('admin.create')}}"> <button class="btn btn-danger" btn-lg btn-block>
                                add
                            </button> </a>

{{--                        <form action = "{{ route ('admin.destroy ',$category-> id )}}" method = "post">--}}
{{--                        @csrf--}}
{{--                        @method ( ' delete ' )--}}
{{--                        <button class = " btn btn - sm btn - outline - danger"> Delete </button>--}}

{{--                            </form>--}}



                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>






</x-app>
