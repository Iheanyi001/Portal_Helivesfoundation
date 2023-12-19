<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Exam;

class ExamTable extends DataTableComponent
{
    protected $model = Exam::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')->setTableRowUrl(function($row) {
            return route('exam.question.list', $row);
        })
        ->setTableRowUrlTarget(function($row) {
           /* if ($row->isExternal()) {
                return '_blank';
            }*/

            return '_self';
        });
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Title", "title")
                ->sortable(),
            Column::make("Time", "time")
                ->sortable(),
            Column::make("Created at", "created_at")->sortable(),
            Column::make("Action", "Action")->label(fn($row, Column $column)  => '<a href="'.route('exam.edit', $row->id).'" class="btn btn-primary mr-3">'.'Edit'.'</a>'.'<a href="'.route('exam.destroy', $row->id).'" class="btn btn-primary">'.'Delete'.'</a>' )->html()->unclickable(),
        ];
    }
}
