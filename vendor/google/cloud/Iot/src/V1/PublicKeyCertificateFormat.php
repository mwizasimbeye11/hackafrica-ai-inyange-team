<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace Google\Cloud\Iot\V1;

/**
 * The supported formats for the public key.
 *
 * Protobuf type <code>google.cloud.iot.v1.PublicKeyCertificateFormat</code>
 */
class PublicKeyCertificateFormat
{
    /**
     * The format has not been specified. This is an invalid default value and
     * must not be used.
     *
     * Generated from protobuf enum <code>UNSPECIFIED_PUBLIC_KEY_CERTIFICATE_FORMAT = 0;</code>
     */
    const UNSPECIFIED_PUBLIC_KEY_CERTIFICATE_FORMAT = 0;
    /**
     * An X.509v3 certificate ([RFC5280](https://www.ietf.org/rfc/rfc5280.txt)),
     * encoded in base64, and wrapped by `-----BEGIN CERTIFICATE-----` and
     * `-----END CERTIFICATE-----`.
     *
     * Generated from protobuf enum <code>X509_CERTIFICATE_PEM = 1;</code>
     */
    const X509_CERTIFICATE_PEM = 1;
}

