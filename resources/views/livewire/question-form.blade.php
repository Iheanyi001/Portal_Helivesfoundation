<div>
    <form id="input" wire:submit="{{ $old_question? 'update': 'create'}}" class="p-5">

        <div class="preview">
            <div>
                <label for="regular-form-1" class="form-label" >Select Exam</label>
                <select wire:model.blur="exam_title"  class="form-control">
                    <option value="0" selected>---Select Exam----------</option>
                    @foreach($exams as $exam)
                    <option value="{{ $exam->id }}">{{ $exam->title }}</option>
                    @endforeach
                </select>
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div id="question1" >
                <div style="margin-top:20px; padding-top:20px; border-top:1px solid gray">
                    <label for="regular-form-1" class="form-label">Question Number 1</label>
                    <textarea wire:model.blur="question.0" class="form-control" placeholder="Enter Question number 1 here" ></textarea>
                    @error('question.0') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="regular-form-1" class="form-label">Option A</label>
                    <input wire:model.blur="optiona.0" type="text" class="form-control" placeholder="Enter option a" >
                    @error('optiona.0') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="regular-form-1" class="form-label">Option B</label>
                    <input wire:model.blur="optionb.0" type="text" class="form-control" placeholder="Enter option b" >
                    @error('optionb.0') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="regular-form-1" class="form-label">Option C</label>
                    <input wire:model.blur="optionc.0" type="text" class="form-control" placeholder="Enter option c" >
                    @error('optionc.0') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="regular-form-1" class="form-label">Option D</label>
                    <input wire:model.blur="optiond.0" type="text" class="form-control" placeholder="Enter option d" >
                    @error('optiond.0') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="regular-form-1" class="form-label">Select Correct Answer For Question 1</label>
                    <select wire:model.blur="answer.0"  class="form-control">
                        <option value="">---select----</option>
                        <option value="0">option a</option>
                        <option value="1">option b</option>
                        <option value="2">option c</option>
                        <option value="3">option d</option>
                    </select>
                    @error('answer.0') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                @foreach($inputs as $key => $value)
                <div style="margin-top:20px; padding-top:20px; border-top:0.5px solid gray">
                    <label for="regular-form-1" class="form-label">Question Number {{ $value }}</label>
                    <textarea wire:model.blur="question.{{ $value }}" class="form-control" placeholder="Enter Question number {{ $value }} here" ></textarea>
                    @error('question.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="regular-form-1" class="form-label">Option A</label>
                    <input wire:model.blur="optiona.{{ $value }}" type="text" class="form-control" placeholder="Enter option a" >
                    @error('optiona.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="regular-form-1" class="form-label">Option B</label>
                    <input wire:model.blur="optionb.{{$value}}" type="text" class="form-control" placeholder="Enter option b" >
                    @error('optionb.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="regular-form-1" class="form-label">Option C</label>
                    <input wire:model.blur="optionc.{{ $value }}" type="text" class="form-control" placeholder="Enter option c" >
                    @error('optionc.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="regular-form-1" class="form-label">Option D</label>
                    <input wire:model.blur="optiond.{{ $value }}" type="text" class="form-control" placeholder="Enter option d" >
                    @error('optiond.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="regular-form-1" class="form-label">Select Correct Answer For Question {{ $value }}</label>
                    <select wire:model.blur="answer.{{ $value }}"  class="form-control">
                        <option value="">---select----</option>
                        <option value="0">option a</option>
                        <option value="1">option b</option>
                        <option value="2">option c</option>
                        <option value="3">option d</option>
                    </select>
                    @error('answer.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                @endforeach

            </div>

        </div>

        <div class="mt-3">

            <button id="addbtn" class="btn btn-primary mt-5" wire:click.prevent="add({{$mn}})">Add Another Question
                <div wire:loading wire:target="add" class="loader-3 center"><span></span></div>
            </button>

            <button id="submit" class="btn btn-primary mt-5">{{ $old_question ? 'Update': 'Create'}}
                <div wire:loading wire:target="create" wire:target="update" class="loader-3 center"><span></span></div>
        </button>
        </div>
    </form>
</div>

