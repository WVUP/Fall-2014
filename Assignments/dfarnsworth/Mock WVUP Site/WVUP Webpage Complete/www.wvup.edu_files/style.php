

/*
WVUP COLORS:

home page widget gradient:
	background: #5392ce;
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzUzOTJjZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNkZGU5ZjUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  #5392ce 0%, #dde9f5 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5392ce), color-stop(100%,#dde9f5));
	background: -webkit-linear-gradient(top,  #5392ce 0%,#dde9f5 100%); 
	background: -o-linear-gradient(top,  #5392ce 0%,#dde9f5 100%); 
	background: -ms-linear-gradient(top,  #5392ce 0%,#dde9f5 100%); 
	background: linear-gradient(to bottom,  #5392ce 0%,#dde9f5 100%); 
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5392ce', endColorstr='#dde9f5',GradientType=0 );


normal side widgets:
	background-color: #e8f0f9;
	border: 1px solid #d7e2ed;

*/


/* Import Responsive Styles */
@import url('../responsive/style.css');

/* =Start Here
-------------------------------------------------------------- */

/* text elements
-------------------------------------------------------------- */
h1 {
	font-size: 20px;
}
h2 {
	font-size: 18px;
}
h3 {
	font-size: 16px;
}
blockquote p {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	font-size: 14px;
	line-height: 20px;
}




/* General resets to undo styles from the Responsive style sheet
-------------------------------------------------------------- */
#widgets,
#content {
	margin-top:0px;
}

.home #wrapper {
	background-color:white;
	margin: 20px auto 20px auto;
	padding: 0 20px 20px 20px;
}

.home #widgets {
	margin-top: 40px;
}

p, hr, dl, pre, form, table, address, blockquote {
	margin: 1.6em 0 0 0;
}

h1+p,
h2+p,
h3+p,
h4+p,
h5+p {
	/* margin-top:0; */
}

a img.alignnone {margin-top: 0px;}


/* Layout
-------------------------------------------------------------- */
.tinynav {display:none;}

body {
	background: #9CBCDA;
}

.menu li li:hover {
	background: transparent !important;
	filter: none;
}

#container {
	margin-top:45px;
	padding:0;
	max-width:1100px;
	-webkit-border-bottom-right-radius: 20px;
	-webkit-border-bottom-left-radius: 20px;
	-moz-border-radius-bottomright: 20px;
	-moz-border-radius-bottomleft: 20px;
	-moz-box-shadow:0px 6px 10px 2px rgba(0, 0, 0, 0.35);
	-webkit-box-shadow:0px 6px 10px 2px rgba(0, 0, 0, 0.35);
	box-shadow:0px 6px 10px 2px rgba(0, 0, 0, 0.35);
		background: #e3b11f;
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2UzYjExZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlMGNlOWQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  #e3b11f 0%, #e0ce9d 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e3b11f), color-stop(100%,#e0ce9d));
	background: -webkit-linear-gradient(top,  #e3b11f 0%,#e0ce9d 100%);
	background: -o-linear-gradient(top,  #e3b11f 0%,#e0ce9d 100%);
	background: -ms-linear-gradient(top,  #e3b11f 0%,#e0ce9d 100%);
	background: linear-gradient(to bottom,  #e3b11f 0%,#e0ce9d 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e3b11f', endColorstr='#e0ce9d',GradientType=0 );
;
}
.ie6 #container {
	width:1100px;
	margin-top:45px !important;
}

#cvc_left_sidebar {
	display: block;
	float: left;
	width: 20%;
	margin: 0;
	min-height: 800px;
	overflow: hidden;
}

.ie6 #cvc_left_sidebar {
	height: 1200px;
}

#cvc_right_content {
	width: 80%;
	min-height: 800px;
	float: right;
	margin: 0;
	overflow: hidden;
	background: white;
	-webkit-border-bottom-right-radius: 20px;
	-webkit-border-bottom-left-radius: 20px;
	-moz-border-radius-bottomright: 20px;
	-moz-border-radius-bottomleft: 20px;
/* SAFARI ISSUE WITH GOOGLE MAPS  	z-index: 200; */
}

#cvc_left_sidebar #widgets {
	width: 220px;
	float: none;
	height: 100%;
	display: block;
	position: relative;
	background: transparent;
	margin:0;
	margin-top: 0px;
	padding-top: 250px;
	z-index: 0;
}

.page-template-landing-page-wvup-php #cvc_left_sidebar #widgets {
	padding-top: 250px;
}

.page-template-landing-page-wvup-php #cvc_left_sidebar #widgets {
}

.widget-wrapper {
	margin-top: 20px;
}

.widget-wrapper {
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	background-color: #e8f0f9;
	border: 1px solid #d7e2ed;
	border-radius: 6px;
	font-size: 13px;
}

#cvc_left_sidebar .widget-wrapper {
	/* width: 200px; */
	float: none;
	display: block;
	position: relative;
	background: transparent;
	border:none;
	padding:0;
	/* padding-left: 5px; */
	padding-right: auto;
}

#wrapper {
	border:none;
/* SAFARI ISSUE WITH GOOGLE MAPS  	z-index:200; */
	background: transparent !important;
}

#header {
	position: relative;
/* SAFARI ISSUE WITH GOOGLE MAPS  	z-index:100; */
	height: 250px;
	-webkit-box-shadow: 0px 10px 20px rgba(50, 50, 50, 0.75);
	-moz-box-shadow: 0px 10px 20px rgba(50, 50, 50, 0.75);
	box-shadow: 0px 10px 20px rgba(50, 50, 50, 0.75);
	background-color: #111683;
}

.page-template-landing-page-wvup-php #header {
	height: 350px;
}

.breadcrumb-list {
	padding:0;
}

#wrapper #content{
	width:70%;
}

.page-template-landing-page-wvup-php #wrapper #content {
	width: 65%;
}

.printfriendly.pf-alignright {
	margin: 0;
	margin-top:-25px !important; 
}

#content-full .printfriendly.pf-alignright {
	margin: 0;
/*	margin-top:-80px !important; */
}

.sociable {
	margin-top:25px;
}


body.home .post-title {
	display:none;
}

/* HEADER Image
-------------------------------------------------------------- */
#headerimage {
	display:none; 
	visibility:visible;
	position: absolute;
	top:0;
/* SAFARI ISSUE WITH GOOGLE MAPS  	z-index:600; */
	width:100%;
	height:250px;
	background-position: 0 0;
	background-repeat: no-repeat;
	overflow: hidden;

}

.page-template-landing-page-wvup-php #headerimage {
		height:350px;
}


#headerimage_fallback {
	display:none;
	position: absolute;
	top:0;
	width:100%;
	height:250px;
	background-position:  0 0;
	background-repeat: no-repeat;
	background-image: url(images/defaultbg-1.jpg);
	overflow: hidden;
}

#headerimage_fallback.bg2 {
	background-image: url(images/defaultbg-2.jpg);
}

#headerimage_fallback.bg3 {
	background-image: url(images/defaultbg-3.jpg);
}

#headerimage_fallback.bg4 {
	background-image: url(images/defaultbg-4.jpg);
}

#headerimage_fallback.bg5 {
	background-image: url(images/defaultbg-5.jpg);
}

.page-template-landing-page-wvup-php #headerimage_fallback {
	height:350px;
	background-image: url(images/defaultbg-landing-1.jpg);
}

.page-template-landing-page-wvup-php #headerimage_fallback.bg2 {
	background-image: url(images/defaultbg-landing-2.jpg);
}

.page-template-landing-page-wvup-php #headerimage_fallback.bg3 {
	background-image: url(images/defaultbg-landing-3.jpg);
}

.page-template-landing-page-wvup-php #headerimage_fallback.bg4 {
	background-image: url(images/defaultbg-landing-4.jpg);
}

.page-template-landing-page-wvup-php #headerimage_fallback.bg5 {
	background-image: url(images/defaultbg-landing-5.jpg);
}


.no-js #headerimage_fallback,
.no-js  {
	visibility: visible;
	display:block;
}

