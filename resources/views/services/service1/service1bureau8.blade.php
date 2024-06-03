<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Liste avec points personnalisés</title>
<style>
    .custom-list {
        list-style: none;
        padding: 0;
    }
    .custom-list li {
        text-align: right;
        margin-bottom:5px;
        font-size:23px;
    }
    .custom-list li:before {
        content: "• "; /* Utilisation du point comme marqueur */
        font-size:30px; /* Taille de la police pour les points */
        vertical-align: middle;
        margin-right:50px; /* Espacement entre le point et le texte */
    }
    .custom-list {
        direction: rtl; /* Direction du texte de droite à gauche */
    }
</style>
</head>
<body>
<h2 style="margin-left:500px;color: rgb(217, 29, 29); margin-top:80px; font-size:30px;">:يتولى مكتب الصيانة والتسيير القيام بالمهام التالية</h2>
<ul class="custom-list" style="border:2px solid white; border-radius:100px; height:250px;margin-left:70px;margin-right:70px;padding:100px;background-color:#44b7dc;">
    <li>التصفية قبل إعطاء الأمر بالأداء.</li>
    <li>تتبع إنجاز خدمات الصيانة.</li>
    <li>الإشراف على تزويد المؤسسات التعليمية بعدادات الكهرباء والماء الصالح للشرب.</li>
    <li>تتبع تنفيذ صفقات الحراسة والنظافة والبستنة.</li>
    <li>المساهمة في الإعداد المادي لتنظيم الاحتفالات الدينية والوطنية والمدرسية داخل مقر المديرية الإقليمية.</li>
    <li>الإشراف على تدبير حظيرة السيارات واستعمالها.</li>
    <li>ضبط قاعدة المعطيات حول المزودين والأثمان المرجعية.</li>
</ul>

</body>
</html>
