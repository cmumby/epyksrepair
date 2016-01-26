@extends('layouts/main')
@section('form')
<div id="service-container" class="container row-fluid">
   <div class="span6">
      <img src="{{URL::asset('/images/repair/service-web.jpg')}}">
      <h2>Ready for Repair?</h2>
      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
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
            {{ Form::text('phone', Input::old('phone'), array('class'=>"input-block-level", "placeholder"=>"Your Phone Number")) }}
            {{ Form::label('Email') }}
            {{ Form::text('email', Input::old('name'), array('class'=>"input-block-level", "placeholder"=>"Your Email Address","required"=>"required")) }}
         </div>
         <div class="span7">
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
               </ul>
            </div>
            {{ Form::hidden('appliance',Input::old('appliance')) }}
            {{ Form::label('Model') }}
            {{ Form::text('model', Input::old('name'), array('class'=>"input-block-level", "placeholder"=>"Model Number","required"=>"required")) }}  
            {{ Form::label('Make/Brand') }}
            <div class="dropdown appliance-dropdown">
                  <button class="uneditable-input input-block-level btn btn-default dropdown-toggle appliance-toggle" type="button" data-toggle="dropdown">Choose an Appliance
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                     <li><a href="#">Stove/Oven</a></li>
                     <li><a href="#">Refridgerator</a></li>
                     <li><a href="#">Microwave</a></li>
                     <li><a href="#">Washer/Dryer</a></li>
                     <li><a href="#">Dishwasher</a></li>
                  </ul>
            </div>
            {{ Form::hidden('appliance',Input::old('brand')) }}
         </div>
         <div class="span12 appliance-message">
            {{ Form::label('Serial') }}
            {{ Form::text('serial', Input::old('name'), array('class'=>"input-block-level", "placeholder"=>"Serial Number",)) }}
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