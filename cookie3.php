<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ez-consent@1/dist/themes/box-bottom-left.min.css">
</head>
<body>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/ez-consent@1/dist/ez-consent.min.js"></script>
<script>ez_consent.init(
        {
            is_always_visible: false,       // Always shows banner on load, default: false
            privacy_url: "/privacy",        // URL that "more" button goes to, default: "/privacy/"
            more_button: {
                target_attribute : "_blank",  // Determines what the behavior of the 'more' button is, default: "_blank", opens the privacy page in a new tab
                is_consenting: true           // Determines whether clicking on 'more' button gives consent and removes the banner, default: true
            },
            texts: {
                main: "We use cookies",       // The text that's shown on the banner, default: "This website uses cookies & similar."
                buttons:
                    {
                        ok: "ok",                   // OK button to hide the text, default: "ok"
                        more: "more"                // More button that shows the privacy policy, default "more"
                    }
            }
        });</script>
</body>
</html>