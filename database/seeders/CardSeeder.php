<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    public function run(): void
    {
        Card::create([
            "card" => "magician",
            "card_name" => "Чаклун",
            "img_name" => "Старші аркани/Чаклун.jpg",
            "main_meaning_dir" => "Здатність, сила, бажання, прояв, логіка, концентрація, винахідливість, вплив, екстрасенсорні здібності, сила волі",
            "main_meaning_rev" => "Жадібність, відсутність ясності розуму, ілюзія, хитрість, маніпуляція, невикористані здібності, розтрачений талант, неблагонадійність, обман",
            "describe" => "Карта Таро Маг багата на символіку. На зображенні в центрі зображена людина, одна рука якої спрямована до Всесвіту, а інша – до землі. Положення рук вказує на зв’язок між матеріалізмом і спіритуалізмом. Карта Маг використовує цей зв’язок, щоб проявити і досягти своїх цілей у фізичному світі.
            Більш того, якщо ви уважно подивитеся на нього, то побачите, що його одяг білий, що уособлює чистоту. З іншого боку, його плащ червоний. Це ілюструє його знання та досвід пізнання світу. Стіл, який розміщений перед ним, ілюструє чотири масті карт таро – Жезл, Кубок, Меч і Пентакль. Ці чотири масті також представляють чотири стихії – Вогонь, Воду, Повітря та Землю. Це означає, що Маг володіє всіма елементами, необхідними для того, щоб стати повноцінною істотою.
            Символ над його головою – це символ нескінченності, а на талії – змія, що кусає себе за хвіст. Це ілюструє його необмежений потенціал. На передньому плані зображено безліч квітів і листя, що символізує плоди і розквіт прагнень і нових ідей.",
            "meaning_dir" => "Коли карта Таро Маг з’являється в розкладі, вона ілюструє чисту силу і рішучість у виконанні задумів. Завдяки силі всіх стихій ви будете використовувати свій потенціал найкращим чином і формувати його для здійснення своїх бажань і мрій. Ви станете сполучною ланкою між землею і Всесвітом. Ти володітимеш усіма навичками і здібностями, щоб стати успішною людиною в цьому світі.
            Ви перебуваєте в належній гармонії із Всесвітом, і з оптимістичним настроєм ви пройдете через усі злети і падіння вашого життя. Ваша узгодженість чудова, а правильний прояв і зосередженість зроблять вас майстром мудрості та знань, вражаючи оточуючих. Карта таро Маг (вертикальна) також говорить, що подібно до мага, ви будете великим у своїх починаннях і будете сповнені енергії для виконання завдань свого життя.
            Ця карта таро також говорить, що зараз настав час показати свої справжні можливості. Будь то щось нове, що ви почнете, або будь-яка модифікація, яку ви хочете здійснити у вашій існуючій роботі, ви можете зробити це без вагань. Стихія Мага з вами, і ваші найпотаємніші бажання незабаром здійсняться, приносячи нові зміни і можливості у ваше життя.",
            "meaning_rev" => "У перевернутому положенні ця карта Таро в колоді Великих Арканів показує, що ви повинні бути обережними в тому, що ви робите, оскільки велика ймовірність того, що ви можете втратити можливості на своєму шляху. Існує навіть ймовірність того, що ви можете зіткнутися з такими проблемами, як невпевненість в собі і низька самооцінка. З перевернутою картою Маг, ви перестанете шукати позитив у речах. З іншого боку, вона представляє знання та мудрість. Разом з цим, ця карта також ілюструє вашу надійність.
            Однак люди навколо вас будуть маніпулювати і обманювати. Ви також можете зіткнутися з жадібними людьми, які можуть завдати вам удару в спину ще до того, як ви це зрозумієте. Мало того, ваша натура також буде хитрою і спокуситься на показуху в таких сферах, як мистецтво. Божевільні та байдужі речі незабаром потраплять у поле вашого зору, що може зіграти вам на руку або змусити вас відволіктися, створюючи проблеми у вашому житті.
            Зображуючи ваш поточний емоційний стан, він також допомагає вам зрозуміти рівень сили, яку ви маєте для виконання своїх повсякденних завдань. Крім того, він попереджає вас про необдумані рішення, які ви можете прийняти, що може привести вас до падіння та негараздів. Це попереджає вас про те, що люди можуть бути невірними вам і прикидатися найкращою людиною, якою вони могли б бути.",
        ]);
    }
}

