<?php
/** Ukrainian (українська)
 *
 * @file
 * @ingroup Languages
 *
 * @author A1
 * @author AS
 * @author Aced
 * @author Ahonc
 * @author Aleksandrit
 * @author Alex Khimich
 * @author AlexSm
 * @author Amire80
 * @author Andrijko Z.
 * @author Andriykopanytsia
 * @author Arturyatsko
 * @author AtUkr
 * @author Base
 * @author Dim Grits
 * @author DixonD
 * @author DonDrakon
 * @author Dubyk
 * @author EugeneZelenko
 * @author Geitost
 * @author Gucci Mane Burrr
 * @author Gutsul (Gutsul.ua at Google Mail)
 * @author Ickis
 * @author Ilyaroz
 * @author Innv
 * @author KEL
 * @author Kalan
 * @author Matma Rex
 * @author Microcell
 * @author Nemo bis
 * @author NickK
 * @author Olvin
 * @author Prima klasy4na
 * @author RLuts
 * @author Riwnodennyk
 * @author Sodmy
 * @author Ua2004
 * @author Urhixidur
 * @author Vittalio
 * @author VolodymyrF
 * @author Vox
 * @author Yuriy Apostol
 * @author Ата
 * @author Дар'я Козлова
 * @author Максим Підліснюк
 * @author Тест
 * @author Eugene Gvozdetsky
 */

$separatorTransformTable = [
	',' => "\u{00A0}", # nbsp
	'.' => ','
];
$minimumGroupingDigits = 2; // As per CLDR 31, this value is 1 (T262500)

$fallback8bitEncoding = 'windows-1251';
$linkPrefixExtension = true;

$namespaceNames = [
	NS_MEDIA            => 'Медіа',
	NS_SPECIAL          => 'Спеціальна',
	NS_TALK             => 'Обговорення',
	NS_USER             => 'Користувач',
	NS_USER_TALK        => 'Обговорення_користувача',
	NS_PROJECT_TALK     => 'Обговорення_{{GRAMMAR:genitive|$1}}',
	NS_FILE             => 'Файл',
	NS_FILE_TALK        => 'Обговорення_файлу',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Обговорення_MediaWiki',
	NS_TEMPLATE         => 'Шаблон',
	NS_TEMPLATE_TALK    => 'Обговорення_шаблону',
	NS_HELP             => 'Довідка',
	NS_HELP_TALK        => 'Обговорення_довідки',
	NS_CATEGORY         => 'Категорія',
	NS_CATEGORY_TALK    => 'Обговорення_категорії',
];

$namespaceAliases = [
	'Спеціальні' => NS_SPECIAL,
	'Зображення' => NS_FILE,
	'Обговорення_зображення' => NS_FILE_TALK,
	'Обговорення_шаблона' => NS_TEMPLATE_TALK,
	// Backwards compatibility from Russian
	'Медиа' => NS_MEDIA,
	'Служебная' => NS_SPECIAL,
	'Обсуждение' => NS_TALK,
	'Участник' => NS_USER,
	'Обсуждение_участника' => NS_USER_TALK,
	'Обсуждение_файла' => NS_FILE_TALK,
	'Обсуждение_MediaWiki' => NS_MEDIAWIKI_TALK,
	'Обсуждение_шаблона' => NS_TEMPLATE_TALK,
	'Справка' => NS_HELP,
	'Обсуждение_справки' => NS_HELP_TALK,
	'Категория' => NS_CATEGORY,
	'Обсуждение_категории' => NS_CATEGORY_TALK,
	'Изображение' => NS_FILE,
	'Обсуждение_изображения' => NS_FILE_TALK,
];

$namespaceGenderAliases = [
	NS_USER      => [ 'male' => 'Користувач', 'female' => 'Користувачка' ],
	NS_USER_TALK => [ 'male' => 'Обговорення_користувача', 'female' => 'Обговорення_користувачки' ],
];

$dateFormats = [
	'mdy time' => 'H:i',
	'mdy date' => 'xg j, Y',
	'mdy both' => 'H:i, xg j, Y',

	'dmy time' => 'H:i',
	'dmy date' => 'j xg Y',
	'dmy both' => 'H:i, j xg Y',

	'ymd time' => 'H:i',
	'ymd date' => 'Y xg j',
	'ymd both' => 'H:i, Y xg j',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
];

$bookstoreList = [
	'Amazon.com' => 'https://www.amazon.com/exec/obidos/ISBN=$1'
];

