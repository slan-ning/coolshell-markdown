<!doctype html>

<html class="no-js" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<script src="//a.fsdn.com/con/js/min/sf.sandiego-cmp-top.js?1684172736"></script>
<script type="text/javascript">
bizx.cmp.ifConsent('', ['all'], function () {
    var bt = 'https://btloader.com/tag?o=5098683085881344&upapi=true';
    bizx.cmp.embedScript(bt, true);
    window.addEventListener('AcceptableAdsInit', function (e) {
      if(e.detail) {
        console.log('acceptable ads on');
        SF.Ads.acceptable_ads_active = true;
      } else {
        console.log('acceptable ads off');
        SF.Ads.acceptable_ads_active = false;
      }
    });
});
</script>
<script>
            /*global unescape, window, SF*/
            // Setup our namespace
            if (!window.SF) { window.SF = {}; }
            if (!window.net) { window.net = {}; }
            if (!window.net.sf) { window.net.sf = {}; }
            SF.Ads = {};
            SF.cdn = '//a.fsdn.com/con';
            SF.deploy_time = '1684172736';
            SF.sandiego = true;
            SF.sandiego_chrome = true;
            SF.variant = 'sf';
            
            SF.Breakpoints = {
              small: 0,
              medium: 640,
              leaderboard: 743,
              billboard: 985,
              large: 1053,
              xlarge: 1295,
              xxlarge: 1366
            };
            SF.initial_breakpoints_visible = {};
            for (var bp in SF.Breakpoints) {
                if (!SF.Breakpoints.hasOwnProperty(bp)) {
                    continue;
                }
                SF.initial_breakpoints_visible[bp] = !window.matchMedia || window.matchMedia('(min-width: ' + SF.Breakpoints[bp] + 'px)').matches;
            }
            
                
                SF.Ads.viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
                SF.Ads.viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
            
        </script><script>

            SF.Ads.prebidOptions = {
                showIndicators: false,
                analytics: false,
                timeout: 650,
                timeouts_by_bids: {500: 5, 650: 0},
                pbjsConfig: {userSync: { filterSettings: { iframe: {
                        filter: 'include',
                        bidders: ['pubmatic', 'smartadserver']
                    } } },
                },
                };

            SF.Ads.prebidUnits = [];if (SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{"bidder":"sovrn","params":{"tagid":"364663"}},
                            {"bidder":"rubicon","params":{"zoneId":"485994","sizes":[2],"position":"atf","accountId":"15680","siteId":"103240"}},
                            {"bidder":"appnexus","params":{"placementId":9265083}},
                            {"bidder":"sharethrough","params":{"pkey":"2aN5a2AvhiDV1VV2VMCHUj3h"}},
                            {"bidder":"pubmatic","params":{"adSlot":"4845071","publisherId":"162538"}},
                            {"bidder":"smartadserver","params":{"networkId":4559,"siteId":575816,"pageId":1743018,"formatId":119583}},
                            ],
                    code: 'div-gpt-ad-1393435113148-0',
                    tag: 'SF_Directory_728x90_A',
                    mediaTypes: { banner: { sizes: [] } }
                }; 
                if (SF.Ads.viewportWidth >= 728 && SF.Ads.viewportHeight >= 200){
                    thisUnit.mediaTypes.banner.sizes = [[728,90]];
                } 
                if (SF.Ads.viewportWidth >= 970 && SF.Ads.viewportHeight >= 901){
                    thisUnit.mediaTypes.banner.sizes = [[728,90],[970,250]];
                }

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (!SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{"bidder":"sovrn","params":{"tagid":"542316"}},
                            {"bidder":"rubicon","params":{"zoneId":"610848","sizes":[43],"position":"atf","accountId":"15680","siteId":"103240"}},
                            {"bidder":"appnexus","params":{"placementId":12559081}},
                            {"bidder":"sharethrough","params":{"pkey":"BMaGlI19W57KKQXdp5OJTkmO"}},
                            {"bidder":"pubmatic","params":{"adSlot":"4845070","publisherId":"162538"}},
                            {"bidder":"smartadserver","params":{"networkId":4559,"siteId":575816,"pageId":1743018,"formatId":119583}},
                            ],
                    code: 'div-gpt-ad-1512154506943-0',
                    tag: 'SF_Mobile_320x50_A',
                    mediaTypes: { banner: { sizes: [[320, 50]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{"bidder":"sovrn","params":{"tagid":"364664"}},
                            {"bidder":"rubicon","params":{"zoneId":"486006","sizes":[2],"accountId":"15680","siteId":"103240"}},
                            {"bidder":"appnexus","params":{"placementId":9265087}},
                            {"bidder":"sharethrough","params":{"pkey":"gqZfz7DFwDB3lFn5TbBeyNIU"}},
                            {"bidder":"pubmatic","params":{"adSlot":"4845072","publisherId":"162538"}},
                            {"bidder":"smartadserver","params":{"networkId":4559,"siteId":575816,"pageId":1743018,"formatId":119583}},
                            ],
                    code: 'div-gpt-ad-1392148208790-0',
                    tag: 'SF_Directory_728x90_B',
                    mediaTypes: { banner: { sizes: [] } }
                }; 
                if (SF.Ads.viewportWidth >= 728 && SF.Ads.viewportHeight >= 200){
                    thisUnit.mediaTypes.banner.sizes = [[728,90]];
                } 
                if (SF.Ads.viewportWidth >= 1280 && SF.Ads.viewportHeight >= 200){
                    thisUnit.mediaTypes.banner.sizes = [[728,90],[970,250]];
                }

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (!SF.initial_breakpoints_visible.large) {
                var thisUnit =  {
                    bids: [{"bidder":"sovrn","params":{"tagid":"542317"}},
                            {"bidder":"rubicon","params":{"zoneId":"798260","sizes":[43],"accountId":"15680","siteId":"103240"}},
                            {"bidder":"appnexus","params":{"placementId":12559084}},
                            {"bidder":"sharethrough","params":{"pkey":"SXwmmIIkcmWjzHzA894YxcyC"}},
                            {"bidder":"pubmatic","params":{"adSlot":"4845074","publisherId":"162538"}},
                            {"bidder":"smartadserver","params":{"networkId":4559,"siteId":575816,"pageId":1743018,"formatId":119583}},
                            ],
                    code: 'div-gpt-ad-1512154653435-0',
                    tag: 'SF_Mobile_Multi_B',
                    mediaTypes: { banner: { sizes: [[300, 50], [300, 250], [320, 50], [320, 100]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (!SF.initial_breakpoints_visible.large) {
                var thisUnit =  {
                    bids: [{"bidder":"sovrn","params":{"tagid":"542318"}},
                            {"bidder":"rubicon","params":{"zoneId":"798260","sizes":[43],"accountId":"15680","siteId":"103240"}},
                            {"bidder":"appnexus","params":{"placementId":12559087}},
                            {"bidder":"sharethrough","params":{"pkey":"fHzpAnRYW6tF9CT8ux9oAtwB"}},
                            {"bidder":"pubmatic","params":{"adSlot":"4845075","publisherId":"162538"}},
                            {"bidder":"smartadserver","params":{"networkId":4559,"siteId":575816,"pageId":1743018,"formatId":119583}},
                            ],
                    code: 'div-gpt-ad-1512154755912-0',
                    tag: 'SF_Mobile_Multi_C',
                    mediaTypes: { banner: { sizes: [[300, 50], [300, 250], [320, 50], [320, 100]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            SF.Ads.prebidAdjustments = {"bidder_deflations":{"aardvark":1,"aol":0.98,"appnexus":1.05,"brealtime":0.98,"districtm":1.04,"districtmdmx":1.08,"emxdigital":1,"indexex#hange":0.98,"indexexchange":0.95,"komoona":0.92,"oftmedia":0.9,"onefiftytwo":0.9,"pubmatic":1,"pulsepoint":0.93,"rhythmone":0.85,"rubicon":1.3,"rubiconlite":1,"sharethrough":1.03,"sovrn":1.05,"springserve":0.001},"inflation":1,"floor":0.02};
        </script>
<script id="pbjs_script" data-dom="https://d3tglifpd8whs6.cloudfront.net" src="//a.fsdn.com/con/js/sftheme/vendor/bizx-prebid.js?1684172736"></script>
<script>
            bizx.cmp.ifConsent('', ['all', 'prebid'], function () {
                if (window.bizxPrebid) {
                    window.bizxPrebid.Ads.initPrebid(window.bizxPrebid.adUnits);
                }
            }, function() {
                // no 'prebid' consent (e.g. region without prebid consent string support) but try GPT directly
                bizx.cmp.ifConsent('', ['all', 'google-ads'], function () {
                    bizx.cmp.embedScript('https://securepubads.g.doubleclick.net/tag/js/gpt.js');
                });
            });
        </script>
<link rel="stylesheet" href="//a.fsdn.com/con/css/lato.css?1684172736">
<link rel="stylesheet" href="//a.fsdn.com/con/css/sandiego.css?1684172736">
<meta name="keywords" content="open source software, download open source software, compare open source software, best open source software" />
<link rel="canonical" href="https://sourceforge.net/directory/" />
<link rel="next" href="https://sourceforge.net/directory/?page=2" />
<meta name="description" content="Compare the best free open source software at SourceForge. Free, secure and fast open source software downloads from the largest open source applications and software directory.">
<title>Compare Open Source Software</title>
<link rel="icon" sizes="180x180" href="//a.fsdn.com/con/img/sandiego/logo-180x180.png" type="image/png">
<link rel="icon" sizes="any" href="//a.fsdn.com/con/img/sandiego/svg/originals/sf-icon-orange-no_sf.svg" type="image/svg+xml">
<link rel="apple-touch-icon" sizes="180x180" href="//a.fsdn.com/con/img/sandiego/logo-180x180.png">
<link rel="mask-icon" href="//a.fsdn.com/con/img/sandiego/svg/originals/sf-icon-orange-no_sf.svg" color="#FF6600">
<script>
            /*global unescape, window, console, jQuery, $, net, SF, DD_belatedPNG, bizx  */
            if (!window.SF) {
                window.SF = {};
            }SF.EU_country_codes = ["CW","HR","IT","IO","BL","NC","MS","SX","VG","PN","SE","GF","MF","GI","FR","MT","DK","WF","CY","YT","GG","AT","SI","CZ","TC","PM","AX","RO","GP","LT","RE","GR","NL","FK","ME","TF","LU","PT","BG","SK","ES","HU","LV","BM","BE","JE","AW","GL","GB","EE","GS","AI","FI","PF","DE","KY","SH","MQ","IE","PL"];
            SF.unknown_country_codes = ["","A1","A2","O1"];
        </script>
<script src="//a.fsdn.com/con/js/min/sf.sandiego-head.js?1684172736"></script>
<style>.T1321743f6345693ecff16a858d9844a1c17a7043 { display: none !important; }</style>
<script>SF.adblock = true;</script>
<script src="//a.fsdn.com/con/js/adgenerator.js?1684172736"></script>
<script>
       /*global Foundation */
           /*global googletag, bizxPrebid */
            SF.Ads.gptExpected();
       var gptadslots=[];
       var gptadHandlers={};
       var gptadRenderers=[];
       SF.Ads.slotsById = {};
       SF.Ads.idsByPath = {};

        googletag.cmd.push(function() {
            var leaderboard = googletag.sizeMapping()
                .addSize([970, 901], [[728,90],[970,250]])
                .addSize([728, 200], [[728,90]])
                .build();
            var leaderboardInContent = googletag.sizeMapping()
                .addSize([1280, 200], [[728,90],[970,250]])
                .addSize([728, 200], [[728,90]])
                .build();

                //prebid_log('GPT push define slots and targeting');
                googletag.pubads()
                .setForceSafeFrame(true)
                .setTargeting('usingSafeFrame','1')
                .setSafeFrameConfig({
                        allowOverlayExpansion: true,
                        allowPushExpansion: true,
                        sandbox: true
                });

                var thisSlot;
                thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Directory_728x90_A',
                                                            [728, 90],'div-gpt-ad-1393435113148-0')
                                                        .defineSizeMapping( leaderboard )
                                                        .addService(googletag.pubads())
                                                            .setTargeting('dc_ref',"https://sourceforge.net/directory/")
                                                            .setTargeting('page_type',"pg_directory");
                gptadslots.push(thisSlot);
                SF.Ads.slotsById['div-gpt-ad-1393435113148-0'] = thisSlot;
                SF.Ads.idsByPath['/41014381/Sourceforge/SF_Directory_728x90_A'] = 'div-gpt-ad-1393435113148-0';
                thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Mobile_320x50_A',[320, 50],'div-gpt-ad-1512154506943-0')
                                                        .addService(googletag.pubads())
                                                            .setTargeting('dc_ref',"https://sourceforge.net/directory/")
                                                            .setTargeting('sz',"320x50")
                                                            .setTargeting('page_type',"pg_directory");
                gptadslots.push(thisSlot);
                SF.Ads.slotsById['div-gpt-ad-1512154506943-0'] = thisSlot;
                SF.Ads.idsByPath['/41014381/Sourceforge/SF_Mobile_320x50_A'] = 'div-gpt-ad-1512154506943-0';
                thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Directory_728x90_B',
                                                            [728, 90],'div-gpt-ad-1392148208790-0')
                                                        .defineSizeMapping( leaderboardInContent )
                                                        .addService(googletag.pubads())
                                                            .setTargeting('dc_ref',"https://sourceforge.net/directory/")
                                                            .setTargeting('page_type',"pg_directory");
                gptadslots.push(thisSlot);
                SF.Ads.slotsById['div-gpt-ad-1392148208790-0'] = thisSlot;
                SF.Ads.idsByPath['/41014381/Sourceforge/SF_Directory_728x90_B'] = 'div-gpt-ad-1392148208790-0';
                thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Mobile_Multi_B',[[300, 50], [300, 250], [320, 50], [320, 100]],'div-gpt-ad-1512154653435-0')
                                                        .addService(googletag.pubads())
                                                            .setTargeting('dc_ref',"https://sourceforge.net/directory/")
                                                            .setTargeting('sz',"300x50,300x250,320x50,320x100")
                                                            .setTargeting('page_type',"pg_directory");
                gptadslots.push(thisSlot);
                SF.Ads.slotsById['div-gpt-ad-1512154653435-0'] = thisSlot;
                SF.Ads.idsByPath['/41014381/Sourceforge/SF_Mobile_Multi_B'] = 'div-gpt-ad-1512154653435-0';
                thisSlot = googletag.defineSlot('/41014381/Sourceforge/SF_Mobile_Multi_C',[[300, 50], [300, 250], [320, 50], [320, 100]],'div-gpt-ad-1512154755912-0')
                                                        .addService(googletag.pubads())
                                                            .setTargeting('dc_ref',"https://sourceforge.net/directory/")
                                                            .setTargeting('sz',"300x50,300x250,320x50,320x100")
                                                            .setTargeting('page_type',"pg_directory");
                gptadslots.push(thisSlot);
                SF.Ads.slotsById['div-gpt-ad-1512154755912-0'] = thisSlot;
                SF.Ads.idsByPath['/41014381/Sourceforge/SF_Mobile_Multi_C'] = 'div-gpt-ad-1512154755912-0';   
                

                googletag.pubads().setTargeting('requestSource', 'GPT');
                googletag.pubads().enableAsyncRendering();

                googletag.pubads().collapseEmptyDivs();
                googletag.pubads().addEventListener('slotOnload', function(event) {
                    SF.Ads.Helpers.getSizeAndSetClass.call(this, event);
                });
                googletag.pubads().addEventListener('slotRenderEnded', function(event) {
                    var unitName = event.slot.getAdUnitPath();
                    if ( unitName in gptadHandlers ) {
                    for (var i = 0; i < gptadHandlers[unitName].length; i++) {
                        try {
                            SF.Ads.RenderHandlers[gptadHandlers[unitName][i]].call(this, event);
                        } catch (e) {
                        }
                    }
                    }

                    SF.Ads.RenderHandlers.decorateSizeDelivered.call(this, event);
                    if(SF.Ads.scrollFixable) {
                        SF.Ads.scrollFixable.scrollRelocate();
                    }
                });
                googletag.pubads().addEventListener('slotVisibilityChanged', SF.Ads.visibilityChangedTracker);
                SF.Ads.setupAdRefresh();
                googletag.pubads().addEventListener('impressionViewable', SF.Ads.RenderHandlers.viewabilityInstrumentation);
                
                googletag.pubads().addEventListener('slotRenderEnded', SF.Ads.listenerForBlockThis);
                bizxPrebid.Ads.pushToGoogle();

                googletag.enableServices();

                if ($.isEmptyObject(SF.Ads.slotsById)) {
                    $('body').addClass("no-ads");
                }
            });
   </script>
<script>
        function initPiwik(){
            var _paq = window._paq = window._paq || [];
            _paq.push(['trackPageView', document.title, {
                dimension2: 'pg_directory',
                dimension3: SF.devicePixelRatio,
                
            }]);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u="//analytics.slashdotmedia.com/";
                _paq.push(['setTrackerUrl', u+'sf.php']);
                _paq.push(['setSiteId', 39]);
                var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'sf.js'; s.parentNode.insertBefore(g,s);
            })();
        }
        bizx.cmp.ifConsent('publisher', ['storage', 'measurement'], initPiwik);
    </script>
<script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "WebSite",
                "name": "SourceForge",
                "url": "https://sourceforge.net/"
            }
        </script>
</head>
<body id="pg_directory" class="l-directory   anonymous has-ads sandiego v-sf">
<div id="busy-spinner"></div>
<div id="messages">
</div>
<div class="off-canvas position-right" id="offCanvas" data-off-canvas>

<ul class="header-nav-menulist">
<li class="highlight search">
<form method="get" action="/directory/" class="m-search-form">
<input type="text" placeholder="Search for software or solutions" autocomplete="off" name="q">
<label>
<input type="submit" class="bt" value="">
<svg data-name="search" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z" /></svg>
</label>
</form>
</li>
<li class="highlight"><a href="https://sourceforge.net/auth/">Join/Login</a></li>
<li><a href="/directory/">Open Source Software</a></li>
<li><a href="/software/">Business Software</a></li>
<li><a href="/blog/" title="Blog">Blog</a></li>
<li><a href="/about">About</a></li>
<li><a id="header-nav-more" data-toggle="header-nav-more header-nav-more-content" data-toggler=".toggled">More</a></li>
<li>
<ul id="header-nav-more-content" class="toggled" data-toggler=".toggled">
<li><a href="/articles/">Articles</a></li>
<li><a href="/create">Create</a></li>
<li><a href="https://sourceforge.net/p/forge/documentation/Docs%20Home/">Site Documentation</a></li>
<li><a href="/support">Support Request</a></li>
</ul>
</li>
</ul>
</div>
<div class="off-canvas-content" data-off-canvas-content>
<script>
    SF.linkout_icon = '<svg  data-name="sf-linkout-icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><polygon class="st0" points="243.2,243.2 56.8,243.2 56.8,56.8 123,56.8 123,9 9,9 9,291 291,291 291,179.4 243.2,179 "/><polygon class="st0" points="128.5,213 155,186.5 176,165.5 206.7,196.3 235.5,132.5 248.9,102.6 290.6,9.8 291,9 290.6,9.2 197.4,51.1 169.1,63.8 103.7,93.3 137,126.5 115.9,147.5 89.5,174 "/></svg>';
</script>
<section class="sandiego l-header-nav-top show-for-large">
<div class="row">
<a href="/" title="Home" class="sf-logo">
<img src="//a.fsdn.com/con/images/sandiego/sf-logo-full.svg" alt="SourceForge logo" class="sf-logo-full" />
</a>
<nav class="links">
<a href="/support" title="Help">Help</a>
<a href="/create/" title="Create">Create</a>
<a href="/user/registration" title="Join">Join</a>
<a href="https://sourceforge.net/auth/" title="Login">Login</a>
</nav>
</div>
</section>
<div class="l-header-nav sticky sandiego l-header-nav-collapse">
<section class="sandiego l-header-nav-top hide-for-large">
<div class="row">
<a href="/" title="Home" class="sf-logo">
<img src="//a.fsdn.com/con/images/sandiego/sf-logo-full.svg" alt="SourceForge logo" class="sf-logo-full" />
</a>
<div class="title-bar-right">
<button type="button" class="menu-icon" data-toggle="offCanvas"></button>
</div>
</div>
</section>
<section class="sandiego l-header-nav-bottom">
<nav class="row">
<a href="/" title="Home" class="sf-logo">
<img src="//a.fsdn.com/con/images/sandiego/sf-logo-full.svg" alt="SourceForge logo" class="sf-logo-full" />
</a>
<div class="links">
<div class="nav-dropdown">
<a href="/directory/" title="Browse">Open Source Software</a>
</div>
<div class="nav-dropdown">
<a href="/software/">Business Software</a>
</div>
<div class="nav-dropdown">
<a>Resources</a>
<ul class="nav-dropdown-menu">
<li><a href="/blog/">Blog</a></li>
<li><a href="/articles/">Articles</a></li>
</ul>
</div>
<div class="dev-menu-when-stuck">
Menu
<ul class="dev-menu-dropdown header-nav-menulist">
<li><a href="/support">Help</a></li>
<li><a href="/create">Create</a></li>
<li><a href="/user/registration/" title="Join">Join</a></li>
<li><a href="https://sourceforge.net/auth/" title="Login">Login</a></li>
</ul>
</div>
<div class="search-toggle-when-stuck">
<a class="search-toggle">
<svg data-name="search" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z" /></svg>
</a>
</div>
</div>
<div class="search">
<div class="github-sync-button">
<a href="/p/import_project/github/" rel="nofollow" title="Sync your Github project to SourceForge" id="github-link">
<img src="//a.fsdn.com/con/images/sandiego/github-sync.png" srcset="//a.fsdn.com/con/images/sandiego/github-sync_2x.png 2x" alt="GitHub sync" id="github-sync" />
</a>
</div>
<form method="get" action="/directory/" class="m-search-form">
<div class="typeahead__container">
<div class="typeahead__field">
<div class="typeahead__query">
<input type="text" placeholder="Search for software or solutions" autocomplete="off" name="q">
</div>
<label>
<input type="submit" class="bt" value="">
<svg data-name="search" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z" /></svg>
</label>
</div>
</div>
</form>
</div>
</nav>
</section>
<div id="banner-sterling" class="sterling">
<div id="SF_Directory_728x90_A_wrapped" data-id="div-gpt-ad-1393435113148-0" class="draper   
visibility_rules
 v_970_billboard  v_728_leaderboard ">
</div>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    var el = document.getElementById('SF_Directory_728x90_A_wrapped');
    var newNode = document.createElement('div');
    newNode.id = 'div-gpt-ad-1393435113148-0';
    el.appendChild(newNode);
}());

gptadRenderers['SF_Directory_728x90_A'] = function(){  // jshint ignore:line
    
        if (!SF.adblock) {
            $('#div-gpt-ad-1393435113148-0').parents('.draper').css("min-height", 90 + 13 + 12); // for height of .lbl-ad and padding
        }
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1393435113148-0');
    });
};
gptadRenderers['SF_Directory_728x90_A']();  // jshint ignore:line
}
</script>
<div id="SF_Mobile_320x50_A_wrapped" data-id="div-gpt-ad-1512154506943-0" class="draper   
">
</div>
<script>
/*global googletag */
if (!SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    var el = document.getElementById('SF_Mobile_320x50_A_wrapped');
    var newNode = document.createElement('div');
    newNode.id = 'div-gpt-ad-1512154506943-0';
    el.appendChild(newNode);
}());

