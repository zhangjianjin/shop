<?php

return [
    'alipay' => [
        'app_id'         => '2016092200566816',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAseKIOypRKY3pT+u1dspLaQB8b0F9DEuqee2/rZT9QZKSJbjajco4zj5bWSL4FKghPWLOwYDWfieUgJHAxxJmqFmpXUWMxsOU9EKq5Xd4kln2JYgX5D4T22JNC98K4QWoaKtvFIi2ccIHaRxNtNVIuqTSxEiQeIBb+rCWG1FD5EvkKIsgTlOxgxf0qsUwYXMpXvf2JB1LJ0iCXao3SIJERjRjDnrZdmF9rzoT9poT4akQsxYKXD0jemD40frN7Ir0oTljyr9hUKLbDGUfGC/6VBe62wi7KxhfSx8NX9LIeJzng/yTImuN6Mgnk2cGjdmYuUIrEhd3F/tim87tSDGEowIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAzbDX04Ni6mZt/LqdKIQKX9MwAGuzniMesTSYsoTh2myTr0ugsOGcajXLOX0nWlGXX49rmM+6VISo0VgB79E1LEJUsrZtZcUWV/rfBoWSuVjgjWwqFkNJheeJ9XtfJlujLG7fgSQ0YJoQRRE5R5QG5AakLLAUwLQkEBY1iXaUc19FBpFzSEZxdbPPUPqUk8IUgUk5m9Eu7WkfvdZXOyWsDD1kLaDcMIRaRwS3/8PmL7zgv+LoqaX9p/6VqHwYbYT5nUVC8QbWoiQ7tKZNuCO5ebYoYPW41TzPDaBfjtnWwy4WiARoHHeWTzgjtYSJseYkmSYIt9MV7562BMGKsKo4fwIDAQABAoIBAHZBC3Qw/zdfuDAqYZwffY9l7Rzwzo1GB6k9YeSQfQCEl8uaIUJQEwsE7leY2n0Ul4B7BhMOqkNZGW1xuXtUvcs6P1OXigGOc7AVLQ+kz5v7uu3Tl8bA3I49dZVKXoPA/2jWPW0TkYFQUbZDlrjOI8AJCW4ftW6somcVPaZQJDzHKqeMRmLbZREBeerzbAbNrTeOBH2Dpr5r3QK4QvpHgFcTrdHDLbFsHDH5VFeYz4buixP9wijMVK/XvKAAjNG8IsU7WuJiMVNmVoTIvOj3Ry/8CLI8WqyKIpclfcB4bk7bo+FBIk2COQnPyoFHZ2OeoFxTxyAcutt/v+2jEs69xZECgYEA84mYA3auObKtw91MYOzLTmTjn112rGET9FVN1hMdTm4P3JINY+QNdKVdDGTU2YCYaejsBjyVbxHufc3/OYwfNbbAYV1slxGUsRwlVngUVdgCvOjTk4AqOJAfe/cXZA3tTdgEjg3HNqwAMuj3did0gdqVSgPoq0Ac50tIGMsouVsCgYEA2DdylOiWoOHd17rZhC2XLSIRkaGlbGXbzEhVJ4VRFsMEXPFNHFNNC8ZVnmrxnDYNSBcqevF8CNf+NQRR3rcoLV4giloE8yTUqxezRhTAUJJPXFDePHtK4PLGR/XOfv9Fk2ZM4FS/2PjWC2YQkieSSjFuTQvq/pW5lHktx35qwq0CgYAlxgCrANxzHJCxIYD4Q6IhDar0i/WdNQ14R0bkXmCcSpvxNUIYbUXdAs0U4ArXlYeOXc9GBF2VNa3NG4drsJ0ioq7iKzBtmg97DQeJiuR0kCWUkXRHm4hw74HCo4egQDy/ZzMFqYNtqm35d4Lyc5oxjeq76TFMZoxVH6sWFWTCowKBgQDDIAb/64dEWZHjBnUWnC46ROymCMNJOANMMFro959ec1CUsA9u6J43ah4KgWjaGM2TqZRkr1nIgWSgY+2emJxhlPi44tRkuXBTl2fqbv+/tsp3/WMSIhJJP89BUcuxQJ6Bj2kBanpYTPieANYjkCKtYj6wuXixmF2KaHGv/55JYQKBgFtwIfow/IbybW1bhvQaOTXQEuzmi0SoPI1QL7N4/6QlKKLy7vaC4eVOYdBsEtL2M9uDhPmWfZMsfEEWesZEWdG0mE963Bb6ukBQCKhMqa3xlvlF7BusK9FH97WcUTka2FsekHw2vvFf87uZ4rrx20jFCbbXa24MxmW5mOyOG0N8',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
