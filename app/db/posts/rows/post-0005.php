<?php
require_once 'app/db/posts/post.php';

$post = new Post(
  slug: "new-website-time-to-market",
  title: "New Website, Time to Market!",
  description: "Months in the works, this new skin feels right. Armed to the teeth, we're launching a new marketing campaign!",
  author_staff_member: "0001",
  createdAt: "2017-05-05 14:05:06",
  updatedAt: "2017-05-05 14:05:06",
  publishAt: "2017-05-05 14:05:06",
  categories: ['0001'],
  series: null,
  prev: null,
  next: null,
  id: "0005",
  subtitle: "Months in the works, this new skin feels right.",
  image: "/img/benevolent_tech_dc_seo.png",
  content: <<<CONTENT
<span class="dropcap">W</span>**e are ecstatic to welcome you to our new online home!** We engineered this site in response to usage analytics and all of the great feedback our partners offered over the years.  We noticed that new customers really love the testimonials and checking references, so we are putting that in spot #1 on the homepage.

Why the complete overhaul? You know you need a new website when you make major changes to your business model. btek is now **100% focused on helping local mid-atlantic businesses attract and retain customers with all-out online marketing and website development**. In contrast to before the change, we now work directly with and for the end-customers.
    
[Let us know](/contact) what you think. Over the next year, we promise to keep the content fresh with easy-to-use tips and instructions with online marketing. Sign up for our [newsletter](#footer-newsletter) or [follow us](#footer) so you don't miss out!
CONTENT,
);
