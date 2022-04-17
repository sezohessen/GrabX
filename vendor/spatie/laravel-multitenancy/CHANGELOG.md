# Changelog

All notable changes to `laravel-multitenancy` will be documented in this file

## 2.3.3 - 2022-02-28

- docs: change method visibility in example by @medvinator in https://github.com/spatie/laravel-multitenancy/pull/326
- added ; in the php code by @MJunaidAhmad in https://github.com/spatie/laravel-multitenancy/pull/329
- Removing typehint for compatibility by @telkins in https://github.com/spatie/laravel-multitenancy/pull/336

**Full Changelog**: https://github.com/spatie/laravel-multitenancy/compare/2.3.2...2.3.3

## 2.3.2 - 2022-01-19

- add support for Laravel 9

## 2.3.1 - 2021-11-29

- Reload Router instance when switching route cache on Laravel Octane by @AlexVanderbist in https://github.com/spatie/laravel-multitenancy/pull/309

**Full Changelog**: https://github.com/spatie/laravel-multitenancy/compare/2.3.0...2.3.1

## 2.3.0 - 2021-11-26

- Add route cache path switcher by @AlexVanderbist in https://github.com/spatie/laravel-multitenancy/pull/308

**Full Changelog**: https://github.com/spatie/laravel-multitenancy/compare/2.2.0...2.3.0

## 2.2.0 - 2021-10-26

- Handle JobRetryRequested queue event and fix (#259)
- 🐛 tenants:artisan backslashes (#296)

## 2.1.1 - 2021-08-18

- add filterCurrent and rejectCurrent to TenantCollection (#275)

## 2.1.0 - 2021-05-04

- add Laravel Octane support

## 2.0.0 - 2021-03-12

- drop support for PHP 7

## 1.6.11 - 2020-12-17

- allow PHP 8

## 1.6.10 - 2020-12-03

- NeedsTenant ability to return or redirect

## 1.6.9 - 2020-09-27

- fix for BroadcastEvent (#142)

## 1.6.8 - 2020-09-24

- add ability to dispatch events tenant aware

## 1.6.7 - 2020-09-07

- add support for Laravel 8

## 1.6.6 - 2020-08-24

- restored check isCurrent from makeCurrent

## 1.6.5 - 2020-08-21

- 🐛 removed check isCurrent from makeCurrent

## 1.6.4 - 2020-08-11

- forget current when making new tenant current

## 1.6.3 - 2020-08-07

- removed $guarded from Tenant model

## 1.6.2 - 2020-08-07

- TenantAware now uses the Tenant model from config

## 1.6.1 - 2020-08-06

- TenantsArtisanCommand now uses TenantAware trait

## 1.6.0 - 2020-08-06

- added `TenantAware`

## 1.5.1 - 2020-07-30

- 🐛 properly handle queued mailables and notification (#78)

## 1.5.0 - 2020-07-23

- database switch fails with misconfigured tenant (#92)

## 1.4.0 - 2020-07-02

- added `execute` for the landlord

## 1.3.0 - 2020-06-25

- added `$tenant->execute($callable)` to execute isolated tenant code (#60)

## 1.2.0 - 2020-06-21

- `tenant:artisan` search field customizable using config (#52)

## 1.1.5 - 2020-06-21

- allow mass assignment when creating a new tenant by default (#57)

## 1.1.4 - 2020-06-17

- improve error handling of tenant aware jobs

## 1.1.3 - 2020-06-01

- always register the tenants artisan command, so it may be called from web requests as well.

## 1.1.2 - 2020-05-24

- remove unused import from config (#20)

## 1.1.1 - 2020-05-21

- use the configured tenant model in artisan command (#17)

## 1.1.0 - 2020-05-18

- fix published migration name
- ask for artisan command if none is given

## 1.0.0 - 2020-05-16

- initial release
