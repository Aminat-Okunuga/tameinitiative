@extends('layouts.app_other')

@section('content')
<!--Page Title-->
<div id="contact">
    <section class="page-title" style="background-image:url({{asset('assets')}}/images/background/banner-4.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title -->
                <div class="title-column col-md-6 col-sm-8 col-xs-12">
                    <h1>Contact Us</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Info Section-->
    <section class="info-contact-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="icon-box">
                            <span class="icon flaticon-world"></span>
                        </div>
                        <h3>Address</h3>
                        <div class="text">{{config('app.address_name')}}<br> {{config('app.address_area')}}, {{config('app.address_town')}} <br>
                            {{config('app.address_state')}}, {{config('app.address_country')}}</div>
                    </div>
                </div>

                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="icon-box">
                            <span class="icon flaticon-technology-1"></span>
                        </div>
                        <h3>Phone</h3>
                        <div class="text">You call us on phone number. <br> {{config('app.phone')}}</div>
                    </div>
                </div>

                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="icon-box">
                            <span class="icon flaticon-symbol"></span>
                        </div>
                        <h3>Email</h3>
                        <div class="text">{{config('app.contact_email')}}</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Contact Form Section-->
    <div class="contact-form-section">
        <div class="auto-container">
            <h2>Get in Touch</h2>
            <div class="text">if you want to get more info, ping us now.</div>

            <!--Contact Form-->

            <div class="contact-form">
                <form @submit.prevent="sendContactUsEmail">
                    <div class="row clearfix">
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="text" v-model="form.name" name="name" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="email" v-model="form.email" name="email" value="" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                            <input type="text" v-model="form.subject" name="subject" value="" placeholder="Subject" required>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea name="message" v-model="form.message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 text-center">
                            <div v-if="alert" class="section">
                                <div class="col-md-12 ph10">
                                    <span :style="alertStyle">@{{alertMessage}}</span>
                                </div>
                            </div>
                            <button v-if="sendNowEnable" type="submit" class="theme-btn btn-style-two">Send Now</button>
                            <button v-if="!sendNowEnable" class="theme-btn btn-style-two">Sending Email....</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!--Clients Section-->
@include('includes.clients')
@endsection

@section('requiredjs')
<script>
    new Vue({
        el: '#contact',
        data() {
            return {
                sendNowEnable: true,
                alert: false,
                alertStyle: '',
                alertMessage: '',
                form: {
                    name: '',
                    email: '',
                    subject: '',
                    message: '',
                }
            }
        },
        methods: {
            resetContactForm() {
                this.form = {};
            },
            clearAlert() {
                this.alert = false;
                this.alertStyle = '';
                this.alertMessage = '';
            },
            sendContactUsEmail() {
                this.sendNowEnable = false;
                axios.post('send-contact-us-mail', this.form, {
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => {
                        this.sendNowEnable = true;
                        if (res.data.status) {
                            this.alert = true;
                            this.alertStyle = 'color:green';
                            this.alertMessage = res.data.message;
                            this.resetContactForm()

                        } else {
                            this.alert = true;
                            this.alertStyle = 'color:red';
                            this.alertMessage = res.data.error;
                        }
                    });
                setInterval(() => this.clearAlert(),10000);
            }
        },
    })
</script>
@endsection
