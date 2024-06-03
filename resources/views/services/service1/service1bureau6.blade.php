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
        font-size:23px;
    }
    .custom-list li:before {
        content: "• "; /* Utilisation du point comme marqueur */
        font-size:25px; /* Taille de la police pour les points */
        vertical-align: middle;
        padding-right:40px; /* Espacement entre le point et le texte */
    }
    .custom-list {
        direction: rtl; /* Direction du texte de droite à gauche */
    }
</style>
</head>
<body>
    <h2 style="margin-left:490px;color: rgb(217, 29, 29); margin-top:80px; font-size:30px;">:يتولى مكتب البرمجة والصفقات القيام بالمهام التالية</h2>
    <ul class="custom-list" style="border:2px solid white; border-radius:100px; height:330px;margin-left:0px;margin-right:0px;padding:100px;background-color:#f6f6f6;">
        <li style="margin-top:-40px;">ضبط حاجيات المديرية الإقليمية والمؤسسات التعليمية بتنسيق مع مصالح المديرية الإقليمية والمكاتب المستقلة والمؤسسات التعليمية.</li><br>
        <li>إعداد مشروع الميزانية ومخطط تنفيذها، بتنسيق مع الأطراف المعنية.</li>
        <li>احتساب الكلفة ووضع وتحيين قاعدة للأثمان المرجعية.</li>
        <li>إعداد الصفقات وطلبات العروض.</li>
        <li>الإعلان عن طلبات العروض في الموقع الرسمي العمومي للصفقات ونشره في جريدتين وطنيتين إحداهما باللغة الفرنسية والأخرى باللغة العربية.</li><br>
        <li>الإعلان عن نتائج الصفقات.</li>
        <li>إعداد وتحديد وتنفيذ سندات الطلب.</li>
        <li>إعداد الأمر بانطلاق الأشغال، أو إنجاز الخدمات.</li>
        <li>المساهمة في لجنة التسلم، ومراقبة إنجاز الخدمات.</li>
        <li>ضبط قاعدة للمعطيات حول المتدخلين الخارجيين في عمليات التموين بالمعدات والمستلزمات والخدمات، وكذا الدراسات والبناء.</li>
        <li>إعداد ملفات صرف تعويضات التنقل، وتغيير الإقامة بالمملكة، والساعات الإضافية، وتأطير التكوينات والتدريب، وتسليمها لمكتب تنفيذ الميزانية.</li>
    </ul>
    

</body>
</html>
