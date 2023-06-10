<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::create([
            'title' => 'UX Designer',
            'tags' => 'user experience, design, wireframing, prototyping',
            'company' => 'DesignCo',
            'location' => 'London, UK',
            'email' => 'uxdesign@example.com',
            'website' => 'http://example.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'
        ]);

        Listing::create([
            'title' => 'Product Manager',
            'tags' => 'product management, agile, roadmap, stakeholder',
            'company' => 'ProductMasters',
            'location' => 'Berlin, Germany',
            'email' => 'productmanager@example.com',
            'website' => 'http://example.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'
        ]);

        Listing::create([
            'title' => 'DevOps Engineer',
            'tags' => 'DevOps, automation, AWS, Docker, Kubernetes',
            'company' => 'CloudOps',
            'location' => 'Toronto, Canada',
            'email' => 'devops@example.com',
            'website' => 'http://example.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'
        ]);

        Listing::create([
            'title' => 'Full Stack Developer',
            'tags' => 'full stack, development, JavaScript, React, Node.js',
            'company' => 'TechCo',
            'location' => 'San Diego, CA',
            'email' => 'fullstack@example.com',
            'website' => 'http://example.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'
        ]);

        Listing::create([
            'title' => 'UI Designer',
            'tags' => 'user interface, design, visual, Adobe Creative Suite',
            'company' => 'CreativeDesign',
            'location' => 'Sydney, Australia',
            'email' => 'uidesign@example.com',
            'website' => 'http://example.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'
        ]);

        Listing::create([
            'title' => 'Data Analyst',
            'tags' => 'data analysis, SQL, Excel, visualization',
            'company' => 'Data Insights',
            'location' => 'Melbourne, Australia',
            'email' => 'dataanalyst@example.com',
            'website' => 'http://example.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'
        ]);

        Listing::create([
            'title' => 'Cybersecurity Specialist',
            'tags' => 'cybersecurity, information security, network security',
            'company' => 'SecureTech',
            'location' => 'Washington, D.C., USA',
            'email' => 'cybersecurity@example.com',
            'website' => 'http://example.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'
        ]);

        Listing::create([
            'title' => 'Mobile App Developer',
            'tags' => 'mobile app, iOS, Android, Swift, Kotlin',
            'company' => 'AppWorks',
            'location' => 'Toronto, Canada',
            'email' => 'mobiledev@example.com',
            'website' => 'http://example.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'
        ]);

        Listing::create([
            'title' => 'QA Engineer',
            'tags' => 'quality assurance, testing, automation, bug tracking',
            'company' => 'QualityTest',
            'location' => 'Seattle, WA',
            'email' => 'qaengineer@example.com',
            'website' => 'http://example.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'
        ]);

        Listing::create([
            'title' => 'Technical Writer',
            'tags' => 'technical writing, documentation, communication',
            'company' => 'TechDocs',
            'location' => 'San Francisco, CA',
            'email' => 'techwriter@example.com',
            'website' => 'http://example.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'
        ]);

    }
}