#headerimage img,
#headerimage_fallback img {
	margin:0;
	padding:0;
	width:880px;
}



/* Main (left) Sidebar
-------------------------------------------------------------- */

#wvup_logo {
	background: url(images/wvuplogo.png) top right no-repeat;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	right: 0;
}

.ie6 #wvup_logo {
	background: transparent;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/wp-content/themes/wvup/images/wvuplogo.png');

}

#sidebar_icon {
	display:none;
	width:220px;
	min-height: 800px;
	overflow: visible;
	position: absolute;
	top:45px;
}

.ie6 #sidebar_icon {
	height:800px;
	background:transparent;
}

#sidebar_widgets {
	width:220px;
	min-height: 800px;
	overflow: visible;
	position: absolute;
	top:45px;
}

#wv_logo {
	display:none;
	position: fixed;
	background: url(images/bell_graphic.gif) 0 0 no-repeat;
	width:220px;
	height: 250px;
	bottom: 10%;
}
.error404 #wv_logo {
	position:relative !important;
}


.ie6 #wv_logo {
	display:none !important;
}

.no-js #sidebar_icon {

}

/* Default Fallback icon for new pages without an established class */
#sidebar_icon {
	background: url(images/icon-default.png) 0 0 no-repeat;
}

.ie6 #sidebar_icon {
	background: transparent;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/wp-content/themes/wvup/images/icon-default.png');
}

/* Section Specific Sidebar Icons */

body.page-parent-about #sidebar_icon {
	background: url(images/icon-about.png) 0 0 no-repeat;
}

.ie6 body.page-parent-about #sidebar_icon {
	background: transparent;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/wp-content/themes/wvup/images/icon-about.png');
}

.page-parent-academics #sidebar_icon {
	background: url(images/icon-academics.png) 0 0 no-repeat;
}

.ie6 .page-parent-academics #sidebar_icon {
	background: transparent;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/wp-content/themes/wvup/images/icon-academics.png');
}

.page-parent-current-students #sidebar_icon {
	background: url(images/icon-current-students.png) 0 0 no-repeat;
}

.ie6 .page-parent-current-students #sidebar_icon {
	background: transparent;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/wp-content/themes/wvup/images/icon-current-students.png');
}

.page-parent-faculty-staff #sidebar_icon {
	background: url(images/icon-faculty-staff.png) 0 0 no-repeat;
}

.ie6 .page-parent-faculty-staff #sidebar_icon {
	background: transparent;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/wp-content/themes/wvup/images/icon-faculty-staff.png');
}

.page-parent-alumni-giving #sidebar_icon {
	background: url(images/icon-alumni-giving.png) 0 0 no-repeat;
}

.ie6 .page-parent-alumni-giving #sidebar_icon {
	background: transparent;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/wp-content/themes/wvup/images/icon-alumni-giving.png');
}

.page-parent-future-students #sidebar_icon {
	background: url(images/icon-future-students.png) 0 0 no-repeat;
}

.ie6 .page-parent-future-students #sidebar_icon {
	background: transparent;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/wp-content/themes/wvup/images/icon-future-students.png');
}

.page-parent-high-school-students #sidebar_icon {
	background: url(images/icon-high-school-students.png) 0 0 no-repeat;
}

.ie6 .page-parent-high-school-students #sidebar_icon {
	background: transparent;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/wp-content/themes/wvup/images/icon-high-school-students.png');
}

.page-parent-workforce-community #sidebar_icon {
	background: url(images/icon-workforce-community.png) 0 0 no-repeat;
}

.ie6 .page-parent-workforce-community #sidebar_icon {
	background: transparent;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/wp-content/themes/wvup/images/icon-workforce-community.png');
}

.error404 #sidebar_icon {
	background: url(images/icon-default.png) 0 0 no-repeat !important;
}

.ie6 .error404  #sidebar_icon {
	background: transparent;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/wp-content/themes/wvup/images/icon-default.png') !important;
}





/*WIDGETS
-------------------------------------------------------------- */

#wrapper #widgets{
	width:25%;
	min-width:200px;
	float: right;
}

#wrapper #widgets form {
	margin: 0;
}

.page-template-landing-page-wvup-php #wrapper #widgets {
	margin-top:-80px;
	background: #5392ce;
	padding: 25px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
/* 	text-align: center !important; */
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.34);
	-moz-box-shadow:    0px 0px 10px rgba(0, 0, 0, 0.34);
	box-shadow:         0px 0px 10px rgba(0, 0, 0, 0.34);
	background: #5392ce; /* Old browsers */
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzUzOTJjZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNkZGU5ZjUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  #5392ce 0%, #dde9f5 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5392ce), color-stop(100%,#dde9f5)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #5392ce 0%,#dde9f5 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #5392ce 0%,#dde9f5 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #5392ce 0%,#dde9f5 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #5392ce 0%,#dde9f5 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5392ce', endColorstr='#dde9f5',GradientType=0 ); /* IE6-8 */
}

.page-template-landing-page-wvup-php #wrapper #widgets .widget-wrapper{
	background: transparent;
	border: none;
	padding: 0;
}
.widget-title,a,
h1,h2,h3,h4,h5,h6 {
	color:#111683;
}

.widget-title {
	text-align: center !important;
}

.widget-wrapper .ngg-widget a,
.widget-wrapper .ngg-widget img,
.widget-wrapper div.ngg-widget-slideshow,
.widget-wrapper .ngg_slideshow a,
.widget-wrapper .ngg_slideshow img {
	max-width:100% !important;
}

.widget-title, .widget-title-home h3 {
	display: block;
	font-size: 14px;
	font-weight: bold;
	line-height: 13px;
	margin: 0;
	padding: 0 0 5px 0;
}


#cvc_right_content #widgets #s {
	width: 60%;
}
.page-template-landing-page-wvup-php #cvc_right_content #widgets #s {
	width: 70%;
}


/*FOOTER 
--------------------------------------------------*/

#footerbar {
	color: #555;
	clear: both;
	width: 80%;
	float: right;
	background: white;
	text-align: center;
	margin-top: 5px;
	height: auto;
	padding-bottom: 25px;
	padding-top: 15px;
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
	font-size: 10px;
	line-height: normal;
}

.footer-text {
	margin-left: 20px;
	margin-right: 20px;
}

.footer-text a {
	color: #111683;
	text-decoration: underline;
	cursor: pointer;
}

.scroll-top {
	font-size: 10px;
	line-height: normal;
	float: left;
	margin-bottom: 10px;
	width: 100%;	
}

/*Navigable Nav Menu
-------------------------------------------------------------- */
#access div.cvc-menu .menu li {
	position: static;
}

#access div.cvc-menu .menu ul.mega-panel {
	display:none;
/* 	display:block; */
	left:0;
	position:absolute;
/* 	top:0; */
	top:100%;
/*
	visibility:hidden;
	opacity:0.0;
*/
	z-index:10;
	height: auto;
	-webkit-transition: opacity 0.3s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	-o-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
	width: 100%;
}

/*
#access div.cvc-menu .menu li:hover > ul.mega-panel {
	top:100%;
	visibility:visible;
	opacity:1.0;
	height: auto;
	-webkit-transition: opacity 0.3s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	-o-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
	width: 100%;
}
*/

#access div.cvc-menu .menu a {
	line-height: normal;
	padding: 0 0.8em;
}

#access {display:none;}
.js #access {display:block;}
.ie7 #access {display:none;}

#access-fallback {display:block;}
.js #access-fallback {display:none;}
.ie7 #access-fallback,
.ie6 #access-fallback {display:block !important;}

#access {
	width:1100px;
	position: relative;
	overflow-x: hidden;
/* CANNOT HAVE Z-INDEX ON THIS ELEMENT  	z-index: 9999999; */
	margin-left: auto;
	margin-right: auto;
}

