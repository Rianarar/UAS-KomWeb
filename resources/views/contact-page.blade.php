<!DOCTYPE html>
<html lang="en">
<x-headmain>Contact</x-headmain>
<body>
    <x-navbar></x-navbar>
    <section class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Ask us <span class="prime-color">Anything</span><br>  
                    <h6>Feel free to ask us!</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form section-padding3">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                <form action="{{ route('message.store') }}" method="POST">
                    @csrf
                    <div class="left">
                        <input type="text" name="name" placeholder="Enter your name" required>
                        <input type="email" name="email" placeholder="Enter email address" required>
                        <input type="text" name="subject" placeholder="Enter subject" required>
                    </div>
                    <div class="right">
                        <textarea name="message" cols="20" rows="7" placeholder="Enter Message" required></textarea>
                    </div>
                    <button type="submit" class="template-btn">Ask Now!</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>

    <x-jscript></x-jscript>
</body>
</html>
