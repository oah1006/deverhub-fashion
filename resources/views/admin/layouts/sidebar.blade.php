<div class="text-zinc-600 font-medium text-lg w-1/5 py-6">
    <div>
        <p class="text-zinc-500 text-lg px-10">Dashboard</p>
        <a href="{{ route('admin.dashboard') }}" class="flex gap-2 items-center px-12 mt-2">
            <span class="material-icons-outlined">
                dashboard
            </span>
            <p>Dashboard</p> 
        </a>
    </div>

    <div class="mt-4">
        <p class="text-zinc-500 text-lg px-10">Manage</p>
        <a href="{{ route('admin.products.index') }}" class="flex gap-2 items-center px-12 mt-2">
            <span class="material-icons-outlined">
                inventory_2
            </span>
            <p>Product</p> 
        </a>
        <a href="{{ route('admin.orders.index') }}" class="flex gap-2 items-center px-12 mt-3">
            <span class="material-icons-outlined">
                receipt
            </span>
            <p>Receipt</p> 
        </a>
        <a href="{{ route('admin.users.index') }}" class="flex gap-2 items-center px-12 mt-3">
            <span class="material-icons-outlined">
                face
            </span>
            <p>User</p> 
        </a>
        <a href="{{ route('admin.catalogs.index') }}" class="flex gap-2 items-center px-12 mt-3">
            <span class="material-icons-outlined">
                category
            </span>
            <p>Category</p> 
        </a>
    </div>
</div>