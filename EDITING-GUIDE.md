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

## Notes
- Every page keeps its original WordPress URL (e.g. `/about-obesity`) thanks to the `routes.default` setting in each page's header. When you add a new page under a parent, it gets the parent's path unless you set `routes: default:` in Expert mode.
- `/sitemap.xml` is generated automatically and `robots.txt` points to it.
- Contact form enquiries are saved in `user/data/` (as `enquiry-*.txt`) and emailed to drmohsingillani@gmail.com. Email needs a working mail setup on the server (Admin → Configuration → Email, SMTP recommended).
- Before launch: Admin → Themes → Default SEO → make sure "Ask search engines NOT to index" is **off** (it is off by default).
