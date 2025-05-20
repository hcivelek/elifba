<?php
// Arap harfleri ve isimleri
$harfler = [
    'elif' => ['harf' => ['ا'], 'isim' => 'Elif'],
    'be' => ['harf' => ['ب'], 'isim' => 'Be'],
    'te' => ['harf' => ['ت'], 'isim' => 'Te'],
    'se' => ['harf' => ['ث'], 'isim' => 'Se'],
    'cim' => ['harf' => ['ج'], 'isim' => 'Cim'],
    'ha' => ['harf' => ['ح'], 'isim' => 'Ha'],
    'kha' => ['harf' => ['خ'], 'isim' => 'Kha'],
    'dal' => ['harf' => ['د'], 'isim' => 'Dal'],
    'zel' => ['harf' => ['ذ'], 'isim' => 'Zal'],
    'ra' => ['harf' => ['ر'], 'isim' => 'Ra'],
    'ze' => ['harf' => ['ز'], 'isim' => 'Ze'],
    'sin' => ['harf' => ['س'], 'isim' => 'Sin'],
    'şın' => ['harf' => ['ش'], 'isim' => 'Şın'],
    'sad' => ['harf' => ['ص'], 'isim' => 'Sad'],
    'dad' => ['harf' => ['ض'], 'isim' => 'Dad'],
    'ta' => ['harf' => ['ط'], 'isim' => 'Ta'],
    'za' => ['harf' => ['ظ'], 'isim' => 'Za'],
    'ayn' => ['harf' => ['ع'], 'isim' => 'Ayn'],
    'gayn' => ['harf' => ['غ'], 'isim' => 'Gayn'],
    'fe' => ['harf' => ['ف'], 'isim' => 'Fe'],
    'kaf' => ['harf' => ['ق'], 'isim' => 'Kaf'],
    'kef' => ['harf' => ['ك'], 'isim' => 'Kef'],
    'lam' => ['harf' => ['ل'], 'isim' => 'Lam'],
    'mim' => ['harf' => ['م'], 'isim' => 'Mim'],
    'nun' => ['harf' => ['ن'], 'isim' => 'Nun'],
    'he' => ['harf' => ['ھ','ه'], 'isim' => 'He'],
    'vav' => ['harf' => ['و'], 'isim' => 'Vav'],
    'ye' => ['harf' => ['يـ','ي'], 'isim' => 'Ye']
];


// Harekeler ve açıklamaları
$harekeler = [
    ['sembol' => "\u{064e}", 'isim' => 'Fetha (Üstün)', 'aciklama' => 'İnce harfleri "e", kalın harfleri "a" sesi ile okutur.'],
    ['sembol' => "\u{0650}", 'isim' => 'Kesra (Esre)', 'aciklama' => 'Harfleri "i" sesi ile okutur. Esre dik olursa i uzatılır.'],
    ['sembol' => "\u{064f}", 'isim' => 'Damme (Ötre)', 'aciklama' => ' Harfleri "u" sesi ile okutur.'],
    ['sembol' => "\u{064b}", 'isim' => 'Fethatayn (İki Üstün)', 'aciklama' => '"en", "an" sesi verir.'],
    ['sembol' => "\u{064d}", 'isim' => 'Kesratayn (İki Esre)', 'aciklama' => '"in" sesi verir.'],
    ['sembol' => "\u{064c}", 'isim' => 'Dammatayn (İki Ötre)', 'aciklama' => '"un" sesi verir.'],
    ['sembol' => "\u{0670}", 'isim' => 'Dik Üstün (Elif-i Şekliye)', 'aciklama' => 'Genellikle elif maksura (ىٰ) ile birlikte uzun "â" sesi verir.'],
];

$digerleri = [
    ['sembol' => "\u{0652}", 'isim' => 'Sükûn (Cezm)', 'aciklama' => 'Harfi sessizleştirir.'],    
    ['sembol' => "\u{0651}\u{064E}", 'isim' => 'Şedde + Üstün', 'aciklama' => 'Harfi iki kez okutur.'],
    ['sembol' => "\u{0651}", 'isim' => 'Şedde + Esre', 'aciklama' => 'Harfi iki kez okutur.'],
    ['sembol' => "\u{0651}\u{064F}", 'isim' => 'Şedde + Ötre', 'aciklama' => 'Harfi iki kez okutur.']
];

