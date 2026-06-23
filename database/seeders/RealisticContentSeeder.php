<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category\Category;
use App\Models\Monetization\PublicChatMessage;
use App\Models\Monetization\Sponsorship;
use App\Models\Post\Post;
use App\Models\Presenter\Presenter;
use App\Models\Programme\Programme;
use App\Models\Programme\ProgrammeTime;
use App\Models\SongOfTheWeek\SongOfTheWeek;
use App\Models\User;
use App\Models\Tag\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class RealisticContentSeeder extends Seeder
{
    /**
     * Set to false if you don't have internet connection or want faster seeding.
     */
    protected bool $attachImages = true;

    public function run(): void
    {
        // Ensure Admin user exists
        $admin = User::updateOrCreate(
            ['username' => 'admin'],
            [
                'name' => 'Super Admin',
                'email' => 'admin@ogene983fm.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
        $admin->assignRole('super admin');

        // 1. Categories
        $categories = [
            ['name' => 'Highlife Vibrations', 'slug' => 'highlife-vibrations', 'image' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=800&q=80'],
            ['name' => 'Eastern News', 'slug' => 'eastern-news', 'image' => 'https://images.unsplash.com/photo-1495020689067-958852a7765e?w=800&q=80'],
            ['name' => 'Igbo Culture', 'slug' => 'igbo-culture', 'image' => 'https://images.unsplash.com/photo-1523733230464-444458394982?w=800&q=80'],
            ['name' => 'Political Pulse', 'slug' => 'political-pulse', 'image' => 'https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?w=800&q=80'],
            ['name' => 'Sports Arena', 'slug' => 'sports-arena', 'image' => 'https://images.unsplash.com/photo-1504450758481-7338eba7524a?w=800&q=80'],
            ['name' => 'Entertainment', 'slug' => 'entertainment', 'image' => 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=800&q=80'],
            ['name' => 'Business', 'slug' => 'business', 'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80'],
        ];

        foreach ($categories as $cat) {
            $category = Category::updateOrCreate(['slug' => $cat['slug']], ['name' => $cat['name']]);
            if ($this->attachImages && $category->getMedia('cover_images')->isEmpty()) {
                try {
                    $category->addMediaFromUrl($cat['image'])->toMediaCollection('cover_images');
                } catch (\Exception $e) {}
            }
        }

        // 2. Tags
        $tagList = ['Live', 'Breaking', 'Highlife', 'Culture', 'Sports', 'Politics', 'Interview', 'Requests'];
        foreach ($tagList as $tagName) {
            Tag::firstOrCreate(['name' => $tagName, 'slug' => Str::slug($tagName)]);
        }

        // 3. Presenters (OAPs)
        $presenterData = [
            [
                'name' => 'Chinedu "The Voice" Okafor', 
                'username' => 'thevoice', 
                'email' => 'chinedu@ogene983fm.com',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&q=80'
            ],
            [
                'name' => 'Amaka Anyanwu', 
                'username' => 'queenamaka', 
                'email' => 'amaka@ogene983fm.com',
                'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=800&q=80'
            ],
            [
                'name' => 'DJ Ogene (Obinna Uzor)', 
                'username' => 'djogene', 
                'email' => 'obinna@ogene983fm.com',
                'image' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=800&q=80'
            ],
            [
                'name' => 'Mama Africa (Blessing Eze)', 
                'username' => 'mamaafrica', 
                'email' => 'blessing@ogene983fm.com',
                'image' => 'https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=800&q=80'
            ],
            [
                'name' => 'Emeka Ibe', 
                'username' => 'sportsgen', 
                'email' => 'emeka@ogene983fm.com',
                'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=800&q=80'
            ],
        ];

        $oapRole = Role::firstOrCreate(['name' => 'presenter']);
        $usernameToPresenterId = [];

        foreach ($presenterData as $p) {
            $user = User::updateOrCreate(
                ['username' => $p['username']],
                [
                    'name' => $p['name'],
                    'email' => $p['email'],
                    'password' => Hash::make('password'),
                    'email_verified_at' => now(),
                ]
            );
            $user->assignRole($oapRole);

            $presenter = Presenter::updateOrCreate(['slug' => Str::slug($p['name'])], [
                'name' => $p['name'],
                'slug' => Str::slug($p['name']),
                'twitter_handle' => '@' . $p['username'],
                'instagram_handle' => '@' . $p['username'],
            ]);

            if ($this->attachImages && $presenter->getMedia('avatars')->isEmpty()) {
                try {
                    $presenter->addMediaFromUrl($p['image'])->toMediaCollection('avatars');
                } catch (\Exception $e) {}
            }

            $usernameToPresenterId[$p['username']] = $presenter->id;
        }

        // 4. Programmes & Schedules
        $programmes = [
            [
                'title' => 'Ogene Morning Flight',
                'description' => 'The ultimate wake-up call with news, traffic, and the best morning melodies.',
                'presenters' => ['thevoice'],
                'days' => ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'],
                'times' => ['06:00', '10:00'],
                'image' => 'https://images.unsplash.com/photo-1478737270239-2f02b77fc618?w=800&q=80'
            ],
            [
                'title' => 'Highlife Hour',
                'description' => 'Classic and contemporary highlife music that connects you to the roots.',
                'presenters' => ['queenamaka'],
                'days' => ['monday', 'wednesday', 'friday'],
                'times' => ['11:00', '13:00'],
                'image' => 'https://images.unsplash.com/photo-1514525253361-bee8a4874a73?w=800&q=80'
            ],
            [
                'title' => 'The Request Zone',
                'description' => 'Your playlist, our airwaves. Call in and dedicate your favorite tracks.',
                'presenters' => ['djogene'],
                'days' => ['tuesday', 'thursday'],
                'times' => ['14:00', '16:00'],
                'image' => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?w=800&q=80'
            ],
            [
                'title' => 'Eastern Sports Round-up',
                'description' => 'Covering local leagues, Enyimba FC, and global sports news.',
                'presenters' => ['sportsgen'],
                'days' => ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'],
                'times' => ['17:00', '18:00'],
                'image' => 'https://images.unsplash.com/photo-1508098682722-e99c43a406b2?w=800&q=80'
            ],
            [
                'title' => 'Cultural Night',
                'description' => 'Folk tales, proverbs, and traditional wisdom with Mama Africa.',
                'presenters' => ['mamaafrica'],
                'days' => ['saturday', 'sunday'],
                'times' => ['19:00', '21:00'],
                'image' => 'https://images.unsplash.com/photo-1467307983825-619715426c70?w=800&q=80'
            ],
        ];

        foreach ($programmes as $prog) {
            $p = Programme::updateOrCreate(['title' => $prog['title']], ['title' => $prog['title']]);
            $p->storeAbout($prog['description']);

            if ($this->attachImages && $p->getMedia('cover_images')->isEmpty()) {
                try {
                    $p->addMediaFromUrl($prog['image'])->toMediaCollection('cover_images');
                } catch (\Exception $e) {}
            }

            // Link presenters
            $presenterIds = [];
            foreach ($prog['presenters'] as $username) {
                if (isset($usernameToPresenterId[$username])) {
                    $presenterIds[] = $usernameToPresenterId[$username];
                }
            }
            $p->presenters()->sync($presenterIds);

            // Create Schedules
            foreach ($prog['days'] as $day) {
                $time = ProgrammeTime::firstOrCreate([
                    'day' => ucfirst($day),
                    'from' => strtotime($prog['times'][0]),
                    'to' => strtotime($prog['times'][1]),
                ]);
                $p->programmeTimes()->syncWithoutDetaching([$time->id]);
            }
        }

        // 5. Posts (News)
        $postSamples = [
            ['title' => 'Highlife Legend Oliver De Coque Celebrated in Special Feature', 'cat' => 'highlife-vibrations', 'image' => 'https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=800&q=80'],
            ['title' => 'New Anambra Trade Initiative to Support Local Small Businesses', 'cat' => 'business', 'image' => 'https://images.unsplash.com/photo-1454165833767-027ffea9e77b?w=800&q=80'],
            ['title' => 'Traditional Rulers Convene for Annual Cultural Summit in Enugu', 'cat' => 'igbo-culture', 'image' => 'https://images.unsplash.com/photo-1528605105345-5344ea20e269?w=800&q=80'],
            ['title' => 'Enyimba International FC Prepares for Crucial Continental Match', 'cat' => 'sports-arena', 'image' => 'https://images.unsplash.com/photo-1574629810360-7efbbe195018?w=800&q=80'],
            ['title' => 'Infrastructure Upgrade: Key Roads Completed in Onitsha Heartland', 'cat' => 'eastern-news', 'image' => 'https://images.unsplash.com/photo-1545147986-a9d6f210df77?w=800&q=80'],
            ['title' => 'Ogene FM to Launch Digital Open Mic for Local Talent Discovery', 'cat' => 'entertainment', 'image' => 'https://images.unsplash.com/photo-1516280440614-37939bb912cd?w=800&q=80'],
            ['title' => 'Igbo Language Proficiency: Promoting Native Tongues in Schools', 'cat' => 'igbo-culture', 'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&q=80'],
            ['title' => 'Market Surge: Prices Stabilize in South-East Following Harvest Season', 'cat' => 'business', 'image' => 'https://images.unsplash.com/photo-1488998427799-e3362ed89d82?w=800&q=80'],
        ];

        foreach ($postSamples as $sample) {
            $cat = Category::where('slug', $sample['cat'])->first();
            if (!$cat) continue;

            $post = Post::updateOrCreate(
                ['slug' => Str::slug($sample['title'])],
                [
                    'title' => $sample['title'],
                    'content' => "Ogene 98.3 FM Special Report: " . Str::repeat("Detailed coverage of " . $sample['title'] . ". ", 10),
                    'user_id' => $admin->id,
                    'category_id' => $cat->id,
                    'status' => 'published',
                    'is_featured' => rand(0, 1) == 1,
                    'programme_id' => Programme::inRandomOrder()->first()->id,
                ]
            );
            $post->storeAbout(Str::limit($post->content, 150));

            if ($this->attachImages && $post->getMedia('cover_images')->isEmpty()) {
                try {
                    $post->addMediaFromUrl($sample['image'])->toMediaCollection('cover_images');
                } catch (\Exception $e) {}
            }
        }

        // 6. Song of the Week History
        $songs = [
            ['title' => 'Eastern Vibrations', 'artist' => 'The Ogene Kings', 'album' => 'Voice of the People', 'image' => 'https://images.unsplash.com/photo-1614613535308-eb5fbd3d2c17?w=800&q=80'],
            ['title' => 'Sweet Highlife', 'artist' => 'Chief Stephen Osita Osadebe', 'album' => 'Legendary Hits', 'image' => 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=800&q=80'],
            ['title' => 'Nna Anyi', 'artist' => 'Flavor N\'abania', 'album' => 'Ijele The Traveler', 'image' => 'https://images.unsplash.com/photo-1459749411177-042180ce673c?w=800&q=80'],
        ];

        foreach ($songs as $index => $songData) {
            $image = $songData['image'];
            unset($songData['image']);

            $song = SongOfTheWeek::updateOrCreate(
                ['slug' => Str::slug($songData['title'])],
                array_merge($songData, [
                    'created_at' => now()->subWeeks($index),
                ])
            );

            if ($this->attachImages && $song->getMedia('album_arts')->isEmpty()) {
                try {
                    $song->addMediaFromUrl($image)->toMediaCollection('album_arts');
                } catch (\Exception $e) {}
            }
        }

        // 7. Sponsorships
        $sponsors = [
            ['title' => 'MTN Nigeria', 'link' => 'https://mtn.ng', 'image' => 'https://images.unsplash.com/photo-1614850523296-d8c1af93d400?w=800&q=80'],
            ['title' => 'Hero Lager Beer', 'link' => 'https://hero-lager.com', 'image' => 'https://images.unsplash.com/photo-1532635241-17e820acc59f?w=800&q=80'],
            ['title' => 'Innoson Vehicle Manufacturing', 'link' => 'https://innosonvehicles.com', 'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=800&q=80'],
            ['title' => 'Airtel Africa', 'link' => 'https://airtel.com.ng', 'image' => 'https://images.unsplash.com/photo-1557683316-973673baf926?w=800&q=80'],
        ];

        foreach ($sponsors as $s) {
            $sponsorship = Sponsorship::updateOrCreate(
                ['title' => $s['title']],
                [
                    'link' => $s['link'],
                    'start_time' => now()->subDays(rand(1, 10)),
                    'end_time' => now()->addDays(rand(10, 30)),
                    'is_active' => true,
                    'clicks' => rand(100, 1000),
                    'impressions' => rand(1000, 10000),
                ]
            );

            if ($this->attachImages && $sponsorship->getMedia('banners')->isEmpty()) {
                try {
                    $sponsorship->addMediaFromUrl($s['image'])->toMediaCollection('banners');
                } catch (\Exception $e) {}
            }
        }

        // 8. Engagement Data
        $oapUser = User::where('username', 'djogene')->first();
        if ($oapUser) {
            PublicChatMessage::create(['user_id' => $admin->id, 'message' => 'Welcome to Ogene FM Live Chat!']);
            PublicChatMessage::create(['user_id' => $oapUser->id, 'message' => 'DJ Ogene in the building! Send your requests for the Highlife Hour.']);
            
            $admin->addLoyaltyPoints(50, 'System activation', 'bonus');
            $oapUser->addLoyaltyPoints(100, 'On-air reward', 'bonus');
        }
    }
}
