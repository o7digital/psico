import { cpSync, mkdirSync, rmSync } from 'node:fs';

rmSync('public', { recursive: true, force: true });
mkdirSync('public');
for (const entry of ['css', 'fonts', 'images', 'img', 'js', 'favicon.ico', 'style.css', 'terapias.html', 'indexold.html', 'google0f0ac7928ab83cd9.html', 'sitemap.xml']) {
  cpSync(entry, `public/${entry}`, { recursive: true });
}
