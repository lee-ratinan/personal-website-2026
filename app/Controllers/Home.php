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
            'locale'    => $this->request->getLocale(),
            'galleries' => [
                [
                    'code'      => 'hkt2025',
                    'region'    => 'southeast-asia',
                    'title'     => 'Phuket Trip 2025',
                    'locations' => ['phuket', 'phang-nga', 'krabi'],
                    'dates'     => ['2025-11-14', '2025-11-17'],
                    'detail'    => 'lorem ipsum',
                    //                    'link'      => '#'
                ],
                [
                    'code'      => 'kul2025',
                    'region'    => 'southeast-asia',
                    'title'     => 'Kuala Lumpur Trip 2025',
                    'locations' => ['bandar-utama', 'kuala-lumpur'],
                    'dates'     => ['2025-04-14', '2025-04-17'],
                    'detail'    => 'lorem ipsum',
                    //                    'link'      => '#'
                ],
                [
                    'code'      => 'bkk2025',
                    'region'    => 'southeast-asia',
                    'title'     => 'Bangkok Trip 2025',
                    'locations' => ['bangkok'],
                    'dates'     => ['2025-11-14', '2025-11-17'],
                    'detail'    => 'lorem ipsum',
                    //                    'link'      => '#'
                ],
                [
                    'code'      => 'tpe2024',
                    'region'    => 'east-asia',
                    'title'     => 'Taipei-Hualien 2024',
                    'locations' => ['taipei', 'hualien'],
                    'dates'     => ['2024-10-20', '2024-10-21'],
                    'detail'    => 'lorem ipsum',
                ]
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
