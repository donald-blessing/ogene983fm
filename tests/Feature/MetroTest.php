<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Category\Category;
use App\Models\Metro\Metro;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MetroTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function public_can_view_metro_index(): void
    {
        $category = Category::factory()->create();
        $user = User::factory()->create();
        Metro::factory()->count(3)->create(['category_id' => $category->id, 'user_id' => $user->id]);

        $response = $this->get(route('metro.index'));

        $response->assertStatus(200);
    }
}
