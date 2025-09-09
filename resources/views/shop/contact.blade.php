<div class="contact-form">
        <form id="contact" action="{{ route('contact.submit') }}" method="post">
            @csrf
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-6">
                    <fieldset>
                        <input name="name" type="text" id="name" placeholder="Your Name" required="" value="{{ old('name') }}">
                    </fieldset>
                </div>
                <div class="col-lg-6">
                    <fieldset>
                        <input name="email" type="text" id="email" placeholder="Your Email" required="" value="{{ old('email') }}">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                        <textarea name="message" rows="6" id="message" placeholder="Your Message" required="">{{ old('message') }}</textarea>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                        <button type="submit" id="form-submit" class="main-border-button">Send Message</button>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>