gptadRenderers['SF_Mobile_320x50_A'] = function(){  // jshint ignore:line
    
        if (!SF.adblock) {
            $('#div-gpt-ad-1512154506943-0').parents('.draper').css("min-height", 50 + 13 + 12); // for height of .lbl-ad and padding
        }
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1512154506943-0');
    });
};
gptadRenderers['SF_Mobile_320x50_A']();  // jshint ignore:line
}
</script>
</div>
</div>
<div class="full-width-masthead-white">
<div class="content">
<nav class="breadcrumbs ">
<ul itemscope itemtype="http://schema.org/BreadcrumbList">
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<a href="/" itemprop="item">
<span itemprop="name">Home</span>
</a>
<meta itemprop="position" content="1" />
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

<span itemprop="name">Browse Open Source</span>
<meta itemprop="position" content="2" />
</li>
</ul>
</nav>
<h1>Browse Open Source Software</h1>
<div class="row align-justify">
<form method="GET" action="." class="directory-search-box small-12 large-6">
<div class="typeahead__container" data-oss-only="true">
<div class="typeahead__field">
<div class="typeahead__query">
<input name="q" placeholder="Search" autocomplete="off">
</div>
<a href="/directory/?" class="btn-search-cancel">x</a>
<label>
<input type="submit" value="">
<svg data-name="search" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z" /></svg>
</label>
</div>
</div>
</form>
<div class="small-12 large-5 directory-toggle">
<div class="sort-by">
<span>Sort By:</span>
<ul class="sort-by dropdown menu" data-dropdown-menu data-hover="true" data-hover-delay="0">
<li class="is-dropdown-submenu-parent">
<a class="current-sort">Most Popular</a>
<ul class="menu is-dropdown-submenu">
<li><a href="#" data-action="/directory/?sort=popular" title="Most Popular" rel="nofollow" class="active link-obfuscated">
Most Popular
</a></li>
<li><a href="#" data-action="/directory/?sort=update" title="Last Updated" rel="nofollow" class=" link-obfuscated">
Last Updated
</a></li>
<li><a href="#" data-action="/directory/?sort=name" title="Name (A-Z)" rel="nofollow" class=" link-obfuscated">
Name (A-Z)
</a></li>
<li><a href="#" data-action="/directory/?sort=rating" title="Rating" rel="nofollow" class=" link-obfuscated">
Rating
</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="l-two-column-page">
<div class="l-side-column l-has-sidebar">
<div class="side-column-contents">
<div id="all-facets" class="all-facets sidebar show-for-large" data-toggler=".show-for-small show-for-large">
<form autocomplete="off">
<div class="facet">
<div class="as-h2">
OS
</div>
<div id="facet-wrapper-os" data-toggler=".show-for-large">
<ul id="facet-os" data-toggler=".abbrev" class="facet-items abbrev">
<li class=show>
<label class="filter-choice">
<a href="/directory/windows/" class="txt"><span class="filter-text">Windows</span> <span>194,586</span></a>
<input type=checkbox data-action="/directory/windows/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/linux/" class="txt"><span class="filter-text">Linux</span> <span>187,761</span></a>
<input type=checkbox data-action="/directory/linux/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/mac/" class="txt"><span class="filter-text">Mac</span> <span>142,688</span></a>
<input type=checkbox data-action="/directory/mac/">
</label>
<li class="more"><a data-toggle="facet-os">More...</a></li><li>
<label class="filter-choice">
<a href="/directory/bsd/" class="txt"><span class="filter-text">BSD</span> <span>84,169</span></a>
<input type=checkbox data-action="/directory/bsd/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/chromeos/" class="txt"><span class="filter-text">ChromeOS</span> <span>51,495</span></a>
<input type=checkbox data-action="/directory/chromeos/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/desktop-operating-systems/" class="txt"><span class="filter-text">Desktop Operating Systems</span> <span>7,692</span></a>
<input type=checkbox data-action="/directory/desktop-operating-systems/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/mobile-operating-systems/" class="txt"><span class="filter-text">Mobile Operating Systems</span> <span>4,762</span></a>
<input type=checkbox data-action="/directory/mobile-operating-systems/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/android/" class="txt"><span class="filter-text">Android</span> <span>4,517</span></a>
<input type=checkbox data-action="/directory/android/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/server-operating-systems/" class="txt"><span class="filter-text">Server Operating Systems</span> <span>3,917</span></a>
<input type=checkbox data-action="/directory/server-operating-systems/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/solaris/" class="txt"><span class="filter-text">Solaris</span> <span>2,259</span></a>
<input type=checkbox data-action="/directory/solaris/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/embedded-operating-systems/" class="txt"><span class="filter-text">Embedded Operating Systems</span> <span>1,245</span></a>
<input type=checkbox data-action="/directory/embedded-operating-systems/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/game-consoles/" class="txt"><span class="filter-text">Game Consoles</span> <span>503</span></a>
<input type=checkbox data-action="/directory/game-consoles/">
</label>
</ul>
</div>
</div>
<div class="facet">
<div class="as-h2">
Category
</div>
<div id="facet-wrapper-topic" data-toggler=".show-for-large">
<ul id="facet-topic" data-toggler=".abbrev" class="facet-items abbrev">
<li class=show>
<label class="filter-choice">
<a href="/directory/software-development/" class="txt"><span class="filter-text">Software Development</span> <span>41,832</span></a>
<input type=checkbox data-action="/directory/software-development/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/system/" class="txt"><span class="filter-text">System</span> <span>28,953</span></a>
<input type=checkbox data-action="/directory/system/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/internet/" class="txt"><span class="filter-text">Internet</span> <span>25,620</span></a>
<input type=checkbox data-action="/directory/internet/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/games/" class="txt"><span class="filter-text">Games</span> <span>23,500</span></a>
<input type=checkbox data-action="/directory/games/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/scientific-engineering/" class="txt"><span class="filter-text">Scientific/Engineering</span> <span>20,843</span></a>
<input type=checkbox data-action="/directory/scientific-engineering/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/multimedia/" class="txt"><span class="filter-text">Multimedia</span> <span>20,459</span></a>
<input type=checkbox data-action="/directory/multimedia/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/communications/" class="txt"><span class="filter-text">Communications</span> <span>18,232</span></a>
<input type=checkbox data-action="/directory/communications/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/business/" class="txt"><span class="filter-text">Business</span> <span>15,626</span></a>
<input type=checkbox data-action="/directory/business/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/education/" class="txt"><span class="filter-text">Education</span> <span>8,656</span></a>
<input type=checkbox data-action="/directory/education/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/database/" class="txt"><span class="filter-text">Database</span> <span>8,333</span></a>
<input type=checkbox data-action="/directory/database/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/security/" class="txt"><span class="filter-text">Security</span> <span>6,571</span></a>
<input type=checkbox data-action="/directory/security/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/formats-and-protocols/" class="txt"><span class="filter-text">Formats and Protocols</span> <span>5,609</span></a>
 <input type=checkbox data-action="/directory/formats-and-protocols/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/desktop-environment/" class="txt"><span class="filter-text">Desktop Environment</span> <span>5,595</span></a>
<input type=checkbox data-action="/directory/desktop-environment/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/artificial-intelligence/" class="txt"><span class="filter-text">Artificial Intelligence</span> <span>4,862</span></a>
<input type=checkbox data-action="/directory/artificial-intelligence/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/text-editors/" class="txt"><span class="filter-text">Text Editors</span> <span>4,435</span></a>
<input type=checkbox data-action="/directory/text-editors/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/mobile/" class="txt"><span class="filter-text">Mobile</span> <span>1,356</span></a>
<input type=checkbox data-action="/directory/mobile/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/terminals/" class="txt"><span class="filter-text">Terminals</span> <span>1,230</span></a>
<input type=checkbox data-action="/directory/terminals/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/printing/" class="txt"><span class="filter-text">Printing</span> <span>760</span></a>
<input type=checkbox data-action="/directory/printing/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/social-sciences/" class="txt"><span class="filter-text">Social sciences</span> <span>608</span></a>
<input type=checkbox data-action="/directory/social-sciences/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/religion-and-philosophy/" class="txt"><span class="filter-text">Religion and Philosophy</span> <span>546</span></a>
<input type=checkbox data-action="/directory/religion-and-philosophy/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/productivity/" class="txt"><span class="filter-text">Productivity</span> <span>446</span></a>
<input type=checkbox data-action="/directory/productivity/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/blockchain/" class="txt"><span class="filter-text">Blockchain</span> <span>388</span></a>
<input type=checkbox data-action="/directory/blockchain/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/?topic=game-consoles" class="txt"><span class="filter-text">Game Consoles</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?topic=game-consoles">
</label>
</ul>
</div>
</div>
<div class="facet">
<div class="as-h2">
License
</div>
<div id="facet-wrapper-license" data-toggler=".show-for-large">
<ul id="facet-license" data-toggler=".abbrev" class="facet-items abbrev">
<li class=show>
<label class="filter-choice">
<a href="/directory/?license=osi-approved-open-source" class="txt"><span class="filter-text">OSI-Approved Open Source</span> <span>163,775</span></a>
<input type=checkbox data-action="/directory/?license=osi-approved-open-source">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/?license=public-domain" class="txt"><span class="filter-text">Public Domain</span> <span>5,459</span></a>
<input type=checkbox data-action="/directory/?license=public-domain">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/?license=creative-commons-attribution-license" class="txt"><span class="filter-text">Creative Commons Attribution License</span> <span>4,450</span></a>
<input type=checkbox data-action="/directory/?license=creative-commons-attribution-license">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/?license=other-license" class="txt"><span class="filter-text">Other License</span> <span>4,133</span></a>
<input type=checkbox data-action="/directory/?license=other-license">
</label>
<li class="more"><a data-toggle="facet-license">More...</a></li><li>
<label class="filter-choice">
<a href="/directory/?license=gnu-free-documentation-license" class="txt"><span class="filter-text">GNU Free Documentation License</span> <span>149</span></a>
<input type=checkbox data-action="/directory/?license=gnu-free-documentation-license">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?license=open-source-hardware" class="txt"><span class="filter-text">Open Source Hardware</span> <span>14</span></a>
<input type=checkbox data-action="/directory/?license=open-source-hardware">
</label>
</ul>
</div>
</div>
<div class="facet">
<div class="as-h2">
Translations
</div>
<div id="facet-wrapper-natlanguage" data-toggler=".show-for-large">
<ul id="facet-natlanguage" data-toggler=".abbrev" class="facet-items abbrev">
<li class=show>
<label class="filter-choice">
<a href="/directory/?natlanguage=english" class="txt"><span class="filter-text">English</span> <span>79,236</span></a>
<input type=checkbox data-action="/directory/?natlanguage=english">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/?natlanguage=german" class="txt"><span class="filter-text">German</span> <span>11,089</span></a>
<input type=checkbox data-action="/directory/?natlanguage=german">
 </label>
<li class=show>
<label class="filter-choice">
<a href="/directory/?natlanguage=french" class="txt"><span class="filter-text">French</span> <span>7,868</span></a>
<input type=checkbox data-action="/directory/?natlanguage=french">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/?natlanguage=spanish" class="txt"><span class="filter-text">Spanish</span> <span>6,900</span></a>
<input type=checkbox data-action="/directory/?natlanguage=spanish">
</label>
<li class="more"><a data-toggle="facet-natlanguage">More...</a></li><li>
<label class="filter-choice">
<a href="/directory/?natlanguage=russian" class="txt"><span class="filter-text">Russian</span> <span>4,764</span></a>
<input type=checkbox data-action="/directory/?natlanguage=russian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=italian" class="txt"><span class="filter-text">Italian</span> <span>3,828</span></a>
<input type=checkbox data-action="/directory/?natlanguage=italian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=chinese-simplified" class="txt"><span class="filter-text">Chinese (Simplified)</span> <span>3,102</span></a>
<input type=checkbox data-action="/directory/?natlanguage=chinese-simplified">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=brazilian-portuguese" class="txt"><span class="filter-text">Brazilian Portuguese</span> <span>2,669</span></a>
<input type=checkbox data-action="/directory/?natlanguage=brazilian-portuguese">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=polish" class="txt"><span class="filter-text">Polish</span> <span>2,025</span></a>
<input type=checkbox data-action="/directory/?natlanguage=polish">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=dutch" class="txt"><span class="filter-text">Dutch</span> <span>1,983</span></a>
<input type=checkbox data-action="/directory/?natlanguage=dutch">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=portuguese" class="txt"><span class="filter-text">Portuguese</span> <span>1,596</span></a>
<input type=checkbox data-action="/directory/?natlanguage=portuguese">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=japanese" class="txt"><span class="filter-text">Japanese</span> <span>1,418</span></a>
<input type=checkbox data-action="/directory/?natlanguage=japanese">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=czech" class="txt"><span class="filter-text">Czech</span> <span>1,175</span></a>
<input type=checkbox data-action="/directory/?natlanguage=czech">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=turkish" class="txt"><span class="filter-text">Turkish</span> <span>1,099</span></a>
<input type=checkbox data-action="/directory/?natlanguage=turkish">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=chinese-traditional" class="txt"><span class="filter-text">Chinese (Traditional)</span> <span>1,053</span></a>
<input type=checkbox data-action="/directory/?natlanguage=chinese-traditional">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=swedish" class="txt"><span class="filter-text">Swedish</span> <span>959</span></a>
<input type=checkbox data-action="/directory/?natlanguage=swedish">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=hungarian" class="txt"><span class="filter-text">Hungarian</span> <span>880</span></a>
<input type=checkbox data-action="/directory/?natlanguage=hungarian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=arabic" class="txt"><span class="filter-text">Arabic</span> <span>727</span></a>
<input type=checkbox data-action="/directory/?natlanguage=arabic">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=catalan" class="txt"><span class="filter-text">Catalan</span> <span>707</span></a>
<input type=checkbox data-action="/directory/?natlanguage=catalan">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=greek" class="txt"><span class="filter-text">Greek</span> <span>636</span></a>
<input type=checkbox data-action="/directory/?natlanguage=greek">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=danish" class="txt"><span class="filter-text">Danish</span> <span>580</span></a>
<input type=checkbox data-action="/directory/?natlanguage=danish">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=romanian" class="txt"><span class="filter-text">Romanian</span> <span>572</span></a>
<input type=checkbox data-action="/directory/?natlanguage=romanian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=ukrainian" class="txt"><span class="filter-text">Ukrainian</span> <span>569</span></a>
<input type=checkbox data-action="/directory/?natlanguage=ukrainian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=korean" class="txt"><span class="filter-text">Korean</span> <span>565</span></a>
<input type=checkbox data-action="/directory/?natlanguage=korean">
</label>
<li>
 <label class="filter-choice">
<a href="/directory/?natlanguage=finnish" class="txt"><span class="filter-text">Finnish</span> <span>517</span></a>
<input type=checkbox data-action="/directory/?natlanguage=finnish">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=norwegian" class="txt"><span class="filter-text">Norwegian</span> <span>506</span></a>
<input type=checkbox data-action="/directory/?natlanguage=norwegian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=indonesian" class="txt"><span class="filter-text">Indonesian</span> <span>465</span></a>
<input type=checkbox data-action="/directory/?natlanguage=indonesian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=bulgarian" class="txt"><span class="filter-text">Bulgarian</span> <span>461</span></a>
<input type=checkbox data-action="/directory/?natlanguage=bulgarian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=slovak" class="txt"><span class="filter-text">Slovak</span> <span>439</span></a>
<input type=checkbox data-action="/directory/?natlanguage=slovak">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=vietnamese" class="txt"><span class="filter-text">Vietnamese</span> <span>362</span></a>
<input type=checkbox data-action="/directory/?natlanguage=vietnamese">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=hebrew" class="txt"><span class="filter-text">Hebrew</span> <span>359</span></a>
<input type=checkbox data-action="/directory/?natlanguage=hebrew">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=serbian" class="txt"><span class="filter-text">Serbian</span> <span>305</span></a>
<input type=checkbox data-action="/directory/?natlanguage=serbian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=persian" class="txt"><span class="filter-text">Persian</span> <span>304</span></a>
<input type=checkbox data-action="/directory/?natlanguage=persian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=croatian" class="txt"><span class="filter-text">Croatian</span> <span>253</span></a>
<input type=checkbox data-action="/directory/?natlanguage=croatian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=thai" class="txt"><span class="filter-text">Thai</span> <span>246</span></a>
<input type=checkbox data-action="/directory/?natlanguage=thai">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=slovene" class="txt"><span class="filter-text">Slovene</span> <span>239</span></a>
<input type=checkbox data-action="/directory/?natlanguage=slovene">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=hindi" class="txt"><span class="filter-text">Hindi</span> <span>223</span></a>
<input type=checkbox data-action="/directory/?natlanguage=hindi">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=lithuanian" class="txt"><span class="filter-text">Lithuanian</span> <span>201</span></a>
<input type=checkbox data-action="/directory/?natlanguage=lithuanian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=galician" class="txt"><span class="filter-text">Galician</span> <span>178</span></a>
<input type=checkbox data-action="/directory/?natlanguage=galician">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=afrikaans" class="txt"><span class="filter-text">Afrikaans</span> <span>171</span></a>
<input type=checkbox data-action="/directory/?natlanguage=afrikaans">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=estonian" class="txt"><span class="filter-text">Estonian</span> <span>158</span></a>
<input type=checkbox data-action="/directory/?natlanguage=estonian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=esperanto" class="txt"><span class="filter-text">Esperanto</span> <span>150</span></a>
<input type=checkbox data-action="/directory/?natlanguage=esperanto">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=latvian" class="txt"><span class="filter-text">Latvian</span> <span>119</span></a>
<input type=checkbox data-action="/directory/?natlanguage=latvian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=tamil" class="txt"><span class="filter-text">Tamil</span> <span>116</span></a>
<input type=checkbox data-action="/directory/?natlanguage=tamil">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=malay" class="txt"><span class="filter-text">Malay</span> <span>113</span></a>
<input type=checkbox data-action="/directory/?natlanguage=malay">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=belarusian" class="txt"><span class="filter-text">Belarusian</span> <span>102</span></a>
<input type=checkbox data-action="/directory/?natlanguage=belarusian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=bengali" class="txt"><span class="filter-text">Bengali</span> <span>99</span></a>
<input type=checkbox data-action="/directory/?natlanguage=bengali">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=basque-euskara" class="txt"><span class="filter-text">Basque (Euskara)</span> <span>93</span></a>
<input type=checkbox data-action="/directory/?natlanguage=basque-euskara">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=albanian" class="txt"><span class="filter-text">Albanian</span> <span>91</span></a>
<input type=checkbox data-action="/directory/?natlanguage=albanian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=bosnian" class="txt"><span class="filter-text">Bosnian</span> <span>77</span></a>
<input type=checkbox data-action="/directory/?natlanguage=bosnian">
 </label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=icelandic" class="txt"><span class="filter-text">Icelandic</span> <span>68</span></a>
