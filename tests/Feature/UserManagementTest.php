<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Http\Middleware\VerifyCsrfToken;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class UserManagementTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(VerifyCsrfToken::class);
        Role::firstOrCreate(['name' => 'super admin']);
        Role::firstOrCreate(['name' => 'admin']);
    }

    /** @test */
    public function only_super_admins_can_access_user_index(): void
    {
        /** @var User $superAdmin */
        $superAdmin = User::factory()->create();
        $superAdmin->assignRole('super admin');

        /** @var User $regularUser */
        $regularUser = User::factory()->create();

        $this->actingAs($superAdmin)->get(route('users.index'))->assertStatus(200);
        $this->actingAs($regularUser)->get(route('users.index'))->assertStatus(403);
    }

    /** @test */
    public function super_admin_can_verify_a_user(): void
    {
        /** @var User $superAdmin */
        $superAdmin = User::factory()->create();
        $superAdmin->assignRole('super admin');

        $user = User::factory()->create(['email_verified_at' => null]);

        $this->actingAs($superAdmin)->get(route('user.verify', $user->slug))
            ->assertSessionHas('success');

        $this->assertNotNull($user->refresh()->email_verified_at);
    }

    /** @test */
    public function super_admin_can_upgrade_user_membership(): void
    {
        /** @var User $superAdmin */
        $superAdmin = User::factory()->create();
        $superAdmin->assignRole('super admin');

        $user = User::factory()->create();
        Role::firstOrCreate(['name' => 'presenter']);

        $response = $this->actingAs($superAdmin)->post(route('user.upgrade.membership', [$user->slug, 'presenter']));

        $response->assertStatus(200);
        $this->assertTrue($user->refresh()->hasRole('presenter'));
    }
}
