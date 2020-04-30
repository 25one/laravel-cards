@foreach($autos as $auto)
<article class="brick entry format-standard animate-this margin-top">

    <div class="entry-text">
        <div class="entry-header">
            <h5 class="entry-title"><a href="#">{{ $auto->name }}</a><br> <span class="red">({{ $auto->country->name }})</span></h5>
        </div>
        <div class="entry-excerpt">
            <img class="img_auto" src="{{ asset('public/images/' . $auto->image) }}" alt="">
        </div>
    </div>

</article>
@endforeach