/*
# ------------------ BEGIN LICENSE BLOCK ------------------
#
# This file is part of PluXml : http://www.pluxml.org
#
# Package:		theme.css
# Copyright (c) 2016 PluXml
# Authors		Jos
# Licensed under the GPL license.
# See http://www.gnu.org/licenses/gpl.html
#
# ------------------- END LICENSE BLOCK -------------------
*/

<?php

header("Content-type: text/css");

$color_primary_light  = "#e1bee7";
$color_primary_medium = "#8e24aa";
$color_primary_dark   = "#4a148c";

$color_accent_light  = "#ffff8d";
$color_accent_medium = "#00bcd4";
$color_accent_dark   = "#ffd600";

$color_secondary_light    = "#f2f2f2";
$color_secondary_medium   = "#cccccc";
$color_secondary_dark     = "#1a1a1a";
?>

/******************************************************************************
* Basic HTML elements
*******************************************************************************/
html {
  font-size:110%;
  scroll-behavior: smooth;
}
body {
  color: <?php echo $color_secondary_dark ?>;
  background: <?php echo $color_secondary_light ?>;
}

a {
  color: <?php echo $color_primary_dark ?>;
  text-decoration-style: dotted;
}

.anchor {
  display: block;
  position: relative;
  top: -110px;
  visibility: hidden;
}

h1,h2,h3 {
  color: <?php echo $color_secondary_dark ?>;
  margin: 0.5em 0;
  font-weight: bold;
}

h2 {
  font-size: 1.1rem;
  padding-bottom: 0.5em;
  border-bottom: 6px solid <?php echo $color_secondary_dark ?>;
  text-transform: uppercase;
}

h2.h5 {
  padding-bottom: 0.1em;
  border: none;
  text-transform: none;
}

h3 {
  font-size: 1.3rem;
}

h4 {
  font-size: 0.9rem;
  font-weight: bold;
  margin: 1em 0;
  padding: 0.5em;
  color: <?php echo $color_secondary_light ?>;
  background: <?php echo $color_primary_dark ?>;
}

input.blue[type=submit]{
  background-color: <?php echo $color_accent_medium ?>;
  color: <?php echo $color_secondary_light ?>;
}
input.blue[type=submit]:hover{
  background-color: <?php echo $color_primary_dark ?>;
}


blockquote {
  border-left: solid 4px;
  border-color: <?php echo $color_secondary_medium ?>;
  font-style: italic;
  margin: 0 1em 2em 0;
  padding: 0.5em 0 0.5em 2em;
}

hr {
  border: 0;
  height: 1px;
  background: <?php echo $color_primary_dark ?>;
}

small {
  opacity: 0.7;
}

section {
  clear: both;
  padding: 0 1em;
}

.important {
  font-size: 105%;
  padding: 0.5em;
  background-color: <?php echo $color_secondary_light ?>;
  border: solid 3px <?php echo $color_secondary_medium ?>;
  border-radius: 4px;
  border-color: <?php echo $color_primary_dark ?>;
  box-shadow: 2px 2px 1px <?php echo $color_secondary_medium ?>;
  display: inline-block;
}

.important::before {
  font-family: FontAwesome;
  padding: 0.5em;
  content: '\f071';
}


/******************************************************************************
* Banner
*******************************************************************************/

/*
.banner {
background-image: url('../img/banner.jpg');
height: 100%;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
*/
/******************************************************************************
* Lists
*******************************************************************************/
.horizontal {
  list-style: none;
  margin: 1em auto;
}

.horizontal li {
  display: inline;
  padding: 0 1em;
}

ul.icons {
  list-style: none;
  padding: 0.5em;
  border: solid 3px <?php echo $color_secondary_medium ?>;
  border-radius: 4px;
  border-color: <?php echo $color_primary_dark ?>;
}

ul.icons li {
  padding: 0.5em 0;
}

/******************************************************************************
Browser Upgrade Prompt
*******************************************************************************/

.browserupgrade {
  margin: 0.2em;
  background: <?php echo $color_secondary_light ?>;
  color: <?php echo $color_secondary_dark ?>;
  padding: 0.5em;
  position: fixed;
  bottom: 0;
  right: 0;
  opacity: 0.8;
  border-radius: 1em;
  border-style: solid;
  border-width: 0.2em;
  border-color: <?php echo $color_primary_medium ?>;
}

/******************************************************************************
Containers
*******************************************************************************/

.container {
  margin: 10px auto 0 auto;
  padding: 0;
  max-width: none;
}

