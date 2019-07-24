<?php 
     
    $ip = $_SERVER['REMOTE_ADDR']; // capture their IP address
     
    $arp = "/usr/sbin/arp"; // this is the path to the arp command used to get user MAC address from it's IP address in linux environment execute the arp command to get their mac address 
    $mac = shell_exec("sudo $arp -an " . $ip); 
    preg_match('/..:..:..:..:..:../',$mac , $matches); 
    $mac = @$matches[0]; 
         
    if( $mac === NULL) // if MAC Address couldn't be identified.
    { 
        echo "Access Denied."; 
        exit; 
    } 
?> 

<form method="post" action="process.php"> 
    <input type="hidden" name="mac" value="<?php echo $mac; ?>" /> 
    <input type="hidden" name="ip" value="<?php echo $ip; ?>" /> 
    <input type="submit" value="OK" style="padding:10px 20px;" /> 
</form>