<br />
<p >
	<strong><big>
		<a href="{!!url($tble, [$prevPage])!!}" > < Previous {{$text}}</a>
			&nbsp;:&nbsp;
		<a href="{!!url($tble, [$nextPage])!!}" > Next {{$text}} ></a>
	</strong></big>
	
	@if (Auth::check())<br /><a href="{!!url("$tble/$editTable/edit")!!}>( Edit )</a>@endif
</p>