@media (min-width: 768px) {
  .container {
    padding: 0 1em;
  }
}

.wrapper {
  margin: 0.1em auto;
  width: 97%;
}

.margin{
  margin: 3em;
}

.iframecontainer {
  width: 80%;
  height: 0;
  padding-bottom: 45%;
  position: relative;
  overflow: hidden;
  margin-left: auto;
  margin-right: auto;
}

.iframecontainer iframe, .videocontainer embed, .videocontainer object {
  width: 100%!important;
  height: 100%!important;
  position: absolute;
  top: 0;
  left: 0;
}

.align-left {
  text-align: left;
}

.align-center {
  text-align: center;
  width: 100%;
  margin: 0 auto;
}

.align-right {
  text-align: right;
}

/******************************************************************************
Top header with navigation
*******************************************************************************/

.header {
  background: <?php echo $color_primary_dark ?>;
  color: <?php echo $color_secondary_light ?>;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  opacity: 0.9;
  font-weight: bold;
  padding: 0;
  margin: 0;
  z-index: 100 !important;
}

.header h1{
  padding-top: 0.6em;
  font-size: 90%;
  font-weight: bold;
}

.header h2{
  font-size: 80%;
  display: none; /* only display for large screens */
}

.header a, .h5 {
  color: <?php echo $color_secondary_light ?>;
  text-decoration: none;
}

.header a:hover {
  text-decoration: underline;
}

.responsive-menu label{
  font-size: 80%;
  padding: 0.2em;
}
.menu.expanded li {
  text-align: left;
}

.menu.expanded li.active a {
  border-style: none;
  border-width: 0;
  border-color: <?php echo $color_accent_medium ?>;
  background-color: <?php echo $color_primary_dark ?>;
}

.menu.expanded li.active:hover {
  background-color: <?php echo $color_primary_dark ?>;
  color: #fff;
}

.menu.expanded li.active{
  background-color: <?php echo $color_primary_dark ?>;
  border-style: solid;
  border-width: 0 0 4px 0 ;
  border-color: <?php echo $color_accent_medium ?>;
  color: <?php echo $color_secondary_light ?>;
}

.menu.expanded li:hover {
  background-color: <?php echo $color_primary_dark ?>;
  border-style: solid;
  border-width: 0 0 4px 0 ;
  border-color: <?php echo $color_accent_light ?>;
  color: <?php echo $color_secondary_light ?>;
}


/* medium screen size */
@media (min-width: 768px) {

  .header h1 {
    font-size: 85%
  }

  .menu li {
    font-size: 0.8rem;
    padding: 0;
  }
}

/* large screen size */
@media (min-width: 1024px) {

  .header {
    padding: 0 1em;
    margin-bottom: 2em;
  }

  .header h1 {
    padding-top: 0.3em;
  }

  .header h2 {
    font-size: 0.7rem;
    display: inline;
  }

  .header ul {
    margin: 0;
    padding-right: 0.8em;
  }

  .menu li {
    font-size: 0.9rem;
    padding: 0;
  }
}


/******************************************************************************
Icons
*******************************************************************************/

.icon {
  text-decoration: none;
  border-bottom: none;
  position: relative;
}

.icon.left{
  float: left;
  padding-right: 1em;
}

.icon.right{
  float: right;
}

.icon:before {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-family: FontAwesome;
  padding: 0.5em;
}

.icon > .label {
  display: none;
}


/******************************************************************************
Buttons
*******************************************************************************/
ul.actions  {
  padding: 0;
  margin: 0 auto;
  text-align: center;
}

.actions li {
  list-style: none;
}

@media (min-width: 1024px) {

  .actions li {
    display: inline;
    padding: 0.5em;
  }

  .actions a {
    display:inline-block;
  }
}

.button {
  background-color: <?php echo $color_secondary_light ?>;
  border-radius: 0.2em;
  border: solid 1px <?php echo $color_secondary_medium ?>;
  color: <?php echo $color_secondary_dark ?>;
  cursor: pointer;
  display: inline-block;
  font-size: 0.7em;
  font-weight: 700;
  height: auto;
  letter-spacing: 0.05em;
  line-height: 3.5em;
  overflow: hidden;
  padding: 0 0.5em;
  text-align: center;
  text-decoration: none;
  text-overflow: ellipsis;
  text-transform: uppercase;
  white-space: nowrap;
  box-shadow: 1px 1px 1px <?php echo $color_secondary_medium ?>;
}

