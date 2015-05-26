@extends('site1ru/header')

@section('content')
    
    

    <section class="appointment-sec text-center">
        <div class="container">
            <h1>Записаться на приём к специалисту</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            <div class="row">
            <div class="col-md-6">
            	<figure><img src="/site1.ru/images/appointment-img.jpg" alt="image" title="Appointment image" class="img-responsive lady1"></figure>
            </div>
            <div class="col-md-6">
                <div class="appointment-form clearfix">
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                    <input type="email" placeholder="Email Address">
                    <input type="text" placeholder="Phone No">
                    <input type="text" id="datepicker" placeholder="Appointment Date">
                    <select>
                    	<option>Male</option>
                    	<option>Female</option>
                    	<option>Child</option>
                    </select>
                    <textarea placeholder="Message"></textarea>
                    <input type="submit" value="submit" class="btn btn-default btn-rounded">
                </div>
            </div>
            </div>
        </div>
    </section>
    
    
    
    <section class="after-booking-sec text-center">
        <div class="container">
        	<h1>After Booking</h1>
            <p class="lead">Hi fill in the details and submit the form. We will contact you via phone or email and fix a time schedule. These are the thing you need to carry with you when you come in for the appointment wit the doctor.</p>
            <ul class="medicom-feature-list list-inline text-left">
            	<li><i class="fa fa-check medicom-check"></i>We offer a no obligation a free initial consultation.</li>
                <li><i class="fa fa-check medicom-check"></i>Enlisted Previous Numbers</li>
                <li><i class="fa fa-check medicom-check"></i>Previous Medical History</li>
                <li><i class="fa fa-check medicom-check"></i>Make sure you are feeling good</li>
                <li><i class="fa fa-check medicom-check"></i>Uncover many web sites still in their infancy.</li>
                <li><i class="fa fa-check medicom-check"></i>Uncover many web sites still in their infancy Various versions.</li>
                <li><i class="fa fa-check medicom-check"></i>you need to be sure there isn't anything embarrassing.</li>
                <li><i class="fa fa-check medicom-check"></i>you need to be sure there isn't anything embarrassing.</li>
            </ul>
        </div>
    </section>
    
    @endsection