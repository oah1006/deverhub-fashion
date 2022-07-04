<div class="bg-gray-800 text-white text-xl w-1/5 px-10 py-6">
    <a href="{{ route('admin.dashboard') }}" class="flex gap-4 items-center">
        <span class="material-icons-outlined">
            dashboard
        </span>
        <p>Dashboard</p> 
    </a>
    <a href="{{ route('admin.products.index') }}" class="flex gap-4 items-center mt-3">
        <span class="material-icons-outlined">
            inventory_2
        </span>
        <p>Product</p> 
    </a>
    <a href="" class="flex gap-4 items-center mt-3">
        <span class="material-icons-outlined">
            receipt
        </span>
        <p>Receipt</p> 
    </a>
    <a href="{{ route('admin.users.index') }}" class="flex gap-4 items-center mt-3">
        <span class="material-icons-outlined">
            face
        </span>
        <p>User</p> 
    </a>
    <a href="{{ route('admin.catalogs.index') }}" class="flex gap-4 items-center mt-3">
        <span class="material-icons-outlined">
            category
        </span>
        <p>Category</p> 
    </a>
</div>