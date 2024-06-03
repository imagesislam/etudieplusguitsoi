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
        margin-bottom: 10px;
        font-size:20px;
        font-weight: bold;
        
    }
    .custom-list li:before {
        content: "• "; /* Utilisation du point comme marqueur */
        font-size:30px; /* Taille de la police pour les points */
        vertical-align: middle;
        padding-right:40px; /* Espacement entre le point et le texte */
    }
    .custom-list {
        direction: rtl; /* Direction du texte de droite à gauche */
    }
    .center-content {
    text-align: center;
}

.custom-list {
    text-align: right; /* Pour aligner le texte de la liste à droite */
}

</style>
</head>
<body>
    <div class="center-content">
        <h2 style="margin-left:100px;color: rgb(217, 29, 29); margin-top:80px; font-size:30px;">:يتولى مكتب الأرشيف القيام بالمهام التالية</h2>
        <ul class="custom-list" style="border:2px solid white; border-radius:100px; height:180px;margin-left:10px;margin-right:10px;padding:100px;background-color:#44b7dc;">
            <li>استقبال ملفات الموظفين الجدد على المديرية وذلك بمراسلة المديرية السابقة للمعني اعتمادا على محضر الالتحاق (الدخول) وتسجيلها.</li>
            <li>في حال انتقال الموظف إلى مديرية أخرى يتكفل المكتب بإرسال ملفه الإداري إلى مديرية الاستقبال.</li>
            <li>ترتيب الوثائق الخاصة بالموظفين ضمن ملفاتهم الإدارية.</li>
            <li>تبليغ نسخ من القرارات والوضعيات إلى المعنيين بالأمر أو المصالح الإدارية.</li>
        </ul>
    </div>
    
</body>
</html>    