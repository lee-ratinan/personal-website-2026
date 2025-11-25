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
            'locale'               => $this->request->getLocale(),
            'countries_visited'    => 10,
            'distant_traveled'     => 192000,
            'flights'              => 102,
            'galleries'            => [
                [
                    'code'      => 'kix2026',
                    'filter'    => 'east-asia',
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
                    'filter'    => 'southeast-asia',
                    'title'     => 'เที่ยวภูเก็ต 2568',
                    'locations' => ['phuket', 'phang-nga', 'krabi'],
                    'dates'     => ['2025-11-14', '2025-11-17'],
                    'detail'    => 'Celebrating birthday in the sea~~',
                ],
                [
                    'code'      => 'kul2025',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Kuala Lumpur Trip 2025',
                    'locations' => ['bandar-utama', 'kuala-lumpur'],
                    'dates'     => ['2025-04-22', '2025-04-30'],
                    'detail'    => 'A strange work trip with lots of free time to enjoy.',
                ],
                [
                    'code'      => 'bkk2025',
                    'filter'    => 'southeast-asia',
                    'title'     => 'เที่ยวกรุงเทพ 2568',
                    'locations' => ['bangkok'],
                    'dates'     => ['2025-03-06', '2025-03-10'],
                    'detail'    => 'Cool trip',
                ],
                [
                    'code'      => 'tpe2024',
                    'filter'    => 'east-asia',
                    'title'     => '花蓮、台北 113年',
                    'locations' => ['taipei', 'hualien'],
                    'dates'     => ['2024-10-23', '2024-10-27'],
                    'detail'    => 'Taiwan PRIDE 2024, Capybara Encounter, Hiking, and 某某 Pilgrimage',
                ],
                [
                    'code'      => 'dmk2024b',
                    'filter'    => 'southeast-asia',
                    'title'     => 'กรุงเทพอีกแล้ว 2567',
                    'locations' => ['bangkok'],
                    'dates'     => ['2024-09-04', '2024-09-11'],
                    'detail'    => 'Escape boring Singapore again',
                ],
                [
                    'code'      => 'cgk2024b',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Jakarta 2024',
                    'locations' => ['jakarta'],
                    'dates'     => ['2024-08-23', '2024-08-27'],
                    'detail'    => 'Relaxing in Jakarta just for a while',
                ],
                [
                    'code'      => 'pen2024',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Pulau Pinang 2024',
                    'locations' => ['george-town'],
                    'dates'     => ['2024-06-21', '2024-06-23'],
                    'detail'    => 'A quick stop in Penang, chasing murals and fun',
                ],
                [
                    'code'      => 'kix2024',
                    'filter'    => 'east-asia',
                    'title'     => '関西と関東 2024',
                    'locations' => ['osaka', 'arimaonsen', 'kobe', 'nara', 'kyoto', 'tokyo', 'yokohama', 'fujisawa'],
                    'dates'     => ['2024-04-22', '2024-05-02'],
                    'detail'    => 'First time in Kansai~ Have fun!',
                ],
                [
                    'code'      => 'cgk2024a',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Karawaci 2024',
                    'locations' => ['karawaci'],
                    'dates'     => ['2024-03-24', '2024-03-27'],
                    'detail'    => 'Work and fun in Karawaci ~ meeting with the bankers',
                ],
                [
                    'code'      => 'dmk2024a',
                    'filter'    => 'southeast-asia',
                    'title'     => 'พัทยา-กรุงเทพ 2567',
                    'locations' => ['pattaya', 'bangkok'],
                    'dates'     => ['2024-02-05', '2024-02-15'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'jhb2023',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Johor Bahru 2023',
                    'locations' => ['johor-bahru'],
                    'dates'     => ['2023-12-16', '2023-12-17'],
                    'detail'    => 'A quick relaxing trip in JB',
                ],
                [
                    'code'      => 'tpe2023',
                    'filter'    => 'east-asia',
                    'title'     => '台北 112年',
                    'locations' => ['taipei'],
                    'dates'     => ['2023-10-26', '2023-10-30'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'dps2023',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Jakarta-Bali 2023',
                    'locations' => ['jakarta', 'bali'],
                    'dates'     => ['2023-10-14', '2023-10-20'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'ceb2023',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Cebu 2023',
                    'locations' => ['cebu', 'mactan', 'oslob', 'alegria'],
                    'dates'     => ['2023-06-29', '2023-07-06'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'jhb2022',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Desaru 2022',
                    'locations' => ['johor-bahru', 'desaru'],
                    'dates'     => ['2022-11-12', '2022-11-13'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'sgn2022',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Sài Gòn 2022',
                    'locations' => ['ho-chi-minh-city'],
                    'dates'     => ['2022-10-28', '2022-10-31'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'hkt2022',
                    'filter'    => 'southeast-asia',
                    'title'     => 'ภูเก็ตแซนด์บ๊อก',
                    'locations' => ['phuket', 'phang-nga', 'krabi', 'bangkok'],
                    'dates'     => ['2022-05-15', '2022-05-23'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'IPH2020',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Ipoh 2020',
                    'locations' => ['ipoh'],
                    'dates'     => ['2020-01-06', '2020-01-10'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'syd2019',
                    'filter'    => 'oceania',
                    'title'     => 'Sydney &amp; Melbourne 2019',
                    'locations' => ['sydney', 'melbourne'],
                    'dates'     => ['2019-10-17', '2019-10-26'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'tpe2018',
                    'filter'    => 'east-asia',
                    'title'     => '台北+台中 107年',
                    'locations' => ['taipei', 'taichung'],
                    'dates'     => ['2018-11-11', '2018-11-17'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'utp2018',
                    'filter'    => 'southeast-asia',
                    'title'     => 'เที่ยวพัทยา กับ　GrapeVine',
                    'locations' => ['pattaya'],
                    'dates'     => ['2018-03-XX'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'hhq2017',
                    'filter'    => 'southeast-asia',
                    'title'     => 'ทริปกาญจน์ กับ GrapeVine',
                    'locations' => ['kanchanaburi'],
                    'dates'     => ['2017-10-11'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'bth2016',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Pulau Batam 2016',
                    'locations' => ['batam'],
                    'dates'     => ['2016-09-11'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'nrt2016',
                    'filter'    => 'east-asia',
                    'title'     => '日本の関東 2016',
                    'locations' => ['tokyo', 'yokohama', 'kamakura'],
                    'dates'     => ['2016-06-11', '2016-06-16'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'kul2014',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Kuala Lumpur dan Pulau Langkawi',
                    'locations' => ['kuala-lumpur', 'langkawi'],
                    'dates'     => ['2014-05-12', '2014-05-16'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'hhq2013',
                    'filter'    => 'southeast-asia',
                    'title'     => 'ชะอำ/หัวหิน',
                    'locations' => ['hua-hin', 'cha-am'],
                    'dates'     => ['2013-03-XX'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'sin2012b',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Singapore 2012 Again!',
                    'locations' => ['singapore'],
                    'dates'     => ['2012-08-11', '2012-08-13'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'sin2012a',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Singapore 2012',
                    'locations' => ['singapore'],
                    'dates'     => ['2012-04-27', '2012-05-01'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'cvg2010',
                    'filter'    => 'america',
                    'title'     => 'Work-Travel Trip @ Cincinnati!',
                    'locations' => ['cincinnati', 'covington', 'newport', 'chicago', 'new-york-city'],
                    'dates'     => ['2010-03-16', '2010-06-07'],
                    'detail'    => 'x',
                ],
                [
                    'code'      => 'sin2006',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Singapore School Trip 2006',
                    'locations' => ['singapore'],
                    'dates'     => ['2006-04-09', '2006-04-18'],
                    'detail'    => 'x',
                ]
            ],
            'bucket_lists'         => [
                // 2026
                // 2025
                [
                    'code'      => 'indoor-skydiving',
                    'filter'    => 'adventure',
                    'title'     => 'Indoor Skydiving',
                    'locations' => ['bandar-utama'],
                    'dates'     => ['2025-04-27']
                ],
                // 2024
                [
                    'code'      => 'the-only-one',
                    'filter'    => 'pilgrimage',
                    'title'     => 'The On1y One 某某',
                    'locations' => ['taipei'],
                    'dates'     => ['2024-10-25'],
                ],
                [
                    'code'      => 'taiwanese-aboriginal-clothes',
                    'filter'    => 'cultural',
                    'title'     => 'Taiwanese Aboriginal Clothes',
                    'locations' => ['hualien'],
                    'dates'     => ['2024-10-23']
                ],
                [
                    'code'      => 'komtar-tower',
                    'filter'    => 'observatory',
                    'title'     => 'KOMTAR Tower',
                    'locations' => ['george-town'],
                    'dates'     => ['2024-06-22']
                ],
                [
                    'code'      => 'archery',
                    'filter'    => 'adventure',
                    'title'     => 'Archery',
                    'locations' => ['osaka', 'hualien'],
                    'dates'     => ['2024-05-01', '2024-10-23']
                ],
                [
                    'code'      => 'tsutenkaku-tower',
                    'filter'    => 'observatory',
                    'title'     => 'Tsutenkaku Tower 通天閣',
                    'locations' => ['osaka'],
                    'dates'     => ['2024-05-01']
                ],
                [
                    'code'      => 'shibuya-scramble-square',
                    'filter'    => 'observatory',
                    'title'     => 'Shibuya Scramble Square 渋谷スクランブルスクエア',
                    'locations' => ['tokyo'],
                    'dates'     => ['2024-04-30']
                ],
                [
                    'code'      => 'your-name',
                    'filter'    => 'pilgrimage',
                    'title'     => 'Your Name 君の名は',
                    'locations' => ['tokyo'],
                    'dates'     => ['2024-04-29'],
                ],
                [
                    'code'      => 'shinkansen',
                    'filter'    => 'others',
                    'title'     => 'Shinkansen 新幹線',
                    'locations' => ['kyoto', 'tokyo'],
                    'dates'     => ['2024-04-27', '2024-05-01'],
                ],
                [
                    'code'      => 'crossroad-in-the-ancient-capital',
                    'filter'    => 'pilgrimage',
                    'title'     => 'Crossroad In the Ancient Capital 迷宮の十字路',
                    'locations' => ['kyoto'],
                    'dates'     => ['2024-04-26'],
                ],
                [
                    'code'      => 'abeno-harukas',
                    'filter'    => 'observatory',
                    'title'     => 'Abeno Harukas あべのハルカス',
                    'locations' => ['osaka'],
                    'dates'     => ['2024-04-25']
                ],
                [
                    'code'      => 'umeda-sky-building',
                    'filter'    => 'observatory',
                    'title'     => 'Umeda Sky Building 梅田スカイビル',
                    'locations' => ['osaka'],
                    'dates'     => ['2024-04-25']
                ],
                [
                    'code'      => 'seshin',
                    'filter'    => 'cultural',
                    'title'     => 'Seshin 세신',
                    'locations' => ['pattaya', 'osaka'],
                    'dates'     => ['2024-02-08', '2024-05-01'],
                ],
                [
                    'code'      => 'surfing-flowrider',
                    'filter'    => 'adventure',
                    'title'     => 'Surfing (FlowRider)',
                    'locations' => ['pattaya', 'bandar-utama', 'phuket'],
                    'dates'     => ['2024-02-06', '2025-04-26', '2025-11-15']
                ],
                // 2023
                [
                    'code'      => 'pride-parade',
                    'filter'    => 'cultural',
                    'title'     => 'Pride Parade',
                    'locations' => ['taipei'],
                    'dates'     => ['2023-10-28', '2024-10-26'],
                ],
                [
                    'code'      => 'surfing',
                    'filter'    => 'adventure',
                    'title'     => 'Surfing',
                    'locations' => ['bali'],
                    'dates'     => ['2023-10-18']
                ],
                [
                    'code'      => 'scuba-diving',
                    'filter'    => 'adventure',
                    'title'     => 'Scuba Diving',
                    'locations' => ['bali'],
                    'dates'     => ['2023-10-18']
                ],
                [
                    'code'      => 'Balinese-clothes',
                    'filter'    => 'cultural',
                    'title'     => 'Balinese Clothes',
                    'locations' => ['bali'],
                    'dates'     => ['2023-10-16']
                ],
                [
                    'code'      => 'canyoneering',
                    'filter'    => 'adventure',
                    'title'     => 'Canyoneering',
                    'locations' => ['alegria'],
                    'dates'     => ['2023-07-04']
                ],
                // 2022
                [
                    'code'      => 'bitexco-financial-tower',
                    'filter'    => 'observatory',
                    'title'     => 'Bitexco Financial Tower Tháp Tài chính Bitexco',
                    'locations' => ['ho-chi-minh-city'],
                    'dates'     => ['2022-10-30']
                ],
                [
                    'code'      => 'vincom-landmark-81',
                    'filter'    => 'observatory',
                    'title'     => 'Vincom Landmark 81',
                    'locations' => ['ho-chi-minh-city'],
                    'dates'     => ['2022-10-29']
                ],
                [
                    'code'      => 'mahanakhon',
                    'filter'    => 'observatory',
                    'title'     => 'Mahanakhon มหานคร',
                    'locations' => ['bangkok'],
                    'dates'     => ['2022-05-23', '2025-03-06']
                ],
                [
                    'code'      => 'naturist-resort ',
                    'filter'    => 'cultural',
                    'title'     => 'Naturist Resort',
                    'locations' => ['phuket', 'pattaya'],
                    'dates'     => ['2022-05-XX', '2024-02-XX'],
                ],
                [
                    'code'      => 'zip-lining',
                    'filter'    => 'adventure',
                    'title'     => 'Zip-lining',
                    'locations' => ['phuket'],
                    'dates'     => ['2022-05-18']
                ],
                [
                    'code'      => 'jet-skiing',
                    'filter'    => 'adventure',
                    'title'     => 'Jet-skiing',
                    'locations' => ['phuket'],
                    'dates'     => ['2022-05-17']
                ],
                [
                    'code'      => 'parasailing',
                    'filter'    => 'adventure',
                    'title'     => 'Parasailing',
                    'locations' => ['phuket'],
                    'dates'     => ['2022-05-17']
                ],
                [
                    'code'      => 'snorkeling',
                    'filter'    => 'adventure',
                    'title'     => 'Snorkeling',
                    'locations' => ['phuket', 'mactan', 'bali'],
                    'dates'     => ['2022-05-16', '2023-07-02', '2023-10-17', '2025-11-15']
                ],
                // 2021
                // 2020
                [
                    'code'      => 'marina-bay-sands',
                    'filter'    => 'observatory',
                    'title'     => 'Marina Bay Sands',
                    'locations' => ['singapore'],
                    'dates'     => ['2020-12-05', '2022-08-14']
                ],
                // 2019
                [
                    'code'      => 'eureka-tower',
                    'filter'    => 'observatory',
                    'title'     => 'Eureka Tower',
                    'locations' => ['melbourne'],
                    'dates'     => ['2019-10-22']
                ],
                [
                    'code'      => 'nude-beach',
                    'filter'    => 'cultural',
                    'title'     => 'Nude Beach',
                    'locations' => ['sydney'],
                    'dates'     => ['2019-10-20']
                ],
                [
                    'code'      => 'sydney-tower',
                    'filter'    => 'observatory',
                    'title'     => 'Sydney Tower',
                    'locations' => ['sydney'],
                    'dates'     => ['2019-10-17']
                ],
                [
                    'code'      => 'airbus-380',
                    'filter'    => 'others',
                    'title'     => 'Airbus 380',
                    'locations' => ['singapore'],
                    'dates'     => ['2019-10-16'],
                ],
                [
                    'code'      => 'indoor-rock-climbing',
                    'filter'    => 'adventure',
                    'title'     => 'Indoor Rock Climbing',
                    'locations' => ['singapore', 'bangkok'],
                    'dates'     => ['2019-08-XX', '2019-10-XX']
                ],
                // 2018
                [
                    'code'      => 'taiwan-hsr',
                    'filter'    => 'others',
                    'title'     => 'Taiwan HSR 台灣高鐵',
                    'locations' => ['taipei', 'taichung'],
                    'dates'     => ['2018-11-14'],
                ],
                [
                    'code'      => 'taipei-101',
                    'filter'    => 'observatory',
                    'title'     => 'Taipei 101 台北一〇一',
                    'locations' => ['taipei'],
                    'dates'     => ['2018-11-12', '2023-10-26']
                ],
                // 2017
                [
                    'code'      => 'thai-traditional-clothes',
                    'filter'    => 'cultural',
                    'title'     => 'Thai Traditional Clothes ชุดไทย',
                    'locations' => ['kanchanaburi', 'bangkok'],
                    'dates'     => ['2017-10-11', '2025-03-09']
                ],
                // 2016
                [
                    'code'      => 'tokyo-tower',
                    'filter'    => 'observatory',
                    'title'     => 'Tokyo Tower 東京タワー',
                    'locations' => ['tokyo'],
                    'dates'     => ['2016-06-XX']
                ],
                [
                    'code'      => 'tokyo-skytree',
                    'filter'    => 'observatory',
                    'title'     => 'Tokyo Skytree 東京スカイツリー',
                    'locations' => ['tokyo'],
                    'dates'     => ['2016-06-XX', '2024-04-29']
                ],
                [
                    'code'      => 'yukata',
                    'filter'    => 'cultural',
                    'title'     => 'Yukata 浴衣',
                    'locations' => [],
                    'dates'     => [],
                    'since'     => 2016
                ],
                [
                    'code'      => 'capsule-hotel',
                    'filter'    => 'cultural',
                    'title'     => 'Capsule Hotel',
                    'locations' => [],
                    'dates'     => [],
                    'since'     => 2016
                ],
                [
                    'code'      => 'onsen-sento',
                    'filter'    => 'cultural',
                    'title'     => 'Onsen, Sento　温泉と銭湯',
                    'locations' => [],
                    'dates'     => [],
                    'since'     => 2016
                ],
                // 2015
                // 2014
                [
                    'code'      => 'petronas-towers',
                    'filter'    => 'observatory',
                    'title'     => 'Petronas Towers',
                    'locations' => ['kuala-lumpur'],
                    'dates'     => ['2014-05-13']
                ],
                // 2013
                // 2012
                // 2011
                // 2010
                [
                    'code'      => 'empire-state-building',
                    'filter'    => 'observatory',
                    'title'     => 'Empire State Building',
                    'locations' => ['new-york-city'],
                    'dates'     => ['2010-06-XX']
                ],
                [
                    'code'      => '30-rockefeller-plaza',
                    'filter'    => 'observatory',
                    'title'     => '30 Rockefeller Plaza',
                    'locations' => ['new-york-city'],
                    'dates'     => ['2010-06-XX']
                ],
                [
                    'code'      => 'willis-tower',
                    'filter'    => 'observatory',
                    'title'     => 'Willis Tower',
                    'locations' => ['chicago'],
                    'dates'     => ['2010-04-XX']
                ],
            ],
            'bucket_lists_to_fill' => [
                'observatory' => [
                    'Lotte World Tower',
                    'Roppongi Hills Mori Tower',
                    'Merdeka 118',
                    'Tokyo Metropolitan Government Building',
                    'Burj Khalifa',
                    '30 Hudson Yards',
                    'N Seoul Tower',
                    'One World Trade Center',
                    'Sky Tower'
                ],
                'adventure'   => [
                    'Skiing',
                    'Wakeboarding',
                    'Bungee Jumping',
                    'Canoeing'
                ],
                'cultural'    => [
                    'Korean Clothes',
                    'Sumo',
                    'Sakura Sighting',
                    'Cruising',
                    'Aurora borealis sighting',
                    'Ice Hotel (Jukkasjärvi)',
                    'Jjimjibang',
                    'Ryokan',
                    'Fujisan Sighting'
                ],
                'pilgrimage'  => [
                    'Angels and Demons',
                    'Da Vinci Code',
                    'Inferno',
                    'Origin',
                    'One-Eyed Flashback',
                    'The Million-dollar Pentagram',
                    'First Note of Love',
                    'Ghostbusters’ Firehouse',
                    'Harry Potter',
                    'Sherlock Holmes'
                ],
                'others'      => [
                    'KTX Train'
                ]
            ],
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
