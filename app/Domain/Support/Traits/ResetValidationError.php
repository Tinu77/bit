<?php


namespace App\Domain\Support\Traits;


trait ResetValidationError
{

    public function updatedResetValidationError($name, $value): void
    {
        if (in_array($name, $this->fieldList(), true))
        {
            $this->resetValidation($name);
        }
    }

    protected function fieldList(): array{
        return [];
    }
}
