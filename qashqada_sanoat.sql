-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 28 2022 г., 17:12
-- Версия сервера: 10.3.34-MariaDB-cll-lve
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `qashqada_sanoat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cate`
--

CREATE TABLE `cate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `cate`
--

INSERT INTO `cate` (`id`, `name`, `category_id`) VALUES
(1, 'Oziq-ovqat sanoati (baliq, go\'shtsiz, neft va sut sanoati)', 4),
(2, 'Go\'sht va sut sanoati', 4),
(3, 'Baliq sanoati', 4),
(4, 'Mikrobiologiya sanoati', 4),
(5, 'Un-don va aralash ozuqalar sanoat', 4),
(6, 'Tibbiyot sanoati', 4),
(7, 'Matbaa sanoati', 4),
(8, 'Boshqa sohalar', 4),
(9, 'Standartlar va vositalarni nazorat qilish va nazorat qilish sanoat o\'lchovlari', 4),
(10, 'Sanoatni xo\'jalik boshqaruvi', 4),
(11, 'To\'qimachilik sanoati', 3),
(12, 'Tikuv sanoati', 3),
(13, 'Teri, mo\'yna va poyabzal sanoati', 3),
(14, 'Yengil sanoatning boshqa ishlab chiqarishlari', 3),
(15, 'Yog\'ochni qayta ishlash sanoati', 6),
(16, 'Qog\'oz va qog\'oz sanoati', 6),
(17, 'O\'rmon-kimyo sanoati', 6),
(18, 'Qurilish materiallari sanoati', 6),
(19, 'Shisha va chinni-fayans sanoati (tibbiy ishlab chiqarish korxonalarisiz shisha va chinni mahsulotlari)', 6),
(20, 'Mashinasozlik', 2),
(21, 'Mashinasozlik va asbobsozlik sanoat', 2),
(22, 'Traktor va qishloq xo\'jaligi mashinasozlik', 2),
(23, 'Qurilish, yo\'l va kommunal muhandislik', 2),
(24, 'Engil va oziq-ovqat uchun mashinasozlik sanoat va maishiy texnika', 2),
(25, 'Metall sanoati tuzilmalar va mahsulotlar', 2),
(26, 'Mashina va uskunalarni ta\'mirlash', 2),
(27, 'Kimyo sanoati', 1),
(28, 'Neft-kimyo sanoati', 1),
(29, 'Elektr energetikasi', 5),
(30, 'Yoqilg\'i sanoati', 5),
(31, 'Ko\'mir sanoati ', 5),
(32, 'Qora metallurgiya', 5),
(33, 'Rangli metallurgiya', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'KIMYO VA NEFTKIMYO SANOATI'),
(2, 'MASHINASOZLIK, METAL VA ISHLAB CHIQARISH'),
(3, 'YENGIL SANOAT'),
(4, 'OZIQ-OVQAT SANOATI'),
(5, 'SANOAT'),
(6, 'O\'RMON XO\'JALIGI, YOG\'OCHINI QAYTA ISHLASH VA SELLYULOZA-QOG\'OZ SANOATI');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `description`, `status`, `created_at`) VALUES
(1, 'Faxriddin', 'faxbob@gmail.com', 'Test', 'dsdcs', 1, '2022-02-11 18:41:21'),
(2, 'Faxriddin', 'faxbob@gmail.com', 'Test', 'wwaas', 1, '2022-02-11 18:43:53'),
(3, 'sdfdsdf', 'faxbob@gmail.com', 'Test', 'dsazx', 1, '2022-02-11 18:44:56'),
(4, 'Faxriddin', 'faxbob@gmail.com', 'Test', 'utavudsfhvgw', 1, '2022-02-11 19:27:39'),
(5, 'sdfdsdf', 'faxbob@gmail.com', 's', 's', 1, '2022-03-13 12:42:04'),
(6, 'sdfdsdf', 'faxbob@gmail.com', 'ghj', 'xffhji', 1, '2022-03-15 17:37:26');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1642439877),
('m130524_201442_init', 1642439890),
('m190124_110200_add_verification_token_column_to_user_table', 1642439890);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `news_date` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `news_date`, `status`, `created_at`, `img`) VALUES
(1, 'Qashqadaryoda yangi tuman tashkil etildi', 'Qashqadaryoning Chiroqchi tumani tarkibida yangi Ko‘kdala tumani tashkil etildi. Unga Chiroqchidagi 420 ming nafar aholining 176,3 ming nafari yashayotgan 32 ta mahalla kiritiladi va Yettitom shaharchasi tuman markazi etib belgilandi.\r\nPayshanba kuni bo‘lib o‘tgan Oliy Majlis Senatining 24-yalpi majlisida Qashqadaryo viloyatining Chiroqchi tumani chegaralarini o‘zgartirish va Ko‘kdala tumanini tashkil etish to‘g‘risidagi qaror qabul qilindi. Bu haqda parlament yuqori palatasi matbuot xizmati xabar qildi.\r\nUnga ko‘ra, Chiroqchi tumanida yashayotgan aholiga ijtimoiy va maishiy qulayliklar yaratish hamda aholi bandligini ta’minlash maqsadida, ushbu tumanning bir qismida Ko‘kdala tumani tashkil etildi. Uning markazi Yettitom shaharchasi etib belgilandi.\r\nBunda Chiroqchi tumanida istiqomat qilayotgan 420 ming nafar aholining 176,3 ming nafari, ya’ni 32 ta mahallada yashayotgan qismi Ko‘kdala tumani tarkibiga o‘tkazish rejalashtirilmoqda.\r\nShuningdek, Ko‘kdala tumani tarkibiga 162 ta sanoat korxonasi va 1 ta kichik sanoat zonasi (Ayritom) o‘tkazilib, ishlab chiqariladigan mahsulot hajmining tuman sanoatidagi ulushi 151,9 mlrd so‘mni yoki 38 foizni tashkil etadi.\r\n\r\n“Ayritom” kichik sanoat zonasining 7 gektar maydoniga muhandislik-infratuzilma obyektlari qurilib, yangi ishlab chiqarish quvvatlari yaratiladi.\r\n\r\nXalqaro ahamiyatdagi 94 km yo‘l bo‘yida 150 ta xizmat ko‘rsatish obyektlari (516 ta ish o‘rni), Yettitom hududidan o‘tgan A-378 avtomagistral yo‘li yoqasida 6 gektar yerda xizmat ko‘rsatish va savdo komplekslari tashkil etiladi. 10 ming gektar lalmi va adir yerlarda tomchilatib sug‘orish texnologiyasi asosida bog‘-tokzorlar tashkil etiladi.\r\n\r\n“Natijada esa Ko‘kdala tumani tarkibiga o‘tkazilayotgan aholiga qulay sharoitlar yaratiladi hamda tumanning ijtimoiy-iqtisodiy salohiyati oshishiga xizmat qiladi”, — deyiladi xabarda. Ushbu masala yuzasidan Senatning tegishli qarori qabul qilindi.\r\n\r\nMa’lumot uchun, Chiroqchi tumaniga 1926 yilda asos solingan bo‘lib, aholisi 420 ming kishini, umumiy yer maydoni 2,8 ming km2 ni tashkil etadi. Bugungi kunda tumanda jami 2 137 ta korxona, shundan 324 ta sanoat korxonasi mavjud bo‘lib, ular tomonidan 2021 yilda 7,4 mln dollarlik mahsulot eksport qilingan.\r\n\r\nuningdek, tumanda 45 mingdan ortiq tarbiyalanuvchisi bo‘lgan 230 ta maktabgacha ta’lim tashkiloti, 93 mingdan ortiq o‘quvchisi bo‘lgan 234 ta umumta’lim maktabi hamda 8 ta oilaviy poliklinika faoliyat yuritib kelmoqda.\r\n\r\nQayd etilganidek, bugungi kunda tuman markazidan eng chekka qishloqqacha bo‘lgan masofa 65−100 km, jumladan, “Toshli” qishlog‘i — 100 km, “Sarson” qishlog‘i — 93 km va “Quruqsoy” qishlog‘i — 65 km. Bu esa, aholining tuman markaziga borib-kelishi uchun 2−3 ta yo‘lovchi transportidan foydalanishiga va bir kun yo‘qotilishiga sabab bo‘lmoqda.\r\n\r\nBundan tashqari, Chiroqchi tumanda 2021 yilda aholi jon boshiga sanoat mahsulotlari ishlab chiqarish 1,8 mln so‘m (viloyatda 5,5 mln so‘m), qishloq xo‘jaligi mahsulotlari ishlab chiqarish 8,2 mln so‘m (viloyatda 8,7 mln so‘m), xizmatlar hajmi esa 1,8 mln so‘m (viloyatda 3,9 mln so‘m)ni tashkil qilib, viloyat bo‘yicha eng oxirgi o‘rinda turibdi.', '2022-03-17', 1, '2022-02-14 20:09:39', 'd1qBg815447932953214_bfb.jpg'),
(2, 'O‘zbekistonlik tadbirkorlar Dubayda bo‘lib o‘tayotgan “Gulfood”  ko‘rgazmasida ishtirok etishdi.', 'Ayni kunlarda O‘zbekiston Savdo-sanoat palatasi tashabbusi bilan mahalliy tadbirkorlar va Dubay ishbilarmon vakillari o‘rtasida o‘zaro hamkorlik aloqalarini yo‘lga qo‘yish maqsadida O‘zbekiston delegasiyasi Dubay shahrida bo‘lib turibdi. Tashrif davomida Savdo-sanoat palatasi raisi o‘rinbosari F.Usmanov Dubay Savdo-sanoat palatasi raisi o‘rinbosari H.Al-Hashemi bilan uchrashdi. Uchrashuv davomida O‘zbekiston va Dubay o‘rtasidagi savdo-iqtisodiy aloqalar, ayni kunlarda Dubay shahrida bo‘lib o‘tayotgan ko‘rgazmalarada o‘zbekistonlik tadbirkorlarning faol ishtirokini ta\'minlash hamda tashkil etiladigan uchrashuvlar davomida bir qator kelishuvlarga erishish masalalari muhokama qilindi.\r\n“Gulfood” - bu eng yangi mahsulotlarni topish, bozor o‘zgarishlarini baholash va global yetkazib beruvchilar bilan bog‘lanishni xohlaydigan oziq-ovqat sanoati mutaxassislari uchun maydon hisoblanadi.\r\n\r\n2021 yil davomida mazkur ko‘rgazmada 85 dan ortqi mamlakatlardan ishtirokchilar qatnashgan bo‘lib, 156 mamlakatdan xaridorlar va mehmonlar tashrif buyurgan.\r\n\r\n2022 yilda esa  198 mamlakatdan 5000 dan ortiq yetkazib beruvchilar bilan to‘g‘ridan-to‘g‘ri aloqa o‘rnatish uchun imkoniyati yaratildi.\r\n“Gulfood”  ko‘rgazmalar zali 8 ta oziq-ovqat va ichimliklar sektoriga bo‘lingan bo‘lib, ichimliklar, sut va sut mahsulotlari, yog‘ va yog‘ mahsulotlari, taniqli brendlar sektorlari shular jumlasidan.\r\n\r\nShuningdek ko‘rgazma davomida F&B (Food&beverage) sohasidagi yetuk mutahassislar tomonidan oziq-ovqat mahsulotlarini ishlab chiqarish va iste\'mol qilishning yangi va barqaror shakllari to‘g‘risidagi muhokamalar ham o‘tkazildi.\r\n\r\nShu bilan birga O‘zbekiston delegasiyasining “Expo Dubai 2020” ko‘rgazmasiga tashrifi hamda Dubaylik tadbirkorlar bilan B2B uchrashuvlar o‘tkazishi rejalashtirilgan.', '2022-03-18', 1, '2022-02-14 20:10:15', '__0fe65fd0eb61dfc383454961a315ecd4fb.jpg'),
(4, 'Nurafshon shahrida kichik sanoat zonasida faoliyat yurituvchi tadbirkorlik subyektlari faoliyati oʼrganildi.', 'Tadbirkorlik subyektlarini har tomonlama qoʼllab-quvvatlash, tadbirkorlar  faoliyatidagi muammolar, qiyinchiliklar va toʼsiqlarni aniqlab, ularni bartaraf etishga koʼmaklashish maqsadida Nurafshon shahar hokimi oʼrinbosari, Investitsiyalar va tashqi savdo boʼlimi boshligʼi hamda Savdo-sanoat palatasi Toshkent viloyati hududiy boshqarmasi tasarrufidagi Tadbirkorlikka koʼmaklashish markazi Nurafshon shahar boʼlinmasi menedjeri bilan hamkorlikda kichik sanoat zonasida joylashgan mebelь ishlab chiqarish faoliyati bilan shugʼullanuvchi “Obod mebellar” xususiy korxonasi va “EKO INNOVAFRUIT” MChJlar faoliyati bilan tanishildi.Holat yuzasidan mavjud muammolar oʼrganildi va yechimi yuzasidan tegishli mutassaddi tashkilotlarga topshiriq berildi.', '2022-12-22', 1, '2022-02-14 20:33:22', '__43a56a2ae738bf895b74affffb94bfa2fb.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `productions`
--

CREATE TABLE `productions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `img_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `category_id` int(11) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `productions`
--

INSERT INTO `productions` (`id`, `name`, `user_id`, `price`, `img_1`, `img_2`, `description`, `status`, `category_id`, `cate_id`, `created_at`) VALUES
(10, 'Tecno Mobile Camon 18P Keramik oq', 11, 12000000, '728_410_2EaQDk896ViQ-VkP20LjzJdyyEZi7DT7.jpg', '800_420_tZr5hA7GoVJBtM_pJHqx7Hvtpd1gacDB.jpg', 'Mahsulot haqida qisqacha\r\nKafolat muddati (oy): 12\r\n\r\nFilmlar yaratish. Aniq va barqaror suratga olish uchun 48 megapikselli asosiy kamera. Aniq blokbaster suratga olish uchun hech narsa to\'sqinlik qila olmaydi. \r\n\r\nRangi: Keramik oq', 1, 2, 21, '2022-03-16 19:45:40'),
(12, 'Yuvish vositasi Bosch GHP 5-13C', 11, 5280000, 'iMGKJldnBHUYKm4Oa1xwaXd7Sw83uA37fXtGFGehCq7IAWuKqNNx7Wfe43pV.png', 'wFhUqfbjsKdx5u6Q0u0TlWUWTei5ZcAIyNFtVt8ZnMBLiBTzZ5IlmZicEIuv.png', 'Kafolat muddati (oy): 1\r\nTozalash vositalarni ishlatish Mavjud\r\nAloqa simi 5 m\r\nOg‘irligi 21.1 kg\r\nKirish suvining maksimal harorati40 °S\r\n', 1, 2, 21, '2022-03-16 20:00:58'),
(13, 'Xiaomi Mi Band 6', 11, 430000, '8FksCmIqaE10HoPMfty3JMHkhozgx7tPUTGdpYFEnOy1Hg2sZWNdKobiZS0c.jpeg', 'opFD9qkiqL3mP5jp9DkCAlbmSOxU5vmNjg2qw8pFHqZ1HEKrP6NChZmywwl2.jpeg', 'Kafolat muddati (oy): 3\r\n\r\nNamlikdan chimoya\r\nMavjud, IP68\r\nVibratsiya\r\nTelefon qo’ng’iroqlari\r\nKirish qo‘ng‘iroqlari xaqida xabar\r\nXotira 32 MB\r\nBatareya quvvati 125 mAh', 1, 2, 21, '2022-03-17 03:50:12'),
(14, 'Alyumin Narvon UFUK AL 6', 11, 730000, 'T5yhkatY8Ug7fsESNeYAIMPUYKSt8nU9Sumwfjrjtkj4OlbtxPwQTo4Pk0mq.jpeg', '', 'Kafolat muddati (oy): Yo\'q\r\n\r\nOlcha.uz internet-do\'konida narvon va zinapoyalarni arzonga sotib oling. Po\'lat va alyuminiy zinapoyalar uchun qulay narxlar', 1, 2, 21, '2022-03-17 04:03:13'),
(15, 'Jurnal stoli Mebel House, Wood-Glass ', 11, 1790000, 'arzDoRZBDr13hszZbO59nGQhXXYluIOL0noHXpjOysCQhSkgbhJP5FCEs0mn.jpeg', 'arzDoRZBDr13hszZbO59nGQhXXYluIOL0noHXpjOysCQhSkgbhJP5FCEs0mn.jpeg', 'Kafolat muddati (oy): 1\r\nYetkazib berish:\r\nManzilga qarab 4 soatdan 2 ish kunigacha yetkazib beriladi\r\n', 1, 6, 21, '2022-03-17 04:08:05'),
(16, 'Rahbar o‘rindig‘i CA-1607A Grid', 11, 1675000, '4cZg1SPwzDmbDLi51qaVYhNes96fFE0RCa0GLcB41lIcqHSMSw6jN4qmmDb4.jpeg', 'Hx16LvqvThAueBP1Dblofy1yYJ169z6mrNMQV1EfADudX9B4bjQdKagBhiV8.jpeg', 'Kafolat muddati (oy): Yo\'q\r\n\r\nMazkur stul ixcham va zamonaviy dizayni bilan har qanday insonning e\'tiborini tortadi.', 1, 6, 21, '2022-03-17 04:13:26'),
(17, 'Tushonka Ekstra 325 Gr', 11, 56000, 'Без названия.jpeg', '', 'Hurmatli haridorlar, saytdagi narxlar qo᾿lda yangilanadi. Shu sababli, mahsulotning real narxlari qimmatroq yoki arzonroq bo᾿lishi mumkin. Aniq narxni menejer bilan bog᾿lanib bilib olishingiz mumkin. ', 1, 4, 2, '2022-03-22 12:50:33');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brithday` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jins` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companyType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companyName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companyHistory` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_about` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `fullName`, `brithday`, `jins`, `companyType`, `companyName`, `companyHistory`, `company_about`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(11, 'superadmin', 'Superadmin', '2022-03-01', 'Erkak', 'MUHANDISLIK, METAL VA ISHLAB CHIQARISH', 'FSOFT Investment Company', '3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nesciunt sunt ut voluptatem. Cum dolor eligendi, magnam molestiae odit quaerat ut? Accusamus architecto assumenda debitis odit quis. Consequuntur eos, veniam.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nesciunt sunt ut voluptatem. Cum dolor eligendi, magnam molestiae odit quaerat ut? Accusamus architecto assumenda debitis odit quis. Consequuntur eos, veniam.\r\n', 'ocSBT-a6iPzjGy6PvmI5P4NT1d9bDm6K', '$2y$13$ZSmS0A1hkvpeIAUMo8ALTeN5fGRH8xj0C0anrWk3O2WCmQJ90zO9G', NULL, 'admin@admin.uz2', 10, 1647459507, 1647459507, 'q8Rplp4owHFNxCAPJULWLlJ4a9EfgHUN_1647459507'),
(13, 'faxriddin1129', 'Boboyev Faxriddin Erkin Og\'li', '2000-04-06', 'Erkak', 'ENERGIYA SANOATI', 'Kapital Energy Tour', '6', 'Maishiy chiqindilarni toʼplash va olib chiqib ketish boʼyicha koʼrsatilgan xizmatlar uchun qonun hujjatlariga va ushbu Qoidalarga muvofiq toʼlovlarni oʼz vaqtida va toʼliq hajmda olish;\r\nIsteʼmolchiga (yuridik shaxs va yakka tartibdagi tadbirkorga) qarzdorlik toʼgʼrisida ogohlantirish xati yuborish;\r\nMaishiy chiqindilarni toʼplash va olib chiqib ketish boʼyicha koʼrsatilgan xizmatlar uchun toʼlovlarni undirish boʼyicha sudga daʼvolar taqdim qilish, shuningdek, qonunchilikda belgilangan tartibda penya undirish (qattiq maishiy chiqindilarni toʼplash va olib chiqib ketish boʼyicha xizmatlar uchun majburiy toʼlovlar bundan mustasno);\r\nYirik gabaritli maishiy chiqindilar, qurilish chiqindilari, chorvachilik chiqindilari, suyuq maishiy chiqindilar va boshqa chiqindilarni alohida toʼlov evaziga olib chiqish boʼyicha qoʼshimcha xizmatlar koʼrsatish;\r\nQattiq va suyuq maishiy chiqindilarni toʼliq utilizatsiya qilish, sotish yoki shartnoma asosida maishiy chiqindilarni toʼplash, tashish, utilizatsiya qilish, qayta ishlash, koʼmish va sotish bilan shugʼullanuvchi boshqa yuridik va jismoniy shaxslarga topshirish uchun kompleks choralarni amalga oshirish.\r\nXizmat koʼrsatuvchi tashkilot qonun hujjatlariga muvofiq boshqa huquqlarga ham ega boʼlishi mumkin.', 'QphFJn2eID0mgd29YgBKMWV_tjrX9Vd-', '$2y$13$oRkLBYosBBr7EJJXdqbawO3ltkNzLskGRoPnuEqemxsEuibHVr1JK', NULL, 'faxriddinboboyev1129@gmail.com', 10, 1648140402, 1648140466, 'miQUNjIH73wjO1CsXUnPYtKRTyB2O2IS_1648140402');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `productions`
--
ALTER TABLE `productions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cate`
--
ALTER TABLE `cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `productions`
--
ALTER TABLE `productions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
