 ---
 friendly_urls: false
 ---
 <!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Not Found (404) - DAH5 PermaLink Service</title>
        
        <style type="text/css">
            *, *::before,
            *::after
            {
                box-sizing: border-box;
            }
            
            html,
            body
            {
                font-family: system-ui, sans-serif;
                font-size: 1.1rem;
                background-color: #eee;
                color: #333; font-weight: 500;
            }
            
            a
            {
                color: #000;
                font-weight: 600;
            }
            
            h1 a
            {
                text-decoration: none;
                font-weight: 700;
            }
            
            .container
            {
                max-width: 50rem;
                margin: 0 auto;
                padding: 1rem;
            }
            
            @media ( prefers-color-scheme: dark )
            {
                html,
                body
                {
                    background-color: #111;
                    color: #ccc;
                }
                
                a
                {
                    color: #fff;
                }
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <h1><a href="/">DAH5 PermaLink Service</a></h1>
            <hr>
            <h2>Not Found (404)</h2>
            <p>Unfortunately, the requested PermaLink does not exist. Please check and try again.</p>
            <p>If you need help or experience issues, please email the Web Master: <span class="email-address">webmaster [at] dah5 [dot] me [dot] uk</span>.</p>
        </div>
        
        <script type="text/javascript">
            var email_addresses = document.getElementsByClassName( 'email-address' );
            
            for( var e = 0; e < email_addresses.length; e++ )
            {
                var email_adddress = email_addresses[ e ].innerHTML.replaceAll( ' [at] ', '@' ).replaceAll( ' [dot] ', '.' );
                email_addresses[ e ].innerHTML = '<a href="mailto:' + email_adddress + '" target="_blank">' + email_adddress + '</a>';
            }
        </script>
    </body>
</html>
