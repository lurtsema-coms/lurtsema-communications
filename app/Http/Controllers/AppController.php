<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Component\Finder\Finder;
use Throwable;

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
            return view('services.business-consulting', ['pageTitle' => 'Services - Business Consulting']);
        } else if ($service === 'social-media-marketing') {
            return view('services.social-media-marketing', ['pageTitle' => 'Services - Social Media Marketing']);
        } else if ($service === 'website-development') {
            return view('services.website-development', ['pageTitle' => 'Services - Website Development']);
        } else if ($service === 'seo-optimization') {
            return view('services.seo-optimization', ['pageTitle' => 'Services - SEO Optimization']);
        } else if ($service === 'political-outreach') {
            return view('services.political-outreach', ['pageTitle' => 'Services - Political Outreach']);
        } else if ($service === 'videography') {
            return view('services.videography', ['pageTitle' => 'Services - Videography']);
        } else if ($service === 'google-ads') {
            return view('services.google-ads', ['pageTitle' => 'Services - Google Ads']);
        } else if ($service === 'graphic-design') {
            return view('services.graphic-design', ['pageTitle' => 'Services - Graphic Design']);
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
                'name' => 'Heaven Limin',
                'title' => 'Senior Creative Manager',
                'img_link' => asset('images/team-photos/team-member-04.webp'),
                'linked_in' => 'https://www.linkedin.com/in/christian-heaven-limin-334241205/',
            ],
            [
                'name' => 'Irene Martinez',
                'title' => 'Junior Operations Manager',
                'img_link' => asset('images/team-photos/team-member-12.webp'),
                'linked_in' => 'https://www.linkedin.com/in/irene-martinez-354353194/',
            ],
            [
                'name' => 'Joseph Daquioag',
                'title' => 'Video Editor',
                'img_link' => asset('images/team-photos/team-member-05.webp'),
                'linked_in' => 'https://www.linkedin.com/in/joseph-daquioag-a24a8323b/',
            ],
            [
                'name' => 'Jed Vargas',
                'title' => 'Graphic Designer',
                'img_link' => asset('images/team-photos/team-member-14.2.webp'),
                'linked_in' => 'https://www.linkedin.com/in/jed-vargas/',
                'scale' => 'scale-110',
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
        ];

        $data['pageTitle'] = 'About Us';
        return view('about-us', $data);
    }

    public function contactUs(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;

        try {
            $details = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'form_message' => $message,
            ];
            Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactUsMail($details));
            $returnStatus = 'success';
            $returnMessage = "Thanks for contacting us. We'll get back to you as soon as possible.";
        } catch (Throwable $e) {
            $returnStatus = 'error';
            $returnMessage = "Something went wrong, please try again later.";
        }
        return redirect()->back()->with($returnStatus, $returnMessage);
    }

    public function downloadContactUsResponses(Request $request)
    {
        $filename = 'data/form-responses.csv';
        $filePath = storage_path('app/' . $filename);

        if (!Storage::exists($filename)) {
            abort(404);
        }

        // Generate a response to force the download of the file
        return response()->download($filePath);
    }
}
