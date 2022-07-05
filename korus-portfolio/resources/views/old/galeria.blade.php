@if(Session::has('success'))
<br><span class="warning">{{Session::get('success')}}</span>
@endif
@if(!empty($notFound))
<p>Nincsenek galériák!</p>
@else
<div class="galeriak">
	@foreach($galleries as $gallery)
	<div class="egy_galeria">
		<div class="kor_kep_galeria">
			<a href="{{route('gallery.show', $gallery->id)}}">
                            @if(isset($gallery->p_lead->thumbnail))
                            {{HTML::image('uploadfolder/images/'.$gallery->p_lead->thumbnail, '', array('alt' => $gallery->name))}}
                            @else
                            {{HTML::image('assets/images/ternyak.jpg', '', array('alt' => $gallery->name))}}
                            @endif
                        </a>
		</div>
		<div class="galeria_neve">
			<h1>{{link_to_route('gallery.show',$gallery->name,$gallery->id)}}</h1>
			<h3>{{$gallery->p_count}} {{trans('pages.fenykep')}}</h3>
		</div>
		@if(Auth::check() && (Auth::user()->user == 'admin'))
		<div class="hir-button modify-gallery">{{link_to_route('gallery.edit','Módosítás',$gallery->id)}}</div>
		@endif
	</div>
	@endforeach
</div>
{{$galleries->links()}}
@endif
