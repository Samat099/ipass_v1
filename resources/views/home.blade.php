{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head> --}}

@extends('master')
@section('content')
   {{$chislo->oba()}}

	{{-- <div class="grid-containerr">
			@section('groups')
				<div class="groups">
					@foreach ($groups as $group)
						<div class="box_group ">
							<a class="group-title" href="group{{$group->group_id}}">{{$group->group}}</a>
						</div>
					@endforeach
				</div>
				<div class="pag-group">
					@if ($groups->total() > $groups->count())
						<ul class="pagination">
							<li class="pagination__item">
								<div>
									{{$groups->onEachSide(1)->links()}}
								</div>
							</li>
						</ul>
					@endif
				</div>
			@show

            @yield('tabel-group')
	</div> --}}
@endsection