$ornekler = [
    "elif" => ["اَلَا", "اِبْنٌ", "اُكْلَةٌ", "اٰمَنَ", "اٍمَانٌ", "اِتِّقَاءٌ"],
    "be" => ["بَابٌ", "بِسْمِ", "بُرْهَانٌ", "بَشِيرٌ", "بَلَدٌ", "بِرٌّ"],
    "te" => ["تَابَ", "تِجَارَةٌ", "تُفَّاحٌ", "تَسْبِيحٌ", "تَقْوَى", "تَفْسِيرٌ"],
    "se" => ["ثَوْبٌ", "ثِقَةٌ", "ثُعْبَانٌ", "ثَمَرَةٌ", "ثَانِيَةٌ", "ثَلاَثَةٌ"],
    "cim" => ["جَنَّةٌ", "جِبْرِيلُ", "جُودٌ", "جَبَلٌ", "جَزَاءٌ", "جُنُودٌ"],
    "ha" => ["حَبٌّ", "حِكْمَةٌ", "حُبٌّ", "حَسَنَةٌ", "حَفِيظٌ", "حُرٌّ"],
    "kha" => ["خَبِيرٌ", "خِزَانَةٌ", "خُشُوعٌ", "خَلِيفَةٌ", "خَشْيَةٌ", "خُبْزٌ"],
    "dal" => ["دَارٌ", "دِينٌ", "دُعَاءٌ", "دَفْعٌ", "دَجَّالٌ", "دَلِيلٌ"],
    "zel" => ["ذَكَرٌ", "ذِكْرَى", "ذُرِّيَّةٌ", "ذَاتٌ", "ذَكِيٌّ", "ذَنْبٌ"],
    "ra" => ["رَحْمَةٌ", "رِزْقٌ", "رُسُلٌ", "رَسُولٌ", "رَجُلٌ", "رَغْبَةٌ"],
    "ze" => ["زَكَوٰةٌ", "زِرَاعَةٌ", "زُرُوعٌ", "زَادٌ", "زَيْتٌ", "زَوْجٌ"],
    "sin" => ["سَبِيلٌ", "سِرٌّ", "سُورَةٌ", "سَمَاءٌ", "سَلَامٌ", "سُجُودٌ"],
    "şın" => ["شَجَرَةٌ", "شِفَاءٌ", "شُكْرٌ", "شَرِيعَةٌ", "شَهَادَةٌ", "شُيُوخٌ"],
    "sad" => ["صَبْرٌ", "صِدْقٌ", "صُورَةٌ", "صَلَاةٌ", "صَفٌّ", "صَدَقَةٌ"],
    "dad" => ["ضَرْبٌ", "ضِرَارٌ", "ضُحًى", "ضَمِيرٌ", "ضَحِكَ", "ضَغْطٌ"],
    "ta" => ["طَبِيبٌ", "طِفْلٌ", "طُفُولَةٌ", "طَاعَةٌ", "طَهَارَةٌ", "طَرِيقٌ"],
    "za" => ["ظَلٌّ", "ظِهْرٌ", "ظُهُورٌ", "ظَالِمٌ", "ظَنٌّ", "ظِلٌّ"],
    "ayn" => ["عِلْمٌ", "عِبَادَةٌ", "عُقُوبَةٌ", "عَظِيمٌ", "عَفْوٌ", "عَقْلٌ"],
    "gayn" => ["غَفُورٌ", "غِذَاءٌ", "غُفْرَانٌ", "غَايَةٌ", "غَضَبٌ", "غِشٌّ"],
    "fe" => ["فَجْرٌ", "فِكْرٌ", "فُؤَادٌ", "فَضْلٌ", "فَتْحٌ", "فَرَحٌ"],
    "kaf" => ["قَلْبٌ", "قِرَاءَةٌ", "قُدْرَةٌ", "قَصَصٌ", "قَضَاءٌ", "قُرْآنٌ"],
    "kef" => ["كِتَابٌ", "كَرِيمٌ", "كُفْرٌ", "كَلِمَةٌ", "كَهْفٌ", "كُرْسِيٌّ"],
    "lam" => ["لَيْلٌ", "لِسَانٌ", "لُغَةٌ", "لَطِيفٌ", "لَحْمٌ", "لُؤْلُؤٌ"],
    "mim" => ["مَالٌ", "مِيزَانٌ", "مُؤْمِنٌ", "مَغْفِرَةٌ", "مَكَّةٌ", "مَلَكٌ"],
    "nun" => ["نُورٌ", "نِعْمَةٌ", "نَجَاةٌ", "نَصْرٌ", "نَفْسٌ", "نَهَارٌ"],
    "vav" => ["وَحْيٌ", "وِرَاثَةٌ", "وُدٌّ", "وَفَاءٌ", "وَطَنٌ", "وَقْتٌ"],
    "he" => ["هُدًى", "هِجْرَةٌ", "هُدُوءٌ", "هَادِي", "هَمٌّ", "هَاتِفٌ"],
    "ye" => ["يَوْمٌ", "يَقِينٌ", "يُسْرٌ", "يَسِيرٌ", "يَتِيمٌ", "يَقْظَةٌ"]
];

