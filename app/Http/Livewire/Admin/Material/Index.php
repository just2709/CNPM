<?php

namespace App\Http\Livewire\Admin\Material;

use App\Models\Material;
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
        $materials = Material::paginate(5);
        return view('livewire.admin.material.index', compact('materials'));
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        try {
            $category = Material::find($this->deleteId);
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