#access div.cvc-menu ul.main-nav {
	width:1100px;
	position: fixed;
	top:0;
	visibility: visible;
	padding: 0;
		background: #111683;
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzQ2NTFjOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjkwJSIgc3RvcC1jb2xvcj0iIzExMTY4MyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
	background: -moz-linear-gradient(top,  #4651c9 0%, #111683 90%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4651c9), color-stop(90%,#111683));
	background: -webkit-linear-gradient(top,  #4651c9 0%,#111683 90%);
	background: -o-linear-gradient(top,  #4651c9 0%,#111683 90%);
	background: -ms-linear-gradient(top,  #4651c9 0%,#111683 90%);
	background: linear-gradient(to bottom,  #4651c9 0%,#111683 90%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4651c9', endColorstr='#111683',GradientType=0 );
;
	-moz-box-shadow:0px 0px 5px 2px rgba(0, 0, 0, 0.35);
	-webkit-box-shadow:0px 0px 5px 2px rgba(0, 0, 0, 0.35);
	box-shadow:0px 0px 5px 2px rgba(0, 0, 0, 0.35);
}

#access li.section a{
	font-weight: bold;
}

#access div.cvc-menu li.level-1 {
	display:inline;
	float: left;
	white-space: nowrap;
	background-color: transparent;
	padding: 0 !important;
	margin: 0;
	-webkit-transition: background-color 0.3s ease-in-out;
	-moz-transition: background-color 0.3s ease-in-out;
	-o-transition: background-color 0.3s ease-in-out;
	transition: background-color 0.3s ease-in-out;
}

#access div.cvc-menu li.level-1:hover {
	background-color: #3B44AD;
	-webkit-transition: background-color 0.3s ease-in-out;
	-moz-transition: background-color 0.3s ease-in-out;
	-o-transition: background-color 0.3s ease-in-out;
	transition: background-color 0.3s ease-in-out;
	background-image:none !important;
    filter:progid:none !important;
}

#access div.cvc-menu li.level-1 a {
	color:#E3B11F;
	text-decoration: none;
	display:block;
	border:none;
	height: 45px;
	line-height: 40px;
	background: transparent;
}

#access div.cvc-menu li.level-1.active a,
#access div.cvc-menu li.level-1.parent-active a {
	background-color: #E3B11F;
	color: #111683;
	text-shadow: none;
	-webkit-transition: background-color 0.3s ease-in-out;
	-moz-transition: background-color 0.3s ease-in-out;
	-o-transition: background-color 0.3s ease-in-out;
	transition: background-color 0.3s ease-in-out;
}
#access div.cvc-menu li.level-1.active a:hover,
#access div.cvc-menu li.level-1.parent-active a:hover {
	color:#eee;
	background: #3B44AD;
	-webkit-transition: background-color 0.3s ease-in-out;
	-moz-transition: background-color 0.3s ease-in-out;
	-o-transition: background-color 0.3s ease-in-out;
	transition: background-color 0.3s ease-in-out;
	background-image:none !important;
    filter:progid:none !important;
}

#access div.cvc-menu li.level-1 a:hover {
	color:#eee;
	background-color:none;
	text-decoration: none;
	background-image:none !important;
    filter:progid:none !important;
}


#access div.cvc-menu ul.main-nav,
#access div.cvc-menu .mega-panel ul {
	list-style: none;
	margin-left: 0;
}

#access div.cvc-menu ul.sub-nav {
	margin:0;
	padding: 0;
		background: #e3b11f;
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2UzYjExZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlMGNlOWQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  #e3b11f 0%, #e0ce9d 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e3b11f), color-stop(100%,#e0ce9d));
	background: -webkit-linear-gradient(top,  #e3b11f 0%,#e0ce9d 100%);
	background: -o-linear-gradient(top,  #e3b11f 0%,#e0ce9d 100%);
	background: -ms-linear-gradient(top,  #e3b11f 0%,#e0ce9d 100%);
	background: linear-gradient(to bottom,  #e3b11f 0%,#e0ce9d 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e3b11f', endColorstr='#e0ce9d',GradientType=0 );
;
	
	-moz-box-shadow:0px 6px 10px 2px rgba(0, 0, 0, 0.35);
	-webkit-box-shadow:0px 6px 10px 2px rgba(0, 0, 0, 0.35);
	box-shadow:0px 6px 10px 2px rgba(0, 0, 0, 0.35);
	-webkit-border-bottom-right-radius: 20px;
	-webkit-border-bottom-left-radius: 20px;
	-moz-border-radius-bottomright: 20px;
	-moz-border-radius-bottomleft: 20px;
	border-bottom-right-radius: 20px;
	border-bottom-left-radius: 20px;
	padding-bottom:20px;
	padding-top:20px;
}

#access div.cvc-menu li.level-2 {
	display: block;
	float: left;
	width: 32.5%;
	height: auto; 
	white-space: normal;
	background: transparent;
	border:none;
	padding-left: 5px;
}

#access div.cvc-menu li.parent.level-2 a.parent {
	margin-top: 5px;
	background: white !important;
	-webkit-border-top-right-radius: 15px;
	-webkit-border-top-left-radius: 15px;
	-webkit-border-bottom-right-radius: 0px;
	-webkit-border-bottom-left-radius: 0px;
	-moz-border-radius-topright: 15px;
	-moz-border-radius-topleft: 15px;
	-moz-border-radius-bottomright: 0px;
	-moz-border-radius-bottomleft: 0px;
	border-top-right-radius: 15px;
	border-top-left-radius: 15px;
	border-bottom-right-radius: 0px;
	border-bottom-left-radius: 0px;
	padding-bottom: 5px;
	padding-top: 3px;
}

#access div.cvc-menu li.level-2 a {
	height: auto; 
	white-space: normal;
	line-height: normal;
	color: #111683;
	font-size: 12px;
	background-color: transparent;
	-webkit-transition: background-color 0.3s ease-in-out;
	-moz-transition: background-color 0.3s ease-in-out;
	-o-transition: background-color 0.3s ease-in-out;
	transition: background-color 0.3s ease-in-out;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
}

#access div.cvc-menu li.level-2 a:hover {
	color: #E3B11F !important;
	background-color: #111683 !important;
	-webkit-transition: background-color 0.3s ease-in-out;
	-moz-transition: background-color 0.3s ease-in-out;
	-o-transition: background-color 0.3s ease-in-out;
	transition: background-color 0.3s ease-in-out;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
}

#access div.cvc-menu ul.sub-nav2 {
	display: inline;
	padding: 0;
}

#access div.cvc-menu ol {
	width: 100%;
	margin: 0;
	padding: 0;
	display: inline-block;
	float: left;
	padding-bottom: 15px;
/* FIND SLIGHTLY LIGHTER YELLOW HEX COLOR */
	background: rgba(255,255,255,0.3);
/*
	-moz-box-shadow:0px 3px 5px 2px rgba(0, 0, 0, 0.35);
	-webkit-box-shadow:0px 3px 5px 2px rgba(0, 0, 0, 0.35);
	box-shadow:0px 3px 5px 2px rgba(0, 0, 0, 0.35);
*/
	-webkit-border-bottom-right-radius: 20px;
	-webkit-border-bottom-left-radius: 20px;
	-moz-border-radius-bottomright: 20px;
	-moz-border-radius-bottomleft: 20px;
	border-bottom-right-radius: 20px;
	border-bottom-left-radius: 20px;
	padding-top:5px;
}

#access div.cvc-menu ol li a:before {
	content: "» ";
}

#access div.cvc-menu ol li.level-3{
	width: 100% !important;
	float: none;
	white-space: normal;
	line-height: normal;
	background: transparent;
	margin: 0;
	padding: 0;
}

#access div.cvc-menu ol li,
#access div.cvc-menu ol li a {
	padding: 0;
	margin: 0;
}

#access div.cvc-menu ol li a {
	padding: 0;
	margin: 0;
	padding-top:2px;
	padding-bottom:2px;
	padding-left: 5px;
	font-weight: normal;
	font-style: normal;
}

#access div.cvc-menu li.level-1:hover > div {
	display: block;
}

