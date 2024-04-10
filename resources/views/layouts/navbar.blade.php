@section('navbar')
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
@endsection