<?php    
    include('version.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- meta info -->
        <meta charset="utf-8">
        <title>Nightingale - The tune of life, the tune of yours</title>
        <meta name="description" content="Nightingale is a community support project for the powerful media player Songbird. It is developed by a proud community and we are equally proud to bring you the most extensible and feature-rich media experience. Freaturing smart playlists, equalizer, Last.fm integration, customizeable look and hundreds of add-ons. Nightingale has it all.">
        <meta http-equiv="X-UA-Compatible" content="chrome=1"> 
        
        <!-- styles -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/style.css">
        <!--[if lt IE 9]>
            <link rel="stylesheet" href="css/legacy-ie.css">
            <script src="javascript/html5shiv.js"></script>
        <![endif]-->
        
        <!-- l10n -->
        <script src="javascript/l10n.js"></script>
        <link rel="resource" type="application/l10n" href="l10n/locales.ini" >
        
    </head>
    <body>
        <div  id="instructions">
            <section>
                <ol type="1">
                    <li data-l10n-id="ubuntuFirstStep">Open a terminal window</li>
                    <li><span data-l10n-id="ubuntuSecondStep">Type</span> <code>sudo add-apt-repository ppa:nightingaleteam/nightingale-release</code></li>
                    <li><span data-l10n-id="ubuntuThirdStep">Then</span> <code>sudo apt-get update</code></li>
                    <li><span data-l10n-id="ubuntuFourthStep">And finally</span> <code>sudo apt-get install nightingale</code></li>
                </ol>
            </section>
        </div>
        <div id="overlay">
        </div>
        <div id="ngalemainheadwrapper" class="wrapper">
            <header class="container">
                <nav role="navigation">
                    <button class="mobilenav" id="expandngalenav" data-l10n-id="menu">Menu</button>
                    <ul id="ngalenavlist">
                        <li class="current"><a href="http://getnightingale.com" data-l10n-id="home">Home</a></li>
                        <li><a href="http://blog.getnightingale.com" data-l10n-id="blog">Blog</a></li>
                        <li><a href="http://addons.getnightingale.com" data-l10n-id="add-ons">Add-ons</a></li>
                        <li><a href="http://forum.getnightingale.com" data-l10n-id="forum">Forum</a></li>
                        <li><a href="http://wiki.getnightingale.com" data-l10n-id="wiki">Wiki</a></li>
                        <li><a href="http://developers.getnightingale.com" data-l10n-id="developers">Developers</a></li>
                    </ul>
                </nav>
                <figure id="headerlogo" role="banner">
                    <div id="tabshadow" class="tab"></div>
                    <div id="birdtab" class="tab"></div>
                    <img src="images/nightingale_official_text_outline.png" alt="Nightingale - The tune of life, the tune of yours" data-l10n-id="headerlogo">
                </figure>
            </header>
        </div>
        <div class="wrapper" id="wrapper">
            <article id="main" class="container" role="main">
                <p>Nightingale <?php echo $version; ?> is available for multiple platforms. If yours isn't in the list, this doesn't mean, Nightingale isn't available for it. If you compiled Nightingale for an Operating System not listed below, let us know in the <a href="http://forum.getnightingale.com">forum</a>!</p>
                <ul id="downloadlist">
                    <?php foreach($download as $os => $properties) {
                            if($os == 'unknown') // exclude the default option...
                                continue;
                            echo '
                                <li '.($properties['popup'] ? 'data-popup':'data-url="'.$properties['url'].'"').' class="download">
                                    <img src="'.$properties[img].'" alt="'.$properties['osname'].' Icon"> <span class="os">'.$properties['osname'].' ('.$properties['arch'].'-bit)</span> <span class="package">'.$properties['package'].'</span>
                                </li>
                            ';
                          }
                    ?>
                    <section class="clear">
                        <h2>Compile Nightingale</h2>
                        <p>Link to source code & compiling instructions</p>
                    </section>
                </ul>
            </article>
        </div>
        <div class="wrapper" id="ngalemainfooterwrapper">
            <footer class="container">
                <section id="footerinfo" role="contentinfo">
                    <div id="leftfooter">
                        <img id="footergale" alt="white outlined nightingale project logo" src="images/footergale.png">
                        <select id="l10nselect">
                            <option selected value="en">English</option>
                        </select>
                    </div>
                    <p data-l10n-id="footerInfo" data-l10n-args='{"license":"GNU General Public License v2 (GPL v2)"}'>Nightingale is free!<br>
                       It is an Open Source projcet release under the terms of the GNU General Public License v2 (GPL v2).<br>
                       For more details, please read the <a href="">license information</a>.
                   </p>
                   <p>
                       <b data-l10n-id="footerSocial">Follow us!</b><br>
                       <a href="http://www.facebook.com/pages/Nightingale/210174055669535" title="Nightingale on Facebook" class="socialicon">f</a>&nbsp;<a href="https://plus.google.com/103377471329459083108/posts" title="Nightingale on Google+" class="socialicon">g</a>&nbsp;<a href="http://twitter.com/getnightingale" title="Nightingale on Twitter" class="socialicon">t</a>
                   </p> 
                </section>
                <nav class="footerlinks">
                    <b data-l10n-id="footerSupport">Support</b>
                    <ul>
                        <li><a href="http://forum.getnightingale.com" title="Nightingale Forum" data-l10n-id="footerForum">Community Forum</a></li>
                        <li><a href="http://blog.getnightingale.com" title="Development Blog" data-l10n-id="footerBlog">Official Blog</a></li>
                        <li><a href="http://addons.getnightingale.com" title="Add-ons for Nightingale" data-l10n-id="footerAdd-ons">Add-ons</a></li>
                        <li><a href="http://wiki.getnightingale.com" title="Nightingale Wiki" data-l10n-id="footerWiki">Wiki</a></li>
                        <li><a href="http://forum.getnightingale.com/forum-13.html" title="Help" id="forumhelplink" data-l10n-id="footerHelpForum">Help Forum</a></li>
                    </ul>
                </nav>
                <nav class="footerlinks">
                    <b data-l10n-id="footerContribute">Contribute</b>
                    <ul>
                        <li><a href="http://wiki.getnightingale.com" title="Documentation and Wiki" data-l10n-id="footerDeveloperCenter">Developer's Center</a></li>
                        <li><a href="http://wiki.getnightingale.com/doku.php?id=ngale-locales" title="Translate Nightingale" data-l10n-id="footerTranslate">Translate Nightingale</a></li>
                        <li><a href="https://github.com/nightingale-media-player" title="Source Code on GitHub" data-l10n-id="footerSource">Source Code</a></li>
                        <li><a href="https://github.com/nightingale-media-player/nightingale-addons/issues/" title="Nightingale Issues on GitHub" data-l10n-id="footerBugs">Report a Bug</a></li>
                        <!--<li><a href="http://getnightingale.com/donate" title="Donate to Nightingale" data-l10n-id="footerDonate">Donate</a></li>-->
                    </ul>
                </nav>
                <nav class="footerlinks">
                    <b data-l10n-id="footerRessources">Ressources</b>
                    <ul>
                        <li><a href="http://getnightingale.com/download.php" title="Download Nightingale" data-l10n-id="footerDownload">Download Nightingale</a></li>
                        <li><a href="http://getnightingale.com/features.php" title="Nightingale Features" data-l10n-id="footerFeatures">Features</a></li>
                        <li><a href="http://getnightingale.com/nightlies.php" title="Nightingale Nightlies" data-l10n-id="footerNightlies">Nightlies</a></li>
                    </ul>
                </nav>
            </footer>
        </div>
        
        <script type="text/javascript">
            window.onload = function() {
                var download = document.getElementsByClassName('download');
                for(var i = 0; i< download.length; i++) {
                    if(download[i].attributes['data-popup']) {
                        addEventListener(download[i],"click",function() {
                            show("overlay");
                            show("instructions");
                            addEventListener(document.getElementById("overlay"),"click",hideOverlay);
                            if(!('pointerEvents' in document.body.style))
                                addEventListener(document.getElementById("instructions"),"click",hideOverlay);
                        });
                    }
                    else {
                        addEventListener(download[i],"click",function(e) {
                            document.location = e.currentTarget.attributes['data-url'].value;
                        });
                    }
                }
                
                addEventListener(document.getElementById("expandngalenav"),"click",toggleNav);
                
                var l10n = document.webL10n , selectLoaded = false;
                
                l10n.ready(function() {
                    if(!selectLoaded) {
                        // add the languages to the dropdown
                        var langs = l10n.getLanguages();
                        var select = document.getElementById('l10nselect'), n;
                        for(var l = 0;l<langs.length;l++) {
                            if(typeof l !== 'function' && !containsLanguage(select.options,langs[l])) {
                                n = document.createElement("option");
                                n.text = l10n.get(langs[l]+'Name');
                                n.value = langs[l];
                                select.appendChild(n);
                            }
                        }
                        
                        // set current language
                        select.value = l10n.getLanguage(); // not working with IE<9
                        
                        // chane document language when selection is changed
                        select.onchange = function() {
                            l10n.setLanguage(this.value);
                        };
                        
                        selectLoaded = true;
                    }
                });
                
                //lazyload hiDPI images
                if(window.devicePixelRatio&&window.devicePixelRatio>1.3) {
                    var imgs = document.getElementsByTagName("img");
                    for(var i in imgs) {
                        if(imgs[i].src&&!imgs[i].src.match(/-hidpi/i)) {
                            imgs[i].src = imgs[i].src.replace(/(?!-hidpi)\.(png|jpg)$/i,function(str) {
                                return "-hidpi"+str;
                            });
                        }
                    }
                }
            };
            
            function containsLanguage(options,lang) {
                for(var o = 0; o<options.length;o++) {
                    if(options.item(o).value===lang) {
                        return true;
                    }
                }
                return false;
            }
            
            function hideOverlay() {
                hide("overlay");
                hide("instructions");
                removeEventListener(document.getElementById("overlay"),"click",hideOverlay);
                if(!('pointerEvents' in document.body.style))
                    removeEventListener(document.getElementById("instructions"),"click",hideOverlay);
            }
            
            function show(nodeId) {
                document.getElementById(nodeId).style.display = "block";
                document.getElementById(nodeId).style.visibility = "visible";
            }
            
            function hide(nodeId) {
                document.getElementById(nodeId).style.display = "";
                document.getElementById(nodeId).style.visibility = "";
            }
            function toggleNav() {
                if(document.getElementById("ngalenavlist").style.display=="block")
                    hide("ngalenavlist");
                else
                    show("ngalenavlist");
            }
            
            function addEventListener(obj,evt,func) {
                if(document.addEventListener) {
                    obj.addEventListener(evt,func,false);
                }
                else {
                    obj.attachEvent(evt,func);
                }
            }
            function removeEventListener(obj,evt,func) {
                if(document.removeEventListener) {
                    obj.removeEventListener(evt,func,false);
                }
                else {
                    obj.detachEvent(evt,func);
                }
            }
        </script>
    </body>
</html>