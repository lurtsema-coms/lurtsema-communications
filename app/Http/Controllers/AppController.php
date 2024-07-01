<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Finder\Finder;


class AppController extends Controller
{
    public function home()
    {
        $data = [];

        $data['businessLogos'] = (new Finder())
            ->files()
            ->in(public_path('images/all-business-clients'))
            ->depth('== 0')
            ->name('*.jpg')
            ->name('*.jpeg')
            ->name('*.png')
            ->name('*.gif')
            ->name('*.bmp');

        $data['politicalLogos'] = (new Finder())
            ->files()
            ->in(public_path('images/all-political-clients'))
            ->depth('== 0')
            ->depth('== 0')
            ->name('*.jpg')
            ->name('*.jpeg')
            ->name('*.png')
            ->name('*.gif')
            ->name('*.bmp');

        return view('home', $data);
    }

    public function services($service)
    {
        if ($service === 'business-consulting') {
            return view('services.business-consulting');
        } else if ($service === 'social-media-marketing') {
            return view('services.social-media-marketing');
        } else if ($service === 'website-development') {
            return view('services.website-development');
        } else if ($service === 'seo-optimization') {
            return view('services.seo-optimization');
        } else if ($service === 'political-outreach') {
            return view('services.political-outreach');
        } else if ($service === 'videography') {
            return view('services.videography');
        } else {
            abort(404);
        }
    }

    public function aboutUs()
    {
        $data = [];
        $data['team'] = [
            [
                'name' => 'Joe Lurtsema',
                'title' => 'CEO/FOUNDER',
                'img_link' => asset('images/team-photos/team-member-01.webp'),
                'linked_in' => 'https://www.linkedin.com/in/joseph-lurtsema-683a5786/',
            ],
            [
                'name' => 'Jubie Nebalga',
                'title' => 'Director of Marketing & Sales',
                'img_link' => asset('images/team-photos/team-member-03.webp'),
                'linked_in' => 'https://www.linkedin.com/in/jubie-nebalga-75b99020a/',
            ],
            [
                'name' => 'Shaine Agonia',
                'title' => 'Senior Communications Manager',
                'img_link' => asset('images/team-photos/team-member-02.webp'),
                'linked_in' => 'https://www.linkedin.com/in/shaineagonia/',
            ],
            [
                'name' => 'Irene Martinez',
                'title' => 'Executive Assistant',
                'img_link' => asset('images/team-photos/team-member-12.webp'),
                'linked_in' => 'https://www.linkedin.com/in/irene-martinez-354353194/',
            ],
            [
                'name' => 'Heaven Limin',
                'title' => 'Creative Designer',
                'img_link' => asset('images/team-photos/team-member-04.webp'),
                'linked_in' => 'https://www.linkedin.com/in/christian-heaven-limin-334241205/',
            ],
            [
                'name' => 'Joseph Daquioag',
                'title' => 'Video Editor',
                'img_link' => asset('images/team-photos/team-member-05.webp'),
                'linked_in' => 'https://www.linkedin.com/in/joseph-daquioag-a24a8323b/',
            ],
            [
                'name' => 'Manny Dagondon',
                'title' => 'Junior Graphic Designer',
                'img_link' => asset('images/team-photos/team-member-10.webp'),
                'linked_in' => 'https://www.linkedin.com/in/manny-lloyd-dagondon-72505873/',
            ],
            [
                'name' => 'Fillinor Gunio',
                'title' => 'Full Stack Web Developer',
                'img_link' => asset('images/team-photos/team-member-06.webp'),
                'linked_in' => 'https://www.linkedin.com/in/fillinor-gunio-57347a137/',
            ],
            [
                'name' => 'Gabriel Quing',
                'title' => 'Full Stack Web Developer',
                'img_link' => asset('images/team-photos/team-member-07.webp'),
                'linked_in' => 'https://www.linkedin.com/in/gabriel-camerone-quing-1b849b24b/',
            ],
            [
                'name' => 'Patrick Punzalan',
                'title' => 'Full Stack Web Developer',
                'img_link' => asset('images/team-photos/team-member-08.webp'),
                'linked_in' => 'https://www.linkedin.com/in/patrick-lester-punzalan-077546243/',
            ],
            [
                'name' => 'Denise Bautista',
                'title' => 'Junior Copywriter',
                'img_link' => asset('images/team-photos/team-member-11.webp'),
                'linked_in' => 'https://www.linkedin.com/in/denisebautista20031213/',
            ],
            [
                'name' => 'Regina Villa',
                'title' => 'Bookkeeper & Accountant',
                'img_link' => asset('images/team-photos/team-member-09.webp'),
                'linked_in' => 'https://www.linkedin.com/in/regina-s-vila-7154421a0/',
            ],
        ];
        return view('about-us', $data);
    }
}
