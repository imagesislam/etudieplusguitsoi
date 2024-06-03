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
        font-size:25px;
    }
    .custom-list li:before {
        content: "• "; /* Utilisation du point comme marqueur */
        font-size: 25px; /* Taille de la police pour les points */
        vertical-align: middle;
        margin-right:10px; /* Espacement entre le point et le texte */
    }
    .custom-list {
        direction: rtl; /* Direction du texte de droite à gauche */
    }
</style>
</head>
<body>
<h2 style="margin-left:500px;color: rgb(217, 29, 29); margin-top:80px; font-size:30px;">:يتولى مكتب تتبع وتنفيذ الميزانية القيام بالمهام التالية</h2>
<ul class="custom-list" style="border:2px solid white; border-radius:100px; height:250px;margin-left:100px;margin-right:100px;padding:100px;background-color:#44b7dc;">
    <li>تتبع التحويلات، وضبط وتدوين الاعتمادات المفوضة للمديرية.</li>
    <li>إعداد الوضعية الشهرية والحساب الإداري.</li>
    <li>إعداد البيانات التحليلية الدورية للتتبع المحاسباتي.</li>
    <li>إعداد وثائق إنجاز إجراءات الالتزام.</li>
    <li>إعداد وثائق الأمر بالتحويل وبالأداء.</li>
    <li>تجميع وتدوين الوثائق المحاسباتية بالسجلات المعدة لهذا الغرض.</li>
    <li>صرف مختلف أنواع التعويضات، من مثل: تعويضات التصحيح، وتعويضات التنقل، والتعويضات العينة.</li>
</ul>

</body>
</html>
