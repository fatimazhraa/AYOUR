
<!DOCTYPE html>
<html lang="fr">
<head>
    <style>

        .objectif {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 50px;
            background-color: #fff;
            border-radius: 10px;
            margin-bottom:10%;
            margin-right:10%;
  margin-left:10%;
        }

        .obj {
            text-align: center;
            flex-basis: 100%;
            padding: 20px;
            margin-bottom: 10px;
        }

        .obj h2 {
            font-size: 30px;
            color: #333;
            margin-bottom: 20px;
        }

        .obj p {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
        }

        .desc {
            display: flex;
            flex-basis: 100%;
            align-items: center;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 10px;
            margin-top: 20px;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .animated-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .animated-list li {
            font-size: 16px;
            color: #333;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s ease-in-out forwards;
            animation-delay: 0.3s;
        }

        .animated-list li:last-child {
            border-bottom: none;
        }

        .image {
            flex: 1;
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInRight 0.5s ease-in-out forwards;
            animation-delay: 0.3s;
        }

        .image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInRight {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
<div class="objectif">
    <div class="obj">
        <h2>Nous vous créons un site internet clés en main</h2>
        <p>De nombreuses fonctionnalités disponibles. Réalisez vos objectifs en demandant l'ajout de fonctionnalités utiles pour votre site internet. Vous pourrez en ajouter plus tard si vous n'avez pas besoin maintenant.</p>
    </div>
    <div class="desc">
        <div class="content">
            <ul class="animated-list">
                <li>Design responsive adapté à tous les supports : PC, smartphone, tablette ...</li>
                <li>Contrôle total de votre site via un accès administrateur.</li>
                <li>Installation d’un chat pour engager la conversation avec vos visiteurs.</li>
                <li>Installation et configuration d’un blog dans votre site pour partager votre expertise.</li>
                <li>Installation d'applications indispensables d'optimisation, gestion des cookies …</li>
                <li>Couverture d’accueil, images catégories, bannières,  etc...</li>
            </ul>
        </div>
        <div class="image">
            <img src="IMG/Capture d'écran 2023-07-12 201603.png" alt="Sample Image">
        </div>
    </div>
</div>
</body>
</html>
