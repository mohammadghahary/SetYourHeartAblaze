<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Navigation menu items.
     */
    public array $navItems;

    /**
     * Supported languages for the dropdown.
     */
    public array $languages;

    /**
     * Supported currencies for the dropdown.
     */
    public array $currencies;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->navItems = [
            [
                'title'     => __('header.nav.home'),
                'url'       => route('home'),
                'active'    => request()->routeIs('home') && ! request()->routeIs('services*') && ! request()->routeIs('agent*') && ! request()->routeIs('flights*'),
                'icon'      => null,
                'highlight' => false,
            ],
            [
                'title'     => __('header.nav.services'),
                'url'       => route('services'),
                'active'    => request()->routeIs('services*'),
                'icon'      => null,
                'highlight' => false,
            ],
            [
                'title'     => __('header.nav.agent'),
                'url'       => route('agent'),
                'active'    => request()->routeIs('agent*'),
                'icon'      => null,
                'highlight' => false,
            ],
            [
                'title'     => __('header.nav.flights'),
                'url'       => route('flights'),
                'active'    => request()->routeIs('flights*'),
                'icon'      => null,
                'highlight' => false,
            ],
            [
                'title'     => __('header.nav.telemedicine'),
                'url'       => route('home') . '#telemedicine',
                'active'    => false,
                'icon'      => 'videocam',
                'highlight' => true,
            ],
            [
                'title'     => __('header.nav.track_case'),
                'url'       => route('home') . '#track-case',
                'active'    => false,
                'icon'      => null,
                'highlight' => false,
            ],
            [
                'title'     => __('header.nav.about'),
                'url'       => route('home') . '#about',
                'active'    => false,
                'icon'      => null,
                'highlight' => false,
            ],
        ];

        $this->languages = [
            'fa' => 'فارسی',
            'ar' => 'العربية',
            'en' => 'English',
        ];

        $this->currencies = [
            'USD' => 'USD ($)',
            'AED' => 'AED (د.إ)',
            'OMR' => 'OMR (ر.ع)',
            'KWD' => 'KWD (د.ك)',
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}