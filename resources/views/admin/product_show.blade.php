<x-app>

    <x-slot:title>
        Product Show
    </x-slot:title>




    <div class="color1 p-5">
        <div>
            <h1 class="text-center">PRODUCT SHOW</h1>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PD-101</td>
                    <td>Black Shirt</td>
                    <td>10</td>
                    <td>M/L/XL</td>
                    <td>4500</td>
                    <td>
                        <button type="button" name="Edit" id="" class="btn btn-primary" btn-lg btn-block>
                            edit
                        </button>
                        <button type="button" name="Edit" id="" class="btn btn-danger" btn-lg btn-block>
                            delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>






</x-app>
