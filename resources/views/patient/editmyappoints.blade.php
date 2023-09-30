@include('patient.css')


<!-- Back to top button -->
<div class="back-to-top"></div>

@include('patient.header')

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Edit Appointment</h1>

        <form class="main-form" action="{{url('updatingappoints', $identity->id)}}" method="post">
            @csrf
            <div class="row mt-5">

                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" class="form-control" name="name" placeholder="required" value="{{$identity->name}}">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" class="form-control" name="email" placeholder="required" value="{{$identity->email}}">
                </div>


                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" class="form-control" name="date" value="{{$identity->date}}">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor" id="doctor" class="custom-select">
                        <option style="color: black;">Select Doctor Below</option>


                        <option value="{{$identity -> doctor}}">{{$identity->doctor}}</option>


                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="tel" class="form-control" name="phone" placeholder="required" value="{{$identity->phone}}">
                </div>

                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="required">{{$identity -> message}}</textarea>
                </div>

            </div>

            <button type="submit" style="background-color: black;" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>

        </form>
    </div>
</div> <!-- .page-section -->



@include('patient.footer')