// Russian names are kept for backwards compatibility
/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'Активні_дописувачі', 'Активные_участники' ],
	'Allmessages'               => [ 'Системні_повідомлення', 'Системные_сообщения' ],
	'AllMyUploads'              => [ 'Усі_мої_файли', 'Все_мои_файлы' ],
	'Allpages'                  => [ 'Усі_сторінки', 'Все_страницы' ],
	'Ancientpages'              => [ 'Давні_сторінки' ],
	'Badtitle'                  => [ 'Помилковий_заголовок', 'Недопустимое_название' ],
	'Blankpage'                 => [ 'Порожня_сторінка', 'Пустая_страница' ],
	'Block'                     => [ 'Заблокувати', 'Заблокировать' ],
	'BlockList'                 => [ 'Список_блокувань', 'Блокування', 'Блокування_IP-адрес', 'Список_блокировок', 'Блокировки' ],
	'Booksources'               => [ 'Джерела_книг', 'Источники_книг' ],
	'BrokenRedirects'           => [ 'Розірвані_перенаправлення', 'Разорванные_перенаправления' ],
	'Categories'                => [ 'Категорії', 'Категории' ],
	'ChangeEmail'               => [ 'Змінити_e-mail', 'Сменить_e-mail', 'Сменить_почту' ],
	'ChangePassword'            => [ 'Змінити_пароль', 'Сменить_пароль' ],
	'ComparePages'              => [ 'Порівняння_сторінок', 'Сравнение_страниц' ],
	'Confirmemail'              => [ 'Підтвердити_e-mail', 'Подтвердить_e-mail', 'Подтвердить_почту' ],
	'Contributions'             => [ 'Внесок', 'Вклад' ],
	'CreateAccount'             => [ 'Створити_обліковий_запис', 'Создать_учётную_запись', 'Создать_пользователя', 'Зарегистрироваться' ],
	'Deadendpages'              => [ 'Сторінки_без_посилань', 'Тупиковые_страницы' ],
	'DeletedContributions'      => [ 'Вилучений_внесок', 'Удалённый_вклад' ],
	'DoubleRedirects'           => [ 'Подвійні_перенаправлення', 'Двойные_перенаправления' ],
	'EditWatchlist'             => [ 'Редагувати_список_спостереження', 'Править_список_наблюдения' ],
	'Emailuser'                 => [ 'Лист_користувачеві', 'Письмо_участнику', 'Отправить_письмо' ],
	'ExpandTemplates'           => [ 'Розгортання_шаблонів', 'Развёртка_шаблонов' ],
	'Export'                    => [ 'Експорт', 'Экспорт', 'Выгрузка' ],
	'Fewestrevisions'           => [ 'Найменшредаговані', 'Редко_редактируемые' ],
	'FileDuplicateSearch'       => [ 'Пошук_дублікатів_файлів', 'Поиск_дубликатов_файлов' ],
	'Filepath'                  => [ 'Шлях_до_файлу', 'Путь_к_файлу' ],
	'Import'                    => [ 'Імпорт', 'Импорт' ],
	'Invalidateemail'           => [ 'Неперевірена_email-адреса', 'Отменить_подтверждение_адреса' ],
	'JavaScriptTest'            => [ 'JavaScript_тест', 'Тестирование_JavaScript' ],
	'LinkSearch'                => [ 'Пошук_посилань', 'Поиск_ссылок' ],
	'Listadmins'                => [ 'Список_адміністраторів', 'Список_администраторов' ],
	'Listbots'                  => [ 'Список_ботів', 'Список_ботов' ],
	'ListDuplicatedFiles'       => [ 'Список_дубльованих_файлів', 'Список_файлов-дубликатов' ],
	'Listfiles'                 => [ 'Список_файлів', 'Список_файлов', 'Список_изображений' ],
	'Listgrouprights'           => [ 'Список_прав_груп', 'Права_груп_користувачів', 'Права_групп_участников', 'Список_прав_групп' ],
	'Listredirects'             => [ 'Список_перенаправлень', 'Список_перенаправлений' ],
	'Listusers'                 => [ 'Список_користувачів', 'Список_участников' ],
	'Lockdb'                    => [ 'Заблокувати_базу_даних', 'Заблокировать_БД', 'Заблокировать_базу_данных' ],
	'Log'                       => [ 'Журнали', 'Журналы', 'Журнал' ],
	'Lonelypages'               => [ 'Ізольовані_сторінки', 'Изолированные_страницы' ],
	'Longpages'                 => [ 'Найдовші_сторінки', 'Длинные_страницы' ],
	'MergeHistory'              => [ 'Об\'єднання_історії', 'Объединение_историй' ],
	'MIMEsearch'                => [ 'Пошук_за_MIME', 'Поиск_по_MIME' ],
	'Mostcategories'            => [ 'Найбільш_категоризовані', 'Самые_категоризованные' ],
	'Mostimages'                => [ 'Найуживаніші_файли', 'Самые_используемые_файлы' ],
	'Mostinterwikis'            => [ 'Найбільше_інтервікі', 'Наибольшее_количество_интервики-ссылок' ],
	'Mostlinked'                => [ 'Найуживаніші_сторінки', 'Найбільше_посилань', 'Самые_используемые_страницы' ],
	'Mostlinkedcategories'      => [ 'Найуживаніші_категорії', 'Самые_используемые_категории' ],
	'Mostlinkedtemplates'       => [ 'Найуживаніші_шаблони', 'Самые_используемые_шаблоны' ],
	'Mostrevisions'             => [ 'Найбільш_редаговані', 'Наибольшее_количество_версий' ],
	'Movepage'                  => [ 'Перейменувати', 'Переименовать_страницу', 'Переименование', 'Переименовать' ],
	'Mycontributions'           => [ 'Мій_внесок', 'Мой_вклад' ],
	'MyLanguage'                => [ 'Моя_мова', 'Мой_язык' ],
	'Mypage'                    => [ 'Моя_сторінка', 'Моя_страница' ],
	'Mytalk'                    => [ 'Моє_обговорення', 'Моё_обсуждение' ],
	'Myuploads'                 => [ 'Мої_завантаження', 'Мои_загрузки' ],
	'Newimages'                 => [ 'Нові_файли', 'Новые_файлы' ],
	'Newpages'                  => [ 'Нові_сторінки', 'Новые_страницы' ],
	'PasswordReset'             => [ 'Скинути_пароль', 'Сброс_пароля' ],
	'PermanentLink'             => [ 'Постійне_посилання', 'Постоянная_ссылка' ],
	'Preferences'               => [ 'Налаштування', 'Настройки' ],
	'Prefixindex'               => [ 'Покажчик_за_початком_назви', 'Указатель_по_началу_названия' ],
	'Protectedpages'            => [ 'Захищені_сторінки', 'Защищённые_страницы' ],
	'Protectedtitles'           => [ 'Захищені_назви_сторінок', 'Защищённые_названия' ],
	'Randompage'                => [ 'Випадкова_сторінка', 'Случайная_страница', 'Случайная' ],
	'Randomredirect'            => [ 'Випадкове_перенаправлення', 'Случайное_перенаправление' ],
	'Recentchanges'             => [ 'Нові_редагування', 'Свежие_правки' ],
	'Recentchangeslinked'       => [ 'Пов\'язані_редагування', 'Связанные_правки' ],
	'Redirect'                  => [ 'Перенаправлення' ],
	'Revisiondelete'            => [ 'Вилучити_редагування', 'Удаление_правки' ],
	'Search'                    => [ 'Пошук', 'Поиск' ],
	'Shortpages'                => [ 'Короткі_сторінки', 'Короткие_страницы' ],
	'Specialpages'              => [ 'Спеціальні_сторінки', 'Спецстраницы' ],
	'Statistics'                => [ 'Статистика' ],
	'Tags'                      => [ 'Мітки', 'Метки' ],
	'Unblock'                   => [ 'Розблокувати', 'Разблокировка' ],
	'Uncategorizedcategories'   => [ 'Некатегоризовані_категорії', 'Некатегоризованные_категории' ],
	'Uncategorizedimages'       => [ 'Некатегоризовані_файли', 'Некатегоризованные_файлы' ],
	'Uncategorizedpages'        => [ 'Некатегоризовані_сторінки', 'Некатегоризованные_страницы' ],
	'Uncategorizedtemplates'    => [ 'Некатегоризовані_шаблони', 'Некатегоризованные_шаблоны' ],
	'Undelete'                  => [ 'Відновити', 'Восстановить', 'Восстановление' ],
	'Unlockdb'                  => [ 'Розблокувати_базу_даних', 'Разблокировка_БД' ],
	'Unusedcategories'          => [ 'Порожні_категорії', 'Неиспользуемые_категории' ],
	'Unusedimages'              => [ 'Невикористані_файли', 'Неиспользуемые_файлы' ],
	'Unusedtemplates'           => [ 'Невикористані_шаблони', 'Неиспользуемые_шаблоны' ],
	'Unwatchedpages'            => [ 'Неспостережувані' ],
	'Upload'                    => [ 'Завантаження', 'Загрузка' ],
	'UploadStash'               => [ 'Приховане_завантаження', 'Скрытная_загрузка' ],
	'Userlogin'                 => [ 'Вхід', 'Вход' ],
	'Userlogout'                => [ 'Вихід', 'Завершение_сеанса', 'Выход' ],
	'Userrights'                => [ 'Керування_правами_користувачів', 'Управление_правами' ],
	'Version'                   => [ 'Версія', 'Версия' ],
	'Wantedcategories'          => [ 'Потрібні_категорії', 'Требуемые_категории' ],
	'Wantedfiles'               => [ 'Потрібні_файли', 'Требуемые_файлы' ],
	'Wantedpages'               => [ 'Потрібні_сторінки', 'Требуемые_страницы' ],
	'Wantedtemplates'           => [ 'Потрібні_шаблони', 'Требуемые_шаблоны' ],
	'Watchlist'                 => [ 'Список_спостереження', 'Список_наблюдения' ],
	'Whatlinkshere'             => [ 'Посилання_сюди', 'Ссылки_сюда' ],
	'Withoutinterwiki'          => [ 'Без_інтервікі', 'Без_интервики' ],
];

