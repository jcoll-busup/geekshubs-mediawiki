target "baseimage-php" {
    context = "docker/mediawiki-baseimage-php"
    tags = [
        "jcollbusup/mediawiki-baseimage-php:latest"
    ]
}