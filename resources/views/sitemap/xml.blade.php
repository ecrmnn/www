<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>

<urlset
        xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

    <url>
        <loc>{{ route('home.index') }}</loc>
        <changefreq>weekly</changefreq>
    </url>

    @foreach ($articles as $article)
        <url>
            <loc>{{ route('article.show', [$article->slug]) }}</loc>
            <changefreq>weekly</changefreq>
        </url>
    @endforeach
</urlset>