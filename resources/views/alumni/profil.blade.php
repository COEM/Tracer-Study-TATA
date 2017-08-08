@extends('layouts.alumni')
@section('body','profile-page')
@section('content')
<section id="content_wrapper">
    <section id="content" class="pn animated fadeIn">
        <div class="pv30 ph40 bg-light dark br-b br-grey posr">
            <div class="btn-group profile-settings-btn">
                <button type="button" class="btn btn-default dropdown-toggle pl20" data-toggle="dropdown">Akun
                    <span class="caret ml5"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a href="#">Edit Profil</a>
                    </li>
                    <li>
                        <a href="#">Ubah Password</a>
                    </li>
                </ul>
            </div>
            <div class="table-layout">
                <div class="w200 text-center pr30 hidden-xs">
                    <img src="/assets/img/avatars/profile_avatar.jpg" class="responsive">
                </div>
                <div class="va-t m30">

                    <h2 class=""> Michael Halls <small> {{Auth::user()->username}} </small></h2>
                    <p class="fs15 mb20">Lorem ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt</p>

                    <ul class="list-inline list-unstyled">
                        <li>
                            <a href="#" title="{{Auth::user()->email}}">
                                <span class="fa fa-envelope-square fs35 text-warning"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="p25 pt35">
            <div class="row">
                <div class="col-md-12">

                    <h4 class="page-header mtn br-light text-muted hidden">User Info</h4>
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-icon"><i class="fa fa-pencil"></i>
                            </span>
                            <span class="panel-title">Tentang saya</span>
                        </div>
                        <div class="panel-body pb5">
                            <h6 class="text-muted fs13">Experience</h6>

                            <h4>Facebook Internship</h4>
                            <p class="text-muted"> University of Missouri, Columbia
                                <br> Student Health Center, June 2010 - 2012
                            </p>

                            <hr class="short br-lighter">

                            <h6 class="text-muted fs13">Education</h6>

                            <h4>Bachelor of Science, PhD</h4>
                            <p class="text-muted"> University of Missouri, Columbia
                                <br> Student Health Center, June 2010 through Aug 2011
                            </p>

                            <hr class="short br-lighter">

                            <h6 class="text-muted fs13">Accomplishments</h6>

                            <h4>Successful Business</h4>
                            <p class="text-muted pb10"> University of Missouri, Columbia
                                <br> Student Health Center, June 2010 through Aug 2011
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</section>

@stop