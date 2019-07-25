 <?php
    $server_name="hostname";
    $domain_name="example.com";
    $site_name="Betty's Wireless Netwrok";

    $arp = "/usr/sbin/arp"; //Path to the arp command on the local server
    $user = "/var/lib/users"; //Keep track of user
    
    if($_SERVER['SERVER_NAME'] != "$server_name.$domain_name")
    {
        header("location:https://$server_name.$domain_name/index.php?add=".urlencode($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URL']));
        exit;
    } 
    //check if we've been redirected by firewall to here
     

