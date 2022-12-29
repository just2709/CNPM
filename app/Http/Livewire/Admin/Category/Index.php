<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Carbon\Carbon;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    public $deleteId;

    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin.category.index', compact('categories'));
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        try {
            $category = Category::find($this->deleteId);
            $category->deleted_at = Carbon::now();
            $category->save();
            $this->alert('success', 'Xóa thành công', [
                'position' => 'center',
                'timer' => 2000,
                'toast' => false,
            ]);
        } catch (Exception $e) {
            $this->alert('error', 'Lỗi. Vui lòng thử lại sau', [
                'position' => 'center',
                'timer' => 2000,
                'toast' => false,
            ]);
        }
        
    }
}
