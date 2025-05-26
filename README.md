# Laravel Carousel Component

A Livewire 3 + Alpine-safe, Tailwind-friendly Owl Carousel Blade component.

## ✨ Features

- 🎯 Livewire 3 compatible
- ⚡ Alpine-safe with `x-init` + retry
- 🎨 Tailwind CSS styled
- 🖼️ Image, caption, CTA support
- 📱 Fully responsive
- 🎞️ Thumbnail & custom nav support
- 💤 Lazy loading & auto height

## 📦 Installation

```bash
composer require salehen/laravel-carousel-component
```

If not auto-discovered, register manually:

```php
// config/app.php
'providers' => [
    Vendor\CarouselComponent\CarouselServiceProvider::class,
],
```

## 🔧 Setup Assets

Install JS/CSS:

```bash
npm install owl.carousel jquery
```

In `resources/js/app.js`:

```js
import $ from 'jquery';
window.$ = window.jQuery = $;

import 'owl.carousel';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel/dist/assets/owl.theme.default.css';
```

Compile assets:

```bash
npm run dev
```

## 🔌 Usage

```blade
<x-carousel
    :items="[
        ['image' => asset('images/brand1.png')],
        ['image' => asset('images/brand2.png')],
    ]"
    :options="[
        'loop' => true,
        'autoplay' => true,
        'responsive' => [
            0 => ['items' => 2],
            768 => ['items' => 4],
        ]
    ]"
    thumbnails
    customNav
/>
```

## 📁 Customization

```bash
php artisan vendor:publish --tag=carousel-views
```

## 📄 License

MIT © Reajuj Salehen
