<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Menu</h2>
                <select wire:model="selector" id="selector" wire:on.change="changeMenu"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm -my-1">
                    <option value="navbar">Navbar</option>
                    <option value="sidenav">Page Menus</option>
                    <option value="footer">Footer</option>
                </select>
            </div>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <?php if($selector === 'navbar'): ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.navbar')->html();
} elseif ($_instance->childHasBeenRendered('l2150918480-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2150918480-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2150918480-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2150918480-0');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.navbar');
    $html = $response->html();
    $_instance->logRenderedChild('l2150918480-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php elseif($selector === 'sidenav'): ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.sidenav.index')->html();
} elseif ($_instance->childHasBeenRendered('l2150918480-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2150918480-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2150918480-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2150918480-1');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.sidenav.index');
    $html = $response->html();
    $_instance->logRenderedChild('l2150918480-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php elseif($selector === 'footer'): ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.footer')->html();
} elseif ($_instance->childHasBeenRendered('l2150918480-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l2150918480-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2150918480-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2150918480-2');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.footer');
    $html = $response->html();
    $_instance->logRenderedChild('l2150918480-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/menu/index.blade.php ENDPATH**/ ?>