.tinynav {
	-moz-appearance:none;
	-webkit-appearance:none;
	appearance:none;
	background: none;
	border:1px solid #111683;
	overflow:hidden;
	padding:0.5em 1em 0.5em 0.75em;
	color:#E3B11F;
	position: fixed;
	top: 0;
	left: 0;
}

/* Hiding this in the Navigable Menu because it is in the "Search" menu item */
#access div.cvc-menu li.site-map.level-1 {
	display:none !important;
}

#access div.cvc-menu li.search-item {
	float: right !important;
	padding-right: 20px;
}

#access div.cvc-menu ul.mega-panel.search {
	width: 325px !important;
	right: 0 !important;
	left: auto !important;
	padding:10px;
}
#access div.cvc-menu ul.search li.level-2 {
	float: right !important;
	width:auto !important;
}	

#access div.cvc-menu ul.search li.level-2 a {
	margin-top:10px;
}

#access div.cvc-menu li.level-2.tinyhide {
	width:20% !important;
}
#access div.cvc-menu li.level-2 #searchform {
/* 	width: 100%; */
	margin: 0;
	margin-left: 25px;
}

hr.divider {
	display: block;
	background: blue;
	margin: 0;
}

hr.after {
	background: transparent;
	height: 10px;
}

hr.before {
	background: transparent;
	height: 10px;
}

/* Fallback menu (for nojs and/or no Navigable) - default wp_nav_menu */
#access-fallback {
	width:1100px;
	position: relative;
	margin-left: auto;
	margin-right: auto;
}

.no-js #access-fallback,
.ie7 #access-fallback {
	position: fixed;
	top: 0;
	left: 50%;
	margin-left: -550px;
	z-index: 55555;
}

.ie6 #access-fallback {
	display:block;
	width:1100px;
	position: absolute;
	top: 0;
	left: 50%;
	margin-left: -550px;
	z-index: 55555;
	background-color:#111683;
}



/* Restore z index on the events page only due to behaviour of full calendar */
.page-events #access,
.page-events #access-fallback {
	z-index: 55555;
}



#access-fallback ul.menu {
		background: #111683;
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzQ2NTFjOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjkwJSIgc3RvcC1jb2xvcj0iIzExMTY4MyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
	background: -moz-linear-gradient(top,  #4651c9 0%, #111683 90%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4651c9), color-stop(90%,#111683));
	background: -webkit-linear-gradient(top,  #4651c9 0%,#111683 90%);
	background: -o-linear-gradient(top,  #4651c9 0%,#111683 90%);
	background: -ms-linear-gradient(top,  #4651c9 0%,#111683 90%);
	background: linear-gradient(to bottom,  #4651c9 0%,#111683 90%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4651c9', endColorstr='#111683',GradientType=0 );
;
}

#access-fallback .menu .current_page_item a {
	background-color: #E3B11F;
	color: #111683;
	text-shadow: none;
	-webkit-transition: background-color 0.3s ease-in-out;
	-moz-transition: background-color 0.3s ease-in-out;
	-o-transition: background-color 0.3s ease-in-out;
	transition: background-color 0.3s ease-in-out;
}
#access-fallback .menu current_page_item a:hover {
	color:#eee;
	background: #3B44AD;
	-webkit-transition: background-color 0.3s ease-in-out;
	-moz-transition: background-color 0.3s ease-in-out;
	-o-transition: background-color 0.3s ease-in-out;
	transition: background-color 0.3s ease-in-out;
}

.ie6 #access-fallback .menu li {
	display:block;
	zoom:1;
	width:50px;
	white-space:nowrap;
}

#access-fallback ul.menu a{
	background:transparent;
	color:#E3B11F;
	padding-left: 10px;
	padding-right: 10px;
	border: none;
	-webkit-transition: background-color 0.3s ease-in-out;
	-moz-transition: background-color 0.3s ease-in-out;
	-o-transition: background-color 0.3s ease-in-out;
	transition: background-color 0.3s ease-in-out;
}

#access-fallback ul.menu a:hover{
	color:#ffffff;
	background: #3B44AD !important;
	background-image: none;
	filter:none;
	-webkit-transition: background 0.3s ease-in-out;
	-moz-transition: background 0.3s ease-in-out;
	-o-transition: background 0.3s ease-in-out;
	transition: background 0.3s ease-in-out;
}

#access-fallback ul.menu li > ul {
	top:0;
	visibility:hidden;
	opacity:0.0;
	-webkit-transition: opacity 0.3s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	-o-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
}

#access-fallback ul.menu li:hover > ul {
	top:100%;
	visibility:visible;
	opacity:1.0;
	-webkit-transition: opacity 0.3s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	-o-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
}

#access-fallback ul.menu li li:hover > ul {
	left:100%;
	top:0 !important;
}

#access-fallback ul.menu li li,
#access-fallback ul.menu li li a {
	background-color: #E3B11F !important;
	color: #111683 !important;
	border-color: #111683 !important;
}

.ie7 #access-fallback ul.menu li li a,
.ie6 #access-fallback ul.menu li li a {
	background:transparent !important;
}

.ie7 #access-fallback ul.menu li li:hover>a,
.ie6 #access-fallback ul.menu li li:hover>a {
	background:transparent !important;
	color:#E3B11F !important;
}

#access-fallback ul.menu li li:hover,
#access-fallback ul.menu li li a:hover {
	background-color: #111683 !important;
	color: #fff !important;
}
/* ALWAYS HIDDEN - used to generate the tinynav for mobile devices only */
#access-mobile .menu,
#access-fallback .tinynav,
#access .tinynav  {display:none !important;}

/* =Simple Section Navigation, and Other Widget Lists
-------------------------------------------------------------- */
#widgets ul li {
	margin-left:0px;
}

#widgets ul.children {
/* 	margin-left: 10px; */
}


#widgets ul {
	color:#111683;
	list-style: none;
	margin:0;
	padding:0;
	line-height: normal;
	overflow: hidden;
}

#widgets li a {
/*	width: 97%; */
 	display: block !important;
	padding: 3px;
	padding-left:10px;
	padding-right: 10px;
}

.widget_pages li a {
	background: transparent;
}

.widget_pages li.current_page_parent>a,
.widget_pages ul.children li.current_page_item>a {
	background: white !important;
	width: 97%;
	display: block !important;
	padding: 3px !important;
}

#widgets ul.children a {
	background: transparent;
	/* width: 100%; */
	display: block;
	padding-left: 20px;
}

#widgets ul.children ul.children a {
	padding-left: 30px;
}

#widgets ul.children a:hover {
	background: #111683 !important;
	color:white !important;

}

.simple-section-nav li a {display:block !important;}

.simple-section-nav li.current_page_item>a {
	background: #fcdf96 !important;
	width: 97%;
	display: block !important;

}


#widgets ul li{
	margin:0;
	padding:0;
/* 	margin-top:5px;	 */
}

#widgets a{
	color:#111683;
	list-style: none;
/* 	background-color: transparent; */
	-webkit-transition: background-color 0.3s ease-in-out;
	-moz-transition: background-color 0.3s ease-in-out;
	-o-transition: background-color 0.3s ease-in-out;
	transition: background-color 0.3s ease-in-out;
}

#widgets a:hover{
	color:#ffffff;
	background-color: #111683 !important;
	-webkit-transition: background-color 0.3s ease-in-out;
	-moz-transition: background-color 0.3s ease-in-out;
	-o-transition: background-color 0.3s ease-in-out;
	transition: background-color 0.3s ease-in-out;
}


#widgets li.current_page_item {
/* because ie screws up the placement of the bullet
		list-style: square;
		list-style-position: inside;
*/
}

.widget_archive li,
.widget_categories li,
.widget_links li {
	padding: 0px 0px !important;
	color: #333;
	font-size: 11px;
	font-style: italic;
}
.widget_links li {
	margin-left: 15px !important;
}

.widget_archive a,
.widget_categories a,
.widget_archive ul.children li a,
.widget_categories ul.children li a{
	display: inline-block !important;
	width:auto !important;
	padding: 3px !important;
	color: #111683;
	font-size: 13px;
	font-style: normal;
}

