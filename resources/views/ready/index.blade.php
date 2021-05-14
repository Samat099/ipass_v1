<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="{{ asset('js/app.js') }}" defer></script>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<body>

	<div class="all-container">
		<div class="main-container">


			@section('header')
				<header>

					<div class="search-box">
						<form action="{{ route('search') }}" method="GET">
							{{-- @csrf --}}
							<button class="btn_search" type="submit">
									{{-- <a class="link_search" href="{{ route('search') }}"> --}}
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20" height="20" viewBox="0 0 30.239 30.239" style="enable-background:new 0 0 30.239 30.239;" xml:space="preserve">
											<g>
												<path d="M20.194,3.46c-4.613-4.613-12.121-4.613-16.734,0c-4.612,4.614-4.612,12.121,0,16.735   c4.108,4.107,10.506,4.547,15.116,1.34c0.097,0.459,0.319,0.897,0.676,1.254l6.718,6.718c0.979,0.977,2.561,0.977,3.535,0   c0.978-0.978,0.978-2.56,0-3.535l-6.718-6.72c-0.355-0.354-0.794-0.577-1.253-0.674C24.743,13.967,24.303,7.57,20.194,3.46z    M18.073,18.074c-3.444,3.444-9.049,3.444-12.492,0c-3.442-3.444-3.442-9.048,0-12.492c3.443-3.443,9.048-3.443,12.492,0   C21.517,9.026,21.517,14.63,18.073,18.074z"/>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
										</svg>
									{{-- </a> --}}
							</button>

							<input required class="input_search" type="text" placeholder="Поиск..." name="search">
						</form>
					</div>

					<div class="utilits">
						@if ( Request::is('group*') )
						<div></div>
					@elseif ( Request::is('selected') )
						@include('ready.print')
					@elseif ( Request::is('workers') )
						<div></div>
					@elseif ( Request::is('search') )
						<div></div>
					@endif
					</div>

                    <nav class="header-nav">
						<ul class="nav-list">
							<li>
								<a title="Список групп" class="nav-link" href="/group">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"   id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
										<g>
										<g>
											<path  d="M489.739,0H22.261C9.984,0,0,9.984,0,22.261v467.478C0,502.016,9.984,512,22.25,512h467.489    c12.277,0,22.261-9.984,22.261-22.261V22.261C512,9.984,502.016,0,489.739,0z M178.087,356.174V244.87h155.826v111.304H178.087z     M333.913,378.435v111.304H178.087V378.435H333.913z M333.913,111.304v111.304H178.087V111.304H333.913z M489.739,111.304v111.304    H356.174V111.304H489.739z M155.826,222.609H22.261V111.304h133.565V222.609z M22.261,244.87h133.565v111.304H22.261V244.87z     M356.174,244.87h133.565v111.304H356.174V244.87z M489.739,22.261v66.783H22.261V22.261H489.739z M22.261,378.435h133.565    v111.304H22.261V378.435z M356.174,489.739V378.435h133.565v111.304H356.174z"/>
										</g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
									</svg>
								</a>
							</li>
					  		<li>
								<a  title="Список для печати"class="nav-link"href="{{ route('selected') }}">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4zm323-128.4l-27.8-28.1c-4.6-4.7-12.1-4.7-16.8-.1l-104.8 104-45.5-45.8c-4.6-4.7-12.1-4.7-16.8-.1l-28.1 27.9c-4.7 4.6-4.7 12.1-.1 16.8l81.7 82.3c4.6 4.7 12.1 4.7 16.8.1l141.3-140.2c4.6-4.7 4.7-12.2.1-16.8z"/></svg></a>
							</li>
							<li>
								<a title="Список сотрудников" class="nav-link" href="{{ route('workers') }}">
									<svg xmlns="http://www.w3.org/2000/svg" version="1.0"  viewBox="0 0 769 980" preserveAspectRatio="xMidYMid meet">
										<g>
										<path d="M277.5 979 c-147.3 -6.1 -251.4 -22.9 -273.6 -44 -4.2 -4 -4.2 -4 -3.6 -26.7 1.1 -39.7 6.8 -72.1 18.9 -107.1 28.4 -82.4 89.4 -144.6 181.3 -185.3 14.5 -6.4 44.6 -17.9 46.8 -17.9 0.6 0 3.4 6 6.1 13.3 26.7 72.5 64.1 155.2 79.4 175.5 2.7 3.6 5.2 4.2 5.2 1.3 0 -1.1 2.7 -11.9 6 -24 7.5 -27.1 14.5 -56.7 16 -67 1.6 -10.7 0.6 -13.6 -9.5 -27.6 -10.5 -14.6 -12.8 -20.3 -12.3 -30.5 1.1 -25.1 28.9 -44.5 57.8 -40.2 17.2 2.5 36.4 15.3 41.6 27.7 3.6 8.8 1.2 19 -11 45.2 -3.6 7.9 -8.2 19.2 -10.2 25.3 -3.7 11 -3.7 11 11.3 52 15 41 15 41 58.3 -53.5 29.4 -64.1 44.1 -95.2 45.7 -96.5 14.4 -11.3 47.4 3.8 90 41.3 41.4 36.4 82.8 86.4 110.6 133.4 30.6 51.8 44.1 105.1 32.6 129.1 -3 6.2 -12.7 16.2 -21.1 21.8 -41.5 27.6 -131.2 45.2 -273.3 53.5 -23.4 1.4 -165.6 2 -193 0.9z"/>
										<path d="M373.5 586.3 c-17.5 -1.6 -44.1 -8 -61.9 -15 -30.3 -11.8 -71.9 -35.6 -87.9 -50.3 -11.7 -10.8 -22.7 -26.2 -32.1 -44.8 -9.8 -19.5 -20.5 -54 -25.2 -80.8 -1.7 -10.1 -1.7 -10.1 -6.3 -12.4 -13.6 -6.5 -30 -19.8 -37.6 -30.5 -6.5 -9 -8.7 -15.3 -9.2 -26.5 -0.8 -14.8 2.5 -26.1 10.3 -35.7 6.8 -8.3 18.9 -14.3 29 -14.3 3.7 0 4.4 -0.3 4.4 -2 0 -2 -0.7 -2 -28.5 -2 -28.5 0 -28.5 0 -28.5 -21 0 -21 0 -21 15.4 -21 15.3 0 15.3 0 15.9 -8.8 1.6 -21.8 8.7 -49.9 18.2 -72.4 21.3 -49.9 56.1 -89.2 103.9 -117.5 5 -2.9 9.3 -5.3 9.7 -5.3 0.5 0 0.9 9.5 1.1 21.1 0.3 21.1 0.3 21.1 4 24.5 3.8 3.4 3.8 3.4 21.8 3.4 18 0 18 0 21.8 -3.4 3.7 -3.4 3.7 -3.4 4.2 -34.8 0.5 -31.3 0.5 -31.3 11.5 -33.5 6.1 -1.3 14 -2.6 17.8 -2.9 6.7 -0.7 6.7 -0.7 6.7 75.2 0 70.3 0.1 76.2 1.8 79.3 3 6.1 6.6 7.1 24 7.1 17.3 0 21 -0.9 24.2 -6.2 2 -3.2 2 -4.8 2 -79.5 0 -76.3 0 -76.3 2.9 -76.3 3.1 0 17.9 2.4 25.3 4.1 4.7 1.1 4.7 1.1 5 31.7 0.4 40.9 -0.7 39.2 26.3 39.2 26 0 25.9 0.1 26.3 -29.3 0.4 -20.8 0.4 -20.8 8 -16.6 20.2 11 45.9 31 60.6 47.2 35.9 39.3 56.4 82.3 64 133.8 0.9 5.9 1.6 12.7 1.6 15.3 0 4.6 0 4.6 20.5 4.6 20.5 0 20.5 0 20.5 21 0 21 0 21 -30 21 -30 0 -30 0 -30 3.7 0 3.3 0.1 3.5 1.4 1.8 1.1 -1.6 2.2 -1.7 8.5 -1.2 21.9 1.8 36.4 20.3 36.3 46.5 -0.1 17 -5.9 29.3 -20.4 42.8 -6 5.6 -18.4 14.5 -22.1 16 -1.3 0.5 -1.7 1.9 -1.7 6.4 0 8.7 -1.8 25.2 -4 37.3 -7.9 42 -30.7 75.3 -73.9 108 -49 37 -94.4 54.3 -140.8 53.5 -5.9 -0.1 -12.6 -0.3 -14.8 -0.5z m36.7 -22.8 c35.4 -4.7 70 -20.7 106.8 -49.3 37.1 -28.9 55.1 -57 62.3 -96.6 1.9 -10.8 2.1 -15.7 2.2 -46.1 0 -18.7 -0.4 -48.7 -0.9 -66.7 -0.8 -32.8 -0.8 -32.8 -199.1 -32.8 -198.3 0 -198.3 0 -199 13.3 -0.8 15.1 0.8 54.5 3.1 75.2 4.5 42.3 13.4 77.1 26.5 104.4 15.2 31.8 28.9 45.4 66.7 66.8 46.9 26.5 91.1 37.2 131.4 31.8z m-250.4 -202.4 c1.1 -0.7 1.1 -4 -0.2 -19.2 -0.8 -10.1 -1.8 -25.8 -2.2 -34.9 -0.6 -16.4 -0.6 -16.4 -9.6 -7.2 -11.9 12.3 -14.3 17.4 -14.2 29.7 0.1 11.1 2.8 18.9 8.8 25.3 5.4 5.6 13.7 8.7 17.4 6.3z m458.7 -1.9 c8.3 -4.9 14.1 -18.9 13.3 -32.2 -0.6 -10.8 -3.6 -16.5 -15.4 -29.1 -5.3 -5.6 -10 -11.1 -10.5 -12.3 -0.6 -1.4 -0.7 0.2 -0.4 4.9 0.2 3.9 0.8 21.6 1.1 39.4 0.7 32.3 0.7 32.3 4.8 31.7 2.2 -0.4 5.4 -1.5 7.1 -2.4z"/>
										</g>
										<g>
											<path d="M744.1 797.2 c-32.3 -65.1 -100.9 -145.1 -156.4 -182.3 -13.7 -9.2 -20.7 -12.9 -30.9 -16.4 -4 -1.3 -6.5 -2.5 -5.5 -2.5 3.3 0 17.2 6 26.4 11.4 21.4 12.6 45.4 32.6 73.3 61.2 32.1 32.8 59.3 68 81.3 105.1 7.1 11.9 18.1 33.3 17.5 33.9 -0.2 0.2 -2.8 -4.5 -5.7 -10.4z"/>
										<path d="M23.5 789 c0.4 -1.4 3 -7.3 5.6 -13.1 25.6 -55.8 65.4 -99.6 122.2 -134.3 11.2 -6.9 38.7 -21.6 40.3 -21.6 0.5 0 -5.6 3.4 -13.6 7.6 -57.9 30.2 -100.4 67.7 -129.9 114.7 -6.5 10.2 -16.9 30.5 -21.6 41.7 -2.8 6.8 -4.3 9.2 -3 5z"/>
										<path d="M449 576.5 c24.9 -8.3 51.3 -22.7 77.5 -42.5 31.6 -23.9 50 -44.3 62.7 -70 6.6 -13.2 7.8 -14 1.8 -1.2 -8.5 18.1 -23.6 37.6 -42 53.9 -30 26.9 -67.8 50 -98.1 60.1 -7 2.3 -13.3 4.2 -14 4.2 -0.8 -0.1 4.7 -2.1 12.1 -4.5z"/>
										<path d="M279.5 556.7 c-17.2 -9 -39.1 -22.2 -47.7 -28.8 -11.8 -9.2 -23 -22 -31.8 -36.4 -4.6 -7.4 -15 -28.3 -15 -30 0 -0.5 3.1 5.3 6.9 13 10.9 22.1 23 38.5 36.7 49.7 9.9 8 32 21.7 51.8 31.9 9.4 4.9 16.7 8.9 16.1 8.9 -0.5 0 -8.2 -3.8 -17 -8.3z"/>
										<path d="M445 555.6 c0 -0.2 2.8 -1.3 6.3 -2.6 25.4 -9.1 63.4 -34.3 86.8 -57.5 12.5 -12.4 20.5 -22.8 27.6 -36.2 2.9 -5.4 5.3 -9.3 5.3 -8.8 0 2 -9.3 18.1 -14.8 25.9 -16.2 22.7 -52.5 51.9 -85.3 68.6 -13.2 6.7 -25.9 11.9 -25.9 10.6z"/>
										<path d="M285 536.2 c-34.9 -19.1 -49.2 -30.6 -62.2 -50.2 -5.2 -7.9 -14.8 -26 -14.8 -27.7 0 -0.5 2.9 4.7 6.4 11.4 16 30.9 28.7 42.5 71.3 65.8 7.6 4.1 13.3 7.5 12.8 7.5 -0.6 0 -6.6 -3.1 -13.5 -6.8z"/>
										<path d="M580 288 c0 -16 0 -16 -198.5 -16 -198.4 0 -198.4 0 -198.8 6.8 -0.3 6.7 -0.3 6.7 -0.5 -0.5 -0.2 -7.3 -0.2 -7.3 199.3 -7.3 199.5 0 199.5 0 199.5 16.5 0 9.1 -0.2 16.5 -0.5 16.5 -0.3 0 -0.5 -7.2 -0.5 -16z"/>
										<path d="M604.6 278.8 c-0.4 -3.1 -0.5 -6.1 -0.1 -6.7 0.4 -0.8 10.1 -1.1 30.1 -1.1 29.4 0 29.4 0 29.4 -20 0 -20 0 -20 -20.2 -20.3 -20.3 -0.2 -20.3 -0.2 0.5 -0.5 20.7 -0.2 20.7 -0.2 20.7 20.8 0 21 0 21 -30 21 -30 0 -30 0 -30 3.8 0.1 3 0.3 3.4 1.1 2 0.8 -1.4 2.2 -1.8 6.7 -1.6 5.7 0.2 5.7 0.2 0.7 0.5 -5.8 0.5 -7.2 1.5 -7.7 5.1 -0.3 1.8 -0.7 0.8 -1.2 -3z"/>
										<path d="M151.8 276.3 c4.4 -0.3 5.2 -0.7 5.2 -2.4 0 -1.8 -0.9 -1.9 -28.5 -1.9 -28.5 0 -28.5 0 -28.5 -21 0 -21 0 -21 15.8 -20.8 15.7 0.2 15.7 0.2 0.5 0.5 -15.3 0.4 -15.3 0.4 -15.3 20.3 0 20 0 20 28.5 20 28.5 0 28.5 0 28.5 3 0 3 0 3 -5.7 2.8 -5.8 -0.2 -5.8 -0.2 -0.5 -0.5z"/>
										<path d="M404.5 76 c0 -42.1 0.1 -59.3 0.2 -38.3 0.2 21.1 0.2 55.5 0 76.5 -0.1 21.1 -0.2 3.9 -0.2 -38.2z"/>
										<path d="M351.5 75.5 c0 -41.8 0.1 -58.8 0.2 -37.7 0.2 21.1 0.2 55.3 0 76 -0.1 20.7 -0.2 3.5 -0.2 -38.3z"/>
										<path d="M595 128.7 c-22.5 -41.4 -57.4 -76.8 -97.6 -98.8 -4.1 -2.2 -7.4 -4.3 -7.4 -4.6 0 -1 15.9 8.3 27.1 15.8 26.2 17.8 48.7 40.4 66.4 66.9 6.7 10.1 18 29.9 17.4 30.5 -0.2 0.2 -2.9 -4.2 -5.9 -9.8z"/>
										<path d="M161.5 124.5 c15.5 -29.7 46.1 -63.2 76.5 -83.6 8.1 -5.4 24.1 -14.9 25.2 -14.9 0.4 0 0.7 8.9 0.6 19.8 -0.2 19.7 -0.2 19.7 -0.8 0.4 -0.5 -19.2 -0.5 -19.2 -11.5 -12.7 -34.8 20.6 -64.6 50.2 -85 84.1 -8.4 14 -9.4 15.5 -5 6.9z"/>
										</g>
									</svg>
								</a>
					  		</li>
							<li>
								<form action="/getGroupInfo" method="POST">
									@csrf
									{{-- <button class="nav-link"title="Cинхранизация с 1С">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3.38 8A9.502 9.502 0 0112 2.5a9.502 9.502 0 019.215 7.182.75.75 0 101.456-.364C21.473 4.539 17.15 1 12 1a10.995 10.995 0 00-9.5 5.452V4.75a.75.75 0 00-1.5 0V8.5a1 1 0 001 1h3.75a.75.75 0 000-1.5H3.38zm-.595 6.318a.75.75 0 00-1.455.364C2.527 19.461 6.85 23 12 23c4.052 0 7.592-2.191 9.5-5.451v1.701a.75.75 0 001.5 0V15.5a1 1 0 00-1-1h-3.75a.75.75 0 000 1.5h2.37A9.502 9.502 0 0112 21.5c-4.446 0-8.181-3.055-9.215-7.182z"/></svg>
									</button> --}}
								</form>
								<button  title="Cинхранизация с 1С" onclick="updateGroups()" class="nav-link">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3.38 8A9.502 9.502 0 0112 2.5a9.502 9.502 0 019.215 7.182.75.75 0 101.456-.364C21.473 4.539 17.15 1 12 1a10.995 10.995 0 00-9.5 5.452V4.75a.75.75 0 00-1.5 0V8.5a1 1 0 001 1h3.75a.75.75 0 000-1.5H3.38zm-.595 6.318a.75.75 0 00-1.455.364C2.527 19.461 6.85 23 12 23c4.052 0 7.592-2.191 9.5-5.451v1.701a.75.75 0 001.5 0V15.5a1 1 0 00-1-1h-3.75a.75.75 0 000 1.5h2.37A9.502 9.502 0 0112 21.5c-4.446 0-8.181-3.055-9.215-7.182z"/></svg>
								</button>
							</li>
							<li>
								{{-- <form action="/ajax" method="POST"> --}}
									{{--  --}}
									<button title="Продолжить Cинхранизация" class="nav-link" onclick="getGroupsInfo()" type="submit">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<path d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M344.48,269.57l-128,80  c-2.59,1.617-5.535,2.43-8.48,2.43c-2.668,0-5.34-0.664-7.758-2.008C195.156,347.172,192,341.82,192,336V176  c0-5.82,3.156-11.172,8.242-13.992c5.086-2.836,11.305-2.664,16.238,0.422l128,80c4.676,2.93,7.52,8.055,7.52,13.57  S349.156,266.641,344.48,269.57z"/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
									</button>
								{{-- </form> --}}
							</li>
                            @auth
                            <li > <a class="nav-link" href="{{Route('logout')}}"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M510.371,226.513c-1.088-2.603-2.645-4.971-4.629-6.955l-63.979-63.979c-8.341-8.32-21.824-8.32-30.165,0     c-8.341,8.341-8.341,21.845,0,30.165l27.584,27.584H320.013c-11.797,0-21.333,9.557-21.333,21.333s9.536,21.333,21.333,21.333     h119.168l-27.584,27.584c-8.341,8.341-8.341,21.845,0,30.165c4.16,4.181,9.621,6.251,15.083,6.251s10.923-2.069,15.083-6.251     l63.979-63.979c1.984-1.963,3.541-4.331,4.629-6.955C512.525,237.606,512.525,231.718,510.371,226.513z"/>
			<path d="M362.68,298.667c-11.797,0-21.333,9.557-21.333,21.333v106.667h-85.333V85.333c0-9.408-6.187-17.728-15.211-20.437     l-74.091-22.229h174.635v106.667c0,11.776,9.536,21.333,21.333,21.333s21.333-9.557,21.333-21.333v-128     C384.013,9.557,374.477,0,362.68,0H21.347c-0.768,0-1.451,0.32-2.197,0.405c-1.003,0.107-1.92,0.277-2.88,0.512     c-2.24,0.576-4.267,1.451-6.165,2.645c-0.469,0.299-1.045,0.32-1.493,0.661C8.44,4.352,8.376,4.587,8.205,4.715     C5.88,6.549,3.939,8.789,2.531,11.456c-0.299,0.576-0.363,1.195-0.597,1.792c-0.683,1.621-1.429,3.2-1.685,4.992     c-0.107,0.64,0.085,1.237,0.064,1.856c-0.021,0.427-0.299,0.811-0.299,1.237V448c0,10.176,7.189,18.923,17.152,20.907     l213.333,42.667c1.387,0.299,2.795,0.427,4.181,0.427c4.885,0,9.685-1.685,13.525-4.843c4.928-4.053,7.808-10.091,7.808-16.491     v-21.333H362.68c11.797,0,21.333-9.557,21.333-21.333V320C384.013,308.224,374.477,298.667,362.68,298.667z"/>
		</g>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</a> </li>
                            @endauth

						</ul>
				  	</nav>
					<div style="display: none" class="progresss">
						<div class="files">...</div>
						<div class="photoLoaderLabel"></div>
						<div class="container-prog">
							<div class="progressbar">
								<span class="percentBar">(100%)</span>
							</div>
						</div>
						  
					</div>
					<style>
						.disabled {
							display: none;
						}
						.files {
							margin-top: 14px;
							margin-left: 5px;
							grid-area: files;
						}
						.photoLoaderLabel {
							grid-area: load;
						}
						.progresss {
							background-color: #fff;
							height: 50px;
							/* margin-top: 10px; */
							border-radius: 4px;
							box-shadow: 0 5px 10px rgb(0, 0, 0, 0.2);
							display: grid;
							grid-template-columns: 100px 1fr;
							grid-template-rows: 1fr 1fr;
							grid-template-areas: 
							"files load"
							"files prog";
						}
						.container-prog {
							grid-area: prog;
							/* margin-top:4px; */
							height: 20px;
							margin-right: 10px;
							background-color: rgb(209, 209, 209);
						}
						.progressbar {
							height: 20px;
							
							
						}
						.progressbar > span {
							text-align: center;
							display: block;
							height: 100%;
							background-color: #60C4F2;
							background-image: linear-gradient(
								center bottom,
								rgb(43,194,83) 37%,
								rgb(84,240,84) 69%
							);
							box-shadow: 
								inset 0 2px 9px  rgba(255,255,255,0.3),
								inset 0 -2px 6px rgba(0,0,0,0.4);
							position: relative;
							overflow: hidden;
							}
					</style>
				</header>

			@show


			@yield('content')


		</div>
	</div>
