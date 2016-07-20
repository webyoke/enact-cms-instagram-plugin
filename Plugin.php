<?php

class InstagramPlugin extends \Enact\Plugin {



    public function name(){
        return 'Instagram';
    }//name



    public function creator(){
        return 'WebYoke';
    }//creator


    public function website(){
        return 'http://webyoke.com';
    }//website


    public function version(){
        return 1.0;
    }//version


    public function githubLink(){
        return 'https://github.com/webyoke/enact-cms-instagram-plugin';
    }//githubLink


    public function onBoot(){

        enact()->registerAlias('instagram', dirname(__FILE__) . '/');

        require 'vendor/autoload.php';

    }//onBoot



    public function template(){
        return new \InstagramPlugin\Template;
    }//template



    public function fields(){

        return Array(
            new InstagramPlugin\field\InstagramDefinition,
        );

    }//fields



}//InstagramPlugin



return new InstagramPlugin;
