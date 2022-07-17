## Розроблений функціонал

### Back-end

###### Розподілення користувачів за ролями
- super_user (головний адміністратор сервісу)
- advance_user (людина яка має права на публікацію власних оголошень)
- simple_user (звичайний користувач сервісу)

###### Аутентифікація
- реєстрація з підтвердженням e-mail адреси
- реєстрація з можливістю створення профіля для публікації власних оголошень
- сповіщення про успішне підтвердження e-mail адреси користувача
- вхід у систему

###### Особистий профіль
- редагування особистої інформації

###### Панель звичайного користувача (simple_user)
- перегляд та редагування профілю
- перегляд залишених коментарів з можливістю сховати або показати коментар
- перегляд власних бронювань

###### Панель користувача з правами на публікацію оголошень (advance_user)
- Апартаменти:
    - перегляд лише своїх апартаментів
    - створення нового апартаменту
    - редагування апартаменту

- Харчування:
    - перегляд усіх видів харчувань (спільна база з super_user)
    - створення нового запису харчування
    - можливість редагування **лише** своїх записів

- Активності:
    - перегляд усіх активностей (спільна база з super_user)
    - створення нового запису активності
    - можливість редагування **лише** своїх записів

- Тип розміщення:
    - перегляд усіх типів розміщення (спільна база з super_user)
    - створення нового запису розміщення
    - можливість редагування **лише** своїх записів

- Менеджери:
    - до кожного апартаменту, додана можливість прикріпити менеджера
    - перегляд лише своїх записів з менеджерами
    - можливість редагування **лише** своїх записів

- Коментарі:
    - перегляд коментарів, прикріплиних лише до своїх записів (апартаментів)
    - можливість показати або сховати коментар користувача

- Кімнати:
    - перегляд  **лише** своїх записів (кімнат)
    - створення нового запису кімнати
    - можливість редагування **лише** своїх записів

- Типи ліжок:
    - перегляд усіх типів ліжок (спільна база з super_user)
    - створення нового запису з типом ліжка
    - можливість редагування **лише** своїх записів

- Зручності:
    - перегляд усіх зручностей (спільна база з super_user)
    - створення нового запису із певною зручністю
    - можливість редагування **лише** своїх записів (зручностей)

- Бронювання:
    - перегляд бронювань, прикріплиних лише до своїх записів (апартаментів)
    - можливість редагування бронювання (при зміні статуса на "Відхилено" користувач отримує сповіщення на пошту)

###### Панель головного адміністратора  (super_user)
Головний адміністратор має всі вище перераховані функції та навіть більше (без жодних обмежень)

###### E-mail сповіщення
- e-mail сповіщення при верифікації пошти під час реєстрації
- e-mail сповіщення при успішній верифікації пошти користувача
- e-mail сповіщення при оформлені бронювання (на пошту користувача та на пошту прикріпленого менеджера до апартаменту з усіма даними)
- e-mail сповіщення при скачувані бронювання менеджером
- e-mail сповіщення на пошту менеджера апартаменту коли хтось публікує коментар

###### Захищення певної інформації
- по ролям (бібліотека Laravel-permission)
- по роутам (як web роути, так і api)
- використання Laravel Policy

### Front-end
###### Головна
- популярні кімнати
- популярні апартаменти

###### Сторінка  пошуку
- Пагінація

- Форма пошуку вільних кімнат:
    - Місто
    - Дата приїзду
    - Дата відїзду

- Фільтр:
    - Бюджет за ніч (мінімальна, максимальна ціна)
    - Тип розміщення
    - Тип ліжка
    - Харчування
    - Відстань до центру
    - Чим зайнятись у вільний час
    - Оцінка за відгуками
    - Зручності
    - Кількість зірок (рейтинг помешкання)

###### Сторінка  кімнати
- Перегляд інформації про кімнату
- Перегляд інформації про апартамент
- Перегляд контактної інформації менеджера
- Форма з бронюванням помешкання

###### Сторінка  апартаменту
- Перегляд інформації про апартамент
- Перегляд контактної інформації менеджера
- Можливість залишити відгук (коментар), якщо користувач зареєстрований та з підтвердженою поштою
- Динамічний розрахунок рейтингу апартаменту базуючись на залишених користувачами відгуках

# Встановлення проєкту та його запуск
1. Завантажте та встановіть [Open Server](https://ospanel.io/download "OpenServer")
2. Завантажте та встановіть Composer[Composer](https://getcomposer.org/download/ "Composer")
3. Завантажте та встановіть [NodeJS](https://nodejs.org/en/download/ "NodeJS")
4. Переконайтесь, що у Вас встановлений Git
5. Перейдіть по шляху, по якому Ви встановлювали Open Server та знайдіть там папку domains. Відкрийте у цій папці командне вікно та впишіть команду: `git clone https://github.com/aivakha/hotel-booking-backend-master.git`
6. Перейдіть в налаштування Open Server => налаштування => вкладка Домени. Змініть спосіб управління доменами на ручний та автопошук. Далі натисніть на "..." та перейдіть у папку встановленого проєкту за таким шляхом (domains/hotel-booking-backend-master/public) та натисніть "Ок". Далі, переконайтесь, що в графі "Ім'я домена" прописано hotel-booking-backend-master, а в графі "Папка домена" - hotel-booking-backend-master\public. Якщо все правильно, натисніть кнопки "Добавити", та потім "Зберегти".
7. Перейдіть у папку DB, яка знаходиться у корні проєкту, та зробіть імпорт бази даних в PHP My Admin.
8. Перейдіть у корінь проекту та перейменуйте файл` .env.example` командою у `.env`
9. У файлі .env замініть наступні рядки:
   `DB_DATABASE=laravel-hotel`
   `DB_USERNAME=root` (відповідно до Ваших налаштувань)
   `DB_PASSWORD=root` (відповідно до Ваших налаштувань)
10. Для роботи e-mail сповіщень та пошти загалом, - зареєструйтесь в сервісі Mailtrap та отримайте налаштування для `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD` та  `MAIL_ENCRYPTION`. (отримані налаштування, пропишуть у файлі .env)
11. Виконайте `composer install`
12. Виконайте `npm install`
13. Виконайте `php artisan storage:link`
14. Запустіть команду `npm run watch`
