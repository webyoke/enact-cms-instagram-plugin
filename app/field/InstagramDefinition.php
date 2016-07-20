<?php
namespace InstagramPlugin\field;

class InstagramDefinition {


    public function name(){
        return 'Instagram';
    }//name



    public function fieldAssets(){
        return Array(
            '/js/jsx/Field.js'
        );
    }//fieldAssets



    public function optionsAssets(){
        return Array(
            '/js/jsx/FieldOptions.js'
        );
    }//optionsAssets



    public function fieldClass(){
        return 'InstagramPlugin\field\Instagram';
    }//fieldClass



}//InstagramDefinition
