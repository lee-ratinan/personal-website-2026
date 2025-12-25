<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Home extends BaseController
{

    private array $business_card_languages = ['en', 'th', 'ja', 'zh-TW', 'en-Shaw', 'ko', 'id', 'vi', 'lo', 'es'];

    /**
     * Get locale
     */
    private function getLocale(): string
    {
        $supported = $this->business_card_languages;
        $header    = $this->request->getServer('HTTP_ACCEPT_LANGUAGE');
        $override  = $this->request->getGet('hl');
        // Use override language first, from ?hl=XX
        if (!empty($override) && in_array($override, $supported)) {
            return $override;
        }
        // If it's not there, use the languages from the header
        if (!empty($header)) {
            $parts = explode(',', $header);
            foreach ($parts as $part) {
                $sub_parts    = explode(';q=', trim($part));
                $language_tag = trim($sub_parts[0]);
                $lang_code    = strtolower(explode('-', $language_tag)[0]);
                if (in_array($lang_code, $supported)) {
                    // This will never work with zh-TW and en-Shaw, but we don't care en-Shaw
                    return $lang_code;
                } else if ($lang_code == 'zh') {
                    return 'zh-TW';
                }
            }
        }
        return $supported[0];
    }

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
                    'link'      => 'https://blog.ratinan.com/kix2026/'
                ],
                [
                    'code'      => 'hkt2025',
                    'filter'    => 'southeast-asia',
                    'title'     => 'เที่ยวภูเก็ต 2568',
                    'locations' => ['phuket', 'phang-nga', 'krabi'],
                    'dates'     => ['2025-11-14', '2025-11-17'],
                    'detail'    => 'Celebrating birthday in the sea~~',
                    'link'      => 'https://blog.ratinan.com/hkt2025/'
                ],
                [
                    'code'      => 'kul2025',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Kuala Lumpur Trip 2025',
                    'locations' => ['bandar-utama', 'kuala-lumpur'],
                    'dates'     => ['2025-04-22', '2025-04-30'],
                    'detail'    => 'A strange work trip with lots of free time to enjoy.',
                    'link'      => 'https://blog.ratinan.com/kul2025/'
                ],
                [
                    'code'      => 'bkk2025',
                    'filter'    => 'southeast-asia',
                    'title'     => 'เที่ยวกรุงเทพ 2568',
                    'locations' => ['bangkok'],
                    'dates'     => ['2025-03-06', '2025-03-10'],
                    'detail'    => 'Cool trip',
                    'link'      => 'https://blog.ratinan.com/bkk2025/'
                ],
                [
                    'code'      => 'tpe2024',
                    'filter'    => 'east-asia',
                    'title'     => '花蓮、台北 113年',
                    'locations' => ['hualien', 'taipei', 'tamsui', 'yangmingshan', 'beitou'],
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
                    'detail'    => '',
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
                    'locations' => ['taipei', 'beitou', 'jiufen'],
                    'dates'     => ['2023-10-26', '2023-10-30'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'dps2023',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Jakarta-Bali 2023',
                    'locations' => ['jakarta', 'bali'],
                    'dates'     => ['2023-10-14', '2023-10-20'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'ceb2023',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Cebu 2023',
                    'locations' => ['cebu', 'mactan', 'oslob', 'alegria'],
                    'dates'     => ['2023-06-29', '2023-07-06'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'jhb2022',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Desaru 2022',
                    'locations' => ['johor-bahru', 'desaru'],
                    'dates'     => ['2022-11-12', '2022-11-13'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'sgn2022',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Sài Gòn 2022',
                    'locations' => ['ho-chi-minh-city'],
                    'dates'     => ['2022-10-28', '2022-10-31'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'hkt2022',
                    'filter'    => 'southeast-asia',
                    'title'     => 'ภูเก็ตแซนด์บ๊อก 2565',
                    'locations' => ['phuket', 'phang-nga', 'krabi', 'bangkok'],
                    'dates'     => ['2022-05-15', '2022-05-23'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'iph2020',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Ipoh 2020',
                    'locations' => ['ipoh'],
                    'dates'     => ['2020-01-06', '2020-01-10'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'syd2019',
                    'filter'    => 'oceania',
                    'title'     => 'Sydney &amp; Melbourne 2019',
                    'locations' => ['sydney', 'melbourne'],
                    'dates'     => ['2019-10-17', '2019-10-26'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'tpe2018',
                    'filter'    => 'east-asia',
                    'title'     => '台北&amp;台中 107年',
                    'locations' => ['taipei', 'taichung', 'beitou', 'wulai'],
                    'dates'     => ['2018-11-11', '2018-11-17'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'utp2018',
                    'filter'    => 'southeast-asia',
                    'title'     => 'เที่ยวพัทยา กับ　GrapeVine 2018',
                    'locations' => ['pattaya'],
                    'dates'     => ['2018-03-XX'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'hhq2017',
                    'filter'    => 'southeast-asia',
                    'title'     => 'ทริปกาญจน์ กับ GrapeVine 2017',
                    'locations' => ['kanchanaburi'],
                    'dates'     => ['2017-10-11'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'bth2016',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Pulau Batam 2016',
                    'locations' => ['batam'],
                    'dates'     => ['2016-09-11'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'nrt2016',
                    'filter'    => 'east-asia',
                    'title'     => '日本関東 2016',
                    'locations' => ['tokyo', 'yokohama', 'kamakura'],
                    'dates'     => ['2016-06-11', '2016-06-16'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'kul2014',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Kuala Lumpur dan Pulau Langkawi 2014',
                    'locations' => ['kuala-lumpur', 'langkawi'],
                    'dates'     => ['2014-05-12', '2014-05-16'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'hhq2013',
                    'filter'    => 'southeast-asia',
                    'title'     => 'ชะอำ/หัวหิน Retreat with GrapeVine 2013',
                    'locations' => ['hua-hin', 'cha-am'],
                    'dates'     => ['2013-03-XX'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'sin2012b',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Singapore 2012 Again!',
                    'locations' => ['singapore'],
                    'dates'     => ['2012-08-11', '2012-08-13'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'sin2012a',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Singapore 2012',
                    'locations' => ['singapore'],
                    'dates'     => ['2012-04-27', '2012-05-01'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'cvg2010',
                    'filter'    => 'america',
                    'title'     => 'Work-Travel Trip @ Cincinnati!',
                    'locations' => ['cincinnati', 'covington', 'newport', 'chicago', 'new-york-city'],
                    'dates'     => ['2010-03-16', '2010-06-07'],
                    'detail'    => '',
                ],
                [
                    'code'      => 'sin2006',
                    'filter'    => 'southeast-asia',
                    'title'     => 'Singapore School Trip 2006',
                    'locations' => ['singapore'],
                    'dates'     => ['2006-04-09', '2006-04-18'],
                    'detail'    => '',
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
                    'code'      => 'yangmingshan',
                    'filter'    => 'others',
                    'title'     => 'Hike at Yangmingshan',
                    'locations' => ['taipei'],
                    'dates'     => ['2024-10-27'],
                ],
                [
                    'code'      => 'xiangshan',
                    'filter'    => 'others',
                    'title'     => 'Hike at Xiangshan',
                    'locations' => ['taipei'],
                    'dates'     => ['2024-10-26'],
                ],
                [
                    'code'      => 'the-only-one',
                    'filter'    => 'pilgrimage',
                    'title'     => 'The On1y One 某某',
                    'locations' => ['taipei'],
                    'dates'     => ['2024-10-25'],
                ],
                [
                    'code'      => 'capybara',
                    'filter'    => 'others',
                    'title'     => 'Meet Capybara',
                    'locations' => ['hualien'],
                    'dates'     => ['2024-10-24'],
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
                    'dates'     => ['2024-04-25', '2024-10-23']
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
                    'code'      => 'balinese-clothes',
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
                    'code'      => 'naturist-resort',
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
                    'code'      => 'penguin',
                    'filter'    => 'others',
                    'title'     => 'See Penguins in natural habitat',
                    'locations' => ['melbourne'],
                    'dates'     => ['2019-10-25']
                ],
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
                    'code'      => 'blue-mountains',
                    'filter'    => 'others',
                    'title'     => 'Hike at Blue Mountains',
                    'locations' => ['sydney'],
                    'dates'     => ['2019-10-18']
                ],
                [
                    'code'      => 'sydney-tower',
                    'filter'    => 'observatory',
                    'title'     => 'Sydney Tower',
                    'locations' => ['sydney'],
                    'dates'     => ['2019-10-17']
                ],
                [
                    'code'      => 'sydney-opera-house',
                    'filter'    => 'others',
                    'title'     => 'Visit Sydney Opera House',
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
                    'code'      => 'onsen',
                    'filter'    => 'cultural',
                    'title'     => 'Onsen, Sento　温泉と銭湯',
                    'locations' => [],
                    'dates'     => [],
                    'since'     => 2016
                ],
                // 2015
                [
                    'code'      => 'get-msc',
                    'filter'    => 'others',
                    'title'     => 'Get Masters Degree',
                    'locations' => ['singapore'],
                    'dates'     => ['2015-07-XX']
                ],
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
                    'Harry Potter',
                    'Sherlock Holmes',
                    'Conan',
                    'LOTR'
                ],
                'others'      => [
                    'KTX Train',
                    'Yosemite National Park',
                    'join naturist trip',
                    'Get MBA',
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

    /**
     * Business Card page
     * @return string
     */
    public function business_card(): string
    {
        $locale       = $this->getLocale();
        $translations = [
            'en'      => [
                'business-card'  => 'Business Card',
                'name'           => 'RATINAN “NAT” LEE',
                'tagline'        => 'MSc, PSM™ I-II, PSPO™ I-II',
                'education'      => 'Education',
                'educations'     => [
                    'Master of Science in Information Systems<br>Wee Kim Wee School of Communication and Information, Nanyang Technological University',
                    'Bachelor of Science in Computer Science (First Class Honors)<br>Sirindhorn International Institute of Technology, Thammasat University'
                ],
                'certification'  => 'Certifications',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'      => 'Language Proficiency Level',
                'languages'     => [
                    'English: CEFR C2 Level (Proficient)',
                    'Thai: Native',
                    'Japanese: Beginner (expected to get JLPT N5 by December 2026)',
                    'Taiwanese Mandarin: Beginner (approx. CEFR A1 Level)'
                ]
            ],
            'th'      => [
                'business-card'  => 'นามบัตร',
                'name'           => 'รตินันท์ “นัท” ลีลางามวงศา',
                'tagline'        => 'วท.ม., PSM™ I-II, PSPO™ I-II',
                'education'      => 'การศึกษา',
                'educations'     => [
                    'วิทยาศาสตรมหาบัณฑิต สาขาระบบสารสนเทศ<br>วิทยาลัยการสื่อสารและสารสนเทศวีคิมวี มหาวิทยาลัยเทคโนโลยีนันยาง',
                    'วิทยาศาสตรบัณฑิต สาขาวิทยาการคอมพิวเตอร์ (เกียรตินิยมอันดับหนึ่ง)<br>สถาบันเทคโนโลยีนานาชาติสิรินธร มหาวิทยาลัยธรรมศาสตร์',
                ],
                'certification'  => 'ประกาศนียบัตรวิชาชีพ',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'      => 'ความสามารถทางภาษา',
                'languages'     => [
                    'ภาษาอังกฤษ: CEFR ระดับ C2 (เชี่ยวชาญ)',
                    'ภาษาไทย: เจ้าของภาษา',
                    'ภาษาญี่ปุ่น: ระดับต้น (คาดว่าจะได้ระดับ JLPT N5 ภายใน ธ.ค. 2569)',
                    'ภาษาจีนไต้หวัน: ระดับต้น (ประมาณ CEFR ระดับ A1)'
                ]
            ],
            'ja'      => [
                'business-card'  => '名刺',
                'name'           => '力川エイキン（ラティナン・リー）',
                'tagline'        => '理学修士（MSc）、PSM™ I-II、PSPO™ I-II',
                'education'      => '学歴',
                'educations'     => [
                    '情報システム理学修士<br>南洋理工大学 ウィー・キム・ウィー情報コミュニケーション学部',
                    'コンピュータサイエンス理学学士（第一級優等学位）<br>タマサート大学・シリンドーン国際工学部'
                ],
                'certification'  => '認定資格',
                'certifications' => [
                    'PSM I、II（プロフェッショナルスクラムマスター）',
                    'PSPO I、II（プロフェッショナルスクラムプロダクトオーナー）',
                    'CSM（認定スクラムマスター）',
                    'グーグル AI エッセンシャル'
                ],
                'language'      => '語学能力',
                'languages'     => [
                    '英語：CEFR C2 レベル（熟達）',
                    'タイ語：母語',
                    '日本語：初級（2026年12月に JLPT N5 取得予定）',
                    '台湾華語：初級（CEFR A1 相当）'
                ]
            ],
            'zh-TW'   => [
                'business-card'  => '名片',
                'name'           => '李榮欽',
                'tagline'        => '理學碩士、PSM™ I–II、PSPO™ I–II',
                'education'      => '學歷',
                'educations'     => [
                    '資訊系統理學碩士<br>南洋理工大學・黃金輝傳播與信息學院',
                    '電腦科學理學學士（一等榮譽）<br>泰國法政大學・席琳通國際科技學院'
                ],
                'certification'  => '認證',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'      => '語言能力',
                'languages'     => [
                    '英語：CEFR C2 等級（精通）',
                    '泰語：母語',
                    '日語：初級（預計於 2026年12月取得 JLPT N5）',
                    '國語：初級（約 CEFR A1 等級）'
                ]
            ],
            'en-Shaw' => [
                'business-card'  => '𐑚𐑦𐑟𐑯𐑩𐑕 𐑒𐑸𐑛',
                'name'           => '·𐑮𐑳𐑑𐑦𐑯𐑳𐑯 “𐑯𐑨𐑑” 𐑤𐑰',
                'tagline'        => 'MSc, PSM™ I-II, PSPO™ I-II',
                'education'      => '𐑧𐑡𐑩𐑒𐑱𐑖𐑩𐑯',
                'educations'     => [
                    '𐑥𐑭𐑕𐑑𐑼 𐑝 𐑕𐑲𐑩𐑯𐑕 𐑦𐑯 𐑦𐑯𐑓𐑼𐑥𐑱𐑖𐑩𐑯 𐑕𐑦𐑕𐑑𐑩𐑥𐑟<br>𐑢𐑰 𐑒𐑦𐑥 𐑢𐑰 𐑕𐑒𐑵𐑤 𐑝 𐑒𐑩𐑥𐑿𐑯𐑦𐑒𐑱𐑖𐑩𐑯 𐑯 𐑦𐑯𐑓𐑼𐑥𐑱𐑖𐑩𐑯, 𐑯𐑳𐑯𐑘𐑭𐑙 𐑑𐑧𐑒𐑯𐑩𐑤𐑪𐑡𐑦𐑒𐑩𐑤 𐑿𐑯𐑦𐑝𐑻𐑕𐑦𐑑𐑦',
                    '𐑚𐑨𐑗𐑩𐑤𐑼 𐑝 𐑕𐑲𐑩𐑯𐑕 𐑦𐑯 𐑒𐑩𐑥𐑐𐑿𐑑𐑼 𐑕𐑲𐑩𐑯𐑕 (𐑓𐑻𐑕𐑑 𐑒𐑤𐑭𐑕 𐑪𐑯𐑼𐑟)<br>𐑕𐑦𐑮𐑦𐑯𐑑𐑷𐑯 𐑦𐑯𐑑𐑼𐑯𐑨𐑖𐑩𐑯𐑩𐑤 𐑦𐑯𐑕𐑑𐑦𐑑𐑿𐑑 𐑝 𐑑𐑧𐑒𐑯𐑪𐑤𐑩𐑡𐑦, 𐑑𐑳𐑥𐑳𐑕𐑭𐑑 𐑿𐑯𐑦𐑝𐑻𐑕𐑦𐑑𐑦'
                ],
                'certification'  => '𐑕𐑻𐑑𐑦𐑓𐑦𐑒𐑱𐑖𐑩𐑯𐑟',
                'certifications' => [
                    'PSM I, II (𐑐𐑮𐑩𐑓𐑧𐑖𐑩𐑯𐑩𐑤 𐑕𐑒𐑮𐑳𐑥 𐑥𐑭𐑕𐑑𐑼)',
                    'PSPO I, II (𐑐𐑮𐑩𐑓𐑧𐑖𐑩𐑯𐑩𐑤 𐑕𐑒𐑮𐑳𐑥 𐑐𐑮𐑪𐑛𐑳𐑒𐑑 𐑴𐑯𐑼)',
                    'CSM (𐑕𐑻𐑑𐑦𐑓𐑲𐑛 𐑕𐑒𐑮𐑳𐑥 𐑥𐑭𐑕𐑑𐑼)',
                    '𐑜𐑵𐑜𐑩𐑤 AI 𐑦𐑕𐑧𐑯𐑖𐑩𐑤𐑟'
                ],
                'language'      => '𐑤𐑨𐑙𐑜𐑢𐑦𐑡𐑩𐑟',
                'languages'     => [
                    '𐑦𐑙𐑜𐑤𐑦𐑖:: CEFR C2 𐑤𐑧𐑝𐑩𐑤 (𐑐𐑮𐑩𐑓𐑦𐑖𐑩𐑯𐑑)',
                    '𐑑𐑲: 𐑯𐑱𐑑𐑦𐑝',
                    '𐑡𐑨𐑐𐑩𐑯𐑰𐑟: 𐑚𐑦𐑜𐑦𐑯𐑼 (𐑦𐑒𐑕𐑐𐑧𐑒𐑑𐑩𐑛 𐑑 𐑜𐑧𐑑 JLPT N5 𐑚𐑲 𐑛𐑦𐑕𐑧𐑥𐑚𐑼 2026)',
                    '𐑑𐑲𐑢𐑩𐑯𐑰𐑟 𐑥𐑨𐑯𐑛𐑼𐑦𐑯: 𐑚𐑦𐑜𐑦𐑯𐑼 (𐑩𐑐𐑮𐑪𐑒𐑕𐑦𐑥𐑩𐑑𐑤𐑦 CEFR A1 𐑤𐑧𐑝𐑩𐑤)'
                ]
            ],
            'ko'      => [
                'business-card'  => '명함',
                'name'           => '이영흠',
                'tagline'        => '이학석사(M.Sc.), PSM™ I–II, PSPO™ I–II',
                'education'      => '학력',
                'educations'     => [
                    '정보시스템 이학석사<br>난양공과대학교 위 킴 위 커뮤니케이션·정보대학',
                    '컴퓨터과학 이학사 (일등급 우등 졸업)<br>탐마삿 대학교 시린돈 국제기술학부'
                ],
                'certification'  => '자격증',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    '구글 AI Essentials'
                ],
                'language'      => '언어능력수준',
                'languages'     => [
                    '영어: CEFR C2 레벨 (능숙)',
                    '태국어: 원어민 수준',
                    '일본어: 초급 (2026년12월까지 JLPT N5 취득 예정)',
                    '대만어: 초급 (CEFR A1 레벨 정도)'
                ]
            ],
            'id'      => [
                'business-card'  => 'Kartu name',
                'name'           => 'RATINAN “NAT” LEE',
                'tagline'        => 'M.Sc., PSM™ I–II, PSPO™ I–II',
                'education'      => 'Pendidikan',
                'educations'     => [
                    'Magister Sains dalam Sistem Informasi<br>Sekolah Komunikasi dan Informasi Wee Kim Wee, Universitas Teknologi Nanyang',
                    'Sarjana Sains dalam Ilmu Komputer (First Class Honours)<br>Institut Teknologi Internasional Sirindhorn, Universitas Thammasat'
                ],
                'certification'  => 'Sertifikasi',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'      => 'Tingkat Kemahiran Bahasa',
                'languages'     => [
                    'Bahasa Inggris: Tingkat CEFR C2 (mahir)',
                    'Bahasa Thailand: Tingkat penutur asli',
                    'Bahasa Jepang: Pemula (diharapkan mencapai JLPT N5 pada Desember 2026)',
                    'Bahasa Taiwan: Pemula (kira-kira tingkat CEFR A1)'
                ]
            ],
            'vi'      => [
                'business-card'  => 'Danh thiếp',
                'name'           => 'LÝ VINH KHÂM',
                'tagline'        => 'Thạc sĩ Khoa học (MSc), PSM™ I–II, PSPO™ I–II',
                'education'      => 'Học vấn',
                'educations'     => [
                    'Thạc sĩ Khoa học ngành Hệ thống Thông tin<br>Trường Truyền thông và Thông tin Wee Kim Wee, Đại học Công nghệ Nanyang',
                    'Cử nhân Khoa học ngành Khoa học Máy tính (Hạng Nhất Danh Dự)<br>Viện Công nghệ Quốc tế Sirindhorn, Đại học Thammasat'
                ],
                'certification'  => 'Chứng chỉ',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'      => 'Trình độ ngoại ngữ',
                'languages'     => [
                    'Tiếng Anh: Trình độ CEFR C2 (Thành thạo)',
                    'Tiếng Thái: Tiếng mẹ đẻ',
                    'Tiếng Nhật: Trình độ sơ cấp (dự kiến ​​đạt JLPT N5 vào tháng 12 năm 2026)',
                    'Tiếng Đài Loan (tiếng Quan thoại): Trình độ sơ cấp (khoảng trình độ CEFR A1)'
                ]
            ],
            'lo'      => [
                'business-card'  => 'ນາມບັດ',
                'name'           => 'RATINAN “NAT” LEE',
                'tagline'        => 'ປະລິນຍາໂທວິທະຍາສາດ, PSM™ I-II, PSPO™ I-II',
                'education'      => 'ການສຶກສາ',
                'educations'     => [
                    'ປະລິນຍາໂທວິທະຍາສາດສາຂາລະບົບຂໍ້ມູນຂ່າວສານ<br>ຄະນະການສື່ສານແລະຂໍ້ມູນຂ່າວສານ ວີກິມວີ, ມະຫາວິທະຍາໄລເຕັກໂນໂລຢີນັນຢາງ',
                    'ປະລິນຍາຕີວິທະຍາສາດສາຂາວິທະຍາສາດຄອມພິວເຕີ (ກຽດນິຍົມອັນດັບໜຶ່ງ)<br>ສະຖາບັນເຕັກໂນໂລຊີສາກົນສິຣິນທອນ, ມະຫາວິທະຍາໄລທຳມະສາດ'
                ],
                'certification'  => 'ໃບຢັ້ງຢືນວິຊາຊີບ',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'      => 'ຄວາມສາມາດດ້ານພາສາ',
                'languages'     => [
                    'ພາສາອັງກິດ: CEFR ລະດັບ C2 (ຜູ້ຊ່ຽວຊານ)',
                    'ພາສາໄທ: ຜູ້ເວົ້າພາສາພື້ນເມືອງ',
                    'ພາສາຍີ່ປຸ່ນ: ຜູ້ເລີ່ມຕົ້ນ (ຄາດວ່າຈະບັນລຸ JLPT N5 ພາຍໃນເດືອນທັນວາ 2026)',
                    'ພາສາຈີນໄຕ້ຫວັນ: ຜູ້ເລີ່ມຕົ້ນ (ປະມານ CEFR ລະດັບ A1)'
                ]
            ],
            'es'      => [
                'business-card'  => 'Tarjeta de visita',
                'name'           => 'RATINAN “NAT” LEE',
                'tagline'        => 'M.Sc., PSM™ I–II, PSPO™ I–II',
                'education'      => 'Formación Académica',
                'educations'     => [
                    'Maestría en Ciencias en Sistemas de Información<br>Escuela Wee Kim Wee de Comunicación e Información, Universidad Tecnológica de Nanyang',
                    'Licenciatura en Ciencias en Informática (Primera Clase con Honores)<br>Instituto Internacional de Tecnología Sirindhorn, Universidad de Thammasat'
                ],
                'certification'  => 'Certificaciones',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'      => 'Nivel de competencia lingüística',
                'languages'     => [
                    'Inglés: Nivel C2 del MCER (Competente)',
                    'Tailandés: Nativo',
                    'Japonés: Principiante (se espera obtener el JLPT N5 para diciembre de 2026)',
                    'Mandarín taiwanés: Principiante (aprox. Nivel A1 del MCER)'
                ]
            ],
        ];
        $data         = [
            'locale'              => $locale,
            'hl'                  => $this->request->getGet('hl'),
            'supported_languages' => [
                'en'      => 'English',
                'th'      => 'ไทย',
                'ja'      => '日本語',
                'zh-TW'   => '國語',
                'en-Shaw' => '𐑖𐑱𐑝𐑾𐑯',
                'ko'      => '한국어',
                'id'      => 'Indonesian',
                'vi'      => 'Tiếng Việt',
                'lo'      => 'ລາວ',
                'es'      => 'Español'
            ],
            'data'                => $translations[$locale],
            'links'               => [
                'whatsapp'           => base_url('whatsapp'),
                'telegram'           => 'https://t.me/rikikawa_eikin',
                'line'               => 'https://line.me/ti/p/ME2Tsnm9nr',
                'linkedin'           => 'https://www.linkedin.com/in/ratinanlee',
                'medium'             => 'https://medium.com/@ratinanlee',
                'instagram'          => 'https://www.instagram.com/ratinanlee/',
                'github'             => 'https://github.com/lee-ratinan',
                'facebook-messenger' => 'https://www.messenger.com/t/lee.ratinan/',
                'facebook'           => 'https://www.facebook.com/lee.ratinan',
                'threads'            => 'https://www.threads.com/@ratinanlee'
            ],
            'translations' => [
                'en' => [
                    'whatsapp'           => 'WhatsApp',
                    'line'               => 'LINE',
                    'linkedin'           => 'LinkedIn',
                    'medium'             => 'Medium',
                    'instagram'          => 'Instagram',
                    'github'             => 'GitHub',
                    'facebook-messenger' => 'Messenger',
                    'facebook'           => 'Facebook',
                    'threads'            => 'Threads',
                    'telegram'           => 'Telegram',
                ],
                'th' => [
                    'line'      => 'ไลน์',
                    'instagram' => 'ไอจี',
                    'facebook'  => 'เฟซบุ๊ก',
                ]
            ],
            'professional_profiles' => [
                'Scrum.org'      => 'https://www.scrum.org/user/1457291',
                'Credly'         => 'https://www.credly.com/users/ratinanlee',
                'Scrum Alliance' => 'https://www.scrumalliance.org/members/1729850',
                'Fastwork'       => 'https://fastwork.co/user/ratinanlee',
                'Upwork'         => 'https://www.upwork.com/freelancers/~01b5886610b13a2bb1',
            ]
        ];
        return view('business_card_2', $data);
    }
}
