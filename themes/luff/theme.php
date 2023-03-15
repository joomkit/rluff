<?php global $Wcms ?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<title>Rebecca Luff</title>-->
    <!--<meta name="description"-->
    <!--      content="Supporter of good people doing good stuff. Coach & Facilitator specialising in third sector and social enterprise.">-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!--<meta name="author" content="">-->
    
    	<!-- Search Engine Optimization (SEO) -->
		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="<?= $this->url() ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

		<!-- Website and page title -->
		<title>
			<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>

		</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<style>
    .sc-content h1.display-3 {
        font-size: 4.5rem;
        font-weight: 300;
    }

    .sc-content a.btn.btn-primary.btn-lg {
        display: inline-block;
        font-weight: normal;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        border: 1px solid transparent;
        color: #fff;
        background-color: #0275d8;
        border-color: #0275d8;
        padding: .75rem 1.25rem;
        font-size: 1.25rem;
        line-height: 1.333333;
        border-radius: .3rem;
    }
    .sc-content a.btn.btn-secondary {
        display: inline-block;
        padding: .375rem 1rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        border: 1px solid transparent;
        border-radius: .25rem;
        color: #373a3c;
        background-color: #fff;
        border-color: #ccc;
    }
</style>

    <!-- Feature detection -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/plugins/html5shiv.js"></script>
    <script src="js/plugins/respond.min.js"></script>
    <![endif]-->
    
    		<!-- Admin CSS -->
		<?= $Wcms->css() ?>
		
		<!-- Theme CSS -->
		
 

    <!-- Color styles -->
    
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/bootstrap.min.css') ?>">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/font-awesome.min.css') ?>">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/magnific-popup.css') ?>">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/main.css') ?>">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/colors/blue.css') ?>">
		</head>
<body>
    		<!-- Admin settings panel and alerts -->
		<?= $Wcms->settings() ?>

		<?= $Wcms->alerts() ?>
		
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="main-menu">
                <li><a class="scrollto" href="#page-welcome">Home</a></li>
                <li><a class="scrollto" href="#page-profile">Profile</a></li>
                <li class="hide "><a class="scrollto" href="#page-skills">Skills</a></li>
                <li class="hide"><a class="scrollto" href="#page-education">Education</a></li>
                <li class=""><a class="scrollto" href="#page-experience">Recommendations</a></li>
                <li class="hide"><a href="#page-portfolio">Portfolio</a></li>
                <li><a class="scrollto" href="#page-contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<!-- welcome begins -->
<section id="page-welcome" class="page-welcome ">
    <div>
        <ul class="slider-controls">
            <li><a id="vegas-next" class="next" href="index.html#"></a></li>
            <li><a id="vegas-prev" class="prev" href="index.html#"></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <header class="centered ">
                <h1>Rebecca Luff</h1>

                <p>SUPPORTER OF GOOD PEOPLE DOING GOOD STUFF</p>
            </header>
            <div class="social-icons ">
                <a href="https://twitter.com/RebeccaLuff" class="btn btn-round btn-clear btn-twitter"><i
                        class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/people/Rebecca-Luff-UnLtd/100008007224808"
                   class="btn btn-round btn-clear btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://www.dribbble.com/" class="hide btn btn-round btn-clear btn-dribbble"><i
                        class="fa fa-dribbble"></i></a>
                <a href="https://www.instagram.com/" class="hide btn btn-round btn-clear btn-instagram"><i
                        class="fa fa-instagram"></i></a>
                <a href="http://uk.linkedin.com/pub/rebecca-luff/3/8a3/ab1"
                   class="btn btn-round btn-clear btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
                <a href="https://www.pinterest.com/" class="hide btn btn-round btn-clear btn-pinterest"><i
                        class="fa fa-pinterest"></i></a>
                <a href="https://www.google.com/" class="hide btn btn-round btn-clear btn-google"><i
                        class="fa fa-google-plus"></i></a>

            </div>
            <a href="#page-contact" class="btn btn-default hire-me">Talk to me</a>
        </div>
    </div>
