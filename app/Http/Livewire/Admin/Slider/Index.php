<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\Slider;
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
        $sliders = Slider::paginate(5);
        return view('livewire.admin.slider.index', compact('sliders'));
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        try {
            $id = $this->deleteId;
            $slider = Slider::find($id);
            $slider->delete();
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
