# Engineering Portfolio — Early Draft

**Historical portfolio prototype • HTML/CSS/JavaScript • Bootstrap 5**

This repository preserves an **early design iteration** of Omar Alhalawani's personal engineering portfolio. It began with the **MyPage Bootstrap template** and was adapted to present engineering experience, technical interests, and project work through a single-page profile.

> **Archive note:** this is a development snapshot, not the current portfolio. See the [active GitHub Pages portfolio](https://omar-alhalawani.github.io/omar-portfolio/) and [its source repository](https://github.com/Omar-Alhalawani/omar-portfolio).

## What this version contains

The `index.html` page includes sections for:
- Introduction, about, and technical skills
- Experience/resume content
- Engineering projects
- Services and contact
- Navigation and links to GitHub and LinkedIn

The snapshot also contains template-derived additional HTML pages, styling, imagery, and locally included frontend libraries. The focus is on **layout experimentation, content organization, and responsive portfolio presentation**, rather than a custom JavaScript application framework.

## Technology stack

- HTML5, CSS3, vanilla JavaScript
- Bootstrap and Bootstrap Icons
- AOS scroll animations and template UI utilities
- Static assets and template-supplied vendor libraries

## Run locally

No build pipeline is required. After cloning:

```bash
git clone https://github.com/Omar-Alhalawani/omar-portfolio-draft-1.git
cd omar-portfolio-draft-1
python -m http.server 8000
```

Open `http://localhost:8000`.

## Layout

```text
index.html             # Main early portfolio page
starter-page.html      # Template-derived starter page
portfolio/             # Additional portfolio content
services/              # Additional service-related content
forms/                 # Form-related assets
assets/css/            # Styling
assets/js/             # Browser behavior
assets/img/            # Images and icons
assets/vendor/         # Bundled frontend dependencies
Readme.txt             # Original BootstrapMade template attribution
```

## Status and attribution

This is an **older visual/content experiment**, preserved to show the site's evolution. Some template assets and pages may remain in their original form; the repository should not be represented as an independently authored design from scratch.

The original template attribution and licensing information is retained in [`Readme.txt`](Readme.txt). Check the [BootstrapMade licensing terms](https://bootstrapmade.com/license/) before redistributing template material.
