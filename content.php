
<?php
// vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
//---------------------------------------------------------
// CAPTAIN  SLOG
//---------------------------------------------------------
//
//	FILE:       content.php 
//	SYSTEM:     Ridolfis' new system 
//	            WAS.  He didn't want it so I am stealing it for myself!
//	AUTHOR:     Mark Addinall
//	DATE:       20/08/2014
//	SYNOPSIS:   Instead of burdening a simple little elegant system with a 
//              BIG FAT UGLY waste of time like JOOMLA!, DJANGO or WordPress,
//              we just stick in some content here that can be easily managed
//              with a TEXT EDITOR.
//
//
//------------+-------------------------------+------------
// DATE       |    CHANGE                     |    WHO
//------------+-------------------------------+------------
// 23/09/2014 | Fix Javascript audio bugs     | MA
//



// First the header conten

$logo       = "Mark Addinall";
$logo2      = "That&#8217;s IT!";

$header_message = <<<END
"This site represents addinall.org.  Much the same information as addinall.com.au, just a different type of web page.  This is one of the styles I have been working on.  Single page, responsive.  Built for mobile device use.  I hope you like it."
END;

// now before anyone starts screaming "USE AN ARRAY, OR AN OBJECT CONTAINING AN ARRAY, OR AN
// ARRAY OF OBJECTS",  I am not giving mu customer lessons in CompSci.  I want him, her or
// to easily understand that if you changed the text in paragraph one, it will reflect
// on the screen in paragraph one.  That is ALL I want this file to do.  So fuck off, weenies.

$header_paragraph = <<<END
Thanks for visiting my site.  Before we go anywhere, I have to make a point so as not to dissapoint.  <em>I DO NOT USE PHP MVC Frameworks.</em>  I know how they work, I have used all of them and I think that every last one of the clunkers are worse than rubbish.  So if you have a CodeIgniter, CakePHP, Symfony, Xii or Zend Framework task in mind, look ye elsewhere.  Seriously, the dozen or so projects I have worked on that tried to build an application using one of these systems all went the same way.  First three weeks were just <em>DANDY!</em>  Then when the application started to get complex, the design fell in a heap, leaving non-working, un-maintainable code. So no thanks.  I also <em>NO LONGER</em> do Java (love Javascript) because it is fat, old, slow and ugly.  I don&#8217;t do Haskell, Ruby, Scala, C# or F# for very similar reasons.  Now that we have covered what I <em>DON&#8217;T</em> do, let&#8217;s have a look at what I <em>DO</em> do! 
END;

// This is the END of the HEADER CONTENT

// These are the various HEADINGS in the system
// If you want to INCREASE the number of paragraphs, you need to understand index.php

$sidebar_header     = "Contact me!";
$heading_one        = "PHP OOD/OOP Development";
$heading_two        = "Modern Perl Development";
$heading_three      = "HTML5 - CSS3 - Javascript Development";
$heading_four       = "Heaps of OTHER STUFF!";

$footer_heading = "I hope you had a nice visit.  Come back soon.";

// This is the END of the HEADINGS
// If you want to get rid of one or more, make them an empty string = "";
// If you want to add more paragraphs, that is more complex.  Ask first!  ;-)


// This is the START of the SIDEBAR and MAIN CONTENT


$sidebar_paragraph = <<<END
The stuff down below is some music I have gathered to have a play with the HTML5 audio object.  With luck, the music <em>SHOULD</em> play on any device (if I have my code correct that is!).  I am supposed to cut some of my own tracks for here using the <em>BRAND NEW Gibson SG!!!!</em>  I will very shortly Darling Annie!!!
END;

$paragraph_one = <<<END
PHP has been my major weapon of choice for over a decade now.  It is a simple and elegant little language that is <em>MESSED UP</em> on a regular basis by people trying to implement MVC garbage.  When used properly PHP allows us to develop modular, reliable and easy to maintain source code for applications small and large. I would think that PHP represent around 75% of my total work to date. 
END;

