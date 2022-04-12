@extends('layouts.frontend')

@section('content')


<div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-8 col-md-5">
                        <img class="img-fluid" src="https://cdn.cinnect.net/assets/38cbe793hewj/poster.jpg" alt="">
                    </div>
                    <div class="d-flex flex-column col-md-7 text-center text-md-left mt-5 mt-md-0">
                        <div class="row order-1">
                            <div class="col-12">
                                <h1>The Photographer
                                </h1>
                                <h3>Logline</h3>
                                <h4>Sales Company Name</h4>
                            </div>
                        </div>
                        <div class="row order-2">
                            <div class="col-md-7 my-3 my-md-0">
                                <p class="m-0">Released</p>
                                <p class="m-0">Live Action, 1h20m</p>
                                <p class="m-0">Horror, drama, 2019, English</p>
                            </div>
                            <div class="col-md-5 d-flex d-md-block my-3 my-md-0">
                                <div class="row justify-content-around">
                                    <div class="col-3 col-md-12 px-0">
                                        <div class="project-ratings d-flex justify-content-center">
                                            <div class="col-2 mx-0">                                        
                                                <img class="d-inline-block mr-2" width="15px" src="./rotten-tomato.png" alt="">
                                            </div>
                                            <div class="col-8 col-md-8 mx-0">
                                                <p class="m-0 d-inline-block">Rotten tomatoes</p>
                                            </div>
                                            <div class="col-2 mt-1 mx-0">
                                                <h6>97%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12 px-0">
                                        <div class="project-ratings d-flex justify-content-center">
                                            <div class="col-2">                                        
                                                <img class="d-inline-block mr-2" width="15px" src="./imdb.png" alt="">
                                            </div>
                                            <div class="col-5 col-md-8">
                                                <p class="m-0 d-inline-block">IMDb</p>
                                            </div>
                                            <div class="col-2 mt-1">
                                                <h6>8.6</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12 px-0">
                                        <div class="project-ratings d-flex justify-content-center">
                                            <div class="col-2 mx-0">                                        
                                                <img class="d-inline-block mr-2" width="15px" src="./tmdb.png" alt="">
                                            </div>
                                            <div class="col-5 col-md-8 mx-0">
                                                <p class="m-0 d-inline-block">TMDb</p>
                                            </div>
                                            <div class="col-2 mt-1 mx-0">
                                                <h6>97%</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tags order-5 order-md-3">
                            <a href="" class="tag">Ouija</a>
                            <a href="" class="tag">Yantra</a>
                            <a href="" class="tag">Evil Spirit</a>
                            <a href="" class="tag">LGBTQ</a>
                        </div>
                        <div class="row mt-3 order-5 order-md-4">
                            <div class="col-12 col-md-6">
                                    <h4 class="d-none d-md-block">Trailer</h4>
                                <video id="player" playsinline controls data-poster="/path/to/poster.jpg" >
                                    <source src="test" type="video/mp4" />
                                    <source src="test" type="video/webm" />
                                    <!-- Captions are optional -->
                                    <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
                                  </video>   
                            </div>
                        </div>
                        <div class="row order-4 order-md-5">
                            <div class="col-12">
                                <p class="mt-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta repudiandae beatae ad quam temporibus quas placeat illum, voluptates suscipit perferendis amet nostrum cumque. A voluptatum neque omnis inventore vitae. Officia.</p>
                            </div>
                        </div>
                        <div class="my-3 mt-md-3 order-3 order-md-6">
                            <button class="btn btn-sm btn-outline mr-2">License content</button>
                            <button class="btn btn-sm btn-outline mr-2">Contact Seller</button>
                            <button class="btn btn-sm btn-outline mr-2 d-none d-md-inline">Content Availability</button>
                            <button class="btn btn-sm btn-outline mr-2 d-none d-md-inline">Analytics</button>
                        </div>
                    </div>
                </div>
               

                <h4 class="mt-5 pt-5">Artwork</h4>
                <div class="row project-imagegallery-mobile">
                    <div class="col-12">
                        <div class="carousel mb-0" data-items="4" data-dots="false" data-lightbox="gallery">
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="https://source.unsplash.com/user/erondu/320x180" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu" class="btn btn-light btn-rounded">Zoom</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="https://source.unsplash.com/random/320x180" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/random/320x180" class="btn btn-light btn-rounded">Zoom</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="https://source.unsplash.com/user/erondu/320x180" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/320x180" class="btn btn-light btn-rounded">Zoom</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="https://source.unsplash.com/user/erondu/320x180" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/320x180" class="btn btn-light btn-rounded">Zoom</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="https://source.unsplash.com/user/erondu/320x180" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/320x180" class="btn btn-light btn-rounded">Zoom</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="https://source.unsplash.com/user/erondu/320x180" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/320x180" class="btn btn-light btn-rounded">Zoom</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                        </div>
                    </div>
                </div>
                <div class="row mt-5 pt-5">
                    <div class="col-12">
                        <div class="accordion accordion-shadow">
                            <div class="ac-item">
                                <h2 class="ac-title">Episode Information</h2>
                                <div class="ac-content">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width:15%" scope="col">Series Number</th>
                                                <th style="width:15%" scope="col">Episode Number</th>
                                                <th style="width:15%" scope="col">Episode Title</th>
                                                <th style="width:50%" scope="col">Episode Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>1</td>
                                                <td>The Pilot</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nobis accusamus nemo necessitatibus cupiditate eum labore velit, quis dolorum quas!</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>1</td>
                                                <td>The Pilot</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nobis accusamus nemo necessitatibus cupiditate eum labore velit, quis dolorum quas!</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>1</td>
                                                <td>The Pilot</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nobis accusamus nemo necessitatibus cupiditate eum labore velit, quis dolorum quas!</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="ac-item ac-active">
                                <h5 class="ac-title">Cast & Crew</h5>
                                <div class="ac-content">
                                    <div class="flex">
                                        <div class="row">
                                            <div class="col-12 col-md-2"><p><strong>Starring:</strong></p></div>
                                            <div class="col-6 col-md-3">
                                                <div>
                                                    <img class="rounded-circle d-inline-block" src="https://via.placeholder.com/30" alt="">
                                                    <p class="d-inline-block">Dominique Swain</p>
                                                </div>
                                                <div>
                                                    <img class="rounded-circle d-inline-block" src="https://via.placeholder.com/30" alt="">
                                                    <p class="d-inline-block">Emma Eliza Regan</p>
                                                </div>
                                                <div>
                                                    <img class="rounded-circle d-inline-block" src="https://via.placeholder.com/30" alt="">
                                                    <p class="d-inline-block">Ketan Anand</p>
                                                </div>
                                                <div>
                                                    <img class="rounded-circle d-inline-block" src="https://via.placeholder.com/30" alt="">
                                                    <p class="d-inline-block">Jan Graveson</p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <p>Alice</p>
                                                <p>Hannah</p>
                                                <p>Horace Granger</p>
                                                <p>Elizabeth</p>
                                                <button class="btn btn-sm btn-outline">FULL CAST</button>
                                            </div>
                                            <div class="col-6 col-md-2 mt-5 mt-md-0">
                                                <p><strong>Director:</strong></p>
                                                <p><strong>Writer:</strong></p>
                                                <p><strong>Producer:</strong></p>
                                            </div>
                                            <div class="col-6 col-md-3 mt-5 mt-md-0">
                                                <p>Christophe Lenior</p>
                                                <p>Vikram Gupta, Vivek Singhania</p>
                                                <p>Vivek Singhania, Manju Guatam</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ac-item">
                                <h5 class="ac-title">Marketing</h5>
                                <div class="ac-content">
                                    <div class="row px-0 px-md-0">
                                        <div class="col-3 col-md-1">
                                            <img class="rounded-circle d-inline-block" src="https://via.placeholder.com/60" alt="">
                                        </div>
                                        <div class="col-8 col-md-10">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, veniam blanditiis totam, quo magni ex commodi nobis incidunt eum soluta esse sunt mollitia tenetur nesciunt similique, libero nulla. Enim praesentium consectetur cum dolor nihil reprehenderit et quas nisi facere quam.
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 col-md-3">
                                            <p><strong>Cast availability:</strong></p>
                                            <p><strong>Sales pitch:</strong></p>
                                            <p><strong>Script Source:</strong></p>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <p>Lorem ipsum</p>
                                            <p>Lorem ipsum</p>
                                            <p>Lorem ipsum</p>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <p><strong>Website</strong></p>
                                            <p><strong>IMDb:</strong></p>
                                            <p><strong>Rotten Tomatoes:</strong></p>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <p>www.examplesite.com</p>
                                            <p>Lorem Ipsum</p>
                                            <p>Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 col-md-1">
                                            <p><strong>Log Line:</strong></p>
                                        </div>
                                        <div class="col-7 col-md-10">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus saepe suscipit dolores ab facilis neque repudiandae, itaque sequi architecto! Reprehenderit?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ac-item">
                                <h5 class="ac-title">Content Availability</h5>
                                <div class="ac-content">
                                    <p>As it floats around us in an eternity of bliss; and then, my friend, when
                                        darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and
                                        absorb its power, like the form of a beloved mistress</p>
                                    <p>I often think with longing, Oh, would I could describe these conceptions, could
                                        impress upon paper all that is living so full and warm within me, that it might
                                        be the mirror of my soul, as my soul is the mirror of the infinite God! O my
                                        friend — but it is too much for my strength — I sink under the weight of the
                                        splendour of these visions!”</p>
                                </div>
                            </div>
                            <div class="ac-item">
                                <h5 class="ac-title">Ratings</h5>
                                <div class="ac-content">
                                    <p>As it floats around us in an eternity of bliss; and then, my friend, when
                                        darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and
                                        absorb its power, like the form of a beloved mistress</p>
                                    <p>I often think with longing, Oh, would I could describe these conceptions, could
                                        impress upon paper all that is living so full and warm within me, that it might
                                        be the mirror of my soul, as my soul is the mirror of the infinite God! O my
                                        friend — but it is too much for my strength — I sink under the weight of the
                                        splendour of these visions!”</p>
                                </div>
                            </div>
                            <div class="ac-item">
                                <h5 class="ac-title">Financials</h5>
                                <div class="ac-content">
                                    <p>As it floats around us in an eternity of bliss; and then, my friend, when
                                        darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and
                                        absorb its power, like the form of a beloved mistress</p>
                                    <p>I often think with longing, Oh, would I could describe these conceptions, could
                                        impress upon paper all that is living so full and warm within me, that it might
                                        be the mirror of my soul, as my soul is the mirror of the infinite God! O my
                                        friend — but it is too much for my strength — I sink under the weight of the
                                        splendour of these visions!”</p>
                                </div>
                            </div>
                            <div class="ac-item">
                                <h5 class="ac-title">Chain of Title</h5>
                                <div class="ac-content">
                                    <p>As it floats around us in an eternity of bliss; and then, my friend, when
                                        darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and
                                        absorb its power, like the form of a beloved mistress</p>
                                    <p>I often think with longing, Oh, would I could describe these conceptions, could
                                        impress upon paper all that is living so full and warm within me, that it might
                                        be the mirror of my soul, as my soul is the mirror of the infinite God! O my
                                        friend — but it is too much for my strength — I sink under the weight of the
                                        splendour of these visions!”</p>
                                </div>
                            </div>
                            <div class="ac-item">
                                <h5 class="ac-title">Festivals & Awards</h5>
                                <div class="ac-content">
                                    <p>As it floats around us in an eternity of bliss; and then, my friend, when
                                        darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and
                                        absorb its power, like the form of a beloved mistress</p>
                                    <p>I often think with longing, Oh, would I could describe these conceptions, could
                                        impress upon paper all that is living so full and warm within me, that it might
                                        be the mirror of my soul, as my soul is the mirror of the infinite God! O my
                                        friend — but it is too much for my strength — I sink under the weight of the
                                        splendour of these visions!”</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row">
                        
                </div>


                <div class="row justify-content-center mt-5 d-none d-md-flex">
                    <div class="col-2">
                    </div>
                    <div class="col-2">
                    </div>
                    
                </div>
                <h4 class="mt-5 pt-5">News About The Movie</h4>
                <div class="row h-25 mt-4 justify-content-md-start justify-content-center">
                    <div class="col-9 col-lg-3">
                        <div class="card mt-3">
                            <img class="card-img-top project-card-img" src="https://via.placeholder.com/400x250" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet consequuntur iusto, modi laudantium necessitatibus dolorem! Ut atque nemo asperiores odio.</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 col-lg-3">
                        <div class="card mt-3">
                            <img class="card-img-top project-card-img" src="https://via.placeholder.com/400x250" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet consequuntur iusto, modi laudantium necessitatibus dolorem! Ut atque nemo asperiores odio.</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="mt-5 pt-5">More From This Creator</h4>
                <div class="carousel mb-0" data-items="4" data-dots="false" data-lightbox="gallery">
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="https://source.unsplash.com/user/erondu/300x300" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/300x300" class="btn btn-light btn-rounded">Zoom</a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="https://source.unsplash.com/user/erondu/300x300" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/300x300" class="btn btn-light btn-rounded">Zoom</a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="https://source.unsplash.com/user/erondu/300x300" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/300x300" class="btn btn-light btn-rounded">Zoom</a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="https://source.unsplash.com/user/erondu/300x300" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/300x300" class="btn btn-light btn-rounded">Zoom</a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="ihttps://via.placeholder.com/300" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/300x300" class="btn btn-light btn-rounded">Zoom</a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="https://source.unsplash.com/user/erondu/300x300" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/300x300" class="btn btn-light btn-rounded">Zoom</a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                </div>
                <h4 class="mt-5 pt-5">Fans of This Movie also liked</h4>
                <div class="carousel mb-0" data-items="4" data-dots="false" data-lightbox="gallery">
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="https://source.unsplash.com/user/erondu/300x300" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/300x300" class="btn btn-light btn-rounded">Zoom</a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="https://source.unsplash.com/user/erondu/300x300" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/300x300" class="btn btn-light btn-rounded">Zoom</a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="https://source.unsplash.com/user/erondu/300x300" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/300x300" class="btn btn-light btn-rounded">Zoom</a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="https://source.unsplash.com/user/erondu/300x300" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/300x300" class="btn btn-light btn-rounded">Zoom</a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="ihttps://via.placeholder.com/300" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/300x300" class="btn btn-light btn-rounded">Zoom</a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="https://source.unsplash.com/user/erondu/300x300" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="https://source.unsplash.com/user/erondu/300x300" class="btn btn-light btn-rounded">Zoom</a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                </div>

                <div class="modal fade" id="modal-3" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row mb20 justify-content-center align-items-center">
                                    <img src="https://via.placeholder.com/600" alt="">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-b" type="button">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                </div> 
            </div>



@endsection