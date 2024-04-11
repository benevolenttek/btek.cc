<?php
require_once 'app/layouts/page.php';

return function () {
  pageLayout(
    title: "Membership Solutions",
    heading: "Get and Keep Subscribers",
    subtitle: "We build membership sites that reduce churn and grow recurring revenue.",
    description: "We build membership sites that reduce churn and grow recurring revenue.",
    renderChildren: function () {
?>

    <section class="diagonal" style="padding:10px 0;" id="learn-more">
      <p style="text-align:right; margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px;">
        <a href="#learn-more" style="color:#666">See how &#8595;</a>
      </p>
    </section>

    <section class="diagonal alternate" style="padding-bottom:50px; min-height:450px;">
      <div class="container">
        <h2 style="text-align:center;">Why Choose Us</h2><br>
      </div>
      <div class="container halves">
        <div class="editable">
          <ol>
            <li>Unlike other technical firms, we specialize in sites: member management, on-boarding, trial plans, churn and revenue tracking.</li>
            <li>All of our projects are fixed-fee, when we give you a price for the project that's the price you'll pay. We will never hit you up for more money half-way through the project.</li>
          </ol>
        </div>
        <div class="editable">
          <img width="90%" src="/img/churn.png" />
        </div>
      </div>
    </section>

    <section class="diagonal patterned">
      <div class="container halves">
        <div>
          <ul class="image-list image-list-right">
            <li><a href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')"><img src="/img/bt-hirely.png" width="300" style="max-width:80%;" /></a></li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="text-align: center;"><a href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')"><img src="/img/bt-hirely.png" width="200" style="max-width:80%;" /></a></p>
          <h3 class="editable">Testimonial: <a href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')">Hirely</a></h3>
          <p class="editable">"We had btek get our cloud application project back on track after a messy loss with our former leader. Can't recommend enough!" - <a href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')">Chris</a></p>
        </div>
      </div>
    </section>

    <section class="diagonal">
      <div class="container">
        <h2 style="text-align:center;">We Are Your Partners</h2><br>
      </div>
      <div class="container halves">
        <div>
          <ul class="image-list">
            <li style="font-size:150%;">You</li>
            <li style="margin-bottom:20px;">+</li>
            <li><img src="/img/thumb-lg.png" width="130" style="max-width:80%;" /></li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="font-size:60px;">You + <img src="/img/thumb-lg.png" width="55" /></p>
          <p class="editable">Is your churn rate within a healthy range?</p>
          <p><a href="https://info.recurly.com/research/churn-rate-benchmarks?utm_source=hpflex" target="_blank" class="button">See How You Compare &#8594;</a></p>
          <p><a href="/contact" class="button">Team up get better &#8594;</a></p>
          <!--<ol>-->
          <!--<li>Strategy</li>-->
          <!--<li>Keyword planning</li>-->
          <!--<li>On-site and off-site optimization</li>-->
          <!--<li>Content creation</li>-->
          <!--<li>Ad campaigns</li>-->
          <!--</ol>-->
          <!--<p>↳ all with a focus on generating leads and growing your business.</p>-->
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