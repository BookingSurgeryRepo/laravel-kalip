<?php

namespace Sdenizhan\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider {

    public function boot()
    {
        //$this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/Views', 'blog');

        $this->publishes([
            __DIR__.'/Database/Migrations/2025_01_02_create_blog_category_table.php.stub' => database_path('migrations/2025_01_02_create_blog_category_table.php'),
            __DIR__.'/Database/Migrations/2025_01_02_create_blog_posts_table.php.stub' => database_path('migrations/2025_01_02_create_blog_posts_table.php'),
        ], 'blog-migrations');
    }

    public function register()
    {

    }
}
