<!DOCTYLE html>
    <html>
        <head>
            <title>Login</title>
            <?= link_tag(base_url('Design/CSS/page.css')) ?>
        </head>
        <body>
             <div id="WholeWin" class="modal">
                <div class="modal-contentLogIn">
                <span class="close">&times;</span>
                <h1>Login, Please.</h1>
                <?php echo form_open('Water/Login'); ?>
    <!--            <form id="loginForm" role="form" method="post">-->
                    <input class="lg-pwd-text" type="text" name="Email" placeholder="Email" required>
                    <input class="lg-pwd-text" type="password" name="pwd" placeholder="password" required>
                    <button class="button_degn" id="login" type="submit" >Login</button><br>
    <!--                <a href="#" id="sign" onclick="signdisplay()">signup</a>-->
                <?php echo form_close(); ?>
<!--            </form>-->
            
            </div>
        </div>
        
        </body>
    </html>