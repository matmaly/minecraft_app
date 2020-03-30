# Configure the Oracle Cloud Infrastructure provider with an API Key

variable "tenancy_ocid" {
  type = string
}
variable "user_ocid" {
  type = string
}
variable "fingerprint" {
  type = string
}
variable "private_key_path" {
  type = string
}
variable "region" {
  type = string
}
variable "compartment_id" {
  type = string
}
provider "oci" {
  tenancy_ocid = "var.tenancy_ocid"
  user_ocid = "var.user_ocid"
  fingerprint = "var.fingerprint"
  private_key_path = "var.private_key_path"
  region = "var.region"
}
# Get a list of Availability Domains
data "oci_identity_availability_domains" "ads" {
  compartment_id = "var.tenancy_ocid"
}

# Output the result
output "show-ads" {
  value = "data.oci_identity_availability_domains.ads.availability_domains"
}