<input type=checkbox data-action="/directory/?natlanguage=icelandic">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=macedonian" class="txt"><span class="filter-text">Macedonian</span> <span>68</span></a>
<input type=checkbox data-action="/directory/?natlanguage=macedonian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=telugu" class="txt"><span class="filter-text">Telugu</span> <span>56</span></a>
<input type=checkbox data-action="/directory/?natlanguage=telugu">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=latin" class="txt"><span class="filter-text">Latin</span> <span>54</span></a>
<input type=checkbox data-action="/directory/?natlanguage=latin">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=urdu" class="txt"><span class="filter-text">Urdu</span> <span>53</span></a>
<input type=checkbox data-action="/directory/?natlanguage=urdu">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=irish-gaelic" class="txt"><span class="filter-text">Irish Gaelic</span> <span>45</span></a>
<input type=checkbox data-action="/directory/?natlanguage=irish-gaelic">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=georgian" class="txt"><span class="filter-text">Georgian</span> <span>43</span></a>
<input type=checkbox data-action="/directory/?natlanguage=georgian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=swahili" class="txt"><span class="filter-text">Swahili</span> <span>37</span></a>
<input type=checkbox data-action="/directory/?natlanguage=swahili">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=marathi" class="txt"><span class="filter-text">Marathi</span> <span>36</span></a>
<input type=checkbox data-action="/directory/?natlanguage=marathi">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=mongolian" class="txt"><span class="filter-text">Mongolian</span> <span>31</span></a>
<input type=checkbox data-action="/directory/?natlanguage=mongolian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=panjabi" class="txt"><span class="filter-text">Panjabi</span> <span>31</span></a>
<input type=checkbox data-action="/directory/?natlanguage=panjabi">
</label>
<li>
<label class="filter-choice">
 <a href="/directory/?natlanguage=breton" class="txt"><span class="filter-text">Breton</span> <span>25</span></a>
<input type=checkbox data-action="/directory/?natlanguage=breton">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=maltese" class="txt"><span class="filter-text">Maltese</span> <span>20</span></a>
<input type=checkbox data-action="/directory/?natlanguage=maltese">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=javanese" class="txt"><span class="filter-text">Javanese</span> <span>17</span></a>
<input type=checkbox data-action="/directory/?natlanguage=javanese">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=malagasy" class="txt"><span class="filter-text">Malagasy</span> <span>15</span></a>
<input type=checkbox data-action="/directory/?natlanguage=malagasy">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=kirghiz" class="txt"><span class="filter-text">Kirghiz</span> <span>13</span></a>
<input type=checkbox data-action="/directory/?natlanguage=kirghiz">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=scottish-gaelic" class="txt"><span class="filter-text">Scottish Gaelic</span> <span>7</span></a>
<input type=checkbox data-action="/directory/?natlanguage=scottish-gaelic">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=north-ndebele" class="txt"><span class="filter-text">North Ndebele</span> <span>2</span></a>
<input type=checkbox data-action="/directory/?natlanguage=north-ndebele">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=norwegian-bokmal" class="txt"><span class="filter-text">Norwegian Bokmål</span> <span>2</span></a>
<input type=checkbox data-action="/directory/?natlanguage=norwegian-bokmal">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=akan" class="txt"><span class="filter-text">Akan</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=akan">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=aragonese" class="txt"><span class="filter-text">Aragonese</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=aragonese">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=armenian" class="txt"><span class="filter-text">Armenian</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=armenian">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=assamese" class="txt"><span class="filter-text">Assamese</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=assamese">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=azerbaijani" class="txt"><span class="filter-text">Azerbaijani</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=azerbaijani">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=bambara" class="txt"><span class="filter-text">Bambara</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=bambara">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=central-khmer" class="txt"><span class="filter-text">Central Khmer</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=central-khmer">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=faroese" class="txt"><span class="filter-text">Faroese</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=faroese">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=gujarati" class="txt"><span class="filter-text">Gujarati</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=gujarati">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=hausa" class="txt"><span class="filter-text">Hausa</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=hausa">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=inuktitut" class="txt"><span class="filter-text">Inuktitut</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=inuktitut">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=kannada" class="txt"><span class="filter-text">Kannada</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=kannada">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=kashmiri" class="txt"><span class="filter-text">Kashmiri</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=kashmiri">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=kinyarwanda" class="txt"><span class="filter-text">Kinyarwanda</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=kinyarwanda">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=kurdish" class="txt"><span class="filter-text">Kurdish</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=kurdish">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=luxembourgish" class="txt"><span class="filter-text">Luxembourgish</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=luxembourgish">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=malayalam" class="txt"><span class="filter-text">Malayalam</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=malayalam">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=nepali" class="txt"><span class="filter-text">Nepali</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=nepali">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=norwegian-nynorsk" class="txt"><span class="filter-text">Norwegian Nynorsk</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=norwegian-nynorsk">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=occitan" class="txt"><span class="filter-text">Occitan</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=occitan">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=sanskrit" class="txt"><span class="filter-text">Sanskrit</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=sanskrit">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=sindhi" class="txt"><span class="filter-text">Sindhi</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=sindhi">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=sinhala" class="txt"><span class="filter-text">Sinhala</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=sinhala">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=sundanese" class="txt"><span class="filter-text">Sundanese</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=sundanese">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=tagalog" class="txt"><span class="filter-text">Tagalog</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=tagalog">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=tibetan" class="txt"><span class="filter-text">Tibetan</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=tibetan">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=twi" class="txt"><span class="filter-text">Twi</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=twi">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=venda" class="txt"><span class="filter-text">Venda</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=venda">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=walloon" class="txt"><span class="filter-text">Walloon</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=walloon">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=welsh" class="txt"><span class="filter-text">Welsh</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=welsh">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=wolof" class="txt"><span class="filter-text">Wolof</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=wolof">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=xhosa" class="txt"><span class="filter-text">Xhosa</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=xhosa">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?natlanguage=zulu" class="txt"><span class="filter-text">Zulu</span> <span>1</span></a>
<input type=checkbox data-action="/directory/?natlanguage=zulu">
</label>
</ul>
</div>
</div>
<div class="facet">
<div class="as-h2">
Programming Language
</div>
<div id="facet-wrapper-language" data-toggler=".show-for-large">
<ul id="facet-language" data-toggler=".abbrev" class="facet-items abbrev">
<li class=show>
<label class="filter-choice">
<a href="/directory/java/" class="txt"><span class="filter-text">Java</span> <span>43,500</span></a>
<input type=checkbox data-action="/directory/java/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/c-plus-plus/" class="txt"><span class="filter-text">C++</span> <span>36,027</span></a>
<input type=checkbox data-action="/directory/c-plus-plus/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/c/" class="txt"><span class="filter-text">C</span> <span>27,196</span></a>
<input type=checkbox data-action="/directory/c/">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/php/" class="txt"><span class="filter-text">PHP</span> <span>23,565</span></a>
<input type=checkbox data-action="/directory/php/">
</label>
<li class="more"><a data-toggle="facet-language">More...</a></li><li>
<label class="filter-choice">
<a href="/directory/python/" class="txt"><span class="filter-text">Python</span> <span>15,372</span></a>
<input type=checkbox data-action="/directory/python/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/c-sharp/" class="txt"><span class="filter-text">C#</span> <span>14,125</span></a>
<input type=checkbox data-action="/directory/c-sharp/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/javascript/" class="txt"><span class="filter-text">JavaScript</span> <span>12,381</span></a>
<input type=checkbox data-action="/directory/javascript/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/perl/" class="txt"><span class="filter-text">Perl</span> <span>8,317</span></a>
<input type=checkbox data-action="/directory/perl/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/unix-shell/" class="txt"><span class="filter-text">Unix Shell</span> <span>4,286</span></a>
<input type=checkbox data-action="/directory/unix-shell/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/delphi-kylix/" class="txt"><span class="filter-text">Delphi/Kylix</span> <span>3,363</span></a>
<input type=checkbox data-action="/directory/delphi-kylix/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/visual-basic-.net/" class="txt"><span class="filter-text">Visual Basic .NET</span> <span>3,053</span></a>
<input type=checkbox data-action="/directory/visual-basic-.net/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/visual-basic/" class="txt"><span class="filter-text">Visual Basic</span> <span>2,815</span></a>
<input type=checkbox data-action="/directory/visual-basic/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/assembly/" class="txt"><span class="filter-text">Assembly</span> <span>2,213</span></a>
<input type=checkbox data-action="/directory/assembly/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/ruby/" class="txt"><span class="filter-text">Ruby</span> <span>1,625</span></a>
<input type=checkbox data-action="/directory/ruby/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/objective-c/" class="txt"><span class="filter-text">Objective C</span> <span>1,421</span></a>
<input type=checkbox data-action="/directory/objective-c/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/pl-sql/" class="txt"><span class="filter-text">PL/SQL</span> <span>1,399</span></a>
<input type=checkbox data-action="/directory/pl-sql/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/jsp/" class="txt"><span class="filter-text">JSP</span> <span>1,377</span></a>
<input type=checkbox data-action="/directory/jsp/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/tcl/" class="txt"><span class="filter-text">Tcl</span> <span>1,220</span></a>
<input type=checkbox data-action="/directory/tcl/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/actionscript/" class="txt"><span class="filter-text">ActionScript</span> <span>1,134</span></a>
<input type=checkbox data-action="/directory/actionscript/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/lua/" class="txt"><span class="filter-text">Lua</span> <span>1,068</span></a>
<input type=checkbox data-action="/directory/lua/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/xsl-xslt-xpath-xsl-fo/" class="txt"><span class="filter-text">XSL (XSLT/XPath/XSL-FO)</span> <span>995</span></a>
<input type=checkbox data-action="/directory/xsl-xslt-xpath-xsl-fo/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/go/" class="txt"><span class="filter-text">Go</span> <span>991</span></a>
<input type=checkbox data-action="/directory/go/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/asp.net/" class="txt"><span class="filter-text">ASP.NET</span> <span>925</span></a>
<input type=checkbox data-action="/directory/asp.net/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/matlab/" class="txt"><span class="filter-text">MATLAB</span> <span>859</span></a>
<input type=checkbox data-action="/directory/matlab/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/basic/" class="txt"><span class="filter-text">BASIC</span> <span>782</span></a>
<input type=checkbox data-action="/directory/basic/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/typescript/" class="txt"><span class="filter-text">TypeScript</span> <span>773</span></a>
<input type=checkbox data-action="/directory/typescript/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/pascal/" class="txt"><span class="filter-text">Pascal</span> <span>772</span></a>
<input type=checkbox data-action="/directory/pascal/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/object-pascal/" class="txt"><span class="filter-text">Object Pascal</span> <span>636</span></a>
 <input type=checkbox data-action="/directory/object-pascal/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/fortran/" class="txt"><span class="filter-text">Fortran</span> <span>564</span></a>
<input type=checkbox data-action="/directory/fortran/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/lazarus/" class="txt"><span class="filter-text">Lazarus</span> <span>551</span></a>
<input type=checkbox data-action="/directory/lazarus/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/free-pascal/" class="txt"><span class="filter-text">Free Pascal</span> <span>497</span></a>
<input type=checkbox data-action="/directory/free-pascal/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/asp/" class="txt"><span class="filter-text">ASP</span> <span>446</span></a>
<input type=checkbox data-action="/directory/asp/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/lisp/" class="txt"><span class="filter-text">Lisp</span> <span>389</span></a>
<input type=checkbox data-action="/directory/lisp/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/groovy/" class="txt"><span class="filter-text">Groovy</span> <span>363</span></a>
<input type=checkbox data-action="/directory/groovy/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/s-r/" class="txt"><span class="filter-text">S/R</span> <span>300</span></a>
<input type=checkbox data-action="/directory/s-r/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/visual-basic-for-applications-vba/" class="txt"><span class="filter-text">Visual Basic for Applications (VBA)</span> <span>285</span></a>
<input type=checkbox data-action="/directory/visual-basic-for-applications-vba/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/scheme/" class="txt"><span class="filter-text">Scheme</span> <span>282</span></a>
<input type=checkbox data-action="/directory/scheme/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/autoit/" class="txt"><span class="filter-text">AutoIt</span> <span>274</span></a>
<input type=checkbox data-action="/directory/autoit/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/ada/" class="txt"><span class="filter-text">Ada</span> <span>243</span></a>
<input type=checkbox data-action="/directory/ada/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/vbscript/" class="txt"><span class="filter-text">VBScript</span> <span>239</span></a>
<input type=checkbox data-action="/directory/vbscript/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/flex/" class="txt"><span class="filter-text">Flex</span> <span>221</span></a>
<input type=checkbox data-action="/directory/flex/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/haskell/" class="txt"><span class="filter-text">Haskell</span> <span>204</span></a>
<input type=checkbox data-action="/directory/haskell/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/objective-c-2.0/" class="txt"><span class="filter-text">Objective-C 2.0</span> <span>199</span></a>
<input type=checkbox data-action="/directory/objective-c-2.0/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/prolog/" class="txt"><span class="filter-text">Prolog</span> <span>198</span></a>
<input type=checkbox data-action="/directory/prolog/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/ocaml-objective-caml/" class="txt"><span class="filter-text">OCaml (Objective Caml)</span> <span>196</span></a>
<input type=checkbox data-action="/directory/ocaml-objective-caml/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/rust/" class="txt"><span class="filter-text">Rust</span> <span>188</span></a>
<input type=checkbox data-action="/directory/rust/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/vhdl-verilog/" class="txt"><span class="filter-text">VHDL/Verilog</span> <span>173</span></a>
<input type=checkbox data-action="/directory/vhdl-verilog/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/scala/" class="txt"><span class="filter-text">Scala</span> <span>167</span></a>
<input type=checkbox data-action="/directory/scala/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/swift/" class="txt"><span class="filter-text">Swift</span> <span>166</span></a>
<input type=checkbox data-action="/directory/swift/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/awk/" class="txt"><span class="filter-text">AWK</span> <span>152</span></a>
<input type=checkbox data-action="/directory/awk/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/applescript/" class="txt"><span class="filter-text">AppleScript</span> <span>150</span></a>
<input type=checkbox data-action="/directory/applescript/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/common-lisp/" class="txt"><span class="filter-text">Common Lisp</span> <span>144</span></a>
<input type=checkbox data-action="/directory/common-lisp/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/kotlin/" class="txt"><span class="filter-text">Kotlin</span> <span>133</span></a>
<input type=checkbox data-action="/directory/kotlin/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/zope/" class="txt"><span class="filter-text">Zope</span> <span>132</span></a>
<input type=checkbox data-action="/directory/zope/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/glsl-opengl-shading-language/" class="txt"><span class="filter-text">GLSL (OpenGL Shading Language)</span> <span>129</span></a>
<input type=checkbox data-action="/directory/glsl-opengl-shading-language/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/d/" class="txt"><span class="filter-text">D</span> <span>128</span></a>
<input type=checkbox data-action="/directory/d/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/yacc/" class="txt"><span class="filter-text">Yacc</span> <span>124</span></a>
<input type=checkbox data-action="/directory/yacc/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/realbasic/" class="txt"><span class="filter-text">REALbasic</span> <span>123</span></a>
<input type=checkbox data-action="/directory/realbasic/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/standard-ml/" class="txt"><span class="filter-text">Standard ML</span> <span>123</span></a>
<input type=checkbox data-action="/directory/standard-ml/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/cold-fusion/" class="txt"><span class="filter-text">Cold Fusion</span> <span>122</span></a>
<input type=checkbox data-action="/directory/cold-fusion/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/emacs-lisp/" class="txt"><span class="filter-text">Emacs-Lisp</span> <span>119</span></a>
<input type=checkbox data-action="/directory/emacs-lisp/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/forth/" class="txt"><span class="filter-text">Forth</span> <span>108</span></a>
<input type=checkbox data-action="/directory/forth/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/erlang/" class="txt"><span class="filter-text">Erlang</span> <span>105</span></a>
<input type=checkbox data-action="/directory/erlang/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/aspectj/" class="txt"><span class="filter-text">AspectJ</span> <span>90</span></a>
<input type=checkbox data-action="/directory/aspectj/">
 </label>
<li>
<label class="filter-choice">
<a href="/directory/smalltalk/" class="txt"><span class="filter-text">Smalltalk</span> <span>82</span></a>
<input type=checkbox data-action="/directory/smalltalk/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/eiffel/" class="txt"><span class="filter-text">Eiffel</span> <span>80</span></a>
<input type=checkbox data-action="/directory/eiffel/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/labview/" class="txt"><span class="filter-text">LabVIEW</span> <span>80</span></a>
<input type=checkbox data-action="/directory/labview/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/idl/" class="txt"><span class="filter-text">IDL</span> <span>79</span></a>
<input type=checkbox data-action="/directory/idl/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/rexx/" class="txt"><span class="filter-text">Rexx</span> <span>66</span></a>
<input type=checkbox data-action="/directory/rexx/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/powershell/" class="txt"><span class="filter-text">PowerShell</span> <span>54</span></a>
<input type=checkbox data-action="/directory/powershell/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/algol-68/" class="txt"><span class="filter-text">ALGOL 68</span> <span>51</span></a>
<input type=checkbox data-action="/directory/algol-68/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/cobol/" class="txt"><span class="filter-text">COBOL</span> <span>48</span></a>
<input type=checkbox data-action="/directory/cobol/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/elixir/" class="txt"><span class="filter-text">Elixir</span> <span>44</span></a>
<input type=checkbox data-action="/directory/elixir/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/gambas/" class="txt"><span class="filter-text">Gambas</span> <span>44</span></a>
<input type=checkbox data-action="/directory/gambas/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/progress/" class="txt"><span class="filter-text">PROGRESS</span> <span>38</span></a>
<input type=checkbox data-action="/directory/progress/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/r/" class="txt"><span class="filter-text">R</span> <span>37</span></a>
<input type=checkbox data-action="/directory/r/">
</label>
<li>
<label class="filter-choice">
 <a href="/directory/dart/" class="txt"><span class="filter-text">Dart</span> <span>35</span></a>