</section><!-- welcome ends -->
<!-- profile begins -->
<section id="page-profile" class="page-profile">
    <div class="container">
        <header class="section-header ">
            <div class="">
                <h2 class="section-title">Personal Profile</h2>
                <div class="spacer"></div>
                
            </div>
        </header>
        <div class="row">
            <div class="sc-content col-md-3 " style="padding-top:20px;">
                <div class="profile  " >
                    <img src="img/profile.png" alt="profile"/>
                </div>
            </div>
            <div class="col-md-9  sc-content" style="padding-top:20px;">
            <p>
            My vision is to see people embracing social and environmental change, making positive decisions to develop skills, knowledge and recognise how resourceful they are, whilst respecting others and the diversity of the world around them.</p>
<p>
I am an experienced leader, manager, problem-solver and lifelong-learner, who is deeply motivated to enable social change through my work. Many years in this work has given me deep insights into how we can effect this change by supporting individuals and groups, working with colleagues, partners and the wider ecosystem. I regularly reflect on my assumptions, knowledge and practice.</p>
                <p style="display:none">
                    My vision is to see people embracing change and making positive decisions to develop, whilst
                    respecting others and the diversity of the world around them.
                </p>
                <p style="display:none">
                    Many years’ experience working with people who want to make a difference in the world has allowed me
                    to develop deep skills of facilitation, coaching, enterprise & organisational development,
                    management practice, income generation and fundraising. I’m a working mum from London and Brighton.
                </p>
                <p style="display:none">>
                    Currently working with UnLtd, the Foundation for Social Entrepreneurs, I’m encouraging a culture of
                    social entrepreneurship in communities of place by working with inspirational individuals,
                    identifying their cheerleaders, connecting with and developing the support that surrounds them.</p>
                <p style="display:none">>I most enjoy working with communities, local food systems, urban farms, community gardens, and
                    providing a language bridge between funders, businesses and ordinary folk like me.
                </p>
                <div class="hide">
                    <p>People who work with me say they value my open, curious, friendly and solution-orientated
                        approach, which cultivates confidence and improves essential skills.</p>
                    <p>My experience of social enterprise, fundraising (Lottery, trusts & foundations, statutory,
                        corporate), charity management, organisational development, facilitation, mentoring and
                        coaching, puts me in a great position to support individuals and organisations at all levels -
                        particularly those who are likely to be managing incredible innovation combined with rapid and
                        constant change.
                    </p>
                    <p> Over the last 20 years I have most enjoyed my work with the local food, urban farming and
                        environmental sectors – involvement which I draw on to support individuals and organisations
                        from a variety of backgrounds. My vision is to see people embracing change and making positive
                        decisions to develop, whilst respecting the diversity of the world around them.
                    </p>
                    <p> People who work with me say they value my open, friendly and solution-orientated approach, which
                        cultivates confidence and improves essential skills.

                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- profile ends -->
<!-- skills begins -->
<section id="page-skills" class="  hide page-skills ">
    <div class="container">

        <header class="section-header">
            <h2 class="section-title"><span>Skills</span></h2>
            <div class="spacer"></div>
            <p class="section-subtitle">Here are some of my skills. </p>
        </header>
        <div class="row">
            <div class="col-md-2">
               <span class="chart" data-percent="100">
                      <span class="percent"></span>
                      <h3>Social Enterprise</h3>
               </span>
            </div>
            <div class="col-md-2 ">
               <span class="chart" data-percent="100">
                      <span class="percent"></span>
                      <h3>Social Entrepreneurship</h3>
               </span>
            </div>
            <div class="col-md-2">
               <span class="chart" data-percent="100">
                      <span class="percent"></span>
                       <h3>Community Development</h3>
               </span>
            </div>
            <div class="col-md-2">
               <span class="chart" data-percent="100">
                      <span class="percent"></span>
                      <h3>Stakeholder Engagment</h3>
               </span>
            </div>
            <div class="col-md-2">
               <span class="chart" data-percent="100">
                      <span class="percent"></span>
                      <h3>Workshop Facilitation</h3>
               </span>
            </div>
            <div class="col-md-2">
               <span class="chart" data-percent="85">
                      <span class="percent"></span>
                       <h3>Capacity bulding</h3>
               </span>
            </div>
        </div>
    </div>
