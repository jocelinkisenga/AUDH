@extends("layouts.main")
@section("title",  "Acceuil")
@section("content")


    <div class="hero-wrap" style="background-image: url('images/home.jpeg'); " data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center text-black
          " data-scrollax=" properties: { translateY: '70%' }">
            <h2 class="mb-4 text-white font-bold">Action Universelle pour la Défenses des Droits de l'Homme</h2>

          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Defense des droits de l'homme</h3>
                <p>Défense et protection de la dignité humaine.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Défense des droits de l'enfant</h3>
                <p>Nous luttons pour le droit des enfants dans leurs bas ages en les protegeant contre toute exploitation.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Centre de formation professionnel</h3>
                <p>Formation d'OPJ, defenseurs des droits de l'homme, Auto-ecole, ménuisier, etc.</p>
              </div>
            </div>
          </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Assistance juridique</h3>
                <p>Assistance dans les procés des plus vulnérables pour une justice équitable</p>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Nos Engagements</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
                        Défense et protection des individus ayant subi, des violations graves des droits de l'homme dans les sociétés minières, publiques et privées

        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
                        La défense des droits de l'homme et la protection de la dignité humaine
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
                        Fourniture des consultations juridiques gratuite à toute personne se trouvant en situation vulnérable
        			</div>
        		</div>
        	</div>
            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
                        vulgariser les insteruments juriduques nationaux et internationaux relatifs aux de l'homme
        			</div>
        		</div>
        	</div>
                        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
                        visite de monitoring des prisons et des amigo (cachots)
        			</div>
        		</div>
        	</div>
                        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
                        Assistance juridique des procés des vulnérables
        			</div>
        		</div>
        	</div>
                        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
                        Reconnaissance envers les personnes ayant l'humanisme et la considération envers les droits de l'homme
        			</div>
        		</div>
        	</div>
                        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
                        Formation des OPJ et défenseurs des droits de l'hommme
        			</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-gallery m-4">
              <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Notre Galérie</h2>
            <p></p>
          </div>
        </div>
    	<div class="d-md-flex">
	    	<a href="{{ asset('audh/image1.jpg') }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset("audh/image2.jpg") }});">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="{{ asset("audh/image3.jpg") }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset('audh/image3.jpg') }});">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="{{ asset("audh/image4.jpg") }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset("audh/image4.jpg") }});">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="{{ asset('audh/image5.jpg') }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset('audh/image5.jpg') }});">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
    	</div>
    	<div class="d-md-flex">
	    	<a href="{{ asset('audh/image6.jpg') }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-6.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="{{ asset("audh/image7.jpg") }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset("audh/image7.jpg") }});">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="images/image_1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_1.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="{{ asset("audh/image8.jpg") }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset("audh/image8.jpg") }});">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Nos recents articles</h2>
            <p></p>
          </div>
        </div>
        <div class="row d-flex">
            @foreach ($recentPosts as $item)
            <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset("storage/storage/uploads/".$item->image) }}');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="{{ route("posts.show",["id" => $item->id]) }}">{{ \Illuminate\Support\Str::limit($item->title, 30, '...') }}</a></h3>
                <p>{{ \Illuminate\Support\Str::limit($item->slug, 50, '...')}}</p>
              </div>
            </div>
          </div>
            @endforeach
        </div>
      </div>
    </section>

    {{-- <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Evenements recents</h2>
          </div>
        </div>
        <div class="row">

            @foreach ($events as $item)
                    <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset("storage/storage/uploads/".$item->photo) }}');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</a></div>
                  <div><a href="#">Admin</a></div>
                  <div></div>
                </div>
                <h3 class="heading mb-4"><a href="#">{{ $item->title }}</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>{{$item->day_event}}</span> <span><i class="icon-map-o"></i> </span></p>

                <p><a href=""> <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
            @endforeach

        </div>
      </div>
    </section> --}}

		<section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex">
    		<div class="col-md-6 d-flex ftco-animate">
    			<div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.jpg);"></div>
    		</div>
    		<div class="col-md-6 volunteer pl-md-5 ftco-animate">
    			<h3 class="mb-3">Devenez un volontaire</h3>
    			<form action="#" class="volunter-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="votre nom">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder=" Email">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="envoyer" class="btn btn-white py-3 px-5">
            </div>
          </form>
    		</div>
    		</div>
    	</div>
    </section>

@endsection
