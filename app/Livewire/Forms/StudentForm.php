<?php

namespace App\Livewire\Forms;

use App\Models\Student;
use Livewire\Form;

class StudentForm extends Form
{
    public ?Student $studentModel;
    
    public $name = '';
    public $address = '';
    public $phone = '';

    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'address' => 'required|string',
			'phone' => 'required|string',
        ];
    }

    public function setStudentModel(Student $studentModel): void
    {
        $this->studentModel = $studentModel;
        
        $this->name = $this->studentModel->name;
        $this->address = $this->studentModel->address;
        $this->phone = $this->studentModel->phone;
    }

    public function store(): void
    {
        $this->studentModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->studentModel->update($this->validate());

        $this->reset();
    }
}
