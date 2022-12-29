<?php

namespace App\Http\Livewire\Admin\Color;

use App\Models\Color;
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
        $colors = Color::paginate(10);
        return view('livewire.admin.color.index', compact('colors'));
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        try {
            $id = $this->deleteId;
            $color = Color::find($id);
            $color->delete();
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
