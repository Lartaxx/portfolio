<?php 

namespace App\Utils;

class Utils {
    public static function convertSkill($skill) {
        switch ($skill) {
            case "html": {
                return "HTML";
                break;
            }
            case "css": {
                return "CSS";
                break;
            }
            case "js": {
                return "JS";
                break;
            }
            case "nodejs": {
                return "NodeJS";
                break;
            }
            case "git": {
                return "Git";
                break;
            }
            case "laravel": {
                return "Laravel";
                break;
            }
            case "php": {
                return "PHP";
                break;
            }
            case "expressjs": {
                return "ExpressJS";
                break;
            }

            case "bootstrap": {
                return "Bootstrap";
                break;
            }
        }
    }
}