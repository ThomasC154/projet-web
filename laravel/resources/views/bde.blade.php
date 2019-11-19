@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<section class="banner-bg">
    <section class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="carousel" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Images/png1.jpg" alt="Image" width="500" height="400">
                        </div>
                        <div class="carousel-item">
                            <img src="Images/png2.jpg" alt="Image" width="500" height="400">
                        </div>
                        <div class="carousel-item">
                            <img src="Images/png3.jpg" alt="Image" width="2200" height="400">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#carousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-12 text-center">
            <a href="events"><button id="singlebutton" name="singlebutton"
                    class="btn btn-primary btn-lg">Évenements</button></a>
        </div>
    </section>
    
    <section id="section2">
        <div class="sizer">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QjVk85GOiFM"
                    allowfullscreen></iframe>
            </div>
        </div>
        <p id="text-vid">Le DBE du Cesi de Nice est une association à but non lucratif qui a pour<br> objectif de
            promouvoir la vie étudiante à Nice et au sein de son campus.</p>
    </section>
</section>
@endsection