<?php

return [
    'shop' => [
        'subscription' => [
            'already-subscribed' => 'Ви вже підписані на нашу розсилку.',
            'subscribe-success'  => 'Ви успішно підписалися на нашу розсилку.',
        ],

        'customers' => [
            'no-login-customer' => 'Попередження: Користувача без входу не знайдено.',
            'success-login'     => 'Успішно: Користувач успішно увійшов.',
            'success-logout'    => 'Успішно: Користувач успішно вийшов.',

            'signup' => [
                'error-registration' => 'Попередження: Реєстрація користувача не вдалася.',
                'success-verify'     => 'Обліковий запис успішно створено, на вашу електронну пошту надіслано лист для підтвердження.',
            ],

            'login' => [
                'invalid-creds' => 'Перевірте свої облікові дані та спробуйте ще раз.',
                'not-activated' => 'Вашу активацію потрібно схвалити адміністратором',
                'verify-first'  => 'Спочатку підтвердіть свою електронну пошту.',
                'suspended'     => 'Ваш обліковий запис був призупинений адміністратором.',

                'validation' => [
                    'required' => 'Поле :field є обов\'язковим.',
                    'same'     => 'Поле :field та пароль повинні співпадати.',
                    'unique'   => 'Це :field вже використовується.',
                ],
            ],

            'forgot-password' => [
                'already-sent'    => 'Посилання для скидання пароля вже надіслано на вашу електронну пошту.',
                'email-not-exist' => 'Електронна пошта не існує.',
                'reset-link-sent' => 'Посилання для скидання пароля надіслано на вашу електронну пошту.',
            ],

            'account' => [
                'profile' => [
                    'customer-details' => 'Успішно: Деталі користувача успішно отримані.',
                    'delete-success'   => 'Успішно: Обліковий запис успішно видалено.',
                    'password-unmatch' => 'Пароль не співпадає.',
                    'update-fail'      => 'Попередження: Профіль не оновлено',
                    'update-success'   => 'Успішно: Профіль успішно оновлено.',
                    'wrong-password'   => 'Пароль невірний.',
                ],

                'addresses' => [
                    'create-success'         => 'Адресу успішно створено.',
                    'default-update-success' => 'Адреса встановлена як типова',
                    'delete-success'         => 'Адресу успішно видалено',
                    'not-found'              => 'Попередження: Адресу не знайдено.',
                    'update-success'         => 'Адресу успішно оновлено.',
                ],

                'wishlist' => [
                    'product-removed' => 'Попередження: Продукт не знайдено.',
                    'success'         => 'Успішно: Продукт успішно додано до списку бажань.',
                    'already-exist'   => 'Попередження: Вже додано до списку бажань.',
                    'remove-success'  => 'Успішно: Елемент успішно видалено зі списку бажань.',
                    'not-found'       => 'Попередження: В списку бажань не знайдено продуктів.',
                    'moved-success'   => 'Успішно: Вибрані елементи успішно переміщено до списку бажань.',
                ],

                'orders' => [
                    'not-found'      => 'Попередження: Замовлення не знайдено.',
                    'cancel-error'   => 'Попередження: Замовлення не скасовано.',
                    'cancel-success' => 'Успішно: Замовлення успішно скасовано.',

                    'shipment' => [
                        'not-found' => 'Попередження: Відправлення не знайдено.',
                    ],

                    'invoice' => [
                        'not-found' => 'Попередження: Рахунок-фактура не знайдено.',
                    ],

                    'refund' => [
                        'not-found' => 'Попередження: Повернення не знайдено.',
                    ],
                ],

                'downloadable-products' => [
                    'not-found'      => 'Попередження: Завантажуваний продукт не знайдено.',
                    'not-auth'       => 'Попередження: Ви не маєте дозволу на виконання цієї дії.',
                    'payment-error'  => 'Платіж не був здійснений за це завантаження.',
                    'download-error' => 'Посилання для завантаження закінчилося.',
                ],
            ],

            'compare-product' => [
                'not-found'           => 'Попередження: Продукт для порівняння не знайдено.',
                'product-not-found'   => 'Попередження: Продукт не знайдено.',
                'already-added'       => 'Попередження: Продукт вже доданий до списку порівняння.',
                'item-add-success'    => 'Успіх: Продукт успішно додано до списку порівняння.',
                'remove-success'      => 'Успіх: Елемент успішно видалено зі списку порівняння.',
                'mass-remove-success' => 'Успіх: Обрані елементи успішно видалено.',
            ],

            'reviews' => [
                'create-success'      => 'Успішно: Відгук успішно створено.',
                'delete-success'      => 'Успішно: Відгук успішно видалено.',
                'not-found'           => 'Попередження: Відгук не знайдено.',
                'mass-delete-success' => 'Успішно: Вибрані відгуки успішно видалено.',
            ],
        ],

        'checkout' => [
            'cart' => [
                'item' => [
                    'error' => [
                        'invalid-parameter' => 'Попередження: Надано недійсні параметри.',
                    ],

                    'success' => [
                        'add-to-cart'      => 'Успішно: Продукт успішно додано до кошика.',
                        'update-to-cart'   => 'Успішно: Продукт успішно оновлено в кошику.',
                        'delete-cart-item' => 'Успішно: Елемент успішно видалено з кошика.',
                        'all-remove'       => 'Успішно: Всі елементи успішно видалено з кошика.',
                        'move-to-wishlist' => 'Успішно: Вибрані елементи успішно переміщено до списку бажань.',
                    ],

                    'fail' => [
                        'all-remove'       => 'Попередження: Всі елементи не видалено з кошика.',
                        'update-to-cart'   => 'Попередження: Продукт не оновлено в кошику.',
                        'delete-cart-item' => 'Попередження: Елемент не видалено з кошика.',
                        'not-found'        => 'Попередження: Кошик не знайдено.',
                        'item-not-found'   => 'Попередження: Елемент не знайдено.',
                        'all-remove'       => 'Попередження: Всі елементи не видалено з кошика.',
                        'move-to-wishlist' => 'Попередження: Вибрані елементи не переміщено до списку бажань.',
                    ],
                ],
            ],

            'addresses' => [
                'guest-address-warning'     => 'Попередження: Гостю не можна додавати адресу.',
                'guest-checkout-warning'    => 'Попередження: Гостю не можна оформити замовлення.',
                'no-billing-address-found'  => 'Попередження: Не знайдено адресу для оплати.',
                'no-shipping-address-found' => 'Попередження: Не знайдено адресу для доставки.',
                'address-save-success'      => 'Успішно: Адресу успішно збережено.',
            ],

            'shipping' => [
                'method-not-found' => 'Попередження: Спосіб доставки не знайдено.',
                'method-fetched'   => 'Успішно: Спосіб доставки успішно отримано.',
                'save-failed'      => 'Попередження: Спосіб доставки не збережено.',
                'save-success'     => 'Успішно: Спосіб доставки успішно збережено.',
            ],

            'payment' => [
                'method-not-found' => 'Попередження: Спосіб оплати не знайдено.',
                'method-fetched'   => 'Успішно: Спосіб оплати успішно отримано.',
                'save-failed'      => 'Попередження: Спосіб оплати не збережено.',
                'save-success'     => 'Успішно: Спосіб оплати успішно збережено.',
            ],

            'coupon' => [
                'apply-success'   => 'Успішно: Код купона успішно застосовано.',
                'already-applied' => 'Попередження: Код купона вже застосовано.',
                'invalid-code'    => 'Попередження: Код купона недійсний.',
                'remove-success'  => 'Успішно: Код купона успішно видалено.',
                'remove-failed'   => 'Попередження: Код купона не видалено.',
            ],

            'something-wrong'          => 'Попередження: Щось пішло не так.',
            'invalid-guest-user'       => 'Попередження: Недійсний гістьовий користувач.',
            'empty-cart'               => 'Попередження: Кошик порожній.',
            'missing-billing-address'  => 'Попередження: Відсутня адреса для оплати.',
            'missing-shipping-address' => 'Попередження: Відсутня адреса для доставки.',
            'missing-shipping-method'  => 'Попередження: Відсутній спосіб доставки.',
            'missing-payment-method'   => 'Попередження: Відсутній спосіб оплати.',
            'no-address-found'         => 'Попередження: Не знайдено адресу для оплати та доставки.',
        ],
    ],

    'admin' => [
        'acl' => [
            'create'            => 'Створити',
            'delete'            => 'Видалити',
            'edit'              => 'Редагувати',
            'mass-delete'       => 'Масове видалення',
            'mass-update'       => 'Масове оновлення',
            'push-notification' => 'Повідомлення Push',
            'send'              => 'Надіслати',
        ],

        'components' => [
            'layouts' => [
                'sidebar' => [
                    'push-notification' => 'Повідомлення Push',
                ],
            ],
        ],

        'configuration' => [
            'index' => [
                'general' => [
                    'graphql-api' => [
                        'notification-topic'              => 'Тема сповіщення',
                        'info'                            => 'Налаштування, пов’язані зі сповіщеннями',
                        'push-notification-configuration' => 'Налаштування Push-сповіщень FCM',
                        'title'                           => 'GraphQL API',
                        'private-key'                     => 'Вміст JSON файлу приватного ключа',
                        'info-get-private-key'            => 'Інформація: Щоб отримати вміст JSON файлу приватного ключа FCM: <a href="https://console.firebase.google.com/" target="_blank">Натисніть тут</a>',
                    ],

                    'content' => [
                        'custom-script' => [
                            'update-success' => 'Успішно: Користувацькі скрипти успішно оновлено.',
                        ],
                    ],
                ],
            ],
        ],

        'sales' => [
            'orders' => [
                'cancel-error'   => 'Попередження: Замовлення не може бути скасоване.',
                'cancel-success' => 'Успішно: Замовлення успішно скасоване.',
                'not-found'      => 'Попередження: Замовлення не знайдено.',
            ],

            'shipments' => [
                'creation-error'   => 'Попередження: Відвантаження не створено.',
                'not-found'        => 'Попередження: Відвантаження не знайдено.',
                'quantity-invalid' => 'Попередження: Надано недійсну кількість.',
                'shipment-error'   => 'Попередження: Відвантаження не створено.',
                'create-success'   => 'Успішно: Відвантаження успішно створено.',
            ],

            'invoices' => [
                'creation-error' => 'Попередження: Рахунок-фактура не створено.',
                'not-found'      => 'Попередження: Рахунок-фактура не знайдено.',
                'product-error'  => 'Попередження: Надано недійсний товар.',
                'create-success' => 'Успішно: Рахунок-фактура успішно створено.',
            ],

            'refunds' => [
                'creation-error'      => 'Попередження: Повернення не створено.',
                'refund-amount-error' => 'Попередження: Надано недійсну суму повернення.',
                'refund-limit-error'  => 'Попередження: Сума повернення перевищує ліміт в :amount',
                'not-found'           => 'Попередження: Повернення не знайдено.',
                'create-success'      => 'Успішно: Повернення успішно створено.',
            ],

            'transactions' => [
                'already-paid'   => 'Попередження: Рахунок-фактура вже оплачений.',
                'amount-exceed'  => 'Попередження: Сума транзакції перевищує ліміт.',
                'zero-amount'    => 'Попередження: Сума транзакції повинна бути більше нуля.',
                'create-success' => 'Успішно: Транзакцію успішно створено.',
            ],

            'reorder' => [
                'cart-not-found'           => 'Попередження: Кошик не знайдено.',
                'cart-item-not-found'      => 'Попередження: Елемент кошика не знайдено.',
                'cart-create-success'      => 'Успішно: Кошик успішно створено.',
                'cart-item-add-success'    => 'Успішно: Товар успішно додано до кошика.',
                'cart-item-remove-success' => 'Успішно: Елемент успішно видалено з кошика.',
                'cart-item-update-success' => 'Успішно: Товар успішно оновлено в кошику.',
                'something-wrong'          => 'Попередження: Щось пішло не так.',
                'address-save-success'     => 'Успішно: Адресу успішно збережено.',
                'shipping-save-success'    => 'Успішно: Метод доставки успішно збережено.',
                'payment-save-success'     => 'Успішно: Метод оплати успішно збережено.',
                'order-placed-success'     => 'Успішно: Замовлення успішно оформлено.',
                'payment-method-not-found' => 'Попередження: Метод оплати не знайдено.',
                'minimum-order-amount-err' => 'Попередження: Мінімальна сума замовлення повинна бути :amount',
                'check-shipping-address'   => 'Попередження: Будь ласка, перевірте адресу доставки.',
                'check-billing-address'    => 'Попередження: Будь ласка, перевірте адресу оплати.',
                'specify-shipping-method'  => 'Попередження: Будь ласка, вкажіть метод доставки.',
                'specify-payment-method'   => 'Попередження: Будь ласка, вкажіть метод оплати.',
                'coupon-not-valid'         => 'Попередження: Код купона недійсний.',
                'coupon-already-applied'   => 'Попередження: Код купона вже застосований.',
                'coupon-applied'           => 'Успішно: Код купона успішно застосований.',
                'coupon-removed'           => 'Успішно: Код купона успішно видалений.',
            ],
        ],

        'catalog' => [
            'products' => [
                'create-success'            => 'Товар успішно створено.',
                'delete-success'            => 'Товар успішно видалено',
                'not-found'                 => 'Попередження: Товар не знайдено.',
                'update-success'            => 'Товар успішно оновлено.',
                'configurable-attr-missing' => 'Попередження: Відсутній атрибут для конфігурації.',
                'simple-products-error'     => 'Попередження: Відсутні прості товари.',
            ],

            'categories' => [
                'already-taken'  => 'Попередження: Шлях (slug) вже використовується.',
                'create-success' => 'Категорію успішно створено.',
                'delete-success' => 'Категорію успішно видалено',
                'not-found'      => 'Попередження: Категорію не знайдено.',
                'update-success' => 'Категорію успішно оновлено.',
                'root-delete'    => 'Попередження: Кореневу категорію не можна видалити.',
            ],

            'attributes' => [
                'create-success'    => 'Атрибут успішно створено.',
                'delete-success'    => 'Атрибут успішно видалено',
                'not-found'         => 'Попередження: Атрибут не знайдено.',
                'update-success'    => 'Атрибут успішно оновлено.',
                'user-define-error' => 'Попередження: Ви не маєте права видаляти системні атрибути.',
            ],

            'attribute-groups' => [
                'create-success'    => 'Групу атрибутів успішно створено.',
                'delete-success'    => 'Групу атрибутів успішно видалено',
                'not-found'         => 'Попередження: Групу атрибутів не знайдено.',
                'update-success'    => 'Групу атрибутів успішно оновлено.',
                'user-define-error' => 'Попередження: Ви не маєте права видаляти системні групи атрибутів.',
            ],

            'attribute-families' => [
                'create-success'          => 'Сімейство атрибутів успішно створено.',
                'delete-success'          => 'Сімейство атрибутів успішно видалено',
                'not-found'               => 'Попередження: Сімейство атрибутів не знайдено.',
                'update-success'          => 'Сімейство атрибутів успішно оновлено.',
                'last-delete-error'       => 'Попередження: Останнє сімейство атрибутів не можна видалити.',
                'attribute-product-error' => 'Попередження: Деякі товари пов\'язані з цим сімейством атрибутів.',
                'user-define-error'       => 'Попередження: Ви не маєте права видаляти системні сімейства атрибутів.',
            ],
        ],

        'customers' => [
            'customers' => [
                'create-success'       => 'Клієнт успішно створений.',
                'delete-order-pending' => 'Неможливо видалити обліковий запис клієнта, оскільки є незавершені або обробляються деякі замовлення.',
                'delete-success'       => 'Клієнт успішно видалений',
                'not-found'            => 'Попередження: Клієнт не знайдений.',
                'note-created-success' => 'Примітка успішно створена',
                'update-success'       => 'Клієнт успішно оновлений.',
                'login-success'        => 'Клієнт успішно увійшов в систему.',
            ],

            'addressess' => [
                'create-success'         => 'Адреса клієнта успішно створена.',
                'default-update-success' => 'Адреса встановлена як типова',
                'delete-success'         => 'Адреса клієнта успішно видалена',
                'not-found'              => 'Попередження: Адреса клієнта не знайдена.',
                'update-success'         => 'Адреса клієнта успішно оновлена.',
            ],

            'groups' => [
                'create-success'     => 'Група клієнтів успішно створена.',
                'customer-associate' => 'Попередження: Групу неможливо видалити. Клієнт пов\'язаний з нею.',
                'delete-success'     => 'Група клієнтів успішно видалена',
                'not-found'          => 'Попередження: Група клієнтів не знайдена.',
                'update-success'     => 'Група клієнтів успішно оновлена.',
                'user-define-error'  => 'Попередження: Ви не маєте права видаляти системні групи клієнтів.',
            ],

            'reviews' => [
                'delete-success' => 'Відгук успішно видалений',
                'not-found'      => 'Попередження: Відгук не знайдений.',
                'update-success' => 'Відгук успішно оновлений.',
            ],
        ],

        'cms' => [
            'already-taken'  => 'Попередження: Шлях (slug) вже використовується.',
            'create-success' => 'CMS успішно створено.',
            'delete-success' => 'CMS успішно видалено',
            'not-found'      => 'Попередження: CMS не знайдено.',
            'update-success' => 'CMS успішно оновлено.',
        ],

        'marketing' => [
            'promotions' => [
                'catalog-rules' => [
                    'create-success' => 'Правило каталогу успішно створено.',
                    'delete-failed'  => 'Попередження: Правило каталогу не видалено',
                    'delete-success' => 'Правило каталогу успішно видалено',
                    'not-found'      => 'Попередження: Правило каталогу не знайдено.',
                    'update-success' => 'Правило каталогу успішно оновлено.',
                ],

                'cart-rules' => [
                    'create-success' => 'Правило кошика успішно створено.',
                    'delete-failed'  => 'Попередження: Правило кошика не видалено',
                    'delete-success' => 'Правило кошика успішно видалено',
                    'not-found'      => 'Правило кошика не знайдено',
                    'update-success' => 'Правило кошика успішно оновлено.',
                ],
            ],

            'communications' => [
                'email-templates' => [
                    'create-success' => 'Шаблон електронної пошти успішно створено.',
                    'delete-success' => 'Шаблон електронної пошти успішно видалено',
                    'not-found'      => 'Попередження: Шаблон електронної пошти не знайдено.',
                    'update-success' => 'Шаблон електронної пошти успішно оновлено.',
                ],

                'events' => [
                    'create-success' => 'Подію успішно створено.',
                    'delete-success' => 'Подію успішно видалено',
                    'not-found'      => 'Попередження: Подію не знайдено.',
                    'update-success' => 'Подію успішно оновлено.',
                ],

                'campaigns' => [
                    'create-success' => 'Кампанію успішно створено.',
                    'delete-success' => 'Кампанію успішно видалено',
                    'not-found'      => 'Попередження: Кампанію не знайдено.',
                    'update-success' => 'Кампанію успішно оновлено.',
                ],

                'subscriptions' => [
                    'delete-success'      => 'Підписку успішно видалено',
                    'not-found'           => 'Попередження: Підписку не знайдено.',
                    'unsubscribe-success' => 'Успішно: Підписку успішно відмінено.',
                ],
            ],

            'seo' => [
                'url-rewrites' => [
                    'create-success' => 'URL-перезапис успішно створено.',
                    'delete-success' => 'URL-перезапис успішно видалено',
                    'not-found'      => 'Попередження: URL-перезапис не знайдено.',
                    'update-success' => 'URL-перезапис успішно оновлено.',
                ],

                'search-terms' => [
                    'create-success' => 'Пошуковий термін успішно створено.',
                    'delete-success' => 'Пошуковий термін успішно видалено',
                    'not-found'      => 'Попередження: Пошуковий термін не знайдено.',
                    'update-success' => 'Пошуковий термін успішно оновлено.',
                ],

                'search-synonyms' => [
                    'create-success' => 'Синонім пошуку успішно створено.',
                    'delete-success' => 'Синонім пошуку успішно видалено',
                    'not-found'      => 'Попередження: Синонім пошуку не знайдено.',
                    'update-success' => 'Синонім пошуку успішно оновлено.',
                ],

                'sitemaps' => [
                    'create-success' => 'Карта сайту успішно створена.',
                    'delete-success' => 'Карта сайту успішно видалена',
                    'not-found'      => 'Попередження: Карта сайту не знайдена.',
                    'update-success' => 'Карта сайту успішно оновлена.',
                ],
            ],
        ],

        'settings' => [
            'locales' => [
                'create-success'       => 'Мову успішно створено.',
                'default-delete-error' => 'Мову за замовчуванням неможливо видалити.',
                'delete-error'         => 'Помилка видалення мови.',
                'delete-success'       => 'Мову успішно видалено.',
                'last-delete-error'    => 'Останню мову неможливо видалити.',
                'not-found'            => 'Попередження: Мову не знайдено.',
                'update-success'       => 'Мову успішно оновлено.',
            ],

            'currencies' => [
                'create-success'       => 'Валюту успішно створено.',
                'default-delete-error' => 'Валюту за замовчуванням неможливо видалити.',
                'delete-error'         => 'Помилка видалення валюти.',
                'delete-success'       => 'Валюту успішно видалено.',
                'last-delete-error'    => 'Останню валюту неможливо видалити.',
                'not-found'            => 'Попередження: Валюту не знайдено.',
                'update-success'       => 'Валюту успішно оновлено.',
            ],

            'exchange-rates' => [
                'create-success'          => 'Курс обміну успішно створено.',
                'delete-error'            => 'Помилка видалення курсу обміну.',
                'delete-success'          => 'Курс обміну успішно видалено.',
                'invalid-target-currency' => 'Попередження: Недійсна цільова валюта.',
                'last-delete-error'       => 'Останній курс обміну неможливо видалити.',
                'not-found'               => 'Попередження: Курс обміну не знайдено.',
                'update-success'          => 'Курс обміну успішно оновлено.',
            ],

            'inventory-sources' => [
                'create-success'    => 'Склад успішно створено.',
                'delete-error'      => 'Помилка видалення складу.',
                'delete-success'    => 'Склад успішно видалено.',
                'last-delete-error' => 'Останній склад неможливо видалити.',
                'not-found'         => 'Попередження: Склад не знайдено.',
                'update-success'    => 'Склад успішно оновлено.',
            ],

            'channels' => [
                'create-success'       => 'Канал успішно створено.',
                'default-delete-error' => 'Канал за замовчуванням неможливо видалити.',
                'delete-error'         => 'Помилка видалення каналу.',
                'delete-success'       => 'Канал успішно видалено.',
                'last-delete-error'    => 'Останній канал неможливо видалити.',
                'not-found'            => 'Попередження: Канал не знайдено.',
                'update-success'       => 'Канал успішно оновлено.',
            ],

            'users' => [
                'activate-warning'  => 'Ваш обліковий запис ще не активовано, зверніться до адміністратора.',
                'create-success'    => 'Користувача успішно створено.',
                'delete-error'      => 'Помилка видалення користувача.',
                'delete-success'    => 'Користувача успішно видалено.',
                'last-delete-error' => 'Останнього користувача неможливо видалити.',
                'login-error'       => 'Перевірте свої облікові дані та спробуйте ще раз.',
                'not-found'         => 'Попередження: Користувача не знайдено.',
                'success-login'     => 'Успішно: Користувач успішно увійшов в систему.',
                'success-logout'    => 'Успішно: Користувач успішно вийшов з системи.',
                'update-success'    => 'Користувача успішно оновлено.',
            ],

            'roles' => [
                'create-success'    => 'Роль успішно створено.',
                'delete-error'      => 'Помилка видалення ролі.',
                'delete-success'    => 'Роль успішно видалено.',
                'last-delete-error' => 'Останню роль неможливо видалити.',
                'not-found'         => 'Попередження: Роль не знайдено.',
                'update-success'    => 'Роль успішно оновлено.',
            ],

            'themes' => [
                'create-success' => 'Тему успішно створено.',
                'delete-success' => 'Тему успішно видалено.',
                'not-found'      => 'Попередження: Тему не знайдено.',
                'update-success' => 'Тему успішно оновлено.',
            ],

            'tax-rates' => [
                'create-success' => 'Ставку податку успішно створено.',
                'delete-error'   => 'Помилка видалення ставки податку.',
                'delete-success' => 'Ставку податку успішно видалено.',
                'not-found'      => 'Попередження: Ставку податку не знайдено.',
                'update-success' => 'Ставку податку успішно оновлено.',
            ],

            'tax-category' => [
                'create-success'     => 'Категорію податку успішно створено.',
                'delete-error'       => 'Помилка видалення категорії податку.',
                'delete-success'     => 'Категорію податку успішно видалено.',
                'not-found'          => 'Попередження: Категорію податку не знайдено.',
                'tax-rate-not-found' => 'Задані ідентифікатори не знайдені. Ідентифікатори: :ids',
                'update-success'     => 'Категорію податку успішно оновлено.',
            ],

            'notification' => [
                'index' => [
                    'add-title' => 'Додати сповіщення',
                    'general'   => 'Загальне',
                    'title'     => 'Push-сповіщення',

                    'datagrid' => [
                        'channel-name'         => 'Назва каналу',
                        'created-at'           => 'Час створення',
                        'delete'               => 'Видалити',
                        'id'                   => 'Ідентифікатор',
                        'image'                => 'Зображення',
                        'notification-content' => 'Зміст сповіщення',
                        'notification-status'  => 'Статус сповіщення',
                        'notification-type'    => 'Тип сповіщення',
                        'text-title'           => 'Заголовок',
                        'update'               => 'Оновити',
                        'updated-at'           => 'Час оновлення',

                        'status' => [
                            'disabled' => 'Вимкнено',
                            'enabled'  => 'Увімкнено',
                        ],
                    ],
                ],

                'create' => [
                    'back-btn'             => 'Назад',
                    'content-and-image'    => 'Зміст сповіщення та зображення',
                    'create-btn-title'     => 'Зберегти сповіщення',
                    'general'              => 'Загальне',
                    'image'                => 'Зображення',
                    'new-notification'     => 'Нове сповіщення',
                    'notification-content' => 'Зміст сповіщення',
                    'notification-type'    => 'Тип сповіщення',
                    'product-cat-id'       => 'Ідентифікатор товару/категорії',
                    'settings'             => 'Налаштування',
                    'status'               => 'Статус',
                    'store-view'           => 'Канали',
                    'title'                => 'Push-сповіщення',

                    'option-type' => [
                        'category' => 'Категорія',
                        'others'   => 'Звичайне',
                        'product'  => 'Товар',
                    ],
                ],

                'edit' => [
                    'back-btn'             => 'Назад',
                    'content-and-image'    => 'Зміст сповіщення та зображення',
                    'edit-notification'    => 'Редагувати сповіщення',
                    'general'              => 'Загальне',
                    'image'                => 'Зображення',
                    'notification-content' => 'Зміст сповіщення',
                    'notification-type'    => 'Тип сповіщення',
                    'product-cat-id'       => 'Ідентифікатор товару/категорії',
                    'send-title'           => 'Надіслати сповіщення',
                    'settings'             => 'Налаштування',
                    'status'               => 'Статус',
                    'store-view'           => 'Канали',
                    'title'                => 'Push-сповіщення',
                    'update-btn-title'     => 'Оновити',

                    'option-type' => [
                        'category' => 'Категорія',
                        'others'   => 'Звичайне',
                        'product'  => 'Товар',
                    ],
                ],

                'not-found'           => 'Попередження: Сповіщення не знайдено.',
                'create-success'      => 'Сповіщення успішно створено.',
                'delete-failed'       => 'Помилка видалення сповіщення.',
                'delete-success'      => 'Сповіщення успішно видалено.',
                'mass-update-success' => 'Вибрані сповіщення успішно оновлено.',
                'mass-delete-success' => 'Вибрані сповіщення успішно видалено.',
                'no-value-selected'   => 'немає жодного значення.',
                'send-success'        => 'Сповіщення успішно надіслано.',
                'update-success'      => 'Сповіщення успішно оновлено.',
                'configuration-error' => 'Попередження: Налаштування FCM не знайдено.',
                'product-not-found'   => 'Попередження: Товар не знайдено.',
                'category-not-found'  => 'Попередження: Категорію не знайдено.',
            ],
        ],

        'response' => [
            'error' => [
                'invalid-parameter' => 'Попередження: Вказано недійсні параметри.',
            ],
        ],
    ],
];
