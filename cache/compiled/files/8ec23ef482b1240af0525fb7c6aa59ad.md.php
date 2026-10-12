<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/amer/Sites/drmohsingillani/user/pages/07.contact/contact.md',
    'modified' => 1791797226,
    'size' => 1443,
    'data' => [
        'header' => [
            'title' => 'Contact',
            'routes' => [
                'default' => '/contact'
            ],
            'lead' => 'We\'d love to hear from you. Call, write or send a message and our team will get back to you shortly.',
            'form_title' => 'Get in touch',
            'metadata' => [
                'description' => 'Contact Prof. Dr. Mohsin Gillani in Johar Town, Lahore. Call 042 35174502, email drmohsingillani@gmail.com or send us a message to book an appointment.'
            ],
            'form' => [
                'name' => 'contact',
                'fields' => [
                    'name' => [
                        'label' => 'Full name',
                        'placeholder' => 'Full name',
                        'type' => 'text',
                        'autocomplete' => 'name',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'phone' => [
                        'label' => 'Phone',
                        'placeholder' => 'Phone',
                        'type' => 'tel',
                        'autocomplete' => 'tel',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'email' => [
                        'label' => 'Email',
                        'placeholder' => 'E-mail address',
                        'type' => 'email',
                        'autocomplete' => 'email',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'message' => [
                        'label' => 'Message',
                        'placeholder' => 'Your message...',
                        'type' => 'textarea',
                        'rows' => 5
                    ],
                    'honeypot' => [
                        'type' => 'honeypot'
                    ]
                ],
                'buttons' => [
                    'submit' => [
                        'type' => 'submit',
                        'value' => 'Send a message'
                    ]
                ],
                'process' => [
                    0 => [
                        'save' => [
                            'fileprefix' => 'enquiry-',
                            'dateformat' => 'Ymd-His-u',
                            'extension' => 'txt',
                            'body' => '{% include \'forms/data.txt.twig\' %}'
                        ]
                    ],
                    1 => [
                        'email' => [
                            'subject' => '[Website enquiry] {{ form.value.name|e }}',
                            'body' => '{% include \'forms/data.html.twig\' %}',
                            'reply_to' => '{{ form.value.email }}'
                        ]
                    ],
                    2 => [
                        'message' => 'Thank you! Your message has been sent and we will get back to you shortly.'
                    ],
                    3 => [
                        'reset' => true
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Contact
routes:
  default: /contact
lead: We\'d love to hear from you. Call, write or send a message and our team will get back to you shortly.
form_title: Get in touch
metadata:
  description: Contact Prof. Dr. Mohsin Gillani in Johar Town, Lahore. Call 042 35174502, email drmohsingillani@gmail.com or send us a message to book an appointment.
form:
  name: contact
  fields:
    name:
      label: Full name
      placeholder: Full name
      type: text
      autocomplete: name
      validate:
        required: true
    phone:
      label: Phone
      placeholder: Phone
      type: tel
      autocomplete: tel
      validate:
        required: true
    email:
      label: Email
      placeholder: E-mail address
      type: email
      autocomplete: email
      validate:
        required: true
    message:
      label: Message
      placeholder: Your message...
      type: textarea
      rows: 5
    honeypot:
      type: honeypot
  buttons:
    submit:
      type: submit
      value: Send a message
  process:
  - save:
      fileprefix: enquiry-
      dateformat: Ymd-His-u
      extension: txt
      body: \'{% include \'\'forms/data.txt.twig\'\' %}\'
  - email:
      subject: \'[Website enquiry] {{ form.value.name|e }}\'
      body: \'{% include \'\'forms/data.html.twig\'\' %}\'
      reply_to: \'{{ form.value.email }}\'
  - message: Thank you! Your message has been sent and we will get back to you shortly.
  - reset: true',
        'markdown' => ''
    ]
];
