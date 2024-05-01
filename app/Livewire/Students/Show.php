<?php

namespace App\Livewire\Students;

use App\Livewire\Forms\StudentForm;
use App\Models\Student;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public StudentForm $form;

    public function mount(Student $student)
    {
        $this->form->setStudentModel($student);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.student.show', ['student' => $this->form->studentModel]);
    }
}