/*
    $img_name = "Старші аркани/Верховна Жриця.jpg";
    $card_name = "Верховна Жриця";
    $main_meaning_dir = "Таємничість, чуттєвість, бажаність, недосяжність, родючість, творчість, підсвідомість, жага до знань, висока сила, інтуїція, внутрішній голос, божественне жіноче начало";
    $main_meaning_rev = "Заблоковані екстрасенсорні здібності, проблеми з родючістю, неконтрольовані спалахи, пригнічена інтуїція, сексуальна напруженість, небажана увага, розгубленість, приховані мотиви, поверховість, мовчання";
    $describe = "Верховна жриця сидить перед тонкою пурдою, прикрашеною гранатами. Ця пурда ілюструє різні підсвідомі і свідомі сфери, невидиме і видиме, і допомагає тримати на відстані випадкових глядачів. Лише посвячені можуть увійти туди. Гранати на пурді уособлюють божественне жіноче начало, достаток і родючість. Він є священним для Персефони. Вона з’їла зернятко граната в підземному царстві і була змушена приходити щороку.
    По обидва боки від верховної жриці стоять два великих стовпи. Вони позначають вхід до цього містичного місця. Один стовп чорний, на ньому викарбувано літеру Б, що означає “Боаз”, тобто “сильний”, “могутній”. Інший – білий, на ньому викарбувано літеру Я, що означає “Яхін”, тобто “Він встановить”. Чорно-білі відтінки стовпів символізують дуалізм, як чоловіче і жіноче, темряву і світло, щоб пояснити світові, що прийняття і знання дуальної природи всього є обов’язковим для виживання в цьому світі.
    Крім того, з Таро Верховної Жриці ви побачите, що вона одягнена в блакитну мантію, з хрестом на грудях і рогатою короною на голові. Обидва ці аксесуари уособлюють її божественну мудрість і статус правительки. В руці вона тримає сувій, який частково зображений, що означає, що святе знання є одночасно прихованим і явним і відкриється людині, якщо вона буде готова копнути глибше і вийти за межі матеріалізму. Півмісяць біля її ніг символізує її зв’язок з божественним фемінізмом, підсвідомістю та інтуїцією.";
    $meaning_dir = "Карта таро “Верховна жриця” під час читання таро уособлює таємницю, чуттєвість та інтуїцію. Випадання цієї карти означає, що ви повинні довіряти своїм інстинктам і рухатися тим шляхом, який ви вважаєте найкращим для себе, не слухаючи і не довіряючи тому, що говорять інші. Шукайте свої цілі та мрії, а також всі символи та знаки, які посилає вам Всесвіт. Більше того, ця карта Таро, що стоїть вертикально, також означає, що ви, безсумнівно, володієте хорошими знаннями про речі, які вас оточують. Таким чином, розбудіть в собі божественне жіноче начало і шукайте відповіді на незвідане.
    Верховна Жриця (у вертикальному положенні) уособлює інтуїтивність і духовність. Тому, якщо вам випала ця карта під час ворожіння на Таро, шукайте можливості, що стосуються духовної роботи та молитов. Крім того, Верховна Жриця більше схожа на правлячу даму. Це уособлює силу і владу для виконання всіх завдань в її житті. Отже, вам не повинно бракувати мужності виконувати завдання і прислухатися до свого серця, щоб шукати відповіді на свої сумніви і питання. Крім того, ви повинні захистити себе від будь-якого негативу і глибше шукати своє внутрішнє “я”, щоб зрозуміти свої навички та здібності, які допоможуть вам досягти успіху в житті.";
    $meaning_rev = "Перевернута карта Верховна Жриця ілюструє, що ви, безумовно, спрямуєте себе на своє внутрішнє “я” та його вібрації та енергії. Ви були б сповнені мудрості. Однак, з іншого боку, ви станете жертвою мінливого розуму і хитких думок. Ви будете більше занурені у власну драму та ігноруватимете свої цілі та бажання. Це перевертання карти також вказує на те, що ви можете тримати себе подалі від зовнішнього світу і уникати ділитися своїм справжнім “я” з оточуючими. У вас буде більше сумнівів у собі, ніж позитиву. Заперечень буде більше, ніж прийняття. Крім того, існує ймовірність того, що ви можете ігнорувати свої внутрішні можливості через те ж саме.
    Ця карта вказує на загальну капітуляцію. Речі навколо вас можуть звести вас з розуму і ви втратите терпіння. Ваше мислення буде бачити більше негативних сторін, ніж позитивних. Більше того, ви також станете людиною пліток. У вас також з’являться люди з прихованими намірами. З іншого боку, ви будете чудовим комунікатором. Якщо ви використовуєте це з розумом, ви будете великим. Крім того, ви можете вірити в неправду, для чого вам слід частіше вести чесні та відкриті розмови з оточуючими вас людьми. Крім того, тримайте секрети на відстані.";
*/