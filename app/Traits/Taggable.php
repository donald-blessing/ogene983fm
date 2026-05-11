<?php

namespace App\Traits;

use App\Models\Tag\Tag;

/**
 * Trait DescribeAble
 */
trait Taggable
{
    public function attachTags(array $tags)
    {
        foreach ($tags as $tag) {
            $newTag = Tag::firstOrCreate(['name' => strtolower((string) $tag)]);
            $this->tags()->attach($newTag->id);
        }
    }

    public function syncTags(array $tags)
    {
        $ids = [];
        foreach ($tags as $tag) {
            $newTag = Tag::firstOrCreate(['name' => strtolower((string) $tag)]);
            $ids[] = $newTag->id;
        }
        $this->tags()->sync($ids);
    }

    /**
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
