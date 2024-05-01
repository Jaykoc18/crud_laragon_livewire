<?php

namespace App\Livewire\Students;

use App\Livewire\Forms\StudentForm;
use App\Models\Student;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public StudentForm $form;

    public function mount(Student $student)
    {
        $this->form->setStudentModel($student);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('students.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.student.edit');
    }
}
