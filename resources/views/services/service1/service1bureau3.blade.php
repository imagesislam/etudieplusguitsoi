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
        font-size:20px;
    }
    .custom-list li {
        text-align: right;
    }
    .custom-list li:before {
        content: "• "; /* Utilisation du point comme marqueur */
        font-size:20px; /* Taille de la police pour les points */
        vertical-align: middle;
        padding-right:50px; /* Espacement entre le point et le texte */
      
    }
    .custom-list {
        direction: rtl; /* Direction du texte de droite à gauche */
    }
</style>
</head>
<body>

<h2 style="margin-left:320px;color: rgb(217, 29, 29); margin-top:80px; font-size:30px;">:يتولى مكتب الرخص وتدبير وتحيين المعطيات وتتبع نظام MASIRH القيام بالمهام التالية</h2>
<ul class="custom-list" style="border:2px solid white; border-radius:70px; height:270px;margin-left:30px;margin-right:30px;padding:90px;background-color:#f6f6f6;">
    <li style="  margin-top:20px;">الرخص وتتبع نظام MASIRH:</li>
        <li>استقبال الشواهد الطبية عن طريق السلم الإداري؛</li>
        <li>ضبط و تنظيم الرخص بجميع أنواعها باستثناء رخصة الحج عبر منظومة مسير.</li>
        <li>استثمار الملفات الصحية بتنسيق مع وزارة الصحة, وفي حال الوضعية النظامية غير العادية  ( الإضرابات ) يتم التنسيق مع وزارة الداخلية .</li>
        <li>التكفل بمسطرة تحويل الأجرة</li>
        <li>بتنسيق مع المجلس الصحي بالأكاديمية تتم إحالة ملف الموظف الذي يكثر من التغيبات والشواهد الطبية على أنظار المجلس التأديبي.</li>
        <li>تدبير وتحيين قاعدة المعطيات:</li>
        <li>تتبع نظام ESISE بالتنسيق مع رؤساء المؤسسات التعليمية والذين يكمن دورهم في تحديد ومسك وضعية الموظف على نفس النظام.</li>
        <li>تدبير الوضعيات الإدارية وإحصائها (إلحاق، وضع رهن إشارة، استيداع.</li>
    </ul>
</body>
</html>