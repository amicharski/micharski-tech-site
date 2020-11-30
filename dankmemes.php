<html>
    <head>
        <title>D@nk M3m3s</title>
    </head>
    <body>
        <h1>D@nk M3m3s</h1>
        <form id="form">
            This site is Password Protected: <input id="pass" type="password" />
            <input type="submit" />
        </form>
        <?php
        echo "Hello World";
        ?>
        <script type="text/javascript">
            var form = document.getElementById("form");
            var password = document.getElementById("pass");
            function passwordChecker(){
                if (password.value == "123456"){
                    document.write("Correct Password");
                } else if (password.value != "") {
                    document.write("Wrong Password");
                }
            }
            form.addEventListener("submit", passwordChecker());
            
        </script>
        <div class="memes" style="visibility: hidden">
            <h2 style="color: red">Warning: If you are a sensitive person and get easily offended, please leave this site. <br />
                Some memes on here will offend you.</h2>
        </div>
    </body>
</html>