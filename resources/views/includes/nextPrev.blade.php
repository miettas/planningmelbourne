<br />
<p >
	<strong><big>
		<a href="{{url($tble, [$prevChap])}}" > < Previous {{$textBook}}</a>
		<br />

		<a href="{{url($tble, [$prevPage])}}" > < Previous {{$textChap}}</a>
			&nbsp;:&nbsp;
		<a href="{{url($tble, [$nextPage])}}" > Next {{$textChap}} ></a>
		
		<br />
		<a href="{{url($tble, [$nextChap])}}" > Next {{$textBook}} ></a></big>
	</strong>

	@if (Auth::check())<br /><a href="{{ url("$tble/$editTable/edit") }}>( Edit )</a>@endif
</p>
