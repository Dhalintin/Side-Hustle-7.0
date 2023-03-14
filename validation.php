<?php

    $age  = 18;
    $pvc = true;
    $ward = '020';
    if($age >= 18){
        if($pvc){
            if($ward == '020'){
                echo 'Voter is eligible to vote';
            }else{
                echo 'Voter is in the wrong ward';
            }
        }else{
            echo 'Voter does not have PVC';
        }
    }else{
        echo 'Voter is not up to the required age';
    }