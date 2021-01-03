<?php
function palindrome($number){
    
$temp=$number;
    
$new=0;
    
while(floor($temp)){
        
$d=$temp%10;
        
$new=$new*10+$d;
        
$temp=$temp/10;
    
}
    
if($new==$number){
       
return 1;
    
}
    
else{
        
return 0;
    
}
}
    
$real=67789;
    
if (palindrome($real)){
   
    echo"Palindrome";
  
  }
    
else{
    
echo"non Palindrome";
   
 }
    
?>