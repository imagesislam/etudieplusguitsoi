<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .custom-list {
            list-style: none;
            padding: 0;
        }
        .custom-list li {
            text-align: right;
            font-size:25px;
            margin-right:50px;
            margin-top:30px;
            
        }
        .custom-list li:before {
            content: "• "; /* Remplacer le numéro par un point */
            font-size:35px; /* Augmenter la taille des points */
            vertical-align: middle; /* Pour aligner le point verticalement */
            margin-right:-25px;
            margin-left:6px;

           
        }
        .custom-list {
            direction: rtl; /* Direction du texte de droite à gauche */
        }
    </style>
</head>
<body>
    <h2 style="color: rgb(217, 29, 29); margin-top:80px; font-size:30px; text-align: center;">:تتولى كتابة المصلحة القيام بالمهام التالية</h2>
    <ul class="custom-list" style="margin-left: 70px;margin-right: 70px;border:2px solid white; border-radius:90px; height:150px;padding:50px;background-color:#f6f6f6;">
        <li  >تنظيم الوثائق والمراسلات الواردة من الوزارة أو الأكاديمية</li>
        <li >استقبال كل ما يتعلق بالبريد الوارد من مكتب الضبط وإحالته على السيد رئيس المصلحة لتوجيهه إلى المكاتب المعنية به</li>
    </ul>
</body>
</html>