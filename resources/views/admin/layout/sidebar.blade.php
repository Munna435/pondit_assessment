<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <div class="">
            @include('admin.layout.logo')
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <a href="{{ url('/admin/dashboard') }}" class="d-block py-2 px-2 mb-1 rounded"> Dashboard </a>
        <a href="{{ url('/admin/category_list') }}" class="d-block py-2 px-2 mb-1 rounded"> Category List </a>
        <a href="{{ url('/category') }}" class="d-block py-2 px-2 mb-1 rounded"> Category Add </a>
        <a href="{{ url('/admin/category_show') }}" class="d-block py-2 px-2 mb-1 rounded"> Category Show </a>
        <a href="{{ url('/admin/category_edit') }}" class="d-block py-2 px-2 mb-1 rounded"> Category Edit </a>
        <a href="{{ url('/admin/profile_detail') }}" class="d-block py-2 px-2 mb-1 rounded"> Profile Details </a>
        <a href="{{ url('/admin/profile_edit') }}" class="d-block py-2 px-2 mb-1 rounded"> Profile Edit </a>
        <a href="{{ url('/admin/product_list') }}" class="d-block py-2 px-2 mb-1 rounded"> Product List </a>
        <a href="{{ url('/admin/product_add') }}" class="d-block py-2 px-2 mb-1 rounded"> Product Add </a>
        <a href="{{ url('/admin/product_show') }}" class="d-block py-2 px-2 mb-1 rounded"> Product Show </a>
        <a href="{{ url('/admin/product_edit') }}" class="d-block py-2 px-2 mb-1 rounded"> Product Edit </a>
    </div>
</div>
