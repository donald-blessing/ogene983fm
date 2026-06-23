<?php

declare(strict_types=1);

namespace App\Services;

use App\Settings\GeneralSettings;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\TwitterCard;

class SeoService
{
    public function __construct(
        protected GeneralSettings $settings
    ) {}

    /**
     * Set standard SEO tags for an index page.
     */
    public function setIndexSeo(string $title, ?string $description = null, string $type = 'website'): void
    {
        $description = $description ?? $this->settings->site_name . ' - ' . $this->settings->site_motto;

        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::setCanonical(url()->current());

        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', $type);
        OpenGraph::setSiteName($this->settings->site_name);

        if ($this->settings->twitter_url) {
            TwitterCard::setSite($this->settings->twitter_url);
        }
    }

    /**
     * Set advanced SEO tags for a specific content page (e.g. Blog Post).
     */
    public function setPageSeo(string $title, string $description, array $options = []): void
    {
        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);

        if (isset($options['keywords'])) {
            SEOMeta::addKeyword($options['keywords']);
        }

        if (isset($options['published_time'])) {
            SEOMeta::addMeta('article:published_time', $options['published_time'], 'property');
        }

        if (isset($options['section'])) {
            SEOMeta::addMeta('article:section', $options['section'], 'property');
        }

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description);
        OpenGraph::setUrl(url()->current());

        if (isset($options['image'])) {
            OpenGraph::addImage($options['image']);
        }
    }
}
