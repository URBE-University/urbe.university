<?php

namespace App\Http\Livewire\Admin\Page;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UploadFeaturedImage extends Component
{
    use WithFileUploads;

    public $page, $image, $image_alt;

    public function mount(Page $page)
    {
        $this->page = $page;
        $this->image_alt = $page->featured_image_alt_text;
    }

    public function render()
    {
        return view('livewire.admin.page.upload-featured-image');
    }

    public function setFeaturedImage()
    {
        try {
            if ($this->page->featured_image) {
                Storage::delete($this->page->featured_image); // delete the old image to save storage
            }
            $featured_image = $this->image->store('page_assets');
            $this->page->update([
                'featured_image' => $featured_image,
                'featured_image_alt_text' => $this->image_alt,
            ]);
        } catch (\Throwable $th) {
            Log::error($th);
        }
        $this->reset('image');
    }

    public function saveAltText()
    {
        $this->page->update([
            'featured_image_alt_text' => $this->image_alt,
        ]);
    }

    public function deleteFeaturedImage()
    {
        try {
            Storage::delete($this->page->featured_image);
            $this->page->featured_image = null;
            $this->page->featured_image_alt_text = null;
            $this->page->update();
        } catch (\Throwable $th) {
            Log::error($th);
        }
    }
}
