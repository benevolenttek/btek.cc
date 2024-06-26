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
        <a alt="goto learn-more" href="#learn-more" style="color:#666">Go ahead, take a look &#8595;</a>
      </p>
    </section>

    <section class="diagonal alternate">
      <div class="container editable">
        <style>
          ol.prototypes li {
            position: relative;
            width: 40%;
            display: inline-block;
            vertical-align: top;
          }

          ol.prototypes li:hover {
            background: #BCDEE0;
          }

          ol.prototypes img {
            max-width: 200px;
          }

          ol.prototypes a {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
          }
        </style>
        <ol class="prototypes">
          <li>
            <a href="http://big-macadamia.cloudvent.net/"></a>
            <img src="http://big-macadamia.cloudvent.net/siteicon.png" />
            <h3>Cause</h3>
            <p>Landing page for donation drive</p>
          </li>
          <li>
            <a href="http://magnificent-swallow.cloudvent.net/"></a>
            <img src="http://magnificent-swallow.cloudvent.net/siteicon.png" />
            <h3>Creative</h3>
            <p>A website for creatives</p>
          </li>
          <li>
            <a href="http://sky-grasshopper.cloudvent.net/"></a>
            <img src="http://sky-grasshopper.cloudvent.net/siteicon.png" />
            <h3>Dopetrope</h3>
            <p>A website for </p>
          </li>
          <li>
            <a href="http://happy-duck.cloudvent.net/"></a>
            <img src="http://happy-duck.cloudvent.net/siteicon.png" />
            <h3>Edition</h3>
            <p>A website for documentation</p>
          </li>
          <li>
            <a href="http://sky-eggplant.cloudvent.net/"></a>
            <img src="http://sky-eggplant.cloudvent.net/siteicon.png" />
            <h3>Frisco</h3>
            <p>A modern website for simple small business</p>
          </li>
          <li>
            <a href="http://sunny-salamander.cloudvent.net/"></a>
            <img src="http://sunny-salamander.cloudvent.net/siteicon.png" />
            <h3>Fur</h3>
            <p>A starter e-commerce website</p>
          </li>
          <li>
            <a href="http://clover-car.cloudvent.net"></a>
            <img src="http://clover-car.cloudvent.net/siteicon.png" />
            <h3>Hydra</h3>
            <p>A website for SaaS business</p>
          </li>
          <li>
            <a href="http://maroon-beaver.cloudvent.net/"></a>
            <img src="http://maroon-beaver.cloudvent.net/siteicon.png" />
            <h3>Justice</h3>
            <p>A website with a cool large nav</p>
          </li>
          <li>
            <a href="http://wise-swan.cloudvent.net/"></a>
            <img src="http://wise-swan.cloudvent.net/siteicon.png" />
            <h3>Malt</h3>
            <p>A website for festivals</p>
          </li>
          <li>
            <a href="http://adorable-goldfish.cloudvent.net/"></a>
            <img src="http://adorable-goldfish.cloudvent.net/siteicon.png" />
            <h3>Treat</h3>
            <p>A simple blog-centric website.</p>
          </li>
          <!--<li>-->
          <!--<img src="/siteicon.png" />-->
          <!--<h3>
<a href="">Dopetrope</a></h3>-->
          <!--<p>A website for </p>-->
          <!--</li>-->
        </ol>
      </div>
    </section>

<?php
    }
  );
};
