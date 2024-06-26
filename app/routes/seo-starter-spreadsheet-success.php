<?php
require_once 'app/layouts/page.php';

return function () {
  pageLayout(
    title: "SEO Starter Spreadsheet Download",
    heading: "You have excellent judgement.",
    subtitle: "Download your SEO Starter Spreadsheet below.",
    description: "Thanks for downloading the SEO Starter Spreadsheet!",
    renderChildren: function () {
?>

    <style>
      /* Hide the newsletter signup */
      .diagonal-newsletter:last-of-type {
        display: none;
      }
    </style>

    <section class="diagonal">
      <div class="container" style="text-align:center;">
        <p>
          <a class="button" href="http://bit.ly/2n0N38C">BIG DOWNLOAD BUTTON</a>
        </p>
      </div>
    </section>

    <section class="diagonal diagonal-newsletter">
      <p style="font-size:50px;text-align:center;">Keep going! Learn more at our <a href="/learning">learning center</a>.</p>
    </section>

<?php
    }
  );
};
