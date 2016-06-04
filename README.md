# Ajax Contact Form

A Simple Ajax Contact Form developed in PHP with HTML5 Form validation and pure JavaScript.

## Demo

View [demo here](http://www.pinceladasdaweb.com.br/blog/uploads/ajax-contact-form/).

## Download

You can download the latest version or checkout all the releases [here](https://github.com/pinceladasdaweb/Ajax-Contact-Form/releases).

## Requirements

* PHP >=5.3

## How to use?

Open the config.php [`config.php`](contact-form/config/config.php) file and fill with your informations.

```php
<?php

return [
    'subject' => [
        'prefix' => '[Contact Form]'
    ],
    'emails' => [
        'to'   => '', // Email to receive emails via the form.
        'from' => ''  // A valid email where the domain should be the same when the form is hosted.
    ],
    'messages' => [
        'error'   => 'There was an error sending, please try again later.',
        'success' => 'Your message has been sent successfully.',
        'validation' => [
            'emptyname'    => 'Name is required.',
            'emptyemail'   => 'Email is invalid.',
            'emptysubject' => 'Subject is required.',
            'emptymessage' => 'Message is required.'
        ]
    ],
    'fields' => [
        'name'     => 'Name',
        'email'    => 'Email',
        'phone'    => 'Phone',
        'subject'  => 'Subject',
        'message'  => 'Message',
        'btn-send' => 'Send'
    ]
];
```

## Browser Support

![IE](https://raw.githubusercontent.com/alrra/browser-logos/master/internet-explorer/internet-explorer_48x48.png) | ![Chrome](https://raw.githubusercontent.com/alrra/browser-logos/master/chrome/chrome_48x48.png) | ![Firefox](https://raw.githubusercontent.com/alrra/browser-logos/master/firefox/firefox_48x48.png) | ![Opera](https://raw.githubusercontent.com/alrra/browser-logos/master/opera/opera_48x48.png) | ![Safari](https://raw.githubusercontent.com/alrra/browser-logos/master/safari/safari_48x48.png)
--- | --- | --- | --- | --- |
IE 9+ ✔ | Latest ✔ | Latest ✔ | Latest ✔ | Latest ✔ |

## Contributing

Check [CONTRIBUTING.md](CONTRIBUTING.md) for more information.

## History

Check [Releases](https://github.com/pinceladasdaweb/Simple-PHP-Contact-Form/releases) for detailed changelog.

## License

[MIT](LICENSE)