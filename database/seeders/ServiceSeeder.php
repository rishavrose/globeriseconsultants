<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'title' => 'Study Visa',
                'description' => 'Are you dreaming of studying in countries like Canada, the USA, the UK, Australia, or Europe? Our expert study visa services are here to guide you every step of the way — from choosing the right university to preparing your visa documentation.',
                'icon' => 'assets/img/icons/service2-icon1.svg',
                'link' => '#',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Tour Package',
                'description' => 'Discover affordable and customized tour packages that include travel, stay, sightseeing, and activities — all arranged for your perfect holiday. Book now for hassle-free travel experiences across top destinations!',
                'icon' => 'assets/img/icons/service2-icon2.svg',
                'link' => '#',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Tourist Visa',
                'description' => 'A tourist visa allows you to visit another country for leisure, sightseeing, or short-term travel. We help you with hassle-free visa processing, document preparation, and travel planning so you can explore the world without stress.',
                'icon' => 'assets/img/icons/service2-icon3.svg',
                'link' => '#',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Post Landing Services',
                'description' => 'Globerise provides complete post landing support for students and travelers — including airport pickup, accommodation assistance, SIM cards, job search guidance, and local orientation for easy settlement abroad.',
                'icon' => 'assets/img/icons/service2-icon4.svg',
                'link' => '#',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Currency Exchange',
                'description' => 'Globerise offers reliable currency exchange services with competitive rates for students, tourists, and business travelers. Get fast, secure, and hassle-free forex support for your international needs.',
                'icon' => 'assets/img/icons/service2-icon5.svg',
                'link' => '#',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Flight Ticket Reservation',
                'description' => 'Globerise offers affordable and flexible flight ticket reservations for students, tourists, and professionals. Get expert support for visa-compliant bookings, cancellations, and date changes — all in one place.',
                'icon' => 'assets/img/icons/service2-icon6.svg',
                'link' => '#',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
