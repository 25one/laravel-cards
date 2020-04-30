@foreach($autos as $auto)
<article class="brick entry format-standard animate-this margin-top">

    <div class="entry-text">
        <div class="entry-header">
            <h5 class="entry-title"><a href="#">{{ $auto->name }}</a> <p class="red">({{ $auto->country->name }})</p></h5>
        </div>
        <div class="entry-excerpt">
            <img src="{{ asset('public/images/' . $auto->image) }}" alt="">
        </div>
    </div>

</article>
@endforeach