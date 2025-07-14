<section class="wpo-contact-section section-padding wpo-testimonials-section" id="RSVP">
    <div class="container">
        <div class="wpo-contact-section-wrapper">
            <div class="wpo-contact-form-area">
                <div class="wpo-section-title-s2">
                    <div class="section-title-simg">
                        <img src="wedding/images/section-title2.png" alt="">
                    </div>
                    <h2>We’ve Reserved a Seat for You!</h2>
                    <div class="mb-4"> <span>Will you be joining us?</span></div>

                    <div class="section-title-img">
                        <div class="round-ball"></div>
                    </div>
                </div>
                <form wire:submit.prevent="submit" class="contact-validation-active">
                    <div>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        <input type="text" wire:model="name" class="form-control" placeholder="Name">
                    </div>
                    <div>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        <input type="email" wire:model="email" class="form-control" placeholder="Email">
                    </div>
                    <div>
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        <input type="text" wire:model="phone" class="form-control" placeholder="Phone Number">
                    </div>

                    <div class="submit-area mb-4">
                        <button type="submit" class="theme-btn-s3" wire:loading.attr="disabled">
                            <span wire:loading.remove>Send</span>
                            <span wire:loading>
                                <i class="fa fa-spinner fa-spin"></i> Sending...
                            </span>
                        </button>
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div>
                        <div class="mb-4 text-center" style="font-style: italic;"> <span><strong>Please RSVP at your earliest convenience so we can finalize the seating chart</strong></span></div>
                    </div>

                </form>
                <div class="border-style"></div>


            </div>
            <div class="vector-1">
                <img src="wedding/images/contact/1.png" alt="">
            </div>
            <div class="vector-2">
                <img src="wedding/images/contact/2.png" alt="">
            </div>
        </div>
    </div>
</section>
