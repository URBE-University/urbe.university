<?php

namespace App\Jobs;

use App\Models\SiteSettings;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RunUrlIndexer implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $urls;
    public $urlsArray = [];

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        $this->urls = DB::table('site_indices')->where('is_indexed', 0)->get();
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $settings = SiteSettings::first();

        foreach ($this->urls as $url) {
            if ($url->url) {
                $bing = "https://bing.com/indexnow";
                $yandex = "https://yandex.com/indexnow";

                // Send to Bing
                $bingResponse = Http::get($bing, [
                    'url' => $url->url,
                    'key' => $settings->instant_index_key,
                    'keyLocation' => config('app.url') . '/' . $settings->instant_index_key . '.txt',
                ]);

                // Send to Yandex
                $yandexResponse = Http::get($yandex, [
                    'url' => $url->url,
                    'key' => $settings->instant_index_key,
                    'keyLocation' => config('app.url') . '/' . $settings->instant_index_key . '.txt',
                ]);

                // Update database records
                DB::table('site_indices')->where('url', $url->url)->update([
                    'is_indexed' => ($bingResponse->status() == 200 && $yandexResponse->status() == 200) ? 1 : 0,
                    'bing_response_code' => $bingResponse->status(),
                    'yandex_response_code' => $yandexResponse->status(),
                ]);
            }
        }
    }
}
