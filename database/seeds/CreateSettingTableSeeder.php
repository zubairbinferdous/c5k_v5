<?php

use App\Setting;
use Illuminate\Database\Seeder;

class CreateSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $setting = Setting::create([

            'title'=>'Journal And Publication',
            'description'=>'Journal And Publication - Peer Review System is a journal or research publication management application and website, Where Author can post their articles and Reviewer can approve or reject the articles. The website is a showcase of articles where a visitor can read it. It has some strong module like articles, comments, reviewers, authors and site managements',
            'keywords'=>'article, article manager, news portal, knowledge base, newspaper, helpdesk, knowledgebase, journal, paper, peer review, publication, publisher, magazine, academic, research',
            'logo_path'=>'logo.png',
            'favicon_path'=>'favicon.png',
            'phone_one'=>'+880123456789',
            'email_one'=>'example@mail.com',
            'contact_address'=>'Mirpur, Dhaka',
            'contact_mail'=>'example@mail.com',
            'footer_text'=>'2023 - Journal And Publication | Created By_ <a href="https://hitechparks.com/" target="_blank">Hi-Tech Parks</a>',
            'status'=>'1'
            
        ]);
    }
}
