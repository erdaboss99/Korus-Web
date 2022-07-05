@if(Auth::check())
<div id="private-calendar"></div>
@else
<div id="public-calendar"></div>
@endif
