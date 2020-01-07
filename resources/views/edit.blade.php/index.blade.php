@extends('livreur.layout')
@section('content') 

<h1></h1><br>




<h1></h1><br>



<h1></h1><br>

<h1></h1><br>

<h1></h1><br>




<h1></h1><br>



<h1></h1><br>

<h1></h1><br>


<h1></h1><br>




<h1></h1><br>



<h1></h1><br>

<h1></h1><br>

<h1></h1><br>




<h1></h1><br>



<h1></h1><br>

<h1></h1><br>

<div class="container">
       <div><h1>{{__('Enregistrement d\'un Client')}}</h1></div>
       <div class="container">
       <form action="{{route('client.store')}}" method="post">
       @csrf
            <div>
              <div class="col-md-6">
                <div class="form-group">      
                  <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="numero_telephone" name="numero_telephone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enregistrer</button>
              </div>
            </div>

            @if($errors->any())
   @foreach($errors->all() as $error)
       <div class="alert alert-danger">{{$error}}</div>
   @endforeach
@endif


          </form>



          @endsection