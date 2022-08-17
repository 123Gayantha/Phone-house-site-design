</head>

<body>
    <header>
        <div id="d1" class="wrapper">
            <img src="header/logo.svg" alt="logo" id="logo">
            <div id="d2">
                <nav id="mainmenu">
                    <a href="index.php" class="links"<?php if($pagename=='home') echo  'id="current-page" ';?>>Home</a>
                    <span>|</span>
                    <a href="phones.php" class="links"<?php if($pagename=='phones') echo  'id="current-page" ';?> >Phones &amp; Accessories</a>
                    <span>|</span>
                    <a href="contact.php" class="links"<?php if($pagename=='contact') echo  'id="current-page" ';?> >Contact Us</a>
                </nav>
                <img src="header/menu-icon.svg" alt="menu" id="menu">
            </div>
        </div>
    </header>