// Seçilen harf
$seciliHarf = $_GET['harf'] ?? 'elif';

$_harf = $harfler[$seciliHarf]['harf'][0].($harfler[$seciliHarf]['harf'][1] ?? '') ?? 'ا';
$harf = $harfler[$seciliHarf]['harf'][0] ?? 'ا';
$isim = $harfler[$seciliHarf]['isim'] ?? 'Elif';
$secilirenk = "text-green-800";

// print_r([$seciliHarf, $_harf, $harf, $isim]);exit;

?>

<!DOCTYPE html>
<html lang="ar">
<head> 
    <meta charset="UTF-8">
    <title><?= $isim ?> Harfi ve Hareke Örnekleri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @font-face {
            font-family: 'KuranFont';
            src: url('./KuranKerimFontAbay.ttf') format('truetype');
        }

        body {
            font-family: 'KuranFont', serif;
            font-size: 48px;
            text-align: center;
            margin-top: 50px; 
        }

        body2 {
            font-family: 'Scheherazade', serif;
        }
    </style>
</head>
<body class="bg-white text-gray-800 p-10 space-y-10">

    <h1 class="text-center text-4xl">Elif - Ba</h1>

    <!-- Harf Seçimi -->
    <div class="flex flex-wrap justify-center gap-2" dir="rtl">
        <?php foreach ($harfler as $anahtar => $deger): ?>
            <a href="?harf=<?= $anahtar ?>" class="border border-gray-400 rounded px-3 py-1 hover:bg-gray-200 <?= $anahtar === $seciliHarf ? 'bg-gray-300' : '' ?>">
                <?= $deger['harf'][0] ?>
            </a>
        <?php endforeach; ?>
    </div>

    <!-- Seçilen Harf -->
    <div class="text-center flex">
        <div class="mx-auto border-2 border-gray-600 rounded-xl p-5 cursor-pointer  hover:bg-gray-200" onclick="oku('<?= $harf ?>')">
            <div class="text-[150pt] leading-none <?= $secilirenk;?> " ><?= $_harf ?></div>
            <h1 class="text-4xl font-bold mt-5 pt-5"><?= $isim ?></h1>
        </div>
    </div>

    <!-- Hareke Örnekleri -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto" dir="rtl">
        <?php foreach ($harekeler as $hareke): ?>
            <div class="border-2 border-gray-700 rounded-xl p-6 text-center cursor-pointer hover:bg-gray-200"  onclick="oku('<?= $harf . $hareke['sembol'] ?>')">
                <div class="text-[50pt] <?= $secilirenk;?>"><?= $harf . $hareke['sembol']?></div>
                <div class="text-xl mt-2" dir="ltr"><?= $hareke['isim'] ?>: <?= $hareke['aciklama'] ?></div>
            </div>
        <?php endforeach; ?>
        <div></div>
        <?php foreach ($digerleri as $i => $hareke): ?>
            <?php if($seciliHarf != "elif"):?>
                <?php $okunus = $i == 2 ? "ا"."\u{064e}".$harf."\u{0651}"."\u{0650}" : "ا"."\u{064e}".$harf.$hareke['sembol'];?>
                <div class="border-2 border-gray-700 rounded-xl p-6 text-center cursor-pointer hover:bg-gray-200"  onclick="oku('<?= $okunus ?>')">
                <div class="text-[50pt] <?= $secilirenk;?>"><?= $okunus ?></div>
                <div class="text-xl mt-2" dir="ltr"><?= $hareke['isim'] ?>: <?= $hareke['aciklama'] ?></div>
            </div>
            <?php endif;?>
        <?php endforeach; ?>        
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto" dir="rtl">
        <?php foreach ($ornekler[$seciliHarf] as $kelime): ?>
            <div class="border-2 bg-gray-300 border-gray-600 rounded-xl px-6 py-3 text-[70pt]  cursor-pointer hover:bg-gray-100"  onclick="oku('<?= $kelime ?>')"><?= $kelime ?></div>
        <?php endforeach; ?>
    </div>    

<script src="https://code.responsivevoice.org/responsivevoice.js?key=GqR4UIv2"></script>    
<script>
    function oku(harf){
        responsiveVoice.speak(harf, 'Arabic Male')        
    }
</script>
</body>
</html>