widget_archive ul.children li a,
.widget_categories ul.children li a{
	padding-left: 15px !important;
}

.widget_links li a {
	display: block !important;
	margin-left: -15px !important;
	padding: 3px !important;
	color: #111683;
	font-size: 13px;
	font-style: normal;
}

.widget_meta ul li a{
	display:block !important;
}

/* RSS Widget 
--------------------------------------------------------------*/
.widget_rss .widget-title a {
	background-color: transparent !important;
	color: #111683 !important;
	font-weight: bold;
	font-size: 14px;
}

.widget_rss .widget-title a:hover {
	background-color: transparent !important;
	color: red !important;
	font-weight: bold;
}

.widget_rss li {
	font-size: 11px;
	font-style: italic;
	color: #333;
	padding-bottom: 15px !important;
}
.widget_rss li a {
	font-size: 13px;
	font-style: normal;
	color: #111683;
	display: block !important;
}

#widgets .rss-date {
	padding:3px 12px;
	line-height: 13px;
}
#widgets .rssSummary {
	padding:3px 12px;
}

/* NGG Media RSS Widget 
--------------------------------------------------------------*/

div.ngg_mrssw ul li a {
	background-color: transparent !important;

}
div.ngg_mrssw ul li a:hover {
	background-color: transparent !important;
	color: red !important;
}

/* Tag Cloud Widget 
--------------------------------------------------------------*/
div.tagcloud {
	background: rgba(255,255,255,.35);
	padding: 5px;
	-webkit-border-radius: 14px;
	-moz-border-radius: 14px;
	border-radius: 14px;
}

div.tagcloud a:hover {
	background-color: transparent !important;
	color: red !important;
}

/* Sidebar Custom Menus in Widgets
--------------------------------------------------------------*/
#widgets .menu-widget,
#widgets .menu-widget li,
#widgets .menu-widget a,
#widgets .menu,
#widgets .menu li,
#widgets .menu a {
	background: none;
	border:none;
	text-shadow: none;
	color:#111683;
	font-weight: normal;
	margin: 0;
	padding: 0;
	float:none;
	display:block;
	height: auto;
	line-height: normal;
	/* for ie */
	background-color:transparent !important;
	background-image: none !important;
	filter: none !important;

}

#widgets .menu,
#widgets .menu-widget {
	text-align: left;
}

#widgets .menu li,
#widgets .menu-widget li {
	display:list-item;
}

#widgets .menu a,
#widgets .menu-widget a {
	padding: 3px;
	padding-left:10px;
	padding-right:10px;
/*	width:90%; */
	background-color: transparent !important;
	-webkit-transition: background-color 0.3s ease-in-out;
	-moz-transition: background-color 0.3s ease-in-out;
	-o-transition: background-color 0.3s ease-in-out;
	transition: background-color 0.3s ease-in-out;
}

.page-template-landing-page-wvup-php #widgets .menu a,
.page-template-landing-page-wvup-php #widgets .menu-widget a {
	padding: 3px;
	padding-left:25px;
	padding-right:10px;
	text-align: right;
}

.page-template-landing-page-wvup-php #widgets .widget_nav_menu .widget-title {
	display:none;
}

#widgets .menu a:hover,
#widgets .menu-widget a:hover {
	color:#ffffff;
	background-color: #111683 !important;
	-webkit-transition: background-color 0.3s ease-in-out;
	-moz-transition: background-color 0.3s ease-in-out;
	-o-transition: background-color 0.3s ease-in-out;
	transition: background-color 0.3s ease-in-out;
}

#widgets .menu ul,
#widgets .menu-widget ul {
	position: relative;
	visibility: visible;
}

#widgets .menu ul a,
#widgets .menu-widget ul a{
	padding-left: 20px;
}

#widgets .menu ul ul a,
#widgets .menu-widget ul ul a{
	padding-left: 30px;
}

/* Calendar (AND Posts Calendar Widget) and Events Styles
-------------------------------------------------------------- */
.em-calendar-wrapper table,
#calendar_wrap table {
	-webkit-border-radius: 14px;
	-moz-border-radius: 14px;
	border-radius: 14px;
	border:1px solid #111683;
	border-collapse: separate;
	overflow: hidden;
	background-color: #B7D1EB;
	-webkit-box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.25);
	-moz-box-shadow:    0px 3px 7px rgba(0, 0, 0, 0.25);
	box-shadow:         0px 3px 7px rgba(0, 0, 0, 0.25);
	margin-top:0;
}

.firefox .em-calendar-wrapper table,
.firefox  #calendar_wrap table {
	-moz-border-radius: 0 0 14px 14px;
	border-radius: 0 0 14px 14px;
}

.home .em-calendar-wrapper table,
#calendar_wrap table {
	background-color: rgba(255,255,255,.20);
}

.em-calendar-wrapper table thead tr td:first-child,
#calendar_wrap table thead tr td:first-child {
	border-radius: 14px 0px 0px 0px;
	-moz-border-radius: 14px 0px 0px 0px;
	-webkit-border-radius: 14px 0px 0px 0px;	
}

.em-calendar-wrapper table thead tr td:last-child,
#calendar_wrap table thead tr td:last-child {
	border-radius:  0px 14px 0px 0px ;
	-moz-border-radius:  0px 14px 0px 0px;
	-webkit-border-radius:  0px 14px 0px 0px;	
}

.em-calendar-wrapper table tbody tr:last-child td:first-child,
#calendar_wrap table tbody tr:last-child td:first-child {
	border-radius:  0px 0px 0px 14px;
	-moz-border-radius:  0px 0px 0px 14px;
	-webkit-border-radius:  0px 0px 0px 14px;	
}

.em-calendar-wrapper table tbody tr:last-child td:last-child,
#calendar_wrap table tbody tr:last-child td:last-child {
	border-radius:  0px 0px 14px 0px ;
	-moz-border-radius:  0px 0px 14px 0px;
	-webkit-border-radius:  0px 0px 14px 0px;	
}

#calendar_wrap table {
	-webkit-border-top-left-radius: 3px;
	-webkit-border-top-right-radius: 3px;
	-moz-border-radius-topleft: 3px;
	-moz-border-radius-topright: 3px;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
}

#calendar_wrap table caption{
	background: #111683;
	color:#E3B11F;
	font-weight: bold;
	border:1px solid #111683;
	border-collapse: separate;
	-webkit-border-top-left-radius: 14px;
	-webkit-border-top-right-radius: 14px;
	-moz-border-radius-topleft: 14px;
	-moz-border-radius-topright: 14px;
	border-top-left-radius: 14px;
	border-top-right-radius: 14px;
	-webkit-box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.25);
	-moz-box-shadow:    0px 3px 7px rgba(0, 0, 0, 0.25);
	box-shadow:         0px 3px 7px rgba(0, 0, 0, 0.25);
	margin:0;
	padding:0;
	font-size: 12px;
}

#calendar_wrap table thead {
	background: #111683;
	color:#E3B11F;
	border:1px solid #111683;
	font-weight: bold;
	font-size: 12px;
}

table.em-calendar td,
#calendar_wrap table td,
#calendar_wrap table th {
	border:none;
}



.em-calendar-wrapper table,
.em-calendar-wrapper td {
	border-color: #111683 !important;
	
}
table.em-calendar td.eventless-pre,
table.em-calendar td.eventless-post,
#calendar_wrap table td.pad {
	color: #fff !important;
	background: rgba(255,255,255,.20);
}

table.em-calendar thead,
table td a.em-calnav,
table.em-calendar tr.days-names,
table.em-calendar td.month_name  {
	background-color: #111683 !important;
	color: #E3B11F !important;
	font-weight: bold;
	font-size: 12px;
}

table.em-calendar td.eventless-today,
#calendar_wrap table td#today {
	background-color: #e1e1ff;
	background-color: rgba(225,225,255,0.5);
	color: #111683 !important;
	-webkit-border-radius: 25px;
	-moz-border-radius: 25px;
	border-radius: 25px;

}
table.em-calendar td.eventful{
	color: #fff !important;
	-webkit-border-radius: 25px;
	-moz-border-radius: 25px;
	border-radius: 25px;

}

