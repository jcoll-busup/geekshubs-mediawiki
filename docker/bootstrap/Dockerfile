# syntax=docker/dockerfile:1

# ==============================================================================
# Image dependencies
#
FROM ubuntu:jammy AS base-image

# ==============================================================================
# Provision stage
#
FROM base-image AS provision-image

ARG DEBIAN_FRONTEND=noninteractive
ARG TZ=UTC

RUN <<RUNCMD
#
# Abort upon encountering any error
#
set -eux

#
# Install any necessary dependencies
#
apt-get update
apt-get install -y --no-install-recommends ca-certificates curl netcat-openbsd

#
# Install minio
#
curl https://dl.min.io/client/mc/release/linux-amd64/mc --create-dirs\
 -o /usr/local/bin/mc

chmod +x /usr/local/bin/mc

#
# Clean up wasted space.
#
rm -rf /var/lib/apt/lists/*
RUNCMD

WORKDIR /usr/local/lib/bootstrap
COPY ./docker/bootstrap/src /usr/local/lib/bootstrap
