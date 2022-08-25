<!doctype html>
<html lang="HU">
    <head>
        <meta charset="utf-8">

        <title>Laravel Vue CRUD Application</title>
     
    </head>
    <body>
    <title>Laravel 9 with vue html</title>

<?php
class spiri
{
$kapjo=0;
$kaprossz=0;
$adjo=0;
$adrossz=0;
   public function ad($nepesseg)
   {
    $spiri=rand(0,count($nepesseg) );
    $action=rand(1, 3);
switch ($action) {
    case 1:
        $this->adjo++;
        $nepesseg[$spiri]->$kapjo++;
        break;
    case 2:
          $this->adrossz++;
          $nepesseg[$spiri]->$kaprossz++;
        break;   
}
 return $nepesseg;
   } 
}
$spiriszam=10;
$ciklus=100;
$nepesseg=[];,

public function teremt()
{
 for ($i=0; $i <$spiriszam ; $i++) { 
    $nepesseg[$i]=new spiri();
 }

} 

public function time()
{
 for ($i=0; $i <$ciklus ; $i++) { 

    foreach ($nepesseg as $spiri) {
        $nepesseg= $spiri->ad($nepesseg);
    }
 }

 teremt();
 time();

} 
?>


<h3> Spiriszam: {{ $spiriszam }}</h3>
<h3> ciklus: {{ $ciklus }}</h3>

@foreach ($nepesseg as $piri)
    <h3>ID:  {{ $loop->index}}, jó ad/kap: {{ $spiri->adjo }} / {{ $spiri->kapjo }}    
                                roszz ad/kap: {{ $spiri->adrossz}} / {{ $spiri->kaprossz }}      
</h3>
@endforeach







       <!-- <div id="app"> -->
      <!--   @{{ egyes }} -->
        <!-- </div> -->
     
       <!-- <script src="{{asset('js/app.js')}}"></script> -->
    </body>
</html>