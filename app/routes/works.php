<?php
require_once 'app/layouts/page.php';

return function () {
  pageLayout(
    title: "Our Work",
    heading: "We've been busy.",
    description: "Come see some of our recent success stories.",
    renderChildren: function () {
?>

    <section class="diagonal" style="padding:10px 0;" id="learn-more">
      <p style="text-align:right; margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px;">
        <a href="#learn-more" style="color:#666">Go ahead, take a look &#8595;</a>
      </p>
    </section>

    <section class="diagonal alternate">
      <div class="container halves">
        <div>
          <ul class="image-list image-list-right">
            <li><a href="#connect-with-alan" onclick="handleRefClick(event, 'Alan Magan')"><img src="/img/bt-apmfoodworks.png" width="300" style="max-width:80%;" /></a></li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="text-align: center;"><a href="#connect-with-alan" onclick="handleRefClick(event, 'Alan Magan')"><img src="/img/bt-apmfoodworks.png" width="200" style="max-width:80%;" /></a></p>
          <h3 class="editable"><a href="#connect-with-alan" onclick="handleRefClick(event, 'Alan Magan')">APM Foodworks</a></h3>
          <p class="editable">"btek recommended tweaks to our blog posts and unifying our 3 brands into one e-commerce website to maximize SEO. We saw a 240% boost in Google rankings in 1 month!" - <a href="#connect-with-alan" onclick="handleRefClick(event, 'Alan Magan')">Alan Magan</a></p>
        </div>
      </div>
    </section>

    <section class="diagonal patterned">
      <div class="container halves">
        <div>
          <p class="hide-above-mobile" style="text-align: center;"><a href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')"><img src="/img/bt-saraanani.png" width="200" style="max-width:80%;" /></a></p>
          <h3 class="editable"><a href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')">Sara Anani, Inc.</a></h3>
          <p class="editable">"There aren't many dev shops out there that could deliver my vision -- btek is truly skilled at website development." - <a href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')">Sara Anani</a></p>
        </div>
        <div>
          <ul class="image-list">
            <li><a href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')"><img src="/img/bt-saraanani.png" width="300" style="max-width:80%;" /></a></li>
          </ul>
        </div>
      </div>
    </section>

    <section class="diagonal alternate">
      <div class="container halves">
        <div>
          <ul class="image-list image-list-right">
            <li><a href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')"><img src="/img/bt-hirely.png" width="300" style="max-width:80%;" /></a></li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="text-align: center;"><a href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')"><img src="/img/bt-hirely.png" width="200" style="max-width:80%;" /></a></p>
          <h3 class="editable"><a href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')">Hirely</a></h3>
          <p class="editable">"We had btek get our cloud application project back on track after a messy loss with our former leader. Can't recommend enough!" - <a href="mailto:chris.rosenbaum@gmail.com?subject=Would you recommend btek?">Chris</a></p>
        </div>
      </div>
    </section>

    <section class="diagonal patterned">
      <div class="container halves">
        <div>
          <p class="hide-above-mobile" style="text-align: center;"><a href="#connect-with-productmaven" onclick="handleRefClick(event, 'Ryan Troll')"><img src="/img/bt-product-maven.png" width="200" style="max-width:80%;" /></a></p>
          <h3 class="editable"><a href="#connect-with-productmaven" onclick="handleRefClick(event, 'Ryan Troll')">Product Maven</a></h3>
          <p class="editable">"btek acts as our in-house website tech expert, advising us on our hardest web projects." - <a href="#connect-with-productmaven" onclick="handleRefClick(event, 'Ryan Troll')">Ryan</a></p>
        </div>
        <div>
          <ul class="image-list">
            <li><a href="#connect-with-productmaven" onclick="handleRefClick(event, 'Ryan Troll')"><img src="/img/bt-product-maven.png" width="300" style="max-width:80%;" /></a></li>
          </ul>
        </div>
      </div>
    </section>

    <section class="diagonal alternate">
      <div class="container halves">
        <div>
          <ul class="image-list image-list-right">
            <li><a href="https://seasonstherapy.com" target="_blank"><img src="/img/bt-seasons-therapy.png" width="300" style="max-width:80%;" /></a></li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="text-align: center;"><a href="https://www.seasonstherapy.com" target="_blank"><img src="/img/bt-seasons-therapy.png" width="200" style="max-width:80%;" /></a></p>
          <h3 class="editable"><a href="https://www.seasonstherapy.com" target="_blank">Seasons Therapy</a></h3>
          <p class="editable">"I had btek do my website 4 years ago and couldn't be happier. Best of all, the design was so on-point that it's still relevant!" - <a href="mailto:ruthdom@comcast.net?subject=Would you recommend btek?">Ruth</a></p>
        </div>
      </div>
    </section>

    <section class="partners share diagonal">
      <div style="text-align:center; padding:0 20px;">
        <h3>Our Partner Friends</h3>
        <table class="hide-on-mobile">
          <tr>
            <td>
              <a href="http://www.5pointsdc.com" target="_blank">
                <img src="/img/5points.png" width="100%" />
              </a>
            </td>
            <td>
              <a href="http://productmaven.co" target="_blank">
                <img src="/img/product-maven-logo.png" width="100%" />
              </a>
            </td>
            <td>
              <a href="http://sbworksdc.org" target="_blank">
                <img src="/img/sbworks.png" width="100%" />
              </a>
            </td>
          </tr>
          <tr>
            <td>
              Friendly Co-working Space in Northeast DC
            </td>
            <td>
              Expert Cloud Software Product Managers
            </td>
            <td>
              The one-stop-shop of small business assistance in DC
            </td>
          </tr>
        </table>

        <div class="hide-above-mobile">
          <p>
            <a href="http://www.5pointsdc.com" target="_blank"><img src="/img/5points.png" width="60%" /></a><br>
            Friendly Co-working Space in Northeast DC
          </p>
          <br>
          <p>
            <a href="http://productmaven.co" target="_blank"><img src="/img/product-maven-logo.png" width="60%" /></a><br>
            Expert Cloud Software Product Managers
          </p>
          <br>
          <p>
            <a href="http://sbworksdc.org" target="_blank"><img src="/img/sbworks.png" width="60%" /></a><br>
            The one-stop-shop of small business assistance in DC
          </p>
        </div>
      </div>
    </section>

    <section class="partners share diagonal alternate">
      <div style="text-align:center; padding:0 20px;">
        <h3>Online Reviews</h3>
        <table class="hide-on-mobile">
          <tr>
            <td>
              <a target="_blank" href="https://clutch.co/profile/benevolent-tech#reviews" target="_blank">
                <img src="/img/clutch.png" width="100%" />
              </a>
            </td>
            <td>
              <a target="_blank" href="https://maps.google.com/?cid=5725988273627858551" target="_blank">
                <img style="background:white; padding:15px; width:191px; height:auto;" src="/img/google.png" width="100%" />
              </a>
            </td>
            <td>
              <a target="_blank" href="https://www.yelp.com/biz/benevolent-tech-washington" target="_blank">
                <img src="/img/yelp.png" width="100%" />
              </a>
            </td>
          </tr>
        </table>

        <div class="hide-above-mobile">
          <p>
            <a target="_blank" href="https://clutch.co/profile/benevolent-tech#reviews" target="_blank">
              <img src="/img/clutch.png" width="60%" />
            </a>
          </p>
          <br>
          <p>
            <a target="_blank" href="https://maps.google.com/?cid=5725988273627858551" target="_blank">
              <img style="background:white; padding:15px; width:191px; height:auto;" src="/img/google.png" width="60%" />
            </a>
          </p>
          <br>
          <p>
            <a target="_blank" href="https://www.yelp.com/biz/benevolent-tech-washington" target="_blank">
              <img src="/img/yelp.png" width="60%" />
            </a>
          </p>
        </div>
      </div>
    </section>

    <!--<section class="diagonal patterned">-->
    <!--<div class="container">-->
    <!--<ul class="image-grid portfolio">-->
    <!--{% for client in clients %}-->
    <!--<li data-bg-img="url({% client.imagePath %})">-->
    <!--&lt;!&ndash; <a href="{{ client.url }}"> &ndash;&gt;-->
    <!--<a target="_blank" href="{{ client.externalUrl }}">-->
    <!--<div class="details">-->
    <!--<div class="name">{{ client.name }}</div>-->
    <!--<div class="position">{{ client.subtitle }}</div>-->
    <!--</div>-->
    <!--</a>-->
    <!--</li>-->
    <!--{% endfor %}-->
    <!--<li class="filler"></li>-->
    <!--&lt;!&ndash; <li class="filler"></li> &ndash;&gt;-->
    <!--</ul>-->
    <!--</div>-->
    <!--</section>-->

<?php
    }
  );
};