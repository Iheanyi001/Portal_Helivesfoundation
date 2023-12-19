<div class="contact-form">
    <h3 class="user-title"> Interest Form</h3>
    <form wire:submit="save" id="contactForm">
        <div class="row">

            <div class="col-lg-12 ">
                <div class="form-group">
                    <input type="text" wire:model="full_name" placeholder="Full name" required class="form-control">
                    @error('full_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

            </div>
            <div class="col-lg-12 ">
                <div class="form-group">
                    <input type="email" wire:model.blur="email" required class="form-control" placeholder="Email Address">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="form-group">
                    <input type="tel" id="phone" wire:model.blur="phone" class="form-control" placeholder="Phone Number" required>
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-lg-12 ">
                <div class="form-group">
                    <input type="number" id="age" wire:model.blur="age" class="form-control" placeholder="Age" required>
                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="form-group">
                    <input type="text" id="education" wire:model.blur="education" class="form-control" placeholder="Educational Background" required>
                    @error('education') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="form-group">
                    <input type="text" id="occupation" wire:model.blur="occupation" class="form-control" placeholder="Current Occupation">
                    @error('occupation') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="form-group">
                    <textarea id="interest" wire:model.blur="interest" rows="4" class="form-control" required placeholder="Why are you interested in joining this ICT empowerment program?"></textarea>
                    @error('interest') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="form-group">
                    <textarea id="skills" wire:model.blur="skills" rows="4" required class="form-control" placeholder="What specific ICT skills or knowledge are you hoping to gain from this program?"></textarea>
                    @error('skills') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="form-group">
                    <textarea id="experience" wire:model.blur="experience" rows="4" class="form-control" placeholder="Have you participated in similar programs before? If yes, please provide details"></textarea>
                    @error('experience') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="form-group">
                    <textarea id="applySkills" wire:model.blur="apply_skills" rows="4" required class="form-control" placeholder="How would you apply the skills/knowledge gained from this program in your personal/professional life?"></textarea>
                    @error('apply_skills') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="form-group">
                    <textarea id="ictExperience" wire:model.blur="ict_experience" rows="4" class="form-control" placeholder="Do you have any prior experience or background in the field of ICT?"></textarea>
                    @error('ict_experience') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>


            <div class="col-lg-12 ">
                <div class="form-group">
                    <textarea id="howYouHeard" wire:model.blur="how_you_heard" rows="4" required class="form-control" placeholder="How did you hear about this ICT empowerment program?"></textarea>
                    @error('how_you_heard') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <button type="submit" class="default-btn">
                Submit
                <div wire:loading>
                    <div class="loader"></div>
                </div>
                </button>
            </div>
        </div>
    </form>
</div>