<input type=checkbox data-action="/directory/dart/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/xbase-clipper/" class="txt"><span class="filter-text">XBase/Clipper</span> <span>34</span></a>
<input type=checkbox data-action="/directory/xbase-clipper/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/mathematica/" class="txt"><span class="filter-text">Mathematica</span> <span>33</span></a>
<input type=checkbox data-action="/directory/mathematica/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/euphoria/" class="txt"><span class="filter-text">Euphoria</span> <span>32</span></a>
<input type=checkbox data-action="/directory/euphoria/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/mumps/" class="txt"><span class="filter-text">MUMPS</span> <span>29</span></a>
<input type=checkbox data-action="/directory/mumps/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/xbasic/" class="txt"><span class="filter-text">XBasic</span> <span>27</span></a>
<input type=checkbox data-action="/directory/xbasic/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/blitzmax/" class="txt"><span class="filter-text">BlitzMax</span> <span>26</span></a>
<input type=checkbox data-action="/directory/blitzmax/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/haxe/" class="txt"><span class="filter-text">haXe</span> <span>26</span></a>
<input type=checkbox data-action="/directory/haxe/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/rebol/" class="txt"><span class="filter-text">REBOL</span> <span>25</span></a>
<input type=checkbox data-action="/directory/rebol/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/curl/" class="txt"><span class="filter-text">Curl</span> <span>24</span></a>
<input type=checkbox data-action="/directory/curl/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/oberon/" class="txt"><span class="filter-text">Oberon</span> <span>24</span></a>
<input type=checkbox data-action="/directory/oberon/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/visual-foxpro/" class="txt"><span class="filter-text">Visual FoxPro</span> <span>23</span></a>
<input type=checkbox data-action="/directory/visual-foxpro/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/apl/" class="txt"><span class="filter-text">APL</span> <span>22</span></a>
<input type=checkbox data-action="/directory/apl/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/logo/" class="txt"><span class="filter-text">Logo</span> <span>22</span></a>
<input type=checkbox data-action="/directory/logo/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/solidity/" class="txt"><span class="filter-text">Solidity</span> <span>22</span></a>
<input type=checkbox data-action="/directory/solidity/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/pike/" class="txt"><span class="filter-text">Pike</span> <span>20</span></a>
<input type=checkbox data-action="/directory/pike/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/lpc/" class="txt"><span class="filter-text">LPC</span> <span>19</span></a>
<input type=checkbox data-action="/directory/lpc/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/boo/" class="txt"><span class="filter-text">Boo</span> <span>17</span></a>
<input type=checkbox data-action="/directory/boo/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/modula/" class="txt"><span class="filter-text">Modula</span> <span>16</span></a>
<input type=checkbox data-action="/directory/modula/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/simulink/" class="txt"><span class="filter-text">Simulink</span> <span>16</span></a>
<input type=checkbox data-action="/directory/simulink/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/scilab/" class="txt"><span class="filter-text">Scilab</span> <span>15</span></a>
<input type=checkbox data-action="/directory/scilab/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/vala/" class="txt"><span class="filter-text">Vala</span> <span>15</span></a>
<input type=checkbox data-action="/directory/vala/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/julia/" class="txt"><span class="filter-text">Julia</span> <span>14</span></a>
<input type=checkbox data-action="/directory/julia/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/crystal/" class="txt"><span class="filter-text">Crystal</span> <span>13</span></a>
<input type=checkbox data-action="/directory/crystal/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/clarion/" class="txt"><span class="filter-text">Clarion</span> <span>11</span></a>
<input type=checkbox data-action="/directory/clarion/">
</label>
 <li>
<label class="filter-choice">
<a href="/directory/coffeescript/" class="txt"><span class="filter-text">CoffeeScript</span> <span>10</span></a>
<input type=checkbox data-action="/directory/coffeescript/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/gamemaker/" class="txt"><span class="filter-text">GameMaker</span> <span>9</span></a>
<input type=checkbox data-action="/directory/gamemaker/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/opencl/" class="txt"><span class="filter-text">OpenCL</span> <span>8</span></a>
<input type=checkbox data-action="/directory/opencl/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/oz/" class="txt"><span class="filter-text">Oz</span> <span>7</span></a>
<input type=checkbox data-action="/directory/oz/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/transcript-revolution/" class="txt"><span class="filter-text">Transcript/Revolution</span> <span>6</span></a>
<input type=checkbox data-action="/directory/transcript-revolution/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/kaya/" class="txt"><span class="filter-text">Kaya</span> <span>5</span></a>
<input type=checkbox data-action="/directory/kaya/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/pl-i-programming-language-one/" class="txt"><span class="filter-text">PL/I (Programming Language One)</span> <span>5</span></a>
<input type=checkbox data-action="/directory/pl-i-programming-language-one/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/filemaker-script/" class="txt"><span class="filter-text">Filemaker Script</span> <span>4</span></a>
<input type=checkbox data-action="/directory/filemaker-script/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/scriptol/" class="txt"><span class="filter-text">Scriptol</span> <span>4</span></a>
<input type=checkbox data-action="/directory/scriptol/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/euler/" class="txt"><span class="filter-text">Euler</span> <span>3</span></a>
<input type=checkbox data-action="/directory/euler/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/fenix/" class="txt"><span class="filter-text">Fenix</span> <span>2</span></a>
<input type=checkbox data-action="/directory/fenix/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/lotusscript/" class="txt"><span class="filter-text">LotusScript</span> <span>2</span></a>
<input type=checkbox data-action="/directory/lotusscript/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/prism/" class="txt"><span class="filter-text">Prism</span> <span>2</span></a>
<input type=checkbox data-action="/directory/prism/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/scicos/" class="txt"><span class="filter-text">Scicos</span> <span>2</span></a>
<input type=checkbox data-action="/directory/scicos/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/turing/" class="txt"><span class="filter-text">Turing</span> <span>2</span></a>
<input type=checkbox data-action="/directory/turing/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/dylan/" class="txt"><span class="filter-text">Dylan</span> <span>1</span></a>
<input type=checkbox data-action="/directory/dylan/">
</label>
<li>
<label class="filter-choice">
<a href="/directory/simula/" class="txt"><span class="filter-text">Simula</span> <span>1</span></a>
<input type=checkbox data-action="/directory/simula/">
</label>
</ul>
</div>
</div>
<div class="facet">
<div class="as-h2">
Status
</div>
<div id="facet-wrapper-developmentstatus" data-toggler=".show-for-large">
<ul id="facet-developmentstatus" data-toggler=".abbrev" class="facet-items abbrev">
<li class=show>
<label class="filter-choice">
<a href="/directory/?developmentstatus=5-production-stable" class="txt"><span class="filter-text">Production/Stable</span> <span>47,663</span></a>
<input type=checkbox data-action="/directory/?developmentstatus=5-production-stable">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/?developmentstatus=4-beta" class="txt"><span class="filter-text">Beta</span> <span>45,555</span></a>
<input type=checkbox data-action="/directory/?developmentstatus=4-beta">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/?developmentstatus=3-alpha" class="txt"><span class="filter-text">Alpha</span> <span>30,096</span></a>
<input type=checkbox data-action="/directory/?developmentstatus=3-alpha">
</label>
<li class=show>
<label class="filter-choice">
<a href="/directory/?developmentstatus=2-pre-alpha" class="txt"><span class="filter-text">Pre-Alpha</span> <span>24,342</span></a>
<input type=checkbox data-action="/directory/?developmentstatus=2-pre-alpha">
</label>
<li class="more"><a data-toggle="facet-developmentstatus">More...</a></li><li>
<label class="filter-choice">
<a href="/directory/?developmentstatus=1-planning" class="txt"><span class="filter-text">Planning</span> <span>22,791</span></a>
<input type=checkbox data-action="/directory/?developmentstatus=1-planning">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?developmentstatus=7-inactive" class="txt"><span class="filter-text">Inactive</span> <span>5,749</span></a>
<input type=checkbox data-action="/directory/?developmentstatus=7-inactive">
</label>
<li>
<label class="filter-choice">
<a href="/directory/?developmentstatus=6-mature" class="txt"><span class="filter-text">Mature</span> <span>4,434</span></a>
<input type=checkbox data-action="/directory/?developmentstatus=6-mature">
</label>
</ul>
</div>
</div>
<script>
    $('.filter-choice a').on("click", function(e){
        e.preventDefault();
        $(e.currentTarget).siblings('input').trigger('click');
        return true;
    });
    $('.filter-choice input[type=checkbox]').on('change', SF.followObfuscatedLink);
</script>
</form>
</div>
</div>
</div>
<div class="l-gutter">
</div>
<div class="l-content-column">
<section class="m-project-search-results">
<script>
    if (!SF.wireOutboundZoneTrackingComplete) {  
        $(SF.wireOutboundZoneTracking);
        $('body').append('<iframe src="https://c.sf-syn.com/conversion_outbound_tracker/sf" id="frame-zone-outbound" style="display: none;"></iframe>');
        SF.wireOutboundZoneTrackingComplete = true;
    }
</script>
<div class="as-header">
<div class="m-cross-dir-search-summary">
<h2>
Top Apps
</h2>
<a href="/software/">View related business solutions</a>
</div>
<div class="m-removable-filters hide-for-large">
<span class="tip tooltip-removable-filters show-for-large" aria-haspopup="true" data-position="top" data-tooltip-class="tooltip">
<svg class="svgico info-circle" data-name="info-circle" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200.2 200" style="enable-background:new 0 0 200.2 200;" xml:space="preserve"><circle class="st0" style="fill: #fff" cx="99.8" cy="100" r="89.8" /><g><path style="fill:#000;" class="foo-bar" d="M109,0.6c24.2,2.2,45.1,11.7,62,28.9c22.5,22.9,32.1,50.6,28.4,82.5c-3.1,26.9-15.5,49.4-37,65.8c-32.9,25.1-69,29.1-106.3,11.3c-30-14.3-47.8-39-54.2-71.7c-0.7-3.3-1-6.7-1.5-10.1c-0.5-4.7-0.5-9.6,0-14.8C0.7,90.3,1,88.1,1.3,86c3.4-23,13.5-42.6,30.4-58.5C46,13.8,63,5.3,82.5,1.8C86,1.2,93,0.1,98.6,0.1C104.6,0.1,109,0.6,109,0.6z M183,99.9c-0.2-46.1-37.4-82.9-84-82.4C53.8,18,17.1,55.1,17.7,101c0.6,45.2,37.7,81.9,83.7,81.3C146.6,181.6,182.7,145,183,99.9z" /><path style="fill:#000;" d="M107,75c9.2,0,13.8,5.6,11.4,15.1c-1.7,6.9-4.4,13.6-6.8,20.4c-2.9,8.1-6,16.2-9,24.3c-0.6,1.6-1,3.3-1.2,4.9c-0.1,0.9,0.3,2.2,0.9,2.6c0.6,0.4,2.1,0.4,2.7-0.1c2.5-1.8,4.8-3.8,7-6c2.3-2.3,4.3-4.8,6.6-7.1c0.5-0.5,1.7-1.2,2.4-0.9c0.1,0.1,0.2,0.2,0.3,0.3c0.6,0.7,0.9,1.7,1,2.6c0.1,0.8-0.5,1.8-1,2.5c-7.8,11-17.8,19.3-31,22.9c-3,0.8-6.3,0.7-9.4,0.3c-4.1-0.5-7.4-4.3-7.2-8.4c0.2-4.5,1.1-8.6,2.6-12.8c4.5-12.6,9.4-25.1,14.2-37.6c0.9-2.3,2-4.5,2.6-6.9c0.3-1.2,0.2-3.1-0.5-3.9c-0.5-0.6-2.8-0.3-3.7,0.3c-2.3,1.6-4.3,3.5-6.3,5.4c-2.3,2.4-4.4,5-6.6,7.4c-0.9,1-2.1,2.1-3.6,0.9c-1.5-1.1-1.2-2.6-0.3-3.9c8-11.1,17.5-20.2,31.9-22.3c0.3,0,0.6-0.1,0.9-0.1C105.6,75,106.3,75,107,75z" /><path style="fill:#000;" d="M128.9,54.8c0,9.9-10.3,16.8-19.5,13.1c-5.4-2.2-8.1-8.5-6.3-14.8c2.1-7.3,9.7-11.7,17.1-10C125.6,44.4,128.9,48.8,128.9,54.8z" /></g></svg></span>
<button class="btn-dir-filter button green with-icon hide-for-large">
 Filter Options
<svg data-name="icon-filter" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <path d="M0.211603849,1.61 C2.23160385,4.2 5.96160385,9 5.96160385,9 L5.96160385,15 C5.96160385,15.55 6.41160385,16 6.96160385,16 L8.96160385,16 C9.51160385,16 9.96160385,15.55 9.96160385,15 L9.96160385,9 C9.96160385,9 13.6816038,4.2 15.7016038,1.61 C16.2116038,0.95 15.7416038,0 14.9116038,0 L1.00160385,0 C0.171603849,0 -0.298396151,0.95 0.211603849,1.61 Z" fill="#666666" fill-rule="nonzero"></path> </g></svg>
</button>
</div>
</div>
<ul class="projects no-top-border" itemscope itemtype="http://schema.org/ItemList">
<li class="nel standard trunc-eligible " data-id="14933" data-cid="10697">
<span id="d78792b1-2332-4c3b-8389-1eb5278c1979"></span>
<script>
    /* globals bizx */
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'], '/directory/tp3/?b=55001&c=10697&z=52329&cb=93f42cf469', "FortiWeb Cloud WAF-as-a-Service for AWS", 'd78792b1-2332-4c3b-8389-1eb5278c1979');
</script>
<a class="application-image thumbnail" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=55001__zoneid=52329__cb=93f42cf469__oadest=https%3A%2F%2Faws.fortiweb-cloud.com%2F%3Futm_source%3Dslashdot%26utm_medium%3Dnel%26utm_campaign%3Dfortiweb-aws%2F%23lp-pom-block-24" target="_blank" rel="nofollow">
<img class="main-image" src="//a.fsdn.com/con/app/nel_img/14933" alt="FortiWeb Cloud WAF-as-a-Service for AWS Icon">
</a>
<div class="wrapper">
<div class="heading">
<div class="heading-main">
<a href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=55001__zoneid=52329__cb=93f42cf469__oadest=https%3A%2F%2Faws.fortiweb-cloud.com%2F%3Futm_source%3Dslashdot%26utm_medium%3Dnel%26utm_campaign%3Dfortiweb-aws%2F%23lp-pom-block-24" target="_blank" rel="nofollow" title="Find out more about FortiWeb Cloud WAF-as-a-Service for AWS">FortiWeb Cloud WAF-as-a-Service for AWS</a>
<p class="teaser">Get Comprehensive and Easy-to-Use Web App and API Protection Built for Your AWS Environments</p>
</div>
</div>
<div class="tiles">
<div class="tile">
<div class="description ">
<div class="description-inner">
Defend your web apps and APIs from threats like the OWASP Top 10 and zero-day attacks. FortiWeb Cloud for AWS provides API discovery and protection, bot management, threat analytics, and more, in one low-cost solution. In addition, the latest intelligence from FortiGuard Labs helps you boost your protection against the latest risks. Deploy today in AWS Marketplace.
</div>
</div>
</div>
</div>
</div>
<div class="download standard">
<a class="button green wide sfdl sfdl-lite" target="_blank" rel="nofollow" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=55001__zoneid=52329__cb=93f42cf469__oadest=https%3A%2F%2Faws.fortiweb-cloud.com%2F%3Futm_source%3Dslashdot%26utm_medium%3Dnel%26utm_campaign%3Dfortiweb-aws%2F%23lp-pom-block-24">14-Day Free Trial</a>
</div>
</li>
<li class="nel standard trunc-eligible " data-id="14819" data-cid="10667">
<span id="515066db-fff3-40c6-8c0f-51628fe167d7"></span>
<script>
    /* globals bizx */
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'], '/directory/tp3/?b=54837&c=10667&z=52165&cb=41f6a28b3b', "Modern protection for your critical data", '515066db-fff3-40c6-8c0f-51628fe167d7');
</script>
<a class="application-image thumbnail" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=54837__zoneid=52165__cb=41f6a28b3b__oadest=https%3A%2F%2Fazuremarketplace.microsoft.com%2Fen-us%2Fmarketplace%2Fapps%2Fdellemc.ppdm_ddve_0_0_1%3FOCID%3DSlashdot_DP1" target="_blank" rel="nofollow">
<img class="main-image" src="//a.fsdn.com/con/app/nel_img/14819" alt="Modern protection for your critical data Icon">
</a>
<div class="wrapper">
<div class="heading">
<div class="heading-main">
<a href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=54837__zoneid=52165__cb=41f6a28b3b__oadest=https%3A%2F%2Fazuremarketplace.microsoft.com%2Fen-us%2Fmarketplace%2Fapps%2Fdellemc.ppdm_ddve_0_0_1%3FOCID%3DSlashdot_DP1" target="_blank" rel="nofollow" title="Find out more about Modern protection for your critical data">Modern protection for your critical data</a>
<p class="teaser">Ranked #1 in Data Protection&nbsp;Appliances and Protection Software by the IDC</p>
</div>
</div>
<div class="tiles">
<div class="tile">
<div class="description ">
<div class="description-inner">
As you digitally transform your business, is your critical data protected from breeches or faults? Dell Data Protection delivers long-term retention in Azure. Deploy directly from Azure Marketplace using your MACC. Ranked #1 in Data Protection Appliances and Protection Software by the IDC, Dell Data Protection protects over 1,700 customers in the public cloud.
</div>
</div>
</div>
</div>
</div>
<div class="download standard">
<a class="button green wide sfdl sfdl-lite" target="_blank" rel="nofollow" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=54837__zoneid=52165__cb=41f6a28b3b__oadest=https%3A%2F%2Fazuremarketplace.microsoft.com%2Fen-us%2Fmarketplace%2Fapps%2Fdellemc.ppdm_ddve_0_0_1%3FOCID%3DSlashdot_DP1">Learn More</a>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">1</span>
<div class="result-heading">
<a class="project-icon  default-project-icon show-outline" href="/projects/mingw/">
<svg data-name="default-icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><rect class="st0" width="300" height="300" /><g><path class="st1" d="M162.5,154.8c0-28.9-10.2-42-15.6-46.9c-1.1-1-2.7-0.1-2.6,1.3c1.1,16.3-19.4,20.3-19.4,45.9h0c0,0.1,0,0.1,0,0.2c0,15.6,11.8,28.3,26.3,28.3c14.5,0,26.3-12.7,26.3-28.3c0-0.1,0-0.1,0-0.2h0c0-7.2-2.7-14.1-5.5-19.3c-0.5-1-2.1-0.6-1.9,0.3C174.9,158.1,162.5,171.8,162.5,154.8z" /><g><path class="st1" d="M131.2,215.6c-0.7,0-1.3-0.3-1.8-0.7l-67.2-67.1c-1-1-1-2.6,0-3.6l70.9-70.9c0.5-0.5,1.1-0.7,1.8-0.7h20.4c1.2,0,2,0.8,2.3,1.6c0.3,0.7,0.3,1.9-0.5,2.7l-66.7,66.7c-1.3,1.3-1.3,3.5,0,4.9l52.7,52.7c1,1,1,2.6,0,3.6L133,214.9C132.5,215.4,131.9,215.6,131.2,215.6z" /></g><g><path class="st1" d="M144.7,227.4c-1.2,0-2-0.8-2.3-1.5c-0.3-0.7-0.3-1.9,0.5-2.7l66.7-66.7c0.7-0.6,1-1.5,1-2.4s-0.4-1.8-1-2.4l-52.7-52.7c-1-1-1-2.6,0-3.6l10.2-10.2c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.3,1.8,0.7l67,67.1c0.5,0.5,0.7,1.1,0.7,1.8s-0.3,1.3-0.7,1.8l-70.9,70.9c-0.5,0.5-1.1,0.7-1.8,0.7H144.7z" /></g></g></svg>
</a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/mingw/">
<div class="title-subtitle-wrapper">
<a href="/projects/mingw/" class="result-heading-title">
<h3>MinGW - Minimalist GNU for Windows</h3></a>
<p class="subtitle">
A native Windows port of the GNU Compiler Collection (GCC)
</p>
</div>
<div class="description">
This project is in the process of moving to osdn.net/projects/mingw, you can continue to follow us there.
MinGW: A native Windows port of the GNU Compiler Collection (GCC), with freely distributable import libraries and header files for building native Windows applications; includes extensions to the MSVC runtime to support C99 functionality. All of MinGW&#39;s software will execute on the 64bit Windows platforms.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive empty">
<svg data-name="sf_star_grey" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#CCCCCB" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/mingw/reviews/" class="count" title="MinGW - Minimalist GNU for Windows Reviews">
169 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
3,710,623 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2021-09-05">2021-09-05</time>
</div>
<a href="/projects/mingw/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">2</span>
<div class="result-heading">
<a class="project-icon  default-project-icon show-outline" href="/projects/corefonts/">
<svg data-name="default-icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><rect class="st0" width="300" height="300" /><g><path class="st1" d="M162.5,154.8c0-28.9-10.2-42-15.6-46.9c-1.1-1-2.7-0.1-2.6,1.3c1.1,16.3-19.4,20.3-19.4,45.9h0c0,0.1,0,0.1,0,0.2c0,15.6,11.8,28.3,26.3,28.3c14.5,0,26.3-12.7,26.3-28.3c0-0.1,0-0.1,0-0.2h0c0-7.2-2.7-14.1-5.5-19.3c-0.5-1-2.1-0.6-1.9,0.3C174.9,158.1,162.5,171.8,162.5,154.8z" /><g><path class="st1" d="M131.2,215.6c-0.7,0-1.3-0.3-1.8-0.7l-67.2-67.1c-1-1-1-2.6,0-3.6l70.9-70.9c0.5-0.5,1.1-0.7,1.8-0.7h20.4c1.2,0,2,0.8,2.3,1.6c0.3,0.7,0.3,1.9-0.5,2.7l-66.7,66.7c-1.3,1.3-1.3,3.5,0,4.9l52.7,52.7c1,1,1,2.6,0,3.6L133,214.9C132.5,215.4,131.9,215.6,131.2,215.6z" /></g><g><path class="st1" d="M144.7,227.4c-1.2,0-2-0.8-2.3-1.5c-0.3-0.7-0.3-1.9,0.5-2.7l66.7-66.7c0.7-0.6,1-1.5,1-2.4s-0.4-1.8-1-2.4l-52.7-52.7c-1-1-1-2.6,0-3.6l10.2-10.2c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.3,1.8,0.7l67,67.1c0.5,0.5,0.7,1.1,0.7,1.8s-0.3,1.3-0.7,1.8l-70.9,70.9c-0.5,0.5-1.1,0.7-1.8,0.7H144.7z" /></g></g></svg>
</a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/corefonts/">
<div class="title-subtitle-wrapper">
<a href="/projects/corefonts/" class="result-heading-title">
<h3>Microsoft&#39;s TrueType core fonts</h3></a>
<p class="subtitle">
A smart package of Microsoft&#39;s core fonts
</p>
</div>
<div class="description">
So far this project consists of a source rpm that can be used to easily create a binary rpm package that, when installed, gives access to Microsoft&#39;s TrueType core fonts for the Web.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/corefonts/reviews/" class="count" title="Microsoft&#39;s TrueType core fonts Reviews">
30 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
1,613,385 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2014-08-28">2014-08-28</time>
</div>
<a href="/projects/corefonts/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">3</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/sapnweclipse/">
<img alt="SAP NetWeaver Server Adapter for Eclipse" title="SAP NetWeaver Server Adapter for Eclipse" src="//a.fsdn.com/allura/p/sapnweclipse/icon?1468988195" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/sapnweclipse/">
<div class="title-subtitle-wrapper">
<a href="/projects/sapnweclipse/" class="result-heading-title">
<h3>SAP NetWeaver Server Adapter for Eclipse</h3></a>
<p class="subtitle">
Integrates Eclipse with the SAP NetWeaver Application Server
</p>
</div>
<div class="description">
Integrates Eclipse with the SAP NetWeaver Application Server.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>

