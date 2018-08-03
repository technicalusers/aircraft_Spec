@extends('layouts.app')
@section('content')


{{--<div class="container-fluid">--}}


    {{--<span class="d-block p-2 bg-white text-#ECE7E7">--}}
  {{--<!-- <div class="row"> -->--}}
    {{--<!-- <div class="col-md-10"> -->--}}
      {{--<div class="row">--}}
        {{--<div class="col-md-1">--}}
      {{--<img src="https://thumbs.dreamstime.com/b/aviation-logo-15466555.jpg" width="90" height="40">--}}
{{--</div>--}}
  {{--<div class="col">--}}
{{--<h1 >AIMS</h1>--}}
{{--</div>--}}
{{--<div class="col-md-2">--}}
  {{--<div class="btn" >--}}
  {{--<button align="right" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >--}}
    {{--<img src="https://image.flaticon.com/icons/svg/17/17797.svg" class="rounded-circle" width="40" height="40">--}}

  {{--</button>--}}

  {{--<!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> -->--}}


  {{--<div class="dropdown-menu dropdown-menu-right">--}}
    {{--<a class="dropdown-item" href="http://127.0.0.1:8000/logout">logout</a>--}}
    {{--<!-- <button class="dropdown-item" type="button">Settings</button> -->--}}
  {{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--</span>--}}
{{--</div><br>--}}
{{--<div class="container" >--}}
  <!-- <button type="button" class="btn btn-secondary btn-md btn-block"></button> -->
  <!-- Default dropright button -->
{{--<div class="container">--}}

  {{--<!-- </div> -->--}}
    {{--@foreach($aircrafts as $aircraft)--}}
      {{--<div class="d-block p-2 bg-white text-#ECE7E7 border-left=padding 2px">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-1">--}}
          {{--<img src={{ asset($aircraft->cover_image)}} width=70 height=70>--}}
        {{--</div>--}}
        {{--<div class="col-md-11">--}}
            {{--<p>--}}
              {{--<b>--}}
              {{--{{ $aircraft->msn}}<br>--}}
              {{--{{ $aircraft->aircraft_type}}<br>--}}
              {{--{{ $aircraft->aircraft_family}}--}}
            {{--</b>--}}
          {{--</p>--}}
        {{--</div>--}}
      {{--</div>--}}

    {{--</div>--}}
    {{--<br>--}}
{{--@endforeach--}}



{{--</div>--}}
  {{--<!-- Split dropright button -->--}}



{{--</div>--}}


<section class="projects-index">
    <div class="container">
        <div class="row">
            <div class="col-md-12 project-list-grid">
                @foreach($aircrafts as $aircraft)

                <a href="javascript:void(0)" class="form-single">
                    {{--<div title="" class="project-status-bar tool-tip draft" data-original-title="Draft"></div>--}}
                    <ul class="list-inline flex-centered sparta-listing-block row ">
                        <li class="col-md-3 col-xs-12 col-sm-12">
                            <div class="project-name-block">
                                <div><img src="{{ $aircraft->cover_image }}" alt="" class="client-logo"></div>
                                <div class="name-wrapper">
                                    <h6>Aircraft Type</h6>
                                    <p title="Engine shop visit management including table inspection">
                                        {{ $aircraft->aircraft_type }}
                                    </p>
                                    {{--<div class="status-block">--}}
                                    {{--<p title="" class="tool-tip" data-original-title="33 %"><span style="width: 33.3333%; border-top-right-radius: 3px; border-bottom-right-radius: 3px;"></span></p>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </li>
                        <li class="col-md-2 col-xs-12 col-sm-12">
                            <div class="project-name-block">
                                <div class="name-wrapper">
                                    <h6>MSN</h6>
                                    <p title="Engine shop visit management including table inspection">
                                        {{ $aircraft->msn }}
                                    </p>
                                    {{--<div class="status-block">--}}
                                        {{--<p title="" class="tool-tip" data-original-title="33 %"><span style="width: 33.3333%; border-top-right-radius: 3px; border-bottom-right-radius: 3px;"></span></p>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3 col-xs-12 col-sm-12">
                            <div class="operator-block padding20-xs padding20-sm">
                                <h6>Aircraft Family</h6>
                                <p>
                                    {{ $aircraft->aircraft_family }}
                                </p>
                            </div>
                        </li>
                        <li class="col-md-1 col-xs-12 col-sm-12">
                            <div class="operator-block padding20-xs padding20-sm">
                                <h6>CSN</h6>
                                <p>
                                    {{ $aircraft->csn }}
                                </p>
                            </div>
                        </li>
                        <li class="col-md-1 col-xs-12 col-sm-12">
                            <div class="operator-block padding20-xs padding20-sm">
                                <h6>TSN</h6>
                                <p>
                                    {{ $aircraft->tsn }}
                                </p>
                            </div>
                        </li>
                        <li class="col-md-2 col-xs-12 col-sm-12">
                            <div class="operator-block padding20-xs padding20-sm">
                                <h6>LAST ACTIVITY</h6>
                                <p>
                                    {{ date('D M Y',strtotime($aircraft->updated_at)) }}
                                </p>
                            </div>
                        </li>
                        {{--<li class="col-md-2 col-xs-6 col-sm-12">--}}
                            {{--<div class="operator-block padding20-xs padding20-sm">--}}
                                {{--<h6>OPERATOR</h6>--}}
                                {{--<p title="JetLite">--}}
                                    {{--JetLite--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="col-md-3 col-xs-12 col-sm-12">--}}
                            {{--<div class="flex-centered project-date-block">--}}
                                {{--<div class="project-details">--}}
                                    {{--<h6>--}}
                                        {{--START DATE--}}
                                    {{--</h6>--}}
                                    {{--<p>09 Jul 2018</p>--}}
                                {{--</div>--}}
                                {{--<div>--}}
                                    {{--<h6>END DATE</h6>--}}
                                    {{--<p>28 Sep 2018</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="col-md-2 col-xs-12">--}}
                            {{--<div data-id="rVmbX" data-toggle="modal" data-target="#userViewModal" class="project-name-block user-block">--}}
                                {{--<div class="lead-by"><img src="https://images.acumenaviation.ie/storage/joe-padathil-jacob.png" alt="" class="client-logo"></div>--}}
                                {{--<div>--}}
                                    {{--<h6>Lead By</h6>--}}
                                    {{--<p>--}}
                                        {{--Joe Jacob--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    </ul>
                </a>
                @endforeach
            </div>
        </div>
    </div>

</section>


@endsection
