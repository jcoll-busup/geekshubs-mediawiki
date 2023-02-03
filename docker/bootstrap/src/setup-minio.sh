#!/bin/sh

set -eux

mc alias set minio ${MINIO_URL} ${MINIO_ROOT_USER} ${MINIO_ROOT_PASSWORD}
mc admin user add minio ${MINIO_USER} ${MINIO_PASSWORD}
mc admin user svcacct add --access-key ${MINIO_ACCESS_KEY} --secret-key ${MINIO_SECRET_KEY} minio ${MINIO_USER}
mc mb minio/config-files
mc mb minio/uploads
