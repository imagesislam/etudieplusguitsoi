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
        font-size:30px; /* Taille de la police pour les points */
        vertical-align: middle;
        margin-right:40px; /* Espacement entre le point et le texte */
    }
    .custom-list {
        direction: rtl; /* Direction du texte de droite à gauche */
    }

</style>
</head>
<body>
    <h2 style="margin-left:600px;color: rgb(217, 29, 29); margin-top:80px; font-size:30px;">:يتولى مكتب الممتلكات القيام بالمهام التالية</h2>
    <ul class="custom-list" style="border:2px solid white; border-radius:100px; height:220px;margin-left:10px;margin-right:10px;padding:100px;background-color:#44b7dc;">
        <li>تدبير الممتلكات المنقولة وغير المنقولة الموضوعة تحت تصرف المديرية الاقليمية والمحافظة عليها.</li>
            <li>المشاركة في لجان اقتناء الأراضي الصالحة لبناء المؤسسات التعليمية وتتبع المساطر المعمول بها في هذا الشأن.</li>
            <li>دراسة المراسلات الواردة على المصلحة في شان الترامي والتطاول على حرمة المؤسسات التعليمية، وكذلك الملفات الخاصة برفع اليد عن البقع الأرضية.</li><br>
            <li>دراسة المراسلات الخاصة باجتثاث الأشجار.</li>
            <li>تتبع عملية إسناد السكنيات وإحالة ملفات المحتلة منها على مصلحة الشؤون القانونية والتواصل والشراكة.</li>
            <li>إعداد محضر بتنسيق مع مكتب التجهيز والبناءات بخصوص حالة السكنيات غير الصالحة.</li>
        </ul>
    </div>
</body>
</html>    