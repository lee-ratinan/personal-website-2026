<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Home extends BaseController
{

    /**
     * Home page
     * @return string
     */
    public function index(): string
    {
        $data = [
            'locale' => $this->request->getLocale()
        ];
        return view('home', $data);
    }

    /**
     * Personal Life page
     * @return string
     */
    public function personal_life(): string
    {
        $data = [
            'locale'            => $this->request->getLocale(),
            'countries_visited' => 10,
            'distant_traveled'  => 192000,
            'flights'           => 102,
            'vacations'         => 15,
            'galleries'         => [
                [
                    'code'      => 'kix2026',
                    'filters'   => ['east-asia'],
                    'title'     => 'エイキンのソーロートラベル',
                    'locations' => [
                        'osaka', 'nara', 'hokuei', 'tottori', 'kinosakionsen', 'himeji', 'kobe', 'kyoto', 'uji',
                        'tokyo', 'fujisan'
                    ],
                    'dates'     => ['2026-01-06', '2026-01-15'],
                    'detail'    => 'It’s my first Japan solo trip in the winter!',
                ],
                [
                    'code'      => 'hkt2025',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'เที่ยวภูเก็ต 2568',
                    'locations' => ['phuket', 'phang-nga', 'krabi'],
                    'dates'     => ['2025-11-14', '2025-11-17'],
                    'detail'    => 'Celebrating birthday in the sea~~',
                ],
                [
                    'code'      => 'kul2025',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Kuala Lumpur Trip 2025',
                    'locations' => ['bandar-utama', 'kuala-lumpur'],
                    'dates'     => ['2025-04-22', '2025-04-30'],
                    'detail'    => 'A strange work trip with lots of free time to enjoy.',
                ],
                [
                    'code'      => 'bkk2025',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'เที่ยวกรุงเทพ 2568',
                    'locations' => ['bangkok'],
                    'dates'     => ['2025-03-06', '2025-03-10'],
                    'detail'    => 'Cool trip',
                ],
                [
                    'code'      => 'tpe2024',
                    'filters'   => ['east-asia'],
                    'title'     => '花蓮、台北 113年',
                    'locations' => ['taipei', 'hualien'],
                    'dates'     => ['2024-10-23', '2024-10-27'],
                    'detail'    => 'Taiwan PRIDE 2024, Capybara Encounter, Hiking, and 某某 Pilgrimage',
                ],
                [
                    'code'      => 'dmk2024b',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'กรุงเทพอีกแล้ว 2567',
                    'locations' => ['bangkok'],
                    'dates'     => ['2024-09-04', '2024-09-11'],
                    'detail'    => 'Escape boring Singapore again',
                ],
                [
                    'code'      => 'cgk2024b',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Jakarta 2024',
                    'locations' => ['jakarta'],
                    'dates'     => ['2024-08-23', '2024-08-27'],
                    'detail'    => 'Relaxing in Jakarta just for a while',
                ],
                [
                    'code'      => 'pen2024',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Pulau Pinang 2024',
                    'locations' => ['george-town'],
                    'dates'     => ['2024-06-21', '2024-06-23'],
                    'detail'    => 'A quick stop in Penang, chasing murals and fun',
                ],
                [
                    'code'      => 'kix2024',
                    'filters'   => ['east-asia'],
                    'title'     => '関西と関東 2024',
                    'locations' => ['osaka', 'arimaonsen', 'kobe', 'nara', 'kyoto', 'tokyo', 'yokohama', 'fujisawa'],
                    'dates'     => ['2024-04-22', '2024-05-02'],
                    'detail'    => 'First time in Kansai~ Have fun!',
                ],
                [
                    'code'      => 'cgk2024a',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Karawaci 2024',
                    'locations' => ['karawaci'],
                    'dates'     => ['2024-03-24', '2024-03-27'],
                    'detail'    => 'Work and fun in Karawaci ~ meeting with the bankers',
                ],
                [
                    'code'      => 'dmk2024a',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'พัทยา-กรุงเทพ 2567',
                    'locations' => ['pattaya', 'bangkok'],
                    'dates'     => ['2024-02-05', '2024-02-15'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'jhb2023',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Johor Bahru 2023',
                    'locations' => ['johor-bahru'],
                    'dates'     => ['2023-12-16', '2023-12-17'],
                    'detail'    => 'A quick relaxing trip in JB',
                ],
                [
                    'code'      => 'tpe2023',
                    'filters'   => ['east-asia'],
                    'title'     => '台北 112年',
                    'locations' => ['taipei'],
                    'dates'     => ['2023-10-26', '2023-10-30'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'dps2023',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Jakarta-Bali 2023',
                    'locations' => ['jakarta', 'bali'],
                    'dates'     => ['2023-10-14', '2023-10-20'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'ceb2023',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Cebu 2023',
                    'locations' => ['cebu'],
                    'dates'     => ['2023-06-29', '2023-07-06'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'jhb2022',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Desaru 2022',
                    'locations' => ['johor-bahru'],
                    'dates'     => ['2022-11-12', '2022-11-13'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'sgn2022',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Ho Chi Minh City 2022',
                    'locations' => ['ho-chi-minh-city'],
                    'dates'     => ['2022-10-28', '2022-10-31'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'hkt2022',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'ภูเก็ตแซนด์บ๊อก',
                    'locations' => ['phuket', 'bangkok'],
                    'dates'     => ['2022-05-15', '2022-05-23'],
                    'detail'    => 'x',
                ],
                //                [
                //                    'code'      => 'x',
                //                    'filters'   => ['x'],
                //                    'title'     => 'x',
                //                    'locations' => ['x'],
                //                    'dates'     => ['x', 'x'],
                //                    'detail'    => 'x',
                //                ],
                //                [
                //                    'code'      => 'x',
                //                    'filters'   => ['x'],
                //                    'title'     => 'x',
                //                    'locations' => ['x'],
                //                    'dates'     => ['x', 'x'],
                //                    'detail'    => 'x',
                //                ],
            ],
            'bucket_lists'      => [
                [
                    'code'      => 'flowrider',
                    'filters'   => ['activity'],
                    'title'     => 'FlowRider',
                    'details'   => 'Lorem ipsum',
                    'locations' => [],
                    'dates'     => []
                ],
                [
                    'code'      => 'petronas-towers',
                    'filters'   => ['observation'],
                    'title'     => 'Petronas Towers',
                    'details'   => 'Lorem ipsum',
                    'locations' => [],
                    'dates'     => []
                ],
            ]
        ];
        return view('personal_life', $data);
    }

    /**
     * Redirect to WhatsApp
     * @return RedirectResponse
     */
    public function whatsapp(): RedirectResponse
    {
        return redirect()->to('https://api.whatsapp.com/send/?phone=6597754577&text=Hi+Nat%2C+I+clicked+this+link+from+your+personal+website.+Can+we+chat%3F&type=phone_number&app_absent=0');
    }
}