/** @phpcs-require-sorted-array */
$magicWords = [
	'anchorencode'              => [ '0', 'КОДУВАТИ_МІТКУ', 'КОДИРОВАТЬ_МЕТКУ', 'ANCHORENCODE' ],
	'articlepath'               => [ '0', 'ШЛЯХ_ДО_СТАТТІ', 'ПУТЬ_К_СТАТЬЕ', 'ARTICLEPATH' ],
	'basepagename'              => [ '1', 'ОСНОВА_НАЗВИ_ПІДСТОРІНКИ', 'ОСНОВА_НАЗВАНИЯ_СТРАНИЦЫ', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'ОСНОВА_НАЗВИ_ПІДСТОРІНКИ_2', 'ОСНОВА_НАЗВАНИЯ_СТРАНИЦЫ_2', 'BASEPAGENAMEE' ],
	'contentlanguage'           => [ '1', 'МОВА_ВМІСТУ', 'ЯЗЫК_СОДЕРЖАНИЯ', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'currentday'                => [ '1', 'ПОТОЧНИЙ_ДЕНЬ', 'ТЕКУЩИЙ_ДЕНЬ', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'ПОТОЧНИЙ_ДЕНЬ_2', 'ТЕКУЩИЙ_ДЕНЬ_2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'НАЗВА_ПОТОЧНОГО_ДНЯ', 'НАЗВАНИЕ_ТЕКУЩЕГО_ДНЯ', 'CURRENTDAYNAME' ],
	'currentdow'                => [ '1', 'ПОТОЧНИЙ_ДЕНЬ_ТИЖНЯ', 'ТЕКУЩИЙ_ДЕНЬ_НЕДЕЛИ', 'CURRENTDOW' ],
	'currenthour'               => [ '1', 'ПОТОЧНА_ГОДИНА', 'ТЕКУЩИЙ_ЧАС', 'CURRENTHOUR' ],
	'currentmonth'              => [ '1', 'ПОТОЧНИЙ_МІСЯЦЬ', 'ПОТОЧНИЙ_МІСЯЦЬ_2', 'ТЕКУЩИЙ_МЕСЯЦ', 'ТЕКУЩИЙ_МЕСЯЦ_2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'ПОТОЧНИЙ_МІСЯЦЬ_1', 'ТЕКУЩИЙ_МЕСЯЦ_1', 'CURRENTMONTH1' ],
	'currentmonthabbrev'        => [ '1', 'НАЗВА_ПОТОЧНОГО_МІСЯЦЯ_АБР', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА_АБР', 'CURRENTMONTHABBREV' ],
	'currentmonthname'          => [ '1', 'НАЗВА_ПОТОЧНОГО_МІСЯЦЯ', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'НАЗВА_ПОТОЧНОГО_МІСЯЦЯ_РОД', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА_РОД', 'CURRENTMONTHNAMEGEN' ],
	'currenttime'               => [ '1', 'ПОТОЧНИЙ_ЧАС', 'ТЕКУЩЕЕ_ВРЕМЯ', 'CURRENTTIME' ],
	'currenttimestamp'          => [ '1', 'МІТКА_ПОТОЧНОГО_ЧАСУ', 'ОТМЕТКА_ТЕКУЩЕГО_ВРЕМЕНИ', 'CURRENTTIMESTAMP' ],
	'currentversion'            => [ '1', 'ПОТОЧНА_ВЕРСІЯ', 'ТЕКУЩАЯ_ВЕРСИЯ', 'CURRENTVERSION' ],
	'currentweek'               => [ '1', 'ПОТОЧНИЙ_ТИЖДЕНЬ', 'ТЕКУЩАЯ_НЕДЕЛЯ', 'CURRENTWEEK' ],
	'currentyear'               => [ '1', 'ПОТОЧНИЙ_РІК', 'ТЕКУЩИЙ_ГОД', 'CURRENTYEAR' ],
	'defaultsort'               => [ '1', 'СТАНДАРТНЕ_СОРТУВАННЯ:_КЛЮЧ_СОРТУВАННЯ', 'СОРТИРОВКА_ПО_УМОЛЧАНИЮ', 'КЛЮЧ_СОРТИРОВКИ', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'directionmark'             => [ '1', 'НАПРЯМОК_ПИСЬМА', 'НАПРАВЛЕНИЕ_ПИСЬМА', 'DIRECTIONMARK', 'DIRMARK' ],
	'displaytitle'              => [ '1', 'ПОКАЗАТИ_ЗАГОЛОВОК', 'ПОКАЗАТЬ_ЗАГОЛОВОК', 'DISPLAYTITLE' ],
	'filepath'                  => [ '0', 'ШЛЯХ_ДО_ФАЙЛУ:', 'ПУТЬ_К_ФАЙЛУ:', 'FILEPATH:' ],
	'forcetoc'                  => [ '0', '__ОБОВ_ЗМІСТ__', '__ОБЯЗАТЕЛЬНОЕ_ОГЛАВЛЕНИЕ__', '__ОБЯЗ_ОГЛ__', '__FORCETOC__' ],
	'formatdate'                => [ '0', 'форматдати', 'форматдаты', 'formatdate', 'dateformat' ],
	'formatnum'                 => [ '0', 'ФОРМАТУВАТИ_ЧИСЛО', 'ФОРМАТИРОВАТЬ_ЧИСЛО', 'FORMATNUM' ],
	'fullpagename'              => [ '1', 'ПОВНА_НАЗВА_СТОРІНКИ', 'ПОЛНОЕ_НАЗВАНИЕ_СТРАНИЦЫ', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'ПОВНА_НАЗВА_СТОРІНКИ_2', 'ПОЛНОЕ_НАЗВАНИЕ_СТРАНИЦЫ_2', 'FULLPAGENAMEE' ],
	'fullurl'                   => [ '0', 'ПОВНА_АДРЕСА:', 'ПОЛНЫЙ_АДРЕС:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'ПОВНА_АДРЕСА_2:', 'ПОЛНЫЙ_АДРЕС_2:', 'FULLURLE:' ],
	'gender'                    => [ '0', 'СТАТЬ:', 'ПОЛ:', 'GENDER:' ],
	'grammar'                   => [ '0', 'ВІДМІНОК:', 'ПАДЕЖ:', 'GRAMMAR:' ],
	'hiddencat'                 => [ '1', '__ПРИХОВ_КАТ__', '__ПРИХОВАНА_КАТЕГОРІЯ__', '__СКРЫТАЯ_КАТЕГОРИЯ__', '__HIDDENCAT__' ],
	'img_alt'                   => [ '1', 'альт=$1', 'alt=$1' ],
	'img_baseline'              => [ '1', 'основа', 'основание', 'baseline' ],
	'img_border'                => [ '1', 'межа', 'границя', 'граница', 'border' ],
	'img_bottom'                => [ '1', 'знизу', 'снизу', 'bottom' ],
	'img_center'                => [ '1', 'центр', 'center', 'centre' ],
	'img_framed'                => [ '1', 'обрамити', 'рамка', 'обрамить', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'безрамки', 'frameless' ],
	'img_left'                  => [ '1', 'ліворуч', 'слева', 'left' ],
	'img_link'                  => [ '1', 'посилання=$1', 'ссылка=$1', 'link=$1' ],
	'img_manualthumb'           => [ '1', 'міні=$1', 'мініатюра=$1', 'мини=$1', 'миниатюра=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_middle'                => [ '1', 'посередині', 'посередине', 'middle' ],
	'img_none'                  => [ '1', 'без', 'none' ],
	'img_page'                  => [ '1', 'сторінка=$1', 'сторінка_$1', 'страница=$1', 'страница $1', 'page=$1', 'page $1' ],
	'img_right'                 => [ '1', 'праворуч', 'справа', 'right' ],
	'img_sub'                   => [ '1', 'під', 'под', 'sub' ],
	'img_super'                 => [ '1', 'над', 'super', 'sup' ],
	'img_text_bottom'           => [ '1', 'текст-знизу', 'текст-снизу', 'text-bottom' ],
	'img_text_top'              => [ '1', 'текст-зверху', 'текст-сверху', 'text-top' ],
	'img_thumbnail'             => [ '1', 'міні', 'мини', 'мініатюра', 'миниатюра', 'thumb', 'thumbnail' ],
	'img_top'                   => [ '1', 'зверху', 'сверху', 'top' ],
	'img_upright'               => [ '1', 'зверхуправоруч', 'зверхуправоруч=$1', 'зверхуправоруч_$1', 'сверхусправа', 'сверхусправа=$1', 'сверхусправа $1', 'upright', 'upright=$1', 'upright $1' ],
	'img_width'                 => [ '1', '$1пкс', '$1px' ],
	'index'                     => [ '1', '__ІНДЕКС__', '__ИНДЕКС__', '__INDEX__' ],
	'int'                       => [ '0', 'ВНУТР:', 'INT:' ],
	'language'                  => [ '0', '#МОВА:', '#ЯЗЫК:', '#LANGUAGE:' ],
	'lc'                        => [ '0', 'НР:', 'НИЖНІЙ_РЕГІСТР:', 'МАЛИМИ_БУКВАМИ:', 'МАЛИМИ_ЛІТЕРАМИ:', 'МАЛЕНЬКИМИ_БУКВАМИ:', 'LC:' ],
	'lcfirst'                   => [ '0', 'НР_ПЕРША:', 'ПЕРША_БУКВА_МАЛА:', 'ПЕРША_ЛІТЕРА_МАЛА:', 'МАЛА_ПЕРША_ЛІТЕРА:', 'ПЕРВАЯ_БУКВА_МАЛЕНЬКАЯ:', 'LCFIRST:' ],
	'localday'                  => [ '1', 'ЛОКАЛЬНИЙ_ДЕНЬ', 'МІСЦЕВИЙ_ДЕНЬ', 'МЕСТНЫЙ_ДЕНЬ', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'ЛОКАЛЬНИЙ_ДЕНЬ_2', 'МІСЦЕВИЙ_ДЕНЬ_2', 'МЕСТНЫЙ_ДЕНЬ_2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'НАЗВА_ЛОКАЛЬНОГО_ДНЯ', 'НАЗВА_МІСЦЕВОГО_ДНЯ', 'НАЗВАНИЕ_МЕСТНОГО_ДНЯ', 'LOCALDAYNAME' ],
	'localdow'                  => [ '1', 'ЛОКАЛЬНИЙ_ДЕНЬ_ТИЖНЯ', 'МЕСТНЫЙ_ДЕНЬ_НЕДЕЛИ', 'LOCALDOW' ],
	'localhour'                 => [ '1', 'ЛОКАЛЬНА_ГОДИНА', 'МІСЦЕВА_ГОДИНА', 'МЕСТНЫЙ_ЧАС', 'LOCALHOUR' ],
	'localmonth'                => [ '1', 'ЛОКАЛЬНИЙ_МІСЯЦЬ', 'ЛОКАЛЬНИЙ_МІСЯЦЬ_2', 'МЕСТНЫЙ_МЕСЯЦ', 'МЕСТНЫЙ_МЕСЯЦ_2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'ЛОКАЛЬНИЙ_МІСЯЦЬ_1', 'МЕСТНЫЙ_МЕСЯЦ_1', 'LOCALMONTH1' ],
	'localmonthabbrev'          => [ '1', 'НАЗВА_ЛОКАЛЬНОГО_МІСЯЦЯ_АБР', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА_АБР', 'LOCALMONTHABBREV' ],
	'localmonthname'            => [ '1', 'НАЗВА_ЛОКАЛЬНОГО_МІСЯЦЯ', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'НАЗВА_ЛОКАЛЬНОГО_МІСЯЦЯ_РОД', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА_РОД', 'LOCALMONTHNAMEGEN' ],
	'localtime'                 => [ '1', 'ЛОКАЛЬНИЙ_ЧАС', 'МІСЦЕВИЙ_ЧАС', 'МЕСТНОЕ_ВРЕМЯ', 'LOCALTIME' ],
	'localtimestamp'            => [ '1', 'МІТКА_ЛОКАЛЬНОГО_ЧАСУ', 'ОТМЕТКА_МЕСТНОГО_ВРЕМЕНИ', 'LOCALTIMESTAMP' ],
	'localurl'                  => [ '0', 'ЛОКАЛЬНА_АДРЕСА:', 'ЛОКАЛЬНЫЙ_АДРЕС:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'ЛОКАЛЬНА_АДРЕСА_2:', 'ЛОКАЛЬНЫЙ_АДРЕС_2:', 'LOCALURLE:' ],
	'localweek'                 => [ '1', 'ЛОКАЛЬНИЙ_ТИЖДЕНЬ', 'МЕСТНАЯ_НЕДЕЛЯ', 'LOCALWEEK' ],
	'localyear'                 => [ '1', 'ЛОКАЛЬНИЙ_РІК', 'МІСЦЕВИЙ_РІК', 'МЕСТНЫЙ_ГОД', 'LOCALYEAR' ],
	'msg'                       => [ '0', 'ПОВІД:', 'ПОВІДОМЛЕННЯ:', 'СООБЩЕНИЕ:', 'СООБЩ:', 'MSG:' ],
	'msgnw'                     => [ '0', 'ПОВІД_БЕЗ_ВІКІ:', 'СООБЩ_БЕЗ_ВИКИ:', 'MSGNW:' ],
	'namespace'                 => [ '1', 'ПРОСТІР_НАЗВ', 'ПРОСТРАНСТВО_ИМЁН', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'ПРОСТІР_НАЗВ_2', 'ПРОСТРАНСТВО_ИМЁН_2', 'NAMESPACEE' ],
	'newsectionlink'            => [ '1', '__ПОСИЛАННЯ_НА_НОВИЙ_РОЗДІЛ__', '__ССЫЛКА_НА_НОВЫЙ_РАЗДЕЛ__', '__NEWSECTIONLINK__' ],
	'nocontentconvert'          => [ '0', '__БЕЗ_ПЕРЕТВОРЕННЯ_ТЕКСТУ__', '__БЕЗ_ПРЕОБРАЗОВАНИЯ_ТЕКСТА__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'noeditsection'             => [ '0', '__БЕЗ_РЕДАГУВ_РОЗДІЛУ__', '__БЕЗ_РЕДАКТИРОВАНИЯ_РАЗДЕЛА__', '__NOEDITSECTION__' ],
	'nogallery'                 => [ '0', '__БЕЗ_ГАЛЕРЕЇ__', '__БЕЗ_ГАЛЕРЕИ__', '__NOGALLERY__' ],
	'noindex'                   => [ '1', '__БЕЗ_ІНДЕКСУ__', '__БЕЗ_ИНДЕКСА__', '__NOINDEX__' ],
	'nonewsectionlink'          => [ '1', '__БЕЗ_ПОСИЛАННЯ_НА_НОВИЙ_РОЗДІЛ__', '__БЕЗ_ССЫЛКИ_НА_НОВЫЙ_РАЗДЕЛ__', '__NONEWSECTIONLINK__' ],
	'notitleconvert'            => [ '0', '__БЕЗ_ПЕРЕТВОРЕННЯ_ЗАГОЛОВКУ__', '__БЕЗ_ПРЕОБРАЗОВАНИЯ_ЗАГОЛОВКА__', '__NOTITLECONVERT__', '__NOTC__' ],
	'notoc'                     => [ '0', '__БЕЗ_ЗМІСТУ__', '__БЕЗ_ОГЛАВЛЕНИЯ__', '__БЕЗ_ОГЛ__', '__NOTOC__' ],
	'ns'                        => [ '0', 'ПН:', 'ПИ:', 'NS:' ],
	'nse'                       => [ '0', 'ПН_2:', 'ПИК:', 'NSE:' ],
	'numberingroup'             => [ '1', 'КІЛЬКІСТЬ_У_ГРУПІ', 'ЧИСЛО_В_ГРУППЕ', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'numberofactiveusers'       => [ '1', 'КІЛЬКІСТЬ_АКТИВНИХ_КОРИСТУВАЧІВ', 'КОЛИЧЕСТВО_АКТИВНЫХ_УЧАСТНИКОВ', 'NUMBEROFACTIVEUSERS' ],
	'numberofadmins'            => [ '1', 'КІЛЬКІСТЬ_АДМІНІСТРАТОРІВ', 'КОЛИЧЕСТВО_АДМИНИСТРАТОРОВ', 'NUMBEROFADMINS' ],
	'numberofarticles'          => [ '1', 'КІЛЬКІСТЬ_СТАТЕЙ', 'КОЛИЧЕСТВО_СТАТЕЙ', 'NUMBEROFARTICLES' ],
	'numberofedits'             => [ '1', 'КІЛЬКІСТЬ_РЕДАГУВАНЬ', 'КОЛИЧЕСТВО_ПРАВОК', 'NUMBEROFEDITS' ],
	'numberoffiles'             => [ '1', 'КІЛЬКІСТЬ_ФАЙЛІВ', 'КОЛИЧЕСТВО_ФАЙЛОВ', 'NUMBEROFFILES' ],
	'numberofpages'             => [ '1', 'КІЛЬКІСТЬ_СТОРІНОК', 'КОЛИЧЕСТВО_СТРАНИЦ', 'NUMBEROFPAGES' ],
	'numberofusers'             => [ '1', 'КІЛЬКІСТЬ_КОРИСТУВАЧІВ', 'КОЛИЧЕСТВО_УЧАСТНИКОВ', 'NUMBEROFUSERS' ],
	'padleft'                   => [ '0', 'ЗАПОВНИТИ_ЛІВОРУЧ', 'ЗАПОЛНИТЬ_СЛЕВА', 'PADLEFT' ],
	'padright'                  => [ '0', 'ЗАПОВНИТИ_ПРАВОРУЧ', 'ЗАПОЛНИТЬ_СПРАВА', 'PADRIGHT' ],
	'pageid'                    => [ '0', 'ІДЕНТИФІКАТОР_СТОРІНКИ', 'ИДЕНТИФИКАТОР_СТРАНИЦЫ', 'PAGEID' ],
	'pagename'                  => [ '1', 'НАЗВА_СТОРІНКИ', 'НАЗВАНИЕ_СТРАНИЦЫ', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'НАЗВА_СТОРІНКИ_2', 'НАЗВАНИЕ_СТРАНИЦЫ_2', 'PAGENAMEE' ],
	'pagesincategory'           => [ '1', 'СТОР_В_КАТ', 'СТОР_У_КАТ', 'СТОРІНОК_У_КАТЕГОРІЇ', 'СТРАНИЦ_В_КАТЕГОРИИ', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesincategory_all'       => [ '0', 'усе', 'все', 'all' ],
	'pagesincategory_files'     => [ '0', 'файли', 'файлы', 'files' ],
	'pagesincategory_pages'     => [ '0', 'сторінки', 'страницы', 'pages' ],
	'pagesincategory_subcats'   => [ '0', 'підкатегорії', 'подкатегории', 'subcats' ],
	'pagesinnamespace'          => [ '1', 'СТОРІНОК_У_ПРОСТОРІ_НАЗВ:', 'СТРАНИЦ_В_ПРОСТРАНСТВЕ_ИМЁН:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                  => [ '1', 'РОЗМІР', 'РОЗМІР_СТОРІНКИ', 'РАЗМЕР_СТРАНИЦЫ', 'PAGESIZE' ],
	'plural'                    => [ '0', 'МНОЖИНА:', 'МНОЖЕСТВЕННОЕ_ЧИСЛО:', 'PLURAL:' ],
	'protectionlevel'           => [ '1', 'РІВЕНЬ_ЗАХИСТУ', 'УРОВЕНЬ_ЗАЩИТЫ', 'PROTECTIONLEVEL' ],
	'raw'                       => [ '0', 'НЕОБРОБ:', 'НЕОБРАБ:', 'RAW:' ],
	'rawsuffix'                 => [ '1', 'Н', 'R' ],
	'redirect'                  => [ '0', '#ПЕРЕНАПРАВЛЕННЯ', '#ПЕРЕНАПР', '#перенапр', '#перенаправление', '#REDIRECT' ],
	'revisionday'               => [ '1', 'ДЕНЬ_ВЕРСІЇ', 'ДЕНЬ_ВЕРСИИ', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ДЕНЬ_ВЕРСІЇ_2', 'ДЕНЬ_ВЕРСИИ_2', 'REVISIONDAY2' ],
	'revisionid'                => [ '1', 'ІД_ВЕРСІЇ', 'ИД_ВЕРСИИ', 'REVISIONID' ],
	'revisionmonth'             => [ '1', 'МІСЯЦЬ_ВЕРСІЇ', 'МЕСЯЦ_ВЕРСИИ', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'МІСЯЦЬ_ВЕРСІЇ_1', 'МЕСЯЦ_ВЕРСИИ_1', 'REVISIONMONTH1' ],
	'revisiontimestamp'         => [ '1', 'МІТКА_ЧАСУ_ВЕРСІЇ', 'ОТМЕТКА_ВРЕМЕНИ_ВЕРСИИ', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'ВЕРСІЯ_КОРИСТУВАЧА', 'ВЕРСИЯ_УЧАСТНИКА', 'REVISIONUSER' ],
	'revisionyear'              => [ '1', 'РІК_ВЕРСІЇ', 'ГОД_ВЕРСИИ', 'REVISIONYEAR' ],
	'safesubst'                 => [ '0', 'БЕЗПЕЧНА_ПІДСТАНОВКА:', 'ЗАЩПОДСТ:', 'SAFESUBST:' ],
	'scriptpath'                => [ '0', 'ШЛЯХ_ДО_СКРИПТУ', 'ПУТЬ_К_СКРИПТУ', 'SCRIPTPATH' ],
	'server'                    => [ '0', 'СЕРВЕР', 'SERVER' ],
	'servername'                => [ '0', 'НАЗВА_СЕРВЕРА', 'НАЗВАНИЕ_СЕРВЕРА', 'SERVERNAME' ],
	'sitename'                  => [ '1', 'НАЗВА_САЙТУ', 'НАЗВАНИЕ_САЙТА', 'SITENAME' ],
	'special'                   => [ '0', 'спеціальна', 'служебная', 'special' ],
	'staticredirect'            => [ '1', '__СТАТИЧНЕ_ПЕРЕНАПРАВЛЕННЯ__', '__СТАТИЧЕСКОЕ_ПЕРЕНАПРАВЛЕНИЕ__', '__STATICREDIRECT__' ],
	'stylepath'                 => [ '0', 'ШЛЯХ_ДО_СТИЛЮ', 'ПУТЬ_К_СТИЛЮ', 'STYLEPATH' ],
	'subjectpagename'           => [ '1', 'НАЗВА_СТАТТІ', 'НАЗВА_СТОРІНКИ_СТАТТІ', 'НАЗВАНИЕ_СТРАНИЦЫ_СТАТЬИ', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'НАЗВА_СТАТТІ_2', 'НАЗВА_СТОРІНКИ_СТАТТІ_2', 'НАЗВАНИЕ_СТРАНИЦЫ_СТАТЬИ_2', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'subjectspace'              => [ '1', 'ПРОСТІР_СТАТЕЙ', 'ПРОСТРАНСТВО_СТАТЕЙ', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'ПРОСТІР_СТАТЕЙ_2', 'ПРОСТРАНСТВО_СТАТЕЙ_2', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'subpagename'               => [ '1', 'НАЗВА_ПІДСТОРІНКИ', 'НАЗВАНИЕ_ПОДСТРАНИЦЫ', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'НАЗВА_ПІДСТОРІНКИ_2', 'НАЗВАНИЕ_ПОДСТРАНИЦЫ_2', 'SUBPAGENAMEE' ],
	'subst'                     => [ '0', 'ПІДСТ:', 'ПІДСТАНОВКА:', 'ПОДСТАНОВКА:', 'ПОДСТ:', 'SUBST:' ],
	'tag'                       => [ '0', 'тег', 'мітка', 'теґ', 'метка', 'тэг', 'tag' ],
	'talkpagename'              => [ '1', 'НАЗВА_СТОРІНКИ_ОБГОВОРЕННЯ', 'НАЗВАНИЕ_СТРАНИЦЫ_ОБСУЖДЕНИЯ', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'НАЗВА_СТОРІНКИ_ОБГОВОРЕННЯ_2', 'НАЗВАНИЕ_СТРАНИЦЫ_ОБСУЖДЕНИЯ_2', 'TALKPAGENAMEE' ],
	'talkspace'                 => [ '1', 'ПРОСТІР_ОБГОВОРЕННЯ', 'ПРОСТРАНСТВО_ОБСУЖДЕНИЙ', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'ПРОСТІР_ОБГОВОРЕННЯ_2', 'ПРОСТРАНСТВО_ОБСУЖДЕНИЙ_2', 'TALKSPACEE' ],
	'toc'                       => [ '0', '__ЗМІСТ__', '__ОГЛАВЛЕНИЕ__', '__ОГЛ__', '__TOC__' ],
	'uc'                        => [ '0', 'ВР:', 'ВЕРХНІЙ_РЕГІСТР:', 'ВЕЛИКИМИ_БУКВАМИ:', 'ВЕЛИКИМИ_ЛІТЕРАМИ:', 'БОЛЬШИМИ_БУКВАМИ:', 'UC:' ],
	'ucfirst'                   => [ '0', 'ВР_ПЕРША:', 'ПЕРША_БУКВА_ВЕЛИКА:', 'ПЕРША_ЛІТЕРА_ВЕЛИКА:', 'ВЕЛИКА_ПЕРША_ЛІТЕРА:', 'ПЕРВАЯ_БУКВА_БОЛЬШАЯ:', 'UCFIRST:' ],
	'urlencode'                 => [ '0', 'ЗАКОДОВАНА_АДРЕСА:', 'ЗАКОДИРОВАННЫЙ_АДРЕС:', 'URLENCODE:' ],
	'url_path'                  => [ '0', 'ШЛЯХ', 'ПУТЬ', 'PATH' ],
	'url_query'                 => [ '0', 'ЗАПИТ', 'ЗАПРОС', 'QUERY' ],
	'url_wiki'                  => [ '0', 'ВІКІ', 'ВИКИ', 'WIKI' ],
];

$linkTrail = '/^([a-zабвгґдеєжзиіїйклмнопрстуфхцчшщьєюяёъы“»]+)(.*)$/sDu';
$linkPrefixCharset = '„«';
