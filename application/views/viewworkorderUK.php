
<!DOCTYPE html>
<html>
   <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        

        <!-- Le fav and touch icons -->
     
        <!-- Le scripts-->
        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    <head>
     
        <script>

        function Change_to_cwo(){
            document.getElementById(content).innerHTML='<object width="150%" height="150%" type="text/html" data="<?php echo site_url('workflow/createworkorder')?>" ></object>';
  }
        function Change_to_vwo(){
            document.getElementById(content).innerHTML='<object type="text/html" data="test2.html" ></object>';
  }
        function Change_to_canwo(){
            document.getElementById(content).innerHTML='<object type="text/html" data="test3.html" ></object>';
  }
         function Change_to_uwo(){
            document.getElementById(content).innerHTML='<object type="text/html" data="test2.html" ></object>';
  }
        function Change_to_swo(){
            document.getElementById(content).innerHTML='<object type="text/html" data="test3.html" ></object>';
  }
</script>




<style>
                .btn-india {
  background-color: hsl(214, 37%, 28%) !important;
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#7a99c1", endColorstr="#2c4361");
  background-image: -khtml-gradient(linear, left top, left bottom, from(#7a99c1), to(#2c4361));
  background-image: -moz-linear-gradient(top, #7a99c1, #2c4361);
  background-image: -ms-linear-gradient(top, #7a99c1, #2c4361);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #7a99c1), color-stop(100%, #2c4361));
  background-image: -webkit-linear-gradient(top, #7a99c1, #2c4361);
  background-image: -o-linear-gradient(top, #7a99c1, #2c4361);
  background-image: linear-gradient(#7a99c1, #2c4361);
  border-color: #2c4361 #2c4361 hsl(214, 37%, 19.5%);
  color: #fff !important;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.56);
  -webkit-font-smoothing: antialiased;
}
                </style>
                  <style>
            .btn-custom {
  background-color: hsl(0, 69%, 22%) !important;
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#b42121", endColorstr="#5e1111");
  background-image: -khtml-gradient(linear, left top, left bottom, from(#b42121), to(#5e1111));
  background-image: -moz-linear-gradient(top, #b42121, #5e1111);
  background-image: -ms-linear-gradient(top, #b42121, #5e1111);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #b42121), color-stop(100%, #5e1111));
  background-image: -webkit-linear-gradient(top, #b42121, #5e1111);
  background-image: -o-linear-gradient(top, #b42121, #5e1111);
  background-image: linear-gradient(#b42121, #5e1111);
  border-color: #5e1111 #5e1111 hsl(0, 69%, 17%);
  color: #fff !important;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.33);
  -webkit-font-smoothing: antialiased;
}
            </style>
            <style>
            .btn-custom1 {
  background-color: hsl(84, 0%, 31%) !important;
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#8c8c8c", endColorstr="#4f4f4f");
  background-image: -khtml-gradient(linear, left top, left bottom, from(#8c8c8c), to(#4f4f4f));
  background-image: -moz-linear-gradient(top, #8c8c8c, #4f4f4f);
  background-image: -ms-linear-gradient(top, #8c8c8c, #4f4f4f);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #8c8c8c), color-stop(100%, #4f4f4f));
  background-image: -webkit-linear-gradient(top, #8c8c8c, #4f4f4f);
  background-image: -o-linear-gradient(top, #8c8c8c, #4f4f4f);
  background-image: linear-gradient(#8c8c8c, #4f4f4f);
  border-color: #4f4f4f #4f4f4f hsl(84, 0%, 25%);
  color: #fff !important;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.39);
  -webkit-font-smoothing: antialiased;
}
            </style>
            <script src="js/modernizr-2.0.4.js"></script>
            <style>
                body { background:white; }
@-webkit-keyframes 'blink' {
    0% { background: rgba(255,255,0,34.5); }
    50% { background: rgba(255,255,0,0); }
    100% { background: rgba(127,255,0,34.5); }
}
#animate { 
    height: 100px; 
    width: 100px;
}
.cssanimations #animate {
   
    -webkit-animation-direction: normal;
    -webkit-animation-duration: 1s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-name: blink;
    -webkit-animation-timing-function: ease;   
}
            </style>
            <style>
                input {
    -webkit-appearance: none;
    border-radius: 2px;
}
            </style>
            
     </head>       
   
 
    
<?php
//echo $workorderid;
 

 $results = $this->work_model->slotsfilled();
  $slotarray=array();
  $eqid=array();
  
  $i='1';
  $set1="";
  $set2="";
  $set3="";
  $set4="";
  $set5='';
  $set6="";
  $set7='';
  $set8="";
  $set9="";
  $set10="";
  $set11="";
  $set12="";
  $set13="";
  $et1="SLOT 1";
  $et2="SLOT 2";
  $et3="SLOT 3";
  $et4="SLOT 4";
  $et5='SLOT 5';
  $et6="SLOT 6";
  $et7='SLOT 7';
  $et8="SLOT 8";
  $et9="SLOT 9";
  $et10="SLOT 10";
  $et11="SLOT 11";
  $et12="SLOT 12";
  $et13="SLOT 13";
  if($results != false)
      {
  
 foreach ($results as $row): 
           // foreach ($result as $row):
        
                 $slotarray[$i]= "$row->slotnumber";
 
                  $eqid[$i]= "$row->equipmentid";  
                  $wkid[$i]="$row->workorderid";
                  $csize[$i]="$row->containersize";
                    if( $slotarray[$i]=='1') // or if(call())
                 {
                      $set1='greenyellow';
                      $et1='TECHNICAL ID:'.$eqid[$i];
                      $wkid1='WORKORDER ID'.$wkid[$i];
                      
                  }
                  else if($slotarray[$i]=='2')
                  {
                      $set2='greenyellow';
                       $et2='TECHNICAL ID: '.$eqid[$i];
                  }
                  else if($slotarray[$i]=='3')
                  { 
                      $set3='greenyellow';
                       $et3='TECHNICAL ID: '.$eqid[$i];
                  }
                  else if($slotarray[$i]=='4')
                  {
                      $set4='greenyellow';
                       $et4='TECHNICAL ID:  '.$eqid[$i];
                  }
                  else if($slotarray[$i]=='5')
                  {
                      $set5='greenyellow';
                       $et5='TECHNICAL ID: '.$eqid[$i];
                  }
                  else if($slotarray[$i]=='6')
                  {
                      $set6='greenyellow';
                      $et6='TECHNICAL ID:  '.$eqid[$i];
                  }
                  else if($slotarray[$i]=='7')
                  {
                      $set7='greenyellow';
                       $et7='TECHNICAL ID:  '.$eqid[$i];
                  }
                  else if($slotarray[$i]=='8')
                  {
                      $set8='greenyellow';
                       $et8='TECHNICAL ID:  '.$eqid[$i];
                  }
                  else if($slotarray[$i]=='9')
                  {
                      $set9='greenyellow';
                       $et9='TECHNICAL ID:  '.$eqid[$i];
                  }
                  else if($slotarray[$i]=='10')
                  {
                      $set10='greenyellow';
                       $et10='TECHNICAL ID:  '.$eqid[$i];
                  }
                  else if($slotarray[$i]=='11')
                  {
                      $set11='greenyellow';
                       $et11='TECHNICAL ID:  '.$eqid[$i];
                  }
                  else if($slotarray[$i]=='12')
                  {
                      $set12='greenyellow';
                       $et12='TECHNICAL ID:  '.$eqid[$i];
                  }
                  else if($slotarray[$i]=='13')
                  {
                      $set13='greenyellow';
                       $et13='TECHNICAL ID:  '.$eqid[$i];
                  }
                  

                    $i++;
               
            
           endforeach;
      }

  ?>
      
                
    
   
        
<body >
    

<div  style="background-color: lightsalmon;" id="container" style="width:1600px;">

<div id="header" >
<center><h1  style="color:white;margin-bottom:0;background-color:grey;font-weight: BOLD;font-size:30PX; ">SLOT LAYOUT & MANAGEMENT</h1></center></div>

    <div id="menu" class="" style="background-color:grey;height:650px;width:200px;float:left;">
<table>
    
<tr>
    
<td>
 <a <button href="<?php echo site_url('workflow/createworkorder')?>" style="height:50px;width:190px" type="button" class="btn btn-india">Create Workorder</button></a>
                            
                                
</td>
</tr>
<tr>
<td>
<a <button href="<?php echo site_url('workflow/searchwkorder')?>" style="height:50px;width:190px" type="button" class="btn btn-india">Search/Print Workorder</button></a>
</td>
</tr>
<tr>
<td>
<a <button href="<?php echo site_url('workflow/viewinspectioncertificate')?>" style="height:50px;width:190px" type="button" class="btn btn-india">Inspection Certificate</button></a>
</td>
</tr>
<tr>
<td><a
<button  href="<?php echo site_url('workflow/reassignwkorder')?>" type="button"  class="btn btn-india"name="section3" style="height:50px;width:190px">Onrepair workorder</button></a>
</td>
</tr>
<tr>
<td><a
<button href="<?php echo site_url('workflow/currentwkorder')?>" type="button" class="btn btn-india "name="section3" style="height:50px;width:190px"  >Current WorkOrders</button></a>
</td>
</tr>

<tr>
<td>
 <a href="<?php echo site_url('workflow/onrepairview')?>"><button type="button"  style="height:50px;width:190px" class="btn btn-success">Overview</button></a>
                        
</tr>
</table>
</div>


 
<table style="width: 50%;position: absolute;left:20%;top:20%;background-color:white;text-emphasis-color: black;">
<tr>
<td height="123">
    <form id="form121" action="<?php echo site_url('workflow/formview') ?>" method="POST">
         <?php $snum='1' ?>
        <?php $row = $this->work_model->get_by_slotnumber($snum); ?> 
             <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid" value="<?php echo $row->workorderid ?>" id="f21e41" />
         
             <input style="width:200px;" type="hidden" name="sid" width ="70%"id="fe1641" value="<?php echo $row->slotnumber ?>" />
  <input style="width:200px;" type="hidden" name="eqid" width ="70%"id="f7651" value="<?php echo $row->equipmentid ?>" />
 <input style="width:200px;" type="hidden" name="coid" width ="70%"id="co651" value="<?php echo $row->containersize ?>" />
   <input style="width:200px;" type="hidden" name="mid" width ="70%"id="co651" value="<?php echo $row->manufacturer ?>" />          
             <input type="submit" <?php if ($et1=="SLOT 1"){echo 'disabled="" '; }?>  id='<?php echo $set1?>'   name="slot1" style="color:black;border:none;height:60px;width:300px;text-emphasis-color: black;background-color:#2E7091;background-color: <?php echo $set1; ?>;" value="<?php echo $et1 ?>" ></input>
</form>
</td>
<td>
      <form id="form1321" action="<?php echo site_url('workflow/formview2') ?>" method="POST">
         <?php $sn1um='2' ?>
        <?php $row1 = $this->work_model->get_by_slotnumber($sn1um); ?> 
          <input style="width:200px;" type="hidden" name="eqid2" width ="70%"id="f732651" value="<?php echo $row1->equipmentid ?>" />   
          <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid2" value="<?php echo $row1->workorderid ?>" id="41" />
         <input style="width:200px;" type="hidden" name="sid2" width ="70%"id="1641" value="<?php echo $row1->slotnumber ?>" />
         <input style="width:200px;" type="hidden" name="coid2" width ="70%"id="co6543551" value="<?php echo $row1->containersize ?>" />
  <input style="width:200px;" type="hidden" name="mid2" width ="70%"id="cm51" value="<?php echo $row1->manufacturer ?>" /> 
  <input  type="submit" <?php if ($et2=="SLOT 2"){echo 'disabled="" '; }?>  name="slot2" id="<?php echo $set2?>" style="color:black;border:none;height:60px;width:300px;border-width: 2px;text-emphasis-color: black;background-color:#2E7091;background-color: <?php echo $set2; ?>;"  value="<?php echo $et2?>"></input>
</form>
</td>
<td>
    <form id="form1421" action="<?php echo site_url('workflow/formview3') ?>" method="POST">
         <?php $snum3='3' ?>
        <?php $row3 = $this->work_model->get_by_slotnumber($snum3); ?> 
        <input style="width:200px;" type="hidden" name="eqid3" width ="70%"id="f7321651" value="<?php echo $row3->equipmentid ?>" />
             <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid3" value="<?php echo $row3->workorderid ?>" id="431" />
         <input style="width:200px;" type="hidden" name="sid3" width ="70%"id="1631" value="<?php echo $row3->slotnumber ?>" />
 <input style="width:200px;" type="hidden" name="coid3" width ="70%"id="c78751" value="<?php echo $row3->containersize ?>" />
  <input style="width:200px;" type="hidden" name="mid3" width ="70%"id="co687851" value="<?php echo $row3->manufacturer ?>" /> 
  <input type="submit" <?php if ($et3=="SLOT 3"){echo 'disabled="" '; }?>  name="slot3" id="<?php echo $set3?>" style="color:black;border:none;height:60px;width:300px;text-emphasis-color: black;background-color:#2E7091;background-color: <?php echo $set3; ?>;"  value="<?php echo $et3?>"></input>
</form>
</td>
<td>
</tr>
<tr>
    <td>
      <form id="form1521" action="<?php echo site_url('workflow/formview4') ?>" method="POST">
         <?php $snum4='4' ?>
        <?php $row4 = $this->work_model->get_by_slotnumber($snum4); ?> 
          <input style="width:200px;" type="hidden" name="eqid4" width ="70%"id="sxqw351" value="<?php echo $row4->equipmentid ?>" />
             <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid4" value="<?php echo $row4->workorderid ?>" id="431" />
         <input style="width:200px;" type="hidden" name="sid4" width ="70%"id="1631" value="<?php echo $row4->slotnumber ?>" />
 <input style="width:200px;" type="hidden" name="coid4" width ="70%"id="34543651" value="<?php echo $row4->containersize ?>" />
  <input style="width:200px;" type="hidden" name="mid4" width ="70%"id="co6523445451" value="<?php echo $row4->manufacturer ?>" /> 
<input type="submit"  name="slot4" <?php if ($et4=="SLOT 4"){echo 'disabled="" '; }?> id="<?php echo $set4?>" style="color:black;border:none;height:60px;width:300px;text-emphasis-color: black;background-color:#2E7091;background-color: <?php echo $set4; ?>;" value="<?php echo $et4?>"></input>
</form>
    </td>
<td>
      <form id="form1621" action="<?php echo site_url('workflow/formview5') ?>" method="POST">
         <?php $snum5='5' ?>
        <?php $row5 = $this->work_model->get_by_slotnumber($snum5); ?> 
          <input style="width:200px;" type="hidden" name="eqid5" width ="70%"id="87761" value="<?php echo $row5->equipmentid ?>" />
             <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid5" value="<?php echo $row5->workorderid ?>" id="431" />
         <input style="width:200px;" type="hidden" name="sid5" width ="70%"id="1631" value="<?php echo $row5->slotnumber ?>" />
 <input style="width:200px;" type="hidden" name="coid5" width ="70%"id="coa651" value="<?php echo $row5->containersize ?>" />
  <input style="width:200px;" type="hidden" name="mid5" width ="70%"id="cos651" value="<?php echo $row5->manufacturer ?>" /> 
<input type="submit" <?php if ($et5=="SLOT 5"){echo 'disabled="" '; }?>  name="<?php echo site_url('workflow/storewkflow')?>" id="<?php echo $set5?>" style="color:black;text-emphasis-color: black;border:none;height:60px;width:300px;background-color:#2E7091;background-color: <?php echo $set5; ?>;" value="<?php echo $et5?>"</input>
</form>
</td>
<td>
      <form id="form721" action="<?php echo site_url('workflow/formview6') ?>" method="POST">
         <?php $snum6='6' ?>
        <?php $row6 = $this->work_model->get_by_slotnumber($snum6); ?> 
          <input style="width:200px;" type="hidden" name="eqid6" width ="70%"id="34535451" value="<?php echo $row6->equipmentid ?>" />
             <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid6" value="<?php echo $row6->workorderid ?>" id="431" />
         <input style="width:200px;" type="hidden" name="sid6" width ="70%"id="1631" value="<?php echo $row6->slotnumber ?>" />
 <input style="width:200px;" type="hidden" name="coid6" width ="70%"id="co651" value="<?php echo $row6->containersize ?>" />
  <input style="width:200px;" type="hidden" name="mid6" width ="70%"id="cof651" value="<?php echo $row6->manufacturer ?>" /> 
<input type="submit" <?php if ($et6=="SLOT 6"){echo 'disabled="" '; }?> name="slot6" id="<?php echo $set6?>" style="color:black;border:none;height:60px;width:300px;background-color:#2E7091;background-color: <?php echo $set6; ?>;" value="<?php echo $et6?>"></input>
</form>
</td>
</tr>
<tr>
<td height="123">
      <form id="form821" action="<?php echo site_url('workflow/formview7') ?>" method="POST">
         <?php $snum7='7' ?>
        <?php $row7 = $this->work_model->get_by_slotnumber($snum7); ?> 
          <input style="width:200px;" type="hidden" name="eqid7" width ="70%"id="989891" value="<?php echo $row7->equipmentid ?>" />
             <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid7" value="<?php echo $row7->workorderid ?>" id="431" />
         <input style="width:200px;" type="hidden" name="sid7" width ="70%"id="1631" value="<?php echo $row7->slotnumber ?>" />
 <input style="width:200px;" type="hidden" name="coid7" width ="70%"id="cvo651" value="<?php echo $row7->containersize ?>" />
  <input style="width:200px;" type="hidden" name="mid7" width ="70%"id="cco651" value="<?php echo $row7->manufacturer ?>" /> 
<input type="submit" <?php if ($et7=="SLOT 7"){echo 'disabled="" '; }?>  name="slot7" id="<?php echo $set7?>" style="color:black;border:none;height:60px;width:300px;background-color:#2E7091;background-color: <?php echo $set7; ?>;" value="<?php echo $et7?>"></input>
</form>
</td>
<td>
      <form id="form1921" action="<?php echo site_url('workflow/formview8') ?>" method="POST">
         <?php $snum8='8' ?>
        <?php $row8 = $this->work_model->get_by_slotnumber($snum8); ?> 
          <input style="width:200px;" type="hidden" name="eqid8" width ="70%"id="12121" value="<?php echo $row8->equipmentid ?>" />
             <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid8" value="<?php echo $row8->workorderid ?>" id="431" />
         <input style="width:200px;" type="hidden" name="sid8" width ="70%"id="1631" value="<?php echo $row8->slotnumber ?>" />
 <input style="width:200px;" type="hidden" name="coid8" width ="70%"id="cox651" value="<?php echo $row8->containersize ?>" />
  <input style="width:200px;" type="hidden" name="mid8" width ="70%"id="co6z51" value="<?php echo $row8->manufacturer ?>" /> 
<input type="submit" <?php if ($et8=="SLOT 8"){echo 'disabled="" '; }?> name="slot8" id="<?php echo $set8?>" style="color:black;border:none;height:60px;width:300px;background-color:#2E7091;background-color: <?php echo $set8; ?>;" value="<?php echo $et8?>"></input>
</form>
      </td>
<td>
      <form id="form2121" action="<?php echo site_url('workflow/formview9') ?>" method="POST">
         <?php $snum9='9' ?>
        <?php $row9 = $this->work_model->get_by_slotnumber($snum9); ?> 
          <input style="width:200px;" type="hidden" name="eqid9" width ="70%"id="13231" value="<?php echo $row9->equipmentid ?>" />
             <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid9" value="<?php echo $row9->workorderid ?>" id="431" />
         <input style="width:200px;" type="hidden" name="sid9" width ="70%"id="1731" value="<?php echo $row9->slotnumber ?>" />
 <input style="width:200px;" type="hidden" name="coid9" width ="70%"id="cox561" value="<?php echo $row9->containersize ?>" />
  <input style="width:200px;" type="hidden" name="mid9" width ="70%"id="co65z1" value="<?php echo $row9->manufacturer ?>" /> 
<input type="submit" <?php if ($et9=="SLOT 9"){echo 'disabled="" '; }?> name="slot9" id="<?php echo $set9?>" style="color:black;border:none;height:60px;width:300px;background-color:#2E7091;background-color: <?php echo $set9; ?>;" value="<?php echo $et9?>"></input>
</form>
</td>
</tr>
<tr>
<td>
      <form id="form2121" action="<?php echo site_url('workflow/formview10') ?>" method="POST">
         <?php $snum10='10' ?>
        <?php $row10 = $this->work_model->get_by_slotnumber($snum10); ?> 
          <input style="width:200px;" type="hidden" name="eqid10" width ="70%"id="38231" value="<?php echo $row10->equipmentid ?>" />
             <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid10" value="<?php echo $row10->workorderid ?>" id="431" />
         <input style="width:200px;" type="hidden" name="sid10" width ="70%"id="2631" value="<?php echo $row10->slotnumber ?>" />
 <input style="width:200px;" type="hidden" name="coid10" width ="70%"id="cv651" value="<?php echo $row10->containersize ?>" />
  <input style="width:200px;" type="hidden" name="mid10" width ="70%"id="cc651" value="<?php echo $row10->manufacturer ?>" /> 
<input type="submit" <?php if ($et10=="SLOT 10"){echo 'disabled="" '; }?>  name="slot10" id="<?php echo $set10?>" style="color:black;border:none;height:60px;width:300px;background-color:#2E7091;background-color: <?php echo $set10; ?>;" value="<?php echo $et10?>"></input>
</form>
</td>
<td>
      <form id="form2221" action="<?php echo site_url('workflow/formview11') ?>" method="POST">
         <?php $snum11='11' ?>
        <?php $row11 = $this->work_model->get_by_slotnumber($snum11); ?> 
          <input style="width:200px;" type="hidden" name="eqid11" width ="70%"id="22121" value="<?php echo $row11->equipmentid ?>" />
             <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid11" value="<?php echo $row11->workorderid ?>" id="431" />
         <input style="width:200px;" type="hidden" name="sid11" width ="70%"id="3631" value="<?php echo $row11->slotnumber ?>" />
 <input style="width:200px;" type="hidden" name="coid11" width ="70%"id="cx651" value="<?php echo $row11->containersize ?>" />
  <input style="width:200px;" type="hidden" name="mid11" width ="70%"id="c6z51" value="<?php echo $row11->manufacturer ?>" /> 
<input type="submit" <?php if ($et11=="SLOT 11"){echo 'disabled="" '; }?> name="slot11" id="<?php echo $set11?>" style="color:black;border:none;height:60px;width:300px;background-color:#2E7091;background-color: <?php echo $set11; ?>;" value="<?php echo $et11?>"></input>
</form>
</td>
<td>
      <form id="form2321" action="<?php echo site_url('workflow/formview12') ?>" method="POST">
         <?php $snum12='12' ?>
        <?php $row12 = $this->work_model->get_by_slotnumber($snum12); ?> 
          <input style="width:200px;" type="hidden" name="eqid12" width ="70%"id="33231" value="<?php echo $row12->equipmentid ?>" />
             <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid12" value="<?php echo $row12->workorderid ?>" id="431" />
         <input style="width:200px;" type="hidden" name="sid12" width ="70%"id="3731" value="<?php echo $row12->slotnumber ?>" />
 <input style="width:200px;" type="hidden" name="coid12" width ="70%"id="ox561" value="<?php echo $row12->containersize ?>" />
  <input style="width:200px;" type="hidden" name="mid12" width ="70%"id="o65z1" value="<?php echo $row12->manufacturer ?>" /> 
<input type="submit" <?php if ($et12=="SLOT 12"){echo 'disabled="" '; }?> name="slot12" id="<?php echo $set12?>" style="color:black;border:none;height:60px;width:300px;background-color:#2E7091;background-color: <?php echo $set12; ?>;" value="<?php echo $et12?>"></input>
</form>
</td>
</tr>
<tr>
<td height="123">
      <form id="form2421" action="<?php echo site_url('workflow/formview13') ?>" method="POST">
         <?php $snum13='13' ?>
        <?php $row13 = $this->work_model->get_by_slotnumber($snum13); ?> 
          <input style="width:200px;" type="hidden" name="eqid13" width ="70%"id="34231" value="<?php echo $row13->equipmentid ?>" />
             <input type="hidden" style="position:absolute;top:79%;width:71px;height:25px;" name="wokid13" value="<?php echo $row13->workorderid ?>" id="431" />
         <input style="width:200px;" type="hidden" name="sid13" width ="70%"id="3831" value="<?php echo $row13->slotnumber ?>" />
 <input style="width:200px;" type="hidden" name="coid13" width ="70%"id="ox5612" value="<?php echo $row13->containersize ?>" />
  <input style="width:200px;" type="hidden" name="mid13" width ="70%"id="o65z12" value="<?php echo $row13->manufacturer ?>" /> 
<input type="submit" <?php if ($et13=="SLOT 13"){echo 'disabled="" '; }?> name="slot13" id="<?php echo $set13?>" style="color:black;border:none;height:60px;width:300px;background-color:#2E7091;background-color: <?php echo $set13; ?>;" value="<?php echo $et13?>"></input>
</form>
</td>
</tr>
</table>
</div>



 

 
</body>
</html>