.button:hover {
  background-color: <?php echo $color_secondary_light ?>;
  border-color: <?php echo $color_primary_dark ?>;
  color: <?php echo $color_primary_dark ?>;
  box-shadow: 2px 2px 1px <?php echo $color_secondary_medium ?>;
}

.button a {
  color: <?php echo $color_secondary_dark ?>;
}

.button.fit {
  display: block;
  margin: 0 0 1em 0;
  width: 100%;
}

.button.special{
  background: <?php echo $color_accent_medium ?>;
  color: <?php echo $color_secondary_light ?>;
}

.button.special:hover{
  background: <?php echo $color_primary_dark ?>;
}

.button.fixed{
  width: 100%;
  max-width: 300px;
}

@media (min-width: 1024px) {
  .button {
    font-size: 0.8em;
    font-weight: 700;
    height: auto;
    letter-spacing: 0.1em;
    line-height: 3.5em;
    padding: 0 2em;
  }

  .button.fixed{
    width: 260px;
  }
}

select {
  background-color: <?php echo $color_secondary_light ?>;
  width: 350px;
  padding: 5px;
  border-style: solid;
  border-width: 1px;
  border-color: <?php echo $color_secondary_medium ?>;
  box-shadow: 1px 1px 1px <?php echo $color_secondary_medium ?>;
  border-radius: 0.1em;
}

select:focus {
  border-color: <?php echo $color_primary_medium ?>;
}

pre {
  padding: 0.2em;
  width: 350px;
  padding: 5px;
  border-style: solid;
  border-width: 1px;
  border-color: <?php echo $color_secondary_medium ?>;
  box-shadow: 1px 1px 1px <?php echo $color_secondary_medium ?>;
}

.social {
  margin: 0em;
}

.social a{
  color: <?php echo $color_secondary_dark ?>;
}

.social a:hover{
  color: <?php echo $color_primary_medium ?>;
  text-decoration: none;
}

ul.social {
  text-align: center;
  margin: 0 auto;
  padding: 0;
}

ul.social li {
  padding: 0;
  display: inline;
  list-style: none;
}


/*******************************************************************************
Navigation
*******************************************************************************/
section.banner h1 {
  display: none;
}

section.dark, nav.dark{
  background-color: <?php echo $color_secondary_dark ?>;;
  color: <?php echo $color_secondary_light ?>;
  font-weight: bold;
  border-style: solid;
  border-width: 0.2em 0;
  border-color: <?php echo $color_accent_medium ?>;
  margin: 1em auto;
  padding: 0;
  width: 100%;
  background-image: url('../img/mountains-small.png');
  background-repeat:   no-repeat;
  background-position: bottom right;
  min-height: 100px;
}

section.light, nav.light {
  color: <?php echo $color_secondary_dark ?>;
  border-style: solid;
  border-width: 0.2em 0 0 0;
  border-color: <?php echo $color_accent_medium ?>;
  margin: 1em auto;
  padding: 0;
  background: <?php echo $color_secondary_light ?>;
  width: 100%;
  min-height: 100px;
  display: inline-block;
}

section.light .article.single {
  position: relative;
  text-align: center;
}

section.light .article.single  img{
  width: 500px;
  height: 250px;
  border-radius: 8px;
}

section.light .article.single .title {
  position: absolute;
  margin: 0 auto;
  width: 100%;
  color: <?php echo $color_secondary_light ?>;
  background: <?php echo $color_primary_dark ?>;
  border-radius: 0 0 4px 4px;
  opacity: 0.8;
  padding: 0.5em;
  color: white;
  bottom: 0;
  left: 0;
  font-size: 80%;
}