<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/sapnweclipse/reviews/" class="count" title="SAP NetWeaver Server Adapter for Eclipse Reviews">
36 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
916,500 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2016-07-20">2016-07-20</time>
</div>
<a href="/projects/sapnweclipse/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">4</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/orphamielautoclicker/">
<img alt="AutoClicker" title="AutoClicker" src="//a.fsdn.com/allura/p/orphamielautoclicker/icon?1563552826" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/orphamielautoclicker/">
<div class="title-subtitle-wrapper">
<a href="/projects/orphamielautoclicker/" class="result-heading-title">
<h3>AutoClicker</h3></a>
<p class="subtitle">
A full-fledged autoclicker with two modes of autoclicking
</p>
</div>
<div class="description">
A full-fledged autoclicker with two modes of autoclicking, at your dynamic cursor location or at a prespecified location. The maximum amounts of clicked can also be set (or left as infinite).
Hotkeys work in the background for convenience.
If you want to automate group of mouse actions, Please try this https://sourceforge.net/projects/orphamielautoclicker/files/AutoClickers.exe/download
Whats new in v1.0.0.2:
1. You can now change your hotkeys!
2. Changed the about page
3. Added a few minor options
v1.0.0.1 :
1. Your settings are now saved from your last session so you only need to enter them once. (Includes last fixed location)
2. Added double clicking and triple clicking
3. Added Right clicking and middle clicking
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive half">
<svg data-name="sf_star_yellow_half" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path class="st1" fill="#CCCCCB" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8c11.3,37.1,22.6,74,34,110.9c39-0.8,78-1.5,117.2-2.3c-0.3,0.3-0.5,0.4-0.7,0.6c-15.7,11-31.5,22.1-47.2,33.1c-15.5,10.8-30.9,21.7-46.4,32.5c-0.5,0.4-0.6,0.7-0.4,1.3c12.1,35.8,24.3,71.6,36.4,107.4c0.1,0.2,0.1,0.4,0.2,0.8C210.8,269.1,179.8,246.3,148.8,223.4z" /><path class="st0" fill="#ffcc00" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8" /></svg>
</div>
</div>
<a href="/projects/orphamielautoclicker/reviews/" class="count" title="AutoClicker Reviews">
123 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
911,595 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2022-12-29">2022-12-29</time>
</div>
<a href="/projects/orphamielautoclicker/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li class="nel standard trunc-eligible " data-id="14927" data-cid="10695">
<span id="a1f3dfc8-46e7-414e-b366-8200c343af45"></span>
<script>
    /* globals bizx */
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'], '/directory/tp3/?b=54995&c=10695&z=52323&cb=3e30f00c72', "FortiWeb Cloud WAF-as-a-Service for Azure", 'a1f3dfc8-46e7-414e-b366-8200c343af45');
</script>
<a class="application-image thumbnail" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=54995__zoneid=52323__cb=3e30f00c72__oadest=https%3A%2F%2Fazure.fortiweb-cloud.com%2F%3Futm_source%3Dslashdot%26utm_medium%3Dnative%26utm_campaign%3DFortiWebAzure" target="_blank" rel="nofollow">
<img class="main-image" src="//a.fsdn.com/con/app/nel_img/14927" alt="FortiWeb Cloud WAF-as-a-Service for Azure Icon">
</a>
<div class="wrapper">
<div class="heading">
<div class="heading-main">
<a href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=54995__zoneid=52323__cb=3e30f00c72__oadest=https%3A%2F%2Fazure.fortiweb-cloud.com%2F%3Futm_source%3Dslashdot%26utm_medium%3Dnative%26utm_campaign%3DFortiWebAzure" target="_blank" rel="nofollow" title="Find out more about FortiWeb Cloud WAF-as-a-Service for Azure">FortiWeb Cloud WAF-as-a-Service for Azure</a>
<p class="teaser">Built for Azure Environments, Experience Web App and API Protection Without Compromise</p>
</div>
</div>
<div class="tiles">
<div class="tile">
<div class="description ">
<div class="description-inner">
Reduce alert fatigue and securely deploy your web apps and APIs on Azure. FortiWeb Cloud WAF is easy to manage and saves you time and budget. In addition to protection against threats such as OWASP Top 10 and zero-day attacks, you get API protection, bot management, threat analytics, and the latest updates from FortiGuard Labs. Deploy today in Azure Marketplace.
</div>
</div>
</div>
</div>
</div>
<div class="download standard">
<a class="button green wide sfdl sfdl-lite" target="_blank" rel="nofollow" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=54995__zoneid=52323__cb=3e30f00c72__oadest=https%3A%2F%2Fazure.fortiweb-cloud.com%2F%3Futm_source%3Dslashdot%26utm_medium%3Dnative%26utm_campaign%3DFortiWebAzure">14-Day Free Trial</a>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">5</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/xampp/">
<img alt="XAMPP" title="XAMPP" src="//a.fsdn.com/allura/p/xampp/icon?1599843055?&amp;w=120" srcset="//a.fsdn.com/allura/p/xampp/icon?1599843055?&amp;w=180 1.5x
        ,
            //a.fsdn.com/allura/p/xampp/icon?1599843055?&amp;w=240 2x" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/xampp/">
<div class="title-subtitle-wrapper">
<a href="/projects/xampp/" class="result-heading-title">
<h3>XAMPP</h3></a>
<p class="subtitle">
An easy to install Apache distribution containing MySQL, PHP, and Perl
</p>
</div>
<div class="description">
XAMPP is a very easy to install Apache Distribution for Linux, Solaris, Windows, and Mac OS X. The package includes the Apache web server, MySQL, PHP, Perl, a FTP server and phpMyAdmin.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive half">
<svg data-name="sf_star_yellow_half" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path class="st1" fill="#CCCCCB" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8c11.3,37.1,22.6,74,34,110.9c39-0.8,78-1.5,117.2-2.3c-0.3,0.3-0.5,0.4-0.7,0.6c-15.7,11-31.5,22.1-47.2,33.1c-15.5,10.8-30.9,21.7-46.4,32.5c-0.5,0.4-0.6,0.7-0.4,1.3c12.1,35.8,24.3,71.6,36.4,107.4c0.1,0.2,0.1,0.4,0.2,0.8C210.8,269.1,179.8,246.3,148.8,223.4z" /><path class="st0" fill="#ffcc00" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8" /></svg>
</div>
</div>
<a href="/projects/xampp/reviews/" class="count" title="XAMPP Reviews">
190 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
586,873 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2023-04-09">2023-04-09</time>
</div>
<a href="/projects/xampp/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">6</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/portableapps/">
<img alt="PortableApps.com" title="PortableApps.com" src="//a.fsdn.com/allura/p/portableapps/icon?1532794967?&amp;w=120" srcset="//a.fsdn.com/allura/p/portableapps/icon?1532794967?&amp;w=180 1.5x
        ,
            //a.fsdn.com/allura/p/portableapps/icon?1532794967?&amp;w=240 2x" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/portableapps/">
<div class="title-subtitle-wrapper">
<a href="/projects/portableapps/" class="result-heading-title">
<h3>PortableApps.com</h3></a>
<p class="subtitle">
Portable software for cloud, local, and portable USB drives
</p>
</div>
<div class="description">
PortableApps.com is the world&#39;s most popular portable software solution allowing you to take your favorite Windows software with you. It works in any cloud drive folder (Dropbox, Google Drive, OneDrive, etc), on any portable storage device (USB flash drive, memory card, portable hard drive, etc), or from your local hard drive. With millions of users all over the world and a full collection of open source and freeware software (as well commercial software), PortableApps.com is the most complete solution for life on the go.
PortableApps.com was founded by John T. Haller, whose Portable Firefox started the portable software trend. We&#39;ve been making software portable since March 2004. Today, our team stands at over 200 developers, translators, application packagers, designers, and release testers with nearly a billion app downloads. Our goal is to centralize the knowledge and development of portable software and build an open platform that any software or hardware developer can use
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/portableapps/reviews/" class="count" title="PortableApps.com Reviews">
255 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
429,059 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2023-05-16">16 hours ago</time>
</div>
<a href="/projects/portableapps/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">7</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/openofficeorg.mirror/">
<img alt="Apache OpenOffice" title="Apache OpenOffice" src="//a.fsdn.com/allura/mirror/openofficeorg/icon?1675777998?&amp;w=120" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/openofficeorg.mirror/">
<div class="title-subtitle-wrapper">
<a href="/projects/openofficeorg.mirror/" class="result-heading-title">
<h3>Apache OpenOffice</h3></a>
<p class="subtitle">
The free and Open Source productivity suite
</p>
</div>
<div class="description">
Free alternative for Office productivity tools: Apache OpenOffice - formerly known as OpenOffice.org - is an open-source office productivity software suite containing word processor, spreadsheet, presentation, graphics, formula editor, and database management applications. OpenOffice is available in many languages, works on all common computers, stores data in ODF - the international open standard format - and is able to read and write files in other formats, included the format used by the most common office suite packages. OpenOffice is also able to export files in PDF format. OpenOffice has supported extensions, in a similar manner to Mozilla Firefox, making easy to add new functionality to an existing OpenOffice installation.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive half">
<svg data-name="sf_star_yellow_half" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path class="st1" fill="#CCCCCB" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8c11.3,37.1,22.6,74,34,110.9c39-0.8,78-1.5,117.2-2.3c-0.3,0.3-0.5,0.4-0.7,0.6c-15.7,11-31.5,22.1-47.2,33.1c-15.5,10.8-30.9,21.7-46.4,32.5c-0.5,0.4-0.6,0.7-0.4,1.3c12.1,35.8,24.3,71.6,36.4,107.4c0.1,0.2,0.1,0.4,0.2,0.8C210.8,269.1,179.8,246.3,148.8,223.4z" /><path class="st0" fill="#ffcc00" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8" /></svg>
</div>
</div>
<a href="/projects/openofficeorg.mirror/reviews/" class="count" title="Apache OpenOffice Reviews">
329 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
431,854 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2023-02-23">2023-02-23</time>
</div>
<a href="/projects/openofficeorg.mirror/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">8</span>
<div class="result-heading">
<a class="project-icon  default-project-icon show-outline" href="/projects/npppluginmgr/">
<svg data-name="default-icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><rect class="st0" width="300" height="300" /><g><path class="st1" d="M162.5,154.8c0-28.9-10.2-42-15.6-46.9c-1.1-1-2.7-0.1-2.6,1.3c1.1,16.3-19.4,20.3-19.4,45.9h0c0,0.1,0,0.1,0,0.2c0,15.6,11.8,28.3,26.3,28.3c14.5,0,26.3-12.7,26.3-28.3c0-0.1,0-0.1,0-0.2h0c0-7.2-2.7-14.1-5.5-19.3c-0.5-1-2.1-0.6-1.9,0.3C174.9,158.1,162.5,171.8,162.5,154.8z" /><g><path class="st1" d="M131.2,215.6c-0.7,0-1.3-0.3-1.8-0.7l-67.2-67.1c-1-1-1-2.6,0-3.6l70.9-70.9c0.5-0.5,1.1-0.7,1.8-0.7h20.4c1.2,0,2,0.8,2.3,1.6c0.3,0.7,0.3,1.9-0.5,2.7l-66.7,66.7c-1.3,1.3-1.3,3.5,0,4.9l52.7,52.7c1,1,1,2.6,0,3.6L133,214.9C132.5,215.4,131.9,215.6,131.2,215.6z" /></g><g><path class="st1" d="M144.7,227.4c-1.2,0-2-0.8-2.3-1.5c-0.3-0.7-0.3-1.9,0.5-2.7l66.7-66.7c0.7-0.6,1-1.5,1-2.4s-0.4-1.8-1-2.4l-52.7-52.7c-1-1-1-2.6,0-3.6l10.2-10.2c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.3,1.8,0.7l67,67.1c0.5,0.5,0.7,1.1,0.7,1.8s-0.3,1.3-0.7,1.8l-70.9,70.9c-0.5,0.5-1.1,0.7-1.8,0.7H144.7z" /></g></g></svg>
</a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/npppluginmgr/">
<div class="title-subtitle-wrapper">
<a href="/projects/npppluginmgr/" class="result-heading-title">
<h3>Notepad++ Plugin Manager (old repo)</h3></a>
<p class="subtitle">
Notepad++ Plugin Manager [deprecated - now on github]
</p>
</div>
<div class="description">
This project is the old location for the plugin list for Notepad++ Plugin Manager.
Please use https://github.com/bruderstein/npppluginmanager for any issues and current code
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive half">
<svg data-name="sf_star_yellow_half" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path class="st1" fill="#CCCCCB" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8c11.3,37.1,22.6,74,34,110.9c39-0.8,78-1.5,117.2-2.3c-0.3,0.3-0.5,0.4-0.7,0.6c-15.7,11-31.5,22.1-47.2,33.1c-15.5,10.8-30.9,21.7-46.4,32.5c-0.5,0.4-0.6,0.7-0.4,1.3c12.1,35.8,24.3,71.6,36.4,107.4c0.1,0.2,0.1,0.4,0.2,0.8C210.8,269.1,179.8,246.3,148.8,223.4z" /><path class="st0" fill="#ffcc00" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8" /></svg>
</div>
</div>
<a href="/projects/npppluginmgr/reviews/" class="count" title="Notepad++ Plugin Manager (old repo) Reviews">
62 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
346,006 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2019-07-19">2019-07-19</time>
</div>
<a href="/projects/npppluginmgr/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">9</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/scrcpy.mirror/">
<img alt="scrcpy" title="scrcpy" src="//a.fsdn.com/allura/mirror/scrcpy/icon?1680861781?&amp;w=120" srcset="//a.fsdn.com/allura/mirror/scrcpy/icon?1680861781?&amp;w=180 1.5x
        ,
            //a.fsdn.com/allura/mirror/scrcpy/icon?1680861781?&amp;w=240 2x" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/scrcpy.mirror/">
