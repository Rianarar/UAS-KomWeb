<!DOCTYPE html>
<html lang="en">
<x-headmain>Login Page</x-headmain>
<body>
    <x-navbar></x-navbar>
    <section class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>The most interesting food in the world</h6>
                    <h1>Discover the <span class="prime-color">flavors</span><br>  
                    <span class="style-change">of <span class="prime-color">Colner</span></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="welcome-area section-padding2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img">
                        <img src="{{ asset('images/welcome-bg.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h3><span class="style-change">Welcome</span> <br>To Colner</h3>
                        <p class="pt-3">Colner is here to help you live a healthy lifestyle effortlessly. We offer a variety of healthy meals specially designed to meet your nutritional needs.</p>
                        <p>Consult with our nutrition experts and get personalized meal recommendations. Order healthy meals directly from the Colner app and make healthy living simple and convenient!</p>
                        <a href="/consult-page" class="template-btn mt-3">Consult Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer></x-footer>

    <x-jscript></x-jscript>
</body>
</html>
