<?php
function newsletterSection()
{
?>
  <section class="diagonal diagonal-newsletter">
    <div id="footer-newsletter" style="position:absolute; top:-70px;"></div>
    <p style="padding: 0 20px;">Get free marketing advice & goodies to your inbox!</p>
    <form style="padding: 0 20px;" action="javascript:handleNewsletterSubmit()" method="get">
      <input type="hidden" name="_to" value="hi@btek.cc" />
      <input type="hidden" name="_subject" value="New newsletter signup on btek.cc" />
      <input type="text" name="_gotcha" style="display: none;" />
      <div class="halves">
        <div>
          <input type="text" name="email" id="newsletter-email" placeholder="john@appleseed.com" />
        </div>
        <div>
          <input class="button" type="submit" value="Sign up!" />
        </div>
      </div>
    </form>
  </section>

  <script>
    function handleNewsletterSubmit() {
      const email = encodeURIComponent(document.getElementById('newsletter-email').value)
      const subject = "Inquiry for btek"
      const body = `Ho btek team,%0D%0A%0D%0AI'm interested in your newsletter. Can you hook me up?%0D%0A%0D%0AYours,%0D%0A${email}`
      window.open('mailto:hi@btek.cc?' +
        'subject=' + subject +
        '&body=' + body, '')
    }
  </script>
<?php
}
