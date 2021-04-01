<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	{{-- <script src="https://kit.fontawesome.com/a70234f770.js"></script> --}}
	<script src="{{ asset('js/app.js') }}" defer></script>
	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> --}}
</head>
<body>
	<style>
		body, html {
		margin: 0;
		padding: 0;
		height: 100%;
		width: 100%;
		box-sizing: border-box;
		font-family: sans-serif;
	}
	.all-container {
		/* padding-top: 20px; */
		width: 100%;
		height: 100%;
		background-color: #60C4F2;
	}
	.all-container .main-container {
		/* padding-top: 20px; */
		margin: 0 auto;
		/* border: 1px solid black; */
		width: 1200px;
		height: 100%;
		background-color: #60C4F2;
		display: grid;
		grid-template-rows: 100px 1fr 40px;
		grid-gap: 5px;
	}
	header {
		display: grid;
		grid-template-columns: 700px 1fr 200px;
		/* border: 1px solid black; */
		/* align-items: center; */
	}
	header .search-box input {
		border-radius: 5px;
		/* margin-left: 16px; */
		margin-top: 26px;
		width: 600px;
		height: 40px;
		outline: none;
		border: none;
		box-shadow: 0 5px 10px rgb(0, 0, 0, 0.2);
		font-size: 16px;
		padding-left: 20px;
	}
	header input:active{
		border:none;
		outline: none;
	}
	header input:focus {
		border:none;
		outline: none;
	}
	header nav {
		
		padding-top: 20px;
		margin: 0;
		/* margin-right: 16px; */
		height: 60px;

	}
	header nav ul {
		border-radius: 5px;
		margin: 0;
		height: 100%;
		background-color: #fff;
		list-style-type: none;
		display: grid;
		padding: 0;
		grid-template-columns: 1fr 1fr 1fr 1fr;
		box-shadow: 0 5px 10px rgb(0, 0, 0, 0.2);
	}
	header nav ul li {
		display: flex;
		justify-content: center;
		align-items: center;
		
	}
	.search-box {
		position: relative;
	}
	.search-box button {
		position: absolute;
		top: 33px;
		left: 584px;
		border: none;
		background-color: #fff;
	}
	.search-box button:focus {
		outline: none;
		border: none;
	}
	.search-box button:active {
		outline: none;
		border: none;
	}
	header nav ul li:hover {
		background-color: rgb(223, 223, 223);
	}
	header nav ul li:hover:first-child {
		border-top-left-radius: 5px;
		border-bottom-left-radius: 5px;
	}
	header nav ul li:hover:last-child {
		border-top-right-radius: 5px;
		border-bottom-right-radius: 5px;
	}
	.table-box-selecteds {
		border-radius: 5px;
		/* border: 1px solid black; */
		box-shadow: 0 50px 40px rgb(0, 0, 0, 0.2);
		background-color: #fff;
	}











	.table-box-selecteds table {
		width: 100%;
		/* height: 100%; */
	}
	.table-box-selecteds table tr th {
		height: 40px;
		padding-left: 20px;
		text-align: left;
	}
	.table-box-selecteds table tr th:nth-child(7) {
		height: 40px;
		padding-left: 0px;
		text-align: center;
	}
	.table-box-selecteds table tr td:last-child {
		width: 40px;
		height: 40px;
		padding-right: 6px;
		padding-left: 6px;
		text-align: center;
	}
	.table-box-selecteds table tr td:last-child button {
		border: none;
		outline: none;
		background:transparent;
	}
	.table-box-selecteds table tr td:last-child button:focus {
		border: none;
		outline: none;
		background:transparent;
	}
	.table-box-selecteds table tr td:last-child button:active {
		border: none;
		outline: none;
		background:transparent;
	}
	.table-box-selecteds table tr td:nth-child(2) {
		width: 40px;
		font-size: 24px;
		padding-left: 12px;
	}
	/*	  */

		.table-box-selecteds table .selected_list_active td:nth-child(8) {
			padding-right: 0px;
			width: 160px;
		}
		.table-box-selecteds table .selected_list_active td:nth-child(8) input {
			width: 150px;
			padding: 0;
			margin: 0;
			border-radius: 5px;
			background-color: #fff;
			font-size: 16px;
			color: #000;
		}
		.table-box-selecteds table .selected_list_active td:nth-child(5) {
			padding-right: 0px;
			width: 180px;
		}
		.table-box-selecteds table .selected_list_active td:nth-child(5) input {
			width: 170px;
			padding: 0;
			margin: 0;
			border-radius: 5px;
			background-color: #fff;
			font-size: 16px;
			color: #000;
		}
		.table-box-selecteds table .selected_list_active td:nth-child(4) {
			padding-right: 0px;
			width: 100px;
		}
		.table-box-selecteds table .selected_list_active td:nth-child(4) input {
			width: 90px;
			padding: 0;
			margin: 0;
			border-radius: 5px;
			background-color: #fff;
			font-size: 16px;
			color: #000;
		}
		.table-box-selecteds table .selected_list_active td:nth-child(3) {
			padding-right: 0px;
			width: 160px;
		}
		.table-box-selecteds table .selected_list_active td:nth-child(3) input {

			width: 150px;
			padding: 0;
			margin: 0;
			background-color: #fff;
			font-size: 16px;
			color: #000;
			border-radius: 5px;
		}
		
		.table-box-selecteds table .selected_list_active td input {
			
			border: 1px solid black;
			transition: 0.2s ease-in-out;
		}
		.table-box-selecteds table .selected_list_active:hover td input {
			background-color: rgb(243, 242, 242);
		}

	/*  */


	/* input */

		.table-box-selecteds table .selected_list_disabled td:nth-child(8) {
			padding-right: 0px;
			width: 160px;
		}
		.table-box-selecteds table .selected_list_disabled td:nth-child(8) input {
			width: 150px;
			padding: 0;
			margin: 0;
			border: none;
			background-color: #fff;
			font-size: 16px;
			color: #000;
		}
		.table-box-selecteds table .selected_list_disabled td:nth-child(5) {
			padding-right: 0px;
			width: 180px;
		}
		.table-box-selecteds table .selected_list_disabled td:nth-child(5) input {
			width: 170px;
			padding: 0;
			margin: 0;
			border: none;
			background-color: #fff;
			font-size: 16px;
			color: #000;
		}
		.table-box-selecteds table .selected_list_disabled td:nth-child(4) {
			padding-right: 0px;
			width: 100px;
		}
		.table-box-selecteds table .selected_list_disabled td:nth-child(4) input {
			width: 90px;
			padding: 0;
			margin: 0;
			border: none;
			background-color: #fff;
			font-size: 16px;
			color: #000;
		}
		.table-box-selecteds table .selected_list_disabled td:nth-child(3) {
			padding-right: 0px;
			width: 160px;
		}
		.table-box-selecteds table .selected_list_disabled td:nth-child(3) input {
			width: 150px;
			padding: 0;
			margin: 0;
			border: none;
			background-color: #fff;
			font-size: 16px;
			color: #000;
		}
		
		.table-box-selecteds table .selected_list_disabled td input {
			transition: 0.2s ease-in-out;
		}
		.table-box-selecteds table .selected_list_disabled:hover td input {
			background-color: rgb(243, 242, 242);
		}

	/* input */
	.table-box-selecteds table tr td:nth-child(2) {
		/* padding: ; */
	}
	.table-box-selecteds table tr td:nth-child(2) .fa-hard-hat {
		/* width: 40px; */
		font-size: 24px;
		/* padding-left: 12px; */
		padding-left: 2px;
	}
	.table-box-selecteds table tr th:last-child {
		height: 20px;
		padding-left: 0px;
	}
	.table-box-selecteds table tr td {
		height: 40px;
		padding-left: 20px;
	}
	.table-box-selecteds table tr td:nth-child(7) {
		text-align: center;
		padding: 0;
	}
	.table-box-selecteds table tr td:nth-child(8) {
		text-align: center;
		padding: 0;
	}
	.table-box-selecteds table tr td:first-child {
		width: 25px;
	}
	.table-box-selecteds table tr td:last-child {
		padding-left: 10px;
		align-items: center;
		width: 50px;
		display: grid;
		grid-template-columns: 1fr 1fr;
		/* grid-gap: 5px; */
	}
	.table-box-selecteds table tr td:last-child .save_worker svg {
		height: 30px;
	}
	.table-box-selecteds table tr td:last-child {
		position: relative;
	}
	.table-box-selecteds table tr td:last-child .save_worker{
		left: 45px;
		position: absolute;
	}
	.table-box-selecteds table tr {
		transition: 0.2s ease-in-out;
	}
	.table-box-selecteds table tr:first-child {
		/* transition: 0.2s ease-in-out; */
		height: 40px;
		background-color: rgb(243, 242, 242);
	}
	.table-box-selecteds table tr:hover {
		background-color: rgb(243, 242, 242);
	}
	.table-box-selecteds .fa {
		font-size: 24px;
	}
	.table-box-selecteds .fa:hover {
		color: #60C4F2;
	}
	.table-box-selecteds select {
		border-radius: 5px;
		border: 1px solid #000;
	}
	.table-box-selecteds select:active{
		/* border-radius: 5px; */
		outline: none;
	}
	.table-box-selecteds option:active {
		outline: none;
	}
	.table-box-selecteds option{
		border-radius: 5px;
		box-shadow: none;
	}
	.table-box-selecteds a {
		color: black;
	}
	.print-box {
		padding-top: 25px;
	}
	.print-box button {
		width: 200px;
		height: 44px;
		background-color: #fff;
		border: none;
		outline: none;
		border-radius: 5px;
		box-shadow: 0 5px 10px rgb(0, 0, 0, 0.2);
		font-size: 16px;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.print-box button:hover,
	.print-box button .fa:hover {
		color: #60C4F2;
	}
	.print-box button:focus,
	.print-box button:active {
		border: none;
		outline: none;
	}
	.print-box button .fa {
		font-size: 30px;
		padding-left: 10px;
	}
	
	select {
		width: 150px;
	}
	svg {
		width: 25px;
		height: 25px;
	}
	svg:hover {
		fill: #60C4F2;
	}

	/* .selected_list:nth-child(4) {
		background-color: rgb(189, 189, 189);
		
	} */

	.hidden {
		visibility: hidden;
	}
	</style>	


	<div class="all-container">
		<div class="main-container">
			<header>
				<div class="search-box">
					<form action="">
						<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						<input type="text" placeholder="Поиск...">
					</form>
				</div>
				<div class="print-box">
					<button>Печать<i class="fa fa-print" aria-hidden="true"></i></button>
				</div>
				@include('ready.nav')
			</header>
			<div class="table-box-selecteds">
				<table class="table_selecteds">
					<tr>
						<th>#</th>
						<th></th>
						<th>Фамилия</th>
						<th>Имя</th>
						<th>Отчество</th>
						<th></th>
						<th>Группа</th>
						<th>Должность</th>
						<th>Шаблон</th>
						<th></th>
					</tr>
					@foreach ($selecteds as $item)
					{{-- selected_list_disabled  --}}
						<tr class="select-list__item selected_list_disabled" data-this_table_row_selected="selected_list">
							<td>{{$loop->iteration}}</td>
							<td>
								@if ( $item->group )
                                    <i class="fas fa-graduation-cap"></i>
                                @else
                                    <i class="fas fa-hard-hat"></i>
                                @endif
							</td>
							<td class="td_surname">
								@if ( !$item->group )
									<input class="input_surname_val input input_selected" disabled type="text" value="{{$item->surname}}">
								@else
									{{$item->surname}}
								@endif
							</td>
							<td class="td_name">
								@if ( !$item->group )
									<input class="input_name_val input input_selected" disabled type="text" value="{{$item->name}}">
								@else
									{{$item->name}}
								@endif
							</td>
							<td class="td_lastname">
								@if ( !$item->group )
									<input class="input_lastname_val input input_selected" disabled type="text" value="{{$item->lastname}}">
								@else
									{{$item->lastname}}
								@endif			
							</td>
							<td></td>
							<td>{{$item->group}}</td>
							<td class="td_position">
								@if ( !$item->group )
									<input class="input_position_val input input_selected" disabled type="text" value="{{$item->position}}">
								@else
									{{$item->position}}
								@endif
								
							</td>
							<td>
								@if ($item->group)
                                    <select disabled class="select" name="{{ $item->id }}">
                                        <option selected value="2">Студент</option>
                                    </select>
                                @else
                                    <select class="select" name="{{ $item->id }}">
                                        <option value="1">Преподователь</option>
                                        <option selected value="2">Студент</option>
                                    </select>
                                @endif
							</td>
							<td class="td_last_dis">
								@if ($item->group)
									<button class="select_section__btn-remove" data-studID="{{ $item->id }}" >
										<svg height="427pt" viewBox="-40 0 427 427.00131" width="427pt" xmlns="http://www.w3.org/2000/svg"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"/><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/></svg>
									</button>
								@else
									<button class="select_section__btn-remove" data-studID="{{ $item->id }}" >
										<svg height="427pt" viewBox="-40 0 427 427.00131" width="427pt" xmlns="http://www.w3.org/2000/svg"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"/><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/></svg>
									</button>
									<button class="update_worker" data-studID="{{ $item->id }}">
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 469.336 469.336;" xml:space="preserve">
										<g>
											<g>
												<path d="M456.836,76.168l-64-64.054c-16.125-16.139-44.177-16.17-60.365,0.031L45.763,301.682
													c-1.271,1.282-2.188,2.857-2.688,4.587L0.409,455.73c-1.063,3.722-0.021,7.736,2.719,10.478c2.031,2.033,4.75,3.128,7.542,3.128
													c0.979,0,1.969-0.136,2.927-0.407l149.333-42.703c1.729-0.5,3.302-1.418,4.583-2.69l289.323-286.983
													c8.063-8.069,12.5-18.787,12.5-30.192S464.899,84.237,456.836,76.168z M285.989,89.737l39.264,39.264L120.257,333.998
													l-14.712-29.434c-1.813-3.615-5.5-5.896-9.542-5.896H78.921L285.989,89.737z M26.201,443.137L40.095,394.5l34.742,34.742
													L26.201,443.137z M149.336,407.96l-51.035,14.579l-51.503-51.503l14.579-51.035h28.031l18.385,36.771
													c1.031,2.063,2.708,3.74,4.771,4.771l36.771,18.385V407.96z M170.67,390.417v-17.082c0-4.042-2.281-7.729-5.896-9.542
													l-29.434-14.712l204.996-204.996l39.264,39.264L170.67,390.417z M441.784,121.72l-47.033,46.613l-93.747-93.747l46.582-47.001
													c8.063-8.063,22.104-8.063,30.167,0l64,64c4.031,4.031,6.25,9.385,6.25,15.083S445.784,117.72,441.784,121.72z"/>
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
									</button>
									<button class="save_worker hidden" data-workerid="{{ $item->id }}">
										<svg height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g id="Solid"><path d="m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z"/><path d="m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z"/></g></svg>
									</button>
								@endif
							</td>
						</tr>
						
					@endforeach
				</table>
			</div>
		</div>
	</div>
	
</body>

</html>
