# hotspot_captivity

Building a captive portal for my mobile hotspot.

All the Configurations are done as suitable for Devian Linux(for example, kali or ubuntu)

The Hard Requirement:
-> Two Network Interfaces(Primarily done with a mobile hotspot as the wireless network, and a wifi adapter)
-> A linux machine to make it act as a box router

The Software Requirement:
-> Devian Linux(Primarily done with ubuntu)
-> Linux Iptables, for firewall management 
-> Apache2 Web server for hosting the portal
-> isc-dhcp server for manually assigning ip addresses in certain stages using the protocol DHCP
-> bind9 as the DNS server 
-> MySQL server for managing user Credentials(for authenticative portal)


