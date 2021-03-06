@extends('layouts.appcompro')

@section('content')

<?php
$imgBanner = asset('assets/compro/assets/frontend_assets/images/banner/6. Accounting & advisory service.jpg');
?>
	<div class="space-top">
	</div>

	<section class="about flex-box"
		style="background:url('{{$imgBanner}}'); background-size: cover; height: 500px;">
		<div class="boxes">
		<h1>@lang('main.serveaccount_title')</h1>
		</div>
	</section>
	<section  class="services-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="nav-services flex-box">
						<a href="{{ route('compro.servAuditAss') }}" >@lang('main.serveaccount_link1')</a>
						<a href="{{ route('compro.servTax') }}">@lang('main.serveaccount_link2')</a>
						<a href="{{ route('compro.servConsul') }}">@lang('main.serveaccount_link3')</a>
						<a href="{{ route('compro.servCapital') }}">@lang('main.serveaccount_link4')</a>
						<a href="{{ route('compro.servMA') }}">M & A</a>
						<a href="{{ route('compro.servAccount') }}" class="active">@lang('main.serveaccount_link5')</a>
						<a href="{{ route('compro.servTecho') }}">@lang('main.serveaccount_link6')</a>
						<a href="{{ route('compro.servFraud') }}">@lang('main.serveaccount_link7')</a>
						<a href="{{ route('compro.servEntrep') }}">@lang('main.serveaccount_link8') </a>
						<a href="{{ route('compro.servChina') }}">@lang('main.serveaccount_link9')</a>
						<a href="{{ route('compro.servJapan') }}">@lang('main.serveaccount_link10')</a>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-12">
							<p>@lang('main.serveaccount_subtitle1')</p>
							<p>@lang('main.serveaccount_subtitle2')</p>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<p>@lang('main.serveaccount_list_title1')</p>
							<ul>
								<li>@lang('main.serveaccount_list1')</li>
								<li>@lang('main.serveaccount_list2')</li>
								<li>@lang('main.serveaccount_list3')</li>
								<li>@lang('main.serveaccount_list4')</li>
								<li>@lang('main.serveaccount_list5')</li>
								<li>@lang('main.serveaccount_list6')</li>
								<li>@lang('main.serveaccount_list7')</li>
							</ul>
							<p>@lang('main.serveaccount_list_title2')</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