<div class="title-subtitle-wrapper">
<a href="/projects/scrcpy.mirror/" class="result-heading-title">
<h3>scrcpy</h3></a>
<p class="subtitle">
Display and control your Android device
</p>
</div>
<div class="description">
scrcpy is an application for displaying and controlling your Android device through USB connection (or over TCP/IP). It is cross-platform (GNU/Linux, macOS and Windows) and does not require any root access.
scrcpy displays only the device screen but offers great performance (30~60fps) and quality (1920×1080 or above). It’s got low latency (35~70ms) and a very low startup time (less than a second). It offers plenty of great features and is non-intrusive, with nothing left installed inside the device.
scrcpy works with Android devices with at least API 21 (Android 5.0) and adb debugging must be enabled on the device.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive empty">
<svg data-name="sf_star_grey" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#CCCCCB" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/scrcpy.mirror/reviews/" class="count" title="scrcpy Reviews">
10 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
9,947 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2023-04-07">2023-04-07</time>
</div>
<a href="/projects/scrcpy.mirror/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li class="nel standard trunc-eligible " data-id="15093" data-cid="10839">
<span id="cb5b97e7-bbd1-4c01-ac21-890203208f22"></span>
<script>
    /* globals bizx */
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'], '/directory/tp3/?b=55665&c=10839&z=52991&cb=e210e73df0', "Intelligent network automation for businesses and organizations", 'cb5b97e7-bbd1-4c01-ac21-890203208f22');
</script>
<a class="application-image thumbnail" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=55665__zoneid=52991__cb=e210e73df0__oadest=https%3A%2F%2Fbackbox.com%2Ffree-evaluation%2Fnetwork-automation%2F%3Fmk_lead_source%3DCampaign%26mk_lead_source_detail%3DSourceForge-Native-1%26mk_campaign%3D7015p0000013TYfAAM" target="_blank" rel="nofollow">
<img class="main-image" src="//a.fsdn.com/con/app/nel_img/15093" alt="Intelligent network automation for businesses and organizations Icon">
</a>
<div class="wrapper">
<div class="heading">
<div class="heading-main">
<a href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=55665__zoneid=52991__cb=e210e73df0__oadest=https%3A%2F%2Fbackbox.com%2Ffree-evaluation%2Fnetwork-automation%2F%3Fmk_lead_source%3DCampaign%26mk_lead_source_detail%3DSourceForge-Native-1%26mk_campaign%3D7015p0000013TYfAAM" target="_blank" rel="nofollow" title="Find out more about Intelligent network automation for businesses and organizations">Intelligent network automation for businesses and organizations</a>
<p class="teaser">Network automation for the hybrid multi-cloud era</p>
</div>
</div>
<div class="tiles">
<div class="tile">
<div class="description ">
<div class="description-inner">
BackBox seamlessly integrates with network monitoring and NetOps platforms and automates configuration backups, restores, and change detection. BackBox also provides before and after config diffs for change management, and automated remediation of discovered network security issues.
</div>
</div>
</div>
</div>
</div>
<div class="download standard">
<a class="button green wide sfdl sfdl-lite" target="_blank" rel="nofollow" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=55665__zoneid=52991__cb=e210e73df0__oadest=https%3A%2F%2Fbackbox.com%2Ffree-evaluation%2Fnetwork-automation%2F%3Fmk_lead_source%3DCampaign%26mk_lead_source_detail%3DSourceForge-Native-1%26mk_campaign%3D7015p0000013TYfAAM">Get a Free Trial</a>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">10</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/movistartv/">
<img alt="movistartv" title="movistartv" src="//a.fsdn.com/allura/p/movistartv/icon?1523871452" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/movistartv/">
<div class="title-subtitle-wrapper">
<a href="/projects/movistartv/" class="result-heading-title">
<h3>movistartv</h3></a>
<p class="subtitle">
Movistar+ Deco Virtual - Software decodificador
</p>
</div>
<div class="description">
Kodi Movistar+ TV es un ADDON para XBMC/ Kodi que permite disponer de un decodificador de los servicios IPTV de Movistar integrado en uno de los mediacenters mas populares.
El proyecto no trata solo de replicar los servicios de televisión, sino un concepto diferente de servicios integrados donde la TV tenga un protagonismo central pero no el único y que permita tanto ver la TV como un video de youtube, disponer un catalogo de películas y música ..
Autor: Victor M. Juidiaz Portilla (https://www.linkedin.com/in/victor-manuel-juidiaz-portilla-27bb48106)
Foro &#34;Oficial&#34;: http://www.kodimania.com/index.php?topic=860.0
Las principales funcionalidades de TV son:
- Actualización automática de canales.
- Guía de programación (EPG).
- Grabaciones en la Nube y en local.
- Últimos 7 días
- Visualización de grabaciones en la nube.
- Sincronización de grabaciones a local para evitar su caducidad.
- Gestión avanzada de series.
- Timeshift.
- DLNA
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive half">
<svg data-name="sf_star_yellow_half" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path class="st1" fill="#CCCCCB" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8c11.3,37.1,22.6,74,34,110.9c39-0.8,78-1.5,117.2-2.3c-0.3,0.3-0.5,0.4-0.7,0.6c-15.7,11-31.5,22.1-47.2,33.1c-15.5,10.8-30.9,21.7-46.4,32.5c-0.5,0.4-0.6,0.7-0.4,1.3c12.1,35.8,24.3,71.6,36.4,107.4c0.1,0.2,0.1,0.4,0.2,0.8C210.8,269.1,179.8,246.3,148.8,223.4z" /><path class="st0" fill="#ffcc00" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8" /></svg>
</div>
</div>
<a href="/projects/movistartv/reviews/" class="count" title="movistartv Reviews">
32 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
193,212 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2020-02-08">2020-02-08</time>
</div>
<a href="/projects/movistartv/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">11</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/winscp/">
<img alt="WinSCP" title="WinSCP" src="//a.fsdn.com/allura/p/winscp/icon?1529332361?&amp;w=120" srcset="//a.fsdn.com/allura/p/winscp/icon?1529332361?&amp;w=180 1.5x
        ,
            //a.fsdn.com/allura/p/winscp/icon?1529332361?&amp;w=240 2x" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/winscp/">
<div class="title-subtitle-wrapper">
<a href="/projects/winscp/" class="result-heading-title">
<h3>WinSCP</h3></a>
<p class="subtitle">
WinSCP is a free SFTP, SCP, S3, WebDAV, and FTP client for Windows.
</p>
</div>
<div class="description">
WinSCP is a popular free SFTP and FTP client for Windows, a powerful file manager that will improve your productivity. It offers an easy to use GUI to copy files between a local and remote computer using multiple protocols: Amazon S3, FTP, FTPS, SCP, SFTP or WebDAV. Power users can automate WinSCP using .NET assembly. WinSCP is available in English and many other languages.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/winscp/reviews/" class="count" title="WinSCP Reviews">
191 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
182,994 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2023-04-18">2023-04-18</time>
</div>
<a href="/projects/winscp/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">12</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/turbovnc/">
<img alt="TurboVNC" title="TurboVNC" src="//a.fsdn.com/allura/p/turbovnc/icon?1567883141?&amp;w=120" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/turbovnc/">
<div class="title-subtitle-wrapper">
<a href="/projects/turbovnc/" class="result-heading-title">
<h3>TurboVNC</h3></a>
<p class="subtitle">
High-speed, 3D-friendly, TightVNC-compatible remote desktop software
</p>
</div>
<div class="description">
TurboVNC is a high-performance, enterprise-quality version of VNC based on TightVNC, TigerVNC, and X.org. It contains a variant of Tight encoding that is tuned for maximum performance and compression with 3D applications (VirtualGL), video, and other image-intensive workloads. TurboVNC, in combination with VirtualGL, provides a complete solution for remotely displaying 3D applications with interactive performance. TurboVNC&#39;s high-speed encoding methods have been adopted by TigerVNC and libvncserver, and TurboVNC is also compatible with any other TightVNC derivative.
TurboVNC forked from TightVNC in 2004 and still covers all of the TightVNC 1.3.x features, but TurboVNC contains numerous feature enhancements and bug fixes relative to TightVNC, and it compresses 3D and video workloads much better than TightVNC while using generally only 5-20% of the CPU time of the latter. Using non-default settings, TurboVNC can also be made to compress 2D workloads as &#34;tightly&#34; as TightVNC.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/turbovnc/reviews/" class="count" title="TurboVNC Reviews">
7 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
224,269 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2023-02-27">2023-02-27</time>
</div>
<a href="/projects/turbovnc/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">13</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/scptoolkit.mirror/">
<img alt="ScpToolkit" title="ScpToolkit" src="//a.fsdn.com/allura/mirror/scptoolkit/icon?1611343243?&amp;w=120" srcset="//a.fsdn.com/allura/mirror/scptoolkit/icon?1611343243?&amp;w=180 1.5x
        ,
            //a.fsdn.com/allura/mirror/scptoolkit/icon?1611343243?&amp;w=240 2x" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/scptoolkit.mirror/">
<div class="title-subtitle-wrapper">
<a href="/projects/scptoolkit.mirror/" class="result-heading-title">
<h3>ScpToolkit</h3></a>
<p class="subtitle">
Windows Driver/XInput Wrapper- Sony DualShock Controllers (Deprecated)
</p>
</div>
<div class="description">
*ScpToolkit has been deprecated and is no longer maintained.*
ScpToolkit is a free Windows Driver and XInput Wrapper for Sony DualShock 3/4 Controllers. Installation is fairly simple and straightforward, but does require a few things: Microsoft Windows Vista/7/8/8.1/10 x86 or amd64, Microsoft .NET Framework 4.5, Microsoft Visual C++ 2010 Redistributable Package, Microsoft Visual C++ 2013 Runtime, DirectX Runtime, Xbox 360 Controller driver (already integrated in Windows 8.x or greater), at least one supported Sony DualShock 3/4 controller and Administrator rights during driver setup.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive empty">
<svg data-name="sf_star_grey" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#CCCCCB" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive empty">
<svg data-name="sf_star_grey" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#CCCCCB" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/scptoolkit.mirror/reviews/" class="count" title="ScpToolkit Reviews">
29 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
7,853 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2021-01-22">2021-01-22</time>
</div>
<a href="/projects/scptoolkit.mirror/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">14</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/scrollout/">
<img alt="Scrollout F1" title="Scrollout F1" src="//a.fsdn.com/allura/p/scrollout/icon?1513717495?&amp;w=120" srcset="//a.fsdn.com/allura/p/scrollout/icon?1513717495?&amp;w=180 1.5x
        ,
            //a.fsdn.com/allura/p/scrollout/icon?1513717495?&amp;w=240 2x" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/scrollout/">
<div class="title-subtitle-wrapper">
<a href="/projects/scrollout/" class="result-heading-title">
<h3>Scrollout F1</h3></a>
<p class="subtitle">
An easy-to-use anti-spam email gateway
</p>
</div>
<div class="description">
• Designed for Linux and Windows email system administrators, Scrollout F1 is an easy to use, already adjusted email firewall (gateway) offering free anti-spam and anti-virus protection aiming to secure existing email servers, old or new, such as Microsoft Exchange, Lotus Domino, Postfix, Exim, Sendmail, Qmail and others.
• Built-in multilayer security levels make configuration effort equal to a car radio.
• It combines simplicity with effective protection using powerful open source with additional set of rules &amp; filters.
• Available as 64bit:
- ISO image (Internet connection required during installation)
- install from scratch (Internet connection required during installation).
• Minimum Requirements (for 5,000 messages/day):
1 GB of RAM
30 GB storage drive
1 Processor x86/AMD64
1 Ethernet x 1 IPv4 address
UDP ports: 53 123 4500 6277 24441
TCP ports: 25 80 443 2703
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/scrollout/reviews/" class="count" title="Scrollout F1 Reviews">
84 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
155,880 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2018-04-08">2018-04-08</time>
</div>
<a href="/projects/scrollout/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">15</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/keepass/">
<img alt="KeePass" title="KeePass" src="//a.fsdn.com/allura/p/keepass/icon?1678643918?&amp;w=120" srcset="//a.fsdn.com/allura/p/keepass/icon?1678643918?&amp;w=180 1.5x
        ,
            //a.fsdn.com/allura/p/keepass/icon?1678643918?&amp;w=240 2x" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/keepass/">
<div class="title-subtitle-wrapper">
<a href="/projects/keepass/" class="result-heading-title">
<h3>KeePass</h3></a>
<p class="subtitle">
A lightweight and easy-to-use password manager
</p>
</div>
<div class="description">
KeePass Password Safe is a free, open source, lightweight, and easy-to-use password manager for Windows, Linux and Mac OS X, with ports for Android, iPhone/iPad and other mobile devices. With so many passwords to remember and the need to vary passwords to protect your valuable data, it’s nice to have KeePass to manage your passwords in a secure way. KeePass puts all your passwords in a highly encrypted database and locks them with one master key or a key file. As a result, you only have to remember one single master password or select the key file to unlock the whole database. And the databases are encrypted using the best and most secure encryption algorithms currently known, AES and Twofish. See our features page for details.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/keepass/reviews/" class="count" title="KeePass Reviews">
575 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
150,097 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2023-03-17">2023-03-17</time>
</div>
<a href="/projects/keepass/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">16</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/virtualgl/">
<img alt="VirtualGL" title="VirtualGL" src="//a.fsdn.com/allura/p/virtualgl/icon?1567883212?&amp;w=120" srcset="//a.fsdn.com/allura/p/virtualgl/icon?1567883212?&amp;w=180 1.5x
        ,
            //a.fsdn.com/allura/p/virtualgl/icon?1567883212?&amp;w=240 2x" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/virtualgl/">
<div class="title-subtitle-wrapper">
<a href="/projects/virtualgl/" class="result-heading-title">
<h3>VirtualGL</h3></a>
<p class="subtitle">
3D Without Boundaries
</p>
</div>
<div class="description">
VirtualGL redirects 3D commands from a Unix/Linux OpenGL application onto a server-side GPU and converts the rendered 3D images into a video stream with which remote clients can interact to view and control the 3D application in real time.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/virtualgl/reviews/" class="count" title="VirtualGL Reviews">
22 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
119,589 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2023-03-15">2023-03-15</time>
</div>
<a href="/projects/virtualgl/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">17</span>
<div class="result-heading">
<a class="project-icon  default-project-icon show-outline" href="/projects/ubuntuzilla/">

<svg data-name="default-icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><rect class="st0" width="300" height="300" /><g><path class="st1" d="M162.5,154.8c0-28.9-10.2-42-15.6-46.9c-1.1-1-2.7-0.1-2.6,1.3c1.1,16.3-19.4,20.3-19.4,45.9h0c0,0.1,0,0.1,0,0.2c0,15.6,11.8,28.3,26.3,28.3c14.5,0,26.3-12.7,26.3-28.3c0-0.1,0-0.1,0-0.2h0c0-7.2-2.7-14.1-5.5-19.3c-0.5-1-2.1-0.6-1.9,0.3C174.9,158.1,162.5,171.8,162.5,154.8z" /><g><path class="st1" d="M131.2,215.6c-0.7,0-1.3-0.3-1.8-0.7l-67.2-67.1c-1-1-1-2.6,0-3.6l70.9-70.9c0.5-0.5,1.1-0.7,1.8-0.7h20.4c1.2,0,2,0.8,2.3,1.6c0.3,0.7,0.3,1.9-0.5,2.7l-66.7,66.7c-1.3,1.3-1.3,3.5,0,4.9l52.7,52.7c1,1,1,2.6,0,3.6L133,214.9C132.5,215.4,131.9,215.6,131.2,215.6z" /></g><g><path class="st1" d="M144.7,227.4c-1.2,0-2-0.8-2.3-1.5c-0.3-0.7-0.3-1.9,0.5-2.7l66.7-66.7c0.7-0.6,1-1.5,1-2.4s-0.4-1.8-1-2.4l-52.7-52.7c-1-1-1-2.6,0-3.6l10.2-10.2c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.3,1.8,0.7l67,67.1c0.5,0.5,0.7,1.1,0.7,1.8s-0.3,1.3-0.7,1.8l-70.9,70.9c-0.5,0.5-1.1,0.7-1.8,0.7H144.7z" /></g></g></svg>
</a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/ubuntuzilla/">
<div class="title-subtitle-wrapper">
<a href="/projects/ubuntuzilla/" class="result-heading-title">
<h3>Ubuntuzilla: Mozilla Software Installer</h3></a>
<p class="subtitle">
APT repository for Mozilla software releases
</p>
</div>
<div class="description">
An APT repository hosting the Mozilla builds of the latest official releases of Firefox, Thunderbird, and Seamonkey. Do not manually download the files - read the wiki, https://sourceforge.net/p/ubuntuzilla/wiki/ for instructions on using the repository.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/ubuntuzilla/reviews/" class="count" title="Ubuntuzilla: Mozilla Software Installer Reviews">
23 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
105,559 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2023-05-12">4 days ago</time>
</div>
<a href="/projects/ubuntuzilla/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">18</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/antimicro.mirror/">
<img alt="antimicro" title="antimicro" src="//a.fsdn.com/allura/mirror/antimicro/icon?1669994491?&amp;w=120" srcset="//a.fsdn.com/allura/mirror/antimicro/icon?1669994491?&amp;w=180 1.5x
        ,
            //a.fsdn.com/allura/mirror/antimicro/icon?1669994491?&amp;w=240 2x" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/antimicro.mirror/">
<div class="title-subtitle-wrapper">
<a href="/projects/antimicro.mirror/" class="result-heading-title">
<h3>antimicro</h3></a>
<p class="subtitle">
Graphical program to map keyboard and mouse controls to a gamepad
</p>
</div>
<div class="description">
antimicro is a graphical program used to map keyboard keys and mouse controls to a gamepad. It&#39;s useful for using a gamepad on PC games that do not have any form of built-in gamepad support. This program can also be used to control any desktop application with a gamepad. On Linux, this means that your system has to be running an X environment in order to run this program.
This program currently works with various Linux distributions, Windows (Vista and later), and FreeBSD, but with limited support for FreeBSD and Windows XP.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive empty">
<svg data-name="sf_star_grey" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#CCCCCB" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/antimicro.mirror/reviews/" class="count" title="antimicro Reviews">
10 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
4,673 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2022-12-02">2022-12-02</time>
</div>
<a href="/projects/antimicro.mirror/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">19</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/unitedrpms/">
<img alt="unitedrpms" title="unitedrpms" src="//a.fsdn.com/allura/p/unitedrpms/icon?1558071629" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/unitedrpms/">
<div class="title-subtitle-wrapper">
<a href="/projects/unitedrpms/" class="result-heading-title">
<h3>unitedrpms</h3></a>
<p class="subtitle">
Fast and open solution where everyone can help
</p>
</div>
<div class="description">
Join us in Gitter!
https://gitter.im/unitedrpms-people/Lobby
Enable the URPMS repository in your system - https://github.com/UnitedRPMs/unitedrpms.github.io/blob/master/README.md
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive empty">
<svg data-name="sf_star_grey" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#CCCCCB" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive empty">
<svg data-name="sf_star_grey" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#CCCCCB" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/unitedrpms/reviews/" class="count" title="unitedrpms Reviews">
1 Review
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
345,090 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2022-09-20">2022-09-20</time>
</div>
<a href="/projects/unitedrpms/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">20</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/qbittorrent/">
<img alt="qBittorrent" title="qBittorrent" src="//a.fsdn.com/allura/p/qbittorrent/icon?1518743661?&amp;w=120" srcset="//a.fsdn.com/allura/p/qbittorrent/icon?1518743661?&amp;w=180 1.5x
        " loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/qbittorrent/">
<div class="title-subtitle-wrapper">
<a href="/projects/qbittorrent/" class="result-heading-title">
<h3>qBittorrent</h3></a>
<p class="subtitle">
A free and reliable P2P BitTorrent client
</p>
</div>
<div class="description">
An advanced and multi-platform BitTorrent client with a nice Qt user interface as well as a Web UI for remote control and an integrated search engine. qBittorrent aims to meet the needs of most users while using as little CPU and memory as possible.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive half">
<svg data-name="sf_star_yellow_half" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path class="st1" fill="#CCCCCB" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8c11.3,37.1,22.6,74,34,110.9c39-0.8,78-1.5,117.2-2.3c-0.3,0.3-0.5,0.4-0.7,0.6c-15.7,11-31.5,22.1-47.2,33.1c-15.5,10.8-30.9,21.7-46.4,32.5c-0.5,0.4-0.6,0.7-0.4,1.3c12.1,35.8,24.3,71.6,36.4,107.4c0.1,0.2,0.1,0.4,0.2,0.8C210.8,269.1,179.8,246.3,148.8,223.4z" /><path class="st0" fill="#ffcc00" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8" /></svg>
</div>
</div>
<a href="/projects/qbittorrent/reviews/" class="count" title="qBittorrent Reviews">
207 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
106,396 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2023-02-28">2023-02-28</time>
</div>
<a href="/projects/qbittorrent/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">21</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/sweethome3d/">
<img alt="Sweet Home 3D" title="Sweet Home 3D" src="//a.fsdn.com/allura/p/sweethome3d/icon?1628512225?&amp;w=120" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/sweethome3d/">
<div class="title-subtitle-wrapper">
<a href="/projects/sweethome3d/" class="result-heading-title">
<h3>Sweet Home 3D</h3></a>
<p class="subtitle">
An interior design application to draw house plans &amp; arrange furniture
</p>
</div>
<div class="description">
Sweet Home 3D is an interior design application that helps you to quickly draw the floor plan of your house, arrange furniture on it, and visit the results in 3D.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive half">
<svg data-name="sf_star_yellow_half" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path class="st1" fill="#CCCCCB" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8c11.3,37.1,22.6,74,34,110.9c39-0.8,78-1.5,117.2-2.3c-0.3,0.3-0.5,0.4-0.7,0.6c-15.7,11-31.5,22.1-47.2,33.1c-15.5,10.8-30.9,21.7-46.4,32.5c-0.5,0.4-0.6,0.7-0.4,1.3c12.1,35.8,24.3,71.6,36.4,107.4c0.1,0.2,0.1,0.4,0.2,0.8C210.8,269.1,179.8,246.3,148.8,223.4z" /><path class="st0" fill="#ffcc00" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8" /></svg>
</div>
</div>
<a href="/projects/sweethome3d/reviews/" class="count" title="Sweet Home 3D Reviews">
286 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
80,740 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2023-05-02">2023-05-02</time>
</div>
<a href="/projects/sweethome3d/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">22</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/assp/">
<img alt="Anti-Spam SMTP Proxy Server" title="Anti-Spam SMTP Proxy Server" src="//a.fsdn.com/allura/p/assp/icon?1683697761?&amp;w=120" srcset="//a.fsdn.com/allura/p/assp/icon?1683697761?&amp;w=180 1.5x
        " loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/assp/">
<div class="title-subtitle-wrapper">
<a href="/projects/assp/" class="result-heading-title">
<h3>Anti-Spam SMTP Proxy Server</h3></a>
<p class="subtitle">
Anti-Spam SMTP Proxy Server implements multiple spam filters
</p>
</div>
<div class="description">
The Anti-Spam SMTP Proxy (ASSP) Server project aims to create an open source platform-independent SMTP Proxy server which implements auto-whitelists, self learning Hidden-Markov-Model and/or Bayesian, Greylisting, DNSBL, DNSWL, URIBL, SPF, SRS, Backscatter, Virus scanning, attachment blocking, Senderbase and multiple other filter methods. Click &#39;Files&#39; to download the professional version 2.8.1 build 23131.
A linux(ubuntu 20.04 LTS) and a freeBSD 12.2 based ready to run OVA of ASSP V2 are also available for download.
NOTICE:
V1 development has been stopped at the end of 2014 (1.10.1 build 16060). Possibly there will be done some bugfixing in future.
Please upgrade to V2, which is and will be actively maintained.
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive half">
<svg data-name="sf_star_yellow_half" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path class="st1" fill="#CCCCCB" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8c11.3,37.1,22.6,74,34,110.9c39-0.8,78-1.5,117.2-2.3c-0.3,0.3-0.5,0.4-0.7,0.6c-15.7,11-31.5,22.1-47.2,33.1c-15.5,10.8-30.9,21.7-46.4,32.5c-0.5,0.4-0.6,0.7-0.4,1.3c12.1,35.8,24.3,71.6,36.4,107.4c0.1,0.2,0.1,0.4,0.2,0.8C210.8,269.1,179.8,246.3,148.8,223.4z" /><path class="st0" fill="#ffcc00" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8" /></svg>
</div>
</div>
<a href="/projects/assp/reviews/" class="count" title="Anti-Spam SMTP Proxy Server Reviews">
116 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
83,054 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2023-05-16">22 hours ago</time>
</div>
<a href="/projects/assp/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">23</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/orwelldevcpp/">
<img alt="Dev-C++" title="Dev-C++" src="//a.fsdn.com/allura/p/orwelldevcpp/icon?1480458710" loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/orwelldevcpp/">
<div class="title-subtitle-wrapper">
<a href="/projects/orwelldevcpp/" class="result-heading-title">
<h3>Dev-C++</h3></a>
<p class="subtitle">
A free, portable, fast and simple C/C++ IDE
</p>
</div>
<div class="description">
A new and improved fork of Bloodshed Dev-C++
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive half">
<svg data-name="sf_star_yellow_half" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path class="st1" fill="#CCCCCB" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8c11.3,37.1,22.6,74,34,110.9c39-0.8,78-1.5,117.2-2.3c-0.3,0.3-0.5,0.4-0.7,0.6c-15.7,11-31.5,22.1-47.2,33.1c-15.5,10.8-30.9,21.7-46.4,32.5c-0.5,0.4-0.6,0.7-0.4,1.3c12.1,35.8,24.3,71.6,36.4,107.4c0.1,0.2,0.1,0.4,0.2,0.8C210.8,269.1,179.8,246.3,148.8,223.4z" /><path class="st0" fill="#ffcc00" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8" /></svg>
</div>
</div>
<a href="/projects/orwelldevcpp/reviews/" class="count" title="Dev-C++ Reviews">
140 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
82,830 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2016-11-29">2016-11-29</time>
</div>
<a href="/projects/orwelldevcpp/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">24</span>
<div class="result-heading">
<a class="project-icon  default-project-icon show-outline" href="/projects/infozip/">
<svg data-name="default-icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><rect class="st0" width="300" height="300" /><g><path class="st1" d="M162.5,154.8c0-28.9-10.2-42-15.6-46.9c-1.1-1-2.7-0.1-2.6,1.3c1.1,16.3-19.4,20.3-19.4,45.9h0c0,0.1,0,0.1,0,0.2c0,15.6,11.8,28.3,26.3,28.3c14.5,0,26.3-12.7,26.3-28.3c0-0.1,0-0.1,0-0.2h0c0-7.2-2.7-14.1-5.5-19.3c-0.5-1-2.1-0.6-1.9,0.3C174.9,158.1,162.5,171.8,162.5,154.8z" /><g><path class="st1" d="M131.2,215.6c-0.7,0-1.3-0.3-1.8-0.7l-67.2-67.1c-1-1-1-2.6,0-3.6l70.9-70.9c0.5-0.5,1.1-0.7,1.8-0.7h20.4c1.2,0,2,0.8,2.3,1.6c0.3,0.7,0.3,1.9-0.5,2.7l-66.7,66.7c-1.3,1.3-1.3,3.5,0,4.9l52.7,52.7c1,1,1,2.6,0,3.6L133,214.9C132.5,215.4,131.9,215.6,131.2,215.6z" /></g><g><path class="st1" d="M144.7,227.4c-1.2,0-2-0.8-2.3-1.5c-0.3-0.7-0.3-1.9,0.5-2.7l66.7-66.7c0.7-0.6,1-1.5,1-2.4s-0.4-1.8-1-2.4l-52.7-52.7c-1-1-1-2.6,0-3.6l10.2-10.2c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.3,1.8,0.7l67,67.1c0.5,0.5,0.7,1.1,0.7,1.8s-0.3,1.3-0.7,1.8l-70.9,70.9c-0.5,0.5-1.1,0.7-1.8,0.7H144.7z" /></g></g></svg>
</a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/infozip/">
<div class="title-subtitle-wrapper">
<a href="/projects/infozip/" class="result-heading-title">
<h3>Info-ZIP project</h3></a>
</div>
<div class="description">
Info-ZIP portable compression/archiver utilities (Zip, UnZip, WiZ, etc.)
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/infozip/reviews/" class="count" title="Info-ZIP project Reviews">
17 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
73,910 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2021-04-08">2021-04-08</time>
</div>
<a href="/projects/infozip/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="project-oss">
<span itemprop="position" class="hide">25</span>
<div class="result-heading">
<a class="project-icon   show-outline" href="/projects/boot-repair/">
<img alt="boot-repair" title="boot-repair" src="//a.fsdn.com/allura/p/boot-repair/icon?1513717492?&amp;w=120" srcset="//a.fsdn.com/allura/p/boot-repair/icon?1513717492?&amp;w=180 1.5x
        " loading="lazy" /></a>
<div class="result-heading-texts">
<meta itemprop="url" content="/projects/boot-repair/">
<div class="title-subtitle-wrapper">
<a href="/projects/boot-repair/" class="result-heading-title">
<h3>boot-repair</h3></a>
<p class="subtitle">
A simple tool to repair frequent boot issues
</p>
</div>
<div class="description">
See https://sourceforge.net/p/boot-repair/home
</div>
</div>
</div>
<div class="project_info">
<div class="stats">
<div class="rating">
<div class="m-stars" aria-hidden="true">
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
<div class="star responsive yellow">
<svg data-name="sf_star_yellow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" fill="#ffcc00" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 " /></svg>
</div>
</div>
<a href="/projects/boot-repair/reviews/" class="count" title="boot-repair Reviews">
48 Reviews
</a>
</div>
<div class="">
<b class="label">Downloads:</b>
68,508 This Week
</div>
<div class="">
<b class="label">Last Update:</b>
<time class="dateUpdated" datetime="2017-12-19">2017-12-19</time>
</div>
<a href="/projects/boot-repair/" class="button green hollow see-project">See Project</a>
</div>
</div>
</li>
</ul>
<div class="sterling">
<div id="SF_Directory_728x90_B_wrapped" data-id="div-gpt-ad-1392148208790-0" class="draper   
visibility_rules
 v_970_xlarge  v_728_leaderboard ">
</div>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    var el = document.getElementById('SF_Directory_728x90_B_wrapped');
    var newNode = document.createElement('div');
    newNode.id = 'div-gpt-ad-1392148208790-0';
    el.appendChild(newNode);
}());

