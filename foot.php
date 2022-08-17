<script>
        var menuButton = document.getElementById('menu');
        var navigation = document.getElementById('mainmenu');
    
        menuButton.onclick=function(){
            if(navigation.style.display=="flex"){
                navigation.style.display="none"
            }else{
                navigation.style.display="flex";
            }
        }
        </script>
    </body>
    </html>
       