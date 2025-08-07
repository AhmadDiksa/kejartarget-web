# KejarTarget Web Frontend  
> **Your Event Partner** – Modern, responsive landing site for KejarTarget, built with Laravel, Tailwind CSS & Vite.

---

## 🚀 Overview
This repository contains the **public-facing website** for **KejarTarget**, an Indonesian event-organizer brand.  
The site showcases services, portfolio, testimonials and provides a friction-less contact channel via WhatsApp.

---

## 🧰 Tech Stack
| Layer | Technology |
|-------|------------|
| Framework | Laravel 12 |
| Styling | Tailwind CSS 3 |
| Bundler | Vite |
| JS Runtime | ES Modules (ESM) |
| Icons / Animations | Heroicons, AOS, Swiper |
| PHP | ^8.2 |

---

## 📁 Project Structure
```
├── app/                  # Laravel application code
├── resources/
│   ├── css/
│   │   └── app.css       # Tailwind entry
│   ├── js/
│   │   ├── app.js        # Vite entry (ESM)
│   │   └── counter.js    # Reusable counter component
│   └── views/
│       ├── layouts/
│       ├── components/   # Re-usable Blade components
│       └── pages/        # Static pages (home, teams, blog)
├── public/
│   ├── images/           # Optimised images & logos
│   └── tailadmin/        # Admin template (unused in prod)
├── routes/web.php        # Page routes
└── vite.config.js        # Vite configuration
```

---

## 🏃‍♂️ Quick Start
1. **Clone & install**
   ```bash
   git clone https://github.com/your-org/kejartarget-web-frontend.git
   cd kejartarget-web-frontend
   composer install
   npm install
   cp .env.example .env
   php artisan key:generate
   ```

2. **Start dev servers**
   ```bash
   php artisan serve        # http://127.0.0.1:8000
   npm run dev             # Vite HMR
   ```

3. **Build for production**
   ```bash
   npm run build
   ```

---

## 🎨 Styling & Assets
- **Tailwind CSS** is configured in `tailwind.config.js`.
- Custom colour palette: `teal`, `green`, `gray`.
- Images are stored in `public/images/` and auto-optimised by Vite.
- Icons: Heroicons (inline SVG) & Swiper for sliders.

---

## 🧩 Blade Components
All UI pieces are encapsulated in **Blade components** under `resources/views/components/`:

| Component | Purpose |
|-----------|---------|
| `header.blade.php` | Navigation bar |
| `footer.blade.php` | Footer with links & WhatsApp CTA |
| `service-card.blade.php` | Service showcase |
| `portfolio-item.blade.php` | Portfolio grid |
| `testimonial-card.blade.php` | Customer reviews |
| `stat-card.blade.php` | Animated counters |
| `team-member-card.blade.php` | Team page cards |

---

## 📄 Pages
| Route | Blade File | Description |
|-------|------------|-------------|
| `/` | `pages/home.blade.php` | Landing page |
| `/teams` | `pages/teams.blade.php` | Team members |
| `/blog` | `pages/blog.blade.php` | Articles (static) |

---

## 📞 Contact & WhatsApp Integration
- Floating WhatsApp button (bottom-right) links to `https://wa.me/...`.
- Configurable via `.env` variable `WHATSAPP_NUMBER`.

---

## 🧪 Testing
```bash
npm run test   # Laravel Pint + PHPUnit
```

---

## 🚢 Deployment
1. Build assets: `npm run build`
2. Upload `public/build` & source files to server.
3. Run `composer install --optimize-autoloader --no-dev`
4. Set proper `.env` values (`APP_URL`, `WHATSAPP_NUMBER`, etc.)

---

## 🤝 Contributing
1. Fork the repo.
2. Create a feature branch (`git checkout -b feature/amazing-feature`).
3. Commit & push (`git commit -m 'Add amazing feature'`).
4. Open a Pull Request.

---

## 📄 License
MIT © 2024 KejarTarget Team

---

> **Need help?**  
> Drop us a message on [WhatsApp](https://wa.me/6281234567890) or email **hello@kejartarget.id**.