gptadRenderers['SF_Directory_728x90_B'] = function(){  // jshint ignore:line
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148208790-0');
    });
};
gptadRenderers['SF_Directory_728x90_B']();  // jshint ignore:line
}
</script>
<div id="SF_Mobile_Multi_B_wrapped" data-id="div-gpt-ad-1512154653435-0" class="draper multisize  
">
</div>
<script>
/*global googletag */
if (!SF.initial_breakpoints_visible.large) {
(function(){
    
    var el = document.getElementById('SF_Mobile_Multi_B_wrapped');
    var newNode = document.createElement('div');
    newNode.id = 'div-gpt-ad-1512154653435-0';
    el.appendChild(newNode);
}());

gptadRenderers['SF_Mobile_Multi_B'] = function(){  // jshint ignore:line
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1512154653435-0');
    });
};
gptadRenderers['SF_Mobile_Multi_B']();  // jshint ignore:line
}
</script>
</div>
</section>
<ul class="pagination text-center" aria-label="Pagination">
<li class="pagination-previous disabled">
Previous
</li>
<li class="current"><span class="show-for-sr">You're on page</span> 1</li>
<li><a href="/directory/?page=2" aria-label="Page 2">2</a></li>
<li><a href="/directory/?page=3" aria-label="Page 3">3</a></li>
<li><a href="/directory/?page=4" aria-label="Page 4">4</a></li>
 <li><a href="/directory/?page=5" aria-label="Page 5">5</a></li>
<li class="ellipsis"></li>
<li class="pagination-next ">
<a href="/directory/?page=2" aria-label="Next page">Next</a>
</li>
</ul>
<section class="m-project-search-results">
<div class="category-description" id="category-description">
<p><h2>Open Source Software Guide</h2>
<p>Open source software is software that is developed and maintained by a community of developers. It is open to the public, which means anyone can look at and modify the source code of the software. This makes it different from other proprietary software, which generally limits access to only authorized personnel.</p>
<p>The open source movement began in 1998 when the term &ldquo;open source&rdquo; was coined in an essay that advocated sharing computer program code freely with other developers. Since then, it has grown into an international phenomenon. Open source projects are now found in all fields, from health care to robotics, from operating systems to games.</p>
<p>The main advantage of open source software is its transparency and flexibility: everyone can see how it works and contribute to its development. This encourages collaboration among developers around the world, resulting in higher quality products that can be adapted quickly to changing market conditions. Additionally, it's often less expensive than proprietary solutions because companies don't have to pay for each individual license they need&mdash;they just install and distribute one version of the product across their entire network without additional cost or effort.</p>
<p>Moreover, open source programs are usually more reliable than their closed-source counterparts because they undergo rigorous testing due to volunteer contributions from people all over the world who want these applications to work properly on their own machines. Lastly, many projects contribute back enhancements and fixes that become part of the next release for anyone else using the same application; this creates a sort of collective intelligence where each user benefits from improvements made by others around them.</p>
<p>Overall, <a href="../../articles/what-is-open-source-software/">open source software</a> offers powerful alternatives for businesses looking for ways to reduce costs while still having high quality solutions available for their needs&mdash;all while fostering innovation from everywhere in the world.</p>
<h2>What Are the Features and Benefits of Open Source Software?</h2>
<ul>
<li><strong>Community Development:</strong> Open source software is developed in a collaborative manner by the community. Through discussion groups, online forums, and other means of communication, developers can share code and ideas to find solutions to various problems.</li>
<li><strong>Flexibility:</strong> Since open source software is created with an open license, it allows for more flexibility in terms of modifications and additions. Developers have freedom to add features or customize existing ones without worrying about proprietary licensing restrictions.</li>
<li><strong>Security:</strong> As many people work on improving the security of open source applications, this ensures that bugs and vulnerabilities are quickly identified and fixed before they become a major problem. This makes open source applications much safer than closed-source counterparts when it comes to protecting user data from malicious threats.</li>
<li><strong>Updates:</strong> Open source projects typically have continuous updates as coders keep pushing new changes into their own repositories (or "forks"). In this way, users always benefit from the latest innovations made available by these communities over time. This helps ensure that the application keeps up with modern technologies and trends while still maintaining stability.</li>
<li><strong>Cost Savings:</strong> The development costs associated with open source projects are relatively low since most individuals contribute resources or services free of charge instead of receiving payment for them directly. Moreover, there may not be any additional cost related to obtaining licenses since all components used in such projects are already freely accessible through open source repositories and platforms like SourceForge.</li>
<li><strong>Transparency:</strong> With open source, code is visible to everyone. This allows for widespread scrutiny and feedback from other developers as well, which helps improve the overall quality of the software being created. Additionally, any changes made are documented publicly so everyone can keep track of what has been changed over time.</li>
<li><strong>Scalability:</strong> Open source applications are designed to be modular, which means they can easily scale up or down as needed. This makes it incredibly easy for developers to add new features or modify existing ones without needing to re-write the entire code base from scratch.</li>
<li><strong>Cooperation &amp; Collaboration:</strong> Open source software encourages cooperation and collaboration between various teams and individuals working on a project. By its very nature, open source projects require multiple contributors who coordinate their efforts in order to create something greater than any one individual could accomplish alone.</li>
<li><strong>Standards Compliance:</strong> Open source software is often designed to conform to well-established industry standards, which makes the applications produced much more reliable and compatible with other technologies. This helps ensure that users can get maximum value out of their chosen open source solution without running into compatibility issues.</li>
<li><strong>Reliability:</strong> Open source software has often been found to be more reliable over time than proprietary solutions due to the fact that multiple developers are working on a project at once, ensuring any bugs or issues are quickly identified and addressed in a timely manner.</li>
<li><strong>Innovation:</strong> Open source projects can benefit from the collective knowledge of its users, which helps to ensure that innovative ideas are incorporated into the software quickly. This helps keep open source solutions up-to-date and competitive with other options on the market.</li>
</ul>
<h2>Types of Open Source Software</h2>
<p>There are so many possibilities with open source software, and there are too many to include in one list. But some of the most widely used software in the world is open source. Here are some popular use cases and applications of open source software:</p>
<ul>
<li><strong>Desktop Software:</strong> Desktop software is open source software that operates on a particular computer system or device. Examples include operating systems, web browsers, email clients and office suites.</li>
<li><strong>Mobile Software:</strong> Mobile software is open source software designed for mobile devices, such as smartphones and tablets. Examples include messaging apps, photo editors and navigation apps.</li>
<li><strong>Server Software:</strong> Server software is open source software designed to run on networked computers to provide services to other computers or users connected to the same network. Examples include database servers, web servers and file storage solutions.</li>
<li><strong>Development Tools:</strong> Development tools are open source programs used by developers to create applications and websites. Examples include text editors, integrated development environments (IDE), debuggers, compilers and libraries.</li>
<li><strong>Cloud Solutions:</strong> Cloud solutions are open source programs that can be used in multi-tenant computing solutions outside of traditional on-site data centers or servers. Examples include cloud management platforms and virtualization technologies.</li>
<li><strong>Middleware:</strong> Middleware is open source product tools used to establish communication between different application components within distributed networks or enterprise systems. Examples include message queues, event brokers, workflow managers and API gateways.</li>
<li><strong>Applications:</strong> Applications are open source programs designed to perform specific tasks. Examples include games, media players and productivity tools such as note-taking and spreadsheet applications.</li>
<li><strong>Operating Systems:</strong> &nbsp;Operating systems are open source software that provides a platform for other applications to run. Examples include Linux, BSD and Unix operating systems.</li>
<li><strong>Networking Software:</strong> Networking software is open source software used to connect different computer systems and networks. Examples include SSH, FTP, Telnet and DNS protocols.</li>
<li><strong>Security Software:</strong> Security software is open source software used to protect and secure computer systems from malicious attacks. Examples include antivirus programs, intrusion detection systems, firewalls and password managers.</li>
</ul>
<h2>Open Source Software Trends</h2>
<ol>
<li><strong>Increased Adoption:</strong> Open source software is becoming increasingly popular due to its cost-effectiveness, flexibility, and reliability. Organizations of all sizes are beginning to realize the value of open source solutions.</li>
<li><strong>Growing Community Contributions:</strong> The open source community has grown exponentially in recent years, with more developers contributing code and ideas to projects than ever before. This influx of contributors has led to an increase in quality and innovation within the open source space.</li>
<li><strong>Increased Security:</strong> As open source software becomes more widely adopted, there is an increased focus on security as well. Open source projects have implemented various measures to ensure that their applications are secure, such as thorough code reviews and automated testing tools.</li>
<li><strong>Rise in Enterprise Usage:</strong> Enterprises are beginning to realize the potential benefits of using open source solutions, including lower costs and less vendor lock-in compared to proprietary solutions. Companies such as Microsoft and Oracle have even began offering support for some open source technologies.</li>
<li><strong>Emergence of DevOps Tools:</strong> DevOps processes rely heavily on automation tools like Chef, Puppet, Ansible, Kubernetes and Docker for efficiently managing infrastructure deployments across multiple servers or cloud environments. These tools allow organizations to easily manage large-scale deployments with speed and consistency by automating common tasks such as patching or configuring servers with a few simple commands or scripts.</li>
</ol>
<h2>How to Choose the Right Open Source Software</h2>
<ol>
<li><strong>Identify Your Needs:</strong> First, clearly define the goals and objectives of your project. This will help narrow down the scope of potential open source software solutions.</li>
<li><strong>Assess Features:</strong> Compare features between multiple open source options to determine which ones meet all your needs and might include any additional benefits that could come in handy in the future. Consider if there is an active support community for each option and how up to date the software is with regular updates and bug fixes. Use the tools on this page to sort open source projects by category, user reviews, features, integrations, operating system, license, language, and more.</li>
<li><strong>Check Security:</strong> Make sure you check for any security risks associated with the application before committing to a solution as this may impact your current or future projects. You should also take into account any compliance requirements that may be relevant for your industry or type of business.</li>
<li><strong>Test It Out:</strong> Once you've narrowed down a few options it's time to test them out and see how user friendly they are, if they integrate well with other applications, and how quickly they can scale when needed. A thorough trial period is often a good idea before making a final decision on which one to use on a larger-scale project or over an extended period of time.</li>
<li><strong>Cost:</strong> Finally, assess the total cost of the software and any associated fees or additional resources that may need to be purchased. This can often be a deciding factor when it comes to which open source solution to use.</li>
</ol>
<h2>Who Uses Open Source Software?</h2>
<ul>
<li><strong>Developers</strong> &ndash; Developers are the individuals who create and maintain open source software. They typically have knowledge in a wide range of coding languages, such as Java and HTML, and have experience with developing large-scale applications.</li>
<li><strong>End Users</strong> &ndash; End users generally use open source software to accomplish their everyday tasks. This can include anything from downloading music to playing games or writing documents.</li>
<li><strong>Nonprofits</strong> &ndash; Nonprofit organizations often utilize open source software to help them manage large projects or provide services on a budget. Examples of these projects can include managing an online store or creating a website for volunteers to sign up for events.</li>
<li><strong>Educators</strong> &ndash; Open source software is often used by educators for teaching purposes as it helps them save money on costly licenses and give students access to powerful programs that would otherwise be out of reach.</li>
<li><strong>Businesses</strong> &ndash; Businesses rely heavily on open source software solutions as it offers greater flexibility, scalability, reliability, and cost savings than commercial offerings do. Furthermore, businesses can easily customize the interface based on the specific requirements of their organization.</li>
<li><strong>Government Agencies</strong> &ndash; Governments around the world are embracing open source software solutions due to its expansive capabilities compared to proprietary options. Government agencies often use this type of software to reduce costs while still providing high quality services at scale.</li>
<li><strong>Enthusiasts</strong> &ndash; Open source software enthusiasts are passionate users who typically enjoy working with the code, participating in online communities, and attending conferences focused on open source software. These users typically have extensive experience with a variety of programming languages and technologies.</li>
</ul>
<h2>How Much Does Open Source Software Cost?</h2>
<p>Open source software, compared to proprietary software, is relatively inexpensive and in some cases, even free to use. Generally speaking, the cost of open source software depends on the type of program you need and the platform you are using.</p>
<p>For instance, if you are using a Linux-based system there will usually be no charge for most open source programs. Many of these programs can be downloaded from large repositories like SourceForge and installed without any cost to the user. Moreover, many of these applications come with extensive documentation, which makes learning how to use them easier.</p>
<p>However, when it comes to larger projects &ndash; such as enterprise-level web development or programming &ndash; there may be fees associated with open source software. For example, if a company relies heavily on the MySQL database for their application then they may choose to purchase an Enterprise Edition license from Oracle that grants them access to support services and advanced features outside of what is offered with the standard version of MySQL. In addition, some specialized programs may also require fees in order for access or obtain specific features or components needed for that particular application.</p>
<p>In short, open source software generally has a lower cost than proprietary solutions but it can still vary depending on the magnitude of your project and specific needs that require additional licensing fees. Ultimately though &ndash; when compared side-by-side - open source software tends to be less expensive than its commercial competitors over time due to reduced costs related maintenance and support services as well as scalability options that come included with many programs.</p>
<h2>What Integrates With Open Source Software?</h2>
<p>Open source software can integrate with a range of different types of software, including operating systems, web browsers, databases, compilers, office suites and development tools. Operating system integration is important to ensure that open source applications can be installed and run on the system without difficulty. Web browser integration allows users to access web pages written in HTML and JavaScript, as well as other technologies relevant for the open source project. Database integration means that data from external sources such as MySQL or Oracle can be accessed within an open source application. Compiler integration ensures that applications written in C++ or other languages can compile correctly when built using an open source compiler such as Clang or GCC. Office suite integration makes it possible for users to create documents, spreadsheets and presentations in formats compatible with popular proprietary office suites like Microsoft Office. Development tool integration allows developers to build their projects using common development environments such as Eclipse or Visual Studio. All of these are critical for ensuring successful adoption and usage of open source software.</p>
<h2>How To Get Involved with Open Source Software</h2>
<ol>
<li><strong>Get to Know the Open Source Projects:</strong> The first step is to take some time and get to know the open source projects. Read up on their vision, scope, goals, and values. Familiarize yourself with their codebase, history, development processes and any other information that can provide you a better understanding of the project.</li>
<li><strong>Review Bug Reports or Feature Requests:</strong> You can always browse through an open source project's bug reports or feature requests and help out by providing feedback or suggesting solutions for existing issues. This is a great way to become acquainted with a particular project and its community; plus it&rsquo;s often appreciated by other users!</li>
<li><strong>Start Small:</strong> Don&rsquo;t be intimidated if you don&rsquo;t know a lot about coding! There are plenty of ways to contribute without needing to be an expert programmer &ndash; look for small tasks such as updating documentation, creating tutorials, filing bug reports and writing test cases which all need doing but may not have been assigned yet.</li>
<li><strong>Join Relevant Communities:</strong> Joining relevant online communities such as discussion forums, Slack channels etc., provides a great opportunity to connect with like-minded individuals who might be working on similar projects or have similar interests in an open source project you want to get involved in. Participating in such conversations will give further insight into various aspects of open source software development such as toolsets used by the developers etc., thus allowing you to make more informed decisions when taking on tasks related to that particular project.</li>
<li><strong>Pick Your Project:</strong> Once you&rsquo;ve familiarized yourself with different open source projects out there that you think interest your skillset/experience level then it&rsquo;s time to choose one which best fits your capabilities (and don&rsquo;t forget - having fun is just as important). Make sure that it is something that aligns with your personal interests (something where you will stick around even when things get tough.)</li>
<li><strong>Get Started:</strong> Lastly - simply dive right in - research how people are contributing work items within that particular project, figure out what resources are available at hand (or if any additional resources are required) then start coding away! Don't forget - if ever in doubt - reach out directly to experts well versed within said project's realms; they'll be able offer helpful pointers/suggestions which may prove useful in tackling those more challenging tasks.</li>
</ol>
<h2>Why is Open Source Software Important?</h2>
<p>Open source software is important because it provides free access to a wealth of high-quality tools and applications that are actively being developed by a community of developers. Open source software is also beneficial in terms of cost savings, as users are allowed to use, modify and distribute the software without having to pay any license fees or royalties. Lastly, open source software encourages collaboration and innovation by enabling anyone to contribute to the development process. By working together, developers can create better solutions with fewer resources more quickly than ever before.</p></p>
</div>
</section>
<div class="related-blocks">
<section class="related_searches">
<h4>Related Searches</h4>
<div id="related_searches_keywords" class="related-links">
<div class="keyword-link">
<a href="/directory/?q=auto+clicker+chromebook">auto clicker chromebook</a>
</div>
<div class="keyword-link">
<a href="/directory/?q=download+installer">download installer</a>
</div>
<div class="keyword-link">
<a href="/directory/?q=auto+clicker+for+roblox">auto clicker for roblox</a>
</div>
<div class="keyword-link">
<a href="/directory/?q=autoclicker">autoclicker</a>
</div>
<div class="keyword-link">
<a href="/directory/?q=auto+clicker">auto clicker</a>
</div>
<div class="keyword-link">
<a href="/directory/?q=mingw">mingw</a>
</div>
<div class="keyword-link">
<a href="/directory/?q=mingw-w64-install.exe">mingw-w64-install.exe</a>
</div>
<div class="keyword-link">
<a href="/directory/?q=xampp">xampp</a>
</div>
<div class="keyword-link">
<a href="/directory/?q=op+auto+clicker">op auto clicker</a>
</div>
<div class="keyword-link">
<a href="/directory/?q=xampp+server+android">xampp server android</a>
</div>
</div>
</section>
</div>
</div>
</div>
<footer class="sandiego">
<div class="as-row">
<div class="footer-wrapper">
<nav aria-label="Site Links" role="navigation">
<section>
<div class="as-h2">SourceForge</div>
<ul>
<li><a href="/create/" title="Create a Project">Create a Project</a></li>
<li><a href="/directory/" title="Open Source Software Directory">Open Source Software</a></li>
<li><a href="/software/" title="Business Software Directory">Business Software</a></li>
<li><a href="/top" title="Top Open Source Projects">Top Downloaded Projects</a></li>
</ul>
</section>
</nav>
<nav aria-label="Company Links" role="navigation">
<section>
<div class="as-h2">Company</div>
<ul>
<li><a href="/about">About</a></li>
<li><a href="/about/leadership" title="Open Source Software Directory">Team</a></li>
<li class="h-card">
<address>
<span class="p-name p-org">SourceForge Headquarters</span><br>
<span class="p-street-address">225 Broadway Suite 1600</span><br>
<span class="p-locality">San Diego, CA <span class="p-postal-code">92101</span></span><br>
<span class="p-tel">+1 (858) 454-5900</span><br>
</address>
</li>
<li id="social">
<span></span>
<a href="https://twitter.com/sourceforge" class="twitter" rel="nofollow" target="_blank">
<svg class="vertical-icon-fix" data-name="twitter" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z" /></svg></a>
<a href="https://fosstodon.org/@sourceforge" rel="me nofollow" target="_blank">
<svg class="vertical-icon-fix" data-name="mastodon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M433 179.11c0-97.2-63.71-125.7-63.71-125.7-62.52-28.7-228.56-28.4-290.48 0 0 0-63.72 28.5-63.72 125.7 0 115.7-6.6 259.4 105.63 289.1 40.51 10.7 75.32 13 103.33 11.4 50.81-2.8 79.32-18.1 79.32-18.1l-1.7-36.9s-36.31 11.4-77.12 10.1c-40.41-1.4-83-4.4-89.63-54a102.54 102.54 0 0 1-.9-13.9c85.63 20.9 158.65 9.1 178.75 6.7 56.12-6.7 105-41.3 111.23-72.9 9.8-49.8 9-121.5 9-121.5zm-75.12 125.2h-46.63v-114.2c0-49.7-64-51.6-64 6.9v62.5h-46.33V197c0-58.5-64-56.6-64-6.9v114.2H90.19c0-122.1-5.2-147.9 18.41-175 25.9-28.9 79.82-30.8 103.83 6.1l11.6 19.5 11.6-19.5c24.11-37.1 78.12-34.8 103.83-6.1 23.71 27.3 18.4 53 18.4 175z" /></svg></a>
<a href="https://www.facebook.com/sourceforgenet/" class="facebook" rel="nofollow" target="_blank">
<svg data-name="facebook" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z" /></svg></a>
<a href="https://www.linkedin.com/company/sourceforge.net" class="linkedin" rel="nofollow" target="_blank">
<svg data-name="linkedin" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z" /></svg></a>
<a href="/user/newsletters" rel=nofollow class="newsletter" title="Subscribe to our newsletter">
<svg class="vertical-icon-fix" data-name="mmSF_11mail" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 42 42" enable-background="new 0 0 42 42" xml:space="preserve"><path fill="#FFFFFF" d="M0,6v30h42V6H0z M24.2,21.2c-0.8,0.8-2.3,2-3.2,2c-0.9,0-2.4-1.2-3.2-2L5.8,9.7h30.3L24.2,21.2z M13.7,21l-9.9,9.4V11.6L13.7,21z M15.7,23L15.7,23c0.5,0.5,2.9,2.9,5.3,2.9c2.4,0,4.8-2.4,5.2-2.8l0.1-0.1l9.8,9.4H5.8L15.7,23z M28.3,21l9.9-9.5v18.9L28.3,21z" /></svg></a>
<span></span>
</li>
</ul>
</section>
</nav>
<nav aria-label="Resources Links" role="navigation">
<section>
<div class="as-h2">Resources</div>
<ul>
<li><a href="/support" title="Support Section">Support</a></li>
<li><a href="/p/forge/documentation/Docs%20Home/" title="Site Documentation">Site Documentation</a></li>
<li><a href="https://twitter.com/sfnet_ops" title="Site Status" rel="nofollow">Site Status</a></li>
</ul>
</section>
</nav>
<section class="footer-logo">
<a href="/" title="Home" class="sf-logo">
<img src="//a.fsdn.com/con/images/sandiego/sf-logo-full.svg" alt="SourceForge logo" class="sf-logo-full" />
</a>
</section>
</div>
</div>
<section class="l-nav-bottom">
<nav class="row">
<div class="columns small-12 large-6 copyright-notice">
&copy; 2023 Slashdot Media. All Rights Reserved.
</div>
<div class="columns large-6 links links-right">
<a href="https://slashdotmedia.com/terms-of-use" title="Terms" rel="nofollow">Terms</a>
<a href="https://slashdotmedia.com/privacy-statement/" title="Privacy" rel="nofollow">Privacy</a>
<a href="https://slashdotmedia.com/opt-out-choices" title="Opt Out" rel="nofollow">Opt Out</a>
<a href="https://slashdotmedia.com/contact/" target="_blank" title="Advertise" rel="nofollow">Advertise</a>
</div>
</nav>
</section>
</footer>
</div>
<script src="//a.fsdn.com/con/js/min/sf.sandiego-base.js?1684172736"></script>
<script>
        /* global Dropzone */
        Dropzone.options.blockthisForm = false;
    </script>
