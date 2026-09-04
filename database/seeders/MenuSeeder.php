<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenuSeeder extends Seeder
{
    private function menu(string $title, ?int $pageId, ?int $parentId, int $sortOrder): Menu
    {
        return Menu::firstOrCreate(
            ['title' => $title],
            [
                'slug' => Str::slug($title),
                'page_id' => $pageId,
                'parent_id' => $parentId,
                'sort_order' => $sortOrder,
                'is_active' => true,
            ]
        );
    }

    public function run(): void
    {
        $pageId = fn (string $slug) => Page::where('slug', $slug)->value('id');

        $this->menu('Home', null, null, 1);

        $services = $this->menu('Services', $pageId('services'), null, 2);
        $industries = $this->menu('Industries', $pageId('industries'), null, 3);
        $company = $this->menu('Company', $pageId('company'), null, 4);

        $this->menu('About Us', $pageId('about-us'), $company->id, 1);
        $this->menu('Contact Us', $pageId('contact'), $company->id, 2);

        $industryItems = [
            'Ecommerce' => 'ecommerce',
            'Healthcare' => 'healthcare',
            'Finance' => 'finance',
            'Manufacturing' => 'manufacturing',
            'Marketing' => 'marketing',
        ];
        $i = 1;
        foreach ($industryItems as $title => $slug) {
            $this->menu($title, $pageId($slug), $industries->id, $i++);
        }

        $categories = [
            'Software Development' => [
                'slug' => 'software-development',
                'children' => [
                    'Custom Software Development' => 'custom-software-development',
                    'Enterprise Software Development' => 'enterprise-software-development',
                    'SaaS Development' => 'saas-development',
                    'CRM Development' => 'crm-development',
                    'ERP Development' => 'erp-development',
                    'Software Product Development' => 'software-product-development',
                    'MVP Development' => 'mvp-development',
                ],
            ],
            'Mobile App Development' => [
                'slug' => 'mobile-app-development',
                'children' => [
                    'iOS App Development' => 'ios-app-development',
                    'Android App Development' => 'android-app-development',
                    'Cross Platform App Development' => 'cross-platform-app-development',
                    'MVP App Development' => 'mvp-app-development',
                ],
            ],
            'Web Development' => [
                'slug' => 'web-development',
                'children' => [
                    'Custom Website Development' => 'custom-website-development',
                    'Ecommerce Website Development' => 'ecommerce-website-development',
                    'Web Application Development' => 'web-application-development',
                    'CMS Development' => 'cms-development',
                    'WordPress Development' => 'wordpress-development',
                    'Shopify Development' => 'shopify-development',
                    'Web Development Services' => 'web-development-services',
                ],
            ],
            'UI UX Design' => [
                'slug' => 'ui-ux-design',
                'children' => [
                    'UI UX Design Services' => 'ui-ux-design-services',
                    'Web UI UX Design' => 'web-ui-ux-design',
                    'Mobile App UI UX Design' => 'mobile-app-ui-ux-design',
                    'SaaS UI UX Design' => 'saas-ui-ux-design',
                    'Product Design' => 'product-design',
                ],
            ],
            'Graphic Design' => [
                'slug' => 'graphic-design',
                'children' => [
                    'Logo Design' => 'logo-design',
                    'Social Media Design' => 'social-media-design',
                    'Ad Creative Design' => 'ad-creative-design',
                    'Motion Graphics' => 'motion-graphics',
                ],
            ],
            'Digital Marketing' => [
                'slug' => 'digital-marketing',
                'children' => [
                    'SEO Services' => 'seo-services',
                    'Local SEO' => 'local-seo',
                    'Content Marketing' => 'content-marketing',
                    'PPC Google Ads' => 'ppc-google-ads',
                    'Meta Ads' => 'meta-ads',
                    'Social Media Marketing' => 'social-media-marketing',
                    'Email Marketing' => 'email-marketing',
                    'Conversion Rate Optimization' => 'conversion-rate-optimization',
                ],
            ],
            'Branding' => [
                'slug' => 'branding',
                'children' => [
                    'Brand Strategy and Identity' => 'brand-strategy-and-identity',
                ],
            ],
            'QA & Testing' => [
                'slug' => 'qa-testing',
                'children' => [
                    'Mobile App Testing' => 'mobile-app-testing',
                    'Web Testing' => 'web-testing',
                    'QA Outsourcing' => 'qa-outsourcing',
                ],
            ],
        ];

        $catOrder = 1;
        foreach ($categories as $catTitle => $cat) {
            $catMenu = $this->menu($catTitle, $pageId($cat['slug']), $services->id, $catOrder++);

            $childOrder = 1;
            foreach ($cat['children'] as $childTitle => $childSlug) {
                $this->menu($childTitle, $pageId($childSlug), $catMenu->id, $childOrder++);
            }
        }

        $this->command?->info('Seeded menu tree.');
    }
}
