<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            ['title' => 'About Us', 'slug' => 'about-us', 'blade_file' => 'pages.about'],
            ['title' => 'Contact Us', 'slug' => 'contact-us', 'blade_file' => 'pages.contact'],
            ['title' => 'Company', 'slug' => 'company', 'blade_file' => 'pages.company.index'],

            ['title' => 'Industries', 'slug' => 'industries', 'blade_file' => 'pages.industries.index'],
            ['title' => 'Ecommerce', 'slug' => 'industries/ecommerce', 'blade_file' => 'pages.industries.ecommerce'],
            ['title' => 'Marketing', 'slug' => 'industries/marketing', 'blade_file' => 'pages.industries.marketing'],
            ['title' => 'Healthcare', 'slug' => 'industries/healthcare', 'blade_file' => 'pages.industries.healthcare'],
            ['title' => 'Finance', 'slug' => 'industries/finance', 'blade_file' => 'pages.industries.finance'],

            ['title' => 'Solutions', 'slug' => 'solutions', 'blade_file' => 'pages.solutions.index'],
            ['title' => 'Build an MVP', 'slug' => 'solutions/build-an-mvp', 'blade_file' => 'pages.solutions.build-an-mvp'],
            ['title' => 'Launch a SaaS Product', 'slug' => 'solutions/launch-a-saas-product', 'blade_file' => 'pages.solutions.launch-a-saas-product'],
            ['title' => 'Design a Better Product', 'slug' => 'solutions/design-a-better-product', 'blade_file' => 'pages.solutions.design-a-better-product'],
            ['title' => 'Generate More Leads Online', 'slug' => 'solutions/generate-more-leads-online', 'blade_file' => 'pages.solutions.generate-more-leads-online'],
            ['title' => 'Build a High Converting Website', 'slug' => 'solutions/build-a-high-converting-website', 'blade_file' => 'pages.solutions.build-a-high-converting-website'],
            ['title' => 'Create a Stronger Brand Identity', 'slug' => 'solutions/create-a-stronger-brand-identity', 'blade_file' => 'pages.solutions.create-a-stronger-brand-identity'],

            ['title' => 'Services', 'slug' => 'services', 'blade_file' => 'pages.services.index'],

            ['title' => 'Software Development', 'slug' => 'services/software-development', 'blade_file' => 'pages.services.software-development.software-development'],
            ['title' => 'Custom Software Development', 'slug' => 'services/software-development/custom-software-development', 'blade_file' => 'pages.services.software-development.custom-software-development'],
            ['title' => 'Enterprise Software Development', 'slug' => 'services/software-development/enterprise-software-development', 'blade_file' => 'pages.services.software-development.enterprise-software-development'],
            ['title' => 'SaaS Development', 'slug' => 'services/software-development/saas-development', 'blade_file' => 'pages.services.software-development.saas-development'],
            ['title' => 'CRM Development', 'slug' => 'services/software-development/crm-development', 'blade_file' => 'pages.services.software-development.crm-development'],
            ['title' => 'ERP Development', 'slug' => 'services/software-development/erp-development', 'blade_file' => 'pages.services.software-development.erp-development'],
            ['title' => 'Software Product Development', 'slug' => 'services/software-development/software-product-development', 'blade_file' => 'pages.services.software-development.software-product-development'],
            ['title' => 'MVP Development', 'slug' => 'services/software-development/mvp-development', 'blade_file' => 'pages.services.software-development.mvp-development'],

            ['title' => 'Mobile App Development', 'slug' => 'services/mobile-development', 'blade_file' => 'pages.services.mobile-development.index'],
            ['title' => 'iOS App Development', 'slug' => 'services/mobile-development/ios-app-development', 'blade_file' => 'pages.services.mobile-development.ios-app-development'],
            ['title' => 'Android App Development', 'slug' => 'services/mobile-development/android-app-development', 'blade_file' => 'pages.services.mobile-development.android-app-development'],
            ['title' => 'Cross Platform App Development', 'slug' => 'services/mobile-development/cross-platform-app-development', 'blade_file' => 'pages.services.mobile-development.cross-platform-app-development'],
            ['title' => 'MVP App Development', 'slug' => 'services/mobile-development/mvp-app-development', 'blade_file' => 'pages.services.mobile-development.mvp-app-development'],

            ['title' => 'Web Development', 'slug' => 'services/web-development', 'blade_file' => 'pages.services.web-development.index'],
            ['title' => 'Custom Website Development', 'slug' => 'services/web-development/custom-website-development', 'blade_file' => 'pages.services.web-development.custom-website-development'],
            ['title' => 'Ecommerce Website Development', 'slug' => 'services/web-development/ecommerce-website-development', 'blade_file' => 'pages.services.web-development.ecommerce-website-development'],
            ['title' => 'Web Application Development', 'slug' => 'services/web-development/web-application-development', 'blade_file' => 'pages.services.web-development.web-application-development'],
            ['title' => 'CMS Development', 'slug' => 'services/web-development/cms-development', 'blade_file' => 'pages.services.web-development.cms-development'],
            ['title' => 'WordPress Development', 'slug' => 'services/web-development/wordpress-development', 'blade_file' => 'pages.services.web-development.wordpress-development'],
            ['title' => 'Shopify Development', 'slug' => 'services/web-development/shopify-development', 'blade_file' => 'pages.services.web-development.shopify-development'],

            ['title' => 'UI UX Design', 'slug' => 'services/ui-ux-design', 'blade_file' => 'pages.services.ui-ux-design.index'],
            ['title' => 'UI UX Design Services', 'slug' => 'services/ui-ux-design/ui-ux-design-services', 'blade_file' => 'pages.services.ui-ux-design.ui-ux-design-services'],
            ['title' => 'Web UI UX Design', 'slug' => 'services/ui-ux-design/web-ui-ux-design', 'blade_file' => 'pages.services.ui-ux-design.web-ui-ux-design'],
            ['title' => 'Mobile App UI UX Design', 'slug' => 'services/ui-ux-design/mobile-app-ui-ux-design', 'blade_file' => 'pages.services.ui-ux-design.mobile-app-ui-ux-design'],
            ['title' => 'SaaS UI UX Design', 'slug' => 'services/ui-ux-design/saas-ui-ux-design', 'blade_file' => 'pages.services.ui-ux-design.saas-ui-ux-design'],
            ['title' => 'Product Design', 'slug' => 'services/ui-ux-design/product-design', 'blade_file' => 'pages.services.ui-ux-design.product-design'],

            ['title' => 'Graphic Design', 'slug' => 'services/graphic-design', 'blade_file' => 'pages.services.graphic-design.index'],
            ['title' => 'Logo Design', 'slug' => 'services/graphic-design/logo-design', 'blade_file' => 'pages.services.graphic-design.logo-design'],
            ['title' => 'Social Media Design', 'slug' => 'services/graphic-design/social-media-design', 'blade_file' => 'pages.services.graphic-design.social-media-design'],
            ['title' => 'Ad Creative Design', 'slug' => 'services/graphic-design/ad-creative-design', 'blade_file' => 'pages.services.graphic-design.ad-creative-design'],
            ['title' => 'Motion Graphics', 'slug' => 'services/graphic-design/motion-graphics', 'blade_file' => 'pages.services.graphic-design.motion-graphics'],

            ['title' => 'Digital Marketing', 'slug' => 'services/digital-marketing', 'blade_file' => 'pages.services.digital-marketing.index'],
            ['title' => 'SEO Services', 'slug' => 'services/digital-marketing/seo-services', 'blade_file' => 'pages.services.digital-marketing.seo-services'],
            ['title' => 'Local SEO', 'slug' => 'services/digital-marketing/local-seo', 'blade_file' => 'pages.services.digital-marketing.local-seo'],
            ['title' => 'Content Marketing', 'slug' => 'services/digital-marketing/content-marketing', 'blade_file' => 'pages.services.digital-marketing.content-marketing'],
            ['title' => 'PPC/Google Ads', 'slug' => 'services/digital-marketing/ppc-google-ads', 'blade_file' => 'pages.services.digital-marketing.ppc-google-ads'],
            ['title' => 'Meta Ads', 'slug' => 'services/digital-marketing/meta-ads', 'blade_file' => 'pages.services.digital-marketing.meta-ads'],
            ['title' => 'Social Media Marketing', 'slug' => 'services/digital-marketing/social-media-marketing', 'blade_file' => 'pages.services.digital-marketing.social-media-marketing'],
            ['title' => 'Email Marketing', 'slug' => 'services/digital-marketing/email-marketing', 'blade_file' => 'pages.services.digital-marketing.email-marketing'],
            ['title' => 'Conversion Rate Optimization', 'slug' => 'services/digital-marketing/conversion-rate-optimization', 'blade_file' => 'pages.services.digital-marketing.conversion-rate-optimization'],

            ['title' => 'Branding', 'slug' => 'services/branding', 'blade_file' => 'pages.services.branding.index'],
            ['title' => 'Brand Strategy and Identity', 'slug' => 'services/branding/brand-strategy-and-identity', 'blade_file' => 'pages.services.branding.brand-strategy-and-identity'],

            ['title' => 'QA & Testing', 'slug' => 'services/qa-testing', 'blade_file' => 'pages.services.qa-testing.index'],
            ['title' => 'Mobile App Testing', 'slug' => 'services/qa-testing/mobile-app-testing', 'blade_file' => 'pages.services.qa-testing.mobile-app-testing'],
            ['title' => 'Web Testing', 'slug' => 'services/qa-testing/web-testing', 'blade_file' => 'pages.services.qa-testing.web-testing'],
            ['title' => 'QA Outsourcing', 'slug' => 'services/qa-testing/qa-outsourcing', 'blade_file' => 'pages.services.qa-testing.qa-outsourcing'],
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
    }
}