section.light .article.single h1 {
  font-size: 1.25rem;
  color: <?php echo $color_secondary_light ?>;
  margin: 0em;
  text-align: left;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

section.light .article.single p {
  text-align: left;
  color: white;
  margin: 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

section.light .article.single a {
  color: <?php echo $color_secondary_light ?>;
  border-style: solid;
  border-width: 0.15em;
  border-radius: 2px;
  padding: 0.1em 0.2em;
  margin: 0.2em;
  text-decoration: none;
  float: right;
}

section.light .article.single a:hover {
  color: <?php echo $color_primary_dark ?>;
  background: <?php echo $color_secondary_light ?>;
  border-color: <?php echo $color_secondary_light ?>;
}

nav.top h1{
  display: none;
}

nav .button.more{
  font-size: 70%;
  width: 160px;
}

nav.dark a {
  color: <?php echo $color_secondary_light ?>;
}

nav.dark a:hover {
  text-decoration: none;
  border-color: <?php echo $color_accent_light ?>;
}

nav > h1, section.light > h1, section.dark > h1 {
  display: table-cell;
  padding: 0.5em;
  font-size: 110%;
  color: <?php echo $color_secondary_light ?>;
  background-color: <?php echo $color_accent_medium ?>;
  text-align: left;
}

nav ul{
  margin-top: 1em;
  font-size: 90%;
}

nav ul li {
  list-style: none;
}

nav.dark li a:hover{
  border-style: solid;
  border-width: 0 0 0.15em 0;
  color: <?php echo $color_secondary_light ?>;
}

nav li .icon:before{
  padding: 0.5em;
  font-weight: lighter;
}

@media (min-width: 768px) {

  nav ul li{
    display: inline;
    padding: 0 2em;
  }

}

/*******************************************************************************
Images
*******************************************************************************/

.image {
  display: inline-block;
  position: relative;
}

.image img {
  display: block;
  width: 100%;
  overflow: hidden;
  position: relative;
}

.image.left {
  float: left;
  padding:  0 1em 0.5em 0;
  top: 0.25em;
}

.image.right {
  float: right;
  padding: 0 0 1em 1.5em;
  top: 0.25em;
}

.image.background img {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.image.center-and-crop img {
  width: 400px;
  height: 200px;
  max-width:100%;
  max-height: 100%;
  object-fit: cover;
}

/*******************************************************************************
Members
*******************************************************************************/

.member {
  padding: 0.15em;
  width: 220px;
  height: 200px;
  text-align: center;
  min-width: 220px;
}


.member img {
  width: 120px;
  height: 120px;
  border-radius: 5%;
}

.member a {
  color: <?php echo $color_secondary_dark ?>;
}

.member a:hover {
  text-decoration: none;
  opacity: 0.6;
}

.member h5 {
  text-align: center;
  padding: 0.15em;

}

.member h6 {
  opacity: 0.7;
  margin: 0;
  text-align: center;
  padding: 0.15em;

}


.contact {
  margin: 0.5em;
  padding: 0.8em;
  background: <?php echo $color_secondary_light ?>;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 2px 8px 0 rgba(0, 0, 0, 0.19);
  border-radius: 10px;
  width: 400px;
  height: 100px;
}

.contact:hover {
  box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 12px 0 rgba(0, 0, 0, 0.19);
}

.contact .mail{
  display: inline-block;
  text-align: center;
  padding: 0.5em;
}

.contact .mail:before {
  font-family: FontAwesome;
  padding: 0.5em;
  content: '\f0e0';
}

.contact img {
  width: 70px;
  height: 70px;
  float: left;
}

.contact h5 {
  text-align: center;
}

.contact h6 {
  opacity: 0.7;
  margin: 0;
  text-align: center;
}


.member-full {
  width: 98%;
  margin: 0 auto;
  color: <?php echo $color_secondary_light ?>;
  background: <?php echo $color_secondary_dark ?>;
  padding: 0.2em;
  border-radius: 0.5em;
  min-height: 400px;
  font-size: 90%;
}

.member-full h1 {
  color: white;
  font-weight: bold;
  margin-bottom: 1em;
}

.member-full img {
  display: block;
  margin: 1em auto;
  border-radius: 5px;
}

.member-full ul {
  overflow: hidden;
  padding: 0 0.5em;
  min-width: 250px;
}

.member-full ul li {
  padding: 0.4em 0;
  list-style: none;
}

.member-full {
  padding-bottom: 5em;
  background-image: url('../img/mountains-small.png');
  background-repeat:   no-repeat;
  background-position: bottom right;
  border-style: solid;
  border-width: 0.2em;
  border-color: #00bcd4;
}

.member-full li:before {
  content: "\2714";
  padding-right: 0.5em;
}

@media (min-width: 768px) {
  .member-full {
    font-size: 100%;
    padding: 1em;
  }

  .member-full img {
    float: left;
    margin: 2em;
  }

  .member-full ul {
    margin: 2em;
  }

  .member-full ul li {
    padding: 0.6em 0;
    list-style: none;
  }

  .member-full::before {
    clear: both;
    float: right;
    content: url('../img/dve.png');
  }
}

@media (min-width: 1024px) {
  .member-full {
    width: 80%;
    margin: 3em auto;
    padding: 1em;
    background-image: url('../img/mountains-large.png');
  }
}

/*******************************************************************************
Articles
*******************************************************************************/
header.home {
  display: none;
}

.article.single{
  padding: 0.3em 0.6em;
  margin: 1em 0;
  border-radius: 4px;
  background: white;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 2px 8px 0 rgba(0, 0, 0, 0.19);
  min-height: 280px;
}

.article.comments {
  font-size: 90%;
  padding: 0.3em 0.6em;
  margin: 1em 0;
  border-radius: 4px;
  background: white;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 2px 8px 0 rgba(0, 0, 0, 0.19);
}

.article.comments h2{
  font-size: 1.4rem;
}

section.preview a:hover{
  opacity: 0.9;
}

section.preview  p {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  padding: 0;
  margin: 0;
}
.grid {
  margin: 0 auto;
}

.grid .item {
  margin-top: 1em;
}

.preview .image .date {
  font-size: 60%;
  padding: 4px;
  background: <?php echo $color_secondary_dark ?>;
  color: <?php echo $color_secondary_light ?>;
  opacity: 0.7;
  position: absolute;
  bottom: 4px;
  right: 4px;
}

.preview .image .category {
  font-size: 70%;
  font-weight: bold;
  padding: 4px;
  background: <?php echo $color_accent_medium ?>;
  color: <?php echo $color_secondary_light ?>;
  position: absolute;
  opacity: 0.9;
  top: 4px;
  left: 4px;
}

.preview .image .category a {
  color: <?php echo $color_secondary_light ?>;
}

.preview h3,h5 {
  padding: 0;
  margin: 0;
}

.preview h3 {
  font-size: 100%;
  line-height: normal;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.article .content {
  padding-top: 1em;
}



/* ---------- Main ---------- */

main.main {
  background-color: #fff;
  margin: 46px auto 1em auto;
  padding-bottom: 1em;
  width: 100%;
}
.repertory {
  margin-top: 1.5rem;
}
.pagination a {
  background-color: #258fd6;
  color: #fff;
  padding: .525rem .7rem;
}
.pagination a:hover {
  background-color: #3a6c96;
  color: #fff;
  text-decoration: none;
}
.pagination span:first-letter,
.pagination a:first-letter {
  text-transform: uppercase;
}
.p_first,
.p_prev,
.p_current,
.p_next,
.p_last {
  display: inline-block;
}

/* ---------- Article ---------- */

header.main {
  background: <?php echo $color_secondary_light ?>;
  width: 100%;
  padding: 1em;
}

.article header.main h1 {
  font-size: 2rem;
  color: <?php echo $color_secondary_dark ?>;
  text-align: left;
}

.article header h1 {
  display: block;
  font-size: 1.4rem;
  font-weight: bold;
}

.article header h1 a {
  color: #444;
}
.article header h1 a:hover {
  color: #258fd6;
  text-decoration: none;
}
.article img.art_thumbnail {
  padding: 4px;
}

.pagination {
  margin-bottom: 4rem;
}
.article.static {
  margin-bottom: 0;
}

/* ---------- Comment ---------- */

.comment {
  background-image: url('../img/user.png');
  background-repeat: no-repeat;
  margin-bottom: 2rem;
  padding-left: 4rem;
}
.comment blockquote {
  margin: 0;
}
.type-admin {
  background-color: #F0F8FF;
  padding: 2px 5px;
}
.nbcom {
  opacity: 1;
  background-color: <?php echo $color_accent_medium ?>;
  color: #fff;
  padding: .05rem .4rem;
}
.nbcom:hover {
  background-color: <?php echo $color_primary_dark ?>;
  color: #fff;
  text-decoration: none;
}
.level-0 {
  margin-left: 0;
}
.level-1 {
  margin-left: 50px;
}
.level-2 {
  margin-left: 100px;
}
.level-3 {
  margin-left: 150px;
}
.level-4 {
  margin-left: 200px;
}
.level-5,
.level-max {
  margin-left: 250px;
}
#id_answer {
  margin-bottom: 10px;
  padding:15px;
  border:1px solid #eee;
  width:100%;
  background:#fafafa;
  display:none;
}
.capcha-letter,
.capcha-word {
  font-weight: bold;
}
.capcha-word {
  background-color: #ccc;
  letter-spacing: 0.3em;
  padding: .525rem .7rem;
}

/* ---------- Aside ---------- */
.aside {
  font-size: 95%;
  padding-left: 2rem;
  background: <?php echo $color_secondary_light ?>; /* For browsers that do not support gradients */
  background: linear-gradient(<?php echo $color_secondary_light ?>, white); /* Standard syntax */
}
@media (max-width: 768px) {
  .aside {
    margin-top: 2rem;
    padding-left: 1rem;
  }
}
.aside h3 {
  font-size: 1rem;
  font-weight: bold;
  margin-top: 2rem;
  text-transform: uppercase;
}
.aside ul {
  margin: 0;
}
.aside li:first-letter {
  text-transform: uppercase;
}
.aside ul.tag-list {
  list-style-type: none;
  padding-left: 0;
}
.aside ul.tag-list li {
  display: inline-block;
  margin-right: 1rem;
}
.aside ul.tag-list li.tag-size-1 {
  font-size: 1rem;
}
.aside ul.tag-list li.tag-size-2 {
  font-size: 1.1rem;
}
.aside ul.tag-list li.tag-size-3 {
  font-size: 1.2rem;
}
.aside ul.tag-list li.tag-size-4 {
  font-size: 1.3rem;
}
.aside ul.tag-list li.tag-size-5 {
  font-size: 1.4rem;
}
.aside ul.tag-list li.tag-size-6 {
  font-size: 1.5rem;
}
.aside ul.tag-list li.tag-size-7 {
  font-size: 1.6rem;
}
.aside ul.tag-list li.tag-size-8 {
  font-size: 1.7rem;
}
.aside ul.tag-list li.tag-size-9 {
  font-size: 1.8rem
}
.aside ul.tag-list li.tag-size-10 {
  font-size: 1.9rem;
}
.aside ul.tag-list li.tag-size-max {
  font-size: 2rem;
}

/* ---------- Logos ---------- */

.logos{
  margin: 0.2em auto 2em auto;
  width: 100%;
}

.logos li{
  padding: 2em;
}

.logos a:hover{
  opacity: 0.5;
}


/* ---------- Footer ---------- */

.footer {
  border-top: 3px solid #444;
  padding: 2rem 0;
  text-align: center;
  color: <?php echo $color_secondary_light ?>;
  background: <?php echo $color_secondary_dark ?>;
  background-image: url('../img/mountains-large.png');
  background-repeat:   no-repeat;
  background-position: bottom right;
  border-style: solid;
  border-width: 0.2em 0;
  border-color: <?php echo $color_accent_medium ?>;
}

.footer a {
  color: <?php echo $color_secondary_light ?>;
}

.footer .credits {
  font-size: 80%;
  margin-top: 2em;
  padding: 0 1em 0 0 ;
}

.footer .credits li {
  padding:  1em;
}



footer.button.icon {
  font-size: 150%;
  padding: 0;
  margin: 0;
  width: 80px;
}

/******************************************************************************
Calendar
*******************************************************************************/
#calendar {
  width: 100%;
  margin: 0 auto;
  padding: 1em;
}

#calendar .fc-content {
  overflow: hidden;
  white-space: normal;
}

#calendar .fc-state-hover {
  background: <?php echo $color_secondary_medium ?>;
}

