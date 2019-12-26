<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    
    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap2.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/assets/all2.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    
    
    <!-- Custom styles for this template -->
     <link href="/assets/freelancer.css" rel="stylesheet">
    <?php 
   
$bencana = DB::table('bencanas')->get();

$kegiatan = DB::table('kegiatans')->get();
?>
<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
  <div class="container">
     <a class="navbar-brand js-scroll-trigger" href="#page-top">D-vol </br><h6 style="color:#e87b07;">Disaster Volunteer</h6> </a>
    <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('indexpengelola')}}">Home</a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
          <ul class="navbar-nav  ml-auto mr-0 mr-md-3 my-2 my-md-0">
    
           <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <img style="margin-top: 5px;" src="/assets/user.png">
           </a>
           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"  style="font-family: 'Numans', sans-serif !important;">Logout</a>
        </div>
    </li>

       
      </ul>
    </div>
  </div>
</nav>
 <!-- DataTables Example -->
 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <p style="color: white;"> Relawan</p></div>
            <div class="card-body">
              <div class="table-responsive">
              <?php 


$skalakec = DB::table('skala_kec')->get();
$usia = DB::table('umur')->get();
$skalaben = DB::table('skala_ben')->get();
?>

<?php

foreach ($data as $relawan) {
foreach ($skalakec as $skalakec) {

//skala kecakapan
if( $relawan->skala_kec <= $skalakec->baBiasa ){
  $derajatKB = 1;
}
else if( $relawan->skala_kec > $skalakec->baBiasa && $relawan->skala_kec < (($skalakec->baBiasa+$skalakec->baAhli)/2)){
  $derajatKB = ((($skalakec->baBiasa+$skalakec->baAhli)/2) - $relawan->skala_kec)/((($skalakec->baBiasa+$skalakec->baAhli)/2)-$skalakec->baBiasa);
}
else if( $relawan->skala_kec >= (($skalakec->baBiasa+$skalakec->baAhli)/2)){
  $derajatKB =0;
}
if( $relawan->skala_kec <= $skalakec->baBiasa || $relawan->skala_kec >= $skalakec->bbSAhli){
  $derajatKA = 0;
}
else if( $relawan->skala_kec > $skalakec->baBiasa && $relawan->skala_kec < (($skalakec->baBiasa+$skalakec->baAhli)/2)){
  $derajatKA = ($relawan->skala_kec - $skalakec->baBiasa)/((($skalakec->baBiasa+$skalakec->baAhli)/2)-$skalakec->baBiasa);
}
else if( $relawan->skala_kec > (($skalakec->baBiasa+$skalakec->baAhli)/2) && $relawan->skala_kec < $skalakec->bbSAhli){
  $derajatKA = ($skalakec->bbSAhli - $relawan->skala_kec)/($skalakec->bbSAhli-(($skalakec->baBiasa+$skalakec->baAhli)/2));
}
else if( $relawan->skala_kec = (($skalakec->baBiasa+$skalakec->baAhli)/2)){
  $derajatKA = 1;
}
if( $relawan->skala_kec >= $skalakec->bbSAhli ){
  $derajatKSA = 1;
}
else if( $relawan->skala_kec > (($skalakec->baBiasa+$skalakec->baAhli)/2) && $relawan->skala_kec < $skalakec->bbSAhli){
  $derajatKSA = ($relawan->skala_kec-(($skalakec->baBiasa+$skalakec->baAhli)/2))/($skalakec->bbSAhli-(($skalakec->baBiasa+$skalakec->baAhli)/2));
}
else if( $relawan->skala_kec <= (($skalakec->baBiasa+$skalakec->baAhli)/2)){
  $derajatKSA =0;
}
}
//till here

//umur
foreach ($usia as $usia) {

if( $relawan->umur < $usia->bbDewasa ){
  $derajatR = 1;
}
else if( $relawan->umur >= $usia->bbDewasa && $relawan->umur <= (($usia->baRemaja+$usia->baDewasa)/2)){
  $derajatR = ((($usia->baRemaja+$usia->baDewasa)/2) - $relawan->umur)/((($usia->baRemaja+$usia->baDewasa)/2)-$usia->bbDewasa);
}
else if( $relawan->umur > (($usia->baRemaja+$usia->baDewasa)/2)){
  $derajatR =0;
}

if( $relawan->umur <= $usia->bbDewasa || $relawan->umur >= $usia->baDewasa){
  $derajatD = 0;
}
else if( $relawan->umur > $usia->bbDewasa && $relawan->umur < (($usia->baRemaja+$usia->baDewasa)/2)){
  $derajatD = ($relawan->umur - $usia->bbDewasa)/((($usia->baRemaja+$usia->baDewasa)/2)-$usia->bbDewasa);
}
else if( $relawan->umur > (($usia->baRemaja+$usia->baDewasa)/2) && $relawan->umur < $usia->baDewasa){
  $derajatD = ($usia->baDewasa - $relawan->umur)/($usia->baDewasa-(($usia->baRemaja+$usia->baDewasa)/2));
}
else if( $relawan->umur =(($usia->baRemaja+$usia->baDewasa)/2)){
  $derajatD = 1;
}

if( $relawan->umur >= $usia->baDewasa ){
  $derajatT = 1;
}
else if( $relawan->umur > (($usia->baRemaja+$usia->baDewasa)/2) && $relawan->umur < $usia->baDewasa){
  $derajatT = ($relawan->umur-(($usia->baRemaja+$usia->baDewasa)/2))/($usia->baDewasa-(($usia->baRemaja+$usia->baDewasa)/2));
}
else if( $relawan->umur <= (($usia->baRemaja+$usia->baDewasa)/2)){
  $derajatT =0;
}
}

$a1 = min($derajatR, $derajatKB);
$a2 = min($derajatR, $derajatKA);
$a3 = min($derajatR, $derajatKSA);
$a4 = min($derajatD, $derajatKB);
$a5 = min($derajatD, $derajatKA);
$a6 = min($derajatD, $derajatKSA);
$a7 = min($derajatT, $derajatKB);
$a8 = min($derajatT, $derajatKA);
$a9 = min($derajatT, $derajatKSA);

foreach ($skalaben as $skalaben) {

if($a1 != 0 ){
  $z1 = (($skalaben->baRendah+$skalaben->baSedang)/2)-($a1*((($skalaben->baRendah+$skalaben->baSedang)/2)-$skalaben->baRendah));
}
elseif ($a1 == 0) {
  $z1 = 0;
}
if($a2 != 0 ){
  $z2 = ($a2*((($skalaben->baRendah+$skalaben->baSedang)/2)-$skalaben->baRendah))+$skalaben->baRendah;
}
elseif ($a2 == 0) {
  $z2 = 0;
}
if($a3 != 0 ){
  $z3 = ($a3*($skalaben->bbTinggi-(($skalaben->baRendah+$skalaben->baSedang)/2)))+(($skalaben->baRendah+$skalaben->baSedang)/2);
}
elseif ($a3 == 0) {
  $z3 = 0;
}
if($a4 != 0 ){
  $z4 = ($a2*((($skalaben->baRendah+$skalaben->baSedang)/2)-$skalaben->baRendah))+$skalaben->baRendah;
}
elseif ($a4 == 0) {
  $z4 = 0;
}
if($a5 != 0 ){
  $z5 = ($a3*($skalaben->bbTinggi-(($skalaben->baRendah+$skalaben->baSedang)/2)))+(($skalaben->baRendah+$skalaben->baSedang)/2);
}
elseif ($a5 == 0) {
  $z5 = 0;
}
if($a6 != 0 ){
  $z6 = ($a3*($skalaben->bbTinggi-(($skalaben->baRendah+$skalaben->baSedang)/2)))+(($skalaben->baRendah+$skalaben->baSedang)/2);
}
elseif ($a6 == 0) {
  $z6 = 0;
}
if($a7 != 0 ){
  $z7 = (($skalaben->baRendah+$skalaben->baSedang)/2)-($a7*((($skalaben->baRendah+$skalaben->baSedang)/2)-$skalaben->baRendah));
}
elseif ($a7 == 0) {
  $z7 = 0;
}
if($a8 != 0 ){
  $z8 = ($a2*((($skalaben->baRendah+$skalaben->baSedang)/2)-$skalaben->baRendah))+$skalaben->baRendah;
}
elseif ($a8 == 0) {
  $z8 = 0;
}
if($a9 != 0 ){
  $z9 = ($a3*($skalaben->bbTinggi-(($skalaben->baRendah+$skalaben->baSedang)/2)))+(($skalaben->baRendah+$skalaben->baSedang)/2);
}
elseif ($a9 == 0) {
  $z9 = 0;
}

$Z = (($a1 * $z1)+($a2 * $z2)+($a3 * $z3)+($a4 * $z4)+($a5 * $z5)+($a6 * $z6)+($a7 * $z7)+($a8 * $z8)+($a9 * $z9))/($a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9);



}
}


if($Z <= $skalaben->baRendah){
echo "  </br></br></br>
<p align='center', style='background-color:#f54040'> <border: 1px transparant margin-top:100px color:white text-align:center> $Z % </br> Kami rekomendasikan relawan tersebut menangani Bencana dengan skala Rendah </p>";

}
if($Z > $skalaben->baRendah && $Z<$skalaben->bbTinggi){
  echo "</br></br></br>
  <p align='center', style='background-color:#faf60f'> <border: 1px transparant margin-top:100px color:white text-align:center> $Z % </br> Kami rekomendasikan relawan tersebut menangani Bencana dengan skala Sedang </p>";
}
if($Z > $skalaben->baSedang){
  echo "</br></br></br>
  <p align='center', style='background-color:#6cf56e'> <border: 1px transparant margin-top:100px color:white text-align:center> $Z % </br> Kami rekomendasikan relawan tersebut menangani Bencana dengan skala Tinggi</p>";
}

?>


