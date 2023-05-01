<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Menu</h2>
                <select wire:model="selector" id="selector" wire:on.change="changeMenu"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm -my-1">
                    <option value="navbar">Navbar</option>
                    <option value="footer">Footer</option>
                </select>
            </div>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if($selector === 'navbar')
                @livewire('admin.menu.navbar')
            @elseif ($selector === 'footer')
                @livewire('admin.menu.footer')
            @endif
        </div>
    </div>
</div>
