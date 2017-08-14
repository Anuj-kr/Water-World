var model = document.getElementById('WholeWin');
var signmodel = document.getElementById('SignWholeWin');
var spanclose = document.getElementsByClassName("close")[0];
var spanclose1 = document.getElementsByClassName("closes")[0];


function display()
{
    model.style.display = "block";
    signmodel.style.display = "none";
}
function signdisplay()
{
    signmodel.style.display = "block";
    model.style.display = "none";
    
}
spanclose.onclick = function()
{
    model.style.display = "none";
    
}
spanclose1.onclick = function()
{
    signmodel.style.display = "none";
}


function Buy_login()
    {
        var log = "<?php echo $this->session->userdata('Email') ?>";
        alert('hello');
        if(!log)
            {
                
            }
    }