table.em-calendar td.eventful a,
table.em-calendar td.eventful-today a,
#calendar_wrap td a {
	color: red !important;
	font-weight: bold;
}

table#wp-calendar {
	margin-top: 0;
}

table#wp-calendar td,
table#wp-calendar th {
		padding:1px;
		text-align: center;
}


.widget_em_widget ul,
.widget_em_locations_widget ul{
	list-style: none;
	margin: 0;
	margin-left: 5px;

}

.widget_em_widget ul li,
.widget_em_locations_widget ul li{
	/* margin-bottom: 15px; */
	padding-left: 5px !important;
	border-left: 3px solid #111683;
}

.widget_em_widget ul li a,
.widget_em_locations_widget ul li a{
	font-weight: bold;
}

.widget_em_widget ul ul,
.widget_em_locations_widget ul ul{
	list-style: none;
	line-height: normal;
	margin-top: 5px !important;
	padding-left: 5px !important;
}

.widget_em_widget ul ul li,
.widget_em_locations_widget ul ul li{
	margin-bottom: 0px; 
	padding-left: 0px;
	border:none;
	font-weight: normal;
}


/*NextGen Gallery Widgets
--------------------------------------------------*/
.ngg-widget img {
	border: 2px solid #111683;
	margin: 0pt 2px 2px 0px;
	padding: 1px;
}

.ngg-widget,
.ngg-widget-slideshow {
	text-align: center;
}

.ngg-widget-slideshow {
	margin: auto;
}

/* SEARCH WIDGET  - applies to ALL text input fields 
-------------------------------------------------------*/
select,
input[type="text"],
input[type="password"] {
	width: auto;
}


#searchform select,
#searchform input[type="text"],
#searchform input[type="password"],
div.widget_clw select,
div.widget_clw input[type="text"],
div.widget_clw input[type="password"] {
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border-radius: 8px;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	background: #ffffff;
	border: 1px solid #d7e2ed;
	margin: 0;
	outline: none;
	padding: 6px 8px;
	vertical-align: middle;
	-moz-box-shadow: inset 0 0 30px -20px #111683;
	-webkit-box-shadow: inset 0 0 30px -20px #111683;
	box-shadow: inset 0 0 30px -20px #111683;
}

button, 
a.button, 
input[type="reset"], 
input[type="button"], 
input[type="submit"] {
	border-width: 0px;
	border-style: solid;
	border-color: #111683;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	background-color: #dae6fa;
	background-image: -webkit-gradient(linear, left top, left bottom, from(white), to(#dae6fa));
	background-image: -webkit-linear-gradient(top, white, #dae6fa);
	background-image: -moz-linear-gradient(top, white, #dae6fa);
	background-image: -ms-linear-gradient(top, white, #dae6fa);
	background-image: -o-linear-gradient(top, white, #dae6fa);
	background-image: linear-gradient(top, white, #dae6fa);
	box-shadow: 0pt -1px 0pt rgba(0, 0, 0, 0.075) inset, 0pt 1px 0pt rgba(255, 255, 255, 0.3) inset, 0pt 1px 2px rgba(0, 0, 0, 0.1);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=white, endColorstr=#dae6fa);
	border-radius: 4px;
	color: #111683;
	cursor: pointer;
	display: inline-block;
	font-size: 12px;
	font-weight: 700;
	margin: 0;
	padding: 7px 10px;
	text-decoration: none;
	text-shadow: 0 0px 0 white;
	vertical-align: middle;
	white-space: nowrap;
/* 	float:right; */
}

.ie7 button, 
.ie7 a.button, 
.ie7 input[type="reset"], 
.ie7 input[type="button"], 
.ie7 input[type="submit"],
.ie6 button, 
.ie6 a.button, 
.ie6 input[type="reset"], 
.ie6 input[type="button"], 
.ie6 input[type="submit"] {
	filter:none;
}


button:hover,
a.button:hover,
input[type="reset"]:hover,
input[type="button"]:hover,
input[type="submit"]:hover {
	border-width: 0px;
}

.widget_search {
	margin: 0;
}


/* Login Widget 
---------------------------------------------------------*/
.widget_clw {
}

.widget_clw br {
	display:none;
}

.widget_clw input[type="text"],
.widget_clw input[type="password"] {
	width: 90%;
}

.widget_clw p {
	margin-bottom: 0px;
}

#cvc_right_content .widget_clw a {
	font-size: 9px;
}

.widget_clw a,
.page-template-landing-page-wvup-php #cvc_right_content .widget_clw a {
	font-size: 11px;
}


.widget_clw h3 {
	text-align: center;
	font-size: 14px;
}
.widget_clw form {
	margin-top: 10px;
	margin-bottom: 0px;
}
.widget_clw label {
	color: #111683;
}

/* Recent Posts Plus Widget 
--------------------------------------------------*/
.recent-posts-plus dt{
	margin-bottom: 0;
}

.recent-posts-plus dt a{
	width:100%;
	padding-left: 3px !important;
	line-height: normal !important;
}
.recent-posts-plus dd{
	padding-left: 3px !important;
	line-height: normal !important;
}


/*Accurax Social Media Icons Widget 
--------------------------------------------------*/
#acurax_si_simple a:hover{
	background-color:transparent !important;
}



/* Event Locations Page
--------------------------------------------------*/
.em-location-map,
.em-locations-map,
div.em-location-map-container,
div.em-location-map-container div  {
	width: 100% !important;
	height: 400px !important;
}

.gmaps_directions {
	text-align: center;
	width: 100%;
	display: block;
}

#location_map {
	margin-bottom: 40px;
}

/* Full Calendar
--------------------------------------------------*/

.ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
	border: 1px solid #E8F0F9;
	background: #E8F0F9;
	color: #363636;
}

table.fc-border-separate {
	margin-top:0;
}

table.fc-header,
form#wpfc-calendar {
	margin:0;
}
a#event-categories-button,
ul#event-categories-menu {
	width: 100% !important;
}

td.fc-today {
		background: #e3b11f;
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2UzYjExZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlMGNlOWQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  #e3b11f 0%, #e0ce9d 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e3b11f), color-stop(100%,#e0ce9d));
	background: -webkit-linear-gradient(top,  #e3b11f 0%,#e0ce9d 100%);
	background: -o-linear-gradient(top,  #e3b11f 0%,#e0ce9d 100%);
	background: -ms-linear-gradient(top,  #e3b11f 0%,#e0ce9d 100%);
	background: linear-gradient(to bottom,  #e3b11f 0%,#e0ce9d 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e3b11f', endColorstr='#e0ce9d',GradientType=0 );
;
}

a.fc-event {
	background:transparent !important;
	border: none !important;
}

div.fc-event-inner {
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	line-height: normal;
	padding-top: 10px;
	padding-bottom: 10px;
}

/* Event Submission Form 
--------------------------------------------------*/

select#location-country {
	max-width: 150px;
}

#event-form table.em-location-data,
#event-form table.em-location-data input {
	width:90%;
}

div.em-location-map-container {
	border:1px solid #bbb;
	background: #eee;
}

div.em-location-map-container p {
	margin: 10px;
}

form#event-form label {
	display:inline;
}

select#sc_select {
	display:none;
}

form#event-form div {
	margin-bottom: 0px;
	
}
div#wp-em-editor-content-media-buttons {
	clear: none;
}



/* WP Archive, Category, etc Widget and lists in widgets
--------------------------------------------------------------- */
/* Dropdowns */
.widget-wrapper select {
	width:100%;
	-moz-appearance:none;
	-webkit-appearance:none;
	appearance:none;
	background: none;
	border:1px solid #111683;
	overflow:hidden;
	padding:0.5em 1em 0.5em 0.75em;
	color:#E3B11F;
	background: #111683 url(images/bg-select.png) no-repeat right !important;
	border: 1px solid #111683;
	overflow: hidden;
	padding: 0.5em 1em 0.5em 0.75em;	
}

