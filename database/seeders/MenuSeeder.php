<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenuSeeder extends Seeder
{
    private array $seenTitles = [];

    private function menu(string $title, ?int $pageId, ?int $parentId, int $sortOrder): Menu
    {
        $this->seenTitles[] = $title;

        return Menu::updateOrCreate(
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

        // "Home" has no Page row — served directly by PageController::home().
        // Menu only supports linking to a Page (page_id), no raw URL field.
        // The header/menu Blade view needs to special-case this item and
        // link it to route('home') instead of relying on page_id.
        $this->menu('Home', null, null, 1);

        $services = $this->menu('Services', $pageId('services'), null, 2);
        $industries = $this->menu('Industries', $pageId('industries'), null, 3);
        $company = $this->menu('Company', $pageId('company'), null, 4);

        // Company children
        $this->menu('About Us', $pageId('about-us'), $company->id, 1);
        // "Blogs" has no dedicated Page row yet (served by its own
        // route/controller, not the generic Page catch-all) — placeholder
        // link (page_id null) until wired up properly, same treatment as Home.
        $this->menu('Blogs', null, $company->id, 2);
        $this->menu('Contact Us', $pageId('contact-us'), $company->id, 3);

        // Industries children
        $industryItems = ['Ecommerce' => 'ecommerce', 'Marketing' => 'marketing', 'Healthcare' => 'healthcare', 'Finance' => 'finance'];
        $i = 1;
        foreach ($industryItems as $title => $slug) {
            $this->menu($title, $pageId($slug), $industries->id, $i++);
        }

        // Services children (L2 categories) + their L3 leaf items
        $categories = [
            'Software Development' => [
                'slug' => 'services/software-development',
                'children' => [
                    'Custom Software Development' => 'services/software-development/custom-software-development',
                    'Enterprise Software Development' => 'services/software-development/enterprise-software-development',
                    'SaaS Development' => 'services/software-development/saas-development',
                    'CRM Development' => 'services/software-development/crm-development',
                    'ERP Development' => 'services/software-development/erp-development',
                    'Software Product Development' => 'services/software-development/software-product-development',
                    'MVP Development' => 'services/software-development/mvp-development',
                ],
            ],
            'Mobile App Development' => [
                'slug' => 'services/mobile-development',
                'children' => [
                    'iOS App Development' => 'services/mobile-development/ios-app-development',
                    'Android App Development' => 'services/mobile-development/android-app-development',
                    'Cross Platform App Development' => 'services/mobile-development/cross-platform-app-development',
                    'MVP App Development' => 'services/mobile-development/mvp-app-development',
                ],
            ],
            'Web Development' => [
                'slug' => 'services/web-development',
                'children' => [
                    'Custom Website Development' => 'services/web-development/custom-website-development',
                    'Ecommerce Website Development' => 'services/web-development/ecommerce-website-development',
                    'Web Application Development' => 'services/web-development/web-application-development',
                    'CMS Development' => 'services/web-development/cms-development',
                    'WordPress Development' => 'services/web-development/wordpress-development',
                    'Shopify Development' => 'services/web-development/shopify-development',
                ],
            ],
            'UI UX Design' => [
                'slug' => 'services/ui-ux-design',
                'children' => [
                    'UI UX Design Services' => 'services/ui-ux-design/ui-ux-design-services',
                    'Web UI UX Design' => 'services/ui-ux-design/web-ui-ux-design',
                    'Mobile App UI UX Design' => 'services/ui-ux-design/mobile-app-ui-ux-design',
                    'SaaS UI UX Design' => 'services/ui-ux-design/saas-ui-ux-design',
                    'Product Design' => 'services/ui-ux-design/product-design',
                ],
            ],
            'Graphic Design' => [
                'slug' => 'services/graphic-design',
                'children' => [
                    'Logo Design' => 'services/graphic-design/logo-design',
                    'Social Media Design' => 'services/graphic-design/social-media-design',
                    'Ad Creative Design' => 'services/graphic-design/ad-creative-design',
                    'Motion Graphics' => 'services/graphic-design/motion-graphics',
                ],
            ],
            'Digital Marketing' => [
                'slug' => 'services/digital-marketing',
                'children' => [
                    'SEO Services' => 'services/digital-marketing/seo-services',
                    'Local SEO' => 'services/digital-marketing/local-seo',
                    'Content Marketing' => 'services/digital-marketing/content-marketing',
                    'PPC/Google Ads' => 'services/digital-marketing/ppc-google-ads',
                    'Meta Ads' => 'services/digital-marketing/meta-ads',
                    'Social Media Marketing' => 'services/digital-marketing/social-media-marketing',
                    'Email Marketing' => 'services/digital-marketing/email-marketing',
                    'Conversion Rate Optimization' => 'services/digital-marketing/conversion-rate-optimization',
                ],
            ],
            'Branding' => [
                'slug' => 'services/branding',
                'children' => [
                    'Brand Strategy and Identity' => 'services/branding/brand-strategy-and-identity',
                ],
            ],
            'QA & Testing' => [
                'slug' => 'services/qa-testing',
                'children' => [
                    'Mobile App Testing' => 'services/qa-testing/mobile-app-testing',
                    'Web Testing' => 'services/qa-testing/web-testing',
                    'QA Outsourcing' => 'services/qa-testing/qa-outsourcing',
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

        $removed = Menu::whereNotIn('title', $this->seenTitles)->delete();

        if ($removed > 0) {
            $this->command?->info("Removed {$removed} stale menu item(s) no longer defined in this seeder.");
        }
    }
}