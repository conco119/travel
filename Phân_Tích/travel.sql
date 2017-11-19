-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 09:20 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(10) UNSIGNED NOT NULL,
  `tour_id` int(10) NOT NULL,
  `booking_address` varchar(225) NOT NULL,
  `departure` date NOT NULL,
  `adult` int(10) NOT NULL,
  `child` int(10) NOT NULL,
  `infant` int(10) NOT NULL,
  `request` text NOT NULL,
  `condition_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

CREATE TABLE `conditions` (
  `condition_id` int(10) UNSIGNED NOT NULL,
  `condition_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`condition_id`, `condition_content`) VALUES
(1, 'Please kindly read these terms and conditions carefully. On booking online or signing our booking form when making reservation over the phone or by email, you are deemed to have read and accepted our booking conditions, and are accepting the terms of these conditions on behalf of all persons in the party These terms and conditions constitute an agreement between Vietnam Package Travel and clients. By entering the site you accept these terms and conditions. The terms and conditions are subject to change at any time, and it is your responsibility to check these terms and conditions regularly in case there is any change. Continuing to use the site after a change has been made is your acceptance of those changes. 1. Rate: Tour prices are valid till 31 December 2013 and are net prices and quoted in American dollar per person, inclusive of 5% service charge and exclusive of 10% VAT tax. 2. Included in quoted programs:\r\n\r\n\r\n	Transportation in air conditioned vehicle;\r\n	Domestic flight or train ticket (if any);\r\n	All accommodations as noted in the itinerary based on twin share with daily breakfast;\r\n	Meals as specified in the itinerary;\r\n	Fully guided sightseeing as noted in the itinerary;\r\n\r\n\r\n3. Not included in quoted programs:\r\n\r\n\r\n	Airport transfer unless otherwise stated;\r\n	Early and/or late check in at hotels unless otherwise stated;\r\n	International airfares unless otherwise stated;\r\n	Visa fee and visa arrangement fee;\r\n	Airport departure taxes;\r\n	Meals other than specified in the itinerary;\r\n	Beverages other than included in pre-tour documentation,\r\n	Sightseeing not included in the itinerary;\r\n	Gratuities and tips;\r\n	Personal expenses\r\n\r\n\r\n4. Payment We require full payment for all online bookings with Vietnam Package Travel. The prices quoted in the website www.vietnampackagetravel.com&nbsp;are net price and exclusive of any kind of booking fee when making the payment. &nbsp;There are 2 payment methods available for online customers:\r\n\r\n\r\n	Payment via Credit card (OnePay): 3% fee\r\n	Payment via PayPal: 4% fee\r\n\r\n\r\nThis transaction fee is subject to be paid by the clients of Vietnam Package Travel. 5. Amendment, cancellation and refund 5.1 Amendment\r\n\r\n\r\n	All modifications and extensions must be made at the time of booking.\r\n	Any subsequent changes are subject to an additional fee, plus any other applicable cancellation fees as imposed by Vietnam Package Travel, and such fees are due immediately when the amendment request is made.\r\n	No amendment will be accepted within 3 days prior to departure, and no change may be made after travel has commenced.\r\n\r\n\r\n5.2 Cancellation from travelers For almost of our tours, once tour is confirmed and fully paid but for one reason they cancel the tour, the following charges will apply in the event of cancellation prior to tour commencement:\r\n\r\n\r\n	More than 45 days prior to trip departure: No charge (Full refund will be made but transaction fee will be paid by you).\r\n	30-45 days before arrival: 10% of total tour price.\r\n	15-29 days before arrival: 50% of total tour price.\r\n	7-14 days before arrival: 75% of total tour price.\r\n	Within 7 days before arrival: 100% tour price.\r\n\r\n\r\nNotes:\r\n\r\n\r\n	The above fees are subject to an added bank transaction fee.\r\n	There will be no refund given for any unused or missed ground arrangements, sightseeing, meals or hotel accommodations.\r\n	For no show cases, there will be no refund.\r\n	All cancellations must be in person or in writing and received by Vietnam Package Travel\r\n\r\n\r\n5.3 Cancellation from Vietnam Package Travel  In the event Vietnam Package Travel cancel a trip, for any reason, we will contact you immediately and offer you the alternatives or all money for services described in the reserved itinerary will be refunded in full. Such alternatives require a close cooperation and harmony between both you and Vietnam Package Travel. Please send an email to us at info@vietnampackagetravel.com&nbsp;to discuss, we are happy to listen and do all our best to give you the fairest things possible. In the event of such a cancellation, any client with pre-paid&nbsp; reservations or guaranteed confirmations shall be notified as soon as possible&nbsp; and a full refund of any payments on the un-used portion of transportation service, hotel service, domestic air flights, car rental or tours will be given. The transaction fee will be charged to Vietnam Package Travel. Vietnam Package Travel is not responsible for any expenses incurred by the client or for non-refundable air tickets, equipment, medical costs, etc. Vietnam Package Travel reserves the right to cancel any trip package, itinerary or any part of a client&rsquo;s itinerary due to insufficient sign-ups, overbooking, or anything else resulting directly or indirectly by the acts of God, detention, annoyance, machinery breakdown, quarantine, bad weather, or causes beyond its control. 6. Voucher of confirmation: Voucher will be issued by Vietnam Package Travel after the booked trip is confirmed and payment is completed. A service voucher will be sent by email/fax or snail mail to passenger within 2 working days.&nbsp;In case immediate confirmation is not possible, we will inform you of the booking status at the time of reservation. Clients serve the right to double check the voucher and ask for the change/update if there is something wrong regarding the trip/payment. 7. Liability and Insurance: Vietnam&nbsp;Package Travel is not responsible for any loss, injury or damage sustained by passengers incurred due to delay, accidents, natural disaster, political actions and unrest must be borne by passengers. Passengers are required to have full travel insurance. Airline schedules and local conditions may be affect accommodation and itineraries. Should this occur, we will endeavor to substitute suitable arrangement of similar value. Participation on any tour implies full agreement to above conditions by all parties involved. 8. Children discount:\r\n\r\n\r\n	Under 4 years: Free of Charge.\r\n	From 4 to under 8 years old: 50% of adult&rsquo;s fare and sharing bed with parents.\r\n	Over 8 years old: 100% of adult&rsquo;s fare and using existing bed.\r\n\r\n\r\n9. Privacy policy: Personal information about you such as name, address, phone number, or email address is subject to our Privacy Policy. We are committed to protecting the privacy and security of any personally identifiable information you provide us. Your personal information will not be released unless the law permits it or your permission is granted.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `contact_name` varchar(225) NOT NULL,
  `contact_email` varchar(225) NOT NULL,
  `contact_phone` varchar(11) NOT NULL,
  `nationality_id` int(10) NOT NULL,
  `contact_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_service`
--

CREATE TABLE `detail_service` (
  `detail_id` int(10) UNSIGNED NOT NULL,
  `option_id` int(10) NOT NULL,
  `service_id` int(10) NOT NULL,
  `service_title` varchar(225) NOT NULL,
  `service_itinerary` varchar(225) NOT NULL,
  `service_hightligh` text NOT NULL,
  `service_about` text NOT NULL,
  `service_departure` text NOT NULL,
  `service_note` text NOT NULL,
  `service_include` text NOT NULL,
  `service_not_include` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_service`
--

INSERT INTO `detail_service` (`detail_id`, `option_id`, `service_id`, `service_title`, `service_itinerary`, `service_hightligh`, `service_about`, `service_departure`, `service_note`, `service_include`, `service_not_include`) VALUES
(1, 4, 1, 'Ratraco Express Train Details', 'Hanoi - Lao Cai - Hanoi', 'Clean, convenient and comfortable Ratraco&rsquo;s cabins are designed simple and closed Clean, spacious and pure private toilet at the end of each carriage', 'About Ratraco Express Train Hanoi &ndash; Sapa: Ratraco Express Train is another top deluxe transportation service on the railway from Hanoi to Sapa. This train has 2 carriages (the 12th and 13th carriage in SP1 and SP2). Each carriage has 7 cabins, accommodating 28 berths. All carriages which include bottled water, fresh wipes, toothpaste and toothbrushes, are wood-paneled inside and decorated with noble wood furniture, which generates an atmosphere of coziness, glamour and high class to the customers. On each cabin, each objects and furniture is situated with the same purpose to ensure that the guests are staying under the most indulged and pleasant environment. Moreover, they are exact duplication of 3-stars hotel rooms with pure berths, fresh blankets and pillow for the deepest sleep of the passengers, accompanied with the standard facilities like air conditioner or LCD TV for the leisure demand of them. Additionally, the cabin attendants will further comfort the trip with their enthusiasm, hospitality and helpfulness. In spite of providing such a perfect train service to passengers with top deluxe advantage, the ticket fare to get on those carriages is quite reasonable.', 'From Hanoi: Daily at 21:40, arrive at 05:45 AM From Lao Cai: Daily at 20:15, arrive at 04:50 AM', 'One way ticket are available Private 7 seats car Lao Cai to Sapa: 30 USD Restroom is not in cabin and only open when the train run Price in USD for round trip ticket/person (Hanoi &ndash; Lao Cai &ndash; Hanoi) Surcharge: 15% additional on Christmas, New Year and Vietnam Holiday Free of charge for children under 5 year old sharing parent&lsquo;s existing berths Offers Free picking you up from hotel in Hanoi Old Quarter to Hanoi Train Station Email to contact us: info@vietnampackagetravel.com', 'Wet towels Snack and drinks Pick up from Hanoi Old Quarter to Hanoi train Station', 'VAT, surcharge Meals on Train Personal expenses'),
(2, 5, 2, 'Hanoi &ndash; Sapa by Luxury Bus (Dcar Limousine)', 'Hanoi - Sapa - Hanoi', 'Vietnam Package Travel&nbsp;offers Sapa&nbsp;Luxury&nbsp;Buses with modern design, soft seats,&nbsp;an excellent sound system by supported a LED 21 inches in center to relax during the way to Sapa. Besides, all seats in bus are equipped USB gate to charge smartphone, so all thing you have to do is booking ticket and enjoy Sapa journey. You are offered free bottles of water and snack on the bus. With our experienced and thoughtful drivers, you will be safe to discover Sapa with unforgettable experience. Luxury bus is suitable for family or small group&nbsp;of&nbsp;friends who want to have a luxury&nbsp;discovery&nbsp;together.&nbsp;Let&rsquo;s go with &ldquo;Sapa&nbsp;Luxury&nbsp;Bus&rdquo;.', 'Hanoi &ndash; Sapa: Hanoi Pick up: Hotel in Hanoi Old Quarter area at 6:30 AM. For passengers staying other areas, meeting time is 6:45 at 32 Dao Duy Tu, Hanoi Sapa Drop off: 09 Fanxipan, Sapa town at 11:55 Sapa &ndash; Hanoi: Sapa Pick up: 09 Fanxipan; Meeting time is 15:30 PM. Hanoi Drop off: Hotel in Hanoi Old Quarter area, bye time: 20:50 Please contact us by email info@vietnampackagetravel.com to get support.', '', '', 'Pillow Snack Water and cold towel English speaking guide Wifi and transport insurance', 'VAT Tips and other personal expenses'),
(3, 6, 3, 'Vietnam Visa on arrival 3 months multiple entries for US citizens only', '', '', 'Vietnam Visa Requirements for Citizens of United States of America\r\n\r\n1. Check Requirement\r\n\r\nUnited States of America is not in the exempt country list for Vietnam visa, so Vietnam visa is REQUIRED\r\n\r\n2. How To Apply Vietnam Online Visa For USA Citizens\r\n\r\nCitizens or residents in USA can choose one of two options to apply for a visa to Vietnam: Online or directly apply at Vietnam Embassy, but to save time you should get online visa.\r\nApply online to get visa on arrival (visa picked up at the arrival airport in Vietnam with the legal approval letter issued by the Vietnam Immigration Department). At the moment, the visa approval letter issued to US citizens when applying online is 1 year, multiple entry visa only (There is no longer 1 month, 3 month or 6 month visa). Therefore, if you apply for Vietnam visa online from our website, please kindly choose the &ldquo;Vietnam Visa on arrival 3 months multiple entries for US citizens only&rdquo; to facilitate the visa processing and get correct kind of visa.\r\n\r\nTo get this visa, you have to provide us below information:\r\n\r\n\r\n	Full name: give us full-name in your passport (exactly)\r\n	Passport number: in your passport (exactly)\r\n	Passport expiration date: in mm/ dd/ yyyy order (exactly)\r\n	Date of birth: in mm/ dd/ yyyy order (exactly)\r\n	Gender: fill in male or female (exactly)\r\n	Contact information: as much as you can. Your email is extremely necessary because we will need it to send your Approval Letter to you. This information will be kept private without revealing to any third party\r\n	Fight information: Date and time of arrival, number of flight, arrival destination\r\n	Please send us your scan of your passport and flight information to our email: info@vietnampackagetravel.com\r\n\r\n\r\nGet your visa stamp upon arrival at one of the Vietnam&rsquo;s airports\r\n\r\nIn order to get your Vietnam visa stamped on your passport, please bring your copy of Vietnam Visa Approval Letter (showed first at your departure airport and then stamped at Vietnam International Airport). At Vietnam International Airport, you are also required to fill in the entry and exit form, to attach your two latest passport- size photos and to pay for stamp fees.\r\n\r\n3. Vietnam visa Fee for USA Citizens\r\n\r\nTo apply for a visa online, you have to pay two (02) kinds of Visa Fee, which were Processing Fee (paying online) and Stamping Fee (paying at Vietnam international airport of arrival)\r\n\r\nNote:\r\n\r\n\r\n	Stamping fee : $135 paid at Vietnam international airport of arrival\r\n	At the moment, the visa approval letter issued to US citizens when applying online is 1 year, multiple entry visa only\r\n	Applicants must enter Vietnam at one of three international airports: Hanoi, Ho Chi Minh city or Da Nang\r\n	Service fee is applied for US citizens.\r\n	Passport must be valid for at least 6 months from the arrival date.', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `media_travel`
--

CREATE TABLE `media_travel` (
  `media_id` int(10) UNSIGNED NOT NULL,
  `media_name` varchar(225) NOT NULL,
  `media_title` varchar(225) NOT NULL,
  `media_link` varchar(225) NOT NULL,
  `taxonomy_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media_travel`
--

INSERT INTO `media_travel` (`media_id`, `media_name`, `media_title`, `media_link`, `taxonomy_id`) VALUES
(1, 'img.jpg', 'Halong Bay', '../library/image/img.jpg', 10),
(2, 'img6.jpg', 'Hue Capital', '../library/image/img6.jpg', 10),
(3, 'img10.jpg', 'Ha Noi', '../library/image/img10.jpg', 10),
(4, 'img7.jpg', 'Sapa', '../library/image/img7.jpg', 10),
(5, 'img11.jpg', 'Hoi An', '../library/image/img11.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `menu_travel`
--

CREATE TABLE `menu_travel` (
  `menu_id` int(10) UNSIGNED NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `taxonomy_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_travel`
--

INSERT INTO `menu_travel` (`menu_id`, `menu_name`, `taxonomy_id`) VALUES
(1, 'Combo/Package Tour', 4),
(2, 'Themes', 4),
(3, 'Tour by Destination', 4),
(4, 'Services', 4),
(5, 'Destination', 4),
(6, 'Contact', 4),
(7, 'Center Tours', 5),
(8, 'Northern Tours', 5),
(9, 'Southern Tours', 5),
(10, 'Trans-VietNam', 5),
(11, 'Adventures Tours', 5),
(12, 'Cruise and water Tours', 5),
(13, 'Day Trips', 5),
(14, 'Heritage Tours', 5),
(15, 'History and Culture', 5),
(16, 'Con Dao', 5),
(17, 'Da Lat', 5),
(18, 'Da Nang', 5),
(19, 'Halong Bay', 5),
(20, 'Ha Noi', 5),
(21, 'Hoi An', 5),
(22, 'Train Ticket', 5),
(23, 'Transfers Services', 5),
(24, 'Visa Services', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `nationality_id` int(10) UNSIGNED NOT NULL,
  `nationality_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`nationality_id`, `nationality_name`) VALUES
(2, 'VietNam'),
(3, 'United States'),
(4, 'Monaco'),
(5, 'Iceland'),
(6, 'Portugal'),
(7, 'Switzerland'),
(8, 'Greece'),
(9, 'Sweden'),
(10, 'Austria'),
(11, 'Bỉ'),
(12, 'Ukraine'),
(13, 'Netherlands'),
(14, 'Poland'),
(15, 'England'),
(16, 'Italia'),
(17, 'Germany'),
(18, 'France'),
(19, 'Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `news_travel`
--

CREATE TABLE `news_travel` (
  `new_id` int(10) UNSIGNED NOT NULL,
  `new_title` varchar(225) NOT NULL,
  `new_description` text NOT NULL,
  `new_content` text NOT NULL,
  `post_date` date NOT NULL,
  `taxonomy_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_travel`
--

INSERT INTO `news_travel` (`new_id`, `new_title`, `new_description`, `new_content`, `post_date`, `taxonomy_id`) VALUES
(1, 'Hue', 'Destination', 'Area: 70.99 sq. km Population: 339.8 thousand habitants (2009) Administrative Division: &ndash; Wards:Phu Nhuan, An Cuu, Truong An, Phuoc Vinh, Vinh Ninh, Phu Hoi, Xuan Phu, Vy Da, Tay Loc, Thuan Loc, Thuan Thanh, Thuan Hoa, Kim Long, Phu Hoa, Phu Cat, Phu Hiep, Phu Hau, Phu Binh, Phu Thuan and Phuong Duc, Huong So, An Hoa, An Dong, An Tay, Huong Long, Thuy Xuan, Thuy Bieu. Ethnic groups: Viet (Kinh) &nbsp; Hue City is one of places which have many cultural heritage. Up to now, there is no place like Hue remaining a lot of originally historical vestiges as in this ancient Capital City. On the northern bank of Perfume River has relics consisting of palaces, which were constructed as arc defensive ramparts with 11km length. This valuable construction includes more than 100 architectural works which were extremely reflected the life of Emperors and mandarins under reign of Nguyen. Situated in the middle of hills on the southern bank of Perfume River are very beautiful tombs of Kings Nguyen. Among these tombs are the four famous ones with the name and the arrangements of the tomb reflected each Emperor&rsquo;s points of view, personality and tastes. This is majestic Gia Long Tomb, imposing Minh Mang Tomb, poetic Tu Duc Tomb and magnificent Khai Dinh Tomb. Hue is also an important center of Buddhism. In Hue and its surrounding still exist tens of pagodas constructed more 300 years ago, and a hundred of temples and pagodas built in the early century. Besides, Hue is a place where the royal music is originated, and a place with traditional famous dishes and sophisticated handicraft. As a unique city of Vietnam still remains its form of City under Middle Age and the constructions of monarchic, Hue has become a big and invaluable museum. Therefore, vestiges in Hue ancient capital have been classified by the government as a very precious property and on December 1993 Hue has been recognized as a World Cultural Heritage Site by UNESCO.', '2017-02-28', 11),
(2, 'Phu Quoc', 'Destination', 'Location: Phu Quoc Island lies in the Gulf of Thailand, Kien Giang Province, 45km from Ha Tien and 15km south of the coast of Cambodia. \r\n\r\nCharacteristics: Phu Quoc, the largest island in Viet Nam, is also part of an archipelago consisting of 22 islands and islets. The island covers an area of 585km2 and is 50km long.\r\n\r\n&nbsp;\r\n\r\nPhu Quoc Island covers an area of 567sq.km (about 62km long and between 3km and 28km wide), and its population is approximately 85,000 (in 2001).\r\n\r\nPhu Quoc is called the island of &ldquo;99 mountains&rdquo; because of its many sandstone chains gradually descending from the north to the south. The longest one is Ham Ninh which stretches for 30km along the eastern edge with its highest peak called Mt. Chua (603m).\r\n\r\nPhu Quoc has a monsoon sub-equatorial climate. There are two seasons in the year: the rainy season (October only) and the dry season (November to September). The average annual rainfall is 2,879 m and the average temperature is 27oC. Trips to Phu Quoc can be made all year round, but the best time is dry season when the sky is always sunny, clear and blue.\r\n\r\nPhu Quoc is also called the Emerald Island because of its natural treasures and infinite tourism potential. The island is well known for its high-quality fish sauce; Phu Quoc fish sauce smells particularly good since it is made from a small fish, ca com, with a high level of protein. The island produces 6 million liters of fish sauce every year.\r\n\r\nPhu Quoc Island has many harbors such as An Thoi and Hon Thom where international and domestic ships anchor. Also, there are several historical sites on the island: National Hero Nguyen Trung Truc&rsquo;s military base, King Gia Long relics from the time he spent on the island, and Phu Quoc Prison.\r\n\r\nOff the coast of the island emerges a group of 105 islands of all sizes. Some of them are densely inhabited such as Hon Tre and Kien Hai, 25km from Rach Gia. Visitors can spend time on the beach or hike while observing the wild animals. Especially, visitors have the opportunity to experience diving service to discover the sea life. Phu Quoc sea has a diversified ecosystem of 929 species of flora, 89 species of hard coral, 19 species of soft coral, 62 species of seaweed&hellip; The best time for diving is during the dry season, from October to April. The ideal places for this activity are islets of Hon Doi Moi, Hon Mong Tay, Hon Thom, Hon Dam Trong, Hon Dau, Hon Dua&hellip;\r\n\r\nIt is possible to reach the island by either plane or boat. It takes 60 minutes from Ho Chi Minh City, 40 minutes from Rach Gia by plane. It takes 155 minutes from Ha Tien Town by boat.', '2017-02-28', 11),
(3, 'Central Vietnam', 'Destination', 'Middle of Vietnam or The middle (Vietnamese: Mi?n Trung), formerly also known as Trung ph?n by Republic of Vietnam, Trung k? and Annam under French Indochina) is one of the three regions of Vietnam (Northern Vietnam, Middle Vietnam, Southern Vietnam). Central Highlands (Tây Nguyên) are often included in the Central. Sometimes the Central and the Highlands are collectively referred to as Central&ndash;Highlands. The name &ldquo;Trung B?&rdquo; was used by the king Bao Dai when he established administrative level higher than the province in 1945, instead of the Trung K? which recalled the French occupation. This name was officially used by government of the Democratic Republic of Vietnam and is popularly used today.\r\n\r\nVietnam&rsquo;s central coast is fast becoming one of Southeast Asia&rsquo;s most compelling tourism destinations. With attractions ranging from ancient UNESCO World Heritage-listed landmarks to international golf courses, endless stretches of white sandy beach and lush jungle-clad mountains, this diverse region has something to suit all types of travelers.\r\n\r\nThe region&rsquo;s tropical climate and long coastline make it an ideal seaside resort destination. The beaches are generally wide, flat and lapped by warm gentle seas, making them suitable for both swimming and beach sports and ideal for families.\r\n\r\nOf course, Vietnamese cuisine is becoming famous across the world for its fresh ingredients and rich flavors. And Central Vietnam adds a unique twist to the country&rsquo;s culinary artistry. The region&rsquo;s long coastline offers abundant local seafood, and the multiple street food stalls and local eateries are now complemented by international restaurants and fine-dining establishments.\r\n\r\nDiscover Central Vietnam\r\n\r\nHue Attractions:\r\n&ndash; Hue Citadel\r\n&ndash; Emperor Tombs\r\n&ndash; Pagodas\r\n&ndash; Dong Ba Market\r\n\r\nDa Nang Attractions:\r\n&ndash; Linh Ung Pagoda &amp; Lady Buddha\r\n&ndash; Beaches\r\n&ndash; My Son Sanctuary\r\n&ndash; The Marble Mountains\r\nMountains\r\n&ndash; Sun Wheel\r\n&ndash; Bana Hills\r\n\r\nHoi An Attractions:\r\n&ndash; Japanese Bridge (Chua Cau)\r\n&ndash; Phuc Kien Community Hall\r\n&ndash; Cua Dai beach', '2017-02-28', 11),
(4, 'Northern Vietnam', 'Destinaiton', 'Northern Vietnam is one of the three regions within Vietnam (the other two regions are Central Vietnam and Southern Vietnam).&nbsp;Of the three regions, the oldest is Northern Vietnam, where the Vietnamese culture originated over 2000 years ago in the Red River Delta, though Vietnamese people eventually spread south into the Mekong Delta.&nbsp;Northern Vietnam includes the following subregions : Northwest, Northeast and Red River Delta.\r\n\r\nNorthern Vietnam&rsquo;s top&nbsp;destination&nbsp;is the wildly popular Halong Bay, and nearby Cat Ba Island offers excellent hiking, biking and rock climbing.&nbsp;Halong Bay is geology gone wild, with hundreds and thousands of limestone pinnacles protruding from the waters. North of Halong Bay is the less-visited Bai Tu Long Bay, where nature&rsquo;s spectacular show continues all the way to the Chinese border. To the south of Halong Bay is Cat Ba Island, a &lsquo;lost world&rsquo; landscape with hiking, biking or just hanging around the order of the day. And just a hydrofoil ride away is Haiphong, the north&rsquo;s major port and a step back in time with wide boulevards and elegant architecture.\r\n\r\nThe karst connection continues into Cao Bang province &ndash; an essential detour are the sublime lakes of Ba Be National Park &ndash; and then west into Ha Giang, Vietnam&rsquo;s emerging destination for travellers, which hugs the Chinese border.\r\n\r\nFurther west the landscape segues into towering evergreen peaks and fertile river valleys. This is the heartland of hill-tribe culture with markets enlivened by the scarlet headdresses of the Dzao, the indigo fabrics of the Black H&rsquo;mong and the Flower H&rsquo;mong&rsquo;s brocaded aprons.&nbsp;Sapa is a great base for hiking and stunning vistas of Fansipan, Vietnam&rsquo;s highest peak.&nbsp;For many visitors, Sapa is the northwest, an atmospheric old hill station set amid stunning scenes of near-vertical rice terraces and towering peaks.&nbsp;From this former French hill station, the fabled northwest loop road crosses high mountain passes to historic Dien Bien Phu, before crossing lush lowland valleys south to sleepy Mai Chau. For the ultimate motorbike adventure head to Ha Giang, the final frontier in northern Vietnam.', '2017-02-28', 11),
(5, 'Quang Binh', 'Destination', 'Area: 8,065.3 sq. km.\r\n\r\nPopulation: 857.9 thousand habitants (2012).\r\n\r\nCapital: Dong Hoi City.\r\n\r\nTown: Ba Don\r\n\r\nDistricts: Tuyen Hoa, Minh Hoa, Quang Trach, Bo Trach, Quang Ninh, Le Thuy.\r\n\r\nEthnic groups: Viet (Kinh), Bru &ndash; Van Kieu, Chut, Tay.\r\n\r\n&nbsp;\r\n\r\nGeography\r\n\r\nLocated in North-Central Viet Nam, Quang Binh Province is surrounded by Ha Tinh Province on the north, East Sea on the east, Laos on the west and Quang Tri Province on the south.\r\n\r\nThe provincial topography is narrow and sloping from the west to the east. The area is divided into specific geological zones: mountainous, hilly and midland, lowland, coastal sandy area. The seaside stretches 116km with large Gianh and Nhat Le ports.\r\n\r\nQuang Binh belongs to the monsoon-tropical zone. The climate is divided into two seasons. Rainy season lasts from September to March next year. The annual average rainfall is 2,000-2,300mm. Heavy rains concentrate in September, October and November. Dry season lasts from April to August. Annual average degree is 24?C-26?C.\r\n\r\nTourism\r\n\r\nQuang Binh is famous for many charming landscape of mountain and sea. The coast is dotted with blue water, yellow sand beaches that sparkle under forests of green willow trees.\r\n\r\nEvery year, Quang Binh attracts many visitors coming to interesting landscapes such as Phong Nha, Tien Son caves, primitive forest in Phong Nha &ndash; Ke Bang reserve, Nhat Le, Da Nhay beaches, Bang Mineral Hot Spring, etc. Among of them, Phong Nha?- Ke Bang National Park has been recognized as the World Natural Heritage Site by UNESCO in 2003.\r\n\r\nIn addition of these, Quang Binh preserves objects from Bau Tro Remains, Hoa Binh and Dong Son culture as well as historical relics like Quang Binh Gate, Luy Thay, Rao Sen&hellip; Many places related two resistance wars name Cu Nam, Canh Duong, Cha Lo, Cong Troi, Xuan Son, Long Dai and Ho Chi Minh Trail.\r\n\r\nTransportation\r\n\r\nRoad, rail and shipping routes are fairly well developed. Dong Hoi City is 491km from Hanoi, 94km from Dong Ha, 166km from Hue, and 197km from Vinh. National Highway No.1A and North-South Express Train runs throw the province and stop at Dong Hoi City. Quang Binh has Cha Lo Border Gate in Minh Hoa District to Laos.', '2017-02-28', 11),
(6, 'Mai Chau', 'Destination', 'Isolated Mai Chau and the nearby villages are in a valley around 139km from Hanoi and only 150 metres above sea level. Nestled between two towering cliffs and surrounded by emerald green paddies, it is an enchanting sight as you approach down the windy cliff side road and the villages and surrounding countryside present an idyllic rural scene that could easily charm you into staying longer than intended.\r\n\r\nIn spring Mai Chau is a bright, almost parrot-green and by autumn this green transforms into golden hues as the rice approaches harvest. Taking the time to watch these transitions of colour seems like a perfectly useful way to spend your time while there.\r\n\r\nThe scenery isn&rsquo;t the only reason visitors flood to Mai Chau though; those bemoaning the death of truly budget accommodation in Vietnam will be happy to learn that this is one place you can stay for a song. The budget accommodation option is a &lsquo;homestay&rsquo; in a stilt house in one of the ethnic White Thai villages a short walk from Mai Chau town: Ban Poom Coong, Ban Lac 1 and Ban Lac 2.\r\n\r\nOf the villages, Ban Lac 1 is the more developed, with more gift shops and a busier nightlife &mdash; what there is of it &mdash; but there&rsquo;s little to differentiate the accommodation on offer. The lodgings are mostly traditional stilt houses with large communal rooms where you can sleep on a mat laid upon a squeaky, split bamboo floor, for just about the same cheap price everywhere. The sleeps are really a loss leader &mdash; they make the real money off the food you eat, and the curios and textiles you buy. Not to mention, the liquor you drink. A typical charge is 100,000 VND / person for bed and breakfast and although you could save &lsquo;small money&rsquo; by eating in town, family-style Vietnamese cooking is generally far superior to restaurant fare, and you wouldn&rsquo;t want to miss out on the nightly group meals.\r\n\r\nDespite this tourist-driven set-up, and the regular influx of visitors, the villages remain a relatively peaceful retreat, and it&rsquo;s heartening to see how the influx of tourist dollars hasn&rsquo;t changed the essential character of the locals, which we gauge to be as warm and easy-going as you please.\r\n\r\nAs far as eating is concerned, all guesthouses in the villages offer food at quite reasonable prices and varying standards. If they don&rsquo;t live up to your expectations there is little option other than to track back into town to try the local restaurants. Be warned though you will struggle to find anything of outstanding worth there.\r\n\r\nThe best time to visit Mai Chau is between October and April, as outside of these times Mai Chau can become unbearably hot, particular in June through to August, and if you&rsquo;re staying in a homestay you&rsquo;ll find little respite from the heat as electricity doesn&rsquo;t come on until the evening. That said, some good deals can be had on the pricier hotel options out of season.', '2017-02-28', 11);

-- --------------------------------------------------------

--
-- Table structure for table `option_tour`
--

CREATE TABLE `option_tour` (
  `option_id` int(10) UNSIGNED NOT NULL,
  `option_name` varchar(225) NOT NULL,
  `option_description` text NOT NULL,
  `price_id` int(10) NOT NULL,
  `tour_id` int(10) NOT NULL,
  `taxonomy_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `option_tour`
--

INSERT INTO `option_tour` (`option_id`, `option_name`, `option_description`, `price_id`, `tour_id`, `taxonomy_id`) VALUES
(1, 'Superior combo 3*', 'Price for Superior combo 3*', 8, 2, 7),
(2, 'Deluxe combo 4*', 'Deluxe combo 4*', 9, 2, 7),
(3, 'Luxury combo 5*', 'Luxury combo 5*', 12, 2, 7),
(4, 'Ratraco Express Train', 'Wooden deluxe cabin\r\n\r\nPrice for Wooden deluxe cabin', 10, 14, 6),
(5, 'Luxury Bus', 'Hanoi - Sapa\r\n\r\nPrice for One way Hanoi - Sapa', 11, 15, 27),
(6, 'Vietnam Visa on arrival 3 months multiple entries for US citizens only', 'Processing\r\n\r\nPrice for processing', 11, 16, 28);

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `price_id` int(10) UNSIGNED NOT NULL,
  `price_year` varchar(20) NOT NULL,
  `price_from` int(10) NOT NULL,
  `price_promotion` int(10) NOT NULL,
  `single_supplement` int(10) NOT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `min_quantity` int(10) NOT NULL,
  `max_quantity` int(10) NOT NULL,
  `taxonomy_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`price_id`, `price_year`, `price_from`, `price_promotion`, `single_supplement`, `valid_from`, `valid_to`, `min_quantity`, `max_quantity`, `taxonomy_id`) VALUES
(7, '2016-2017', 252, 0, 40, '2016-01-11', '2017-12-31', 1, 12, 9),
(8, '2016-2017', 262, 0, 50, '2016-01-11', '2017-12-31', 1, 12, 8),
(9, '2016-2017', 346, 0, 50, '2016-01-11', '2017-12-31', 1, 16, 8),
(10, '2016-2017', 66, 0, 0, '2016-01-11', '2017-12-31', 1, 16, 9),
(11, '2016-2017', 22, 0, 0, '2016-01-11', '2017-12-31', 1, 16, 9),
(12, '2016-2017', 420, 0, 140, '2016-01-11', '2017-12-31', 1, 12, 8);

-- --------------------------------------------------------

--
-- Table structure for table `service_travel`
--

CREATE TABLE `service_travel` (
  `service_id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(225) NOT NULL,
  `taxonomy_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_travel`
--

INSERT INTO `service_travel` (`service_id`, `service_name`, `taxonomy_id`) VALUES
(1, 'Train Ticket', 3),
(2, 'Tranfers Services', 3),
(3, 'Visa Services', 3);

-- --------------------------------------------------------

--
-- Table structure for table `taxonomy`
--

CREATE TABLE `taxonomy` (
  `taxonomy_id` int(10) UNSIGNED NOT NULL,
  `taxonomy_name` varchar(225) NOT NULL,
  `taxonomy_type` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxonomy`
--

INSERT INTO `taxonomy` (`taxonomy_id`, `taxonomy_name`, `taxonomy_type`) VALUES
(3, 'Services', 'Service'),
(4, 'Menu', 'Menu'),
(5, 'Sub Menu', 'Menu'),
(6, 'Train Ticket', 'Option'),
(7, 'Tour Option', 'Option'),
(8, 'Tours Price', 'Price'),
(9, 'Services Price', 'Price'),
(10, 'Avatar Tour', 'Image'),
(11, 'Destinations', 'New'),
(12, 'Central Tours', 'Combo/Package Tours'),
(13, 'Northern Tours', 'Combo/Package Tours'),
(14, 'Southern Tours', 'Combo/Package Tours'),
(15, 'Trans -VietNam', 'Combo/Package Tours'),
(16, 'Adventure Tours', 'Themes'),
(17, 'Cruise and water Tours', 'Themes'),
(18, 'Day Trips', 'Themes'),
(19, 'Heritage Tours', 'Themes'),
(20, 'History and Culture', 'Themes'),
(21, 'Con Dao', 'Tours by Destination'),
(22, 'Da Lat', 'Tours by Destination'),
(23, 'Halong Bay', 'Tours by Destination'),
(24, 'Ha Noi', 'Tours by Destination'),
(25, 'Hoi An', 'Tours by Destination'),
(26, 'Service Itinerary', 'Itinerary'),
(27, 'Transfer Option', 'Option'),
(28, 'Visa Option', 'Option');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(10) UNSIGNED NOT NULL,
  `tour_name` varchar(225) NOT NULL,
  `tour_description` text NOT NULL,
  `taxonomy_id` int(10) NOT NULL,
  `media_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`tour_id`, `tour_name`, `tour_description`, `taxonomy_id`, `media_id`) VALUES
(2, 'Da Nang – Hoi An – My Son – Hue 3 days group tour', '<p>A special trip will give you a memorable visit of three famous destinations in the center of Vietnam including Da Nang, Hue, Hoi An. Highlights of this trip are visit to the Hoi An ancient town with the Japanese &ndash; covered bridge, Tan Ky old house, the Cantonese congregation, excursion of Marble Mountains, Lang Co beach, discovery My Son holly land and full day Hue city tour.</p>\r\n\r\n<h2><span class="marker">Highlights </span></h2>\r\n\r\n<ul>\r\n	<li><em>Join an interesting itinerary : Hoi An ancient town, Hue city, Da Nang, My Son holly land</em></li>\r\n	<li><em>Discover old architectures in Hoi An such as Tan Ky old house, the Japanese - covered bridge</em></li>\r\n	<li><em>Understand the elaborate carvings and sculptures of the Cham people, the beauty of Ancient buildings at of the Champa Kingdom</em></li>\r\n	<li><em>Visit royal constructures like Emperor Minh Mang Mausoleum, Emperor Khai Dinh Mausoleum, the Royal Citadel, Forbidden City, Hue Royal Museum</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Included</h2>\r\n\r\n<ul>\r\n	<li><em>Entrance fees</em></li>\r\n	<li><em>Join tour ticket</em></li>\r\n	<li><em>Hue Folksong ticket</em></li>\r\n	<li><em>English speaking guide</em></li>\r\n	<li><em>Boat trip on Perfume river</em></li>\r\n	<li><em>Pick up and transfer as program</em></li>\r\n	<li><em>Half board meals (Breakfasts at hotels &amp; set menus)</em></li>\r\n	<li><em>Twin sharing standard room basic at 2 star hotels: in Hue (Carnary hotel, Sport hotel...); in Hoian (An Phu hotel, Vinh Hung 3 hotel...)</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Not Included</h2>\r\n\r\n<ul>\r\n	<li><em>Personal expenses: laundry, telephone,...</em></li>\r\n	<li><em>Air/train/bus tickets: Saigon/Hanoi &ndash; Hue &ndash; Saigon/Hanoi</em></li>\r\n</ul>\r\n', 12, 5),
(3, 'Combo Hanoi – Sapa – Halong 5 days', '<p><em>This combo is a special combination of Hanoi city tour, Halong overnight cruise 2-day tour and Sapa 2-day tours by train. Join this combo, you will have opportunity to explore the elegant architecture and fascinating history of Hanoi, enjoy the peaceful villages and majestic scenery of Sapa, glorious Halong bay of Vietnam and be captivated by the warmth of the friendly people you meet on the way.</em></p>\r\n\r\n<h2><span class="marker">Highlights </span></h2>\r\n\r\n<ul>\r\n	<li><em>Joining interesting itinerary Hanoi city - Sapa - Halong</em></li>\r\n	<li><em>Admiring the overall pictures of the villages among rice terraces in Sapa</em></li>\r\n	<li><em>Exploring Halong bay with thousands of limestone mountains and colorful caves</em></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>What&#39;s Included</h2>\r\n\r\n<ul>\r\n	<li><em>Kayaking trip</em></li>\r\n	<li><em>Welcome drink</em></li>\r\n	<li><em>Insurance on board</em></li>\r\n	<li><em>Land transfer with A/C</em></li>\r\n	<li><em>Boat trip in Halong Bay</em></li>\r\n	<li><em>Entrance fees and visit fees</em></li>\r\n	<li><em>English speaking tour guide</em></li>\r\n	<li><em>Meals as indicated in itinerary</em></li>\r\n	<li><em>Fishing equipment, movie, exciting games</em></li>\r\n	<li><em>Return train tickets Hanoi &ndash; Lao Cai &ndash; Hanoi</em></li>\r\n	<li><em>Private cabin on boat (twin/double/triple sharing)</em></li>\r\n	<li><em>Accommodation at 3* hotel (2 - 3 persons/ room) in Sapa</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Not Included</h2>\r\n\r\n<ul>\r\n	<li><em>Hotel in Hanoi</em></li>\r\n	<li><em>Personal expenses</em></li>\r\n	<li><em>Tips and gratitude</em></li>\r\n	<li><em>Drinks and other meals</em></li>\r\n	<li><em>Peak season surcharge</em></li>\r\n	<li><em>Others not mentioned in inclusion</em></li>\r\n</ul>\r\n', 13, 3),
(4, 'Taste of the South 9 days', '<p>Taste of the South 9 days tour will give you the most enjoyable experience within 9 days. Your journey begins with a visit of Cu Chi tunnels then transfers to Can Tho to discover the most famous floating market &ndash; Cai Be, next experience beauty landscapes of Da Lat and ends with Nha Trang excursions such as boat trips, village excursions or cyclo rides. Join us now for a lifetime experience.</p>\r\n\r\n<h2><span class="marker">Highlights </span></h2>\r\n\r\n<ul>\r\n	<li><em>Enjoying the beaches of Nha Trang with interesting excursions</em></li>\r\n	<li><em>Interesting itinerary: Cu Chi tunnels, Buddhist Meditation Monastery, Paradise lake, Chicken village, Incense stick</em></li>\r\n	<li><em>Joining Da Lat city tour to visit Flower garden, Bao Dai&rsquo;s summer palace, Crazy house and Valley of love</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Included</h2>\r\n\r\n<ul>\r\n	<li><em>All car transfer per program</em></li>\r\n	<li><em>Flight Saigon &ndash; Da Lat &amp; Nha Trang &ndash; Saigon</em></li>\r\n	<li><em>Hotel in Saigon, Da Lat and Nha Trang (3*)</em></li>\r\n	<li><em>01 night on Mekong Eyes Cruiser (private cabin but sharing boat)</em></li>\r\n	<li><em>Meals as indicated (B=Breakfast, L=Lunch, D=Dinner)</em></li>\r\n	<li><em>Entrance fees</em></li>\r\n	<li><em>English speaking guide.</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Not Included</h2>\r\n\r\n<ul>\r\n	<li><em>Drinks &amp; other meals</em></li>\r\n	<li><em>International airfares</em></li>\r\n	<li><em>Travel insurance</em></li>\r\n	<li><em>Tips and other personal services.</em></li>\r\n</ul>\r\n', 14, 1),
(5, 'Vietnam Holiday 13 days', '<p>If you are looking for memorable holidays in Vietnam for your whole family, you don’t need to look any further. Vietnam Family Holiday 13 days tour will amaze your family with wide range of interesting activities:tasting the most delicious dishes, exploring and joining into the local lifestyle in Mekong Delta, biking to visit rustic villages, learning more about the magical Vietnamese history as well as immersing yourself into the charming of Natural World Heritage of Halong Bay. Enjoy with your family an incredible trip!</p><h2><span class=', 15, 2),
(6, 'Sapa – Cat Cat – Lao Chai – Ta Van bus tour 2D1N', '<p><em>This Sapa tour is designed for travelers who want to spend 2 days – 1 night in Sapa aiming at: Saving the time, visit the most popular travel sites in Sapa, stay overnight in a good hotel to be comfortable, much lower cost than going by night train, especially you can enjoy the friendly services. Let’s come and feel with us!</em></p><h2><span class=', 16, 4),
(7, 'Titop island with WeGo Cruise Day Tour', '<p><em>Journeys are uniquely designed for those who have limited time to Halong bay but delight in the thrill of exploration while indulging mind and body in the ambiance of relaxed elegance aboard the region&rsquo;s funny day-ship. With&nbsp;WeGo Halong Cruise day tour, tourists will have opportunity to experience Halong Bay beauty.</em></p>\r\n\r\n<h2><span class="marker">Highlights </span></h2>\r\n\r\n<ul>\r\n	<li><em>Pass through&nbsp;uninhabited islets and outcrops&nbsp;including Cock Fighting, Incense Burner, and Thumb</em></li>\r\n	<li><em>Visit Titov Island, enjoy swimming on sandy beach and climb up Titov Peak for a panoramic view of the bay like paradise</em></li>\r\n	<li><em>Explore Bo Hon Archipelago to get closer to the marvel natural beauty of the bay and understand about the Karst foundation</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Included</h2>\r\n\r\n<ul>\r\n	<li><em>??Modern minibus with chauffeur from hotel/ stay in Hanoi Old Quarter to Halong Bay &amp; return</em></li>\r\n	<li><em>English speaking guide during the trip, entrance fees</em></li>\r\n	<li><em>2 bottles of water per person, welcome drink on board</em></li>\r\n	<li><em>Gourmet lunch (Vietnamese dishes)</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Not Included</h2>\r\n\r\n<ul>\r\n	<li><em>??Tips for tour guide and personal expenses</em></li>\r\n	<li><em>Pick up from hotel/ stay outside Hanoi&rsquo;s Old Quarter</em></li>\r\n	<li><em>Kayaking or Bamboo boat (bookable in next step)</em></li>\r\n	<li><em>Beverages, travel insurance, tax and service charge</em></li>\r\n</ul>\r\n', 17, 1),
(8, 'Dragon Bay cruise full day tour from Halong', '<p><em>With one day tour, Dragon Bay boat takes you in comfort and the most leisurely cruising trip to explore natural beauty of Halong bay and get the chance to get &ldquo;off the beaten track&rdquo; and explore the secrets of the sea within Bai Tu Long area. Besides, you will also experience kayaking, cave visiting, fishing village&hellip; in a limited time.</em></p>\r\n\r\n<h2><span class="marker">Highlights </span></h2>\r\n\r\n<ul>\r\n	<li><em>Explore mysterious Thien Canh Son cave</em></li>\r\n	<li><em>Visit Vong Vieng fishing village,&nbsp;fish farm and pearl farm</em></li>\r\n	<li><em>Enjoy the beautiful limestone seascape in Bai Tu Long Bay</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Included</h2>\r\n\r\n<ul>\r\n	<li><em>Boat trip</em></li>\r\n	<li><em>Welcome drinks</em></li>\r\n	<li><em>Meals as specified in itinerary</em></li>\r\n	<li><em>Entrance and sightseeing fee</em></li>\r\n	<li><em>English speaking guide on board</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Not Included</h2>\r\n\r\n<ul>\r\n	<li><em>Extra drinks</em></li>\r\n	<li><em>Spa service</em></li>\r\n	<li><em>Bank charge</em></li>\r\n	<li><em>Personal expenses</em></li>\r\n	<li><em>Transportation round trip Hanoi - Halong Bay - Hanoi (bookable in next step)</em></li>\r\n</ul>\r\n', 18, 1),
(9, 'Halong Cruise & Culture Combining with homestay 3 days/ 2 nights', '<p><em>This culture combining trip within 3 days is the ultimate farming and cycling tour, which will provide unique experiences as well as plentiful opportunities to discover the real countryside of Northern Vietnam. Join our tour, you will go for wandering through the typical villages of Red River delta on push bike, slowly enjoy crossing through lush rice paddy fields to see the entire process of wet rice farming and cultivation, stunning landscapes and amazing backdrops. Especially, you will experience overnight at Paddy Home, the terracotta house located right in village with good facilities, and enjoy tasty dinner cooked by local family and served in local hospitality style. At the final night, sleeping on Swan cruise to discover amazing of dragon bay. Just within a few days of the unique program, you will be able to sketch the culture portrait of Vietnam and new seven world wonder-Halong bay.</em></p>\r\n\r\n<h2><span class="marker">Highlights </span></h2>\r\n\r\n<ul>\r\n	<li><em>Overnight in country side bungalow serving following homestay style</em></li>\r\n	<li><em>Cruise around amazing bay, kayaking on crystal water of Halong bay</em></li>\r\n	<li><em>Cycle around beautiful rural area where you will discover authentic local culture</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Included</h2>\r\n\r\n<ul>\r\n	<li><em>Homestay with daily breakfast</em></li>\r\n	<li><em>Experienced English or French speaking guide.</em></li>\r\n	<li><em>Sharing Cruise on Halong bay</em></li>\r\n	<li><em>Meals as stated in the itinerary (B: Breakfast ; L: Lunch ; D: Dinner), Vietnamese foods</em></li>\r\n	<li><em>All sightseeing tickets.</em></li>\r\n	<li><em>Bicycle for cycling around village in Dong Trieu</em></li>\r\n	<li><em>Tissues and water on coach.</em></li>\r\n	<li><em>Services charges and government tax.</em></li>\r\n	<li><em>Exclusive and personalized single agent / single customer service.</em></li>\r\n	<li><em>No extra charge after confirmation</em></li>\r\n	<li><em>24/7 hotline support guarantee</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Not Included</h2>\r\n\r\n<ul>\r\n	<li><em>Round trip shuttle bus transportation</em></li>\r\n	<li><em>Personal expenses, tips and gratuities</em></li>\r\n	<li><em>Travel insurance</em></li>\r\n	<li><em>VAT &amp; bank charge</em></li>\r\n	<li><em>Extra food and beverages.</em></li>\r\n	<li><em>Pre and post accommodations</em></li>\r\n</ul>\r\n', 19, 1),
(10, 'Cu Chi Tunnels and Cao Dai Temple by boat and van', '<p><em>This tour will let you visit in one day two most popular places of interest near Ho Chi Minh City: a historical site of Cu Chi Tunnels and a unique Cao Dai Temple that represents the world&rsquo;s youngest and perhaps the most mysterious religion.</em></p>\r\n\r\n<h2><span class="marker">Highlights </span></h2>\r\n\r\n<ul>\r\n	<li><em>Visit the Cao Dai Holy See Temple, a mixture of a few different religions</em></li>\r\n	<li><em>Explore the Cu Chi Tunnels, a small sample of the immense network of tunnels during the US-Vietnam conflict.</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Included</h2>\r\n\r\n<ul>\r\n	<li><em>All entrance fees</em></li>\r\n	<li><em>Breakfast &amp; lunch</em></li>\r\n	<li><em>English-speaking guide</em></li>\r\n	<li><em>Hotel pick-up and drop off</em></li>\r\n	<li><em>Unlimited refreshments and local fruit</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Not Included</h2>\r\n\r\n<ul>\r\n	<li><em>Tips</em></li>\r\n	<li><em>Other personal expenses</em></li>\r\n</ul>\r\n', 20, 2),
(11, 'Escape to Paradise Island of Con Dao 4 days', '<p>A complete tour program on Con Dao island in 04 days (round trip by airplane to Con Dao islands) will provide you a trip to discover and experience beautiful islands where you can know how it&rsquo;s called &ldquo;Paradise on earth where&rdquo;.</p>\r\n\r\n<h2>Highlights</h2>\r\n\r\n<ul>\r\n	<li><em>Discover beautiful and romantic island - Con Dao island</em></li>\r\n	<li><em>Learn about life of Vietnam prisoners in Con Dao Museum</em></li>\r\n	<li><em>Join interesting itinerary (Dam Trau beach, Cai Prince Temple, Con Dao Museum, Phu Hai Cam)</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Included</h2>\r\n\r\n<ul>\r\n	<li><em>All admission fees</em></li>\r\n	<li><em>English speaking guide</em></li>\r\n	<li><em>A/C car in Con Dao Islands</em></li>\r\n	<li><em>Pure water (2 bottles 0,5l/person/day)</em></li>\r\n	<li><em>Room in 3 nights at mini hotel/resort (2pax/room)</em></li>\r\n	<li><em>Round trip air ticket from Saigon &ndash; Con Dao (by Vietnamairlines)</em></li>\r\n	<li><em>All of meals follow tour program (breakfast with set -menu for mini hotel standard)</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Not Included</h2>\r\n\r\n<ul>\r\n	<li><em>Personal expenses</em></li>\r\n	<li><em>Tips and gratuities</em></li>\r\n	<li><em>Government tax</em></li>\r\n	<li><em>Personal insurance</em></li>\r\n	<li><em>International airfare to/from Vietnam</em></li>\r\n</ul>\r\n', 21, 1),
(12, 'Da Lat City tour full day', '<p>You want to visit Da Lat but have much time in Dalat, you can joy our city tour full day to visit many attractions and know more about local people life: Bao Dai Summer Palace, Truc Lam Zen Monastery, Dalanta Waterfall, the Valley of Love,&hellip;</p>\r\n\r\n<h2><span class="marker">Highlights </span></h2>\r\n\r\n<ul>\r\n	<li><em>Learn about daily life of local people</em></li>\r\n	<li><em>Enjoy local special foods with romantic scene</em></li>\r\n	<li><em>Visit the most popular attractions in Dalat such as Truc Lam Zen Monastery, Dalanta Waterfall, the Valley of Love,...</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Included</h2>\r\n\r\n<ul>\r\n	<li><em>Travel Insurance</em></li>\r\n	<li><em>AC land transfer</em></li>\r\n	<li><em>Lunch at local restaurant</em></li>\r\n	<li><em>English speaking Guide</em></li>\r\n	<li><em>All entrance tickets to sites indicated in Itinerary</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Not Included</h2>\r\n\r\n<ul>\r\n	<li><em>Tip</em></li>\r\n	<li><em>Drinks</em></li>\r\n	<li><em>Boat ticket</em></li>\r\n	<li><em>Accommodation</em></li>\r\n	<li><em>Cable car ticket</em></li>\r\n	<li><em>Visa arrangement</em></li>\r\n	<li><em>Personal expenses</em></li>\r\n	<li><em>Other things not clearly mentioned in the included list</em></li>\r\n</ul>\r\n', 22, 4),
(13, 'Da Nang – Hoi An – My Son – Hue 3 days group tour', '<p>A special trip will give you a memorable visit of three famous destinations in the center of Vietnam including Da Nang, Hue, Hoi An. Highlights of this trip are visit to the Hoi An ancient town with the Japanese &ndash; covered bridge, Tan Ky old house, the Cantonese congregation, excursion of Marble Mountains, Lang Co beach, discovery My Son holly land and full day Hue city tour.</p>\r\n\r\n<h2><span class="marker">Highlights </span></h2>\r\n\r\n<ul>\r\n	<li><em>Join an interesting itinerary : Hoi An ancient town, Hue city, Da Nang, My Son holly land</em></li>\r\n	<li><em>Discover old architectures in Hoi An such as Tan Ky old house, the Japanese - covered bridge</em></li>\r\n	<li><em>Understand the elaborate carvings and sculptures of the Cham people, the beauty of Ancient buildings at of the Champa Kingdom</em></li>\r\n	<li><em>Visit royal constructures like Emperor Minh Mang Mausoleum, Emperor Khai Dinh Mausoleum, the Royal Citadel, Forbidden City, Hue Royal Museum</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Included</h2>\r\n\r\n<ul>\r\n	<li><em>Entrance fees</em></li>\r\n	<li><em>Join tour ticket</em></li>\r\n	<li><em>Hue Folksong ticket</em></li>\r\n	<li><em>English speaking guide</em></li>\r\n	<li><em>Boat trip on Perfume river</em></li>\r\n	<li><em>Pick up and transfer as program</em></li>\r\n	<li><em>Half board meals (Breakfasts at hotels &amp; set menus)</em></li>\r\n	<li><em>Twin sharing standard room basic at 2 star hotels: in Hue (Carnary hotel, Sport hotel...); in Hoian (An Phu hotel, Vinh Hung 3 hotel...)</em></li>\r\n</ul>\r\n\r\n<h2>What&#39;s Not Included</h2>\r\n\r\n<ul>\r\n	<li><em>Personal expenses: laundry, telephone,...</em></li>\r\n	<li><em>Air/train/bus tickets: Saigon/Hanoi &ndash; Hue &ndash; Saigon/Hanoi</em></li>\r\n</ul>\r\n', 23, 3),
(14, ' Hanoi - Lao Cai - Hanoi', ' R88SP12', 26, 1),
(15, 'Hanoi - Sapa - Hanoi', 'B88SP05', 26, 4),
(16, 'VietNam Visa', 'V88MY12', 26, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tour_itinerary`
--

CREATE TABLE `tour_itinerary` (
  `tour_id` int(10) NOT NULL,
  `note` text NOT NULL,
  `day1` text NOT NULL,
  `day2` text NOT NULL,
  `day3` text NOT NULL,
  `day4` text NOT NULL,
  `day5` text NOT NULL,
  `day6` text NOT NULL,
  `day7` text NOT NULL,
  `day8` text NOT NULL,
  `day9` text NOT NULL,
  `day10` text NOT NULL,
  `day11` text NOT NULL,
  `day12` text NOT NULL,
  `day13` text NOT NULL,
  `day14` text NOT NULL,
  `day15` text NOT NULL,
  `day16` text NOT NULL,
  `day17` text NOT NULL,
  `day18` text NOT NULL,
  `day19` text NOT NULL,
  `day20` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `user_pass` varchar(32) NOT NULL,
  `user_gender` int(10) NOT NULL,
  `user_phone` varchar(11) NOT NULL,
  `user_email` varchar(225) NOT NULL,
  `level` int(10) NOT NULL,
  `nationality_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `tour_id` (`tour_id`,`condition_id`);

--
-- Indexes for table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`condition_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `nationality_id` (`nationality_id`);

--
-- Indexes for table `detail_service`
--
ALTER TABLE `detail_service`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `option_id` (`option_id`,`service_id`);

--
-- Indexes for table `media_travel`
--
ALTER TABLE `media_travel`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `taxonomy_id` (`taxonomy_id`);

--
-- Indexes for table `menu_travel`
--
ALTER TABLE `menu_travel`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `taxonomy_id` (`taxonomy_id`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`nationality_id`);

--
-- Indexes for table `news_travel`
--
ALTER TABLE `news_travel`
  ADD PRIMARY KEY (`new_id`),
  ADD KEY `taxonomy_id` (`taxonomy_id`);

--
-- Indexes for table `option_tour`
--
ALTER TABLE `option_tour`
  ADD PRIMARY KEY (`option_id`),
  ADD KEY `price_id` (`price_id`,`taxonomy_id`,`tour_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `service_travel`
--
ALTER TABLE `service_travel`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `taxonomy_id` (`taxonomy_id`);

--
-- Indexes for table `taxonomy`
--
ALTER TABLE `taxonomy`
  ADD PRIMARY KEY (`taxonomy_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `taxonomy_id` (`taxonomy_id`),
  ADD KEY `media_id` (`media_id`);

--
-- Indexes for table `tour_itinerary`
--
ALTER TABLE `tour_itinerary`
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `conditions`
--
ALTER TABLE `conditions`
  MODIFY `condition_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_service`
--
ALTER TABLE `detail_service`
  MODIFY `detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `media_travel`
--
ALTER TABLE `media_travel`
  MODIFY `media_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu_travel`
--
ALTER TABLE `menu_travel`
  MODIFY `menu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `nationality_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `news_travel`
--
ALTER TABLE `news_travel`
  MODIFY `new_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `option_tour`
--
ALTER TABLE `option_tour`
  MODIFY `option_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `price_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `service_travel`
--
ALTER TABLE `service_travel`
  MODIFY `service_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `taxonomy`
--
ALTER TABLE `taxonomy`
  MODIFY `taxonomy_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