.ie .widget-wrapper select,
.ie8 .widget-wrapper select,
.ie7 .widget-wrapper select,
.ie6 .widget-wrapper select,
.firefox .widget-wrapper select {
	background: #111683 !important;
}

/* Download Manager 
----------------------------------------------------------------- */

ul.dlm_download_list {
	list-style: none;
	/* margin-bottom: 50px; */
}

ul.dlm_download_list li{
	/* margin-bottom: 25px; */
}

ul.dlm_download_list li div{
	margin-bottom: 25px;
}

ul.dlm_download_list li div.nospace{
	margin-bottom: 5px;
}




/* Connections 
----------------------------------------------------------------- */

#cn-list {clear:both;}

.no-js div#cn-list span.cn-image {
	background: none !important;
}

.no-js div#cn-list span.cn-image img {
	visibility: visible !important;
}
div#cn-list span.cn-image img {
	visibility: visible !important;
}


div.cn-entry {
	background-color: #E8F0F9 !important;
	border-radius:10px;
}

div.cn-entry table,
div.cn-entry table th,
div.cn-entry table td {
	background-color: #E8F0F9 !important;
	border:none !important;
}


/*Continuous RSS Scroller and Scrolling Post
----------------------------------------------------------------*/

.crs_div a{
	line-height: normal;
	display: block !important;
	padding: 3px !important;
	font-weight: bold !important;	
}

.spe_widget a {
	line-height: normal;
	display: block !important;
	padding: 3px !important;	
	font-weight: bold !important;	
}

.spe_div {
/* 	height: auto !important; */
}
.spe_widget .spe_excerpt {
	line-height: normal;
	padding-left: 3px !important;	
}


/* FAQ plugin 
----------------------------------------------------------------*/


form[name='iNICfaqsSearchForm'] {
	margin: 0px 20px;
}

#iNICfaqs_questions {
	font-size:12px;
}

#faqs_ask_box {
	margin: 10%;
	padding: 20px;
	background: #E8F0F9;
	padding-bottom: 50px;
	border-radius: 8px;
	-webkit-box-shadow: 0px 3px 10px rgba(50, 50, 50, 0.5);
	-moz-box-shadow:    0px 3px 10px rgba(50, 50, 50, 0.5);
	box-shadow:         0px 3px 10px rgba(50, 50, 50, 0.5);
	overflow:hidden;
}

#faqs_ask_box_title {
	color:#111683;
	font-size:14px;
	font-weight:bold;
	line-height:auto;
	margin-bottom: 0;
}

#faqs_ask_box p {
	margin-top:5px;
	z-index:0;
}

p.faq-form-field {
	position:relative;
	font-size:12px;
	margin:0;
}

p.faq-form-field .required {
	color: red;
	font-size: 22px;
	font-weight: bold;
	left: 100%;
	position: absolute;
	top: 60%;
}

p.faq-form-field label {
}

p.faq-form-field input[type="text"] {
	display:block;
	width:90%;
}

p.faq-form-field input[type="text"],p.faq-form-field textarea {
	position:relative;
	width:95%;
	background-color:#fff;
}

p.faq-form-field input[type="text"]:focus,p.faq-form-field textarea:focus {
	text-indent:0;
	z-index:1;
}

p.faq-form-submit {
	float:right;
}

p.faq-form-submit input[type=submit] {
}

#faqs_search_box {
}

#faqs_search_box label {
}

#faqs_search_box input[name=iNICfaqsS] {
	width:25%;
	moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	-webkit-box-shadow: 0 1px 0 white, inset 0 1px 1px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0 1px 0 white, inset 0 1px 1px rgba(0, 0, 0, 0.2);
	box-shadow: 0 1px 0 white, inset 0 1px 1px rgba(0, 0, 0, 0.2);
	background: #fff;
	border: 1px solid #AAA;
	border-bottom-color: #CCC;
	border-radius: 2px;
	margin: 0;
	outline: none;
	padding: 6px 8px;
	vertical-align: middle;
	}

#faqs_search_box input {
	margin:0;
}

#faqs_search_box input[type="submit"] {
/* 	float: right; */
}

#validation_cvc.error {
	color: white;
	background: red;
	padding: 3px;
	border:none
	border-radius: 5px;
	padding-left: 8px;
}

#validation_cvc.success {
	color: white;
	background: green;
	padding: 3px;
	border:none;
	border-radius: 5px;
	padding-left: 8px;
}

.ui-accordion-icons .ui-accordion-header a {
	padding-left: 24px !important;
}

.ui-accordion .ui-accordion-header a {
	display: block !important;
	font-size: 1em !important;
/* 	padding: .5em .5em .5em .7em !important; */
	font-weight: bold !important;
	font-size:16px !important;
}

.ui-state-default a,
.ui-state-default a:link,
.ui-state-default a:visited,
.ui-state-active a,
.ui-state-active a:link,
.ui-state-active a:visited {
	color: #111683 !important;
	text-decoration: none !important;
}

.ui-state-default .ui-icon,
.ui-state-active .ui-icon {
	background-image: url(images/ui-icons_111683_256x240.png) !important;
}

.ui-corner-all,
.ui-corner-top,
.ui-corner-right,
.ui-corner-tr,
.ui-corner-bottom,
.ui-corner-right,
.ui-corner-br {
	-moz-border-radius-topright: 0px !important;
	-webkit-border-top-right-radius: 0px !important;
	-khtml-border-top-right-radius: 0px !important;
	border-top-right-radius: 0px !important;
}

.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default,
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active,
.ui-widget-content {
	border: none !important;
/* 	background: #F6F6F6 url(images/ui-bg_glass_100_f6f6f6_1x400.png) 50% 50% repeat-x; */
/*	background: transparent !important; */
	font-weight: bold;
	color: inherit !important;
}

.ui-widget-content {
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif !important;
	font-size: 13px !important;
	font-style: normal !important;
	font-variant: normal !important;
	font-weight: normal !important;
	line-height: 2 !important;
}


.no-js div#iNICfaqs_questions {
	margin-left:25px;
}

.no-js div.accordion_header {
	margin-top: 10px;
	font-size: 14px;
	font-weight: bold !important;
}

/* Category Specific RSS plugin in footer 
--------------------------------------------------------------*/
.widget_cat_spec_rss {
	margin-top:15px;
}

.widget_cat_spec_rss ul {
	list-style: none;
}

.widget_cat_spec_rss ul li {
	display:inline;
	margin-right: 15px;
}




/* Contact Form 7 and Datepicker, etc 
--------------------------------------------------------------*/

/* Reset some styles from Responsive main css for Datepicker to work */
form.wpcf7-form div {
	clear:none !important;
	margin-bottom:0 !important;
}

form.wpcf7-form span.wpcf7-checkbox  {
	display: inline;
	width: 100%;
}

form.wpcf7-form span.wpcf7-checkbox span.wpcf7-list-item {
	display: inline-block;
	margin-left: 0;
	margin-right: 10px;
}

form.wpcf7-form p {
	margin: 5px 0;	
}

form.wpcf7-form textarea,
form.wpcf7-form input[type="text"],
form.wpcf7-form input[type="password"] {
/*	width: 95%; */
}

form.wpcf7-form input.wpcf7-captchar {
	width: auto;

}

.tallselect {
	height:200px;
	width:100%;
}

.wideselect {
	width:100%;
}

/* Collapsing Categories Widget 
-------------------------------------------------------------- */

#widget-collapscat-2-top li.collapsing.categories.item::before {
	content: '' !important;
}

.widget_collapscat li.collapsing.categories a{
	padding:0;
}



/* RSS Just Better (RSS in Posts) 
-------------------------------------------------------------- */
div.rssjb ul {
	margin:0px;
}


div.rssjb li {
	margin-bottom:15px;
	margin-top:10px;
	list-style:none;
}

div.rssjb a {
	font-weight:bold;
}

div.rssjb span.datetime {
	font-style:italic;
}


/* ADDITIONAL CUSTOMIZATION 
-------------------------------------------------------------- */

