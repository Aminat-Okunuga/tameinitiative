<?php
use App\Models\Team;

$teamMembers = (new Team())->getTeamMembers();
foreach ($teamMembers as $teamMember) {
    $teamMember = (object)$teamMember;
    ?>
    <div class="team-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="inner-box">
            <div class="image">
                <img src="{{asset('assets/images/resource')}}/{{$teamMember->image_url}}" alt="" />
                <div class="content">
                    <h3>{{$teamMember->name}}</h3>
                    <div class="designation">{{$teamMember->role}}</div>
                </div>
                <div class="overlay-box">
                    <div class="overlay-content">
                        <h3><a href="/team/detail/{{$teamMember->slug}}">{{$teamMember->name}}</a></h3>
                        <div class="overlay-designation">{{$teamMember->role}}</div>
                        <a class="link" href="/team/detail/{{$teamMember->slug}}"><span class="link la la-link"></span></a>
                        <div class="lower-box">
                            <!-- <div class="text">We want to bring the <br> happiness for needy.</div> -->
                            <ul class="social-icon-one">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                <li><a href="#"><span class="fa fa-behance"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
