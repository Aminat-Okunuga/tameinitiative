@extends('layouts.coming')

@section('content')
    <div  id="coming_soon">
        <div class="wm-main-content">
            <div class="wm-main-section wm-comingsoon-bg">
                <span class="wm-comingsoon-transparent-color"></span>
                <div class="container">
                    <div class="row">
                        <div class="wm-comingsoon-classic">
                            <div class="col-md-12">
                                <a class="wm-comingsoon-logo" href="#" style="font-size: 25px">TAME Initiative</a>
                                <div class="wm-comingsoon-text">
                                    <h2>We’re Coming Soon</h2>
                                    <p>
                                        We are working very hard to add new features & improve the usability of our site. We are coming back real soon with our brand new website.
                                    </p>
                                    <p>
                                        <span v-if="alertMessage" style="color: green">Email Added Successfully</span>
                                    </p>
                                    <form @submit.prevent="addNotifyMeEmail">

                                        <input placeholder="Email Address" v-model="form.email" type="text" onfocus="if(this.value =='Your Email Address') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Your Email Address'; }" required>
                                        <label><input type="submit" value="Notice Me"></label>
                                    </form>
                                </div>
                                <div class="wm-comingsoon-countdown" id="wm-countdown"></div>
                                <div class="wm-social-icon">
                                    <ul>
                                        <li><a class="fa fa-facebook-square" href="#"></a></li>
                                        <li><a class="fa fa-twitter-square" href="#"></a></li>
                                        <li><a class="fa fa-soundcloud" href="#"></a></li>
                                        <li><a class="fa fa-spotify" href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="wm-comingsoon-copyright">
                                    <p>
                                        © 2019 TAMEInitiative, All Right Reserved - by
                                        <a href="http://devchuksemeka.com" target="_blank">DevChuksEmeka</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
        </div>
    </div>

@endsection
@section('requiredjs')
    <script>
        new Vue({
            el: '#coming_soon',
            data() {
                return {
                    sendNowEnable: true,
                    alert: false,
                    alertStyle: '',
                    alertMessage: '',
                    form: {
                        email: '',
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
                addNotifyMeEmail() {
                    this.sendNowEnable = false;
                    axios.post('/notify-me', this.form, {
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                        .then(res => {
                            this.sendNowEnable = true;
                            if (res.data.status) {
                                this.alert = true;
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
