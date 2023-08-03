<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        .containe {
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin-bottom: 10%;
            margin-left:15%;
            margin-right:15%;
        }

        .left-content,
        .right-content {
            flex: 1;
            margin: 0; /* Réinitialiser les marges pour enlever l'espace supplémentaire */
        }

        .left-content img {
            width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .containe {
                flex-direction: column;
            }

            .left-content,
            .right-content {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="containe">
        <div class="left-content">
            <img src="IMG/undraw_Portfolio_re_qwm5.png" alt="Image">
        </div>
        <div class="right-content">
            <h3>NOS PRODUITS, VOTRE MARQUE</h3>
            <p>Nous mettons à votre disposition un espace client 100% marque blanche, que vous pouvez fournir à vos clients avec votre propre logo, pour gérer leurs commandes, factures, produits et noms de domaine</p>
        </div>
    </div>
    <div class="containe">
        <div class="left-content">
            <img src="IMG/undraw_online_resume_re_ru7s.png" alt="Image">
        </div>
        <div class="right-content">
            <h3>VOUS ÊTES LIBRE DE FIXER VOS PROFITS</h3>
            <p>Nous fournissons des produits très compétitifs dont vous pouvez modifier le nom et les prix, sans aucune mention de Host Oplus, vous pouvez fixer les marges que vous souhaitez</p>
        </div>
    </div>
</body>
</html>
