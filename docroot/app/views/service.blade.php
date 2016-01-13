@extends('layouts/main')
@section('form')
<div id="service-container" class="container row-fluid">
   <div class="span6">
      <img src="{{URL::asset('/images/repair/service-web.jpg')}}">
      <h2>Ready for Repair?</h2>
      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
   </div>
   <div class="span6">
      <h2 class="form-title">Find the best Tech for your Appliance!</h2>
      <div class="status alert alert-success" style="display: none"></div>
      {{ Form::open(array('url' => 'technicians', 'class'=> 'contact-form', 'name'=>'contact-form','id'=>'main-contact-form')) }}
      <div class="row-fluid">
         <div class="span5">
            {{ Form::label('Full Name') }}
            {{ Form::text('name', Input::old('name'), array('class'=>"input-block-level", "placeholder"=>"Your Full Name","required"=>"required")) }}
            {{ Form::label('Phone') }}
            {{ Form::text('phone', Input::old('phone'), array('class'=>"input-block-level", "placeholder"=>"Your Phone Number","required"=>"required")) }}
            {{ Form::label('Appliance') }}
            <div class="dropdown appliance-dropdown">
               <button class="uneditable-input input-block-level btn btn-default dropdown-toggle appliance-toggle" type="button" data-toggle="dropdown">Choose an Appliance
               <span class="caret"></span></button>
               <ul class="dropdown-menu">
                  <li><a href="#">Stove/Oven</a></li>
                  <li><a href="#">Refridgerator</a></li>
                  <li><a href="#">Microwave</a></li>
                  <li><a href="#">Washer/Dryer</a></li>
                  <li><a href="#">Dishwasher</a></li>
                  <li class="disabled"><a href="#">CSS</a></li>
                  <li><a href="#">JavaScript</a></li>
                  <li class="divider"></li>
                  <li><a href="#">About Us</a></li>
               </ul>
            </div>
            {{ Form::hidden('appliance',Input::old('appliance')) }}
            <label>Last Name</label>
            <input type="text" class="input-block-level" required="required" placeholder="Your Last Name">
            <label>Email Address</label>
            <input type="text" class="input-block-level" required="required" placeholder="Your email address">
         </div>
         <div class="span7">
            <label>Message</label>
            <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
         </div>
      </div>
      <button type="submit" class="btn btn-primary btn-large pull-right">Find A Tech</button>
      <p> </p>
      {{Form::close()}}
   </div>
</div>
@stop