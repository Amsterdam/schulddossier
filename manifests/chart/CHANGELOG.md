# Changelog

## [1.5.2](https://github.com/Amsterdam/helm-application/compare/1.5.1...1.5.2) (2023-06-14)


### Bug Fixes

* **ingress:** Ability to use existing certificate secret ([cba0854](https://github.com/Amsterdam/helm-application/commit/cba0854f971ccc7a2def3b00bfdd8b4aeb265b58))

## [1.5.1](https://github.com/Amsterdam/helm-application/compare/1.5.0...1.5.1) (2023-06-13)


### Bug Fixes

* **workload identity:** Added label to the pods in order to use workload identity ([40a2545](https://github.com/Amsterdam/helm-application/commit/40a25459044e3a1f0776e79e20ade28c269054e0))
* **workload identity:** When using workload identity, explicitly disable pod identity and vm identity ([35cc212](https://github.com/Amsterdam/helm-application/commit/35cc212882f19a5dc7170328cf5078d11d46bec5))

## [1.5.0](https://github.com/Amsterdam/helm-application/compare/1.4.3...1.5.0) (2023-05-31)


### Features

* **keyvault:** Switch to workload identity as default instead of vm identity ([6fea023](https://github.com/Amsterdam/helm-application/commit/6fea02349da5945b997f1b2d318670d46330a153))
* **pod:** Added possibility to configure a serviceaccount for deploy,job,cronjobs ([b4e6fe8](https://github.com/Amsterdam/helm-application/commit/b4e6fe8d4342ef40eb2eb1488015f23a43bbf028))
* **serviceaccount:** Added the possibility to add serviceaccounts ([4285703](https://github.com/Amsterdam/helm-application/commit/428570323613884b85d214957b5dd2688d98f413))


### Bug Fixes

* **autoscale:** Autoscaler had a minimum of 3 replicas, this is now min+1 ([67313a6](https://github.com/Amsterdam/helm-application/commit/67313a694b70d185090b70eed70d43d51c9a206c))

## [1.4.3](https://github.com/Amsterdam/helm-application/compare/1.4.2...1.4.3) (2023-05-10)


### Bug Fixes

* **pod:** Added uniq filter to make sure we dont end up with duplicate volumes ([4b0a6df](https://github.com/Amsterdam/helm-application/commit/4b0a6df623cbe5aa30411661eab89d1aa01d83f9))
* **pod:** Image should now be inherited properly from the deployment and global definition ([cbc2e7a](https://github.com/Amsterdam/helm-application/commit/cbc2e7a693b94b405c37d865ef212724b205d876))
* **pods:** Securitycontext values (bools) could not be changed within deployments ([2b3f80c](https://github.com/Amsterdam/helm-application/commit/2b3f80c9fc07f068ed9086e599a842bcaf92dec5))

## [1.4.2](https://github.com/Amsterdam/helm-application/compare/1.4.1...1.4.2) (2023-05-10)


### Bug Fixes

* **deployment:** Inherit secrets in the containers that are defined on the resources ([44a3368](https://github.com/Amsterdam/helm-application/commit/44a336849c4f3112baa55b51e848cfefdc9ac945))

## [1.4.1](https://github.com/Amsterdam/helm-application/compare/1.4.0...1.4.1) (2023-05-10)


### Bug Fixes

* **deployment:** Allow env vars defined on deployment level, they will be used as default for all containers, same for resources ([ff8a59d](https://github.com/Amsterdam/helm-application/commit/ff8a59da174398631ba0e0cc3baf717b679c90b6))

## [1.4.0](https://github.com/Amsterdam/helm-application/compare/1.3.1...1.4.0) (2023-05-10)


### Features

* **deployment:** Made it possible to have multiple containers per pod ([5bd0f13](https://github.com/Amsterdam/helm-application/commit/5bd0f13a0caa4e5fb3dc17a4c37c3456030863fb))
* **secrets:** Allow for easier simple secret manipulation with --set by using key value instead of a list[map] ([30f6565](https://github.com/Amsterdam/helm-application/commit/30f6565ce5045a3fcbbfd9fb64c5fb572658cc1b))

## [1.3.1](https://github.com/Amsterdam/helm-application/compare/1.3.0...1.3.1) (2023-04-24)


### Bug Fixes

* **cicd:** Added unittests ([bccd727](https://github.com/Amsterdam/helm-application/commit/bccd72779a8f7e93b3d58b1425f3e66241d62038))

## [1.3.0](https://github.com/Amsterdam/helm-application/compare/1.2.3...1.3.0) (2023-04-18)


### Features

* **storage:** Added persistent volume claim manifest ([d4c2cbe](https://github.com/Amsterdam/helm-application/commit/d4c2cbe92281dfa8d8d81a82eda931815cef3aaf))

## [1.2.3](https://github.com/Amsterdam/helm-application/compare/1.2.2...1.2.3) (2023-04-18)


### Bug Fixes

* **helpers:** Make sure we deepcopy before we merge to not override the original ([31deed8](https://github.com/Amsterdam/helm-application/commit/31deed85ad801183b39a11b9aa3aa80a196b01bd))

## [1.2.2](https://github.com/Amsterdam/helm-application/compare/1.2.1...1.2.2) (2023-04-18)


### Bug Fixes

* **helpers:** We now merge using mergeoverwrite in order to allow a null value to delete the default value ([87354ca](https://github.com/Amsterdam/helm-application/commit/87354ca6903f18301c25afb426e66a18cf4ddbf2))

## [1.2.1](https://github.com/Amsterdam/helm-application/compare/1.2.0...1.2.1) (2023-04-18)


### Bug Fixes

* **secrets:** Allow for secrets to be disabled ([1ac4681](https://github.com/Amsterdam/helm-application/commit/1ac4681f89d5e04b4964979b8e243e03820fed40))

## [1.2.0](https://github.com/Amsterdam/helm-application/compare/1.1.0...1.2.0) (2023-04-05)


### Features

* **cicd:** Updated github actions to run tests on PR, release-please on merge in main and publishing charts on tags ([895ae27](https://github.com/Amsterdam/helm-application/commit/895ae27741e5041e126859c160cb9a334cb131ae))
* **job:** Added ttlSecondsAfterFinished as an option ([33c68cb](https://github.com/Amsterdam/helm-application/commit/33c68cb249f16ad6bf8c767a7986579917100571))


### Bug Fixes

* **cicd:** Update actions for releasing ([4e1b79c](https://github.com/Amsterdam/helm-application/commit/4e1b79c5e97476c05036b4fd7de11120746073f4))

## [1.2.0](https://github.com/Amsterdam/helm-application/compare/1.1.0...1.2.0) (2023-04-05)


### Features

* **cicd:** Updated github actions to run tests on PR, release-please on merge in main and publishing charts on tags ([8d4c1ac](https://github.com/Amsterdam/helm-application/commit/8d4c1acf4ad2d295c05136b172679ae73122db75))
* **job:** Added ttlSecondsAfterFinished as an option ([33c68cb](https://github.com/Amsterdam/helm-application/commit/33c68cb249f16ad6bf8c767a7986579917100571))


### Bug Fixes

* **cicd:** Dont tag with the v prefix ([cb96de7](https://github.com/Amsterdam/helm-application/commit/cb96de7007e26bc3f827a12caf22597bc05bc7d3))
* **cicd:** Fix names of github actions ([3b9e884](https://github.com/Amsterdam/helm-application/commit/3b9e8846721f8c109c85318faaf0ce9ca29291d8))

## [1.4.0](https://github.com/Amsterdam/helm-application/compare/v1.3.0...1.4.0) (2023-04-05)


### Features

* **cicd:** Updated github actions to run tests on PR, release-please on merge in main and publishing charts on tags ([4a34567](https://github.com/Amsterdam/helm-application/commit/4a3456743c6c3b75f77103aefa55667749b22c50))
* **job:** Added ttlSecondsAfterFinished as an option ([33c68cb](https://github.com/Amsterdam/helm-application/commit/33c68cb249f16ad6bf8c767a7986579917100571))


### Bug Fixes

* **cicd:** Dont tag with the v prefix ([a9731c5](https://github.com/Amsterdam/helm-application/commit/a9731c5b232f1000363f0fe2573f226f467a502b))
* **cicd:** Fix names of github actions ([590bb62](https://github.com/Amsterdam/helm-application/commit/590bb621891b575c260ecc46b8eec92629809b29))
* **cicd:** Let the push target rely on the build target ([fa27df3](https://github.com/Amsterdam/helm-application/commit/fa27df32229387975d53de2c5b44496cc51ba156))
* **cicd:** Only publish full semver ([4e88ef1](https://github.com/Amsterdam/helm-application/commit/4e88ef1e6fd097bb6607ffc76ecbd8cec36fdace))

## [1.3.0](https://github.com/Amsterdam/helm-application/compare/v1.2.1...1.3.0) (2023-04-05)


### Features

* **cicd:** Updated github actions to run tests on PR, release-please on merge in main and publishing charts on tags ([4a34567](https://github.com/Amsterdam/helm-application/commit/4a3456743c6c3b75f77103aefa55667749b22c50))
* **job:** Added ttlSecondsAfterFinished as an option ([33c68cb](https://github.com/Amsterdam/helm-application/commit/33c68cb249f16ad6bf8c767a7986579917100571))


### Bug Fixes

* **cicd:** Dont tag with the v prefix ([a9731c5](https://github.com/Amsterdam/helm-application/commit/a9731c5b232f1000363f0fe2573f226f467a502b))
* **cicd:** Fix names of github actions ([590bb62](https://github.com/Amsterdam/helm-application/commit/590bb621891b575c260ecc46b8eec92629809b29))
* **cicd:** Let the push target rely on the build target ([fa27df3](https://github.com/Amsterdam/helm-application/commit/fa27df32229387975d53de2c5b44496cc51ba156))

## [1.2.1](https://github.com/Amsterdam/helm-application/compare/1.2.0...1.2.1) (2023-04-05)


### Bug Fixes

* **cicd:** Fix names of github actions ([590bb62](https://github.com/Amsterdam/helm-application/commit/590bb621891b575c260ecc46b8eec92629809b29))
* **cicd:** Let the push target rely on the build target ([fa27df3](https://github.com/Amsterdam/helm-application/commit/fa27df32229387975d53de2c5b44496cc51ba156))

## [1.2.0](https://github.com/Amsterdam/helm-application/compare/1.1.0...1.2.0) (2023-04-05)


### Features

* **cicd:** Updated github actions to run tests on PR, release-please on merge in main and publishing charts on tags ([4a34567](https://github.com/Amsterdam/helm-application/commit/4a3456743c6c3b75f77103aefa55667749b22c50))
* **job:** Added ttlSecondsAfterFinished as an option ([33c68cb](https://github.com/Amsterdam/helm-application/commit/33c68cb249f16ad6bf8c767a7986579917100571))


### Bug Fixes

* **cicd:** Dont tag with the v prefix ([a9731c5](https://github.com/Amsterdam/helm-application/commit/a9731c5b232f1000363f0fe2573f226f467a502b))
