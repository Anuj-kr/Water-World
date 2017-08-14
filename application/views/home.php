
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title>Water World </title>
    <link rel = "stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=satisfy" rel = "stylesheet" type="text/css"/>
    <?= link_tag(base_url('Design/CSS/page.css'))?>
    <script src=" http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js "></script>
<!--    <script src=" //base_url('Design/JavaSc/login_sign.js')?>"></script>-->
    <script src=" http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js "></script>
<!--    <link href="{% static 'css/bootstrap.min.css' %}" rel="stylesheet" , type="text/css"/>-->
    
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
        
    <div id="SignWholeWin" class="modal">
        <div class="modal-contentSignUp">
            <span class="closes">&times;</span>
            <h2>Create an account !</h2>
            <?php echo validation_errors();?>
            <?php echo form_open('Water/signup'); ?>
<!--            <form id="sighupForm" role="form" method="POST">-->
                
                <input class="lg-pwd-text" type="text" name="first" placeholder="First Name" required>
                <input class="lg-pwd-text" type="text" name="last" placeholder="Lasr name" required>
                <input class="lg-pwd-text" type="text" name="Email" placeholder="Email" required>
                <input class="lg-pwd-text" type="password" name="pwd" placeholder="password" required>
                <button class="button_degn" id="sighup"  name="signup"type="submit" >Signup </button><br>
<!--            </form>-->
            <?php echo form_close(); ?>
            
        </div>    
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-top" >
        <a class="navbar-brand " href="<?= base_url('index.php/water') ?>">Water World</a>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right" style="margin-right: 20px;">
            <li>
             <?php 
                    if(!$this->session->userdata('Email')){
                        echo '<li><a href="#" id="sign" onclick="signdisplay()" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        </li>';
               
                        echo '<li><a id="log" href="#" onclick="display()">
                            <span class="glyphicon glyphicon-log-in " aria-hidden="true"></span> Login
                        </a></li>';
                    }
                    else
                    {
//                        $this->load->helper('string');
                        echo anchor('Water/logout', 'logout');
                    }
            ?>
            </li>
        </ul>
    </nav>
    
    <script src="<?= base_url('Design/JavaSc/login_sign.js')?>"></script>
    <br><br>
</body>
</html>
