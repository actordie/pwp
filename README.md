****************# pwp
so begins the decent into the dark

## Milestone 1 Feedback
I really like your idea of creating a site that demonstrates your success in our program to the Kellogg Foundation and NMWTC, but I have some questions about what your ideas for your site content are specifically. 

Your purpose, audience and goal are very narrow and specific. I am wondering if a little more breadth here might actually be better. Just an idea - but how about creating a professional portfolio site that both demonstrates your coding skill set while at same time giving credit and thanks to the Kellogg Foundation and NMWTC for their role in your education. You could even highlight these programs with the intent to educate others on these opportunities that are available. This might be a way to design a PWP that serves more than one purpose and goal, and would be targeted to a much broader audience. Creating your project around one specific end user - Ms. Tabron - to the exclusion of other end users, is a VERY narrow and specific target audience. Just a thought.

Overall this is a good start, but I am concerned that it might be a little too narrow, and I would like to know more about what you envision for this project. Your project is set up correctly, and you're on the right track with your HTML. There were a few technical issues that I want to bring to your attention, see **Edits &amp; Suggestions** below.

Your Milestone 1 passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin work on [Milestone 2&alpha;](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/), but I'd like to hear about your ideas a bit more.

### Edits &amp; Suggestions
- Move the `<meta charset="utf-8">` tag down inside the `<head>` tag
- Missing `<title>` tag
- Your `<h1>` tag belongs inside the `<body>`, not inside the `<head>`

## Milestone 2&alpha; Feedback
I really love your direction here, and the beautiful graphics and animation you plan to feature. You have some ambitious design ideas - everything you've outlined here is most definitely achievable, but you may be in for some additional challenges. (**jQuery**!)  

Your wireframes and content strategy are thoughtful and well done. Nice work.

It looks like each section of the page will have a full-screen background image, and each section will be 100% of the viewport height. This is all pretty straightforward with the right CSS rules. Each section should probably be sized using the `vh` unit of measurement (`height: 100vh;`). The images can then be set as a `background` on each section. Be sure that the images are large and hi-res enough to display well on large screens, without being too big. (Keep each one less than 1MB in size, max.)

You'll need some custom [jQuery](https://jquery.com/) for the navbar to reposition on scroll. This would likely be done by dymanically swapping out classes on the navbar once a user scrolls down beyond a certain point.

You may not want or need to use the Bootstrap navbar since your navigation design ideas are very different Bootstrap's. Still, you'll still want to use the grid system and other Bootstrap classes to get it looking right, and the `@media` queries to apply CSS rules based on screen width.  

Either jQuery or CSS Animation can be used to fade in images and content on page load. Have a look at [Animate.css](https://daneden.github.io/animate.css/) library and see if you could use this for your fade-in effect (you may need to edit some of the CSS yourself). If [Animate.css](https://daneden.github.io/animate.css/) won't cut it, there's always good-old fashioned [jQuery](https://jquery.com/).

So as the user scrolls down to the other content areas of the site, it looks like you want the text content to animate or fade in. A good tool to use for "animating-in" text and content as a user scrolls down is the [Waypoints](http://imakewebthings.com/waypoints/) plugin. This is a bit more ambitious and will require more custom JavaScript that you'll have to build, but can look very nice. Emily may also use this one, and I was planning on putting together a demo since this is more advanced than what we usually cover in class.

Since there are some subtle differences in your text layout on mobile vs. desktop, get some practice using the CSS `@media` queries. These will be very useful.

For image galleries, here are a few plugins that you might want to look at. They are all slightly different - three  carousels, and one lightbox gallery. All are mobile friendly and responsive:
- [Slick Carousel](http://kenwheeler.github.io/slick/)
- [Flickity Carousel](https://flickity.metafizzy.co/)
- [Owl Carousel 2](https://owlcarousel2.github.io/OwlCarousel2/)
- [FancyBox3 Lightbox Gallery](http://fancyapps.com/fancybox/3/)

There are many others to choose from, but these can give you some ideas.

Overall - very nice work. The animated UI features you want will require some custom JavaScript, and likely at least one JavaScript plugin, so be prepared for an extra challenge there. Your wireframes will provide you with a good guide going forward, and I'm looking forward to seeing your site take shape. Really beautiful photos too.

Your Milestone 2&alpha; passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin development on your PWP. Build your layout directly inside the `/public_html` directory. You do not need to use the `/documentation` directory any more.

### Edits &amp; Suggestions
- The `<link>` tag on line 5 is malformed - it needs a closing `>`, and the spaces in the `rel` attribute can cause problems.
