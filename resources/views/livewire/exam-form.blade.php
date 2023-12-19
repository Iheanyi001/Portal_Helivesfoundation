<div>
    <x-session-message/>
    <form id="input" wire:submit="{{ $exam ? 'update': 'create'}}" class="p-5">

        <div class="preview">
            <div>
                <label for="regular-form-1" class="form-label" >Title</label>
                <input wire:model.blur="title" id="title" type="text" class="form-control" placeholder="Enter exam title" >
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="regular-form-1" class="form-label">Time Limit</label>
                <input wire:model.blur="time" id="time" type="text" class="form-control" placeholder="Enter time limit for test in minute" >
                @error('time') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="regular-form-1" class="form-label">Tag</label>
                <input wire:model.blur="tag" id="tag" type="text" class="form-control" placeholder="Enter #tag which is used for searching" >
                @error('tag') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="regular-form-1" class="form-label">Description</label>
                <textarea wire:model.blur="description" id="description" class="form-control" placeholder="Write description here..." ></textarea>
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>


        </div>
        <div class="mt-3">

            <button class="btn btn-primary mt-5">{{ $exam ? 'Update': 'Create'}}
                <div wire:loading wire:target="create" wire:target="update" class="loader-3 center"><span></span></div>
            </button>
        </div>
    </form>
</div>
