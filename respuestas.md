Respuestas EscapeRoomVirtual:

1. Comprobar el estado del firewall (sudo systemctl status iptables)
2. Actualizar todos los paquetes y software (sudo apt-get update && sudo apt-get upgrade)
3. Mostrar las interfaces de red junto a la dirección IP (ifconfig)
4. Reiniciar interfaces de red (sudo service networking restart)
5. Escanear el sistema de archivos completo con la herramienta clamav (sudo clamscan -r /)
6. Desconectar el servidor de la red (sudo ifconfig enp0s3 down)