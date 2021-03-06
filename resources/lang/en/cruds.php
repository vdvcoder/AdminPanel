<?php

return [
    'userManagement'         => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'             => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'                   => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'                   => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'coupon_codes'             => 'Coupon Codes',
            'coupon_codes_helper'      => ' ',
        ],
    ],
    'productManagement'      => [
        'title'          => 'Webshop',
        'title_singular' => 'Webshop',
    ],
    'productCategory'        => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'productTag'             => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'product'                => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'name'                   => 'Name',
            'name_helper'            => ' ',
            'description'            => 'Description',
            'description_helper'     => ' ',
            'price'                  => 'Price',
            'price_helper'           => ' ',
            'category'               => 'Categories',
            'category_helper'        => ' ',
            'tag'                    => 'Tags',
            'tag_helper'             => ' ',
            'photo'                  => 'Photo',
            'photo_helper'           => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated At',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted At',
            'deleted_at_helper'      => ' ',
            'technical_fiche'        => 'Technical Fiche',
            'technical_fiche_helper' => 'Upload  .pdf files about the product',
            'active'                 => 'Active',
            'active_helper'          => 'The active state of the product (enable/disable)',
            'featured'               => 'Featured',
            'featured_helper'        => ' ',
            'new'                    => 'New',
            'new_helper'             => ' ',
        ],
    ],
    'auditLog'               => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'contentManagement'      => [
        'title'          => 'Content management',
        'title_singular' => 'Content management',
    ],
    'contentCategory'        => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentTag'             => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentPage'            => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'title'                 => 'Title',
            'title_helper'          => ' ',
            'category'              => 'Categories',
            'category_helper'       => ' ',
            'tag'                   => 'Tags',
            'tag_helper'            => ' ',
            'page_text'             => 'Full Text',
            'page_text_helper'      => ' ',
            'excerpt'               => 'Excerpt',
            'excerpt_helper'        => ' ',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'faqManagement'          => [
        'title'          => 'FAQ Management',
        'title_singular' => 'FAQ Management',
    ],
    'faqCategory'            => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'faqQuestion'            => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'question'          => 'Question',
            'question_helper'   => ' ',
            'answer'            => 'Answer',
            'answer_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'news'                   => [
        'title'          => 'News',
        'title_singular' => 'News',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => 'The title of the news article',
            'description'        => 'Description',
            'description_helper' => 'Fill in a short discription about the article',
            'content'            => 'Content',
            'content_helper'     => 'Fill in the content of the news article',
            'slug'               => 'Slug',
            'slug_helper'        => 'Fill in a unique slug for the article',
            'categorie'          => 'Categorie',
            'categorie_helper'   => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'image'              => 'Image',
            'image_helper'       => 'Upload some images about the article',
        ],
    ],
    'banner'                 => [
        'title'          => 'Banners',
        'title_singular' => 'Banner',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'title'                 => 'Title',
            'title_helper'          => 'Fill in the title of the banner',
            'description'           => 'Description',
            'description_helper'    => 'Description about the banner',
            'image'                 => 'Image',
            'image_helper'          => 'Upload the banner image',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'call_to_action'        => 'Call To Action',
            'call_to_action_helper' => 'CTA: Fill in the link to where the button should go',
        ],
    ],
    'testimonial'            => [
        'title'          => 'Testimonials',
        'title_singular' => 'Testimonial',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'customer'          => 'Customer',
            'customer_helper'   => 'Fill in the name of the customer',
            'quote'             => 'Quote',
            'quote_helper'      => 'Fill in the testimonial of the customer',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'order'                  => [
        'title'          => 'Orders',
        'title_singular' => 'Order',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'uuid'                  => 'Uuid',
            'uuid_helper'           => ' ',
            'order'                 => 'Order',
            'order_helper'          => ' ',
            'payment_method'        => 'Payment Method',
            'payment_method_helper' => ' ',
            'payment'               => 'Payment',
            'payment_helper'        => ' ',
            'paid_at'               => 'Paid At',
            'paid_at_helper'        => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'couponCode'             => [
        'title'          => 'Coupon Codes',
        'title_singular' => 'Coupon Code',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'code'                 => 'Code',
            'code_helper'          => 'This is the unique coupon code',
            'reward'               => 'Reward',
            'reward_helper'        => 'The amount of reward you get with the coupon code',
            'quantity'             => 'Quantity',
            'quantity_helper'      => 'How many times the code can be used',
            'is_disposable'        => 'Is Disposable',
            'is_disposable_helper' => 'Use only 1 time',
            'expires_at'           => 'Expires At',
            'expires_at_helper'    => 'Date and time that the coupon code expires',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'used_at'              => 'Used At',
            'used_at_helper'       => 'When the coupon code was used',
        ],
    ],
    'dashboard'              => [
        'title'          => 'Dashboard',
        'title_singular' => 'Dashboard',
    ],
    'brand'                  => [
        'title'          => 'Brands',
        'title_singular' => 'Brand',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => 'The title of the brand',
            'description'        => 'Description',
            'description_helper' => 'Short description of the brand',
            'image'              => 'Image',
            'image_helper'       => 'Image of the brand',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'customer'               => [
        'title'          => 'Customers',
        'title_singular' => 'Customer',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => 'Name of the customer',
            'last_name'         => 'Last Name',
            'last_name_helper'  => 'Last name of the customer',
            'email'             => 'Email',
            'email_helper'      => 'E-mail of the customer',
            'password'          => 'Password',
            'password_helper'   => 'Password of the customer',
            'banned'            => 'Banned',
            'banned_helper'     => 'Ban/Lock the customer account',
            'order'             => 'Order',
            'order_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'setting'                => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
    ],
    'customForm'             => [
        'title'          => 'Custom Forms',
        'title_singular' => 'Custom Form',
    ],
    'createForm'             => [
        'title'          => 'Create Forms',
        'title_singular' => 'Create Form',
    ],
    'event'                  => [
        'title'          => 'Events',
        'title_singular' => 'Event',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => ' ',
            'title'                      => 'Title',
            'title_helper'               => 'Fill in the title of the event',
            'description'                => 'Description',
            'description_helper'         => 'Fill in the description of the event',
            'information'                => 'Information',
            'information_helper'         => 'Fill in some extra information about the event',
            'price'                      => 'Price',
            'price_helper'               => 'Price of the event',
            'how_many_people'            => 'How Many People',
            'how_many_people_helper'     => 'The number of people that can join the event',
            'location'                   => 'Location',
            'location_helper'            => 'The location of the event',
            'contact_information'        => 'Contact Information',
            'contact_information_helper' => 'Some contact information for the event',
            'starts'                     => 'Starts',
            'starts_helper'              => 'When the event starts',
            'ends'                       => 'Ends',
            'ends_helper'                => 'When the event ends',
            'created_at'                 => 'Created at',
            'created_at_helper'          => ' ',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => ' ',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => ' ',
        ],
    ],
    'subCategory'            => [
        'title'          => 'Sub Categories',
        'title_singular' => 'Sub Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => 'Title of the sub categorie',
            'parent'            => 'Parent',
            'parent_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'productSubCategory'     => [
        'title'          => 'Product Sub Categories',
        'title_singular' => 'Product Sub Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => 'Title of the sub categorie',
            'parent'            => 'Parent',
            'parent_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'newsletterSubscription' => [
        'title'          => 'Newsletter Subscriptions',
        'title_singular' => 'Newsletter Subscription',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'email'             => 'E-mail',
            'email_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
