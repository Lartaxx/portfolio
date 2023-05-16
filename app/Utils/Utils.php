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

    public static function getProjects() {
        return [
            [
                "name" => "Beggin",
                "description" => "Garry's Mod server pushed on the American roleplay, server totally made by our hands.",
                "image" => "beggin.png",
                "skills" => ["html", "css", "bootstrap", "js", "laravel", "nodejs", "git", "expressjs"],
                "project" => [
                    "image" => "gmod.png"
                ]
            ],
            [
                "slug" => "lost-in-the-shell",
                "name" => "Lost In The Shell",
                "description" => "Hacking trainer for the 42Perpignan school., Association of the school",
                "image" => "lis.png",
                "skills" => ["html", "css", "bootstrap", "js", "laravel", "git", "php"],
            ],
            [
                "name" => "Convertway",
                "description" => "Project of currency conversions, complete vision of these conversions etc.",
                "image" => "convertway.png",
                "skills" => ["html", "css", "js", "laravel", "git"]
            ]
        ];
    }

    public static function getProject($project) {
        $projects = self::getProjects();
        foreach ($projects as $p) {
            if (strtolower($p["name"]) === $project && !isset($p["slug"])) {
                return $p;
            }
            else if (isset($p["slug"]) && strtolower($p["slug"]) === $project) {
                return $p;
            }
        }
        return null;
    }
}