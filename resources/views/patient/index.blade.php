@include('patient.css')

<!-- Back to top button -->
<!-- <div class="back-to-top"></div> -->

@include('patient.header')

@if(session()->has('message'))

<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
    <strong>{{session()->get('message')}}!</strong>
</div>

@endif


<div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <span class="subhead">Let's make your life happier</span>
            <h1 class="display-4">Healthy Living</h1>
            <a href="#" class="btn btn-primary">Let's Consult</a>
        </div>
    </div>
</div>

@include('patient.backcover')

@include('patient.doctors')

@include('patient.latestnews')

@include('patient.appointment')

@include('patient.footer')

@include('patient.script')