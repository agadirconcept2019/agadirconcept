<?php

declare(strict_types=1);

namespace App\Http\Controllers\PublicSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('public.home');
    }

    public function services(): View
    {
        return view('public.services.index', [
            'services' => config('marketing_services.items', []),
        ]);
    }

    public function serviceDetail(string $slug): View|Response
    {
        $services = collect(config('marketing_services.items', []));
        $service = $services->firstWhere('slug', $slug);

        if (!$service) {
            abort(404);
        }

        return view('public.services.show', ['service' => $service]);
    }

    public function about(): View
    {
        return view('public.about');
    }

    public function contactQuote(): View
    {
        return view('public.contact-quote');
    }

    public function faq(): View
    {
        return view('public.faq', [
            'faqItems' => config('marketing_services.faq', []),
        ]);
    }

    public function platform(): View
    {
        return view('public.platform');
    }

    public function modules(): View
    {
        return view('public.modules.index');
    }

    public function crmModule(): View
    {
        return view('public.modules.crm');
    }

    public function projectManagerModule(): View
    {
        return view('public.modules.project-manager');
    }

    public function clientSpace(): View
    {
        return view('public.client-space');
    }
}
