<?php

namespace App\Console\Commands;

use App\Models\Page;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Storage;

class BuildAssets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assets:build';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $pages = Page::get();

        foreach ($pages as $page) {
            if (Storage::exists('custom_stubs/' . $page->url . '.html')) {
                Storage::delete('custom_stubs/' . $page->url . '.html');
            }
            Storage::put('custom_stubs/' . $page->url . '.html', $page->content);
        }
        $result = shell_exec('cd .. && npm run build');

        dump($result);
    }
}