#iNICfaqs_questions div.ui-accordion-content a {
	color:#111683 !important;
} 
#iNICfaqs_questions div.ui-accordion-content a:hover {
	text-decoration: underline !important;
	color:red !important;
} 

/* REMOVE AUTHOR INFO FROM ALL POSTS */
.entry-meta, .post-meta {display:none;}

/* IE6 FIXES */
.ie6 #content {
	width:60% !important;
}

.ie6 #wrapper #widgets {
	width: 20%;
	margin:0 !important;
	padding:0 !important;
	position:relative;
}

.ie6 #wrapper #widgets .widget-wrapper {
	margin:0 !important;
	width:100% !important;
	right:0px;
}

table.noborder,
table.noborder tbody,
table.noborder thead,
table.noborder tfoot,
table.noborder tr,
table.noborder th,
table.noborder td {
	border:none !important;
}

table.nopadding,
table.nopadding tbody,
table.nopadding thead,
table.nopadding tfoot,
table.nopadding tr,
table.nopadding th,
table.nopadding td {
	padding:0 !important;
}

table.noborderpadding,
table.noborderpadding tbody,
table.noborderpadding thead,
table.noborderpadding tfoot,
table.noborderpadding tr,
table.noborderpadding th,
table.noborderpadding td,
table.nopaddingborder,
table.nopaddingborder tbody,
table.nopaddingborder thead,
table.nopaddingborder tfoot,
table.nopaddingborder tr,
table.nopaddingborder th,
table.nopaddingborder td {
	padding:0 !important;
	border:none !important;
}

td[valign="top"] {
   vertical-align: top !important;
}

td[valign="bottom"] {
   vertical-align: bottom !important;
}

td[valign="middle"] {
   vertical-align: middle !important;
}


table.noborder img.alignright,
table.nopadding img.alignright,
table.nopaddingborder img.alignright,
table.noborderpadding img.alignright,
table.noborder img.alignleft,
table.nopadding img.alignleft,
table.nopaddingborder img.alignleft,
table.noborderpadding img.alignleft {
	margin:0 !important;
	padding:0 !important;
}
/* START HERE */

/* =Responsive Design
    Media Queries
-------------------------------------------------------------- */

@media screen and (max-height: 700px) {
	
	div#access {
		position: absolute;
		height: 45px;
		overflow: visible;
		top: 0;
		width: 100%;
	}

	div.cvc-menu {
		width: 1100px;
		margin-left: auto;
		margin-right: auto;
	}

	ul.menu {
		position: relative !important;
	}

}

@media screen and (max-width: 1080px) {

    body {
    }

	#cvc_left_sidebar {
		width: 22%;
	}
	
	#footerbar,
	#cvc_right_content {
		width: 78%;
	}
}
@media screen and (max-width: 980px) {

    body {
	    width: 90%;
	    margin:auto;
    }
		
	#cvc_left_sidebar {
		display: none;
	}

	#footerbar,
	#cvc_right_content {
		width: 100%;
		float: none;
	}

	#access {
		max-width:90%;
		margin-left:0;
		margin-right:0;
	}
	
	#access ul.main-nav {
		max-width:90%;
		margin-left:0;
		margin-right:0;
	}

    .grid, 
	.grid-right {
	    float:none;
    }
	
	#featured-image .fluid-width-video-wrapper {
	    margin:20px 0 0 0;
    }
	
	.home #widgets {
		margin-top:40px;
	}
	
	#wrapper #widgets,
	.page-template-landing-page-wvup-php #wrapper #widgets {
		margin-top: 40px;
		float:left;
	}
	
	 #wrapper #content,
	 .page-template-landing-page-wvup-php #wrapper #content {
		width: auto;
	}

}

@media screen and (max-width: 650px) {

    body {
    }

	#cvc_left_sidebar {
		display: none;
	}

	#footerbar,
	#cvc_right_content {
		width: 100%;
		float: none;
	}

    #logo {
	    float:none;
	    text-align:center;
    }

    .grid, 
	.grid-right {
	    float:none;
    }

	#featured-image .fluid-width-video-wrapper {
	    margin:20px 0 0 0;
    }
	
    .js .menu,
	.js .sub-header-menu {
		display:none;
	}
	
	.top-menu, 
	.footer-menu li {
	    float:none;
	    text-align:center;
    }
	
	#access {
		display:none !important;
	}
	
	#access-fallback,
	.js #access-fallback {
		display:block !important;
		width:100%;
	}
	
	#access ul.main-nav,.tinyhide {
	    display:none;
	}

	.tinynav { 
	    display:block;
		margin:0;
		width:100%;
	}
	
	.tinynav {
		-moz-appearance:none;
		-webkit-appearance:none;
		appearance:none;
		background: #111683 url(images/bg-select.png) no-repeat right  !important;
		border:1px solid #111683;
		overflow:hidden;
		padding:0.5em 1em 0.5em 0.75em;
	}
	
	.ie7 .tinynav,
	.ie8 .tinynav {
		padding-right:10px;
	}
	
	.ie9 .tinynav  {
		padding-right:8px;
	}
	
    #footer {
	    text-align:center;
    }

    #footer .social-icons {
	    text-align:center;
    }
    
	iframe[src*="youtube"] {
		width:100%;
	}
	
}

@media screen and (max-width: 480px) {

    body {
	    width: 100%;
	    margin:auto;
    }
		

	#cvc_left_sidebar {
		display: none;
	}

	#footerbar,
	#cvc_right_content {
		width: 100%;
		float: none;
	}

    #logo {
	    float:none;
		position:relative;
	    text-align:center;
    }

    .grid, 
	.grid-right {
	    float:none;
    }
	
	#featured-image .fluid-width-video-wrapper {
	    margin:20px 0 0 0;
	}
	
	.featured-title {
	    font-size:40px;
	    padding:40px 20px 0 20px
    }
	
    .menu ul, 
	.menu li, 
	.top-menu, 
	.footer-menu li, 
	.sub-header-menu li {
	    float:none;
	    text-align:center;
    }
	
    #footer {
	    text-align:center;
    }

    #footer .social-icons {
	    text-align:center;
    }
	#access {
		display:none !important;
	}
	
	#access-fallback,
	.js #access-fallback {
		display:block !important;
		width:100%;
	}
		
	#access ul.main-nav,.tinyhide {
	    display:none;
	}

	.tinynav { 
	    display:block;
		margin:0;
		width:100%;
	}
	
	#wrapper #widgets,
	.page-template-landing-page-wvup-php #wrapper #widgets {
		width:85%;
	}
	

	
@media screen and (max-width: 320px) {
	
	#cvc_left_sidebar {
		display: none;
	}

	#footerbar,
	#cvc_right_content {
		width: 100%;
		float: none;
	}

	#featured p {
	    font-size:12px;
		line-height:1.2em;
    }

    .featured-title {
	    font-size:35px;
    }
	
	.featured-subtitle {
		font-size:15px;
	}

    .call-to-action a.button {
	    font-size:14px;
	    padding:7px 17px;
    }
	#access {
		display:none !important;
	}
	
	#access-fallback,
	.js #access-fallback {
		display:block !important;
		width:100%;
	}
		
	#access ul.main-nav,.tinyhide {
	    display:none;
	}

	.tinynav { 
	    display:block;
		margin:0;
		width:100%;
	}
	
	
}

@media screen and (max-width: 240px) {
	
	#featured p {
	    font-size:11px;
		line-height:1.1em;
    }

    .featured-title {
	    font-size:20px;
    }
	
	.featured-subtitle {
		font-size:11px;
	}

    .call-to-action a.button {
	    font-size:12px;
	    padding:5px 15px;
    }
	#access {
		display:none !important;
	}
	
	#access-fallback,
	.js #access-fallback {
		display:block !important;
		width:100%;
	}
	
	#access ul.main-nav,.tinyhide {
	    display:none;
	}

	.tinynav { 
	    display:block;
		margin:0;
		width:100%;
	}
	
		.page-template-landing-page-wvup-php #wrapper #widgets {
		margin-top: 40px;
		float:left;
	}
	
}

