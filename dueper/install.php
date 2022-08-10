<?php

namespace Dueper;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Install {
    public static function start() {
        echo "Welcome to the Dueper Installer. \n";
        echo "This will install the Headless starter. \n";

        // config
        $name= strtolower(Install::getDir());
        $wd = getcwd();
        $themeReference="dueper/muxt-craft-cms-starter=dev-master";
        $thNS = "git@gitlab.com:dueper";
        $RED = "tput setaf 1";
        $GREEN = "tput setaf 2";
        // endconfig

        $greenprint = function($text) {
            echo ("\033[32m".$text."\n \033[39m");
        };
        $redprint = function($text) {
            echo ("\033[31m".$text."\n \033[39m");
        };

        if (!(file_exists($wd."/".$name."-craft"))) {
        //exexcute everything only if file does not exist yet

        // preliminary functions
        $prepare = function() use ($wd, $themeReference, $name) {
            echo ("Install beginning.... \n");
            chdir($wd);
            echo shell_exec ("chmod +x dueper-close.sh");
            echo shell_exec ("cp ./.env.example .env");
            echo shell_exec ('mkdir '. $name . '-craft');
            echo shell_exec ('mkdir '. $name . '-nuxt');
            echo ("Installing the Nuxt Craft Headless \n");
            echo shell_exec ("composer create-project ".$themeReference." ./" . $name ."-nuxt --remove-vcs --no-secure-http --repository='http://packagist.dev.dueper.net/' -s dev");
            echo ("Moving the Craft installation \n");

        };
        // $fixGitignore = function() use ($wd, $greenprint, $redprint) {
        //     echo ("Fixing the .gitignore file \n");
        //     if (file_exists($wd."/.gitignore")) {
        //         $gitIgnore = file_get_contents ($wd."/.gitignore");
        //         $gitIgnore = $gitIgnore.PHP_EOL."dueper/*".PHP_EOL;
        //         file_put_contents($wd."/.gitignore", $gitIgnore);
        //         $greenprint("Success");
        //     }
        //     else { $redprint(".gitignore missing"); }
        // };
        // $themeRename = function() use ($name, $wd, $greenprint, $redprint) {
        //     echo ("Fixing the Theme \n");
        //     if (file_exists($wd."/web/app/themes/dueper-theme")) { 
        //         rename ($wd."/web/app/themes/dueper-theme", $wd."/web/app/themes/".$name."-theme");
        //         $greenprint ("Theme directory successfully renamed with project name");
        //      }
        //     else { $redprint("Theme directory not found"); }
        // };
        // $themeFix = function() use ($name, $wd, $greenprint, $redprint) {
        //     echo ("Fixing the Theme composer.json, styles.css, package.json \n");
        //     $myFile = $wd."/web/app/themes/".$name."-theme/composer.json";
        //     $myFile2 = $wd."/web/app/themes/".$name."-theme/package.json";
        //     $myFile3 = $wd."/web/app/themes/".$name."-theme/resources/style.css";
        //     if (file_exists($myFile)) { 
        //         $composerContent = file_get_contents ($myFile);
        //         $composerContent = str_replace("dueper-theme/thor-theme", "dueper-theme/".$name."-theme", $composerContent);
        //         file_put_contents ($myFile, $composerContent);
        //         $greenprint ("Theme composer.json successfully updated");
        //      }
        //     else { $redprint ("Theme composer.json missing or theme directory not found"); }
        //     if (file_exists($myFile2)) { 
        //         $packageContent = file_get_contents ($myFile2);
        //         $packageContent = str_replace("thor-theme", $name."-theme", $packageContent);
        //         file_put_contents ($myFile2, $packageContent);
        //         $greenprint ("Theme package.json successfully updated");
        //      }
        //     else { $redprint ("Theme package.json missing or theme directory not found"); }
        //     if (file_exists($myFile3)) { 
        //         $styleContent = file_get_contents ($myFile3);
        //         $styleContent = str_replace("Thor", $name." Theme", $styleContent);
        //         file_put_contents ($myFile3, $styleContent);
        //         $greenprint ("Theme style.css successfully updated");
        //      }
        //     else { $redprint ("Theme style.css missing or theme directory not found"); }
        // };
        // $themeInitRepo = function() use ($name, $wd, $thNS, $greenprint, $redprint) {
        //     echo ("Initializing the theme Repository \n");
        // if (file_exists($wd."/web/app/themes/".$name."-theme")) {
        //     chdir($wd."/web/app/themes/".$name."-theme");
        //     echo shell_exec("git init");
        //     echo shell_exec("git add .");
        //     echo shell_exec("git commit -m 'Automatic Commit'");
        //     echo shell_exec("git push -u ".$thNS."/".$name."-theme.git master");
        //     echo shell_exec("git remote add origin ".$thNS."/".$name."-theme.git");
        //     echo shell_exec("git push -u origin master");
        //     echo shell_exec("git checkout -b develop");
        //     echo shell_exec("git push -u origin develop");
        //     $greenprint ("Theme repository correctly initialized");
        //     return true;
        // }
        // else {
        //     $redprint ("Theme directory not found");
        //     return false;
        //     }
        // };
        // $themeComposerConfig = function() use ($name, $wd, $thNS, $greenprint, $redprint) {
        //     echo ("Removing the theme folder \n");
        //     chdir($wd);
        //     if (file_exists($wd."/web/app/themes/".$name."-theme")) {
        //         echo shell_exec ("rm -rf ".$wd."/web/app/themes/".$name."-theme");
        //         echo shell_exec ("composer config repositories.".$name."-theme git ".$thNS."/".$name."-theme.git");
        //         echo shell_exec ("composer require dueper-theme/".$name."-theme dev-master");
        //         $greenprint ("Theme folder correctly removed");
        //     }
        //     else { $redprint ("Error: cannot config composer for theme"); }
        // };
        // $muRename = function() use ($name, $wd, $greenprint, $redprint) {
        //     echo ("Fixing the MU \n");
        // if (file_exists($wd."/web/app/mu-plugins/dueper-mu")) { 
        //     rename ($wd."/web/app/mu-plugins/dueper-mu", $wd."/web/app/mu-plugins/".$name."-mu");
        //     $greenprint ("MU directory successfully renamed with project name");
        //  }
        // else { $redprint ("MU directory not found"); }
        // };
        // $muFix = function() use ($name, $wd, $greenprint, $redprint) {
        //     echo ("Fixing the MU composer.json and thor-mu.php files \n");
        //     $myFile = $wd."/web/app/mu-plugins/".$name."-mu/composer.json";
        //     $myFile2 = $wd."/web/app/mu-plugins/".$name."-mu/thor-mu.php";
        //     if (file_exists($myFile)) { 
        //         $composerContent = file_get_contents ($myFile);
        //         $composerContent = str_replace("dueper-plugin/thor-mu", "dueper-plugin/".$name."-mu", $composerContent);
        //         file_put_contents ($myFile, $composerContent);
        //         $greenprint ("MU composer.json successfully updated");
        //      }
        //     else { $redprint ("MU composer.json missing or MU directory not found"); }
        //      if (file_exists($myFile2)) { 
        //         $thorMuPhp = file_get_contents ($myFile2);
        //         $thorMuPhp = str_replace("Thor Must Have",ucfirst($name)." Must Have", $thorMuPhp);
        //         file_put_contents ($myFile2, $thorMuPhp);
        //         $greenprint ("MU thor-mu.php successfully updated");
        //      }         
        //     else { $redprint ("MU thor-mu.php missing or MU directory not found"); }
        // };
        // $muInitRepo = function () use ($name, $wd, $muNS, $greenprint, $redprint) {
        //     echo ("Initializing the MU Repository \n");
        //     if (file_exists($wd."/web/app/mu-plugins/".$name."-mu")) {
        //         chdir($wd."/web/app/mu-plugins/".$name."-mu");
        //         echo shell_exec("git init");
        //         echo shell_exec("git add .");
        //         echo shell_exec("git commit -m 'Automatic Commit'");
        //         echo shell_exec("git push -u ".$muNS."/".$name."-mu.git master");
        //         echo shell_exec("git remote add origin ".$muNS."/".$name."-mu.git");
        //         echo shell_exec("git push -u origin master");
        //         echo shell_exec("git checkout -b develop");
        //         echo shell_exec("git push -u origin develop");
        //         $greenprint ("MU repository correctly initalized");
        //         return true;
        //     }
        //     else {
        //         $redprint ("Theme directory not found");
        //         return false;
        //     }
        // };
        // $muComposerConfig = function () use ($name, $wd, $muNS, $greenprint, $redprint) {
        //     echo ("Removing the mu folder \n");
        //     chdir($wd);
        //     if (file_exists($wd."/web/app/mu-plugins/".$name."-mu")) {
        //         echo shell_exec ("rm -rf ".$wd."/web/app/mu-plugins/".$name."-mu");
        //         echo shell_exec ("composer config repositories.".$name."-mu git ".$muNS."/".$name."-mu.git");
        //         echo shell_exec ("composer require dueper-plugin/".$name."-mu dev-master");
        //         $greenprint ("MU folder correctly removed");
        //     }
        //     else { $redprint ("Error: cannot config composer for mu"); }
        // };
        // $wpFix = function () use ($name, $wd, $greenprint, $redprint) {
        //     echo ("Fixing the wp composer.json \n");
        //     $myFile = $wd."/composer.json";
        //     if (file_exists($myFile)) { 
        //         $composerContent = file_get_contents ($myFile);
        //         $composerContent = str_replace("dueper/starter-wp", "dueper/".$name."-wp", $composerContent);
        //         file_put_contents ($myFile, $composerContent);
        //         $composerContent = file_get_contents ($myFile);
        //         $greenprint ("WP composer.json successfully updated");
        //      }
        //     else { $redprint ("CRITICAL: WP composer.json missing"); }
        // };
        // $wpInitRepo = function () use ($name, $wd, $wpNS, $greenprint, $redprint) {
        //     echo ("Inizializing the Project Repository \n");
        //     chdir($wd);
        //     echo shell_exec("git init");
        //     echo shell_exec("git add .");
        //     echo shell_exec("git commit -m 'Automatic Commit'");
        //     shell_exec("git push -u ".$wpNS."/".$name."-wp.git master");
        //     echo shell_exec("git remote add origin ".$wpNS."/".$name."-wp.git");
        //     echo shell_exec("git push -u origin master");
        //     echo shell_exec("git checkout -b develop");
        //     echo shell_exec("git push -u origin develop");
        //     $greenprint ("WP repository correctly initialized");
        // };
        
        $prepare(); //preliminary functions
        // $fixGitignore(); //puts the installer into the gitignore
        // $themeRename(); //rename dueper-theme into myproject-theme
        // $themeFix(); //changes style.css, composer.json and package.json in the theme files
        // $themeOk = $themeInitRepo(); //sets the remote repository with current theme
        // if ($themeOk) $themeComposerConfig(); //renove the theme directory, composer config, composer require
        // $muRename(); // rename dueper-muplugin into myproject-muplugin
        // $muFix(); //changes thor-mu.php and composer.json in the MU files
        // $muOk = $muInitRepo(); //sets the remote repository with current MU
        // if ($muOk) $muComposerConfig(); //renove the MU directory, composer config, composer require
        // $wpFix(); //changes composer.json in the root 
        // $wpInitRepo(); //sets the remote repository with current wp
        }
    }

    public static function getDir() {
        $path = "..";
        $latestTime = 0;
        $dir = dir($path);

        while ( false !== ($entry = $dir->read())) {
            $filepath = "{$path}/{$entry}";

            if (is_dir($filepath) && ($entry !== ".") && filectime($filepath) > $latestTime) {
                $latestTime = filectime($filepath);
                $latestDir = $entry;
            }
        }
        return $latestDir;
    }
}
