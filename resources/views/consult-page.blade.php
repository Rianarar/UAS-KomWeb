<!DOCTYPE html>
<html lang="en">
<x-headmain>Consult</x-headmain>
<body>
    <x-navbar></x-navbar>
    <section class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><span class="prime-color">Consul</span>tation<br>  
                    <h6>Get expert advice tailored to your health and nutrition needs. Our consultations are designed to help you make informed choices and achieve your wellness goals.</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="table-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Book Your <span>Consultation</span></h3>
                        <p><i>Get personalized advice on healthy eating, meal planning, and nutrition from our experts. Schedule your consultation today!</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{ route('consultation.book') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></i></span>
                            </div>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></i></span>
                            </div>
                            <input type="date" name="consultation_date" placeholder="Enter date">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></i></span>
                            </div>
                            <input type="time" name="consultation_time" placeholder="Enter time">
                        </div>
                        <div class="table-btn text-center">
                            <button type="submit" class="template-btn mt-3">Book Consultation</button>
                        </div>
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
                    </form>
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>

    <x-jscript></x-jscript>
</body>
</html>
