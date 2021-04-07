<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <script  src = " https://cdn.jsdelivr.net/gh/manucaralmo/GlowCookies@3.1/src/glowCookies.min.js "></script >
        <script>
            glowCookies . start ( 'fr',  {
            style : 2 ,
            analytics : 'G-FH87DE17XF',
            facebookPixel : '990955817632355',
            policyLink: "https://yourlink.com",
            border : 'none' ,
            position : 'right' ,
            customScript: [{ type : 'custom' ,  position : 'body' , content : `console.log ('my custom js');` }],
            bannerDescription : 'banner desc ' ,
            bannerLinkText : ' texte du lien de la bannière ' ,
            bannerBackground : ' # 000 ' ,
            bannerColor : ' #fafafa ' ,
            bannerHeading : ' <h2>Bonjour c\'est moi Cookies </h2> ' +
                            '<p>Nous utilisons nos propres cookies et ceux de tiers pour personnaliser le contenu et analyser ' +
                            'le trafic Web.En savoir plus sur les cookies</p>' ,
            acceptBtnText : 'Accepter' ,
            accepterBtnColor : 'white' ,
            accepterBtnBackground : 'green' ,
            rejeterBtnText : 'rejeter',
            rejeterBtnBackground : 'white',
            rejeterBtnColor : 'red',
            manageText : 'texte des cookies'
        });
        </script>
</body>
</html>