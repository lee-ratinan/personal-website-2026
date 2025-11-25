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
                    'locations' => ['cebu', 'mactan', 'oslob', 'alegria'],
                    'dates'     => ['2023-06-29', '2023-07-06'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'jhb2022',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Desaru 2022',
                    'locations' => ['johor-bahru', 'desaru'],
                    'dates'     => ['2022-11-12', '2022-11-13'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'sgn2022',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Sài Gòn 2022',
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
                [
                    'code'      => 'IPH2020',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Ipoh 2020',
                    'locations' => ['ipoh'],
                    'dates'     => ['2020-01-06', '2020-01-10'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'syd2019',
                    'filters'   => ['oceania'],
                    'title'     => 'Sydney &amp; Melbourne 2019',
                    'locations' => ['sydney', 'melbourne'],
                    'dates'     => ['2019-10-17', '2019-10-26'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'tpe2018',
                    'filters'   => ['east-asia'],
                    'title'     => '台北+台中 107年',
                    'locations' => ['taipei', 'taichung'],
                    'dates'     => ['2018-11-11', '2018-11-17'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'utp2018',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'เที่ยวพัทยา กับ　GrapeVine',
                    'locations' => ['pattaya'],
                    'dates'     => ['2018-03-XX'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'hhq2017',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'ทริปกาญจน์ กับ GrapeVine',
                    'locations' => ['kanchanaburi'],
                    'dates'     => ['2017-10-XX'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'bth2016',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Pulau Batam 2016',
                    'locations' => ['batam'],
                    'dates'     => ['2016-09-11'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'nrt2016',
                    'filters'   => ['east-asia'],
                    'title'     => '日本の関東 2016',
                    'locations' => ['tokyo', 'yokohama', 'kamakura'],
                    'dates'     => ['2016-06-11', '2016-06-16'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'kul2014',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Kuala Lumpur dan Pulau Langkawi',
                    'locations' => ['kuala-lumpur', 'langkawi'],
                    'dates'     => ['2014-05-12', '2014-05-16'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'hhq2013',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'ชะอำ/หัวหิน',
                    'locations' => ['hua-hin', 'cha-am'],
                    'dates'     => ['2013-03-XX'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'sin2012b',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Singapore 2012 Again!',
                    'locations' => ['singapore'],
                    'dates'     => ['2012-08-11', '2012-08-13'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'sin2012a',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Singapore 2012',
                    'locations' => ['singapore'],
                    'dates'     => ['2012-04-27', '2012-05-01'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'cvg2010',
                    'filters'   => ['america'],
                    'title'     => 'Work-Travel Trip @ Cincinnati!',
                    'locations' => ['cincinnati', 'covington', 'newport', 'chicago', 'new-york-city'],
                    'dates'     => ['2010-03-16', '2010-06-07'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'sin2006',
                    'filters'   => ['southeast-asia'],
                    'title'     => 'Singapore School Trip 2006',
                    'locations' => ['singapore'],
                    'dates'     => ['2006-04-09', '2006-04-18'],
                    'detail'    => 'x',
                ]
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
