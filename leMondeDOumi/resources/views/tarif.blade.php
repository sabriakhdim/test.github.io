@extends('template')

@section('contenu')
<div class="container">
    <h2>Nos tarifs</h2>
    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore veritatis doloribus officiis et sequi
        corporis laudantium itaque molestias tempora in ea, consequuntur quisquam consectetur debitis, dignissimos fuga
        saepe beatae alias?</span>

    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card tarif">
                <img class="card-img-top"
                    src="https://www.ohb.scot.nhs.uk/sites/default/files/inline-images/maternity.png"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Maternity</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <div class="bottom ">
                        <li class="list-group-item text-center border-success">200 €</li>
                        <div class="col text-center">
                            <br>
                            <a href="{{action('MyController@contact')}}" class="btn btn-light ">Réservez votre
                                séance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card tarif">
                <img class="card-img-top"
                    src="https://www.eehealth.org/-/media/images/modules/blog/posts/2018/4/hdmomsnewbornnormalcrop.jpg?h=500&la=en&w=750&hash=FD2B0320973EB931C65CAF3A4F64B5A2216C55E9"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">New born</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                    <div class="bottom ">
                        <li class="list-group-item text-center border-success">200 €</li>
                        <div class="col text-center">
                            <br>
                            <a href="{{action('MyController@contact')}}" class="btn btn-light ">Réservez votre
                                séance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

            <div class="card tarif">
                <img class="card-img-top"
                    src="https://www.rd.com/wp-content/uploads/2017/01/04_SocialMedia_every_Parent_set_for_babysitter_480491406_gpointstudio.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Sitters</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <div class="bottom ">
                        <li class="list-group-item text-center border-success">200 €</li>
                        <div class="col text-center">
                            <br>
                            <a href="{{action('MyController@contact')}}" class="btn btn-light ">Réservez votre
                                séance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card tarif">
                <img class="card-img-top"
                    src="https://bambiniphoto.sg/wp-content/uploads/family-photography-bambini-025.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Family</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to </p>
                    <div class="bottom">
                        <li class="list-group-item text-center border-success">200 €</li>
                        <div class="col text-center">
                            <br>
                            <a href="{{action('MyController@contact')}}" class="btn btn-light ">Réservez votre
                                séance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

            <div class="card tarif">
                <img class="card-img-top"
                    src="https://images.squarespace-cdn.com/content/v1/56bb820b2eeb811c3b94e893/1459530679858-0CLLB5I0BRC1HVZFAW2J/ke17ZwdGBToddI8pDm48kCc0T8A4BZrHnHqcqSpPTnF7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iXS6XmVv7bUJ418E8Yoc1hx9cp17Zmc6GVYdAkBUIFEbOwubZPnXjjxH5uEWz9c3g/albums_march0019edit.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Album photos</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <div class="bottom ">
                        <li class="list-group-item text-center border-success">200 €</li>
                        <div class="col text-center">
                            <br>
                            <a href="{{action('MyController@contact')}}" class="btn btn-light ">Réservez votre
                                séance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<script>
    $(document).ready(function () {

        $(".card").hover(
            function () {
                $(this).addClass('shadow-lg').css('cursor', 'pointer');
            },
            function () {
                $(this).removeClass('shadow-lg');
            }
        );
    });

</script>

@endsection
