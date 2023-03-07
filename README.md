Misiones Escape Room Hacker Edition:
1. Comprobar el estado del firewall (sudo systemctl status iptables)
2. Muestra las interfaces de red junto a la dirección IP (ifconfig)
3. Reiniciar interfaces de red (sudo service networking restart)
4. Desconecta el servidor de la red (sudo ifconfig enp0s3 down)
5. Actualizar todos los paquetes y software ("sudo apt-get update && sudo apt-get upgrade)
6. Escanea el sistema de archivos completo con la herramienta clamav (sudo clamscan -r /)