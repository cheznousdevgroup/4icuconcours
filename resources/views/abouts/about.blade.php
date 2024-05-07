@extends('layouts.app')
@section('title')
    About
@endsection

@section('contenu')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('i/uniRank-logo.png') }}" width="150" height="30" alt="uniRank Logo">
        </a>
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

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </div>
    </div>
</nav>

    <ol class="breadcrumb small" itemscope>
        <li itemprop="itemListElement" itemscope> <a itemprop="item" href="{{ Route('home') }}"><span
                    itemprop="name">uniRank</span></a>
            <meta itemprop="position" content="1">
        </li>
        <li class="active" itemprop="itemListElement" itemscope"><a href="{{ Route('about1') }}" itemprop="item"><span
                    itemprop="name">About us</span></a>
            <meta itemprop="position" content="2">
        </li>
    </ol>
    <div class="panel panel-default">
        <div class="panel-body">
            <h1 class="text-center">About us</h1>
            <h2>Overview</h2>
            <hr>
            <p>Established in 2005, <strong>uniRank</strong><sup>&trade;</sup> is the leading international higher education
                portal and search engine featuring reviews and rankings of over 13,900 officially recognized Universities
                and Colleges in 200 countries.</p>
            <p>&nbsp;</p>
            <h2>Higher Education Institutions</h2>
            <hr>
            <h3>What we include</h3>
            <p><strong>uniRank</strong><sup>&trade;</sup> currently includes worldwide higher education institutions that
                satisfy the following requirements:<br>
            </p>
            <p>
            <ul>
                <li>are officially <strong>recognized</strong>, <strong>licensed</strong> and/or <strong>accredited</strong>
                    by national or regional bodies such as Ministries of Higher Education or government-recognized
                    accrediting organizations.</li>
                <li>are officially licensed or authorized to grant at least <strong>three-year undergraduate
                        degrees</strong> (Bachelor's Degrees) and/or <strong>postgraduate degrees</strong> (Master's and
                    Doctoral Degrees).</li>
                <li>provide higher education courses mainly in a traditional <strong>face-to-face learning format</strong>
                    delivered through on-site facilities.</li>
            </ul>
            All University and College profiles are included and updated free of charge.
            </p>
            <br>
            <h3>What we do not include</h3>
            <p><strong>uniRank</strong><sup>&trade;</sup> currently does not include:</p>
            <ul>
                <li>two-year degree-granting institutions such as community colleges, vocational colleges, training
                    colleges, etc. </li>
                <li>distance learning institutions.</li>
                <li>niche higher education institutions such as seminaries and other theological higher-education
                    institutions, military or law enforcement higher-education institutions.</li>
                <li>any other higher education institution that does not satisfy the above inclusion criteria and
                    requirements.</li>
            </ul>
            For quality reasons, <strong>uniRank</strong><sup>&trade;</sup> does not include University affiliate links
            within the ranking and/or portal listings.
            <p>&nbsp;</p>
            <h2><a name="ranking"></a>University Ranking Methodology</h2>
            <hr>
            <p>Universities are ranked by our exclusive <strong>uniRank University Ranking</strong><sup>&trade;</sup> which
                is listed in the <strong><a href="#" target="_blank">IREG Observatory on Academic Ranking and
                        Excellence</a></strong>.<br>
                <br>
                <img src="../i/ireg_logo_2013.jpg" class="center-block" width="200" height="200"
                    alt="IREG Observatory on Academic Ranking and Excellence Logo" /><br>
                Our web-based, non-academic University ranking has been published since <a href="#" target="_blank"
                    rel="nofollow noopener">May 2005</a>. Since its inception, the ranking methodology has been
                periodically fine-tuned in order to provide better ranking results and/or to adapt to changes in the
                panorama of available web intelligence sources.
            </p>
            <br>
            <h3>University Ranking components and algorithm</h3>
            <p>The current <strong>uniRank University Ranking</strong><sup>&trade;</sup> is based upon an algorithm
                including 4 unbiased and independent web metrics extracted from 3 different web intelligence sources:</p>
            <ol>
                <li> <a href="#" target="_blank" rel="nofollow noopener">Majestic Referring Domains with a minimum
                        Trust Flow (55%)</a> </li>
                <li> <a href="#" target="_blank" rel="nofollow noopener">Similarweb Global Rank (35%)</a> </li>
                <li> <a href="#" target="_blank" rel="nofollow noopener">Moz
                        Domain Authority (5%)</a> </li>
                <li> <a href="#" target="_blank" rel="nofollow noopener">Majestic Trust Flow (5%)</a> </li>
            </ol>
            <div class="container"><img src="../i/4icu-web-ranking.png" alt="uniRank University Ranking" width="600" height="600"
                    class="center-block img-responsive" /> </div>
            <p>Since the public availability of Google PageRank has been discontinued in April 2016, the Moz Domain
                Authority has been introduced in July 2016 as the most similar web metric to replace it.<br>
                In January 2017 we have reversed from the Majestic total count of referring subnets to the Majestic number
                of referring domains which satisfies a <strong>minimum threshold of Majestic Trust Flow</strong>. This newly
                introduced filtering process of the Majestic referring domains based on their Trust Flow provides a better
                understanding of the number of <strong>quality referring domains</strong> each University root domain has;
                it also overcomes situations where the number of referring links and referring domains is artificially
                inflated and manipulated through unnatural or paid links schemes, which are strongly discouraged and a
                violation of our and Google's guidelines.<br>
                The Similarweb Global Rank has been introduced in January 2017 to verify, complement and enhance the data
                offered by the Alexa Global Rank. Unfortunately, in May 2022 Alexa ceased its service and Similarweb has
                become the only source of estimated traffic ranking from the July 2022 ranking edition.</p>
            <br>
            <h3>University Ranking validity and reliability</h3>
            <p>University rankings, academic or not, are not infallible and should not be taken as the only criteria to
                select a University where to study. University ranking methodologies can be prone to errors and bias at
                different stages starting from the selection of the ranking criteria and their weights in the final
                algorithm, the chosen sources of data and their availability/reliability, the process of data collection and
                so on. The <strong>uniRank University Ranking</strong>, in this regard, has limitations when it comes to
                appraising and ranking higher education institutions in countries with limited internet access and
                penetration rate.</p>
            <br>
            <h3>University Ranking process</h3>
            <p>Web metrics data are collected in the same week to minimize temporal fluctuations and maximize comparability.
                A pre-computational filter is adopted to detect <a href="#" target="_blank"
                    rel="nofollow noopener">outliers</a> in the raw data. Further investigation and a
                review of the Similarweb Global Rank data are carried out for universities adopting a <a href="#"
                    target="_blank" rel="nofollow noopener">subdomain</a>
                (<u>highly not recommended</u>) as their official institutional home page.<br>
                Once outliers are detected and subdomains data reviewed and adjusted, web metrics data are normalized to a
                scale of 0 to 100 taking into consideration the logarithmic nature in which the Moz Domain Authority and the
                Similarweb Global Rank are expressed. The normalized values are aggregated based on a weighted average
                algorithm which generates the final score and web ranking.</p>
            <br>
            <h3>University Ranking algorithm disclosure</h3>
            <p>The University Ranking algorithm is not disclosed for copyright reasons and to minimize potential attempts of
                manipulation from unethical University webmasters in order to achieve a better rank. The same philosophy is
                adopted by Google with regard to its search engine ranking algorithm. Being the <strong>uniRank University
                    Ranking</strong><sup>&trade;</sup> a non-academic University ranking, the need for ranking methodology
                transparency and the ability of testing and reproducing the results, as suggested by the <a href="#"
                    target="_blank" rel="nofollow noopener">Berlin Principles on Ranking of Higher Education
                    Institutions</a>, is less stringent than for academic University rankings.</p>
            <br>
            <h3>Unranked Universities</h3>
            <p>Some higher education institutions are not ranked and listed at the bottom of each country listing for one of
                the following reasons:
            <ul>
                <li>the University does not have an official website.</li>
                <li>the University's official domain has not been reachable for an extended period at the time of the
                    ranking process.</li>
                <li>the University adopts an internal URL as its official institutional website. The adoption of URLs, as
                    opposed to root domains or subdomains, is highly not recommended.</li>
                <li>the University's official website is hosted by wordpress.com, blogspot.com or other global free hosting
                    services (ex. unitaldili.wordpress.com).</li>
            </ul>
            </p>
            <br>
            <h3>University Ranking aim</h3>
            <p>The <strong>uniRank University Ranking</strong><sup>&trade;</sup> aims to provide an approximate global
                ranking of world Universities and Colleges based on their web presence and popularity in terms of estimated
                traffic, domain trust/authority and quality link popularity. Our aim is also to provide a non-academic
                League Table of the top Universities in the world based on valid, unbiased and non-influenceable web metrics
                provided by independent web intelligence sources rather than data submitted by the Universities themselves.
                This is specially intended to help international students and academic staff to understand how popular a
                specific higher education institution is in a foreign country.<br>
                We do not claim - by any means - to rank higher education organizations or their programs, by the quality of
                education or level of academic services provided. The <strong>uniRank University
                    Ranking</strong><sup>&trade;</sup> is not an academic ranking and, therefore, should not be adopted as
                the main criteria for selecting a higher education organization where to enroll and study.</p>
            <br>
            <h3>How to publish your University rank</h3>
            <p>To add your <strong>uniRank University Rank</strong><sup>&trade;</sup> to your institutional website you can
                find some embedded HTML code when clicking on the <em class="text-center">share<span
                        class="caret"></span></em> link under your University Rank. By doing so your rank will be
                automatically updated once we publish the new university rankings twice a year, in January and July.</p>
            <br>
            <h3>Social Media University rankings</h3>
            <p>Since 2018 we publish four new university rankings aimed at appraising the social media presence and
                popularity of higher education institutions on the four main social platforms:</p>
            <ul>
                <li><a href="#">uniRank Facebook University Ranking<sup>&trade;</sup></a></li>
                <li><a href="#">uniRank Twitter University Ranking<sup>&trade;</sup></a></li>
                <li><a href="#">uniRank Instagram University Ranking<sup>&trade;</sup></a></li>
                <li><a href="#">uniRank YouTube University Ranking<sup>&trade;</sup></a></li>
            </ul>
            <p>&nbsp;</p>
            <h2>Geographical classification</h2>
            <hr>
            <p><strong>uniRank</strong><sup>&trade;</sup> adopts the United Nations geographical classification of
                Geographic Regions as shown in the webpage &quot;<a href="#" target="_blank"
                    rel="nofollow noopener">Standard country or area codes for statistical use (M49)</a>&quot; (under the
                Geographic Regions section) published by the United Nations Statistics Division. For this reason countries
                like Turkey and Cyprus are included in the Asian geographical area even if, from a political point of view,
                they might better fit under the European one. As explained by the United Nations Statistics Division, the
                assignment of countries or areas to specific geographic regions is for statistical convenience and does not
                imply any assumption regarding political or other affiliation of countries or territories by the United
                Nations; uniRank embrace the same methodology and philosophy.</p>
            <p>&nbsp;</p>
            <h2>University Information Updates</h2>
            <hr>
            <p>Data and information are added or updated on a monthly basis. The <strong>uniRank University
                    Ranking</strong><sup>&trade;</sup> is updated and published twice a year, in January and July. You can
                follow us on <a href="#" target="_blank" rel="noopener">Facebook</a>
                and <a href="#" target="_blank" rel="noopener">Twitter</a> to receive
                notifications on when the new University rankings are published.<br>
                All University and College profiles are included and updated at no cost. A special thanks go to all
                Universities and Colleges that are participating in this project and helping us maintain our database
                up-to-date.</p>
            <p>&nbsp;</p>
            <h2>How to add a University</h2>
            <hr>
            <p>To submit a missing accredited higher education institution that satisfies the criteria and requirements
                explained above, please find the appropriate country listing in the portal and click on <a href="#">
                    <button type="button" class="btn btn-secondary btn-sm">Add University</button>
                </a> at the bottom right of the University list. Please read the <strong>uniRank</strong><sup>&trade;</sup>
                selection criteria above (<em>What we include</em> section) before submitting a missing University.</p>
            <p>&nbsp;</p>
            <h2>Support and Follow us</h2>
            <hr>
            <p>Useful website? You can support us by:</p><br>
            <ul>
                <li><a href="linktous.html" rel="nofollow">adding a link to us</a></li>
                <li><a href="err.html" rel="nofollow">reporting errors</a></li>
                <li>following us on <a href="#" target="_blank" rel="noopener">Facebook</a> and <a href="#"
                        target="_blank" rel="noopener">Twitter</a></li>
                <li>recommending it to your friends and colleagues</li>
            </ul>
            <p>&nbsp;</p>
            <h2>Contact us</h2>
            <hr>
            <p><a href="#" rel="nofollow">Click here</a> to contact us. Please note that we are not able
                to provide guidance counseling or recommendations on Universities.<br>
                Alternatively, you can mail us at:</p>
            <address>
                15 Renown Street<br>
                Canada Bay New South Wales 2046<br>
                Australia
            </address>
            <p>&nbsp;</p>
            <h2>Privacy</h2>
            <hr>
            <p>We care about your privacy. <a href="#" rel="nofollow">Click here</a> to read our
                Privacy Statement.</p>
            <p>&nbsp;</p>
            <h2>Terms of Service</h2>
            <hr>
            <p>To learn about the uniRank Terms of Service or for any request of republishing uniRank's copyrighted content
                please visit our <a href="#" rel="nofollow">Terms of Service</a> page.</p>
            <p>&nbsp;</p>
        </div>
    </div>
    </div>
@endsection
