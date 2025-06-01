<?php

namespace Roots\AcornPostTypes;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Roots\Acorn\Application;

class AcornPostTypes
{
    /**
     * The Application instance.
     */
    protected Application $app;

    /**
     * The post types configuration.
     */
    protected Collection $config;

    /**
     * Create a new Acorn Post Types instance.
     *
     * @return void
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->config = Collection::make($this->app->config->get('post-types'));

        $this->registerPostTypes();
        $this->registerTaxonomies();
    }

    /**
     * Make a new instance of Acorn Post Types.
     */
    public static function make(Application $app): self
    {
        return new static($app);
    }

    /**
     * Register post types.
     */
    protected function registerPostTypes(): void
    {
        Collection::make($this->config->get('post_types', []))
            ->each(function ($args, $post_type) {
                register_extended_post_type(
                    $post_type,
                    $args,
                    Arr::pull($args, 'names')
                );
            });
    }

    /**
     * Register taxonomies.
     */
    protected function registerTaxonomies(): void
    {
        Collection::make($this->config->get('taxonomies', []))
            ->each(function ($args, $taxonomy) {
                register_extended_taxonomy(
                    $taxonomy,
                    Arr::pull($args, 'post_types'),
                    $args,
                    Arr::pull($args, 'names')
                );
            });
    }

    /**
     * Get registered post types from config.
     */
    public function getPostTypes(): array
    {
        return $this->config->get('post_types', []);
    }

    /**
     * Get registered taxonomies from config.
     */
    public function getTaxonomies(): array
    {
        return $this->config->get('taxonomies', []);
    }
}
