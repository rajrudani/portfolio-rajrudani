<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $skills = $this->getSkills();
        
        return view('front.index', compact('skills'));
    }

    public function getSkills ()
    {
        return [
            // Programming Languages
            ['name' => 'PHP', 'filter' => 'filter-programming', 'image' => asset('assets/img/skills/php.png')],
            ['name' => 'HTML', 'filter' => 'filter-programming', 'image' => asset('assets/img/skills/html5.png')],
            ['name' => 'CSS', 'filter' => 'filter-programming', 'image' => asset('assets/img/skills/css.png')],
            ['name' => 'JavaScript', 'filter' => 'filter-programming', 'image' => asset('assets/img/skills/js.png')],
        
            // Frameworks & Libraries
            ['name' => 'Laravel', 'filter' => 'filter-frameworks', 'image' => asset('assets/img/skills/laravel.png')],
            ['name' => 'CodeIgniter', 'filter' => 'filter-frameworks', 'image' => asset('assets/img/skills/codeigniter.png')],
            ['name' => 'SuiteCRM', 'filter' => 'filter-frameworks', 'image' => asset('assets/img/skills/suitecrm.png')],
            ['name' => 'jQuery', 'filter' => 'filter-frameworks', 'image' => asset('assets/img/skills/jquery.png')],
            ['name' => 'Ajax', 'filter' => 'filter-frameworks', 'image' => asset('assets/img/skills/ajax.png')],
            ['name' => 'Bootstrap', 'filter' => 'filter-frameworks', 'image' => asset('assets/img/skills/bootstrap.png')],
        
            // Databases
            ['name' => 'MySQL', 'filter' => 'filter-databases', 'image' => asset('assets/img/skills/mysql.png')],
            ['name' => 'MongoDB', 'filter' => 'filter-databases', 'image' => asset('assets/img/skills/mongodb.png')],
        
            // APIs & Payment Gateways & Shipping & Logistics APIs
            ['name' => 'Stripe', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/stripe.png')],
            ['name' => 'Razorpay', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/razorpay.png')],
            ['name' => 'CC Avenue', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/ccavenue.png')],
            ['name' => 'Moneris', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/moneris.png')],
            ['name' => 'Bitgo', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/bitgo.png')],
            ['name' => 'Onmeta', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/onmeta.png')],
            ['name' => 'Shiprocket', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/shiprocket.png')],
            ['name' => 'Easypost', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/easypost.png')],
            ['name' => 'AusPost', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/auspost.png')],
            ['name' => 'UPS', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/ups.png')],
            ['name' => 'USPS', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/usps.png')],
            
            // Other Technologies
            ['name' => 'Shopify', 'filter' => 'filter-other', 'image' => asset('assets/img/skills/shopify.png')],
            ['name' => 'GitHub', 'filter' => 'filter-other', 'image' => asset('assets/img/skills/github.png')],
            ['name' => 'GitLab', 'filter' => 'filter-other', 'image' => asset('assets/img/skills/gitlab.png')],
            ['name' => 'Linux', 'filter' => 'filter-other', 'image' => asset('assets/img/skills/linux.png')],
            ['name' => 'Windows', 'filter' => 'filter-other', 'image' => asset('assets/img/skills/windows.png')],
            ['name' => 'VS Code', 'filter' => 'filter-other', 'image' => asset('assets/img/skills/vscode.png')],
        ];
    }
}
