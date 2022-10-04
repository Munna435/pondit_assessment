<x-app>
    <x-slot:title>
        Category List
    </x-slot:title>




    <div class="color1 p-5">
        <div>
            <h1 class="text-center">CATEGORY LIST</h1>
        </div>
    </div>


    <div class="container">
        <form class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" id="inputEmail4" />
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">details</label>
                <input type="number" class="form-control" id="inputEmail4" />
            </div>

            <div class="col-md-6">
                <label for="inputCity" class="form-label">ID</label>
                <input type="text" class="form-control" id="inputCity" />
            </div>
            <div class="col-md-6">
                <label for="inputState" class="form-label">price</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>100-200</option>
                    <option>200-300</option>
                    <option>400-500</option>
                    <option>600-700</option>
                    <option>800-900</option>
                    <option>901-1000</option>
                    <option>1001-1200</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="formFilemd" class="form-label">image</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file" />
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
        </form>
    </div>





</x-app>

