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
            ['name' => 'PHP', 'filter' => 'filter-programming', 'image' => asset('assets/img/skills/php.png'), 'description' => 'Server-side scripting language for web development.'],
            ['name' => 'HTML', 'filter' => 'filter-programming', 'image' => asset('assets/img/skills/html5.png'), 'description' => 'Markup language for structuring web content.'],
            ['name' => 'CSS', 'filter' => 'filter-programming', 'image' => asset('assets/img/skills/css.png'), 'description' => 'Stylesheet language for designing web pages.'],
            ['name' => 'JavaScript', 'filter' => 'filter-programming', 'image' => asset('assets/img/skills/js.png'), 'description' => 'Client-side scripting for dynamic web pages.'],
        
            // Frameworks & Libraries
            ['name' => 'Laravel', 'filter' => 'filter-frameworks', 'image' => asset('assets/img/skills/laravel.png'), 'description' => 'PHP framework for building robust applications.'],
            ['name' => 'CodeIgniter', 'filter' => 'filter-frameworks', 'image' => asset('assets/img/skills/codeigniter.png'), 'description' => 'Lightweight PHP framework for fast development.'],
            ['name' => 'SuiteCRM', 'filter' => 'filter-frameworks', 'image' => asset('assets/img/skills/suitecrm.png'), 'description' => 'Open-source CRM for customer management.'],
            ['name' => 'jQuery', 'filter' => 'filter-frameworks', 'image' => asset('assets/img/skills/jquery.png'), 'description' => 'JavaScript library for simplifying DOM operations.'],
            ['name' => 'Ajax', 'filter' => 'filter-frameworks', 'image' => asset('assets/img/skills/ajax.png'), 'description' => 'Technique for asynchronous web requests.'],
            ['name' => 'Bootstrap', 'filter' => 'filter-frameworks', 'image' => asset('assets/img/skills/bootstrap.png'), 'description' => 'CSS framework for responsive web design.'],
        
            // Databases
            ['name' => 'MySQL', 'filter' => 'filter-databases', 'image' => asset('assets/img/skills/mysql.png'), 'description' => 'Popular relational database management system.'],
            ['name' => 'MongoDB', 'filter' => 'filter-databases', 'image' => asset('assets/img/skills/mongodb.png'), 'description' => 'NoSQL database for scalable applications.'],
        
            // APIs & Payment Gateways & Shipping & Logistics APIs
            ['name' => 'Stripe', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/stripe.png'), 'description' => 'Online payment processing for businesses.'],
            ['name' => 'Razorpay', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/razorpay.png'), 'description' => 'Payment gateway for Indian businesses.'],
            ['name' => 'CC Avenue', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/ccavenue.png'), 'description' => 'Secure payment gateway for online businesses.'],
            ['name' => 'Moneris', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/moneris.png'), 'description' => 'Canadian payment processing solution.'],
            ['name' => 'Bitgo', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/bitgo.png'), 'description' => 'Secure cryptocurrency wallet and transactions.'],
            ['name' => 'Onmeta', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/onmeta.png'), 'description' => 'Fiat-to-crypto payment solutions.'],
            ['name' => 'Shiprocket', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/shiprocket.png'), 'description' => 'E-commerce shipping and logistics platform.'],
            ['name' => 'Easypost', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/easypost.png'), 'description' => 'Shipping API for tracking and rate calculation.'],
            ['name' => 'AusPost', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/auspost.png'), 'description' => 'Australia Post shipping integration.'],
            ['name' => 'UPS', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/ups.png'), 'description' => 'Global shipping and logistics services.'],
            ['name' => 'USPS', 'filter' => 'filter-apis', 'image' => asset('assets/img/skills/usps.png'), 'description' => 'United States Postal Service API.'],
        
            // Other Technologies
            ['name' => 'Shopify', 'filter' => 'filter-other', 'image' => asset('assets/img/skills/shopify.png'), 'description' => 'E-commerce platform for online stores.'],
            ['name' => 'GitHub', 'filter' => 'filter-other', 'image' => asset('assets/img/skills/github.png'), 'description' => 'Version control and code hosting platform.'],
            ['name' => 'GitLab', 'filter' => 'filter-other', 'image' => asset('assets/img/skills/gitlab.png'), 'description' => 'DevOps and CI/CD platform for developers.'],
            ['name' => 'Linux', 'filter' => 'filter-other', 'image' => asset('assets/img/skills/linux.png'), 'description' => 'Open-source operating system for servers.'],
            ['name' => 'Windows', 'filter' => 'filter-other', 'image' => asset('assets/img/skills/windows.png'), 'description' => 'Popular OS for desktops and enterprise.'],
            ['name' => 'VS Code', 'filter' => 'filter-other', 'image' => asset('assets/img/skills/vscode.png'), 'description' => 'Lightweight code editor by Microsoft.'],
        ];        
    }
}
