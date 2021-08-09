<?php


namespace App\Domain\Support;


class Helpers
{

    public static function gradeStep() : array
    {
        return [
            '01', '02', '03', '04', '05',
        ];
    }


    public static function gradeLevel() : array
    {
        return [
            '08', '09', '10', '12', '13', '14', '15', '16', '17'
        ];
    }


    public static function departments() : array
    {
        $departments = [
            'software engineering',
            'hardware maintenance & helpdesk',
            'infrastructure system maintenance',
            'system evaluation & implementation'
        ];
        asort($departments);
        return $departments;
    }


    public static function cadres() : array
    {
        $cadres = [
            'program analyst',
            'chief program analyst',
            'data processing officer',
        ];
        asort($cadres);
        return $cadres;
    }


    public static function competence() : array
    {
        return [
            'novice', 'intermediate', 'professional',
        ];
    }


    public static function areaOfInterests() : array
    {
        $aoi = [
            'computer hardware' => [
                'covers installation, maintenance and other aspects'
            ],
            'networking' => [
                'covers installation, management, design & administration'
            ],
            'software development' => [
                'all things desktop, web & mobile development'
            ],
            'artificial intelligence' => [],
            'database administration' => [],
            'cyber security' => [],
            'data science' => [],
            'system administration' => [
                'all things virtual systems and servers'
            ],
            'Internet of Things' => [],
            'cloud computing' => [],
            'project management' => []
        ];
        asort($aoi);
        return $aoi;
    }
}
