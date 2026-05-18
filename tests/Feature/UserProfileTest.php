<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class UserProfileTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Role::firstOrCreate(['name' => 'admin']);
    }

    /**
     * Test user can view their profile.
     */
    public function test_user_can_view_their_profile(): void
    {
        $this->withoutExceptionHandling();

        /** @var User $user */
        $user = User::factory()->create();
        $user->assignRole('admin');

        $response = $this->actingAs($user)->get(route('user.myProfile', ['user' => $user->slug]));

        $response->assertStatus(200);
        $response->assertSee($user->name);
    }

    /**
     * Test user cannot view another user's profile if not admin.
     */
    public function test_user_cannot_view_another_users_profile_if_not_admin(): void
    {
        /** @var User $user1 */
        $user1 = User::factory()->create();

        /** @var User $user2 */
        $user2 = User::factory()->create();

        $response = $this->actingAs($user1)->get(route('user.myProfile', ['user' => $user2->slug]));

        $response->assertStatus(404); // Based on controller logic abort('404')
    }
}
