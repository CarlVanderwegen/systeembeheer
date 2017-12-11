;
; BIND data file for local loopback interface
;
$ORIGIN bash.carl-vanderwegen.sb.uclllabs.be.
$TTL	300
@	IN	SOA	ns.bash.carl-vanderwegen.sb.uclllabs.be. admin.bash.carl-vanderwegen.sb.uclllabs.be. (
			  16		; Serial
			 604800		; Refresh
			  3600		; Retry
			2419200		; Expire
			 300 )	; Negative Cache TTL
;


@		IN      NS      ns.carl-vanderwegen.sb.uclllabs.be.


ns		IN	A	193.191.177.139
@               IN      A       193.191.177.139
www  IN  A  193.191.177.139

