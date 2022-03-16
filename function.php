<?php if(isset($_POST['submit'])): ?>
<?php
$ranna = $_POST['ranna__op'];
$bisana = $_POST['bisana__op'];
$rag = $_POST['rag__op'];
$ukun = $_POST['ukun__op'];
$thala = $_POST['thala__op'];
$mittha = $_POST['mittha__op'];

function RANNA(){
$zero = 0;
    $five = 5;
    switch( $GLOBALS ['ranna']){
          case 'r_five':
            return $five;
            break;
            case 'r_zero':
                return $zero;
                break;
    }
}
function BISANA(){
$zero = 0;
    $five = 5;
    switch( $GLOBALS ['bisana']){
          case 'b_five':
            return $five;
            break;
            case 'b_zero':
                return $zero;
                break;
    }
}
function RAG(){
$zero = 0;
    $five = 5;
    switch( $GLOBALS ['rag']){
          case 'rag_five':
            return $five;
            break;
            case 'rag_zero':
                return $zero;
                break;
    }
};
function UKUN(){
$zero = 0;
    $five = 5;
    switch( $GLOBALS ['ukun']){
          case 'u_five':
            return $five;
            break;
            case 'u_zero':
                return $zero;
                break;
    }
}
function THALA(){
$zero = 0;
    $five = 5;
    switch( $GLOBALS ['thala']){
          case 't_five':
            return $five;
            break;
            case 't_zero':
                return $zero;
                break;
    }
};
function MITTHA(){
$zero = 0;
    $five = 5;
    switch( $GLOBALS ['mittha']){
          case 'm_five':
            return $five;
            break;
            case 'm_zero':
                return $zero;
                break;
    }
}

// RANNA();
// echo "<br>";
// BISANA();
// echo "<br>";

// RAG();
// echo "<br>";

// UKUN();
// echo "<br>";

// THALA();
// echo "<br>";

// MITTHA();

$mark_one = (int) RANNA();
$mark_two =(int)  BISANA();
$mark_three = (int) RAG();
$mark_four = (int) UKUN();
$mark_five = (int) THALA();
$mark_six = (int) MITTHA();

$total__mark = $mark_one + $mark_two + $mark_three + $mark_four + $mark_five + $mark_six;

if($total__mark==30){
   $output= "আপনি খুবই ভাগ্যবান & বউয়ের ভালোবাসা পাবেন";
}elseif($total__mark < 30 && $total__mark>=20){
    $output= "আপনি দ্রুত বাকি কাজগুলো শিখেনেন ";
}elseif($total__mark < 20 && $total__mark>=10){
    $output= "আপনার কপালে শনি আছে";
}elseif($total__mark < 10 && $total__mark>=0){
    $output= "আপনার কপালে বউয়ের ভালোবাসা নেই";
}
$output_cmt = "<h2>  আপনি পেয়েছেন : <span>". $total__mark . " নম্বর </span></h2>";


?>
<?php endif; ?>