$paragraph_two = <<<END
I <em>LOVE</em> Perl!  I had the opportunity to code a small system just recently for OzLotto that allowed me to use Modern Perl.  Perl is already fantastic.  The Moose Libraries just make it a whole heap (sic) better. I am using Modern Perl (and R) in some Bioinformatics studies I am currently undertaking.  Good fun! 
END;

$paragraph_three = <<<END
<p>Goes without saying really, but unless you spell it out, the people that infest the HR departments of the Yooniverse get all confused, twisted and bitter.  I am well experienced in HTML (of all flavours, I concentrate on HTML5 these days), CSS3, responsive Web design for mobile devices. I am having a lot of fun learning and exploring the CSS3 transitions and animations.  Some play code is <a href="http://www.addinall.net/boxmenu" target="_blank">HERE</a>.  Having a play and a think about how more interactive choices could be made in a UI design!</p>
    <p>Again I can not see how anyone could AVOID Javascript.  I have had several years coding both native Javascript and jQuery framework.  I enjoy them both. </p>
<p>Here are a couple of sites/apps I finished recently. <a href="http://www.crosscitydjs.com.au" target="_blank">Cross City DJs</a> and <a href="http://www.crosscitydjs.com.au/eportfolio" target="_blank">Same customer, newer page</a>.   
END;

$paragraph_four = <<<END
<p>
I have <em>ALWAYS</em> been the administrator of my development machines.  In a number of roles I have been hired purely as a systems administrator.  My skills include UNIX (Solaris, AIX, BSD, HP-UX), Linux (Red Hat, Debian, Fedora, UBUNTU, Centos), VMWare, VirtualBox, BASH, ksh, Perl, Python, monitoring, patch administration, backup implementation, operation, testing and recovery. 
</p>
<p>
Very experienced SQL coder in many flavours.  They are all pretty much a muchness.  I spent a good deal of time coding in ORACLE PL/SQL, most notably for the Australian Bureau of Statistics on the new (2006) implementation of the population demographic collection and analysis software. 
</p>
END;

$footer_paragraph = <<<END
<p>This is one page of two at the moment.  You may have seen my other page just now!  If not, it is a more traditional shape and contains a lot more links to my work.  <a href="http://www.addinall.com.au">addinall.com.au</a>. </p>
<p>
I completed degrees (post grad) in engineering and IT in the past. The last attendence in person being 1992.  So possibly no longer relevant.  Details in my <a href="../Mark_Addinall_cv_plain.pdf" target="_blank">LONG CV!</a>  Recently I have been making use of Web based distance education a great deal.  A link to some of my recent results can be found <a href="http://www.addinall.com.au/Recent_results/compile.pdf" target="_blank">HERE</a>.  I am committed so far to another two years consisting of Biology, Epidemiology and Education studies.  I have an idea that my IT future will probably be either in the Life Sciences or Education fields.  I am still interested in mainstream coding.  Looking at Bioinformatic and Educational software tells me that they need help; right now! The ability to be creative in a position very welcome. Open for offers! 
</p>
<p>When I am not coding or studying, I surf, play guitar and sometimes ride a pushie.  I drive a white truck!</p>
END;


// This next bit is in here because it is fucking ugly as, but really, really important.
// I would suggest that if you are the end customer, NOT to experiment with this
// lot.  Just assume it works and don't poke it.

$footer_legals = <<<END
&copy; 2014 <span class="license">Created by <a href="http://www.addinall.net/contact.php" target="_blank"><em>Mark Addinall</em></a>  Using Chameleon V5.0 Web Toolset.</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
END;


$footer_javascript = <<<END
    <script src="AudioPlayer/js/jquery.js"></script>

    <!-- HTML5 IE Enabling Script -->
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!-- CSS3 Media Queries -->
    <script src="js/respond.min.js"></script>


    <script src="AudioPlayer/js/audioplayer.js"></script>

    <script>$( function() { $( 'audio' ).audioPlayer(); } );</script>

END;


// here at the wanky things to say about yourself, music
//


$wank_1 = "dedicated";
$wank_2 = "enthusiastic";
$wank_3 = "creative";
$wank_4 = "energetic";
$wank_5 = "meticulous";
$wank_6 = "innovative";

?>