</section><!-- skills ends -->
<!-- education begins -->
<section id="page-education" class="hide page-education">

    <div class="container">
        <header class="section-header">
            <h2 class="section-title"><span>Education</span></h2>
            <div class="spacer"></div>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, id iusto oportere mel. </p>
        </header>
        <div class="row">
            <div class="col-md-6">
                <article class="education">
                    <header>
                        <h3>Open University</h3>
                        <p>Business & Management - 2000 – 2005</p>
                    </header>
                    <p>Lorem ipsum dolor sit amet, ut pri munere perfecto sadipscing, nam habeo legere disputationi ea.
                        Vis nostrud intellegat eu, in vix erat abhorreant accommodare. Vix id elit albucius suavitate.
                        Eos mentitum forensibus et. Vix et quidam moderatius, cu vim quem tibique constituam.</p>
                </article>
            </div>
            <div class="col-md-6">
                <article class="education">
                    <header>
                        <h3>Rhode Island School of Design</h3>
                        <p>Associates of Fine Arts - <strong>Graduated:</strong> 2002</p>
                    </header>
                    <p>Lorem ipsum dolor sit amet, ut pri munere perfecto sadipscing, nam habeo legere disputationi ea.
                        Vis nostrud intellegat eu, in vix erat abhorreant accommodare. Vix id elit albucius suavitate.
                        Eos mentitum forensibus et. Vix et quidam moderatius, cu vim quem tibique constituam.</p>
                </article>
            </div>
        </div>
    </div>
</section><!-- education ends -->
<!-- experience begins -->
<section id="page-experience" class="page-experience">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title"><span>Recommendations</span></h2>
            <div class="spacer"></div>
            <p class="hide section-subtitle">Lorem ipsum dolor sit amet, id iusto oportere mel. </p>
        </header>
        <div class="row">
            <div class="col-md-4">
                <article class="experience">
                    <header>
                        <h3>Fieldworker</h3>
                        <p>
                            Federation of City Farms & Community Gardens</p>
                    </header>
                    <blockquote>
                        <p> Rebecca was recruited into our first group of Fieldworkers in 2000 to provide local advice
                            and specialist knowledge when required; Rebecca also helped refine the programme over the
                            years. Fieldworkers are respected as peers by those they advise, and in addition experts by
                            virtue of experience, knowledge and skills. The pre-requisites included generic community
                            development skills and experience, and ability to relate to the variety of volunteers,
                            staff, committees, funders and local authority staff and elected members she might
                            encounter; she exceeded in all these areas(!) and has since delivered a variety of advice.
                            This has ranged from practical livestock and volunteer safety, to fundraising and business
                            development assessment and planning. I could not recommend her more highly</p>
                        </p></blockquote>
                    <em>Ian Egginton-Metters<br>
                        Deputy CEO of Federation of City Farms & Community Gardens</em>
                </article>
            </div>
            <div class="col-md-4">
                <article class="experience">
                    <header>
                        <h3>Community Spaces Fund Facilitator</h3>
                        <p>
                            Groundwork UK</p>
                    </header>
                    <blockquote><p>Rebecca worked as a Community Group Facilitator on the Community Spaces programme
                        which was funded by Big Lottery Fund for which i was the Programme Manager. Rebecca carried out
                        this role professionally and independently to offer a range of support services to help groups
                        apply for the funding and deliver successful projects. Rebecca proved herself as an experienced
                        facilitator and was often called upon to support groups who were struggling the most. This was
                        often in the area of relationship breakdown either within the group or with partner agencies.
                        Rebecca was able to broker relationships to reach a conclusion acceptable to all parties</p>
                    </blockquote>
                    <em>Samantha Cox<br>
                        Programme Manager at Groundwork UK</em></article>
            </div>
            <div class="col-md-4">
                <article class="experience">
                    <header>
                        <h3>Consultant</h3>
                        <p>Business Community Partnership</p>
                    </header>
                    <blockquote><p>I worked extensively with Rebecca during my time at BCP, where I managed a support
                        network for charities, voluntary sector orgs and social enterprises. Rebecca's expertise was
                        most successfully positioned in supporting and advice for social enterprises. Working with
                        Rebecca was a fantastic experience both interms of her personable, flexible and warm nature and
                        her professionalism, extensive knowledge and commitment. The fact that much of the work we did
                        together was offered pro-bono to the chairites and social enterprises conveys very clearly that
                        Rebecca works highly successfully using both her head and her heart. I would not hesitate to
                        work with her again and again</p>
                    </blockquote>
                    <em>
                        Emma Turner<br>
                        Social Enterprise Network Manager
                    </em>
                </article>
            </div>
        </div>
    </div>
