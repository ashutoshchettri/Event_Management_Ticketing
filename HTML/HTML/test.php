<?php
session_start();
?>
<body>
<?php
            
            $image_card=$_SESSION['event_card'];
            echo '<img style="height:100px; width:200px;" src="'.$_SESSION['event_card'].'">';
            
            
             ?>  
</body>