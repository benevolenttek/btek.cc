<?php
function share() {
  ?>
  <ul class="blurb-share">
    <!-- facebook -->
    <li><a href="https://www.facebook.com/sharer/sharer.?> ?u={{ site.url }}{{ page.url }}" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">{% include social-icon.html icon="Facebook" %}</a></li>
    <!-- twitter -->
    <li><a href="https://twitter.com/share?text={{ page.title | url_encode }}&amp;url={{ site.url }}{{ page.url }}" onclick="window.open(this.href, 'twitter-share', 'width=550,height=275');return false;">{% include social-icon.html icon="Twitter" %}</a></li>
    <!-- google plus -->
    <!--<li><a href="https://plus.google.com/share?url={{ site.url }}{{ page.url }}" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">{% include social-icon.html icon="Google Plus" %}</a></li>-->
    <!-- digg -->
    <!--<li><a href="http://www.digg.com/submit?url={{ site.url }}{{ page.url }}" onclick="window.open(this.href, 'digg-share', 'width=490,height=530');return false;"><i class="fa fa-digg"></i></a></li>-->
    <!-- reddit -->
    <!--<li><a href="http://reddit.com/submit?url={{ site.url }}{{ page.url }}&title={{ page.title | url_encode }}" onclick="window.open(this.href, 'reddit-share', 'width=490,height=530');return false;"><i class="fa fa-reddit"></i></a></li>-->
    <!-- linkedin -->
    <li><a href="http://www.linkedin.com/shareArticle?mini=true&url={{ site.url }}{{ page.url }}" onclick="window.open(this.href, 'linkedin-share', 'width=490,height=530');return false;">{% include social-icon.html icon="LinkedIn" %}</a></li>
    <!-- pinterest -->
    <!--<li><a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">{% include social-icon.html icon="Pinterest" %}</a></li>-->
    <!-- StumbleUpon-->
    <!--<li><a href="http://www.stumbleupon.com/submit?url={{ site.url }}{{ page.url }}&title={{ page.title | url_encode }}" onclick="window.open(this.href, 'stumbleupon-share', 'width=490,height=530');return false;"><i class="fa fa-stumbleupon"></i></a></li>-->
    <!-- Email -->
    <!--<li><a href="mailto:?subject=From btek.cc: {{ page.title }}&body={{ page.title }}%0A{{ site.url }}{{ page.url }}"></a></li>-->
    <!-- RSS -->
    <!--<li><a id="header-rss-icon-a" target="_blank" href="{{ site.url}}/feed.xml">{% include social-icon.html icon="RSS" %}</a></li>-->
  </ul>
  <?php
}