</section> <!-- timeline -->
<section id="page-experience2" class="hide page-experience2">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title"><span>Experience</span></h2>
            <div class="spacer"></div>
            <p class="section-subtitle">A little time line of past to present </p>
        </header>
        <ul class="timeline">
            <li>
                <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Social Entrepreneurship Manager</h4>
                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2014 – Present (3
                                months) South of England
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <p>Finding and supporting social entrepreneurs (Star People) in 'Big Local' areas. Promoting
                            social enterprise as a solution to community needs.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Fieldworker - Federation of City Farms & Community Gardens</h4>
                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>January 2000 – Present (14
                                years 10 months)
                            </small>
                        </p>

                    </div>
                    <div class="timeline-body">
                        <p>www.farmgarden.org.uk</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Trustee - Brighton Permaculture Trust
                        </h4>
                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2009 – 2014 (5 years)
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <p></p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Steering group - CSA Brighton & Hove</h4>
                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2010 – 2013 (3 years)
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <p>
                            Nonprofit Organization Management industry
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Community Spaces Fund Facilitator - Groundwork UK
                        </h4>
                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2008 – 2013 (5 years)
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <p>Nonprofit; 1001-5000 employees; Environmental Services industry</p>
                        <p>www.community-spaces.org.uk</p>
                    </div>
                </div>
            </li>

            <li class="timeline-inverted">
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Local Food Fund Advisor - Royal Society of Wildlife Trusts</h4>
                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2008 – 2012 (4 years)
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <p> Nonprofit; 11-50 employees; Nonprofit Organization Management industry</p>
                        <p>www.localfoodgrants.org</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Local Food Fund Independent Grant Assessor<br>Royal Society of
                            Wildlife Trusts
                        </h4>
                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2008 – 2012 (4 years)
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">


                        <p>Nonprofit; 11-50 employees; Nonprofit Organization Management industry</p>


                        <p>www.localfoodgrants.org</p>
                    </div>
                </div>
            </li>

            <li class="timeline-inverted">
                <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Consultant @ SEASON</h4>
                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2010 – March 2011 (1 year)
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <p> Joint development of CPD programme and peer review format for social enterprise advisers in
                            the South East</p>

                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Consultant @ Business Community Partnership
                        </h4>
                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2009 – June 2010 (1 year)
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <p> Nonprofit; 1-10 employees; Nonprofit Organization Management industry</p>
                        <p>One to one support sessions and 'Make It Happen' joint advice panel for emerging social
                            enterprises in Brighton.
                        </p>
                    </div>
                </div>
            </li>

            <li class="timeline-inverted">
                <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Associate @ Development Trusts Association</h4>
                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2008 – 2010 (2 years)
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <p>Public Company; 51-200 employees; Civic & Social Organization industry</p>

                    </div>
                </div>
            </li>

            <li>
                <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Development Manager - Spitalfields City Farm
                        </h4>
                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>
                                1999 – 2008 (9 years)
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <p> www.spitalfieldscityfarm.org
                        </p>
                    </div>
                </div>
            </li>


            <!-- end -->
            <li>
                <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois
                            divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi
                            eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia
                            nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss
                            quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                        <hr>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois
                            divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi
                            eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia
                            nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss
                            quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois
                            divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi
                            eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia
                            nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss
                            quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section><!-- experience ends -->
