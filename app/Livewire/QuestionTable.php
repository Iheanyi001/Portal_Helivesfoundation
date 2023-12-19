<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\{Exam, Questions};
use Illuminate\Database\Eloquent\Builder;

class QuestionTable extends DataTableComponent
{
    //protected $model = Questions::class;
    public $exam_id;
    public function builder(): Builder
{
    $query = Questions::query();
   // Questions::;
    return $query->where(['id'=>$this->exam_id]);
}

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Exam id", "exam_id")
                ->sortable(),
            Column::make("Question", "question")
                ->sortable(),
            Column::make("Answer", "answer")
                ->sortable(),
            Column::make("Right", "right")
                ->sortable(),
            Column::make("Wrong", "wrong")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
