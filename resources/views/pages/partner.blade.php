@extends('layouts.frontend')

@section('content')


  <!-- <pre>
    {{print_r($someArray)}}
</pre>  -->

<section id="page-container">
        <main class="main" id="main">
          <div class="container">
            <header class="page-header">
              <div class="page-header-container">
                <h1></h1>
              </div>
            </header>

            <div class="page-body">
              <div class="page-body-container">
                <div class="row">

                @foreach ($someArray as $patnerName )

                  <div class="col-sm-12 col-md-3 card">
                    <img class="rounded img-fluid" src="{{$someArray['partnerLogo']}}"  alt="The Soho London Independent Film Festival"/>
                  </div>
                  <div class="text-center text-md-left col-md-9">
                   <h1>{{$someArray["partnerName"]}}</h1>
                    <br />
                   <h4> {{$someArray["partnerSlug"]}}</h4>
                   <h5>{{$someArray["partnerType"]}}</h5>
                    
                  </div>
                     @endforeach
                </div>

              <div class="row">
                  <div class="container my-2">
                    <h2>Movie List</h2>
                  </div>
                </div>


                <div class="row">
                  <div class="container">
                    <div class="carousel" data-items="3">

                    <?php

                    $members_array = $someArray["movies"];
                    foreach($members_array as $movie){
                    ?>

                      <div class="card mb-3 p-0 m-1">
                        <img
                          class="card-img-top img-responsive"
                          src="{{$movie['posterFile']}}"
                          alt="Card image cap"
                        />

                        <div class="card-body p-3">
                          <h4 class="card-title">{{$movie["title"]}}</h4>
                          <h6 class="card-title">{{$movie["year"]}}</h6>
                          <h6 class="card-title"></h6>

                          <p class="card-text">
                          {{$movie["description"]}}
                          </p>
                        </div>
                      </div>

                      <?php } ?>

 
                 
                    </div>
                  </div>
                </div>

              

                <div class="row">
                  <div class="container my-5">
                    <h2>Team Members</h2>
                  </div>
                </div>

                <div class="card d-none">
                  <img
                    class="card-img-top"
                    src="https://dev.cinnect.io/images/partners/soho-film-festival/51%20States.jpg"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <h5 class="card-title">51st States</h5>
                    <p class="card-text">Now available on Cinnect</p>
                    <a href="#" class="btn btn-primary">Find out more</a>
                  </div>
                </div>

                <div class="row team-members-shadow" data-items="3">


                <?php

                $members_array = $someArray["members"];
                foreach($members_array as $member){
                ?>

                
                  <div class="col-4">
                    <div class="card">
                      <img
                        class="card-img-top h-5"
                        src="{{$member['photo']}}" alt="photo" />
                      <div class="card-body">
                        <div class="team-desc">
                          <h3>{{$member["name"]}}</h3>
                          <span>{{$member["title"]}}</span>
                          <p>
                          {{$member["description"]}}
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>

                
                 
                </div>
              </div>
            </div>
          </div>
        </main>
      </section>



@endsection