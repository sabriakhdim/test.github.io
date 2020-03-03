@extends('template')

@section('contenu')
<div class="container">
    <h1>{{$albumName}}</h1>
    <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione unde non repellendus possimus impedit vel.
        Dolorem molestiae similique sunt illo illum exercitationem, accusamus velit rerum, neque rem voluptas iste
        iure.</span>
    <div class="col-md-12">
        <div class="row">
            <hr>
            <div class="gal">
                @foreach ($photos as $photo)
                <div class="product-div1">
                    <div class="img-div1">
                        <a data-fancybox="gallery" href="{{  asset($photo) }}">
                            <img style="display:none;" src='{{ asset($photo) }}' class="img-responsive transition">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    $('img').load(function () {
        $(this).css('display', 'block');
    });
    setTimeout(function () {
        document.getElementById('loading').style.display = 'none';
    }, 3000);

</script>
@endsection
