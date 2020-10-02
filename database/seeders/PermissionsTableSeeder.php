<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'product_create',
            ],
            [
                'id'    => 29,
                'title' => 'product_edit',
            ],
            [
                'id'    => 30,
                'title' => 'product_show',
            ],
            [
                'id'    => 31,
                'title' => 'product_delete',
            ],
            [
                'id'    => 32,
                'title' => 'product_access',
            ],
            [
                'id'    => 33,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 34,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 35,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 36,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 37,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 38,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 39,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 40,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 41,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 42,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 43,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 44,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 45,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 46,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 47,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 48,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 49,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 50,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 51,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 52,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 53,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 54,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 55,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 56,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 57,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 58,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 59,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 60,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 61,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 62,
                'title' => 'news_create',
            ],
            [
                'id'    => 63,
                'title' => 'news_edit',
            ],
            [
                'id'    => 64,
                'title' => 'news_show',
            ],
            [
                'id'    => 65,
                'title' => 'news_delete',
            ],
            [
                'id'    => 66,
                'title' => 'news_access',
            ],
            [
                'id'    => 67,
                'title' => 'banner_create',
            ],
            [
                'id'    => 68,
                'title' => 'banner_edit',
            ],
            [
                'id'    => 69,
                'title' => 'banner_show',
            ],
            [
                'id'    => 70,
                'title' => 'banner_delete',
            ],
            [
                'id'    => 71,
                'title' => 'banner_access',
            ],
            [
                'id'    => 72,
                'title' => 'testimonial_create',
            ],
            [
                'id'    => 73,
                'title' => 'testimonial_edit',
            ],
            [
                'id'    => 74,
                'title' => 'testimonial_show',
            ],
            [
                'id'    => 75,
                'title' => 'testimonial_delete',
            ],
            [
                'id'    => 76,
                'title' => 'testimonial_access',
            ],
            [
                'id'    => 77,
                'title' => 'order_create',
            ],
            [
                'id'    => 78,
                'title' => 'order_edit',
            ],
            [
                'id'    => 79,
                'title' => 'order_show',
            ],
            [
                'id'    => 80,
                'title' => 'order_delete',
            ],
            [
                'id'    => 81,
                'title' => 'order_access',
            ],
            [
                'id'    => 82,
                'title' => 'coupon_code_create',
            ],
            [
                'id'    => 83,
                'title' => 'coupon_code_edit',
            ],
            [
                'id'    => 84,
                'title' => 'coupon_code_show',
            ],
            [
                'id'    => 85,
                'title' => 'coupon_code_delete',
            ],
            [
                'id'    => 86,
                'title' => 'coupon_code_access',
            ],
            [
                'id'    => 87,
                'title' => 'dashboard_access',
            ],
            [
                'id'    => 88,
                'title' => 'brand_create',
            ],
            [
                'id'    => 89,
                'title' => 'brand_edit',
            ],
            [
                'id'    => 90,
                'title' => 'brand_show',
            ],
            [
                'id'    => 91,
                'title' => 'brand_delete',
            ],
            [
                'id'    => 92,
                'title' => 'brand_access',
            ],
            [
                'id'    => 93,
                'title' => 'customer_create',
            ],
            [
                'id'    => 94,
                'title' => 'customer_edit',
            ],
            [
                'id'    => 95,
                'title' => 'customer_show',
            ],
            [
                'id'    => 96,
                'title' => 'customer_delete',
            ],
            [
                'id'    => 97,
                'title' => 'customer_access',
            ],
            [
                'id'    => 98,
                'title' => 'setting_access',
            ],
            [
                'id'    => 99,
                'title' => 'custom_form_access',
            ],
            [
                'id'    => 100,
                'title' => 'create_form_access',
            ],
            [
                'id'    => 101,
                'title' => 'event_create',
            ],
            [
                'id'    => 102,
                'title' => 'event_edit',
            ],
            [
                'id'    => 103,
                'title' => 'event_show',
            ],
            [
                'id'    => 104,
                'title' => 'event_delete',
            ],
            [
                'id'    => 105,
                'title' => 'event_access',
            ],
            [
                'id'    => 106,
                'title' => 'sub_category_create',
            ],
            [
                'id'    => 107,
                'title' => 'sub_category_edit',
            ],
            [
                'id'    => 108,
                'title' => 'sub_category_show',
            ],
            [
                'id'    => 109,
                'title' => 'sub_category_delete',
            ],
            [
                'id'    => 110,
                'title' => 'sub_category_access',
            ],
            [
                'id'    => 111,
                'title' => 'product_sub_category_create',
            ],
            [
                'id'    => 112,
                'title' => 'product_sub_category_edit',
            ],
            [
                'id'    => 113,
                'title' => 'product_sub_category_show',
            ],
            [
                'id'    => 114,
                'title' => 'product_sub_category_delete',
            ],
            [
                'id'    => 115,
                'title' => 'product_sub_category_access',
            ],
            [
                'id'    => 116,
                'title' => 'newsletter_subscription_create',
            ],
            [
                'id'    => 117,
                'title' => 'newsletter_subscription_edit',
            ],
            [
                'id'    => 118,
                'title' => 'newsletter_subscription_show',
            ],
            [
                'id'    => 119,
                'title' => 'newsletter_subscription_delete',
            ],
            [
                'id'    => 120,
                'title' => 'newsletter_subscription_access',
            ],
            [
                'id'    => 121,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
