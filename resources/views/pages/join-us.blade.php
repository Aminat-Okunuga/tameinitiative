@extends('layouts.app_other')

@section('content')
<div id="joinUs">
    <!--Sponsors Section Two-->
    <section class="clients-section-two" style="background-image:url({{asset('assets')}}/images/background/2.jpg)">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Donners Section-->
                <div class="donners-column col-md-6 col-sm-12 col-xs-12">
                    <!--Sec Title-->
                    <div class="sec-title light">
                        <h2>Our Donners</h2>
                    </div>
                    <div class="text">Tell the sponsor about how your company will help them <br> accomplish their goals and visions.</div>
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-md-6 col-sm-6 col-xs-12">
                            <div class="image">
                                <a href="#"><img src="{{asset('assets')}}/images/clients/5.png" alt="" /></a>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-md-6 col-sm-6 col-xs-12">
                            <div class="image">
                                <a href="#"><img src="{{asset('assets')}}/images/clients/6.png" alt="" /></a>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-md-6 col-sm-6 col-xs-12">
                            <div class="image">
                                <a href="#"><img src="{{asset('assets')}}/images/clients/7.png" alt="" /></a>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-md-6 col-sm-6 col-xs-12">
                            <div class="image">
                                <a href="#"><img src="{{asset('assets')}}/images/clients/8.png" alt="" /></a>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-md-6 col-sm-6 col-xs-12">
                            <div class="image">
                                <a href="#"><img src="{{asset('assets')}}/images/clients/9.png" alt="" /></a>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-md-6 col-sm-6 col-xs-12">
                            <div class="image">
                                <a href="#"><img src="{{asset('assets')}}/images/clients/10.png" alt="" /></a>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Form Section-->
                <div class="form-column col-md-6 col-sm-12 col-xs-12">
                    <!--Sec Title-->
                    <div class="sec-title light">
                        <h2>Join us now</h2>
                    </div>

                    <!-- Default Form -->
                    <div class="default-form style-two">
                        <!--Comment Form-->
                        <form @submit.prevent="requestJoinUs">
                            <div class="row clearfix">
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" v-model="form.name" name="name" placeholder="Name" required>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" v-model="form.email" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" v-model="form.phone" name="phone" placeholder="Phone" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="address" v-model="form.address" name="address" placeholder="Address"></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group text-right">
                                    <div v-if="alert" class="section">
                                        <div class="col-md-12 ph10">
                                            <span :style="alertStyle">@{{alertMessage}}</span>
                                        </div>
                                    </div>
                                    <button v-if="!sendNowEnable" class="theme-btn btn-style-two">Sending Request ....</button>
                                    <button v-if="sendNowEnable" class="theme-btn btn-style-two" type="submit">Send Now</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!--End Default Form -->

                </div>

            </div>
        </div>
    </section>
    <!--End Sponsors Section-->


    <!--Subscribe Section Two-->
    <section class="subscribe-section-two">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Subscribe Box-->
                <div class="subscribe-box col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-e-mail-envelope"></span>
                        </div>
                        <div class="text">Subscribe now and receive weekly newsletter with new <br> events, interesting charity activities.</div>

                        <!-- Subscribe Email -->
                        <div class="subscribe-email">
                            <form>
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Email Address" required>
                                    <button type=""><span class="icon fa fa-arrow-circle-o-right"></span></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <!--Donate Info Box-->
                <div class="donate-info-box col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-technology-1"></span>
                        </div>
                        <div class="text">Support OUR Today at <span>{{config('app.phone')}}</span> <br> or email <span>{{config('app.contact_email')}}</span></div>
                        <a href="/donate" class="theme-btn btn-style-two">Donate Today</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

@endsection

@section('requiredjs')
<script>
    new Vue({
        el: '#joinUs',
        data() {
            return {
                sendNowEnable: true,
                alert: false,
                alertStyle: '',
                alertMessage: '',
                form: {
                    name: '',
                    email: '',
                    phone: '',
                    address: '',
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
            requestJoinUs() {
                this.sendNowEnable = false;
                axios.post('send-join-us-mail', this.form, {
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
                setInterval(() => this.clearAlert(), 10000);
            }
        },
    })
</script>
@endsection