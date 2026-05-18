<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Http\Middleware\VerifyCsrfToken;
use App\Models\Contact\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class ContactSystemTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Role::firstOrCreate(['name' => 'admin']);
        $this->withoutMiddleware(VerifyCsrfToken::class);
    }

    /** @test */
    public function public_can_submit_contact_form(): void
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Hello',
            'message' => 'This is a test message',
        ];

        $response = $this->post(route('contact.store'), $data);

        $response->assertRedirect(route('contact'));
        $this->assertDatabaseHas('contacts', ['email' => 'john@example.com']);
    }

    /** @test */
    public function contact_submission_requires_valid_data(): void
    {
        $response = $this->post(route('contact.store'), []);
        $response->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
    }

    /** @test */
    public function only_admins_can_view_contacts_dashboard(): void
    {
        /** @var User $admin */
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        /** @var User $user */
        $user = User::factory()->create();

        $this->actingAs($admin)->get(route('contact.dashboard'))->assertStatus(200);
        $this->actingAs($user)->get(route('contact.dashboard'))->assertStatus(403);
    }

    /** @test */
    public function admin_can_view_specific_contact(): void
    {
        /** @var User $admin */
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $contact = Contact::factory()->create([
            'email' => 'sender@example.com',
        ]);

        $this->actingAs($admin)->get(route('contact.show', $contact->id))
            ->assertStatus(200)
            ->assertSee('sender@example.com');
    }

    /** @test */
    public function admin_can_reply_to_contact(): void
    {
        Mail::fake();

        /** @var User $admin */
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $contact = Contact::factory()->create();

        $response = $this->actingAs($admin)
            ->from(route('contact.show', $contact->id))
            ->post(route('contact.reply', $contact->id), [
                'subject' => 'Re: Issue',
                'message' => 'We are looking into it',
            ]);

        $response->assertRedirect(route('contact.show', $contact->id));
        $response->assertSessionHas('success');
    }

    /** @test */
    public function admin_can_delete_contact(): void
    {
        /** @var User $admin */
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $contact = Contact::factory()->create();

        $this->actingAs($admin)->delete(route('contact.delete', $contact->id));

        $this->assertDatabaseMissing('contacts', ['id' => $contact->id]);
    }
}
