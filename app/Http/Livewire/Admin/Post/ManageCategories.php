<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class ManageCategories extends Component
{
    public $post, $newCategory, $available_categories = [];

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function syncCategories($category)
    {
        try {
            if ($this->post->categories->where('id', $category)->count() == 1) {
                $this->post->categories()->detach([$category]);
            } else {
                $this->post->categories()->attach([$category]);
            }
        } catch (\Throwable $th) {
            Log::error($th);
        }
    }

    public function addCategory()
    {
        try {
            Category::create([
                'name' => $this->newCategory,
                'slug' => str($this->newCategory)->slug(),
            ]);
        } catch (\Throwable $th) {
            Log::error($th);
        }
        $this->reset('newCategory');
    }

    public function render()
    {
        return view('livewire.admin.post.manage-categories', [
            'categories' => Category::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
