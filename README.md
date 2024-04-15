# A brochure site using a custom, react-inspired micro-PHP-framework

TODOs
- [ ] service worker
- [ ] improve content
- [ ] php strict mode
- [ ] gravatar

## Env

**Development**
- PHP >= v8 bc type-safety feature usage

**Prod**
- Host: Hostinger
  - PHP: v8.3
  - CDN: yes
  - Superviser: Litespeed w/ htaccess support

## Running locally

```sh
make dev
# which runs...
php -t public -S localhost:8000 router.php
```

## Deploying

Hostinger supports auto-deploy on push to Github, which is the best way to clear caches. So just push to main.
