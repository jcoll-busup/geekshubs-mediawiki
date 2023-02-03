docker_build(
    'mediawiki-bootstrap',
    context='./',
    dockerfile='./docker/bootstrap/Dockerfile',
    only=['./docker/bootstrap'],
    live_update=[
        sync('./docker/bootstrap/', '/usr/local/lib/bootstrap/')
    ],
)

docker_build(
    'mediawiki-backend',
    context='./',
    dockerfile='./docker/backend/Dockerfile',
    target='build-image',
    only=['./src/'],
)

k8s_yaml(kustomize('k8s/overlays/development'))

k8s_resource('minio', port_forwards='39090:9090')
k8s_resource('mysql', port_forwards='33306:3306')
k8s_resource('frontend', port_forwards='30080:80')
