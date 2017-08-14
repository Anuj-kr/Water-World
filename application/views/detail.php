<?php include('home.php');
 include('login.php');

 
$check = $this->session->userdata('Email');?>
<?= link_tag(base_url('Design/CSS/detail.css')) ?>
<script src="<?= base_url('Design/JavaSc/login_sign.js')?>"></script>
<?php foreach($name as $nam): ?>
<div style="width:100%;height:92%;border: 2px solid yellow;padding-top:50px">
<div style="width:100%; height:100%; border: 1px solid green;">

<div style="float: left;width:30%;height:100%;border: 1px solid green;">
    <img src="" style="width: 300px; height: 300px; " align="top-left" hspace="80"; >
    <h1 style="color: #008dde; margin-left: 80px;"><?= $nam ?></h1>
    <p>
        <a id="buynow" style="margin-left: 80px; background-color: #FF8C00; color:white "  class="btn  btn-lg" role="button" onclick="Buy_login()">BuyNow</a>
    </p>
    <p id="msg" style="margin-left: 80px; color:red"></p>
</div>
<?php endforeach ?>

<div id="size" style="width:20%; height:100%; border: 1px solid red;float:left; padding-left:30px">   
    <p id="price" ></p>
            <?php foreach($size as $siz):?>
    <button id="but" type="button"><?= $siz->size." liter" ?>"</button>
            <?php endforeach ?>
    
    
</div>
<div id="pin_number" style="width:23%; height:100%; border: 1px solid black; float:left; padding-top:60px;">
    <form id="pincode">
        <input type="text" name="pincode" id="pin" placeholder="pincode" style="height:30px; font-family:sans-serif; font-size:14px;padding:5px 10px 5px 10px;">
        <input type="submit" value="Check" style="height:30px; background-color:#ddd;">
    </form>
<p id="pincheck">Enter Pincode to Check Avaibility</p>
</div>
    
</div>
</div>

<script>
    function Buy_login()
    {
        var l = document.getElementById('WholeWin');
        var log = "<?php echo $this->session->userdata('Email') ?>";
        if(!log)
            {
                l.style.display = "block";
            }
            else{
                
                window.location="<?= base_url('index.php/Buy')?>";
            }
    }
</script>

<script>
    $(function (){
            $("#pincode").submit(function (e){
                        e.preventDefault();
                        var dataString = $("#pincode").serialize();
                        $.ajax({
                        type: "post",
                        url: "<?php echo base_url();?>"+"index.php/Detail/pincode",
                        data: dataString,
                        success: function(data){
                            if(data == 1){
                                document.getElementById('pincheck').innerHTML = "Available";
                            }
                            else{
                                document.getElementById('pincheck').innerHTML = "Not Available";
                            }  
                        }
                     });
                e.stopImmediatePropagation();
                return false;  //stop the actual form post !important!
                });
            });
</script>
<script>
    
  $(function (){
        
            $("but").submit(function (e){
                var x = document.getElementById("but").value;
                    alert(x);
                        e.preventDefault();
//                        var dataString = $("button").val();
                        alert(dataString);
                        $.ajax({
                        type: "post",
                        url: "<?php echo base_url();?>"+"index.php/Detail/price",
                        data: x,
                        success: function(data){
                            alert(data);
                            if(data == 1){
                                document.getElementById('price').innerHTML = "Available";
                            }
                            else{
                                document.getElementById('price').innerHTML = "Not Available";
                            }  
                        }
                     });
                e.stopImmediatePropagation();
                return false;  //stop the actual form post !important!
                });
            });
</script>
