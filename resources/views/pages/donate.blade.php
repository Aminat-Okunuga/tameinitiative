@extends('layouts.app_other')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets')}}/images/background/banner-4.jpg);">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title -->
            <div class="title-column col-md-6 col-sm-8 col-xs-12">
                <h1>Donate</h1>
            </div>
            <!--Bread Crumb -->
            <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Donate</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Donate Section-->
<section class="donate-now">
    <div class="auto-container">
        <div class="default-form">
            <form method="post" action="#">
                <div class="row clearfix">

                    <!--Left Column-->
                    <div class="left-column col-md-6 col-sm-12 col-xs-12">
                        <div class="default-title">
                            <h3>DONATION DETAILS</h3>
                        </div>
                        <div class="row clearfix">

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">How much would you like to donate?</div>
                                <div class="select-amount clearfix">
                                    <div class="select-box"><input type="radio" name="payment-group" id="radio-one"><label for="radio-one">$10</label></div>
                                    <div class="select-box"><input type="radio" name="payment-group" id="radio-two"><label for="radio-two">$20</label></div>
                                    <div class="select-box"><input type="radio" name="payment-group" id="radio-three" checked><label for="radio-three">$50</label></div>
                                    <div class="select-box"><input type="radio" name="payment-group" id="radio-four"><label for="radio-four">$100</label></div>
                                    <div class="input-box"><input type="text" name="other-payment" value="" placeholder="Enter Your Amount"></div>
                                </div>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Would you like to make a regular donation?</div>
                                <select class="">
                                    <option>One Time</option>
                                    <option>Two Times</option>
                                    <option>Three Times</option>
                                    <option>Four Times</option>
                                    <option>Five Times</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Card Number</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">MM/YY</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">CVC</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>

                        </div>

                    </div>

                    <!--Right Column-->
                    <div class="right-column col-md-6 col-sm-12 col-xs-12">
                        <div class="default-title">
                            <h3>DONOR DETAILS</h3>
                        </div>
                        <div class="row clearfix">

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">First Name *</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Last Name</div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Email *</div>
                                <input type="email" name="field-name" value="" placeholder="" required>
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Phone</div>
                                <input type="email" name="field-name" value="" placeholder="">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Address</div>
                                <textarea name="field-name" placeholder=""></textarea>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="theme-btn btn-style-one">Submit Donation</button>
                            </div>

                        </div>

                    </div>

                </div>
            </form>

        </div>
    </div>
</section>
<!--End Donate Section-->
@endsection