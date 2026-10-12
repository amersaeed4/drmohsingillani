# Editing the Dr Mohsin Gillani site

Built on Grav (flat-file CMS). Admin panel: `/admin` — log in with your Grav admin account.

## Where to edit what
| I want to change… | Go to |
|---|---|
| Text, headings, images on any page | Admin → Pages → click the page → **Content** tab (Markdown editor; images via *Page Media*) |
| A page's title in Google, description, social image | Same page → **SEO** tab |
| The home page hero, quote, service cards, "why choose me" | Admin → Pages → Home → **Hero / Intro quote / Services / Why choose me** tabs |
| Team members and photos | Admin → Pages → Our Team → **Team Members** tab |
| Menu order / adding a page | Admin → Pages: drag to reorder; nesting = dropdown menus. *Add Page* → pick a template (Content Page, Section Landing Page, …) |
| Phone, address, opening hours, social links, footer, colours, logo | Admin → Themes → Dr Mohsin Gillani |
| Site-wide default SEO (title suffix, default description, share image) | Admin → Themes → Dr Mohsin Gillani → **Default SEO** |

## Placeholder pictures
Wherever the old site's photos were lost, the page shows a tasteful illustration (`placeholder-*.svg`) instead of a broken image. To swap in a real photo:
1. Admin → Pages → the page → **Page Media**: upload the photo.
2. **Banner at the top of the page:** Content tab → *Banner image* → pick the photo.
3. **Pictures inside the text:** in the editor, change `![](placeholder-laparoscopy.svg)` to `![Describe the photo](your-photo.jpg)` (or drag the uploaded photo into the editor).
4. **Cards (e.g. the surgery types):** Layout tab → *Card image*.
5. **Team photos:** Our Team → Team Members → pick a *Photo* for each person; until then a neutral avatar is shown.
Tip: search the editor for `placeholder-` to find every spot still waiting for a photo.

## Site search
- Magnifier icon in the header (or press `/` anywhere): live results as you type. Full results page at `/search?q=…`.
- It searches page titles, menu labels, intro text, meta descriptions, body text and the home/team fields, so new or edited pages are searchable immediately, with no setup.
- Pages marked "Hide from search engines" (SEO tab) are also left out of search.
- Edit the "Popular pages" chips under Admin → Pages → Search.

## Notes
- Every page keeps its original WordPress URL (e.g. `/about-obesity`) thanks to the `routes.default` setting in each page's header. When you add a new page under a parent, it gets the parent's path unless you set `routes: default:` in Expert mode.
- `/sitemap.xml` is generated automatically and `robots.txt` points to it.
- Contact form enquiries are saved in `user/data/` (as `enquiry-*.txt`) and emailed to drmohsingillani@gmail.com. Email needs a working mail setup on the server (Admin → Configuration → Email, SMTP recommended).
- Before launch: Admin → Themes → Default SEO → make sure "Ask search engines NOT to index" is **off** (it is off by default).
