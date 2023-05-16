<div class="w-full bg-urbe text-white text-sm">
    <div class="max-w-7xl mx-auto h-12 px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-full">
            <div class="flex items-center">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.start-date-banner.mini')->html();
} elseif ($_instance->childHasBeenRendered('ock90RM')) {
    $componentId = $_instance->getRenderedChildComponentId('ock90RM');
    $componentTag = $_instance->getRenderedChildComponentTagName('ock90RM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ock90RM');
} else {
    $response = \Livewire\Livewire::mount('website.start-date-banner.mini');
    $html = $response->html();
    $_instance->logRenderedChild('ock90RM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
            <div class="flex items-center space-x-4 font-medium">
                <a href="" title="Learn about what's happening around URBE University">Events</a>
                <a href="" title="Get the latest news from our blog">Blog</a>
                <a href="" title="Shop essentials" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M6 5v1H4.667a1.75 1.75 0 00-1.743 1.598l-.826 9.5A1.75 1.75 0 003.84 19H16.16a1.75 1.75 0 001.743-1.902l-.826-9.5A1.75 1.75 0 0015.333 6H14V5a4 4 0 00-8 0zm4-2.5A2.5 2.5 0 007.5 5v1h5V5A2.5 2.5 0 0010 2.5zM7.5 10a2.5 2.5 0 005 0V8.75a.75.75 0 011.5 0V10a4 4 0 01-8 0V8.75a.75.75 0 011.5 0V10z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-2">Tiger Store</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/partials/subnavbar.blade.php ENDPATH**/ ?>