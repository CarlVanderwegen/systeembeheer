;
; BIND data file for local loopback interface
;
$ORIGIN carl-vanderwegen.sb.uclllabs.be.
$TTL	300
@	IN	SOA	ns.carl-vanderwegen.sb.uclllabs.be. admin.carl-vanderwegen.sb.uclllabs.be. (
			    141		; Serial
			 2m		; Refresh
			  86400		; Retry
			2419200		; Expire
			 300 )	; Negative Cache TTL
;
;
@		IN      NS      ns.carl-vanderwegen.sb.uclllabs.be.
@		IN      NS      ns1.uclllabs.be.
@		IN      NS      ns2.uclllabs.be.
;@		IN      NS      ns.brecht-decuyper.sb.uclllabs.be. 
;@		IN	NS	ns.kelvin-schoofs.sb.uclllabs.be.
;@		IN	NS	ns.ben-desmet.sb.uclllabs.be.

ns		IN	A	193.191.177.139
@		IN      A       193.191.177.139
www		IN      A       193.191.177.139
www1		IN      A       193.191.177.139
www2		IN      A       193.191.177.139
test		IN      A       193.191.177.254

secure     	IN      A   	193.191.177.139

supersecure     IN      A   	193.191.177.139
mx	     	IN      A   	193.191.177.139
@	     	IN      MX	10	mx.carl-vanderwegen.sb.uclllabs.be.

ns		IN	AAAA	2001:6a8:2880:a077::8B
mx		IN	AAAA	2001:6a8:2880:a077::8B
@		IN      AAAA	2001:6a8:2880:a077::8B

bash     	IN      NS   	ns.carl-vanderwegen.sb.uclllabs.be.