#calendar table tr:hover{
  background: inherit;
}

@media (min-width: 768px) {
  #calendar {
    width: 80%;
  }
}

@media (min-width: 1024px) {
  #calendar {
    width: 80%;
  }
}

/******************************************************************************
Newsletter
*******************************************************************************/
fieldset {
  border-color: white;
}

section.light fieldset {
  border-color: <?php echo $color_secondary_medium ?>;
}

section.newsletter {
  width: 225px;
  height: 280px;
  margin: 1em auto;
  background: <?php echo $color_secondary_medium ?>;
  display: block;
}

.newsletter form {
  padding: 1em;
  position: relative;
  margin: 0 auto;
}

.newsletter .button {
  width: 180px;
  top: 120px;
  left: 23px;
  position: absolute;
}

.newsletter input {
  font-size: 90%;
  height: auto;
  line-height: 2.5em;
  margin: 1em auto;
  width: 180px;
  top: 20px;
  left: 23px;
  position: absolute;
}

.newsletter a.more {
  font-size: 75%;
  margin: 0.5em 1em;
  position: absolute;
  top: 250px;
  white-space: nowrap;
}

.album {
  display: block;
  margin: 2em auto;
}

.album .Titre {
  font-size: 110%;
  font-weight: bold;
  margin: 1em auto;
  text-align: left;
}

.gallery-thumbnail .gallery-thumbnail-img img {
  width: 180px;
  height: 120px;
  max-width:100%;
  max-height: 100%;
  object-fit: cover;
}

.gallery-thumbnail .gallery-thumbnail-img {
  width: 180px;
  height: 120px;
}
