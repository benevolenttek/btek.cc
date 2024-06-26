<?php

require_once 'app/db/posts/post.php';

$post = new Post(
  slug: "what-is-online-marketing-you-ask",
  title: "What is online marketing, you ask?",
  description: "Better late than never. Dive in!",
  author_staff_member: "0001",
  createdAt: "2016-12-22 11:10:13",
  updatedAt: "2016-12-22 11:10:13",
  publishAt: "2016-12-22 11:10:13",
  categories: ['0007', '0008'],
  series: 'SEO Primer',
  prev: null,
  next: "0002",
  id: "0001",
  subtitle: "Better late than never. Dive in!",
  image: "/img/dc_marketing_seo.png",
  content: <<<CONTENT
<div style="width:100%;height:0;padding-bottom:57%;position:relative;margin-bottom:30px;border-radius:20px;overflow:hidden;"><iframe src="https://giphy.com/embed/26FPnj46RYsIWgYLe" width="100%" height="100%" style="position:absolute" frameborder="0" class="giphy-embed" allowfullscreen=""></iframe></div>

<span class="dropcap">O</span>nline marketing is impressively cost-effective for most businesses. In fact, some businesses achieve triple-digit growth in leads through an online marketing campaign. Sure, you can market your business without online marketing. But why would you want to? In this first edition of our [SEO primer series](/seo-primer-series), we cover the basics of online marketing terminology and strategy.

It pays to start exploring online marketing by getting familiar with terminology.

## So what ***<u>is</u>*** online marketing?

Online marketing -- also called Internet marketing -- is the process of promoting a brand, products or services over the Internet. Online marketing spans websites, digital media, email marketing, paid advertising, social networks, podcasts, apps, e-commerce, and any other promotional activities that piggy back off the Internet.

Breaking it down further, there's:

***1. Affiliate Marketing***

You could partner with another business to actively promote your business. For example, the other business could mention and praise you in a blog post. Let's say you are on the website of Jose Cuervo Tequilla and you are reading the company's recipe for the “The Perfect Margarita.” The recipe suggests using Grand Marnier instead of a generic orange-flavored liquor. Guess which one you are likely to consider buying?

***2. Display Advertising***

This refers to visual advertisements that are displayed on external websites to attract more people to your website. Remember in the last paragraph when you were reading through an article and ended up with a new purchase? Maybe that was because you clicked on one of the many ads that article had. Perhaps it was **<u>this one</u>**, leading to “The Perfect Margarita” recipe?

***3. Search Engine Marketing (SEM)***

This form of marketing promotes a business through paid advertisement that appears on search engine result pages.

***4. Search Engine Optimization (SEO)***

Unlike SEM, Search Engine Optimization (SEO) uses the unpaid and natural process of promoting content on Search Engine Search Result Pages (SERPs). In other words, this is how your website ranks when people search for things on Google. This includes keyword research and placement, link building and social media marketing.

***5. Email Marketing***

This is a marketing process that involves reaching out to your customers via email. It can be as simple as sending one email, or as complex as sending an automatic sequence of future emails.

***6. Social Media Marketing***

Social media marketing is the process of promoting a website through various social networks like Facebook, Twitter, Google+, LinkedIn, Pinterest and more.

***7. Inbound Marketing***

In contrast to outbound marketing like email, inbound marketing is all about maximizing the attention of your visitors once you have it. Your website is inbound marketing, because the visitor has actively chosen to give you attention. The most effective inbound marketing starts by delighting visitors with free helpful information, then tempting them with more if they act or buy now.

## Wrapping it up…

!["Just send the email!"](/img/versions/why-don-t-you-just-send-an-e-mail-cartoon-prints-i8639641---x----1042-763x---.jpg)

All of these efforts comprise an overall strategy of attracting clients, promoting your brand to them, and convincing them to love you. Remember, buying anything these days involves a perceived need, an analysis of a multitude of options, and an emotional reaction to YOUR product or service.

Check out our other posts in our [SEO Primer Series](/seo-primer-series)!
CONTENT,

);
