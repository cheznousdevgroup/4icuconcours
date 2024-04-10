@extends('layouts.app')

@section('contenu')
    <div class="container">
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header"><a href="{{ route('home') }}" class="navbar-brand"><img
                            alt="uniRank World Universities Rankings & Reviews" src="{{ asset('i/uniRank-logo.png') }}"
                            width="150" height="30" srcset="/i/uniRank-logo-hr.png 1.5x"></a>
                    <button aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggle"
                        data-target="#navbar-main" data-toggle="collapse" type="button"><span class="icon-bar"></span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-main">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                id="University-Rankings">University Rankings</a>
                            <ul class="dropdown-menu">
                                <li><a href="#top-universities-world">Top 200 Universities in the World</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="#top-universities-north-america">Top 200 Universities in North
                                        America</a></li>
                                <li><a href="#top-universities-latin-america">Top 200 Universities in Latin
                                        America</a></li>
                                <li><a href="#top-universities-europe">Top 200 Universities in Europe</a></li>
                                <li><a href="#top-universities-africa">Top 200 Universities in Africa</a></li>
                                <li><a href="#top-universities-asia">Top 200 Universities in Asia</a></li>
                                <li><a href="#top-universities-oceania">Top 50 Universities in Oceania</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="#top-english-speaking-universities">Top 200 English-speaking
                                        Universities</a></li>
                                <li><a href="#top-spanish-speaking-universities">Top 200 Spanish-speaking
                                        Universities</a></li>
                                <li><a href="#top-arabic-speaking-universities">Top 200 Arabic-speaking
                                        Universities</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="#top-universities-facebook">Top 200 Universities on Facebook</a></li>
                                <li><a href="#top-universities-twitter">Top 200 Universities on Twitter</a></li>
                                <li><a href="#top-universities-instagram">Top 200 Universities on Instagram</a>
                                </li>
                                <li><a href="#top-universities-youtube">Top 200 Universities on YouTube</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="#top-religious-universities">Top religiously affiliated
                                        Universities</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                id="Universities-by-Country">Universities by Country</a>
                            <ul class="dropdown-menu">
                                <li><a href="#North-America">Universities in North America</a></li>
                                <li><a href="#Latin-America">Universities in Latin America</a></li>
                                <li><a href="#Europe">Universities in Europe</a></li>
                                <li><a href="#Africa">Universities in Africa</a></li>
                                <li><a href="#Asia">Universities in Asia</a></li>
                                <li><a href="#Oceania">Universities in Oceania</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                id="More">More</a>
                            <ul class="dropdown-menu">
                                <li><a href="#course-degrees">A-Z Guide to University Programs, Courses and
                                        Degrees</a></li>
                                <li><a href="#articles">University Guides and Articles</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="#facebook">Universities on Facebook</a></li>
                                <li><a href="#twitter">Universities on Twitter</a></li>
                                <li><a href="#instagram">Universities on Instagram</a></li>
                                <li><a href="#youtube">Universities on YouTube</a></li>
                                <li><a href="#tiktok">Universities on TikTok</a></li>
                                <li><a href="#linkedin">Universities on LinkedIn</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="#opencourseware">Free online courses by OEG Universities</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="#institutions">Higher Education-related Organizations</a></li>
                                <li><a href="#libraries">Directory of University Libraries</a></li>
                                <li><a href="#religious">Religiously Affiliated Universities</a></li>
                                <li><a href="#glossary">Higher Education Glossary</a></li>
                                <li><a href="#reviews">A-Z list of World Universities</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#search" rel="nofollow"><img alt="Site Search" src="i/site-search.png" width="24"
                                    height="24"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="panel panel-default" id="World-Universities-Search-Engine">
            <div class="panel-heading">
                <h1>World Universities Search Engine</h1>
            </div>
            <div class="panel-body">
                <div class="gcse-search"></div>
                <p class="text-center">search 13,900 universities worldwide</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-4">
                <div class="panel panel-default">
                    <div class="text-center" style="min-width:336px;min-height:280px;vertical-align: middle">

                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2473789519331063"
                            data-ad-slot="7868537437" data-ad-format="auto" data-full-width-responsive="true"></ins>

                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img src="i/homepage-universities-by-country-48x48.png" width="48" height="48"
                            alt="Universities by Country" class="pull-left">
                        <h2>Universities by Country</h2>
                    </div>
                    <div class="panel-body">
                        <p> Explore all uniRank university reviews and rankings by country; choose a continent to start:</p>
                        <div class="row">
                            <div class="col-sm-8 col-md-8"><img src="i/worldmap.png" class="center-block img-responsive"
                                    width="320" height="180" usemap="#WorldMap" alt="World Map">
                                <map name="WorldMap">
                                    <area shape="circle" coords="321,139,30" href="#Oceania"
                                        alt="Colleges and Universities in Oceania">
                                    <area shape="circle" coords="56,41,31" href="#North-America"
                                        alt="Colleges and Universities in North America">
                                    <area shape="circle" coords="178,110,44" href="#Africa"
                                        alt="Colleges and Universities in Africa">
                                    <area shape="circle" coords="274,59,59" href="#Asia"
                                        alt="Colleges and Universities in Asia">
                                    <area shape="circle" coords="88,127,33" href="#Latin-America"
                                        alt="Colleges and Universities in Latin America">
                                    <area shape="circle" coords="180,32,30" href="#Europe"
                                        alt="Colleges and Universities in Europe">
                                </map>
                            </div>
                            <div class="col-sm-4 col-md-4 text-center">
                                <div>
                                    <ul class="list-group">
                                        <li class="list-group-item"><a href="#North-America">North America </a>
                                        </li>
                                        <li class="list-group-item"><a href="#Latin-America">Latin America </a>
                                        </li>
                                        <li class="list-group-item"><a href="#Europe">Europe </a></li>
                                        <li class="list-group-item"><a href="#Africa">Africa </a></li>
                                        <li class="list-group-item"> <a href="#Asia">Asia </a></li>
                                        <li class="list-group-item"><a href="#Oceania">Oceania </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="#top-universities-world"><img
                                src="i/homepage-university-ranking-48x48.png" width="48" height="48"
                                alt="2023 University Rankings" class="pull-left"></a>
                        <h2>2024 World University Rankings</h2>
                    </div>
                    <div class="panel-body">
                        <div>
                            <p> Find out the top 200 universities in the world and each continent according to uniRank
                                (January edition):</p>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#top-universities-world"><strong>Top 200
                                            Universities in the World </strong></a>
                                    <hr>
                                </li>
                                <li class="list-group-item"><a href="#">Top 200
                                        Universities in North America </a></li>
                                <li class="list-group-item"><a href="#">Top 200
                                        Universities in Latin America </a></li>
                                <li class="list-group-item"><a href="#">Top 200
                                        Universities in Europe </a></li>
                                <li class="list-group-item"><a href="#">Top 200
                                        Universities in Africa </a></li>
                                <li class="list-group-item"><a href="#">Top 200
                                        Universities in Asia </a></li>
                                <li class="list-group-item"><a href="#">Top 50
                                        Universities in Oceania </a> </li>
                            </ul>
                            <br>
                            <p> Find out the top 200 universities for three major languages spoken in several countries:</p>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Top 200
                                        Universities in the English-speaking world </a></li>
                                <li class="list-group-item"> <a href="#">Top
                                        200 Universities in the Spanish-speaking world </a></li>
                                <li class="list-group-item"> <a href="#">Top 200
                                        Universities in the Arabic-speaking world </a> </li>
                            </ul>
                            <br>
                            <p> Find out the top higher education institutions officially affiliated with a religion and
                                denomination:</p>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Top
                                        religiously affiliated Universities in the world</a><br>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="#"><img src="i/homepage-online-courses-48x48.png"
                                width="48" height="48" alt="Free Online Courses" class="pull-left"></a>
                        <h2>Free Online Courses</h2>
                    </div>
                    <div class="panel-body">
                        <p>Discover a list of OEG members that support open education and offer free online courses:</p>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#">Open Education Global
                                    Universities</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><img src="i/universities-on-social-media-48x48.png" width="48"
                            height="48" alt="2023 University Rankings" class="pull-left">
                        <h2>Universities on Social Media</h2>
                    </div>
                    <div class="panel-body">
                        <div>
                            <p> Explore which universities have a social media presence and the top 200 most popular ones on
                                Facebook, Twitter, Instagram and YouTube:</p>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Universities on Facebook </a>
                                </li>
                                <li class="list-group-item"><small>&nbsp; <a href="#">Top 200 Universities on
                                            Facebook
                                        </a></small></li>
                                <li class="list-group-item"><a href="#">Universities on Twitter </a></li>
                                <li class="list-group-item"><small>&nbsp; <a href="#">Top 200 Universities on
                                            Twitter
                                        </a></small></li>
                                <li class="list-group-item"><a href="#">Universities on Instagram </a>
                                </li>
                                <li class="list-group-item"><small>&nbsp; <a href="#">Top 200 Universities on
                                            Instagram
                                        </a></small></li>
                                <li class="list-group-item"><a href="#">Universities on Youtube </a>
                                    <small><sup><span class="label label-primary">New</span></sup></small>
                                </li>
                                <li class="list-group-item"><small>&nbsp; <a href="#">Top 200 Universities on
                                            YouTube
                                        </a></small> <small><sup><span class="label label-primary">New</span></sup></small>
                                </li>
                                <li class="list-group-item"><a href="#">Universities on TikTok </a></li>
                                <li class="list-group-item"><a href="#">Universities on Linkedin </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading"><a href="#"><img
                        src="i/A-Z-guide-university-programs-courses-degrees-48X48.png" width="48" height="48"
                        alt="A-Z Guide to University Programs, Courses and Degrees" class="pull-left"></a>
                <h2>A-Z Guide to Programs Courses and Degrees <small><sup><span
                                class="label label-primary">New</span></sup></small></h2>
            </div>
            <div class="panel-body">
                <p>Discover our A-Z Guide to University Programs, Courses and Degrees, a comprehensive resource for
                    exploring and understanding over 8,100 most popular course degrees</p>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">A-Z Guide to University Programs,
                            Courses and Degrees</a></li>
                </ul>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><a href="articles/index.html"><img
                        src="i/homepage-higher-education-articles-48x48.png" width="48" height="48"
                        alt="University Guides and Articles" class="pull-left"></a>
                <h2>University Guides and Articles</h2>
            </div>
            <div class="panel-body">
                <p>Discover a list of higher education related articles written by the uniRank Team with the help of Uncle
                    Albert that can explore various aspects of this critical field, including the concept and importance of
                    higher education, insights into the student experience and strategies for achieving academic and career
                    success.</p>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">University Guides and Articles</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="panel panel-default" style="min-height:304px">
                    <div class="panel-heading"><img src="i/homepage-popular-rankings-48x48.png" width="48"
                            height="48" alt="2023 Popular University Rankings" class="pull-left">
                        <h2>Popular Rankings</h2>
                    </div>
                    <div class="panel-body">
                        <div>
                            <p> Find out our most visited University rankings:</p>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Top Universities in the US </a></li>
                                <li class="list-group-item"><a href="#">Top Universities in the UK </a></li>
                                <li class="list-group-item"><a href="#">Top Universities in Canada </a></li>
                                <li class="list-group-item"><a href="#">Top Universities in Australia </a>
                                </li>
                                <li class="list-group-item"><a href="#">Top Universities in Ireland </a></li>
                                <li class="list-group-item"><a href="#">Top Universities in India </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="panel panel-default">
                    <div class="text-center" style="min-width:336px;min-height:280px;vertical-align: middle">
                        
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="panel panel-default" style="min-height:304px">
                    <div class="panel-heading"><img src="i/homepage-other-university-lists-48x48.png" width="48"
                            height="48" alt="2023 University Rankings" class="pull-left">
                        <h2>Other Uni Lists</h2>
                    </div>
                    <div class="panel-body">
                        <div>
                            <p> Explore some of our other exclusive higher education related resources:</p>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Higher Education-related
                                        Organizations </a></li>
                                <li class="list-group-item"><a href="#">Directory of University
                                        Libraries </a></li>
                                <li class="list-group-item"><a href="#">Religiously Affiliated
                                        Universities </a></li>
                                <li class="list-group-item"><a href="#">Higher Education Glossary </a>
                                </li>
                                <li class="list-group-item"><a href="#">A-Z list of Universities </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
