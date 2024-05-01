<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $students = Student::paginate();

        return view('livewire.student.index', compact('students'))
            ->with('i', $this->getPage() * $students->perPage());
    }

    public function delete(Student $student)
    {
        $student->delete();

        return $this->redirectRoute('students.index', navigate: true);
    }
}
