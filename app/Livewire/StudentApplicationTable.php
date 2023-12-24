<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\StudentApplication;

class StudentApplicationTable extends DataTableComponent
{
    protected $model = StudentApplication::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
        ->setTableRowUrl(function($row) {
            return route('student-applications.show', $row);
        })
        ->setTableRowUrlTarget(function($row) {
            return '_self';
        });
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Full name", "full_name")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Phone", "phone")
                ->sortable(),
            Column::make("Age", "age")
                ->sortable(),
            Column::make("Education", "education")
                ->sortable(),
            Column::make("Score", "score")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
        ];
    }
}
