<?php

return [
    'alipay' => [
        'app_id'         => '2016092700610041',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA9odG4pU4JNWpe69lYBXWk5lV4e0b3dMCI28sQXVr28RLYID1VCtvq6N9UxPbNtb2j8x/AEJWrTyurzIw2Dg2d3h89CKUIGY9a+xV2vv6Yul0NxaQB7/XjzghskoV7nburkm3bssoiKRim1h3q+ILS7wHOnHoR1R5r1GFZDHGNP9wZQAIe6+A40zojg7KBZxWTDy211D0S9HIBV+w0gYtx6vgmseLJp01F6hHMxgLaQEkPLQia09gPmK/Pju2VQGSOmu9MC2Y8MpWNf+ps6J45v/hZmIhQozU6KndojCI5lon0OnT6hB2kY4zR7vYskHvvi5m9PPw5ATaOsVBEuSXcQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA0zjWREbgIwx1Dg3Us7zqGfr0/3xQKYUQminL7hayemjIBZPca+9ZH6dZR/G2W1va4Gaoy/8Tpb8ID7ItDJfbwCCaCdG6P2/5rQ+G5GE1zw6mp0M3WSWMwcLjHu2okHlpN90+farTol/N4xGGc3CHjMn8RamEBEJOKSLKefX+SoWakuUbkAyYvm9XgsKTjumLjJB7rOUDJBrepjcRJvB4EUBTimJFWAlULlijwxGyhjtiCbxT6X31Ug2hFFkuCgzoShWF7H1FqariakqoFQWOB0IlUwhCZG0M2UIVGsP2kWx6EqOGOjvSwjUBiEaFIDkCQJr1U3pO5pOwerMY9MO07wIDAQABAoIBABmGlN5LcmrJ5pt8MGhIPEJHgbQeYdGisw7uXia3t3nzj7ic1dZ1Zl/c6X04SMFhqGHWBjAg807kdyTuc2NCNtxRFEx7e/aOoa24YqTW2pnbO2ibRuUPFKOV2byzG9vZ0E1f/11Qd6L30PnP9F+fCcKJ5mLEyZ96I9f0zGNQxxpaMsGMZqRyTl61zt+kSc7vu7HdTISbsPkrnr9JLI2TCuGwBWsk+zbSZiEzn2mIsAQEgcf9rZkh443xKE2fRbFX5rTQZ97RXh4kJu4QwkbTYtXoGce942iJvUYA1/G0qrJKcWrbfjxpohNt64dJTq2Dpg8Sy6ximZzrEReuINDxL4ECgYEA8xzMZmJ3Y90aAeZMpu549FfzGXQkVEnayPauzhKNZPix4Hg5TlI9kxGZ8ACKuBorpSotY/niqJBtIdeJKONJAHnwyWXD3PjsVgZb0CVeFf5/Za6QwYAk0dfLhpeRRETGUkIQxWpipQAfVdYnFN1PFr8t2i48ug6ex5it37aFqeMCgYEA3mtDXkQMlQqScFP0U3CNNWiO9IUHWungJurAQEaQ1F2BSl7h6CkKbj+Y7cZnHz9wQu8XSjiLX+WtOXV05AhUdBKg9v3kbumPUmU8aH/DFXiiLUm2wVSZwXqKyvBuSZsX0D3L3YSaplqmgzAoCaQRHAgfLtMQ6Sh79LBlqPt2ZoUCgYBun1MO341N/qS/6ohEiUy2enKeyW9ifzyzpzQBhwWZxWRDLNF+pwNnsWGniMeWYCot/JQs4t7VLurJtGawGUP1mIcNTWYjXY1E053hh69ZOLXFkfpCYknexl/Q/ZTXSKgpc/BntDHwvK6Fg23DG7TKN/HoTpPJYa+0SPANVONbWwKBgQCGI8C0iGviM0cQEcIH1JiFPnMBC33dGbIDJo8d9LECMwZ3uPOb1ayhwx9TP9YPpW3qIFI2hBWil106ixkdMdzlSBrl+0eakKfMdJvTFkKsn12H3K4ouQImCubL7+dD4xKgl7Rs+71dWMyV0CRFdDqRYmCUF91aEP15HC2jlUzaFQKBgHkQyTsdTEIUcLr03p10lfjeb9APIlQu3OSFO/acMOXjsaoPlloGozZsku0BA3R851s6NKvIcN5cp4zAiVUG9X1bHzZG/xLGG1lN36WdgLB5sgU1RZtQi16KhoUuIPNftHzRcSiQebH3qnUzA9YphzEkrPpbs0EKCknx0y199E1I',
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
