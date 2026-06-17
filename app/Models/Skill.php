<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'category',
        'level',
    ];

    protected $casts = [
        'level' => 'integer',
    ];

    public function getIconClassAttribute()
    {
        $name = strtolower($this->name);
        $category = strtolower($this->category ?? '');

        $map = [
            'html' => 'html5-plain',
            'html5' => 'html5-plain',
            'css' => 'css3-plain',
            'css3' => 'css3-plain',
            'javascript' => 'javascript-plain',
            'js' => 'javascript-plain',
            'typescript' => 'typescript-plain',
            'php' => 'php-plain',
            'laravel' => 'laravel-plain-wordmark',
            'react' => 'react-original',
            'vue' => 'vuejs-plain',
            'vuejs' => 'vuejs-plain',
            'node' => 'nodejs-plain',
            'nodejs' => 'nodejs-plain',
            'python' => 'python-plain',
            'java' => 'java-plain',
            'git' => 'git-plain',
            'mysql' => 'mysql-plain',
            'postgres' => 'postgresql-plain',
            'postgresql' => 'postgresql-plain',
            'docker' => 'docker-plain',
            'tailwind' => 'tailwindcss-plain',
            'sass' => 'sass-original',
            'bootstrap' => 'bootstrap-plain',
            'figma' => 'figma-plain',
        ];

        foreach ([$name, $category] as $key) {
            if (isset($map[$key])) {
                return $map[$key];
            }
        }

        return 'code-plain';
    }

    public function getLevelLabelAttribute()
    {
        $level = $this->level ?? 0;

        if ($level >= 80) {
            return 'Mastered';
        }

        if ($level >= 55) {
            return 'Advanced';
        }

        if ($level >= 30) {
            return 'Intermediate';
        }

        return 'Beginner';
    }
}
