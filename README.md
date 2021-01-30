<p align="center">
  <a href="https://puneetgopinath.github.io/Sanitizers"><img src="images/Sanitizers-logo-transparent.png" alt="Sanitizers logo" style="width:400;height:200;"></a>
</p>

<h2 align="center">Sanitizers</h2>

<p align="center">
  Quickly Sanitize user data<br>
  <i><u>v1.0.0</u></i>
  <br><br>
  <a href="https://puneetgopinath.github.io/Sanitizers"><b>Explore Sanitizers Docs</b></a> &raquo;
  <br><br>
  <a href="https://github.com/PuneetGopinath/Sanitizers/issues/new?template=bug_report.md">Report bug</a> • 
  <a href="https://github.com/PuneetGopinath/Sanitizers/releases">Releases</a> • 
  <a href="https://github.com/PuneetGopinath/Sanitizers/issues/new?template=feature_request.md">Request feature</a>
</p>

# Table of contents

 * [Quick Start](#quick-start)
 * [Status](#status)
 * [PHP Support](#php)
 * [Contributing](#contribute)
 * [NOTES](#notes)

<h2><a name="quick-start">Quick Start</a></h2>

- #### Clone the repo:
`git clone https://github.com/PuneetGopinath/Sanitizers.git`

- ### What is Sanitize ??
Sanitize is a function to check (and remove) harmful data from user input which can harm the software.<br>
Sanitizing user input is the most secure method of user input validation to strip out anything that is not on the whitelist.

- ### Usage
Just include the file and Sanitize the user input.
Example Usage in php:

```
    <?php
    include("Sanitizers.php");

    $sanitize = new Sanitizer();
    echo $sanitize->Username($_GET['username']);
    ?>
```

<h2><a name="php">PHP Support</a></h2>
These are versions Which currently support... 7.3.0 - 7.3.26, 7.4.0 - 7.4.14, 8.0.0 - 8.0.1

<h2><a name="contribute">Contributing</a></h2>
See the <a href="https://github.com/PuneetGopinath/Sanitizers/tree/main/.github/CONTRIBUTING.md">CONTRIBUTING.md</a> file.

<h2><a name="notes">NOTES</a></h2>

See the [NOTES.md](https://github.com/PuneetGopinath/Sanitizers/blob/main/NOTES.md) file.

<h2><a name="status">Status</a></h2>

[![Github All Releases](https://img.shields.io/github/downloads/PuneetGopinath/Sanitizers/total.svg)]()
[![GitHub stars](https://img.shields.io/github/stars/PuneetGopinath/Sanitizers)](https://github.com/PuneetGopinath/Sanitizers/stargazers)
[![GitHub issues](https://img.shields.io/github/issues/PuneetGopinath/Sanitizers)](https://github.com/PuneetGopinath/Sanitizers/issues)
[![GitHub license](https://img.shields.io/github/license/PuneetGopinath/Sanitizers)](https://github.com/PuneetGopinath/Sanitizers/blob/main/LICENSE)
[![GitHub package.json dynamic](https://img.shields.io/github/package-json/description/PuneetGopinath/Sanitizers)]()
[![GitHub release (latest by date)](https://img.shields.io/github/v/release/PuneetGopinath/Sanitizers)]()
![Snyk Vulnerabilities for GitHub Repo](https://img.shields.io/snyk/vulnerabilities/github/PuneetGopinath/Sanitizers)
[![GitHub top language](https://img.shields.io/github/languages/top/PuneetGopinath/Sanitizers)]()
[![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/PuneetGopinath/Sanitizers)]()
[![GitHub language count](https://img.shields.io/github/languages/count/PuneetGopinath/Sanitizers)]()
[![GitHub package.json dynamic](https://img.shields.io/github/package-json/keywords/PuneetGopinath/Sanitizers)]()
![GitHub repo size](https://img.shields.io/github/repo-size/PuneetGopinath/Sanitizers)
