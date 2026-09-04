<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            ['title' => 'Home', 'slug' => 'home', 'blade_file' => 'pages.home'],

            ['title' => 'Company', 'slug' => 'company', 'blade_file' => 'pages.company.index'],
            ['title' => 'About Us', 'slug' => 'about-us', 'blade_file' => 'pages.company.about'],
            ['title' => 'Contact', 'slug' => 'contact', 'blade_file' => 'pages.company.contact'],

            ['title' => 'Services', 'slug' => 'services', 'blade_file' => 'pages.services.index'],
            ['title' => 'Branding', 'slug' => 'branding', 'blade_file' => 'pages.services.branding.index'],
            ['title' => 'Brand Strategy And Identity', 'slug' => 'brand-strategy-and-identity', 'blade_file' => 'pages.services.branding.brand-strategy-and-identity'],
            ['title' => 'Digital Marketing', 'slug' => 'digital-marketing', 'blade_file' => 'pages.services.digital-marketing.index'],
            ['title' => 'Content Marketing', 'slug' => 'content-marketing', 'blade_file' => 'pages.services.digital-marketing.content-marketing'],
            ['title' => 'Conversion Rate Optimization', 'slug' => 'conversion-rate-optimization', 'blade_file' => 'pages.services.digital-marketing.conversion-rate-optimization'],
            ['title' => 'Email Marketing', 'slug' => 'email-marketing', 'blade_file' => 'pages.services.digital-marketing.email-marketing'],
            ['title' => 'Local SEO', 'slug' => 'local-seo', 'blade_file' => 'pages.services.digital-marketing.local-seo'],
            ['title' => 'Meta Ads', 'slug' => 'meta-ads', 'blade_file' => 'pages.services.digital-marketing.meta-ads'],
            ['title' => 'PPC Google Ads', 'slug' => 'ppc-google-ads', 'blade_file' => 'pages.services.digital-marketing.ppc-google-ads'],
            ['title' => 'SEO Services', 'slug' => 'seo-services', 'blade_file' => 'pages.services.digital-marketing.seo-services'],
            ['title' => 'Social Media Marketing', 'slug' => 'social-media-marketing', 'blade_file' => 'pages.services.digital-marketing.social-media-marketing'],
            ['title' => 'Graphic Design', 'slug' => 'graphic-design', 'blade_file' => 'pages.services.graphic-design.index'],
            ['title' => 'Ad Creative Design', 'slug' => 'ad-creative-design', 'blade_file' => 'pages.services.graphic-design.ad-creative-design'],
            ['title' => 'Logo Design', 'slug' => 'logo-design', 'blade_file' => 'pages.services.graphic-design.logo-design'],
            ['title' => 'Motion Graphics', 'slug' => 'motion-graphics', 'blade_file' => 'pages.services.graphic-design.motion-graphics'],
            ['title' => 'Social Media Design', 'slug' => 'social-media-design', 'blade_file' => 'pages.services.graphic-design.social-media-design'],
            ['title' => 'Mobile App Development', 'slug' => 'mobile-app-development', 'blade_file' => 'pages.services.mobile-development.index'],
            ['title' => 'Android App Development', 'slug' => 'android-app-development', 'blade_file' => 'pages.services.mobile-development.android-app-development'],
            ['title' => 'Cross Platform App Development', 'slug' => 'cross-platform-app-development', 'blade_file' => 'pages.services.mobile-development.cross-platform-app-development'],
            ['title' => 'iOS App Development', 'slug' => 'ios-app-development', 'blade_file' => 'pages.services.mobile-development.ios-app-development'],
            ['title' => 'MVP App Development', 'slug' => 'mvp-app-development', 'blade_file' => 'pages.services.mobile-development.mvp-app-development'],
            ['title' => 'QA Testing', 'slug' => 'qa-testing', 'blade_file' => 'pages.services.qa-testing.index'],
            ['title' => 'Mobile App Testing', 'slug' => 'mobile-app-testing', 'blade_file' => 'pages.services.qa-testing.mobile-app-testing'],
            ['title' => 'QA Outsourcing', 'slug' => 'qa-outsourcing', 'blade_file' => 'pages.services.qa-testing.qa-outsourcing'],
            ['title' => 'Web Testing', 'slug' => 'web-testing', 'blade_file' => 'pages.services.qa-testing.web-testing'],
            ['title' => 'Software Development', 'slug' => 'software-development', 'blade_file' => 'pages.services.software-development.index'],
            ['title' => 'CRM Development', 'slug' => 'crm-development', 'blade_file' => 'pages.services.software-development.crm-development'],
            ['title' => 'Custom Software Development', 'slug' => 'custom-software-development', 'blade_file' => 'pages.services.software-development.custom-software-development'],
            ['title' => 'Enterprise Software Development', 'slug' => 'enterprise-software-development', 'blade_file' => 'pages.services.software-development.enterprise-software-development'],
            ['title' => 'ERP Development', 'slug' => 'erp-development', 'blade_file' => 'pages.services.software-development.erp-development'],
            ['title' => 'MVP Development', 'slug' => 'mvp-development', 'blade_file' => 'pages.services.software-development.mvp-development'],
            ['title' => 'SaaS Development', 'slug' => 'saas-development', 'blade_file' => 'pages.services.software-development.saas-development'],
            ['title' => 'Software Product Development', 'slug' => 'software-product-development', 'blade_file' => 'pages.services.software-development.software-product-development'],
            ['title' => 'UI UX Design', 'slug' => 'ui-ux-design', 'blade_file' => 'pages.services.ui-ux-design.index'],
            ['title' => 'Mobile App UI UX Design', 'slug' => 'mobile-app-ui-ux-design', 'blade_file' => 'pages.services.ui-ux-design.mobile-app-ui-ux-design'],
            ['title' => 'Product Design', 'slug' => 'product-design', 'blade_file' => 'pages.services.ui-ux-design.product-design'],
            ['title' => 'SaaS UI UX Design', 'slug' => 'saas-ui-ux-design', 'blade_file' => 'pages.services.ui-ux-design.saas-ui-ux-design'],
            ['title' => 'UI UX Design Services', 'slug' => 'ui-ux-design-services', 'blade_file' => 'pages.services.ui-ux-design.ui-ux-design-services'],
            ['title' => 'Web UI UX Design', 'slug' => 'web-ui-ux-design', 'blade_file' => 'pages.services.ui-ux-design.web-ui-ux-design'],
            ['title' => 'Web Development', 'slug' => 'web-development', 'blade_file' => 'pages.services.web-development.index'],
            ['title' => 'CMS Development', 'slug' => 'cms-development', 'blade_file' => 'pages.services.web-development.cms-development'],
            ['title' => 'Custom Website Development', 'slug' => 'custom-website-development', 'blade_file' => 'pages.services.web-development.custom-website-development'],
            ['title' => 'Ecommerce Website Development', 'slug' => 'ecommerce-website-development', 'blade_file' => 'pages.services.web-development.ecommerce-website-development'],
            ['title' => 'Shopify Development', 'slug' => 'shopify-development', 'blade_file' => 'pages.services.web-development.shopify-development'],
            ['title' => 'Web Application Development', 'slug' => 'web-application-development', 'blade_file' => 'pages.services.web-development.web-application-development'],
            ['title' => 'Web Development Services', 'slug' => 'web-development-services', 'blade_file' => 'pages.services.web-development.web-development'],
            ['title' => 'Wordpress Development', 'slug' => 'wordpress-development', 'blade_file' => 'pages.services.web-development.wordpress-development'],

            ['title' => 'Industries', 'slug' => 'industries', 'blade_file' => 'pages.industries.index'],
            ['title' => 'Ecommerce', 'slug' => 'ecommerce', 'blade_file' => 'pages.industries.ecommerce'],
            ['title' => 'Finance', 'slug' => 'finance', 'blade_file' => 'pages.industries.finance'],
            ['title' => 'Healthcare', 'slug' => 'healthcare', 'blade_file' => 'pages.industries.healthcare'],
            ['title' => 'Manufacturing', 'slug' => 'manufacturing', 'blade_file' => 'pages.industries.manufacturing'],
            ['title' => 'Marketing', 'slug' => 'marketing', 'blade_file' => 'pages.industries.marketing'],
        ];

        foreach ($pages as $page) {
            Page::updateOrCreate(
                ['slug' => $page['slug']],
                [
                    'title' => $page['title'],
                    'meta_title' => null,
                    'meta_description' => null,
                    'blade_file' => $page['blade_file'],
                    'og_image' => null,
                    'is_indexable' => true,
                ]
            );
        }

        $this->command?->info('Seeded ' . count($pages) . ' pages.');
    }
}