<script src="//a.fsdn.com/con/js/min/sf.sandiego-foundation-base.js?1684172736"></script>
<script src="//a.fsdn.com/con/js/min/sf.sandiego-foundation-tooltip.js?1684172736"></script>
<script>
            /* global Foundation */
            $(document).foundation();
            Foundation.Triggers.forceListenersNow();
        </script>
<script>
            bizx.cmp.ifConsent('', ['all', 'google-ads'], function () {}, function () {
                $('body').addClass('no-ads-consent');  
            });
        </script>
<noscript><p><img src="//analytics.slashdotmedia.com/sf.php?idsite=39" style="border:0;" alt="" /></p></noscript>
<script>

        function geturl(url, params) {
            params = Object
                .keys(params)
                .map(function(key) {
                    return key + "=" + encodeURIComponent(params[key]);
                })
                .join("&");
            return url + "?" + params;
        }

        
        function loadimg(params, dimension_prefix) {
            params = Object.assign({"idsite":1,"rec":1,"rand":8082,"dimension2":"pg_directory","url":"https://sourceforge.net/directory/","action_name":"Compare Open Source Software","search_count":328289}, params);
            for (var key in params) {
                if (params.hasOwnProperty(key) && key.indexOf('dimension') === 0 && params[key] !== undefined) {
                    params[key] = (dimension_prefix||'') + params[key];
                }
            }
            params.rand = Math.floor(Math.random() * 100000);
            bizx.cmp.ifConsent('publisher', ['measurement'], function() {
                var url = geturl("//sourceforge.net/software/visit", params);
                if (!('sendBeacon' in navigator) || !navigator.sendBeacon(url)) {
                    var img = document.createElement('img');
                    img.src = url;
                    img.style = "border:0;";
                    img.alt = "";
                    document.body.appendChild(img);
                }
            });
        }

        var $typeaheads = $('.typeahead__container input[name=q]');
        $typeaheads.on('typeahead-item-clicked', function(ev, $typeahead, q, item){
            var groupIndex = ($typeahead.data('groups') || []).indexOf(item.group);
            if (groupIndex === 2 || groupIndex === 3) {
                loadimg({
                    'e_c': 'Search | Typeahead | ' + item.group,
                    'e_a': "Typeahead Click | q=" + q,
                    'e_n': item.href, 
                 }, 'typeahead_on_');
            }
        });
        </script>
<script>
            var _linkedin_data_partner_id = "97055";
            bizx.cmp.ifConsent('', ['all'], function () {
                (function(){var s = document.getElementsByTagName("script")[0];
                var b = document.createElement("script");
                b.type = "text/javascript";b.async = true;b.defer=true;
                b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
                s.parentNode.insertBefore(b, s);})();
            });
            </script>

<script>
  (function () {
      bizx.cmp.ifConsent('', ['all', 'bombora'], function () {
          /*global _ml:true, window */
          _ml = window._ml || {};
          _ml.eid = '771';
          _ml.fp = '18135d03-9907-491a-a730-5a179bd75006';
          var s = document.getElementsByTagName('script')[0], cd = new Date(), mltag = document.createElement('script');
          mltag.type = 'text/javascript';
          mltag.async = true;
          mltag.defer = true;
          mltag.src = '//ml314.com/tag.aspx?' + cd.getDate() + cd.getMonth() + cd.getFullYear();
          s.parentNode.insertBefore(mltag, s);
      });
  })();
</script>

<div id="overlay-blockthis-wrapper" style="display: none;">
<div id="overlay-blockthis">
<div class="as-h2 title">Thanks for helping keep SourceForge clean.</div>
<a href="#" id="btn-blockthis-close">X</a>
<form class="dropzone small-12" action="/api/instrumentation/gpt" id="blockthisForm" method="POST">
<div class="row small-12">
<div class="column description small-12">
<input type="hidden" name="_visit_cookie" value="18135d03-9907-491a-a730-5a179bd75006" />
<input type='hidden' name='timestamp' value='1684322648' />
<input type='hidden' name='spinner' value='XvsHMpDOfdCbEqsOcjdu1oTwuqxY' />
<p class='T1321743f6345693ecff16a858d9844a1c17a7043'><label for='XwrnCqcKjw4pWw6ZEFsOowpRMwpU2wql2w7EkwpvDu8OP'>You seem to have CSS turned off.
Please don't fill out this field.</label><input id='XwrnCqcKjw4pWw6ZEFsOowpRMwpU2wql2w7EkwpvDu8OP' name='XwrjCqcKjw4pWw6ZECsO6JcOKJ8O_GMOlwrnCiX5ybw' type="text" /></p>
<p class='T1321743f6345693ecff16a858d9844a1c17a7043'><label for='XwrnCqcKjw4pWw6ZEF8OowpRMwpU2wql2w7EkwpvDu8OP'>You seem to have CSS turned off.
Please don't fill out this field.</label><input id='XwrnCqcKjw4pWw6ZEF8OowpRMwpU2wql2w7EkwpvDu8OP' name='XwrjCqcKjw4pWw6ZFCsO6JcOKJ8O_GMOlwrnCiX5ybw' type="text" /></p>
Briefly describe the problem (required):
<input name="XwrXCpcKpw5dQw60dVsKww4PCrMOywqHDpTrCqMKHXGhG" type="text" required>
</div>
</div>
<div class="column small-12">
<div class="upload-text">Upload screenshot of ad (required):</div>
<div id='upload-it'>
<a href="#" id="upload-select-file">Select a file</a>, or drag & drop file here.
</div>
<div id="upload-it-placeholder"></div>
<div class="dropzone-previews" style="display: none"></div>
<div class="dz-message" style="display: none"></div>
<div id="dropzone-preview-template" style="display: none">
<div class="dz-preview dz-file-preview">
<img data-dz-thumbnail src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="" />
<div class="dz-success-mark"><span>✔</span></div>
<div class="dz-error-mark"><span>✘</span></div>
<div class="dz-error-message"><span data-dz-errormessage></span></div>
</div>
</div>
</div>
<div class="column small-12">
<u>Screenshot instructions:</u>
</div>
<div class="row small-12">
<div class="column large-5 small-6">
<p>
<u>Click URL instructions:</u><br>
Right-click on the ad, choose "Copy Link", then paste here &rarr;<br>
(This may not be possible with some types of ads)
</p>
<a class="more-info" href="https://sourceforge.net/p/forge/documentation/Report%20a%20problem%20with%20Ad%20content/" target="_blank">More information about our ad policies</a>
</div>
<div class="column large-7 small-6">
<p>Please provide the ad click URL, if possible:
<input name="XwrfCosKgw41Qw7QrU8K2w4bDr8KiAsOSDsOTw79:wrPCow" type="url">
</p>
<textarea id="gpt-info" name="XwrrCpcKtw5BSwrNKwqnDjRHCsV_DncODAMOxw6VXw5bDuQ"></textarea>
<input class="button" type="submit" id="btn-blockthis-submit" value="Submit Report">
</div>
</div>
</form>
</div>
</div>
<script>
            bizx.cmp.ifConsent('', ['all'], function () {
                bizx.cmp.embedScript('//ads.pro-market.net/ads/scripts/site-143572.js');
            });
        </script><script>
            bizx.cmp.ifConsent('', ['all'], function () {
                try{(function(){ var cb = new Date().getTime(); var s = document.createElement("script"); s.defer = true; s.src = "//tag.crsspxl.com/s1.js?d=2396&cb="+cb; var s0 = document.getElementsByTagName('script')[0]; s0.parentNode.insertBefore(s, s0); })();}catch(e){}
            });
        </script>
<script type="text/javascript">
    bizx.cmp.ifConsent('', ['all'], function () {
        /* jshint ignore:start */
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        /* jshint ignore:end */

        window.dataLayer = window.dataLayer || [];
        function gtag(){ window.dataLayer.push(arguments); }
        window.gtag = window.gtag || gtag;
        bizx.cmp.embedScript("https://www.googletagmanager.com/gtag/js");
        gtag('js', new Date());
        gtag('set', {
            'page_location': 'https://sourceforge.net/directory/',
        });
    });
</script>
<script>
        /*global ga, gtag */
        SF.devicePixelRatio = Math.round(window.getDevicePixelRatio()*10)/10;

        

        
            bizx.cmp.ifConsent('', ['all'], function () {
                ga('create', "UA-36130941-1", {
                    'name': 'sfnt1',
                    'sampleRate': 9,
                });
                ga('sfnt1.set', 'dimension10', 'pg_directory');
                ga('sfnt1.send', 'pageview');
            });
        
            
            
        
        
            bizx.cmp.ifConsent('', ['all'], function () {
                gtag('config', 'G-1H226E4E4L', {
                    
                    send_page_view: false,
                    'SF_Page_Type': 'pg_directory', 
                    user_properties: {
                        'SF_Logged_in': 'Logged Out', 
                    },
                    'SF_Ads_Disabled': 'No',   
                    'SF_Prebid_Load_Method': 'sync', 
                    'devicePixelRatio': SF.devicePixelRatio, 
                });
                gtag('event', 'page_view', { send_to: 'G-1H226E4E4L' });
            });
        
            
            
        
        
    </script>
<script>
    SF.Directory = {};
    SF.Directory.q = '';
    SF.Directory.related_searches_active = true;
    SF.Directory.DEPLOY_TIME = '1684172736';
    SF.Directory.URL = 'https://a.fsdn.com/con';
</script>
<script src="//a.fsdn.com/con/js/min/sf.sandiego-directory.js?1684172736"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7c8b7e05e9a83082","version":"2023.4.0","b":1,"token":"05ab2f27910c4db284f4fcdcd6948338","si":100}' crossorigin="anonymous"></script>
</body>
</html>