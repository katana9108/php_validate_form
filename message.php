<?php 
trait Message{
    public function success(){
        echo " Message envoyé avec succès!";
    }

    public function echec(){
        echo ' Quelque chose s\'est mal passer !';
    }
}