<!-- portfolio begins -->
<section id="page-portfolio" class="hide page-portfolio">
    <div class="container">
        <div class="row">
            <header class="section-header">
                <h2 class="section-title"><span>Portfolio</span></h2>
                <div class="spacer"></div>
                <p class="section-subtitle">Lorem ipsum dolor sit amet, id iusto oportere mel. </p>
            </header>

            <div id="grid-controls-wrapper">
                <ul class="nav nav-pills center-pills grid-controls">
                    <li class="active filter"><a href="javascript:void(0)" data-filter="*">All</a></li>
                    <li class="filter"><a href="javascript:void(0)" data-filter=".branding">Branding</a></li>
                    <li class="filter"><a href="javascript:void(0)" data-filter=".design">Design</a></li>
                    <li class="filter"><a href="javascript:void(0)" data-filter=".photography">Photography</a></li>
                    <li class="filter"><a href="javascript:void(0)" data-filter=".web">Website</a></li>
                </ul>
            </div>

            <div>
                <ul id="grid" class="grid-wrapper">
                    <li class="mix web">
                        <a href="img/portfolio/large/01.png">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/01.png" alt="">
                        </a></li>
                    <li class="mix design">
                        <a href="img/portfolio/large/02.png.jpeg">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/02.png.jpeg" alt=""></a></li>
                    <li class="mix design">
                        <a href="img/portfolio/large/03.png.jpeg">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/03.png.jpeg" alt=""></a></li>
                    <li class="mix web">
                        <a href="img/portfolio/large/04.png.jpeg">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/04.png.jpeg" alt=""></a></li>
                    <li class="mix branding">
                        <a href="img/portfolio/large/05.png">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/05.png" alt=""></a></li>
                    <li class="mix design">
                        <a href="img/portfolio/large/06.png">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/06.png" alt=""></a></li>
                    <li class="mix photography">
                        <a href="img/portfolio/large/07.png">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/07.png" alt=""></a></li>
                    <li class="mix photography">
                        <a href="img/portfolio/large/08.png">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/08.png" alt=""></a></li>
                    <li class="mix photography">
                        <a href="img/portfolio/large/09.png">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/09.png" alt=""></a></li>
                    <li class="mix web">
                        <a href="img/portfolio/large/10.jpg">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/10.jpg" alt=""></a></li>
                    <li class="mix design">
                        <a href="img/portfolio/large/11.jpg">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/11.jpg" alt=""></a></li>
                    <li class="mix design">
                        <a href="img/portfolio/large/12.png">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/12.png" alt=""></a></li>
                    <li class="mix design">
                        <a href="img/portfolio/large/13.png">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/13.png" alt=""></a></li>
                    <li class="mix design">
                        <a href="img/portfolio/large/14.png">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/14.png" alt=""></a></li>
                    <li class="mix branding">
                        <a href="img/portfolio/large/15.png">
                            <div class="overlay"><i class="fa fa-search"></i></div>
                            <img src="img/portfolio/small/15.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- portfolio ends -->
<!-- contact begins -->
<section id="page-contact" class="page-contact">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title"><span>Contact</span></h2>
            <div class="spacer"></div>
            <p class=" hide section-subtitle">
                I'm travelling a lot so please email or leave a message thru here ;)</p>
        </header>
        <div class="row">
            <div class="col-sm-5 contact-info">
                <h3>Contact Info</h3>
                <p><i class="fa fa-map-marker"></i> Brighton </p>
                <p><i class="fa fa-phone"></i> +44(0)7929 923943</p>
                <p><i class="fa fa-envelope-o"></i> hello@rebeccaluff.com</p>
            </div>

            <div class="col-sm-7">
                <h3>Get in Touch</h3>
                <form class="form-horizontal" id="contact-form">
                    <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                            <input type="text" name="name" id="name" placeholder="Your name"
                                   class="form-control input-lg ">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email Address</label>
                        <div class="controls">
                            <input type="text" name="email" id="email" placeholder="Your email address"
                                   class="form-control input-lg">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="message">Message</label>
                        <div class="controls">
                            <textarea name="message" id="message" rows="8" class="form-control input-lg"></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-default btn-lg btn-block">Submit Message</button>
                    </div>
                </form><!-- End contact-form -->
            </div>
        </div><!-- End row -->

    </div>
</section> <!-- contact ends -->


	<!-- Admin JavaScript. More JS libraries can be added below -->
		<?= $Wcms->js() ?>
		
		
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.easypiechart.min.js"></script>
<script src="js/jquery.vegas.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/main.js"></script>


</body>
</html>