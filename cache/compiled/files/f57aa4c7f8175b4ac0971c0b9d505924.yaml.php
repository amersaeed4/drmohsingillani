<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/drmohsingillani/user/themes/drmohsin/blueprints.yaml',
    'modified' => 1791797226,
    'size' => 10056,
    'data' => [
        'name' => 'Dr Mohsin Gillani',
        'slug' => 'drmohsin',
        'type' => 'theme',
        'version' => '1.0.0',
        'description' => 'Clean, fast, SEO-ready theme for the Prof. Dr. Mohsin Gillani clinic website. Every piece of site-wide content (contact details, header, footer, banner, colours) is editable from this screen.',
        'icon' => 'stethoscope',
        'author' => [
            'name' => 'Amer Saeed',
            'email' => 'mas@amersaeed.com'
        ],
        'license' => 'MIT',
        'compatibility' => [
            'grav' => [
                0 => '2.1'
            ]
        ],
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=2.1.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'clinic_tab' => [
                            'type' => 'tab',
                            'title' => 'Clinic Details',
                            'fields' => [
                                'clinic.name' => [
                                    'type' => 'text',
                                    'label' => 'Doctor / clinic name',
                                    'default' => 'Prof. Doctor Mohsin Gillani'
                                ],
                                'clinic.short_name' => [
                                    'type' => 'text',
                                    'label' => 'Short name (used in footer and copyright)',
                                    'default' => 'Doctor Mohsin Gillani'
                                ],
                                'clinic.tagline' => [
                                    'type' => 'text',
                                    'label' => 'Tagline',
                                    'help' => 'Shown in the footer and used as the default page title suffix for SEO.',
                                    'default' => 'Advanced Laparoscopic, Bariatric & Diabetes Surgeon in Lahore'
                                ],
                                'clinic.phone' => [
                                    'type' => 'text',
                                    'label' => 'Phone (as displayed)',
                                    'default' => '042 35174502'
                                ],
                                'clinic.phone_intl' => [
                                    'type' => 'text',
                                    'label' => 'Phone (international format, used for tap-to-call and SEO)',
                                    'help' => 'Example: +924235174502',
                                    'default' => '+924235174502'
                                ],
                                'clinic.email' => [
                                    'type' => 'email',
                                    'label' => 'Email',
                                    'default' => 'drmohsingillani@gmail.com'
                                ],
                                'clinic.address' => [
                                    'type' => 'textarea',
                                    'rows' => 3,
                                    'label' => 'Address',
                                    'default' => '4, 25, 26 Maulana Shaukat Ali Rd, Block A Phase 1 Johar Town, Lahore, Punjab'
                                ],
                                'clinic.locality' => [
                                    'type' => 'text',
                                    'label' => 'City',
                                    'default' => 'Lahore'
                                ],
                                'clinic.region' => [
                                    'type' => 'text',
                                    'label' => 'Province / state',
                                    'default' => 'Punjab'
                                ],
                                'clinic.country' => [
                                    'type' => 'text',
                                    'label' => 'Country code',
                                    'default' => 'PK'
                                ],
                                'clinic.hours' => [
                                    'type' => 'text',
                                    'label' => 'Opening hours (as displayed)',
                                    'default' => 'Mon - Sat: 9 AM - 6 PM'
                                ],
                                'clinic.hours_schema' => [
                                    'type' => 'text',
                                    'label' => 'Opening hours (schema.org format)',
                                    'help' => 'Used for Google. Example: Mo-Sa 09:00-18:00',
                                    'default' => 'Mo-Sa 09:00-18:00'
                                ],
                                'clinic.map_url' => [
                                    'type' => 'text',
                                    'label' => 'Google Maps link',
                                    'help' => 'Paste a "share" link from Google Maps. Shown as a "Get directions" link.',
                                    'default' => 'https://www.google.com/maps/search/?api=1&query=Maulana+Shaukat+Ali+Rd+Johar+Town+Lahore'
                                ]
                            ]
                        ],
                        'header_tab' => [
                            'type' => 'tab',
                            'title' => 'Header & Footer',
                            'fields' => [
                                'header_section' => [
                                    'type' => 'section',
                                    'title' => 'Header',
                                    'underline' => true
                                ],
                                'header.cta_label' => [
                                    'type' => 'text',
                                    'label' => 'Header button label',
                                    'default' => 'Book an appointment'
                                ],
                                'header.cta_link' => [
                                    'type' => 'text',
                                    'label' => 'Header button link',
                                    'default' => '/contact'
                                ],
                                'footer_section' => [
                                    'type' => 'section',
                                    'title' => 'Footer',
                                    'underline' => true
                                ],
                                'footer.about' => [
                                    'type' => 'textarea',
                                    'rows' => 3,
                                    'label' => 'Footer about text',
                                    'default' => 'Personalized obesity, diabetes and advanced laparoscopic surgery care in Lahore.'
                                ],
                                'footer.links_title' => [
                                    'type' => 'text',
                                    'label' => 'Footer links heading',
                                    'default' => 'Useful links'
                                ],
                                'footer.links' => [
                                    'type' => 'list',
                                    'label' => 'Footer links',
                                    'style' => 'vertical',
                                    'fields' => [
                                        '.label' => [
                                            'type' => 'text',
                                            'label' => 'Label'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'Link (page route or full URL)'
                                        ]
                                    ]
                                ],
                                'footer.copyright' => [
                                    'type' => 'text',
                                    'label' => 'Copyright line',
                                    'help' => '{year} is replaced with the current year automatically.',
                                    'default' => '© {year} Doctor Mohsin Gillani | All Rights Reserved'
                                ],
                                'footer.credit' => [
                                    'type' => 'text',
                                    'label' => 'Credit line (optional)',
                                    'placeholder' => 'e.g. Developed by ...'
                                ],
                                'social_section' => [
                                    'type' => 'section',
                                    'title' => 'Social links (leave blank to hide)',
                                    'underline' => true
                                ],
                                'social.facebook' => [
                                    'type' => 'text',
                                    'label' => 'Facebook URL'
                                ],
                                'social.instagram' => [
                                    'type' => 'text',
                                    'label' => 'Instagram URL'
                                ],
                                'social.youtube' => [
                                    'type' => 'text',
                                    'label' => 'YouTube URL'
                                ],
                                'social.linkedin' => [
                                    'type' => 'text',
                                    'label' => 'LinkedIn URL'
                                ],
                                'social.pinterest' => [
                                    'type' => 'text',
                                    'label' => 'Pinterest URL'
                                ],
                                'social.x' => [
                                    'type' => 'text',
                                    'label' => 'X / Twitter URL'
                                ]
                            ]
                        ],
                        'banner_tab' => [
                            'type' => 'tab',
                            'title' => 'Visit Banner',
                            'fields' => [
                                'facility.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Show the "Visit our facility" banner at the bottom of content pages',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'facility.heading' => [
                                    'type' => 'text',
                                    'label' => 'Heading',
                                    'default' => 'Visit our new facility. We\'re looking forward to seeing you!'
                                ],
                                'facility.show_address' => [
                                    'type' => 'toggle',
                                    'label' => 'Show the clinic address in the banner',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'facility.button_label' => [
                                    'type' => 'text',
                                    'label' => 'Button label',
                                    'default' => 'Book an appointment'
                                ],
                                'facility.button_link' => [
                                    'type' => 'text',
                                    'label' => 'Button link',
                                    'default' => '/contact'
                                ],
                                'facility.image' => [
                                    'type' => 'file',
                                    'label' => 'Banner image',
                                    'destination' => 'theme://images/uploads',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ]
                            ]
                        ],
                        'brand_tab' => [
                            'type' => 'tab',
                            'title' => 'Branding',
                            'fields' => [
                                'brand.primary' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Primary colour (buttons, links, highlights)',
                                    'default' => '#2b6cf5'
                                ],
                                'brand.navy' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Deep colour (headings, footer, hover states)',
                                    'default' => '#204289'
                                ],
                                'brand.accent' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Accent colour (list icons, small details)',
                                    'default' => '#d82423'
                                ],
                                'custom_logo' => [
                                    'type' => 'file',
                                    'label' => 'Logo',
                                    'help' => 'Replaces the default logo in the header. A PNG or SVG with transparent background works best.',
                                    'destination' => 'theme://images/uploads',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'custom_favicon' => [
                                    'type' => 'file',
                                    'label' => 'Favicon',
                                    'help' => 'Square PNG, SVG or ICO.',
                                    'destination' => 'theme://images/uploads',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/png',
                                        1 => 'image/svg+xml',
                                        2 => '.ico'
                                    ]
                                ]
                            ]
                        ],
                        'seo_tab' => [
                            'type' => 'tab',
                            'title' => 'Default SEO',
                            'fields' => [
                                'seo_intro' => [
                                    'type' => 'spacer',
                                    'text' => 'These defaults apply to every page that does not set its own value in the page\'s SEO tab.'
                                ],
                                'seo.title_suffix' => [
                                    'type' => 'text',
                                    'label' => 'Page title suffix',
                                    'help' => 'Appended to every page title, e.g. "Obesity Treatment | Prof. Doctor Mohsin Gillani".',
                                    'default' => 'Prof. Doctor Mohsin Gillani'
                                ],
                                'seo.home_title' => [
                                    'type' => 'text',
                                    'label' => 'Home page title',
                                    'default' => 'Prof. Dr. Mohsin Gillani | Bariatric, Laparoscopic & Diabetes Surgeon in Lahore'
                                ],
                                'seo.default_description' => [
                                    'type' => 'textarea',
                                    'rows' => 3,
                                    'label' => 'Default meta description',
                                    'help' => 'Used when a page has no description of its own. Aim for 120 to 160 characters.',
                                    'default' => 'Prof. Dr. Mohsin Gillani is a leading advanced laparoscopic, bariatric (obesity) and metabolic diabetes surgeon in Lahore, Pakistan, with more than 25 years of experience.'
                                ],
                                'seo.default_image' => [
                                    'type' => 'file',
                                    'label' => 'Default social sharing image (1200 x 630 recommended)',
                                    'destination' => 'theme://images/uploads',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'seo.twitter' => [
                                    'type' => 'text',
                                    'label' => 'X / Twitter handle',
                                    'placeholder' => '@yourhandle'
                                ],
                                'seo.schema_type' => [
                                    'type' => 'select',
                                    'label' => 'Business type (structured data)',
                                    'default' => 'Physician',
                                    'options' => [
                                        'Physician' => 'Physician',
                                        'MedicalClinic' => 'Medical clinic',
                                        'Hospital' => 'Hospital',
                                        'MedicalBusiness' => 'Medical business'
                                    ]
                                ],
                                'seo.noindex_site' => [
                                    'type' => 'toggle',
                                    'label' => 'Ask search engines NOT to index this site (use on staging only)',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Yes, hide from search engines',
                                        0 => 'No, allow indexing'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
