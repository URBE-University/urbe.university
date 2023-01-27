<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UploadFeaturedImage extends Component
{
    use WithFileUploads;

    public $post, $image, $image_alt;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->image_alt = $post->featured_image_alt_text;
    }

    public function render()
    {
        return view('livewire.admin.post.upload-featured-image');
    }

    public function setFeaturedImage()
    {
        try {
            if ($this->post->featured_image) {
                Storage::delete($this->post->featured_image); // delete the old image to save storage
            }
            $featured_image = $this->image->store('post_assets');
            $this->post->update([
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
        $this->post->update([
            'featured_image_alt_text' => $this->image_alt,
        ]);
    }

    public function deleteFeaturedImage()
    {
        try {
            Storage::delete($this->post->featured_image);
            $this->post->featured_image = null;
            $this->post->featured_image_alt_text = null;
            $this->post->update();
        } catch (\Throwable $th) {
            Log::error($th);
        }
    }
}
