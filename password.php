<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<body style="width:100vw; margin:auto;  background-color: lightblue;">

<h3 style="text-align:center; font-weight:bold">Reset Password</h3>
<div class="row" style="width:98%; margin:auto">
<h3 style="text-align:center;">Answer Security Questions From Below to Proceed...</h3>
   <div class="container" style="display:flex; align-items:center; justify-content:center; flex-direction:column">
       <h4>What is Your Pet Animal Name ?</h4>
       <input id="input" style="border-radius: 7px;" type="text"/>
       <button id="myButton" style="background: #3d94df; margin-top: 10px; border-radius: 7px;" href="index.php">Proceed</button>
   </div>
</div>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        if(document.getElementById("input").value != "" ){
            location.href = "index.php";
        };
    };
</script>
<?php include 'footer.php'; ?>