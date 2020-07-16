<div align="center">

![](https://i.imgur.com/XcOoJBj.png)

</div>

<h1 align="center">element119 | IP Ban List</h1>

<div align="center">

![status](https://img.shields.io/badge/status-active-5fc238.svg)
![github release](https://img.shields.io/github/v/release/pykettk/ip-ban-list?color=ffbf00&label=version)
![github release date](https://img.shields.io/github/release-date/pykettk/ip-ban-list?color=8b32a8&label=last%20release)
![magento](https://img.shields.io/badge/Magento-2.3.*-ec6611.svg)
![php](https://img.shields.io/badge/PHP->=7.0-5870c7.svg)
![license](https://img.shields.io/badge/license-MIT-ff00dd.svg)
![packagist downloads](https://img.shields.io/packagist/dt/element119/ip-ban-list?color=ff0000)

</div>

---

<div align="center">

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://paypal.me/pykettk)

</div>

---

## 📝 Table of Contents
- [Requirements](#%EF%B8%8F-requirements)
- [Installation](#-installation)
- [Updating](#-updating)
- [Uninstallation](#-uninstallation)
- [Features](#%EF%B8%8F-features)
- [User Guide](#-user-guide)

<br/>

## ⛓️ Requirements
- Magento 2.3.*
- PHP >=7.0
- element119/core *

<br/>

## 🔌 Installation
Run the following command to *install* this module:
```bash
composer require elemen119/ip-ban-list
php bin/magento module:enable Element119_Core Element119_IpBanList
php bin/magento setup:di:compile
php bin/magento static:content:deploy
php bin/magento setup:upgrade --keep-generated
```

<br/>

## ⏫ Updating
Run the following command to *update* this module:
```bash
composer update element119/ip-ban-list
php bin/magento module:enable Element119_Core Element119_IpBanList
php bin/magento setup:di:compile
php bin/magento static:content:deploy
php bin/magento setup:upgrade --keep-generated
```

<br/>

## ❌ Uninstallation
Run the following command to *uninstall* this module:
```bash
composer remove element119/ip-ban-list
php bin/magento module:enable Element119_Core Element119_IpBanList
php bin/magento setup:di:compile
php bin/magento static:content:deploy
php bin/magento setup:upgrade --keep-generated
```

<br/>

## ✔️ Features
This module...

<br/>

## 📚 User Guide
...

<br/>

<h2 align="center">&copy; Kiel Pykett</h2>