</body>
</html>
<script>
	const updateGroups = () => {
		$('.progresss').removeAttr('style')
		$(".simpleLoader").slideDown();
		fetch('./1c/update-groups.php').then(() => {
			getGroupsInfo();
			$(".simpleLoader").slideUp();
		}).catch(() => updateGroups())
	}

	const getGroupsInfo = (refresh = true) => {
		$('.progresss').removeAttr('style')
		$(".photoLoaderLabel").text('Выгружаю информацию о группах...');
        if (refresh) {
            $(".photoLoader").slideDown();
            $('.loadedPhoto').css('width', '0%');
        }
		fetch('./1c/get-group-info.php')

			.then(res => res.json())
			.then(res => {
				$('.percentBar').css('width', `${res.percent}%`);
				$('.percentBar').text(`${res.percent}%`);
				$(".files").text(`${res.loaded}/${res.count}`);
				if (res.percent !== 100) {
					getGroupsInfo(false);
				} else {
                    getStudentInfo();
                }
			}).catch(() => getGroupsInfo())
	}

	const ajaxX = () => {
		console.log(1)
		// $('.progresss').addAttr('style')
		// fetch('/ajax', {
		// 	method: 'POST',
		// 	body: test = 1
		// })
		// .then(response => response.json())
		// .then(res => {
		// 	console.log(res)
		// })
	}
	const getStudentInfo = (refresh = true) => {
	$(".photoLoaderLabel").text('Выгружаю информацию о студентах...');
	if (refresh) {
		$(".photoLoader").slideDown();
		$('.loadedPhoto').css('width', '0%');
	}
	fetch('./1c/get-students-info.php')
		.then(res => res.json())
		.then(res => {
			console.log(1)
			$('.percentBar').css('width', `${res.percent}%`);
			$('.percentBar').text(`${res.percent}%`);
			$(".files").text(`${res.loaded}/${res.count}`);
			if (res.percent !== 100) {
				getStudentInfo(false);
				// console.log(1)
			} else {
				
				loadPhotos();
			}
		}).catch(() => getStudentInfo())

	}




	const loadPhotos = (refresh = true) => {
        $(".photoLoaderLabel").text('Выгружаю фотографии из 1с...');
        if (refresh) {
            $(".photoLoader").slideDown();
            $('.loadedPhoto').css('width', '0%');
        }
        fetch('/1c/get-images.php')
            .then(res => res.json())
            .then(res => {
                $('.percentBar').css('width', `${res.percent}%`);
				$('.percentBar').text(`${res.percent}%`);
				$(".files").text(`${res.loaded}/${res.count}`);
                if (res.loaded + 1 != res.count) {
					console.log(2)
                    loadPhotos(false);
                }  else {
					
					$('.progresss').attr('style', 'display: none;')
					alert('Загрузка завершена!')
					fetch('/ajax', {
					method: 'POST',
					body: test = 1
					})
					.then(response => response.json())
					.then(res => {
						
					})
				}
				console.log(1)
            }).catch(() => loadPhotos())
    };

</script>
<script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>

