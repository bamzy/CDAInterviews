<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fake CDA Interviews - {{$page->name}}</title>

    @if ($page->indexed) <meta name="robots" content="noindex"> @endif



    <meta name="description" content="FREE Ultimate Guide to CDA Interviews: Tips &amp; Proven Strategies to Help You Prepare &amp; Ace Your CDA Structured Interview. ">
    <title>FREE Ultimate Guide to CDA Interviews: Tips &amp; Proven Strategies to Help You Prepare &amp; Ace Your CDA Structured Interview. </title>

    <link re="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css">

    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>





    <meta name="{{$page->meta_name}}" content="{{$page->meta_description}}">
    <link rel="stylesheet" href="{{ URL::asset('css/simple-grid.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/mystyle.css') }}" />
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=235586069975455&amp;ev=NoScript" /></noscript><!-- End Google Analytics -->

</head>
<body>
<div id="wrapper">
    <header class="navbar navbar-default  navbar-fixed-top desktopScreenNavbar" role="navigation">
<span style="position: fixed;top:0;left:0;width: 100%">




<div id="titlelogo">
    <a href="http://cdainterview.com/">
        <div id="logo"><img src="http://cdainterview.com/rw_common/images/bemo-logo2.png" width="167" height="100" alt="Site logo"></div>
        </a>
    <h2></h2>
</div>
    <div id="nwrap">
    <div id="menuBtn"></div>
    <nav>
        <ul class="navigation">
            @if($page->name == "Home")<li id="current">
            @else <li> @endif

                <a href="/page/1" rel="self">Main</a>
            </li>
            @if($page->name == "Contacts")<li id="current">
            @else <li> @endif
                <a href="/page/2" rel="self" >Contact Us</a>
            </li>
        </ul>
    </nav>
    </div>
</span>
</header>
</div>
